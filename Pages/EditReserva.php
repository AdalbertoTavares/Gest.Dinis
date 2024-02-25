<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../wwwroot/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar Reserva</title>

</head>
<body>
<header class="header">
    <!-- <h1>Bem-vindo<?php echo $_SESSION['$user_Name']; ?>!</h1>-->
    <a href="#" class="admin">Admin</a>
    <nav class="navbar">
        <a href="#" style=""></a>
        <a href="GestReservas.php" style="">Reservas</a>
        <a href="GestProfessores.php" style="">Professores</a>
        <a href="GestHardware.php" style="">Hardware</a>
        <a href="../Views/Login.html" action="../Controllers/processar_logout.php" method="post">
            <button type="submit">Logout</button> </a>
    </nav>
</header>

<div class="container admin-container">
    <?php
    require('..\Controllers\ReservaController.php');
    use Controllers\ReservaController;

    $reservaController = new ReservaController();
    $reservaController->GetReserva($_GET["reservaId"]);
    ?>
</div>
<footer>

    <img src="../wwwroot/images/rp%20(1).png" alt="Logo 1" class="logo">
    <img src="../wwwroot/images/Escola.jpg" alt="Logo 2" class="logo">
    <img src="../wwwroot/images/logo.png" alt="Logo 3" class="logo">
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>


