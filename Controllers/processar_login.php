<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se os campos do formulário estão definidos
    if (isset($_POST["User_name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        // Capturando os dados do formulário
        $userName = $_POST["User_name"];
        $email = $_POST["email"];
        $password = $_POST["pswd"];



        // Simples verificação de exemplo
        if (verificarCredenciaisProfessor($user_Name, $password)) {
            // Login bem-sucedido, redirecionar para a página do professor
            header("Location: Professor.php");
            exit();
        } else {
            // Login falhou, exibir mensagem de erro
            echo "Erro: Credenciais de professor inválidas.";
        }
    } else {
        // Caso algum campo esteja ausente, exiba uma mensagem de erro
        echo "Erro: Todos os campos do formulário devem ser preenchidos.";
    }
}

// Função para verificar as credenciais do professor (exemplo)
function verificarCredenciaisProfessor($userName, $email, $password)
{
    // Aqui você deve implementar a lógica para verificar as credenciais no seu banco de dados ou sistema de autenticação
    // Este é apenas um exemplo simplificado
    return ($userName === "professor" && $email === "professor@example.com" && $password === "prof123");
}

