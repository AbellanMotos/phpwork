<?php
namespace Application\Controllers;
use Application\Providers\Doctrine;
use Application\Models\Entities\User;

class HomeController {
    protected $doctrine;

    public function __construct(Doctrine $doctrine){
        $this->doctrine = $doctrine;
    }

    public function index (Doctrine $doctrine) {
        $user = $this -> doctrine -> em -> getRepository(User::class) -> find(2);
        \kint::dump($user);
        echo ('
        <link rel=stylesheet" href="/./public/components/bootstrap/dist/css/bootstrap.css">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Phpwork</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contacto</a>
                    </li>
                
                   </ul>
                </div>
        </nav>
        ');
        echo('<h1>Bienvenidos!</h1>');
        \Kint::dump($this -> doctrine);
    }
}
