<?php
    
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";
    
    $app = new Silex\Application();
    $app['debug'] = true;
    
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));
    
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });
    
    $app->get("/results", function() use ($app) {
        $how_many = new RepeatCounter();
        $how_many = $how_many->countRepeats($_GET['word'], $_GET['blob']);
        return $app['twig']->render('results.html.twig', array('result' => $how_many));
    });

    return $app;

?>