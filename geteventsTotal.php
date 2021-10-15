<?php

    include('./conn.php');

   
    date_default_timezone_set("Asia/Manila");
    $currentDate = date("Y-m-d");
    $tommorow = date('Y-m-d', strtotime(' +1 day'));
    $upcoming = date('Y-m-d', strtotime(' +2 day'));
    // get title of today event
    $eventName = mysqli_query($db, "SELECT * FROM events WHERE startdate='$currentDate'");
    // $record = mysqli_fetch_array($eventName);
    // $eName = $record['eName'];

    // today event
    $sql = "SELECT count(id) AS total FROM events WHERE startdate='$currentDate'";
    $rows_results = mysqli_query($db, $sql);
    $values = mysqli_fetch_assoc($rows_results);
    $today = $values['total'];

    // tommorow event
    $sql = "SELECT count(id) AS total FROM events WHERE startdate='$tommorow'";
    $rows_results = mysqli_query($db, $sql);
    $values = mysqli_fetch_assoc($rows_results);
    $tommorowEvent = $values['total'];

    // upcoming events
    $sql = "SELECT count(id) AS total FROM events WHERE startdate>='$upcoming'";
    $rows_results = mysqli_query($db, $sql);
    $values = mysqli_fetch_assoc($rows_results);
    $upcomingEvents = $values['total'];

    // past events
    $sql = "SELECT count(id) AS total FROM events WHERE startdate<'$currentDate'";
    $rows_results = mysqli_query($db, $sql);
    $values = mysqli_fetch_assoc($rows_results);
    $pastEvents = $values['total'];

    $more = 'events';
    $justOne = 'event'
?>