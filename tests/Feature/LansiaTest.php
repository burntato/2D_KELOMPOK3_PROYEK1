<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LansiaTest extends TestCase
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

    // fill in lansia data
    // 1. name = String
    // 2. jk = Enum
    // 3. usia = Enum
    // 4. bb = integer
    // 5. tensi = integer

    public function test_lansia_add_success() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to lansia page
        $response = $this->get('/lansia');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /lansia/create
        $response = $this->get('/lansia/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/lansia', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '50',
            'bb' => 50,
            'tensi' => 100
        ]);

        // check if the page gets redirected'
        $response->assertRedirect('/lansia');

        // check if the lansia is added
        $this->assertDatabaseHas('lansias', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '50',
            'bb' => 50,
            'tensi' => 100
        ]);

        // logout from admin
        $this->post('/logout');

        // check if the user is logged out
        $this->assertGuest();
    }

    public function test_lansia_add_invalid_bb() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to lansia page
        $response = $this->get('/lansia');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /lansia/create
        $response = $this->get('/lansia/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/lansia', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '50',
            'bb' => '',
            'tensi' => 100
        ]);

        // check if still in /lansia/create
        $response->assertRedirect('/lansia/create');
    }

    public function test_lansia_add_invalid_nama() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to lansia page
        $response = $this->get('/lansia');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /lansia/create
        $response = $this->get('/lansia/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/lansia', [
            'name' => '',
            'jk' => 'L',
            'usia' => '50',
            'bb' => 50,
            'tensi' => 100
        ]);

        // check if still in /lansia/create
        $response->assertRedirect('/lansia/create');
    }

    public function test_lansia_add_invalid_tensi() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to lansia page
        $response = $this->get('/lansia');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /lansia/create
        $response = $this->get('/lansia/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/lansia', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '50',
            'bb' => 50,
            'tensi' => ''
        ]);

        // check if still in /lansia/create
        $response->assertRedirect('/lansia/create');
    }

    public function test_lansia_add_invalid_all() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to lansia page
        $response = $this->get('/lansia');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /lansia/create
        $response = $this->get('/lansia/create');

        // check if the page is loaded
        $response->assertStatus(200);

        $response = $this->post('/lansia', [
            'name' => '',
            'jk' => 'L',
            'usia' => '50',
            'bb' => '',
            'tensi' => ''
        ]);

        // check if still in /lansia/create
        $response->assertRedirect('/lansia/create');
    }
}
