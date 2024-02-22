<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  <link rel="stylesheet" href="../wwwroot/css/gestprofessores.css">-->
    <link rel="stylesheet" href="../wwwroot/css/admin.css">
    <title>GestProfessores</title>
    <style>

    </style>
</head>
<body>
<header class="header">
    <!-- <h1>Bem-vindo<?php echo $_SESSION['$user_Name']; ?>!</h1>-->
    <a href="#" class="admin">Admin - Professor</a>
    <nav class="navbar">
        <a href="#" style=""></a>
        <a href="#" style="">Lista de Professores</a>
        <a href="#" style="">Adicionar Professor</a>
        <a href="#" style="">Inativos</a>
        <a href="../Views/Login.html" action="../Controllers/processar_logout.php" method="post">
            <button type="submit">Logout</button> </a>
    </nav>
</header>

<footer>

    <img src="../wwwroot/images/rp%20(1).png" alt="Logo 1" class="logo">
    <img src="../wwwroot/images/Escola.jpg" alt="Logo 2" class="logo">
    <img src="../wwwroot/images/logo.png" alt="Logo 3" class="logo">
</footer>
</body>
</html>
