<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['email']) && isset($_POST['pswd'])) {



        require_once "../Models/DBConnectionProvider.php";

        $pdoProvider = new DbConnectionProvider();
        $pdo = $pdoProvider->GetPDOConnection();


        $statement = $pdo->prepare("INSERT INTO professor (UserName, Password, Email) 

                    VALUES (:username,:email,:pswd)");


        $statement->bindParam(":email", $_POST['email']);
        $statement->bindParam(":pswd", $_POST['pswd']);
        $statement->bindParam(":username", $_POST['username']);

//  Criar classe para ir base de dados verificar se existe parametros identicos, se não guardar esses dados


        $result = $statement->execute();

        if ($result) {

            header("Location: login.html?message=registration_success");
            exit();
        } else {

            header("Location: registro.html?message=registration_error");
            exit();
        }
    } else {

        header("Location: registro.html?message=missing_fields");
        exit();
    }
} else {

    header("Location: registro.html");
    exit();
}
?>


