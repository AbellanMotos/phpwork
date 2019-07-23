<?php

require __DIR__ . './../../vendor/autoload.php';


//Creamos una instancia del contenedor PHP-DI:
$containerBuilder = new DI\ContainerBuilder;
//Utilizamos Kint para mostrar el contenido de la clase en pantalla:
Kint::dump($containerBuilder);

$containerBuilder->useAutowiring(false);

$containerBuilder->addDefinitions(__DIR__ . '/../bootstrap/config.php');

$container = $containerBuilder->build();

return $container;


