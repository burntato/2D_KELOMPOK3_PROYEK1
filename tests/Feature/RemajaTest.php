<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RemajaTest extends TestCase
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
    public function test_remaja_add_success() {

        //login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to remaja page
        $response = $this->get('/remaja');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /remaja/create
        $response = $this->get('/remaja/create');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in remaja data
        // 1. name = String
        // 2. jk = Enum
        // 3. usia = Enum
        // 4. bb = integer
        // 5. tb = integer
        // 6. tensi = integer
        // 7. lila = integer

        $response = $this->post('/remaja', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '15',
            'bb' => 50,
            'tb' => 170,
            'tensi' => 100,
            'lila' => 8
        ]);

        // check if the page gets redirected
        $response->assertRedirect('/remaja');

        // check if the data is added to the database
        $this->assertDatabaseHas('remajas', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '15',
            'bb' => 50,
            'tb' => 170,
            'tensi' => 100,
            'lila' => 8
        ]);
    }

    public function test_remaja_invalid_bb() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to remaja page
        $response = $this->get('/remaja');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /remaja/create
        $response = $this->get('/remaja/create');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in remaja data
        // 1. name = String
        // 2. jk = Enum
        // 3. usia = Enum
        // 4. bb = integer
        // 5. tb = integer
        // 6. tensi = integer

        $response = $this->post('/remaja', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '15',
            'bb' => '',
            'tb' => 170,
            'tensi' => 100,
            'lila' => 8
        ]);

        // check if page stays in /remaja/create
        $response->assertStatus(302);
    }

    public function test_remaja_invalid_tb() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to remaja page
        $response = $this->get('/remaja');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /remaja/create
        $response = $this->get('/remaja/create');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in remaja data
        // 1. name = String
        // 2. jk = Enum
        // 3. usia = Enum
        // 4. bb = integer
        // 5. tb = integer
        // 6. tensi = integer

        $response = $this->post('/remaja', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '15',
            'bb' => 50,
            'tb' => '',
            'tensi' => 100,
            'lila' => 8
        ]);

        // check if page stays in /remaja/create
        $response->assertStatus(302);
    }

    public function test_remaja_invalid_tensi() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to remaja page
        $response = $this->get('/remaja');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /remaja/create
        $response = $this->get('/remaja/create');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in remaja data
        // 1. name = String
        // 2. jk = Enum
        // 3. usia = Enum
        // 4. bb = integer
        // 5. tb = integer
        // 6. tensi = integer

        $response = $this->post('/remaja', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '15',
            'bb' => 50,
            'tb' => 170,
            'tensi' => '',
            'lila' => 8
        ]);

        // check if page stays in /remaja/create
        $response->assertStatus(302);
    }

    public function test_remaja_invalid_lila() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to remaja page
        $response = $this->get('/remaja');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /remaja/create
        $response = $this->get('/remaja/create');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in remaja data
        // 1. name = String
        // 2. jk = Enum
        // 3. usia = Enum
        // 4. bb = integer
        // 5. tb = integer
        // 6. tensi = integer

        $response = $this->post('/remaja', [
            'name' => 'test',
            'jk' => 'L',
            'usia' => '15',
            'bb' => 50,
            'tb' => 170,
            'tensi' => 100,
            'lila' => ''
        ]);

        // check if page stays in /remaja/create
        $response->assertStatus(302);
    }

    public function test_remaja_invalid_name() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to remaja page
        $response = $this->get('/remaja');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /remaja/create
        $response = $this->get('/remaja/create');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in remaja data
        // 1. name = String
        // 2. jk = Enum
        // 3. usia = Enum
        // 4. bb = integer
        // 5. tb = integer
        // 6. tensi = integer

        $response = $this->post('/remaja', [
            'name' => '',
            'jk' => 'L',
            'usia' => '15',
            'bb' => 50,
            'tb' => 170,
            'tensi' => 100,
            'lila' => 8
        ]);

        // check if page stays in /remaja/create
        $response->assertStatus(302);
    }

    public function test_remaja_invalid_everything() {

        // login as admin
        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        // go to remaja page
        $response = $this->get('/remaja');

        // check if the page is loaded
        $response->assertStatus(200);

        // go to /remaja/create
        $response = $this->get('/remaja/create');

        // check if the page is loaded
        $response->assertStatus(200);

        // fill in remaja data
        // 1. name = String
        // 2. jk = Enum
        // 3. usia = Enum
        // 4. bb = integer
        // 5. tb = integer
        // 6. tensi = integer

        $response = $this->post('/remaja', [
            'name' => '',
            'jk' => '',
            'usia' => '',
            'bb' => '',
            'tb' => '',
            'tensi' => '',
            'lila' => ''
        ]);

        // check if page stays in /remaja/create
        $response->assertStatus(302);
    }
}
