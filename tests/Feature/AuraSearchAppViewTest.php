<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuraSearchAppViewTest extends TestCase
{
    public function test_app_route_returns_shell_with_vite_assets(): void
    {
        $response = $this->get('/app');

        $response->assertSuccessful();
        $response->assertSee('AuraSearch | Intelligent Commerce', false);
        $response->assertSee('id="app"', false);
    }
}
