<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisTest extends TestCase
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
    public function test_register_success() {

        // check home page
        $response = $this->get('/home');

        // go to register page
        $response = $this->get('/register');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/register', [
            'name' => 'test',
            'email' => 'test@email.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/home');

        // check if the user is logged in
        $this->assertAuthenticated();
    }

    public function test_register_with_invalid_email() {

        // check home page
        $response = $this->get('/home');

        // go to register page
        $response = $this->get('/register');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/register', [
            'name' => 'test',
            'email' => 'testemail.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/register');

        // check if the user is logged in
        $this->assertGuest();
    }

    public function test_register_with_invalid_password() {

        // check home page
        $response = $this->get('/home');

        // go to register page
        $response = $this->get('/register');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/register', [
            'name' => 'test',
            'email' => 'testemail.com',
            'password' => 'pass',
            'password_confirmation' => 'pass'
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/register');

        // check if the user is logged in
        $this->assertGuest();
    }

    public function test_register_with_invalid_password_confirmation() {

        // check home page
        $response = $this->get('/home');

        // go to register page
        $response = $this->get('/register');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/register', [
            'name' => 'test',
            'email' => 'testemail.com',
            'password' => 'password',
            'password_confirmation' => 'pass'
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/register');

        // check if the user is logged in
        $this->assertGuest();
    }

    public function test_register_name_in_numbers() {

        // check home page
        $response = $this->get('/home');

        // go to register page
        $response = $this->get('/register');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/register', [
            'name' => '123',
            'email' => 'testemail.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/register');

        // check if the user is logged in
        $this->assertGuest();
    }

    public function test_register_empty() {

        // check home page
        $response = $this->get('/home');

        // go to register page
        $response = $this->get('/register');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/register', [
            'name' => '',
            'email' => '',
            'password' => '',
            'password_confirmation' => ''
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/register');

        // check if the user is logged in
        $this->assertGuest();
    }
}
