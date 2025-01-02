<?php

declare(strict_types=1);

return [
    'Stadium01' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium01')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium02' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium02')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium03' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium03')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium04' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium04')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium05' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium05')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium06' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium06')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium07' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium07')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium08' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium08')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium09' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium09')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium10' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium10')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium11' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium11')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium12' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium12')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium13' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium13')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium14' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium14')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium15' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium15')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium16' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium16')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium17' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium17')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium18' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium18')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium19' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium19')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium20' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium20')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium21' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium21')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium22' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium22')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium23' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium23')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium24' => \DI\create('\Boatrace\Sakura\Stadiums\Stadium24')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Accessory' => \DI\create('\Boatrace\Sakura\Accessory')->constructor(
        \DI\get('MainAccessory')
    ),
    'MainAccessory' => function ($container) {
        return $container->get('\Boatrace\Sakura\MainAccessory');
    },
    'HttpBrowser' => function ($container) {
        return $container->get('\Symfony\Component\BrowserKit\HttpBrowser');
    },
];
