<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testAccount()
    {
        $response = $this->get(Config::get('ore.api.router.prefix').Config::get('ore.account.http.user.router.prefix'));
        $response->assertStatus(200);
        $this->assertEquals('admin', json_decode($response->getContent())->resource->name);
    }
}
