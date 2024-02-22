<?php

class UserRegistration
{
    // Placeholder for database connection or any other required initialization
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function RegisterUser($email, $UserName, $password)
    {
        // Verify if user already exists
        $userExists = $this->VerifyIfUserExist($email);

        if (!$userExists) {
            // User does not exist, proceed with registration
            $this->CreateUser($email, $UserName, $password);
            echo "User registered successfully!";
        } else {
            // User already exists, redirect to login page
            header("Location: login.php?user_exists=true");
            exit();
        }
    }

    private function VerifyIfUserExist($email)
    {

        $query = "SELECT * FROM professor WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":email", $email);

        $stmt->execute();
        $user = $stmt->fetch();
        return ($user !== false);
    }

    private function CreateUser($email, $UserName, $password)
    {

        $query = "INSERT INTO professor ($email,  $UserName, $password) VALUES (:email , :UserName, :pswd)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':UserName', $UserName);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $user = $stmt->fetch();
    }
}


$db = new  DbConnectionProvider();
$userRegistration = new UserRegistration($db->GetPDOConnection());
$userRegistration->RegisterUser("example@example.com", "example@UserName.com", "example@password.com");

