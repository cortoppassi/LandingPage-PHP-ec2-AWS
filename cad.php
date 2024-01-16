<?php 
    include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $msgUsuario = filter_input(INPUT_POST, 'msgUsuario', FILTER_SANITIZE_SPECIAL_CHARS);

    echo "msgUsuario: ". htmlspecialchars($msgUsuario). "<br>";
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";

    $result_usuario = "INSERT INTO usuarios (msgUsuario) VALUES ('$msgUsuario')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

     header("Location: {$_SERVER['HTTP_REFERER']}");
     exit;
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    try {
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.live.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'jonathan-516@hotmail.com';                     //SMTP username
        $mail->Password   = '!JavaScript2022!';                               //SMTP password dpzp quvi luea mwkn
        $mail->SMTPSecure = 'tls';
        $mail->Port = 465;            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // Ajuste no tempo limite
        $mail->Timeout = 60;
        // Um servidor SMTP (Simple Mail Transfer Protocol) é um servidor de correio eletrônico responsável por enviar e rotear e-mails na Internet.
        
        $mail->setFrom('jonathan-516@hotmail.com', 'Jonathan');
        $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $mail->addAddress('jonathan-516@hotmail.com', '$nome');     //Add a recipient

        $mail->addReplyTo('jonathan-516@hotmail.com', 'Information');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'IMERSÃO PHP SEM MISTÉRIOS';
        $mail->Body    = 'This is the HTML message body <b>Uma jornada intensiva e imersiva no universo da programação web. Durante esse período concentrado, os participantes têm a oportunidade de aprimorar suas habilidades no desenvolvimento de aplicações dinâmicas usando PHP, uma linguagem versátil e amplamente utilizada.</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'E-mail enviado com sucesso!';
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$e->getMessage()}";
}
