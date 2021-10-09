<?php
    session_start();

    // code for retrieve from database
        // USERS
            include('../../conn.php');
         
            $ID = $_SESSION['id'];
            $users = mysqli_query($db, "SELECT * FROM users");
            $userlogs = mysqli_query($db, "SELECT * FROM logs");
            $events = mysqli_query($db, "SELECT * FROM events");
            // use for modals
            $eventsEdit = mysqli_query($db, "SELECT * FROM events");
            $viewEvent = mysqli_query($db, "SELECT * FROM events");
            $eventlogs = mysqli_query($db, "SELECT * FROM logs");
            $toAct = mysqli_query($db, "SELECT * FROM users WHERE id=$ID");
            $toActEdit = mysqli_query($db, "SELECT * FROM users WHERE id=$ID");
            $showEdit = mysqli_query($db, "SELECT * FROM users WHERE id=$ID");
               $record = mysqli_fetch_array($showEdit);
               $username = $record['username'];
            $viewActivity = mysqli_query($db, "SELECT * FROM logs");
            $userActivity = mysqli_query($db, "SELECT * FROM userActivity");
            // end

            $ID = $_SESSION['id'];
            $currentUser = mysqli_query($db, "SELECT * FROM users WHERE id=$ID");

            // $id = 0;
            // if(isset($_GET['edit'])){
            //     $id = $_GET['edit'];
            //     $rec = mysqli_query($db, "SELECT * FROM events WHERE id=$id");
                
            //     $eName = $record['eName'];
            //     $eDescription = $record['eDescription'];
            //     $eObjectives = $record['eObjectives'];
            //     $rules = $record['rules'];
            //     $eLocation = $record['eLocation'];
            //     $startdate = $record['startdate'];
            //     $startime = $record['startime'];
            //     $enddate = $record['enddate'];
            //     $endtime = $record['endtime'];
            //     $id = $record['id'];
            // }

    // end

    if (isset($_SESSION['id']) && (isset($_SESSION['username']))) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>College Student Council 2021</title>
</head>
<body>
    <section class="px-6">
        <div class="flex mx-auto container justify-between items-center">
            <div class="flex items-center gap-3 py-7">
                 <img class="h-8 w-auto sm:h-10" src="../images/index.jpg" >
                <div>
                    <h1 class="font-bold uppercase text-gray-600">College Student Council 2021</h1>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <?php while ($row = mysqli_fetch_array($currentUser)) { ?>
                    <div class="hidden md:flex items-center text-sm text-gray-600">
                       <p> Hello,</p>
                       <img src="../images/wave.gif" alt="" style="width: 30px">
                       <span> <?php echo $row['name']?> </span>
                    </div>
                    <div class="flex-shrink-0 h-10 w-10 pl-2">
                        <img class="h-10 w-10 rounded-full block" src="../images/undraw_profile_3.svg" alt="">
                    </div>
                <?php } ?>
                <div class="opacity-10">|</div>
                 <div>
                     <form action="../logout.php" method="POST">
                            <?php while ($row = mysqli_fetch_array($userlogs)) { ?>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <?php } ?>
                            <!-- use for status -->
                            <input type="hidden" name="status" value="Offline">
                            <input type="hidden" name="username" value="<?php echo $_SESSION['username']?>">
                            <!-- end -->
                            <button type="submit" name="logout">
                                <i class="fas fa-sign-out-alt text-gray-400 hover:text-red-300 transition-all"></i>
                            </button>
                        </form>
                </div>
            </div>
        </div>
        <hr class="opacity-30">
        <div class="flex gap-3 container mx-auto py-4 items-center" style="font-size: 12px">
            <!-- <button class="bg-gray-100 rounded py-3 px-5 text-gray-700">Dashboard</button> -->
            <h1 class="text-xl font-medium text-gray-700">Dashboard</h1>
            <div class="h-4 bg-gray-200" style="width: 1.2px"></div>
            <div class="flex justify-between items-center w-full">
                <div class="flex gap-3 items-center ">
                    <a href="../home.php" class="text-gray-400 hover:text-yellow-400 active:text-blue-400 font-medium transition-all">Home</a>
                    <a href="../events" class="text-blue-400 hover:text-yellow-400 active:text-blue-400 font-medium transition-all">Events</a>
                    <a href="../logs" class="text-gray-400 active:text-blue-400 hover:text-yellow-400 font-medium transition-all">Logs</a>
                </div>
                <div>
                   <a href="#about" data-toggle="modal">
                         <i class="fas fa-info-circle fa-lg text-gray-400 cursor-pointer hover:text-blue-300 transition-all"></i>
                     </a>
                </div>
            </div>
        </div>
    </section>

    <section class="md:bg-gray-50 lg:bg-gray-50 lg:mx-0 ">
        <div class="container mx-auto h-full flex justify-center items-center">
            <?php require_once $content; ?> 
        </div>
    </section>

    <div class="flex justify-center items-end py-5 text-gray-500">
        <small>BUPC College Student Council &copy; 2021 </small>
    </div>

    <div><?php include '../logs/modals/about_modal.php';?></div>
    <div><?php include '../logs/modals/view_activity_modal.php';?></div>
    <div><?php include '../events/modals/events_modal.php';?></div>
    <div><?php include '../events/modals/view_event_modal.php';?></div>
    <div><?php include '../events/modals/edit_event_modal.php';?></div>

   </body>
   <!-- script for modal -->
   <!-- <script type="text/javascript">
        function toggleModal(modalID){
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
   </script> -->
   <script src="../js/jquery-1.12.4.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</html>
<?php
    }else{
          header("location: index.php");
          exit();
    }
?>