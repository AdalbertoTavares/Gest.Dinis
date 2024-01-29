/* Verificação dos dados de login do administrador : redirecionar para uma página de acordo com os dados/*

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se os campos do formulário estão definidos
    if (isset($_POST["text"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        // Capturando os dados do formulário
        $userName = $_POST["text"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Adicione lógica de verificação do login do administrador aqui
        // Por exemplo, você pode consultar um banco de dados para verificar as credenciais

        // Simples verificação de exemplo
        if ($userName === "admin" && $email === "admin@example.com" && $password === "admin123") {
            // Login bem-sucedido, redirecionar para a página do administrador
            header("Location: Admin.php");
            exit();
        } else {
            // Login falhou, exibir mensagem de erro
            echo "Erro: Credenciais de administrador inválidas.";
        }
    } else {
        // Caso algum campo esteja ausente, exiba uma mensagem de erro
        echo "Erro: Todos os campos do formulário devem ser preenchidos.";
    }
}
?>
