<?php 
// Essa classe é responsável por gerenciar as sessões do usuário, incluindo 
// mensagens de feedback e classes CSS associadas a essas mensagens.
class Sessao{
    
    public static function mensagem($nome, $texto = null, $classe = null){
    if(!empty($nome)):
        if(!empty($texto) && empty($_SESSION[$nome])):
            if(!empty($_SESSION[$nome])):
                unset($_SESSION[$nome]);
            endif;
            if(!empty($_SESSION[$nome . '_classe'])):
                unset($_SESSION[$nome . '_classe']);
            endif;
            $_SESSION[$nome] = $texto;
            $_SESSION[$nome . '_classe'] = $classe;
            elseif(!empty($_SESSION[$nome]) && empty($texto)):
                $classe = !empty($_SESSION[$nome . 'classe']) ? $_SESSION[$nome . 'classe'] : 'alert alert-success';
                echo '<div class="' . $classe . '">' . $_SESSION[$nome] . '</div>';
                unset($_SESSION[$nome]);
                unset($_SESSION[$nome . 'classe']);
            endif;
        endif;
    }//fim do metodo mensagem

    public static function estaLogado(){
        if(isset($_SESSION['usuario_id'])):
            return true;
        else:
            return false;
        endif;
    }//fim do metodo estaLogado
}//fim da classe Sessao