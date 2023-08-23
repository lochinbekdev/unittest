<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_table_empty_or_had_value(): void
    {
        $response = $this->get('/products');

        $response->assertStatus(200);
    }
}
