<?php
class Paginas extends Controller{
    public function index(){
        $this->view('home'); // Chamando o método view para exibir a view 'home'
    } // fim do método index

    public function sobre($id){
    echo $id."<hr>"; // Exibindo o valor do parâmetro $id seguido de uma linha horizontal
    } // fim do método sobre

}
?>
