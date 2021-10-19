<?php
    session_start();
    include "conn.php";

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
                    $_SESSION['id'] = $row['id'];

                    header('location: index.php');
                    $_SESSION['status'] = "Woo hoo!";
                    $_SESSION['img'] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREdklY1YcgCVMSLmTwiQ8T-2tqvy3gNOLkog&usqp=CAU";
                    $_SESSION['text'] = "Login successfull!";
                }
                    else{
                    header("Location: index.php?error=name and studentId not match");
                    $_SESSION['status'] = "Oopss!";
                    $_SESSION['img'] = "https://assets.website-files.com/5b5f4cc1bb5a8369e423e901/5f6511fb6158287d9188ebb1_ugging_his_shoulders_1200x628_091020.svg";
                    $_SESSION['text'] = "Please check your inputs";
                 
                    exit();
              }
            }

    }else{
        header('location: index.php');
        exit();
    }

?>