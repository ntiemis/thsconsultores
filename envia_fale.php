.php
<?php
// Colocar na tag form os seguintes atributos: <form method="post" action="enviar.php">

$para = "thais@thsconsultores.com.br"; // Mudar o e-mail para o destinatário
$assunto = "Formulário de Contato"; // Assunto do E-mail
$mensagem = "<strong>Nome: </strong>".$_POST['nome']; // Campos do formulário. Colocar o equivalente no atributo name do campo.
$mensagem .= "<br><strong>E-mail: </strong>".$_POST['email']; // Campos do formulário. Colocar o equivalente no atributo name do campo.
$mensagem .= "<br><strong>Telefone: </strong>".$_POST['telefone']; // Campos do formulário. Colocar o equivalente no atributo name do campo.
$mensagem .= "<br><strong>Assunto: </strong>".$_POST['assunto']; // Campos do formulário. Colocar o equivalente no atributo name do campo.
$mensagem .= "<br><strong>Mensagem: </strong>".$_POST['mensagem']; // Campos do formulário. Colocar o equivalente no atributo name do campo.
$cabecalho =  "Content-Type:text/html; charset=UTF-8\n";
$cabecalho .= "From:  Contato pelo Site <thais@thsconsultores.com.br>\n"; // Mudar o e-mail para o destinatário
$cabecalho .= "X-Sender:  <thais@thsconsultores.com.br>\n"; // Mudar o e-mail para o destinatário
$cabecalho .= "X-Mailer: PHP  v".phpversion()."\n";
$cabecalho .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$cabecalho .= "Return-Path:  <thais@thsconsultores.com.br>\n"; // Mudar o e-mail para o destinatário
$cabecalho .= "MIME-Version: 1.0\n";
if(mail($para, $assunto, $mensagem, $cabecalho)) { 
     echo "<script type=\"text/javascript\">".
        "alert('Voce recebera um contato o mais breve possivel.');". // Mensagem exibida em caso de sucesso
        "window.location = 'index.html';". // URL que será redirecionado em caso de sucesso
        "</script>";
} else { 
     echo "Ocorreu um problema para enviar seu e-mail. Tente novamente."; // Mensagem de Erro
}