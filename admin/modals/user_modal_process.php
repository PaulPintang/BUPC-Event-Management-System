<?php

session_start();
   include('../../conn.php');

   if(isset($_POST['save'])){

        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        // $picture = time() . '-' . $_FILES["profileImage"]["name"];
        $picture = $_FILES["profileImage"]["name"];
        $target_dir = "./upload/";
        $target_file = $target_dir . basename($picture);
        if($_FILES['profileImage']['size'] > 200000) {
            $msg = "Image size should not be greated than 200Kb";
            $msg_class = "alert-danger";
        }
        if(file_exists($target_file)) {
            $msg = "File already exists";
            $msg_class = "alert-danger";
        }
        // if the input file has a value
        if (empty($error)) {
            if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
                    mysqli_query($db, "INSERT INTO users (picture) VALUES ('$picture') WHERE id='$id'");
            } else {
                $error = "There was an erro uploading the file";
                $msg = "alert-danger";
            }
        }
        // and if no value
        // the variable picture include here because if it has a image attach, it will insert to database
        $query = "INSERT INTO users (name, username, password, picture, role) VALUES ('$name', '$username', '$password', '$picture', '$role')";
        mysqli_query($db, $query);

        // echo '<script>window.location="../home.php"</script>';
         header("location: ../home");
         $_SESSION['status'] = "Woo hoo!";
          $_SESSION['text'] = "New user added successfully!";
        $_SESSION['status_code'] = "success";
    }

   
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $picture = time() . '-' . $_FILES["profileImage"]["name"];
        $target_dir = "./upload/";
        $target_file = $target_dir . basename($picture);
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
            mysqli_query($db, "UPDATE users SET picture='$picture' WHERE id=$id");
            header('location: ../home.php');
        } else {
            $error = "There was an erro uploading the file";
            $msg = "alert-danger";
        }
        // and if no value
        // the variable picture include here because if it has a image attach, it will insert to database
        mysqli_query($db, "UPDATE users SET name='$name', username='$username', password='$password', role='$role' WHERE id=$id");
        
        // echo '<script>window.location="../home.php"</script>';
         header("location: ../home");
          $_SESSION['status'] = "Woo hoo!";
          $_SESSION['text'] = "User details updated successfully!";
          $_SESSION['status_code'] = "info";
        // end

        }

           if (isset($_GET['del'])) {
            $id = $_GET['del'];
           mysqli_query($db, "DELETE FROM users WHERE id=$id");
            header('location: ../home');
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "User deleted successfully!";
            $_SESSION['status_code'] = "success";
        }
?>