<?php
namespace src\controllers;

use \core\Controller;
use src\models\Usuario;
// use \src\models\Test;

class HomeController extends Controller {

    public function index() {
        $usuario = Usuario::select()->execute();
        $this->render('home', [
            'usuarios' => $usuario
        ]);
    }


}