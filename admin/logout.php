<?php
    session_start();
    session_unset();
    session_destroy();

    include('../conn.php');

    // correct timezone
    date_default_timezone_set("Asia/Manila");
    $date = date("D M d, Y");

    $logout = date("h:i:s A");

    if (isset($_POST['logout'])) {
        $id = $_POST['id'];
        $logout = date("h:i A");

        // data:update the users status
        $username = $_POST['username'];
        $status = $_POST['status'];

        mysqli_query($db, "UPDATE logs SET logout='$logout' WHERE id=$id");
        mysqli_query($db, "UPDATE users SET status='$status' WHERE username='$username'");
        header("location: index.php");

    }

?>