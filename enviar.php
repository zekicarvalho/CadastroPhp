<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Imagem</title>
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
		.body { background-color: black;}
		.card { background-color: white;}
	</style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
		<span class="navbar-text">
          Enviar Imagem
    </nav>
    <center>
        <div class="card" style="width: 18rem;">
            <h6>Por favor, coloque o endereço como nome da imagem.</h6>
            <form method="post" enctype="multipart/form-data" action="imagem.php">
                Selecione uma imagem: <input name="arquivo" type="file" />
                <input type="submit" value="Salvar" />
             </form>
            </center>
</body>
</html>