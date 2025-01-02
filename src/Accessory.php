<?php

declare(strict_types=1);

namespace Boatrace\Sakura;

use Boatrace\Sakura\Stadiums\BaseStadium;
use DI\Container;
use DI\ContainerBuilder;

/**
 * @author shimomo
 */
class Accessory
{
    /**
     * @var array
     */
    protected static array $instances;

    /**
     * @var \DI\Container
     */
    protected static Container $container;

    /**
     * @param \Boatrace\Sakura\MainAccessory  $accessory
     */
    public function __construct(protected MainAccessory $accessory){}

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return array
     */
    public function __call(string $name, array $arguments): array
    {
        return $this->accessory->$name(...$arguments);
    }

    /**
     * @param  string  $name
     * @param  array   $arguments
     * @return array
     */
    public static function __callStatic(string $name, array $arguments): array
    {
        return self::getInstance('Accessory')->$name(...$arguments);
    }

    /**
     * @param  string  $name
     * @return \Boatrace\Sakura\Accessory|\Boatrace\Sakura\Stadiums\BaseStadium
     */
    public static function getInstance(string $name): Accessory|BaseStadium
    {
        return self::$instances[$name] ?? self::$instances[$name] = (
            self::$container ?? self::$container = self::getContainer()
        )->get($name);
    }

    /**
     * @return \DI\Container
     */
    public static function getContainer(): Container
    {
        $builder = new ContainerBuilder;
        $builder->addDefinitions(__DIR__ . '/../config/definitions.php');
        return $builder->build();
    }
}
