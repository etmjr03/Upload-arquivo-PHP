<?php

require __DIR__.'/vendor/autoload.php';

use \App\File\Upload;

// verifica se foi enviado um arquivo pelo formulário
if(isset($_FILES['arquivo'])) {
    $obUpload = new Upload($_FILES['arquivo']);
}

include __DIR__.'/includes/formulario.php';
