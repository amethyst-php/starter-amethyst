<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::name('index')->get('/', function (Request $request) {

	$user = $request->user('api');
	// $user = Auth::user();


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
	->sortBy(function($route) {
		return $route->uri;
	})
	->map(function($route) {
		return [
			'methods' => $route->methods,
			'uri' => $route->uri !== "/" ? "/".$route->uri : "/"
		];
	})->values()->toArray();

    return [
    	'name' => config('api.name'),
    	'url' => config('api.url'),
    	'description' => config('api.description'),
    	'version' => config('api.version'),
    	'endpoints' => $endpoints,
    ];
});