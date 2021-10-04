<?php
    session_start();
    // code for retrieve from database
        // USERS
            include('../conn.php');
            $users = mysqli_query($db, "SELECT * FROM users");
            $ID = $_SESSION['id'];
            $currentUser = mysqli_query($db, "SELECT * FROM users WHERE id=$ID");
            $userlogs = mysqli_query($db, "SELECT * FROM logs");

            $name = "";
            $id = 0;
            if(isset($_GET['edit'])){
                $id = $_GET['edit'];
                $rec = mysqli_query($db, "SELECT * FROM users WHERE id=$id");
                $record = mysqli_fetch_array($rec);
                $name = $record['name'];
                $id = $record['id'];
            }
    // end

    if (isset($_SESSION['id']) && (isset($_SESSION['username']))) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
    src=//code.jquery.com/jquery-3.5.1.slim.js
    integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
    crossorigin=anonymous></script>
    <script script src=//code.jquery.com/jquery-3.3.1.slim.min.js integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin=anonymous></script>
    <script src=//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin=anonymous></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>College Student Council 2021</title>
</head>
<body>
    <section class="">
        <div class="flex mx-auto container justify-between items-center">
            <div class="flex items-center gap-3 py-7">
                 <img class="h-8 w-auto sm:h-10" src="./images/index.jpg" >
                <div>
                    <h1 class="font-bold uppercase text-gray-600">College Student Council 2021</h1>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <?php while ($row = mysqli_fetch_array($currentUser)) { ?>
                    <div class="flex items-center text-sm text-gray-600">
                       <p> Hello,</p>
                       <img src="./images/wave.gif" alt="" style="width: 30px">
                       <span> <?php echo $row['name']?> </span>
                    </div>
                    <div class="flex-shrink-0 h-10 w-10 pl-2">
                        <img class="h-10 w-10 rounded-full" src="./images/undraw_profile_3.svg" alt="">
                    </div>
                <?php } ?>
                <div class="opacity-10">|</div>
                <div>
                        <form action="logout.php" method="POST">
                            <?php while ($row = mysqli_fetch_array($userlogs)) { ?>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <?php } ?>
                            <!-- use for status -->
                            <input type="hidden" name="status" value="Offline">
                            <input type="hidden" name="username" value="<?php echo $_SESSION['username']?>">
                            
                            <!-- end -->
                            <button type="submit" name="logout">
                                <i class="fas fa-sign-out-alt text-gray-400 hover:text-red-300"></i>
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
            <div class="flex items-center justify-between w-full">
                <div class="flex gap-3 items-center ">
                    <a href="home.php" class="text-blue-400 hover:text-yellow-400 active:text-blue-400 font-medium">Home</a>
                    <a href="./events" class="text-gray-400 hover:text-yellow-400 active:text-blue-400 font-medium">Events</a>
                    <a href="./logs" class="text-gray-400 active:text-blue-400 hover:text-yellow-400 font-medium">Logs</a>
                </div>
                <div>
                     <a href="#" onclick="toggleModal('about_modal')">
                         <i class="fas fa-info-circle fa-lg text-gray-400 cursor-pointer"></i>
                     </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 pb-10">
        <div class="flex gap-7 py-10 container mx-auto">
            <div class="bg-white rounded-lg h-96 w-full flex justify-center items-center shadow-sm">
                <div class="h-auto flex justify-between p-10">
                    <div class="w-2/4">
                        <h1 class="text-4xl font-bold text-gray-700"> <span class="text-yellow-400">BUPC</span>  College Student Council <span class="border-b-2 border-yellow-100">Admin page</span> </h1>
                        <p class="text-gray-400 py-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, dicta. Lorem ipsum dolor sit amet.</p>
                        <a href="#" class="py-2 px-5 bg-yellow-400 rounded text-white hover:bg-yellow-300">Official website</a>
                    </div>
                    <div class="w-2/4">
                          <img src="./images/admin.svg" alt="" style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg p-6 shadow-sm" style="width: 500px">
                <div class="flex justify-between pb-5">
                    <h1 class="font-medium text-gray-700">Users</h1>
                    <div>
                        <a href="#" onclick="toggleModal('user_modal')" class="hidden">
                          <i class="fas fa-plus text-gray-400"></i>
                        </a>
                    </div>
                </div>
                 <table class="min-w-full divide-y divide-gray-200">
                    <thead class="">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Role
                        </th>
                        <th scope="col" class="relative px-3 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                        </tr>
                    </thead>
                   <tbody class="bg-white divide-y divide-gray-200">
                    <?php while ($row = mysqli_fetch_array($users)) { ?>
                        <tr>
                            <td class="px-6 py-2 whitespace-nowrap">
                                <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="./images/undraw_profile_3.svg" alt="">
                                </div>
                                <div class="ml-4">
                                    <small><?php echo $row['name']?></small>
                                </div>
                                </div>
                            </td>
                            <td class="px-4 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-green-100 text-green-800" style="font-size: 10px">
                                <?php echo $row['role']?>
                                </span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-right font-medium" style="font-size: 13px">
                               <!-- <a href="?edit=<?php echo $row['id']?>" onclick="toggleModal('user_modal')" class="text-indigo-600 hover:text-indigo-900 toggle-button w-full">Edit</a> -->
                            </td>
                            <td><a href="javascript:;" class="addAttr" data-id="<?php echo $row['id']?>" onclick="toggleModal('user_modal')" > Edit</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container mx-auto">
            <div class="bg-white rounded-lg h-screen p-8">
                <div class="flex justify-between">
                    <h1>Calendar</h1>
                    <a href="#" class="py-2 px-5 bg-yellow-400 rounded text-white hover:bg-yellow-300" onclick="toggleModal('event_modal')">
                        <div class="flex items-center gap-2">
                            <div>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div>
                                <span>Add event</span>
                            </div>
                        </div>
                        </a>
                </div>
                <div id='calendar'></div>
            </div>
        </div>
     <div>
     </div>
    </section>

    <div class="flex justify-center py-5 text-gray-500">
        <small>BUPC College Student Council &copy; 2021 </small>
    </div>

    <!-- MODALS -->
    <div><?php include './modals/about_modal.php';?></div>
    <div><?php include './modals/user_modal.php';?></div>
    <div><?php include './modals/events_modal.php';?></div>

   <!-- END -->

   </body>
   <!-- script for modal -->
   <script type="text/javascript">
        function toggleModal(modalID){
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
   </script>

   <script>
        $('.addAttr').click(function() {
        var id = $(this).data('id');   
        var name = $(this).data('name'); 
        var username = $(this).data('username');   
        var password = $(this).data('password');   

        $('#id').val(id); 
        $('#name').val(name); 
        $('#username').val(username); 
        $('#password').val(password); 
        } );
    </script>
   <!-- END -->

</html>
<?php
    }else{
          header("location: index.php");
          exit();
    }
?>