<?php namespace unit\Core\Base;

use FrankDev\Base\Application;
use League\Container\Container;

class ApplicationTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function test_it_can_create_a_application_class()
    {

        $app = new Application();
        $this->assertInstanceOf(Application::class, $app);

    }

    public function test_it_has_a_container_after_boot()
    {
        $app = new Application();
        $app->boot();
        $this->assertInstanceOf(Container::class, $app->getContainer());
    }
}