<?php

require __DIR__.'/vendor/autoload.php';


include __DIR__.'/includes/formulario.php';

if(isset($_FILES['arquivo'])) {
    echo "<p>arquivo <strong>{$_FILES['arquivo']['name']}</strong> enviado com sucesso!</p>";
}