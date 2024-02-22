<?php

require_once '../Models/DBConnectionProvider.php';
 class LoginManager
 {

    public function verificarUsuarioPorEmail($email) {

    }
     public function AdminLogIn(string $email, string $password): void
     {
         if (!isset($email) || !isset($password)) {
             header("Location: ../Views/Login_Admin.html?message=email_or_password_empty");
             return;
         }

         $pdoProvider = new  DbConnectionProvider();
         $pdo = $pdoProvider->GetPDOConnection();
         $statement = $pdo->prepare("SELECT  * FROM admins WHERE Email = :email AND password = :pswd");

        $statement->bindParam(":email", $email);
        $statement->bindParam(":pswd", $password);

         $statement->execute();
         $possibleUser = $statement->fetch();

         if (!$possibleUser) {

             header("Location: ../Views/login_Admin.html?message=user_not_found");
         } else {

             session_start();

             $_SESSION["loggedUser"] = $possibleUser;
             session_write_close();

             header("Location: ../Views/Admin.php");
         }

     }


     public function LogProfessorIn(string $email, string $password): void
     {
         if (!isset($email) || !isset($password)) {
             header("Location: ../Views/Login.html?message=email_or_password_empty");
             return;
         }

         $pdoProvider = new DbConnectionProvider();
         $pdo = $pdoProvider->GetPDOConnection();
         $statement = $pdo->prepare("SELECT * FROM professor WHERE Email = :email AND password = :pswd");


         $statement->bindParam(":email", $email);
         $statement->bindParam(":pswd", $password);

         $statement->execute();

         $possibleUser = $statement->fetch();

         if (!$possibleUser) {

             header("Location: ../Views/login.html?message=user_not_found");
         } else {

             session_start();

             $_SESSION["loggedUser"] = $possibleUser;
             session_write_close();

             header("Location: ../Views/Professor.php");
         }

     }
 }

