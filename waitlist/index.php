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

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../assets/img/unixp-favicon.png">
    <title>Join UniXP Waitlist Now!!!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
		<h1>Join Our Waitlist</h1>
		<p class="subheading">Be the first to know when we launch!</p>
        <form method="POST">
            <?php
                                $rand = (rand(1000,9999));
                                $today = date("my");
                                $id = "unixp/".$today."/".$rand;
                                include('db.php');
                                error_reporting(E_ALL);
                                if(isset($_REQUEST['submit'])){
                                        $email = $_REQUEST['email'];
                                        $uin = $_REQUEST["uin"];

                                        $check = mysqli_query($conn, "SELECT * FROM waitlist WHERE email='$email'");
                                        $checkrows = mysqli_num_rows($check);
                                        if($checkrows > 0){
                                          echo "<script>alert('You have already joined the waitlist previously!')
                                          location.href='waitlist.php'</script>";
                                        }
                                        else{
                                           $sql="INSERT INTO waitlist (email, uin) VALUES('$email','$uin')";

                    mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    $num = mysqli_insert_id($conn);
                    if (mysqli_affected_rows($conn) !=1){
                      $message = "Error inserting into database";
                    }
                    $mail = new PHPMailer();
                    // Set mailer to use SMTP
                    $mail->isSMTP();
                    // define smtp host
                    $mail->Host = "";
                    // enable smtp authentication
                    $mail->SMTPAuth=true;
                    // set smtp encryption type
                    $mail->SMTPSecure="ssl";
                    $mail->Port="";
                    $mail->Username= "";
                    $mail->Password = "";
                    $mail->Subject ="You have succesfully joined UniXP's Waitlist";
                    $mail->setFrom('waitlist@unixp.ng', 'Feranmi from UniXP');
                    $mail->isHTML(true);
                    // Include the logo image as an embedded image
$logoPath = '../assets/img/logo/unixp-logo-white.png'; // Replace with the actual path to your logo image
$mail->addEmbeddedImage($logoPath, 'logo', 'Logo'); // Add the logo image as an embedded image
                    $mail->Body = "<html>
                    <head>
                        <style>
                            /* CSS styles for the email */
                            .logo-container {
                                text-align: center;
                                margin-bottom: 20px;
                            }
                            .logo {
                                max-width: 200px;
                            }
                            
                        </style>
                    </head>
                    <body>
                        <p>Dear $email,</p>
                        <p>Thank you for joining our waitlist! We are excited to have you on board.</p>
                        <p>If you have any questions or need further assistance, please dont hesitate to contact us.</p>
                        <p>Best regards,<br>
                        The UniXP Team</p>

                        <div class='logo-container'>
                            <div class='logo'>
                                <img src='cid:logo' alt='Logo'>
                            </div>
                        </div>
                    </body>
                </html>";
                    $mail->addAddress($email);
                    if (!$mail->send()){
                        throw new Exception($mail->ErrorInfo) ;
                    }else{
                        echo "<script>alert('You have succesfully joined UniXP`s waitlist with the email address: $email. Stay Tuned for our updates!')
                      location.href='index.php'</script>";
                    }
                   }
                  }
                                       
                                    
                            ?>
                            <div>
                                    <input type="hidden" name="uin" class="form-control" id="exampleInputEmail1" value="<?php echo $id ?>" >
                            </div>
            <label for="email">Email:</label>
			<div class="input-wrapper">
				<input type="email" id="email" placeholder="Enter your email address" name="email" required>
				<button name="submit" type="submit">Join Now</button>
            </div>
        </form>
    </div>
</body>
</html>
