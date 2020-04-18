<?php
$desc = $_POST['desc'];
$end = $_POST['end'];
if(($desc != "") && ($end != "")) {
if(file_exists("denuncias/$desc.txt")) {
echo "Denuncia repetida.";
}
else {
$fp = fopen("denuncias/$desc.txt", "w");
$linhafp = fwrite($fp, " ");
fclose($fp);
$denuncias = fopen("denuncias/" . $desc . ".txt", "w");
$linhabd = fwrite($denuncias, "descriçao:" . $desc . " Endereço:" . $end);
echo "Denuncia enviada. <a href='denuncia.php'>Voltar.</a>";
}
}
else {
echo "Erro, todos os campos devem ser digitados.";
}
?>