<?php

require_once "../Models/LoginManager.php";

$loginManager = new LoginManager();

$loginManager->LogProfessorIn($_POST['email'], $_POST['pswd']);

