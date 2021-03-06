<?php
namespace Application\Controllers;

use Application\Providers\Doctrine;
use Application\Models\Entities\User;
use Application\Providers\View;

class HomeController {
    protected $doctrine;

    public function __construct(Doctrine $doctrine){
        $this->doctrine = $doctrine;
    }

    public function index (View $view) {
        echo $view -> renderTemplate('home.twig.html');

    }

}
