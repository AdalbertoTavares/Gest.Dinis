<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

require_once "../Models/LoginManager.php";

$loginManager = new LoginManager();

$loginManager->AdminLogIn($_POST['email'], $_POST['pswd']);

