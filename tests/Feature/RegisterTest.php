<?php

namespace Tests\Feature;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register_page_loads()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_register_page_contains_register_form()
    {
        $response = $this->get('/register');

        $response->assertSee('Register');
        $response->assertSee('Full Name');
        $response->assertSee('Email');
        $response->assertSee('Password');
        $response->assertSee('Confirm password');
    }

    public function test_register_page_contains_register_button()
    {
        $response = $this->get('/register');

        $response->assertSee('Register');
    }

    public function test_register_page_contains_login_link()
    {
        $response = $this->get('/register');

        $response->assertSee('Login');
    }
}
