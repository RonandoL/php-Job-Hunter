<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/jobOpening.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "Home";
    });

    return $app;



?>
