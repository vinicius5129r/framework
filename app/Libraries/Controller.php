<?php
class Controller{
    public function model($model){
        require_once '../app/Models/'.$model.'.php'; // Incluindo o arquivo do modelo correspondente
        return new $model; // Retornando uma instância do modelo
    } // fim do método model

    public function view($view, $dados = []){
        $arquivo = '../app/Views/'.$view.'.php'; // Definindo o caminho do arquivo da view
        if (file_exists($arquivo)) {
            require_once $arquivo; // Incluindo o arquivo da view se ele existir
        } else {
            die("O arquivo não existe."); // Exibindo uma mensagem de erro se a view não existir
        }// fim do if verifica se o arquivo da view existe
    }// fim do método view
    
} // fim da classe Controller
?>