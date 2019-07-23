<?php

//__DIR__ es una constante predefinida en PHP con el valor del directorio actual:
$container = require __DIR__ . './bootstrap/container.php';
//Utilizaremos la variable $dispatcher para leer las rutas que hemos creado:
$dispatcher = require __DIR__ . '/../routes/web.php';

kint::dump($container);