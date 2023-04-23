<?php

    require_once '../Model/UserAuth.php';


    if(!empty($_POST['email']) && !empty($_POST['password']) ){
        $studID = $_POST['studID'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $conpass = $_POST['conpass'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $grade = $_POST['grade'];
        $section = $_POST['section'];

        if($pass != $conpass){
            echo "Incorrect";
        }
        else if(strlen($pass) <= 4 || strlen($conpass) <= 4){
            echo "Short";
        }
        else{
            $userReg = new UserAuth($studID,$email,$pass,$fname,$mname,$lname,$grade,$section);
            if($userReg->userRegistration()){

                require '../vendors/PHPMailerAutoload.php';

                $codes = "<a href='http://localhost/elearning/index.php?confirmation=".$studID."' target='_blank'>CLICK HERE</a>";


                $mail = new PHPMailer;

                //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'klintoiyas@gmail.com';                 // SMTP username
                $mail->Password = 'qrpoktcoeqnwfvkf';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                $mail->setFrom('klintoiyas@gmail.com', 'Mailer');
                $mail->addAddress($email, 'Email User');     // Add a recipient

                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'Al-GEBRA Confirmation Needed';
                $mail->Body    = 'To confirm your registration, please click this link: '.$codes;

                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo "Success";
                }
            }else{
                echo "Failed";
            }
        }
        
    }

?>