<?php

  include "../../conn.php";

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

        $query = "INSERT INTO events (eName, eDescription, eObjectives, rules, eLocation, startdate, startime, enddate, endtime) VALUES ('$eName', '$eDescription', '$eObjectives', '$rules', '$eLocation', '$startdate', '$startime', '$enddate', '$endtime')";
        mysqli_query($db, $query);

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