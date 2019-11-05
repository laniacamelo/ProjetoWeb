<?php


function getConnection(){
    /*criamos a variavel $dsn (data source name) onde guarda as informações
    do servidor e nome do banco de dados
    */
    $dsn = "mysql:host=localhost;dbname=id9552816_pessoas";
    $user = 'id9552816_lania0906';
    $password = '12345678';

    try {
        $pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
    } catch (PDOException $ex){
        echo 'Error: '. $ex->getMessage();
        return false;
    }
return $pdo;
}
getConnection();

?>
