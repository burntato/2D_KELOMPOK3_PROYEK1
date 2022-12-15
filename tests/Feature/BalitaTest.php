<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BalitaTest extends TestCase
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

    // fill in balita data
    // 1. name = String
    // 2. jk = Enum
    // 3. usia = Enum
    // 4. bb = integer

    public function test_balita_add_success() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to balita page
        $response = $this->get('/balita');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /balita/create
        $response = $this->get('/balita/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/balita', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '2',
            'bb' => 10
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/balita');

        // check if the balita is added
        $this->assertDatabaseHas('balitas', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '2',
            'bb' => 10
        ]);
    }

    public function test_balita_invalid_bb() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to balita page
        $response = $this->get('/balita');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /balita/create
        $response = $this->get('/balita/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/balita', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '2',
            'bb' => ''
        ]);

        // check if still in the same page
        $response->assertStatus(302);
    }

    public function test_balita_invalid_name() {

        //login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        //go to balita page
        $response = $this->get('/balita');

        //check if the page is loaded
        $response->assertStatus(200);

        //go to /balita/create
        $response = $this->get('/balita/create');

        //check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/balita', [
            'name' => '',
            'jk' => 'L',
            'usia' => '2',
            'bb' => 10
        ]);

        //check if still in the same page
        $response->assertStatus(302);
    }

    public function test_balita_empty() {

        //login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        //go to balita page
        $response = $this->get('/balita');

        //check if the page is loaded
        $response->assertStatus(200);

        //go to /balita/create
        $response = $this->get('/balita/create');

        //check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/balita', [
            'name' => '',
            'jk' => '',
            'usia' => '',
            'bb' => ''
        ]);

        //check if still in the same page
        $response->assertStatus(302);
    }
}
