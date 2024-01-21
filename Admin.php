<?php
// Verificando se o usuário está autenticado
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: Login.html'); // Redirecionar para a página de login se não estiver autenticado
    exit();
}

// Aqui você pode incluir qualquer lógica específica do administrador ou exibir a interface de administração
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Página do Admin</title>
</head>
<body>
    <header>
        <h1>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h1>
    </header>
    <nav>
        <!-- Adicione links ou menus de navegação específicos do administrador aqui -->
        <ul>
            <li><a href="#">Opção 1</a></li>
            <li><a href="#">Opção 2</a></li>
            <!-- ... -->
        </ul>
    </nav>
    <main>
        <!-- Conteúdo principal da página de administração aqui -->
        <p>Esta é a página de administração.</p>
    </main>
    <footer>
        <a href="logout.php">Sair</a>
    </footer>
</body>
</html>