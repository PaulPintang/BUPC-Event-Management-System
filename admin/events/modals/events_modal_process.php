<?php

  include "../../conn.php";
       require_once("./PHPMailer/src/PHPMailer.php");
       require_once("./PHPMailer/src/SMTP.php");
  
   if(isset($_POST['save'])){
        $eName = $_POST['eName'];
        $eDescription = $_POST['eDescription'];
        $eObjectives = $_POST['eObjectives'];
        $rules = $_POST['rules'];
        $eLocation = $_POST['eLocation'];
        $startdate = $_POST['startdate'];
        $startime = $_POST['startime'];
        $enddate = $_POST['enddate'];
        $endtime = $_POST['endtime'];


        // $rec = mysqli_query($db, "SELECT * FROM studentsAcc WHERE setEmails=1");

        $query = "INSERT INTO events (eName, eDescription, eObjectives, rules, eLocation, startdate, startime, enddate, endtime) VALUES ('$eName', '$eDescription', '$eObjectives', '$rules', '$eLocation', '$startdate', '$startime', '$enddate', '$endtime')";
        mysqli_query($db, $query);

        // if (mysqli_num_rows($rec)>0) {
        //     $body = "
        //         <h1>Hi pota ka !!</h1>
        //         <p>Please join this events <b> $eName </b> POTA !!</p>
        //     ";

        //     $mail = new PHPMailer\PHPMailer\PHPMailer();
        //     $mail->SMTPDebug = 3;
        //     $mail->isSMTP();
        //     $mail->Host = "mail.smtp2go.com";
        //     $mail->SMTPAuth = true;
        //     $mail->Username = "bicol-u.edu.ph";
        //     $mail->SMTPSecure = "tls";
        //     $mail->Port = "2525";
        //     $mail->From = "bupccsc@bicol-u.edu.ph";
        //     $mail->FromName = "BUPC College Student Council 2021";
        //     while ($x=mysqli_fetch_assoc($rec)) {
        //         $mail->addAddress($x['buEmail']);
        //     }
        //     $mail->isHTML(true);
        //     $mail->Subject = "EVENT: $eName";
        //     $mail->Body = $body;
        //     $mail->AltBody = "This is the plain text version of the email content!";

        //     if (!$mail->send()) {
        //         echo "Mailer Error";
        //     }else{
        //     echo '<script type="text/javascript">window.location="../index.php"</script>';
        //     }
        // }
 

        header("location: ../index.php");
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $eName = $_POST['eName'];
        $eDescription = $_POST['eDescription'];
        $eObjectives = $_POST['eObjectives'];
        $rules = $_POST['rules'];
        $eLocation = $_POST['eLocation'];
        $startdate = $_POST['startdate'];
        $startime = $_POST['startime'];
        $enddate = $_POST['enddate'];
        $endtime = $_POST['endtime'];

        mysqli_query($db, "UPDATE events SET eName='$eName', eDescription='$eDescription', eObjectives='$eObjectives', rules='$rules', eLocation='$eLocation', startdate='$startdate', startime='$startime', enddate='$enddate', endtime='$endtime'  WHERE id=$id");
        header('location: ../index.php');
        }
?>