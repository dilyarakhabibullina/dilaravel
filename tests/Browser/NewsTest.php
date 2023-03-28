<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test1Example(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/create')
            ->type('title', 'test')
            ->type('inform', 'informtest')
            ->press('Добавить новость')
            ->assertPathIs('/admin');
        });
    }

    public function test2Example(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/create')
            ->type('title', '2')
            ->press('Добавить новость')
                    ->assertSee('тттвата');
        });
    }
}
