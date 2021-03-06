<?php 
require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
    //"debug"         => true, // set to false to improve the speed
);
//trocar os camihos de imagens
Tpl::configure( $config );

// Add PathReplace plugin (necessary to load the CSS with path replace)
//Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );

// create the Tpl object
$tpl = new Tpl;

// assign a variable - Passando variáveis
$tpl->assign( "name", "Alex Ramon" );
$tpl->assign( "version", PHP_VERSION );
// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// draw the template
$html = $tpl->draw("index", true);


#######################################################

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output - formato do bug
$mail->Debugoutput = 'html';

//Servidor de email
//Poderia colocar outros emil(que tenha mesmo nome de usuario e senha)
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "alexramonsg@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Ninja814383";

//Set who the message is to be sent from
$mail->setFrom('alexramonsg@gmail.com', 'Alex Ramon');

//Responder para
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Para quem quer enviar - destinatário
//robsonalvesnovaes@gmail.com
$mail->addAddress('allex.ramon.ti@gmail.com', 'Teste com email');

//Assunto do E-mail
$mail->Subject = 'Testando a classe PHPMailer - Alex Ramon';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//Pega o conteúdo de um arquivo - no caso o html que está no mesmo diretório
//$mail->msgHTML(file_get_contents("content"), dirname(__FILE__));
$mail->msgHTML($html);

//Replace the plain text body with one created manually
//Caso o msgHTML não funcione essa segundo opção vai fazer sua parte e enviar uma mensagem em texto
//Corpo alternativo caso não suporte o html
$mail->AltBody = 'This is a plain-text message body';

//Coloca uma imagem para o remetente
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mensagem não enviada! Erro: " . $mail->ErrorInfo;
} else {
    echo "Mensagem enviada!";
}


 ?>