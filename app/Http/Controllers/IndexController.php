<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Railken\Amethyst\Contracts\DataBuilderContract;
use Railken\Amethyst\Contracts\EventContract;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user('api');

        $endpoints = Collection::make(Route::getRoutes())
        ->filter(function ($route) use ($user) {
            $middleware = isset($route->action['middleware']) ? $route->action['middleware'] : null;

            if (!is_array($middleware)) {
                $middleware = [$middleware];
            }

            if (!in_array('api', $middleware) && !in_array('auth:api', $middleware)) {
                return false;
            }

            if (in_array('auth:api', $middleware) && $user == null) {
                return false;
            }

            if (in_array('admin', $middleware) && $user->role !== 'admin') {
                return false;
            }

            return true;
        })
        ->sortBy(function ($route) {
            return $route->uri;
        })
        ->map(function ($route) {
            return [
                'methods' => $route->methods,
                'uri'     => $route->uri !== '/' ? '/'.$route->uri : '/',
            ];
        })->values()->toArray();

        return [
            'name'        => config('api.name'),
            'url'         => config('api.url'),
            'description' => config('api.description'),
            'version'     => config('api.version'),
            'endpoints'   => $endpoints,
            'app'         => [
                'events' => array_merge(
                    $this->findCachedClasses('app', EventContract::class),
                    $this->findCachedClasses('vendor/railken/amethyst-*/src', EventContract::class)
                ),
                'data_builders' => array_merge(
                    $this->findCachedClasses('app', DataBuilderContract::class),
                    $this->findCachedClasses('vendor/railken/amethyst-*/src', DataBuilderContract::class)
                ),
            ],
        ];
    }

    public function findCachedClasses($directory, $subclass)
    {
        $key = 'api.info.classes:'.$directory.$subclass;

        $value = Cache::get($key, null);

        if ($value === null) {
            $value = $this->findClasses($directory, $subclass);
        }

        Cache::put($key, $value, 60);

        return $value;
    }

    public function findClasses($directory, $subclass)
    {
        $finder = new \Symfony\Component\Finder\Finder();
        $iter = new \hanneskod\classtools\Iterator\ClassIterator($finder->in(base_path($directory)));

        return array_keys($iter->type($subclass)->where('isInstantiable')->getClassMap());
    }
}
