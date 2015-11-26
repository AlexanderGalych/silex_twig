<?php

$app->get('/', function () use ($app) {
    $content = $app['twig']->render('page/greeting.html.twig', ['name' => 'World']);
    return $app['twig']->render('index.html.twig', array('content' => $content));
});

$app->get('/contact/', function () use ($app) {
    $content = $app['twig']->render('page/contact.html.twig');
    return $app['twig']->render('index.html.twig', array('content' => $content));
});

$app->get('/contact/', function () use ($app) {
    $content = $app['twig']->render('contact.html.twig');
    return $app['twig']->render('index.html.twig', array('content' => $content));
});

$app->get('/{variable}', function ($variable) use ($app) {
    $content = $app['twig']->render('page/greeting.html.twig', ['name' => $variable]);
    return $app['twig']->render('index.html.twig', array('content' => $content));
});