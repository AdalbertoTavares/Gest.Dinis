<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Professor</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lembre-se de criar um arquivo CSS separado para estilos -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        section {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #0066cc;
            font-weight: bold;
        }

        button {
            padding: 10px;
            background-color: #0066cc;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<header>
    <h1>Painel do Professor</h1>
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

