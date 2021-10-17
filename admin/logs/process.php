<?php

    session_start();
    include('../../conn.php');

       // drop and empty database of professor table
    if (isset($_GET['clear'])) {
            $id = $_GET['clear'];
            mysqli_query($db, "TRUNCATE TABLE logs");
            header('location: ../logs');
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Event deleted successfully!";
        }

?>