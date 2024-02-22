<?php

class DbConnectionProvider
{
    Public function GetPDOConnection (): ?PDO
    {
        try {

            $pdo = new PDO("mysql:dbname=gestd.dinis;host=localhost:3306", "root", "");

            // Set PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Other PDO configurations if needed
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            return $pdo;

        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }
    }


}
?>




