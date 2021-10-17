<?php

  include "../../conn.php";
  use PHPMailer\PHPMailer\PHPMailer;

       require_once("./PHPMailer/src/PHPMailer.php");
       require_once("./PHPMailer/src/SMTP.php");
       require_once("./PHPMailer/src/Exception.php");

       $rec = mysqli_query($db, "SELECT * FROM studentsacc ");

   if(isset($_POST['save'])){
        $id = $_POST['id'];
        $user = $_POST['user'];
        $eName = $_POST['eName'];
        $eDescription = $_POST['eDescription'];
        $eObjectives = $_POST['eObjectives'];
        $rules = $_POST['rules'];
        $eLocation = $_POST['eLocation'];
        $startdate = $_POST['startdate'];
        $startime = $_POST['startime'];
        $enddate = $_POST['enddate'];
        $endtime = $_POST['endtime'];
        // $activity = $_POST['activity'];

        $body = "
        <h1>Hi pota ka !!</h1>
        <p>Please join this events <b> $eName </b> POTA !!</p>
    ";
        // $rec = mysqli_query($db, "SELECT * FROM studentsAcc WHERE setEmails=1");

        $query = "INSERT INTO events (eName, eDescription, eObjectives, rules, eLocation, startdate, startime, enddate, endtime, addby) VALUES ('$eName', '$eDescription', '$eObjectives', '$rules', '$eLocation', '$startdate', '$startime', '$enddate', '$endtime', '$user')";
        mysqli_query($db, $query);
        // activity log
            // mysqli_query($db, "UPDATE logs SET activity='$eName' WHERE id=$id");
            // mysqli_query($db, "INSERT INTO userActivity (username, activity) VALUES ('$user','$eName')");
        // end

        
        $mail = new PHPMailer();


        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "collegestudent.council1@gmail.com"; //enter you email address
        $mail->Password = 'CSCpassword'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
       
        $mail->From = "admin.collegestudent.council1@bicol-u.edu.ph";
        $mail->FromName = "BUPC College Student Council 2021";
        while ($row=mysqli_fetch_assoc($rec)) {
            $mail->addAddress($row['buEmail']);
        }
        $mail->isHTML(true);
        $mail->Subject = "Event: $eName";
        $mail->Body = $body;
        $mail->AltBody = "This is the plain text version of the email content";
       
       
                   if (!$mail->send()) {
                       echo "Mailer Error";
                   }else{
                   echo '<script type="text/javascript">window.location="../index.php"</script>';
                   }
 
            
        header("location: ../index.php");
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $user = $_POST['user'];
        $eName = $_POST['eName'];
        $eDescription = $_POST['eDescription'];
        $eObjectives = $_POST['eObjectives'];
        $rules = $_POST['rules'];
        $eLocation = $_POST['eLocation'];
        $startdate = $_POST['startdate'];
        $startime = $_POST['startime'];
        $enddate = $_POST['enddate'];
        $endtime = $_POST['endtime'];

        mysqli_query($db, "UPDATE events SET eName='$eName', eDescription='$eDescription', eObjectives='$eObjectives', rules='$rules', eLocation='$eLocation', startdate='$startdate', startime='$startime', enddate='$enddate', endtime='$endtime', editby='$user'  WHERE id=$id");
        header('location: ../index.php');
        }
