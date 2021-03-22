<?php
   use PHPMailer\PHPMailer\PHPMailer;

   if (isset($_POST['name']) && isset($_POST['clt_mail']) && isset($_POST['madate'])){
        $taken_rdv =$_POST['madate'];
        $clt_mail= $_POST['clt_mail'];
        $state_desc = $_POST['state_desc'];
        $clt_name = $_POST['name'];
        $clt_phone = $_POST['phone'];

        $subject = "Notification : prise de RDV pour saado Fiduciaire";
        $body = "<br><br>Mr/Mme. ".$clt_name." a pris le rendez-vous suivant <br> Date et heure: <b>".$taken_rdv."</b><br>Nom : ".$clt_name."<br>Email: ".$clt_mail."<br> description du cas: ".$state_desc;
     
        //enregister le RDV dans la db 
        $con = mysqli_connect("localhost","root","root","saadodb");
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $req1 = "INSERT INTO `saado_appointment` (`id`,`name`, `rdv_date`, `client_email`, `phone_number`,`description`, `status`) VALUES (NULL,'".$clt_name."','".$taken_rdv."', '".$clt_mail."','".$clt_phone."', '".$state_desc."', 'taken');";
        if ($con->query($req1) === TRUE) {
            echo "votre RDV a été pris avec succes, ";
       //une fois la requette passe sans erreur on envoie un email de confirmation à l'administrateur et au client
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "saado.fiduciaire@gmail.com";//origin de l'email
        $mail->Password = 'saadofiduciaire123!';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($clt_mail, $clt_name);
        $mail->addAddress("saado.fiduciaire@gmail.com");//receiver
        $mail->addAddress($clt_mail);//receiver
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "un email de confirmation vous a été envoyé sur ".$clt_mail.'.';
        } else {
            $status = "failed";
            $response = "une erreur empêche l'envoie du mail: <br><br>" . $mail->ErrorInfo;
        }

        exit($response);

        } else {
            //echo "Error: " . $req1 . "<br>" . $con->error;
        $response = $con->errno==1062 ? "la date choisie n'est pas libre, veuillez choisir une autre" : "Error: " . $req1 . "<br>" . $con->error;
         //  echo  "Error: " . $con->errno ;
        echo $response;
        }

       $con->close();
}
?>
