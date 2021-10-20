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
        $picture = $_FILES["profileImage"]["name"];
        $target_dir = "./upload/";
        $target_file = $target_dir . basename($picture);
        if($_FILES['profileImage']['size'] > 200000) {
            $msg = "Image size should not be greated than 200Kb";
            $msg_class = "alert-danger";
        }
        if(file_exists($target_file)) {
            $msg = "File already exists";
            $msg_class = "alert-danger";
        }
        // if the input file has a value
        if (empty($error)) {
            if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
                    mysqli_query($db, "UPDATE officers SET picture='$picture' WHERE id=$id");
            } else {
                $error = "There was an erro uploading the file";
                $msg = "alert-danger";
            }
        }
        $query = "UPDATE officers SET name='$name', position='$position', course='$course', yearLevel='$yearLevel', buEmail='$buEmail', fb='$fb', picture='$picture' WHERE id=$id";
        mysqli_query($db, $query);
        header('location: ../officers/');
    }




?>