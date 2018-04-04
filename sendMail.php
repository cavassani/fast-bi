<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$select = trim($_POST['select']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);


if($name != null && $email != null && $message != null){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $signal = 'bad';
        $msg = 'Por favor Coloque um e-mail válido';
    }
    else{// Passing `true` enables exceptions
        $mail = new PHPMailer(true);  
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'host.superdominiosparking.org';  // Specify main and backup SMTP servers
    // $mail->SMTPOptions = array(
    //                 'ssl' => array(
    //                     'verify_peer' => false,
    //                     'verify_peer_name' => false,
    //                     'allow_self_signed' => true
    //                 )
    //             );
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'contato@fastbi.com.br';                 // SMTP username
    $mail->Password = '16061993Rr';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('contato@fastbi.com.br', $name);
    $mail->addAddress('marceloscavassani@gmail.com', 'ronancito');     // Add a recipient

    // $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    // $mail->isSMTP();                                      // Set mailer to use SMTP
    // $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    // $mail->SMTPOptions = array(
    //                 'ssl' => array(
    //                     'verify_peer' => false,
    //                     'verify_peer_name' => false,
    //                     'allow_self_signed' => true
    //                 )
    //             );
    // $mail->SMTPAuth = true;                               // Enable SMTP authentication
    // $mail->Username = 'marceloscavassani@gmail.com';                 // SMTP username
    // $mail->Password = 'ax5bty77@google';                           // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    // $mail->Port = 587;                                    // TCP port to connect to

    // //Recipients
    // $mail->setFrom('marceloscavassani@gmail.com', $name);
    // $mail->addAddress('marceloscavassani@gmail.com', 'ronancito');     // Add a recipient


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contato FastBI';
    $mail->Body    = 
    '<div align="center"><div align="center" style="
    display:inline-block;
    background-color:#fff;
    height:auto;
    width:auto;
    ">
       <div style="
       background-color:rgba(192,192,192,0.3);
       display:inline-block;
       width:100%;
       height:100px;
       text-align:center;
       color:black;
       align-content:center;
       "><h1 style="margin-top:40px;">Detalhes do Contato</h1>
       </div>
       <table style="background-color:rgb(255, 249, 249); color: #4a4646; margin:0px; padding:20px;">
       <tr>
       <td>Nome do contato :</td><td><h3>'.$name.'</h3></td></tr>
       <tr><td>E-mail :</td><td><h3 text-decoration="none">'.$email.'</h3></td></tr>
       <tr><td>Telefone :</td><td><h3>'.$phone.'</h3></td></tr>
       <tr><td>Motivo do contato:</td><td><h3>'.$select.'</h3></td></tr>
       <tr><td>Aceitou o termo? :</td><td><h3>Sim</h3></td></tr>
       <tr><td>Mensagem :</td><td><p>'.$message.'</p></td>
        </table>
       <div text-align="center" style="
        background-color:rgb(109, 160, 212);
        padding:5px;
        height:auto;
        overflow:hidden;">
        <h4 style="color:#fff;">FAST BI</h4></div>
    </div>
    </div>'
    
    ;
    if(!$mail->send()) {
        echo 'Mensagem não pode ser enviada.';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
        $signal = 'ok';
        $msg = 'enviado';
    }
}
}
else{
$signal = 'bad';
$msg =  'Erro: ' .$mail->ErrorInfo;
}
$data = array(
'signal' => $signal,
'msg' => $msg
);
echo json_encode($data);
