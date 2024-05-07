<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        // $this->render('home', ['nome' => 'Bonieky']);
        $this->render('home');
    }

    public function fotos() {
        echo "Opa, fotos";
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}