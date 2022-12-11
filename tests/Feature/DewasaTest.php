<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DewasaTest extends TestCase
{
    use RefreshDatabase;
    public function setup(): void {
        parent::setUp();
        $this->seed();
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */

    // fill in dewasa data
    // 1. name = String
    // 2. jk = Enum
    // 3. usia = Enum
    // 4. bb = integer
    // 5. tb = integer
    // 6. tensi = integer

    public function test_dewasa_add_success() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to dewasa page
        $response = $this->get('/dewasa');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /dewasa/create
        $response = $this->get('/dewasa/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/dewasa', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '30',
            'bb' => 50,
            'tb' => 100,
            'tensi' => 100
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/dewasa');

        // check if the dewasa is added
        $this->assertDatabaseHas('dewasas', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '30',
            'bb' => 50,
            'tb' => 100,
            'tensi' => 100
        ]);
    }

    public function test_dewasa_invalid_bb() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to dewasa page
        $response = $this->get('/dewasa');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /dewasa/create
        $response = $this->get('/dewasa/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/dewasa', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '30',
            'bb' => '',
            'tb' => 100,
            'tensi' => 100
        ]);

        // check if still in /dewasa/create
        $response->assertRedirect('/dewasa/create');
    }

    public function test_dewasa_invalid_tb() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to dewasa page
        $response = $this->get('/dewasa');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /dewasa/create
        $response = $this->get('/dewasa/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/dewasa', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '30',
            'bb' => 50,
            'tb' => '',
            'tensi' => 100
        ]);

        // check if still in /dewasa/create
        $response->assertRedirect('/dewasa/create');
    }

    public function test_dewasa_invalid_tensi() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to dewasa page
        $response = $this->get('/dewasa');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /dewasa/create
        $response = $this->get('/dewasa/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/dewasa', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '30',
            'bb' => 50,
            'tb' => 100,
            'tensi' => ''
        ]);

        // check if still in /dewasa/create
        $response->assertRedirect('/dewasa/create');
    }

    public function test_dewasa_invalid_name() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to dewasa page
        $response = $this->get('/dewasa');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /dewasa/create
        $response = $this->get('/dewasa/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/dewasa', [
            'name' => '',
            'jk' => 'L',
            'usia' => '30',
            'bb' => 50,
            'tb' => 100,
            'tensi' => 100
        ]);

        // check if still in /dewasa/create
        $response->assertRedirect('/dewasa/create');
    }

    public function test_dewasa_empty() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to dewasa page
        $response = $this->get('/dewasa');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /dewasa/create
        $response = $this->get('/dewasa/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/dewasa', [
            'name' => '',
            'jk' => '',
            'usia' => '',
            'bb' => '',
            'tb' => '',
            'tensi' => ''
        ]);

        // check if still in /dewasa/create
        $response->assertRedirect('/dewasa/create');
    }
}
