<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/en')
            ->followRedirects($this)
            ->assertSee('uri.gd');
        Log::channel('testing')->info('Problem', [request()->url(), $response]);

        $response->assertStatus(200);
    }
}
