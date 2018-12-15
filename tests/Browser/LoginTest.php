<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000/')
                ->clickLink('Login')
                ->assertSee('Login')

                ->value('#email', 'test22@test.com')
                ->value('#password', 'test123')
                ->click('button[type="submit"]')
                ->assertPathis('/home')
                ->assertSee("Questions");

        });
    }
}
