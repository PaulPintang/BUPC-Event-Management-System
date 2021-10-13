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
    <div class="shadow-sm">
        <div class="h-24 mx-auto" style="max-width: 1200px">
            <div class="flex justify-between items-center h-full ">
                <div>
                    BUPC - <span class="text-yellow-400 font-semibold">CSC</span> 2021
                </div>
                <div class="flex gap-9">
                <a href="index.php" class="font-medium text-gray-500 hover:text-yellow-300 transition-all">Home</a>
                <a href="index.php#officers" class="font-medium text-gray-500 hover:text-yellow-300 transition-all">Officers</a>
                <a href="index.php#about" class="font-medium text-gray-500 hover:text-yellow-300 transition-all">About</a>
                <?php
                if (isset($_SESSION['id']) && (isset($_SESSION['name'])))  {
                    echo '<a href="events-page.php" class="text-yellow-400 font-medium border-b-2 border-yellow-50">Events</a>';
                    echo '<a href="logout.php" class="font-medium text-red-300 hover:text-red-200 transition-all">Logout</a>';
                } else{
                    echo '<a href="#" onclick="toggleModal(`user_modal`)" class="font-medium text-indigo-600 hover:text-indigo-500 transition-all" >Log in</a>';
                    echo '
                    <button class="bg-yellow-500 pl-2 pr-2 pt-1 pb-1 rounded hover:bg-yellow-300 transition-all"  onclick="toggleModal(`modal-id`)">
                        <a href="#" class="font-medium text-white">Register</a>
                    </button>';
                }
                ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto" style="max-width: 1200px">
        <div class="flex justify-between w-full gap-24 pb-16">
            <div>
                <div class="py-10 space-y-1">
                    <p class="text-2xl font-medium">BU-Polangui Campus <span class="text-yellow-400">Events</span> </p>
                    <div class="h-0.5 w-28 bg-blue-200"></div>
                </div>
                <div class="flex gap-10">
                    <div class="bg-gray-50 rounded-2xl p-10 shadow-sm w-80 space-y-3">
                        <div><p class="text-4xl font-extrabold">Hi, Paul</p></div>
                        <div><small class="text-gray-400 text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit veniam placeat. Omnis, sint accusantium?</small></div>
                        <div class="pt-3 flex items-center gap-3">
                            <!-- <i class="far fa-star text-blue-300 text-xl"></i> -->
                            <i class="fas fa-star text-blue-300 text-2xl"></i>
                            <div class="flex flex-col">
                                <span class="text-gray-600 italic text-sm" style="margin-bottom: -3px">123 stars</span>
                                <div class="flex gap-3 items-center">
                                    <p class="text-xl font-semibold text-gray-700">Awesome</p>
                                    <img src="./images/emoji.png" alt="" style="width: 23px; height: 23px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-96">
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
                    <span class="month text-2xl text-gray-500"></span>
                    <span class="date uppercase text-7xl text-gray-700 font-extralight"></span>
                </div>
                <div class="h-full w-full bg-blue-300 rounded-b flex justify-center items-center">
                    <span class="year uppercase text-lg text-white"></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="">
         <div class="mx-auto h-screen" style="max-width: 1200px">
             <div class="py-10 space-y-1">
                   <p class="text-2xl font-medium">BUPC <span class="text-yellow-300">Events</span> </p>
                    <div class="h-0.5 w-20 bg-blue-200"></div>
             </div>
             <div class="flex justify-between">
                 <div>
                     <div class="flex items-center gap-4 pb-6">
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
                     <div class="bg-white md:rounded-lg lg:rounded-lg h-96 w-full p-6 shadow-sm">
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
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                                    
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

                                    <td>
                                        <?php
                                            date_default_timezone_set("Asia/Manila");
                                            $currentDate = date("Y-m-d");
                                            $tommorow = date('Y-m-d', strtotime(' +1 day'));
                                            $upcoming = date('Y-m-d', strtotime(' +3 day'));
                                            if ($row['startdate'] == $currentDate) {
                                                echo '
                                                    <div class="bg-green-300 w-8 h-2"></div>
                                                ';
                                            }else if($row['startdate'] == $tommorow){
                                                echo'
                                                    <div class="bg-blue-300 w-8 h-2"></div>
                                                ';
                                            }else if($row['startdate'] == $upcoming){
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
                <div>
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
    <script>
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
    </script>
</body>
</html>
<?php
    }else{
          header("location: index.php");
          exit();
    }
?>