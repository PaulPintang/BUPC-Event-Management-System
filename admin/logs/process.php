<?php

    include('../../conn.php');

       // drop and empty database of professor table
    if (isset($_GET['clear'])) {
            $id = $_GET['clear'];
            mysqli_query($db, "TRUNCATE TABLE logs");
            header('location: ./index.php');
        }

?>