<?php

    session_start();
    include('../../conn.php');

    if (isset($_GET['del'])) {
            $id = $_GET['del'];
           mysqli_query($db, "DELETE FROM users WHERE id=$id");
            header('location: ../home');
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "User deleted successfully!";
            $_SESSION['status_code'] = "success";
        }

?>