<?php

namespace App\File;

class Upload {
    // nome do arquivo (string)
    private $nome;
    // tipo do arquivo (string)
    private $tipo;
    // nome/caminho temporário do arquivo (string)
    private $tmp;
    // retorna se deu erro *'1' para erro - '0' para sucesso* (integer)
    private $error;
    // tamanho do arquivo (integer)
    private $tamanho;

    // construtor da classe $file = $_FILES['arquivo'] (array)
    public function __construct($file) {
        // variavel que armazena uma função que separa o nome e a extensão do arquivo (array)
        $info = pathinfo($file['name']);

        $this->nome    = $info['filename'];
        $this->tipo    = $info['extension'];
        $this->tmp     = $file['tmp_name'];
        $this->error   = $file['error'];
        $this->tamanho = $file['size'];
    }

    // método responsável por mover o arquivo de upload para uma pasta do projeto $dir = diretório (boolean)
    public function upload($dir) {
        // verifica se deu erro ao enviar o arquivo
        if($this->error != 0) return false;

        return true;
    }
}