<?php

declare(strict_types=1);

return [
    'Stadium01' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium01')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium02' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium02')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium03' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium03')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium04' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium04')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium05' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium05')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium06' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium06')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium07' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium07')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium08' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium08')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium09' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium09')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium10' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium10')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium11' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium11')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium12' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium12')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium13' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium13')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium14' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium14')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium15' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium15')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium16' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium16')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium17' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium17')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium18' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium18')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium19' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium19')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium20' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium20')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium21' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium21')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium22' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium22')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium23' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium23')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Stadium24' => \DI\create('\Boatrace\Venture\Project\Stadiums\Stadium24')->constructor(
        \DI\get('HttpBrowser')
    ),
    'Accessory' => \DI\create('\Boatrace\Venture\Project\Accessory')->constructor(
        \DI\get('MainAccessory')
    ),
    'MainAccessory' => function ($container) {
        return $container->get('\Boatrace\Venture\Project\MainAccessory');
    },
    'HttpBrowser' => function ($container) {
        return $container->get('\Symfony\Component\BrowserKit\HttpBrowser');
    },
];
