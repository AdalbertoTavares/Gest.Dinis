<?php
// Verificando se o usuário está autenticado
session_start();
/*
if (!isset($_SESSION['username'])) {
    header('Location: Login.html'); // Redirecionar para a página de login se não estiver autenticado
    exit();
}*/

// Aqui você pode incluir qualquer lógica específica do administrador ou exibir a interface de administração
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../wwwroot/css/admin.css">
    <title>Página do Admin</title>

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

    <main>
        <!-- Conteúdo principal da página de administração aqui -->
        <p></p>
    </main>
    <footer>

        <img src="../wwwroot/images/rp%20(1).png" alt="Logo 1" class="logo">
        <img src="../wwwroot/images/Escola.jpg" alt="Logo 2" class="logo">
        <img src="../wwwroot/images/logo.png" alt="Logo 3" class="logo">
    </footer>

</body>

</html>






