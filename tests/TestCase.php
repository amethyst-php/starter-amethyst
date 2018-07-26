<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Config;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    public function setUp()
    {
        parent::setUp();

        $this->artisan('migrate:fresh');
        $this->artisan('passport:install');
        $this->artisan('lara-ore:user:install');
        $this->signIn();
    }

    public function signIn()
    {
        $response = $this->post(Config::get('ore.api.router.prefix').Config::get('ore.auth.http.common.router.prefix'), [
            'username' => 'admin@admin.com',
            'password' => 'vercingetorige',
        ]);

        $response->assertStatus(200);

        $this->withHeaders(['Authorization' => 'Bearer '.json_decode($response->getContent())->data->access_token]);
    }
}
