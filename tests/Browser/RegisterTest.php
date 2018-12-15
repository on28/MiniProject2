<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
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
                ->clickLink('Register')
                ->assertSee('Register')

                ->value('#email', 'test350@test.com')
                ->value('#password', 'test123')
                ->value('#password-confirm', 'test123')
                ->click('button[type="submit"]')
                ->assertPathis('/home')
                ->assertSee("Questions");

        });
    }
}
