<?php
session_start();

include 'conexao_pdo.php';

$conn = getConnection();

$email = $_POST['Email'];
$senha = $_POST['Senha'];
$nome  = $_POST['Nome'];
$sobrenome = $_POST['Sobrenome'];
$telefone = $_POST['Telefone'];
$cidade = $_POST['Cidade'];
$estado  = $_POST['Estado'];
$cep  = $_POST['Cep'];


//	Guardo na variavel $sql a minha consulta ao banco de dados com os place-
$sql_insert = "INSERT INTO cadastro (email, senha, nome, sobrenome , telefone, cidade, estado, cep) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = $conn->prepare($sql_insert);


$stmt->bindValue(1, $email);
$stmt->bindValue(2, $senha);
$stmt->bindValue(3, $nome);		
$stmt->bindValue(4, $sobrenome);
$stmt->bindValue(5, $telefone);
$stmt->bindValue(6, $cidade);
$stmt->bindValue(7, $estado);
$stmt->bindValue(8, $cep);


if ($stmt->execute()) {
	header("location: login.html");
			return true;
} else {
	echo "Erro ao cadastrar";
	header("location: Cadastro.php");
}

exit;


?>
