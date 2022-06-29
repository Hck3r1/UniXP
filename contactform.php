<?php
ini_set('display_errors', '1');
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>
<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];



        $mailTo = 'unixpsupport@wetindeycodeacademy.com.ng';
        $headers = "From " .$mailFrom;
        $txt = "You have received an email from" .$name."\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsend");
    }
// Create instance of PHPMailer
                    $mail = new PHPMailer();
                    // Set mailer to use SMTP
                    $mail->isSMTP;
                    // define smtp host
                    $mail->Host = "mail.wetindeycodeacademy.com.ng";
                    // enable smtp authentication
                    $mail->SMTPAuth="true";
                    // set smtp encryption type
                    $mail->SMTPSecure="tls";
                    $mail->Port="587";
                    $mail->Username= "unixpsupport@wetindeycodeacademy.com.ng";
                    $mail->Password = "unixp001$";
                    $mail->Subject ="UniXP Support";
                    $mail->setFrom('$mailFrom');
                    $mail->isHTML(true);
                    $mail->Body = "Hi '$name,' '$suject' '$message'";
                    $mail->addAddress("$email");
                    if ($mail->send()){
                      echo "<script>alert('Dear $name, you have succesfully sent your feedback, we wil get back to you!')</script>";
                    }

?>