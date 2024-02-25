<?php
// Carrega o autoloader do Composer
require_once '../Models/PhpMailer/PHPMailer.php';
require_once '../Models/PhpMailer/Exception.php';

// Importa as classes necessárias do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$mail = new PHPMailer(true);
$novaSenha = new PHPMailer();

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Endereço do servidor SMTP
    $mail->SMTPAuth   = true;                  // Habilita autenticação SMTP
    $mail->Username   = 'gestdinis_client_service@gmail.com'; // Seu endereço de e-mail
    $mail->Password   = 'gest123';           // Sua senha de e-mail
    $mail->SMTPSecure = 'tls';                 // TLS ou SSL, dependendo das configurações do seu servidor
    $mail->Port       = 587;                   // Porta SMTP

    // Remetente e destinatário
    $email->setFrom('gestdinis_client_service@gmail.com', 'Gest Dinis Supporte');
    $email->addAddress($email); // E-mail do destinatário
    $email->Subject = 'Recuperação de Senha';
    $email->Body    = 'Sua nova senha é: ' . $novaSenha;

    // Envia o e-mail
    $mail->send();
    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo 'Erro ao enviar e-mail: ', $mail->ErrorInfo;
}

