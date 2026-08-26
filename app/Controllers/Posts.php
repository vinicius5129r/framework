<?php
class Posts extends Controller{ 
    public function __construct(){
        if(!Session::estaLogado())
            URL::redirecionar('usuarios/login');
        endif;
        $this->usuarioModel = $this->model('Usuario');
    }
    
    public function index(){
       $this->view('posts/index');
    }

    public function cadastrar(){
        $this->view('posts/cadastrar');
    }
}