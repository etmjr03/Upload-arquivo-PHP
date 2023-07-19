<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos com PHP</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <h1>Upload de arquivos com PHP</h1>
    <div class="centraliza">
        <form method="post" enctype="multipart/form-data">
            <label>Arquivo</label>
            <input type="file" name="arquivo">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>