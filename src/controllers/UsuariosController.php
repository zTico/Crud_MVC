<?php

namespace src\controllers;

use \core\Controller;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;
use src\models\Usuario;

// use \src\models\Test;

class UsuariosController extends Controller {

  public function add() {
      $this->render('add');
  }

  public function addAction() {
      $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    

      if($nome && $email) {
      
        $data = Usuario::select()->where('email', $email)->execute();

        if(count($data) === 0) {
            //insere 
            Usuario::insert([
                'nome' => $nome,
                'email' => $email
            ])->execute();
            //redirect para /
            $this->redirect('/');

        }   

      } 

      //redirect para /novo
      $this->redirect('/novo');
  }

  public function editar($args){
    $usuario = Usuario::select()->find($args['id']);
    //print_r($usuario);
    $this->render('edit', [
      'usuario' => $usuario
    ]);
  }

  public function editarAction($args) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $id = $args['id'];

     if($nome && $email){
        Usuario::update()->set('nome', $nome)->set('email', $email)->where('id', $id)->execute();
        $this->redirect('/');
     }

     $this->redirect("/usuario/$id/editar");

  }

  public function excluir($args) {
    $id = $args['id'];
    Usuario::delete()->where('id', $id)->execute();
    $this->redirect('/');
  }

}