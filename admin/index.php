<?php


    include('../conn.php');
    $inputVal = '';
    $users = mysqli_query($db, "SELECT * FROM users WHERE username='$inputVal'");

?>
<!-- code for: if the user leave his/her account logged in and if they access the website again, they will redirect to homepage not in log in page -->
<?php session_start();
    if(isset($_SESSION['id'])&&!empty($_SESSION['id'])){
    header("Location: home.php");
    exit();
    }
?>
 <!-- end -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>BUPC-CSC</title>
</head>
<body class="bg-gray-100 h-screen">
    <div class="flex justify-center items-center h-full">
        <div class="bg-white mx-4 md:px-0 lg:px-0" style="max-width: 800px; height: 480px">
            <div class="flex w-full h-full">
                <div class="hidden md:block lg:block">
                    <img src="../images/bupc.jpg" alt="" class="object-right w-full h-full">
                </div>
                <div class="pt-8 flex items-center flex-col md:w-4/5 lg:w-4/5 space-y-3 px-10">
                    <div class="text-center flex flex-col items-center space-y-4">
                        <img src="./images/index.jpg" alt="" style="width: 53px">
                        <h1 class="font-medium text-gray-400 text-3xl">Sign in</h1>
                        <p class="text-gray-400 font-normal text-sm w-full">Enter your given username and password from the administrator</p>
                    </div>
                    <form action="login.php" method="POST" class="w-full">
                        <div>
                            <input type="hidden" autocomplete="false">
                            <div class="space-y-2 pb-2 w-full">
                                <p class="text-gray-800">Username</p>
                                <input type="text" id="myInput"  placeholder="enter your username" name="username" class="border border-gray-100 focus:border-gray-300 focus:outline-none py-1.5 px-2 text-gray-500 w-full">
                            </div>
                            <div class="space-y-2 pb-2 w-full">
                                <p class="text-gray-800">Password</p>
                                <input type="text" placeholder="enter your password" name="password" class="border border-gray-100 focus:border-gray-300 focus:outline-none py-1.5 px-2 text-gray-500 w-full">
                            </div>
                            <input type="hidden" name="status" value="Online">
                            <!-- <input type="hidden" name="name" value="pota"> -->
                            <?php if (isset($_GET['error'])) { ?>
                                <div class="flex justify-center pb-3">
                                    <small class="text-red-300 text-center text-xs">
                                    <?php echo $_GET['error']; ?>
                                        </small>
                                </div>
                            <?php } ?>
                            <!-- include name of user/and insert it into logs -->
                            <?php while ($row = mysqli_fetch_array($users)) { ?>
                                <input type="hidden" name="name" value="<?php echo $row['name'] ?>">
                            <?php } ?>

                            <button class="bg-yellow-400 py-1.5 mt-2 w-full text-white" type="submit" name="login">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
