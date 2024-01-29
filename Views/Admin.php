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
    <header>
       <!-- <h1>Bem-vindo<?php echo $_SESSION['$user_Name']; ?>!</h1>-->
        <a href="#" class="admin">Admin</a>

        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">Reservas</a>
            <a href="#">Professores</a>
            <a href="#">Hardware</a>
        </nav>
    </header>

    <main>
        <!-- Conteúdo principal da página de administração aqui -->
        <p></p>
    </main>
    <footer>
        <a href="logout.php">Sair</a>
    </footer>
</body>
</html>