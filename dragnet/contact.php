<?php
// require_once "contactDb.php";
        
        //Message Variables
        $msg = '';
        $msgClass = '';

        //Check for Submit
        if(filter_has_var(INPUT_POST,'submit')){
        // echo 'Submitted';
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        }

        //Check Required Fields
        if(!empty($name) && !empty($email) && !empty($message)){
              //passed
              //Check Email
          if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            //failed
            $msg = 'Please use a valid email';
            $msgClass = 'alert-danger';
          }
          else {
            //passed
            // Recipient Email
            $toEmail = 'dragnetgroup@gmail.com';
            $subject = 'Contact Feedback From ' .$name;
            $body = '<html><body>';
            $body .= '<div style="width: 100%; height: 100%; align-items:center; background-color:black; color:white;"><h1 style="color:#f40; padding-left: 30px;">Feedback Form</h1>';
            $body .= '<p style="color:#fff;font-size:16px; padding-left: 30px;"> <strong>NAME:</strong> ' .$name. '</p>';
            $body .= '<p style="color:#fff;font-size:16px; padding-left: 30px;"> <strong>EMAIL:</strong> ' .$email. '</p>';
            $body .= '<p style="color:#fff;font-size:16px; padding-left: 30px;"> <strong>MESSAGE:</strong> ' .$message. '</p> </div>';
            $body .= '</body></html>';

            //Email Headers
            $headers = "MIME-Version: 1.0" ."\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        

            //Additional Headers
            $headers .= 'From: ' .$name. '<' .$email. '>' ."\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
                //Email Sent
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            }
            else{
                   //Email Failed
                $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
            }
          }
        } else {
              //Failed
              $msg = 'Please fill in all fields';
              $msgClass = 'alert-danger';
        }
          ?>

