<?php
 
    session_start();
    include "conexao_pdo.php";
    $conn = getConnection();  
    
        

        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $senha= isset($_POST['senha']) ? $_POST['senha'] : null;
        $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
        $sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : null;
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
        $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
        $estado = isset($_POST['estado']) ? $_POST['estado'] : null;
        $cep = isset($_POST['cep']) ? $_POST['cep'] : null;
        $id = $_GET['id'];
        
         

       
         
        $sql = "UPDATE cadastro SET  email = :email, senha = :senha, nome = :nome, sobrenome = :sobrenome, telefone = :telefone, cidade = :cidade, estado = :estado, cep = :cep WHERE id = :id";
        $stmt = $conn->prepare($sql);
        
        $stmt->execute(array(
            ':id' => $id,
            ':email' => $email,
            ':senha' => $senha,
            ':nome' => $nome,
            ':sobrenome' => $sobrenome,
            ':telefone' => $telefone,
            ':cidade' => $cidade,
            ':estado' => $estado,
            ':cep' => $cep
        ));


 
    if ($stmt->execute()) {
        header("location: imprimir.php");
                return true;
    } else {
        echo "Erro ao cadastrar";
        header("location: Cadastro.php");
    }

?>