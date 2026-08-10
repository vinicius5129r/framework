<?php
class Usuarios extends Controller{
    public function cadastrar(){
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            //se o formulário foi postado, pega os dados e limpa os espaços em branco
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' =>trim($formulario['email']),
                'senha' =>trim($formulario['senha']),
                'confirma_senha' =>trim($formulario['confirma_senha'])
            ]; //var_dump($dados);

            var_dump($formulario);
            //verifica se o campo nome está vazio
            if(empty($formulario['nome'])):
                $dados['nome_erro'] = 'Preencha o campo nome';
            endif;

            //verifica se o campo email está vazio
            if(empty($formulario['email'])):
                $dados['email_erro'] = 'Preencha o campo e-mail';
            endif;

            //verifica se o campo senha está vazio
            if(empty($formulario['senha'])):
                $dados['senha_erro'] = 'Preencha o campo senha';
            endif;

            //verifica se o campo confirma_senha está vazio
            if(empty($formulario['confirma_senha'])):
                $dados['confirma_senha_erro'] = 'Preencha o campo confirmar senha';
            endif;

        else: //se não tiver postado o formulário, inicializa os campos vazios
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirma_senha' => ''
            ];
        endif; //fim do if

        $this->view('usuarios/cadastrar', $dados); //chama a view
    } //fim do método cadastrar
}// fim da classe