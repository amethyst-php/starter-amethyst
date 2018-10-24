<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

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
            'configs'     => [
                // 'events'        => $this->getEvents(),
                // 'data_builders' => $this->getDataBuilders(),
            ],
        ];
    }
}
