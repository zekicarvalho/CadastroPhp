<?php
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$mail = $_POST['mail'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$end = $_POST['end'];
$tel = $_POST['tel'];
$cid = $_POST['cid'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
if(($nome != "") && ($mail != "") && ($rg != "") && ($cpf != "") && ($end != "") && ($tel != "") && ($cid != "") && ($bairro != "") && ($estado != "") && ($usuario != "") && ($senha != "")) {
if(file_exists("bd/$usuario.txt")) {
echo "Erro, o usuario ja existe";
}
else {
$fp = fopen("bd/$usuario.txt", "w");
$linhafp = fwrite($fp, " ");
fclose($fp);
$bd = fopen("bd/" . $usuario . "_" . $senha . ".txt", "w");
$linhabd = fwrite($bd, "Email:" . $mail . " Nome:" . $nome . " RG: " . $rg . " Cpf:" . $cpf . " Endereço:" . $end . " Telefone:" . $tel . " Cidade:" . $cid . " Bairro:" . $bairro . " Estado:" . $estado);
echo "Cadastro registrado com sucesso. <a href='denuncia.php'>Prossiga para a denuncia.</a>";
}
}
else {
echo "Erro, todos os campos devem ser digitados.";
}
?>