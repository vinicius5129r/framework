<?php
// Arquivo: Rota.php
// Definindo a classe Rota
class Rota {
    // Construtor da classe Rota
    private $controlador = "Paginas"; // Definindo a propriedade controlador com o valor "Paginas"
     public function __construct() {
        $url = $this->url(); // Obtendo a URL atual usando o método url()
        if (file_exists('../app/Controllers'.ucwords($url[0].'.php'))) {
            $this->controlador = ucwords($url[0]); // Atualizando a propriedade controlador com o valor da URL
             unset($url[0]); // Removendo o primeiro elemento da URL para evitar conflitos
        }
        require_once '../app/Controllers/'.$this->controlador.'.php'; // Incluindo o arquivo do controlador correspondente
            $this->controlador = new $this->controlador; // Criando uma instância do controlador
        var_dump($this); // Exibindo o conteúdo do objeto Rota para verificar se a classe está funcionando corretamente
    }

    // Método para obter a URL atual
    private function url() {
        // Obtendo a URL atual usando filter_input para sanitizar a entrada
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        if (isset($url)) {
            //trim() remove os espaços em branco do início e do final da string, rtrim() remove as barras '/' do final da string
            //rtrim() é usado para remover as barras '/' do final da URL, garantindo que a URL seja formatada corretamente antes de ser dividida em partes usando explode()
            // O método explode() é usado para dividir a URL em partes usando '/' como delimitador, o que permite acessar cada segmento da URL individualmente  
            $url = trim(rtrim($url, '/')); // Removendo as barras '/' do início e do final da URL
            $url = explode('/', $url); // Dividindo a URL em partes usando '/' como delimitador
            return $url; // Retornando a URL atual se estiver definida
        }// fim do if

        // Código para obter a URL atual
        echo $_GET['url'];
    }
}
?>