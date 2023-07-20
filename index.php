<?php

require __DIR__.'/vendor/autoload.php';

use \App\File\Upload;

// verifica se foi enviado um arquivo pelo formulário
if(isset($_FILES['arquivo'])) {
    $obUpload = new Upload($_FILES['arquivo']);
    $sucesso = $obUpload->upload(__DIR__.'/files');

    if($sucesso){
        echo '<pre>';
        print_r($obUpload);
        echo '</pre>';
        echo 'Arquivo enviado com sucesso!';
        exit;
    }

    die('Problemas ao enviar um arquivo!');
}

include __DIR__.'/includes/formulario.php';
