<?php 

session_start();

$_SESSION['Cor'] = "Verde";
$_SESSION['Carro'] = "Veloster";

echo $_SESSION['Cor'].'<br>'.$_SESSION['Carro'].'<br>'.session_id();
?>
