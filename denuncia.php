<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer denuncia</title>
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		.body { background-color: black;}
		.card { background-color: white;}
	</style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
		<span class="navbar-text">
          Fazer denuncia
    </nav>
    <center>
        <div class="card" style="width: 18rem;">
        <h6>Por favor, coloque o nome da rua e bairro. <br> Faça uma descrição detalhada.</h6>
        <form action="enviardenuncia.php" method="post">
        <p>Endereço:&nbsp;<input name="end" type="text" /></p>
        <p>Descrição:&nbsp;<input name="desc" type="text" /></p>
        <a class="nav-link" href="/enviar.php">Anexar imagem</a>
        <input type="submit" value="Enviar" />&nbsp;</form><p>&nbsp;</p>
    </center>
</body>
</html>