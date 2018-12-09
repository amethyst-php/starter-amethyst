<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Symfony\Component\Console\Output\BufferedOutput;

class ConsoleController extends Controller
{
    public function index(Request $request)
    {
        $output = new BufferedOutput();

        $signature = new Collection(explode(' ', $request->input('command')));
        $command = $signature[0];
        $signature->forget(0);

        $params = $signature->mapWithKeys(function ($item) {
            $parts = explode('=', $item);

            return count($parts) === 2 ? [$parts[0] => $parts[1]] : [$parts[0]];
        })->toArray();

        \Artisan::call($command, $params, $output);

        return $output->fetch();
    }
}
