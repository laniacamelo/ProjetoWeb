<?php
	include 'conexao_pdo.php';
	$conn = getConnection();

	$id = $_GET['id'];

	$sql = 'DELETE FROM cadastro WHERE id=:id';

	$stmt = $conn->prepare($sql);

	if ($stmt->execute([':id' =>$id])) {
		header("Location: imprimir.php");
	}

?>