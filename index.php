<?php
    $dsn = "mysql:dbname=index;host=127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    

    try
    {
        $pdo = new PDO($dsn,$dbuser,$dbpass);
        echo "Conexão concluido com sucesso !  <br><br>";
        
        $sql = "SELECT * FROM posts";
        $dado = $pdo->query($sql);
        
        if ($dado->rowCount() > 0)
        {
            echo "Há posts cadastrados";
        }
        else
        {
            echo "Não há posts cadastrados";
        }
    }
    catch(PDOException $e)
    {
        echo "Conexão falhou :(".$e->getMessage();
    }
?>