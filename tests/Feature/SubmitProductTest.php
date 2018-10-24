<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class SubmitProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function canCreateNewProduct() {
        $response = $this->post('/create', ['title' => 'test product']);

        $this->assertDatabaseHas('products', [
            'title' => 'test product'
        ]);

        $response
            ->assertStatus(302)
            ->assertHeader('Location', url('/'));
            
        $this
        ->get('/')
        ->assertSee('test product');
    }
}
