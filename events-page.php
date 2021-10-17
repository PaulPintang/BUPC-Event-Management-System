<?php
    session_start();
    include('./conn.php');
    $id = $_SESSION['id'];
    $viewEvent = mysqli_query($db, "SELECT * FROM events");


	if (isset($_POST['liked'])) {
		$postid = $_POST['postid'];
		$result = mysqli_query($db, "SELECT * FROM events WHERE id=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($db, "UPDATE events SET likes=$n+1 WHERE id=$postid");
		mysqli_query($db, "INSERT INTO studentsAcc (userid, postid) VALUES (1, $postid) WHERE id=$id");

		echo $n+1;
		exit();
	}

    if (isset($_POST['unliked'])) {
		$postid = $_POST['postid'];
		$result = mysqli_query($db, "SELECT * FROM events WHERE id=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($db, "DELETE FROM likes WHERE postid=$postid AND userid=1");
		mysqli_query($db, "UPDATE events SET likes=$n-1 WHERE id=$postid");
		
		echo $n-1;
		exit();
	}
    include('./geteventsTotal.php');

    if (isset($_SESSION['id']) && (isset($_SESSION['name']))) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>BUPC Events</title>
    <style>
        /* Hide scrollbar for Chrome, Safari and Opera */
        .example::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .example {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        }

    </style>
</head>
<body>
    <div class="px-1 md:px-7 lg:px-7 shadow-sm">


           <!-- Navbar -->

           <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 relative opacity-100">
          <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-1 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
            <a href="#">
                  <span  class="sr-only">Workflow</span >
                  <img class="h-8 w-auto sm:h-10" src="data:image/jpeg;base64,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" >
                </a>
              <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                  <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                  <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
              <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php">Home</a>
              <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php#officers">Officer</a>
              <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php#about">About</a>
              <?php
               if (isset($_SESSION['id']) && (isset($_SESSION['name'])))  {
                 echo '<a href="events-page.php" class="px-4 py-2 mt-2 text-yellow-400 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 focus:text-yellow-500 bg-yellow-200 focus:bg-yellow-200 focus:outline-none focus:shadow-outline">Events</a>';
                 echo '<a href="logout.php" class="px-4 py-2 mt-2 text-red-400 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-red-500 focus:text-red-500 hover:bg-red-200 focus:bg-red-200 focus:outline-none focus:shadow-outline">Logout</a>';
               } else{
                 echo '<a href="#" onclick="toggleModal(`user_modal`)" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" >Log in</a>';
                 echo '<a href="#" onclick="toggleModal(`modal-id`)" class="px-4 py-2 mt-2 text-white-400 text-sm font-semibold text-white-900 bg-yellow-500 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-yellow-300 focus:bg-yellow-300 focus:outline-none focus:shadow-outline" >Register</a>
                  ';
               }
              ?>
              <a class=" px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200" ></a>
            
            </nav>
          </div>
        </div>

        <!-- End Navbar -->

        
    </div>


    <div class="mx-auto px-5 md:px-0 lg:px-0" style="max-width: 1200px">
        <div class="md:flex md:justify-between w-full md:gap-24 pb-16">
            <div>
                <div class="py-10 space-y-1">
                    <p class="text-2xl font-medium">BU-Polangui Campus <span class="text-yellow-400">Events</span> </p>
                    <div class="h-0.5 w-28 bg-blue-200"></div>
                </div>
                <div class="flex md:gap-10 lg:gap-10">
                    <div class="bg-gray-50 rounded-2xl p-9 shadow-sm w-full md:w-80 lg:w-80 space-y-3">
                        <div><p class="text-4xl font-extrabold">Hi, <?php echo $_SESSION['name']?></p></div>
                        <div><small class="text-gray-400 text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit veniam placeat. Omnis, sint accusantium?</small></div>
                        <div class="pt-3 flex items-center gap-3">
                            <div class="flex flex-wrap justify-between w-full text-gray-700 italic text-sm">
                                <div>
                                    <div class="flex gap-3 items-center">
                                        <div class="bg-green-300 w-5 h-2"></div>
                                        <small>
                                            <?php
                                                if ($today == 0) {
                                                    echo'
                                                    No event today
                                                    ';
                                                }else{
                                                    echo '
                                                    '.$today.'
                                                    ';
                                                }
                                            ?>
                                            <?php
                                                if ($today >= 2) {
                                                    echo '
                                                        '.$more.'
                                                    ';
                                                }else if($today == 1){
                                                    echo '
                                                        '.$justOne.'
                                                    ';
                                                }else{
                                                    echo'';
                                                }
                                            ?>
                                        </small>
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <div class="bg-blue-300 w-5 h-2"></div>
                                        <small>
                                            <?php
                                                if ($tommorowEvent == 0) {
                                                    echo'
                                                    No event tommorow
                                                    ';
                                                }else{
                                                    echo '
                                                    '.$tommorowEvent.'
                                                    ';
                                                }
                                            ?>
                                            <?php
                                                if ($tommorowEvent >= 2) {
                                                    echo '
                                                        '.$more.'
                                                    ';
                                                }else if($tommorowEvent == 1){
                                                    echo '
                                                        '.$justOne.'
                                                    ';
                                                }else{
                                                    echo'';
                                                }
                                            ?>
                                        </small>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex gap-3 items-center">
                                        <div class="w-5 h-2 bg-pink-300"></div>
                                         <small>
                                            <?php
                                                if ($upcomingEvents == 0) {
                                                    echo'
                                                    No upcoming events
                                                    ';
                                                }else{
                                                    echo '
                                                        '.$upcomingEvents.'
                                                    ';
                                                }
                                            ?>
                                            <?php
                                                if ($upcomingEvents >= 2) {
                                                    echo '
                                                        '.$more.'
                                                    ';
                                                }else if($upcomingEvents == 1){
                                                    echo '
                                                        '.$justOne.'
                                                    ';
                                                }else{
                                                    echo'';
                                                }
                                            ?>
                                        </small>
                                    </div>
                                    <div class="flex gap-3 items-center">
                                        <div class="bg-yellow-300 w-5 h-2"></div>
                                       <small>
                                            <?php
                                                if ($pastEvents == 0) {
                                                    echo'
                                                    No past events
                                                    ';
                                                }else{
                                                    echo '
                                                    '.$pastEvents.'
                                                    ';
                                                }
                                            ?>
                                            <?php
                                                if ($pastEvents >= 2) {
                                                    echo '
                                                        '.$more.'
                                                    ';
                                                }else if($pastEvents == 1){
                                                    echo '
                                                        '.$justOne.'
                                                    ';
                                                }else{
                                                    echo'';
                                                }
                                            ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full absolute right-2 opacity-10 md:w-96 lg:w-96 md:relative lg:relative md:opacity-100 lg:opacity-100">
                        <img src="./images/events-show.png" class="w-full" alt="">
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col h-full w-full font-light">
                <div class="py-10 space-y-1">
                   <p class="text-2xl font-medium">Calendar</p>
                    <div class="h-0.5 w-12 bg-blue-200"></div>
                </div>
                <div class="h-full w-full bg-blue-300 rounded-t flex justify-center items-center">
                    <span class="day uppercase text-lg text-white"></span>
                </div>
                
                <div class="w-full bg-white flex justify-center items-center py-16 flex-col">
                    <div class="text-sm text-center">
                        <?php while ($row = mysqli_fetch_array($eventName)) { ?>
                        <p class="text-gray-700 "> <span class="font-extrabold">Yoohoooo!!</span> We have an event today:</p>
                        <span class="text-green-500 font-bold block"><?php echo $row['eName'] ?></span>
                        <div class="text-gray-500 font-semibold text-xs">
                            <span><?php echo $row['startime']?> - </span>
                            <span><?php echo $row['endtime']?></span>
                        </div>
                        <?php } ?>
                    </div>
                    <span class="month text-2xl text-gray-500"></span>
                   
                    <span class="date uppercase text-7xl text-gray-700 font-extralight"></span>
                </div>
                <div class="h-full w-full bg-blue-300 rounded-b flex justify-center items-center">
                    <span class="year uppercase text-lg text-white"></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="px-5 md:px-0 lg:px-0">
         <div class="mx-auto h-screen" style="max-width: 1200px">
             <div class="py-10 space-y-1">
                   <p class="text-2xl font-medium">BUPC <span class="text-yellow-300">Events</span> </p>
                    <div class="h-0.5 w-20 bg-blue-200"></div>
             </div>
             <div class="flex justify-between">
                 <div>
                     <div class="flex flex-wrap items-center gap-4 pb-6">
                         <div class="flex gap-3 items-center">
                            <div class="bg-green-300 w-8 h-2"></div>
                            <small>Today</small>
                         </div>
                         <div class="flex gap-3 items-center">
                            <div class="bg-blue-300 w-8 h-2"></div>
                            <small>Tommorow</small>
                         </div>
                         <div class="flex gap-3 items-center">
                            <div class="w-8 h-2 bg-pink-300"></div>
                            <small>Upcoming</small>
                         </div>
                         <div class="flex gap-3 items-center">
                            <div class="bg-yellow-300 w-8 h-2"></div>
                            <small>Past</small>
                         </div>
                     </div>
                     <div class="bg-white md:rounded-lg lg:rounded-lg h-96 p-6 shadow-sm w-full">
                    <!-- start -->  
                        <div class="overflow-y-auto example" style="height: 300px">
                        <table class="min-w-full divide-y divide-gray-200 border-collapse w-full">
                            <thead class="sticky top-0">
                                <tr>
                                    <th scope="col" class="md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                        Event title
                                    </th>
                                    <th scope="col" class="hidden md:table-cell lg:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                        <span class="font-extrabold text-green-500">Start</span> date/time
                                    </th>
                                    <th scope="col" class="hidden md:table-cell lg:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                        <span class="font-extrabold text-red-400">Edit</span> date/time
                                    </th>
                                    <th scope="col" class=" hidden md:table-cell lg:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                        Rules
                                    </th>
                                    <th scope="col" class=" hidden md:table-cell lg:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                     </th>
                                    <th scope="col" class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                    
                                    </th>
                        
                                </tr>
                            </thead>
                            <tbody class=" divide-y divide-gray-200 overflow-auto text-gray-700">
                            <?php $events = mysqli_query($db, "SELECT * FROM events ORDER BY ID DESC"); ?>
                            <?php while ($row = mysqli_fetch_array($events)) { ?>
                                <tr>
                                    <td class="md:px-2 lg:px-2 py-2 whitespace-nowrap">
                                        <div class="md:ml-4 lg:ml-4">
                                            <small><?php echo $row['eName']?></small>
                                            <div class="md:hidden lg:hidden">
                                                <?php
                                                    date_default_timezone_set("Asia/Manila");
                                                    $currentDate = date("Y-m-d");
                                                    $tommorow = date('Y-m-d', strtotime(' +1 day'));
                                                    $upcoming = date('Y-m-d', strtotime(' +2 day'));
                                                    if ($row['startdate'] == $currentDate) {
                                                        echo '
                                                            <div class="bg-green-300 w-8 h-2"></div>
                                                        ';
                                                    }else if($row['startdate'] == $tommorow){
                                                        echo'
                                                            <div class="bg-blue-300 w-8 h-2"></div>
                                                        ';
                                                    }else if($row['startdate'] >= $upcoming){
                                                        echo'
                                                            <div class="bg-pink-300 w-8 h-2"></div>
                                                        ';
                                                    }else {
                                                        echo '
                                                            <div class="bg-yellow-300 w-8 h-2"></div>
                                                        ';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </td>
                                    <?php
                                        $startime = $row['startime'];
                                        $endtime = $row['endtime'];
                                    ?>
                                    <td class="hidden md:table-cell lg:table-cell px-6 py-2 whitespace-nowrap">
                                        <div class="flex flex-col">
                                            <small><?php echo $row['startdate']?></small>
                                            <small>- <?php echo $startime?></small>
                                        </div>
                                    </td>
                                    <td class="hidden md:table-cell lg:table-cell px-6 py-2 whitespace-nowrap">
                                        <div class="flex flex-col">
                                            <small><?php echo $row['enddate']?></small>
                                            <small>- <?php echo $endtime?></small>
                                        </div>
                                    </td>
                                    <td class="hidden md:table-cell lg:table-cell px-6 py-2 whitespace-nowrap">
                                        <?php

                                            if ($row['rules'] == 'Required') {
                                            echo ' <span class="px-2 inline-flex leading-5 font-extrabold rounded-full bg-yellow-50 text-yellow-400"  style="font-size: 10px">
                                                    REQUIRED
                                                </span> ';
                                            }else{
                                                echo '
                                                <span class="px-2 inline-flex leading-5 font-extrabold rounded-full bg-green-50 text-green-400"  style="font-size: 10px">
                                                    NOT REQUIRED
                                                </span>
                                                ';
                                            }
                                        
                                        ?>
                                    </td>
                                   
                                    <td class="text-right md:px-6 lg:px-6 py-2 whitespace-nowrap space-x-2">
                                        <!-- <a href="#view<?php echo $row['id'];?>" data-toggle="modal" class="sm:hidden md:hidden lg:hidden"><i class="fas fa-info text-gray-400 cursor-pointer hover:text-blue-300 transition-all" style="font-size:12px"></i></a> -->
                                        <a href="#viewE<?php echo $row['id'];?>" data-toggle="modal" class=" sm:hidden md:hidden lg:hidden text-blue-400 hover:text-white hover:bg-blue-400 w-full px-3 py-1 bg-blue-50 font-semibold rounded transition-colors text-xs">View</a>
                                        <a href="#viewE<?php echo $row['id'];?>" data-toggle="modal" class="hidden sm:inline md:inline lg:inline text-blue-400 hover:text-white hover:bg-blue-400 w-full px-3 py-1 bg-blue-50 font-semibold rounded transition-colors text-xs">View More</a>
                                    </td>

                                    <td class="hidden md:table-cell lg:table-cell">
                                        <?php
                                            date_default_timezone_set("Asia/Manila");
                                            $currentDate = date("Y-m-d");
                                            $tommorow = date('Y-m-d', strtotime(' +1 day'));
                                            $upcoming = date('Y-m-d', strtotime(' +2 day'));
                                            if ($row['startdate'] == $currentDate) {
                                                echo '
                                                    <div class="bg-green-300 w-8 h-2"></div>
                                                ';
                                            }else if($row['startdate'] == $tommorow){
                                                echo'
                                                    <div class="bg-blue-300 w-8 h-2"></div>
                                                ';
                                            }else if($row['startdate'] >= $upcoming){
                                                echo'
                                                    <div class="bg-pink-300 w-8 h-2"></div>
                                                ';
                                            }else {
                                                echo '
                                                    <div class="bg-yellow-300 w-8 h-2"></div>
                                                ';
                                            }
                                        ?>
                                    </td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                 </div>
                <div class="hidden md:flex lg:flex">
                    <img src="./images/show1.png" alt="" style="-webkit-transform: scaleX(-1); transform: scaleX(-1);">
                </div>
             </div>
        </div>
    </div>
    <div><?php include('./view_event_modal.php')?></div>
      <div class="flex justify-center p-5 bg-gray-700 text-white">
        <p style="font-size: 12px">Copyright &copy; 2021 College Student Council</p>
    </div>

 
    <script src="./admin/calendar/js/jquery.min.js"></script>
    <script src="./admin/calendar/js/main.js"></script>
    <script src="./admin/js/bootstrap.min.js"></script>
    <script src="./admin/js/jquery-1.12.4.js"></script>
    <!-- <script>
        $(document).ready(function(){
         	$('.like').on('click', function(){
			var postid = $(this).data('id');
			    $post = $(this);

                $.ajax({
                    url: 'events-page.php',
                    type: 'post',
                    data: {
                        'liked': 1,
                        'postid': postid
                    },
                    success: function(response){
                        $post.parent().find('span.likes_count').text(response + " likes");
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                });
            });
            $('.unlike').on('click', function(){
                var postid = $(this).data('id');
                $post = $(this);

                $.ajax({
                    url: 'events-page.php',
                    type: 'post',
                    data: {
                        'unliked': 1,
                        'postid': postid
                    },
                    success: function(response){
                        $post.parent().find('span.likes_count').text(response + " likes");
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                });
            });
        });
    </script> -->
</body>
</html>
<?php
    }else{
          header("location: index.php");
          exit();
    }
?>