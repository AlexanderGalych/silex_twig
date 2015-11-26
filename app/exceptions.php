<?php

use Symfony\Component\HttpFoundation\Response;

$app->error(function (\Exception $exception, $code) use ($app) {
    switch ($code) {
        case 404:
            $content = $app['twig']->render('page/404.html.twig', array('page' => 'test'));
            return $app['twig']->render('index.html.twig', array('content' => $content));
            break;
        default:
            $message = sprintf('Message: %s, code: %s', $exception->getMessage(), $code);
    }

    return new Response($message);
});