<?php
$destino = 'imagens/' . $_FILES['arquivo']['name'];
 $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
 move_uploaded_file( $arquivo_tmp, $destino  );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Imagem Enviada!</h1>
    <a class="nav-link" href="denuncia.php">Voltar</a>
</body>
</html>