<?php
namespace Application\Providers;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Psr\Container\ContainerInterface;


class Doctrine {
    public $em;
    public function __construct(ContainerInterface $container)
    {
        $dbconfig = $container -> get('config.database');

       $paths = [
            __DIR__ . '/../Models/Entities',
            __DIR__ . '/../Models/Repositories'
        ];

        $isDevMode = true;

        //Configuración de Doctrine, rutas permitidas, modo dev, dir proxy, cache. anotación simple:
        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);

        $this->em = EntityManager::create($dbconfig, $config);

        AnnotationRegistry::registerLoader('class_exists');
        \Kint::dump($dbconfig);





    }
}