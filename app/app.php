<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/FindandReplace.php";

    $app = new Silex\Application();

    $app["debug"] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/replace", function() use ($app){
         $new_sentence = new FindandReplace;
         $new_input = $new_sentence->findReplace($_GET['sentence'], $_GET['find'], $_GET['replace']);
         return $app['twig']->render('index.html.twig', array('results' => $new_input));
      });

    return $app;
?>
