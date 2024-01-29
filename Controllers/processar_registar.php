<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se os campos do formulário estão definidos
    if (isset($_POST["text"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        // Capturando os dados do formulário
        $userName = $_POST["text"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Adicione validações e lógica de processamento aqui

        // Exemplo de como você pode imprimir os dados para teste
        echo "User Name: " . $userName . "<br>";
        echo "Email: " . $email . "<br>";
        // Lembre-se de não exibir senhas em produção, este é apenas um exemplo
        echo "Password: " . $password . "<br>";
    } else {
        // Caso algum campo esteja ausente, exiba uma mensagem de erro
        echo "Erro: Todos os campos do formulário devem ser preenchidos.";
    }
}
?>

