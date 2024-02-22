<?php
session_start();


if (isset($_SESSION["loggedUser"])) {

    echo '<pre>';
    print_r($_SESSION["loggedUser"]);
    echo '</pre>';
} /*else {

    header("Location: login.html");
    exit();
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Professor</title>
    <link rel="stylesheet" href="../wwwroot/css/professores.css"> <!-- Lembre-se de criar um arquivo CSS separado para estilos -->
</head>
<body>
<header class="header">
    <h1>Professores</h1>

    <nav class="navbar">
        <a href="#" style="">Requisitar</a>
        <a href="#" style="">Histórico de requisições</a>
    </nav>
</header>
<section>
    <h2>Dados do Professor</h2>
    <ul>
        <li><strong>Nome:</strong> Professor Fulano</li>
        <li><strong>Email:</strong> professor@example.com</li>
        <!-- Adicione mais informações do professor conforme necessário -->
    </ul>
</section>

<section>
    <h2>Equipamentos Requisitados</h2>
    <ul>
        <!-- Lista de equipamentos requisitados pelo professor -->
        <li>Laptop - Data de Requisição: 2024-01-24</li>
        <li>Projetor - Data de Requisição: 2024-01-23</li>
        <!-- Adicione mais itens conforme necessário -->
    </ul>
</section>

<section>
    <h2>Opções</h2>
    <button>Requisitar Novo Equipamento</button>
    <button>Ver Histórico de Requisições</button>
    <!-- Adicione mais opções conforme necessário -->
</section>


</body>
</html>

