<?php declare(strict_types=1);

namespace FrankDev\Base;

use App\Domains\Auth\Actions\AuthLoginAction;
use FrankDev\Contracts\Base\ApplicationInterface;
use League\Container\Container;
use League\Route\Router;
use League\Route\Strategy\ApplicationStrategy;

class Application implements ApplicationInterface
{


    /**
     * The application name.
     *
     * @var string
     */
    public $name;

    /**
     * The application container
     *
     * @var Container
     */
    protected $container;

    protected $router;

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
    }

    public function boot()
    {
        $this->setContainer();
        $this->setRouter();
        return $this;
    }

    /**
     * Sets the Application container. Than we can use Dependency injection
     */
    protected function setContainer()
    {
        $this->container = new Container();
    }

    public function getContainer()
    {
        return $this->container;
    }

    protected function setRouter()
    {
        $this->router = new Router();
    }

    public function getRouter()
    {
        return $this->router;
    }

}