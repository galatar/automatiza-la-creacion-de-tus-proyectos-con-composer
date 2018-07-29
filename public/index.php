<?php

use Galatar\TutoComposer\Persona;

require_once  '../vendor/autoload.php';

$twig_loader = new Twig_Loader_Filesystem('../templates');

$twig = new Twig_Environment($twig_loader, array('cache' => '../cache/twig',));

$persona = new Persona();
$saludo = $persona->saluda();

//echo $twig->render('index.html.twig', array('nombre' => 'Juan', 'apellidos' => 'Palomo'));
$twig->display('index.html.twig', array('nombre' => 'Juan', 'apellidos' => 'Palomo', 'saludo' => $saludo));
