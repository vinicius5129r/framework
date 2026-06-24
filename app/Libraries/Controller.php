<?php
// classe pai de todos os controllers servirá para carregar os models e views
class Controller{
    // função para carregar o model que será utilizado
    public function model($model){
        require_once '../app/Models/'.$model.'.php'; //monta o caminho do arquivo do model
        return new $model;
    }//fim da função model
    
    // função para carregar a view que será utilizada
    public function view($view, $dados = []){
        $arquivo = ('../app/Views/'.$view.'.php');//monta o caminho do arquivo da view
        //verifica se o arquivo existe
        if(file_exists($arquivo)){
            require_once $arquivo;
        }else{
            die("O arquivo não existe");
        }//fim do if else
    }//fim da função
}//fim da classe Controller