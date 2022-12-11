<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Login extends TestCase
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
    public function test_login() {

        // check home page
        $response = $this->get('/home');

        // go to login page
        $response = $this->get('/login');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/home');

        // check if the user is logged in
        $this->assertAuthenticated();
    }

    public function test_login_with_wrong_password() {

        // check home page
        $response = $this->get('/home');

        // go to login page
        $response = $this->get('/login');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'wrongpassword'
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/login');
    }

    public function test_login_with_wrong_email() {

        // check home page
        $response = $this->get('/home');

        // go to login page
        $response = $this->get('/login');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/login', [
            'email' => 'wrongadmin@admin.com',
            'password' => 'password'
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/login');
    }

    public function test_login_with_wrong_email_and_password() {

        // check home page
        $response = $this->get('/home');

        // go to login page
        $response = $this->get('/login');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/login', [
            'email' => 'wrongadmin@admin.com',
            'password' => 'wrongpassword'
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/login');

    }

    public function test_login_with_email_SQLINJECT() {

        // check home page
        $response = $this->get('/home');

        // go to login page
        $response = $this->get('/login');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/login', [
            'email' => '\' OR 1=1 --',
            'password' => 'password'
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/login');
    }

    public function test_login_with_password_SQLINJECT() {

        // check home page
        $response = $this->get('/home');

        // go to login page
        $response = $this->get('/login');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in email and password
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => '\' OR 1=1 --'
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/login');
    }
}
