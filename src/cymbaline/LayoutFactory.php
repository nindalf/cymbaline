<?php

$loader = new Twig_Loader_Filesystem(ROOT . DS . 'app' . DS . 'views');
$twig = new Twig_Environment($loader);