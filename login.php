<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if(($usuario != "") && ($senha != "")) {
if(file_exists("bd/" . $usuario . "_" . $senha . ".txt")) {
$fp = fopen("bd/" . $usuario . "_" . $senha . ".txt", "r");
$senha = fgets($fp);
setCookie("senha", $senha);
setCookie("usuario", $usuario);
echo "Login efetuado com sucesso. <a href='denuncia.php'>Prossiga</a>";
}
else {
echo "Erro, usuario ou senha incorretos.";
}
}
else {
echo "Erro, todos os campos devem ser digitados";
}
?>