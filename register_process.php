<?php

    session_start();

    include "conn.php";

    // register process
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $course = $_POST['course'];
        $studentId = $_POST['studentId'];

        $query = "INSERT INTO studentsAcc (name, course, studentId) VALUES ('$name', '$course', '$studentId')";
        mysqli_query($db, $query);

        header("location: index.php");
    }

    // register process end


    // login process
    if(isset($_POST['name']) && isset($_POST['studentId'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = validate($_POST['name']);
        $studentId = validate($_POST['studentId']);
    

        if (empty($name)) {
            header("Location: index.php?error=name is required");
            exit();
        } else if(empty($studentId)){
            header("Location: index.php?error=Password is required");
            exit();
        }
        // pag goods su name and pass amo kadi maga execute na code
        else{
            $sql = "SELECT * FROM studentsAcc WHERE name='$name' AND studentId='$studentId'";

            $result = mysqli_query($db, $sql);
            if(mysqli_num_rows($result)) {

                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['name'] = $row['name'];
                    // $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];

                    header('location: index.php');

                }
                    else{
                    header("Location: index.php?error=name and studentId not match");
                    exit();
              }
            }

    }

?>