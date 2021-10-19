<?php


    session_start();
    include('../conn.php');

    if (isset($_POST['save'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $course = $_POST['course'];
        $yearLevel = $_POST['yearLevel'];
        $buEmail = $_POST['buEmail'];
        $fb = $_POST['fb'];

        $query = "UPDATE officers SET name='$name', position='$position', course='$course', yearLevel='$yearLevel', buEmail='$buEmail', fb='$fb' WHERE id=$id";
        mysqli_query($db, $query);
        header('location: ../officers/');
    }




?>