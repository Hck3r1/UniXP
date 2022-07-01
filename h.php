<?php
ini_set('display_errors', '1');
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


   
                    $emailreg = 'unixpadmin@wetindeycodeacademy.com.ng';
                
              


                 //Create instance of PHPMailer
$mail = new PHPMailer();
//Set mailer to use smtp
$mail->isSMTP();
//Define smtp host
$mail->Host = "mail.wetindeycodeacademy.com.ng";
//Enable smtp authentication
$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
$mail->SMTPSecure = "tls";
//Port to connect smtp
$mail->Port = "587";
//Set gmail username
$mail->Username= "unixpadmin@wetindeycodeacademy.com.ng";
//Set gmail password
$mail->Password = "unixpadmin";
//Email subject
$mail->Subject = "New Feedback";
//Set sender email
$mail->setFrom('unixpadmin@wetindeycodeacademy.com.ng');
//Enable HTML
$mail->isHTML(true);
//Attachment

//Email body
$mail->Body = "<style>

html,
body {
margin: 0 auto !important;
padding: 0 !important;
height: 100% !important;
width: 100% !important;
font-family: 'Roboto', sans-serif !important;
font-size: 14px;
margin-bottom: 10px;
line-height: 24px;
color: #8094ae;
font-weight: 400;
}
* {
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
margin: 0;
padding: 0;
}
table,
td {
mso-table-lspace: 0pt !important;
mso-table-rspace: 0pt !important;
}
table {
border-spacing: 0 !important;
border-collapse: collapse !important;
table-layout: fixed !important;
margin: 0 auto !important;
}
table table table {
table-layout: auto;
}
a {
text-decoration: none;
}
img {
-ms-interpolation-mode:bicubic;
}
</style>

<center style='width: 100%; background-color: #f5f6fa;'>
<table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f5f6fa'>
<tr>
<td style='padding: 40px 0;'>
    <table style='width:100%;max-width:620px;margin:0 auto;'>
        <tbody>
            <tr>
                <td style='text-align: center; padding-bottom:25px'>
                    <a href='https://wetindeycodeacademy.com.ng/hck3rr/UniXP'><img style='height: 110px' src='https://wetindeycodeacademy.com.ng/hck3rr/UniXP/assets/img/logo/unixp-logo-white.png' alt='unixp logo'></a>
                </td>
            </tr>
        </tbody>
    </table>
    <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
        <tbody>
                    <p style='margin-bottom: 10px; font-size: 18px;'></b></span><br><br>



<b>Our Website</b><br>
<i>wetindeycodeacademy.com.ng/hck3rr/UniXP</i></p>



                </td>
            </tr>



        </tbody>
    </table>
    <table style='width:100%;max-width:620px;margin:0 auto;'>
        <tbody>
            <tr>
                <td style='text-align: center; padding:25px 20px 0;'>

                </td>
            </tr>
        </tbody>
    </table>
</td>
</tr>
</table>
</center>";
//Add recipient
$mail->addAddress("$emailreg");

//Finally send email
if ( $mail->send() ) {
echo "<script>alert('Thanks , your feedback was sent successfully, we will review and get back to you real soon. UniXP Team❤️')
location.href='index.php'ipt>";
}
                
        ?>
