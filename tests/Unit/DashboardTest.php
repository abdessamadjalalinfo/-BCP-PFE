<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

namespace Tests\Unit;

use WithoutMiddleware;





namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_agence()
    {

        $response = $this->call('POST', 'getagence', array(
            '_token' => csrf_token(),
            'ville' => '1',
        ));

        $this->assertEquals(200, $response->getStatusCode());
    }
    public function test_show_bprs()
    {
        $view = $this->view('bprs');

        $view->assertSee('Veuillez choisir une BPR');
    }

    public function test_statistic_on_bprs()
    {
        $view = $this->view('bprs-unique');

        $view->assertSee('Données Manquants', 'Données Incohérents', 'Clients validé avec avertissement', 'Clients avec données complets');
    }
    public function test_reporting()
    {
        $view = $this->view('reporting');

        $view->assertSee('remontation', 'Clients à traiter', 'Non Traité');
    }
    public function test_admin_dashbord()
    {

        $view = $this->withoutMiddleware()->view('dashboard');

        $view->assertSee('Clients à traiter', 'Clients avec données incohérentes', 'Fiabilisation');
    }
}
