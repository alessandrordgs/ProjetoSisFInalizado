<?php


$nomeUsuario = $_POST['nomeUsuario'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$dataNascimento = date('d-m-Y', strtotime($_POST["dataNascimento"]));
$email = $_POST['email'];

echo "Nome: " . $nomeUsuario;
echo "</br>";
echo "cpf: " . $cpf;
echo "</br>";
echo "email: " . $email;
echo "</br>";
echo "celular: " . $celular;
echo "</br>";
echo "data de Nascimento: " . $dataNascimento;
echo "</br>";


?>