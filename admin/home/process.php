<?php

    include('../../conn.php');

    if (isset($_GET['del'])) {
            $id = $_GET['del'];
           mysqli_query($db, "DELETE FROM users WHERE id=$id");
            header('location: ../home');
        }

?>