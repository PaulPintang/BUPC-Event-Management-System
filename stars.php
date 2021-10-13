<?php

include('./conn.php');
if (isset($_POST['submit'])) {
    $star = $_POST['star'];
    mysqli_query($db, "INSERT INTO events (stars) VALUES ('$star')");
    header('location: events-page.php');
}

?>