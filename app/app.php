<?php

require_once __DIR__.'/../vendor/autoload.php';
$app = new Silex\Application();

// ... definitions
//$app['autoloader']->registerNamespace('Galych', __DIR__.'/../src');
$app['debug'] = true;

// Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app["twig"]->addGlobal('title', 'Test Application');

require __DIR__.'/routers.php';
require __DIR__ . '/exceptions.php';

return $app;