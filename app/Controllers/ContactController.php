<?php
namespace Application\Controllers;
use Application\Providers\Doctrine;

class ContactController {
    protected $doctrine;

    public function __construct(Doctrine $doctrine){
        $this->doctrine = $doctrine;
    }
    public function contact()
    {
        echo('
            <link rel="stylesheet" href="../public/bower_components/bootstrap/dist/css/bootstrap.css">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/">PHPwork</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contacto">Contacto</a>
                            </li>
                            </ul>
                    </div>
            </nav>
            ');
        echo('<h1>Contacto</h1>');
        \Kint::dump($this->doctrine);

}}