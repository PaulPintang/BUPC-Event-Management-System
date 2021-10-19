<?php

    session_start();

    include "conn.php";

    // register process
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $course = $_POST['course'];
        $buEmail = $_POST['buEmail'];
        $studentId = $_POST['studentId'];

        $query = "INSERT INTO studentsAcc (name, course, buEmail, studentId, setEmails) VALUES ('$name', '$course', '$buEmail', '$studentId',1)";
        mysqli_query($db, $query);
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
                        $_SESSION['status'] = "Hi, Welcome!";
                        $_SESSION['img'] = "https://lh5.googleusercontent.com/kg1_kuxXWsZ0nMUTPwcg0X9PQbQkBGwT-Bt5b4B2hCQPhdb7M09aZgRnFqUWFpXS8I09Vm656FswwbLK9NcNRuluNfBoCoQUzJuL5tMA4K0ruGzyOWzKCwI_IJt-jw42sZY03Az0";
                        $_SESSION['text'] = "New user looks good today!!";

                    }
                        else{
                        header("Location: index.php?error=name and studentId not match");
                        exit();
                }
                }

        }
    }

    // register process end


    // login process
    // if(isset($_POST['name']) && isset($_POST['studentId'])) {
    //     function validate($data){
    //         $data = trim($data);
    //         $data = stripslashes($data);
    //         $data = htmlspecialchars($data);
    //         return $data;
    //     }

    //     $name = validate($_POST['name']);
    //     $studentId = validate($_POST['studentId']);
    

    //     if (empty($name)) {
    //         header("Location: index.php?error=name is required");
    //         exit();
    //     } else if(empty($studentId)){
    //         header("Location: index.php?error=Password is required");
    //         exit();
    //     }
    //     // pag goods su name and pass amo kadi maga execute na code
    //     else{
    //         $sql = "SELECT * FROM studentsAcc WHERE name='$name' AND studentId='$studentId'";

    //         $result = mysqli_query($db, $sql);
    //         if(mysqli_num_rows($result)) {

    //                 $row = mysqli_fetch_assoc($result);
    //                 $_SESSION['name'] = $row['name'];
    //                 // $_SESSION['name'] = $row['name'];
    //                 $_SESSION['id'] = $row['id'];

    //                 header('location: index.php');

    //             }
    //                 else{
    //                 header("Location: index.php?error=name and studentId not match");
    //                 exit();
    //           }
    //         }

    // }

?>