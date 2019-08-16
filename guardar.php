<?php
    $dsn = "mysql:dbname=index;host=127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    

    try
    {
        $pdo = new PDO($dsn,$dbuser,$dbpass);
        
        $titulo = "Tudo sobre CMS";
        $autor = "Juliano";
        $data_criado = "2020-08-16 00:00:00";
        $conteudo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        
        $sql = "INSERT INTO posts SET titulo = '$titulo', autor = '$autor', data-criado = '$data_criado', conteudo = '$conteudo'";
        
        $pdo->query($sql);
        
        echo "Título inserido com sucesso: ".$pdo->lastInsertId();
    }
    catch(PDOException $e)
    {
        echo "Conexão falhou :(".$e->getMessage();
    }
?>