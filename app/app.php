<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/FindAndReplace.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->post('/far', function() use ($app) {
        $input1 = $_POST['sentence'];
        $input2 = $_POST['word_to_replace'];
        $input3 = $_POST['replacement_word'];
        $replacer = new FindAndReplace;
        $result = $replacer->truly_impossible($input1, $input2, $input3);
        return $app['twig']->render('result.html.twig', array('result'=>$result));
    });

    return $app;
  ?>
