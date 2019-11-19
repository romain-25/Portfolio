  
<?php 
$retour = mail('contact@romain-rouabah.fr', 'Envoi depuis la page Contact', $_POST['message']);
if ($retour) {
        echo "Votre message a été envoyé!";
}
?>

<?php
        $name = $email = $message = "";
        $isSuccess = false;
        $emailTo = "contact@romain-rouabah.fr";

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
                $name = verifyInput($_POST["name"]);
                $email = verifyInput($_POST["email"]);
                $message = verifyInput($_POST["message"]);
                $isSuccess = true;
                $emailTextm= "";

                if(empty($name))
                {
                        $isSuccess = false;
                }
                else{
                        $emailText .= "Name: $name\n";
                }

                if(empty($email))
                {
                        $isSuccess = false;
                }
                else{
                        $emailText .= "Email: $email\n";
                }

                if(empty($message))
                {
                        $isSuccess = false;
                }
                else{
                        $emailText .= "Message: $message\n";
                }

                if($isSuccess)
                {
                        $headers = "From: $name <$email>\r\nReply-To: $email";
                        mail($emailTo, "Un message de votre site", $emailText , $headers);
                        $name = $email = $message = "";
                }
        }

        function isEmail($var)
        {
                return filtre_var($var, FILTER_VALIDATE_EMAIL);
        }

        function verifyInput($var)
        {
                $var = trim($var);
                $var = stripslashes($var);
                $var = htmlspecialchars($var);
                return $var;
        }
?>

