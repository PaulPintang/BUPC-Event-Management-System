<?php

   include('../../conn.php');

   if(isset($_POST['save'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $picture = time() . '-' . $_FILES["profileImage"]["name"];
        $target_dir = "users/";
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
                    mysqli_query($db, "INSERT INTO users (picture) VALUES ('$picture') WHERE id=$id");
            } else {
                $error = "There was an erro uploading the file";
                $msg = "alert-danger";
            }
        }
        // and if no value
        // the variable picture include here because if it has a image attach, it will insert to database
        $query = "INSERT INTO users (name, username, password, picture) VALUES ('$name', '$username', '$password', '$picture')";
        mysqli_query($db, $query);
        echo '
            <script type="text/javascript">window.location="home.php"</script>
        ';
        // end
        header("location: ../home.php");
    }

   if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $picture = time() . '-' . $_FILES["profileImage"]["name"];
        $target_dir = "../user_images/";
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
                    mysqli_query($db, "INSERT INTO users (picture) VALUES ('$picture') WHERE id=$id");
            } else {
                $error = "There was an erro uploading the file";
                $msg = "alert-danger";
            }
        }
        // and if no value
        // the variable picture include here because if it has a image attach, it will insert to database
        mysqli_query($db, "UPDATE users SET name='$name', username='$username', password='$password', picture='$picture' WHERE id=$id");
        header("location: ../home.php");
        echo '
            <script type="text/javascript">window.location="home.php"</script>
        ';
        // end
        }
?>