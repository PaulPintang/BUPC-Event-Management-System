 <?php
    session_start();
    if (isset($_SESSION['id']) && (isset($_SESSION['name']))) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>BUPC Events</title>
    <script>
        function display_c(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct()',refresh)
        }
        function display_ct() {
            var x = new Date()
            var x1=x.toUTCString();// changing the display to UTC string
            document.getElementById('ct').innerHTML = x1;
            tt=display_c();
        }
    </script>
</head>
<body onload=display_ct()>
    <div class="mx-auto px-6" style="max-width: 1100px">
        <div class="flex justify-between items-center h-36 w-full">
            <div class="flex items-center gap-9">
                <a href="index.php" class=" rounded-md text-base font-medium text-gray-700 hover:text-yellow-400">Home</a>
                <a href="index.php#officers" class=" rounded-md text-base font-medium text-gray-700 hover:text-yellow-400">Officers</a>
            </div>
            <div class="flex flex-col items-center font-bold">
                <img src="./admin/images/index.jpg" alt="" style="width:50px">
                <small> <span class="text-blue-500">Bicol University</span> <span class="text-yellow-400">Polangui Campus</span>  </small>
                <small class="text-gray-500">College Student Council</small>
            </div>
            <div class="flex items-center gap-9">
                <a href="index.php#about" class="rounded-md text-base font-medium text-gray-700 hover:text-yellow-400">About</a>
                <a href="logout.php"  class="font-bold text-red-300 hover:text-red-500">Logout</a>
            </div>
        </div>
    </div>

    <div class="" style="height: calc(100vh - 9rem)">
         <div class="space-y-3 mx-auto px-3 flex flex-col justify-center items-center h-full" style="max-width: 1100px">
            <div class="text-center w-72">
               <img src="./images/event.svg" class="w-full" alt="">
            </div>
            <div class="text-center">
                <div class="flex items-center justify-center text-4xl text-gray-800">
                  <p>Hi</p>
                    <img src="./admin/images/wave.gif" alt="" style="width: 60px" >
                  <p><?php echo $_SESSION['name']?>,</p>
                </div>
               <p class="text-5xl text-gray-800">DON'T MISS THE UPCOMING EVENT</p> 
            </div>
            <div>
                <span id='ct' class="font-bold text-gray-500"></span>
            </div>
        </div>
    </div>

    <div class="mx-auto" style="max-width: 1100px; height: 90vh">
        <div class="flex justify-between items-center gap-5 h-full">
            <div class="h-96 bg-gray-50" style="width: 900px">

            </div>
             <div class="bg-white rounded-lg flex items-center justify-center pt-10 md:pt-0 lg:pt-0 w-full lg:w-5/12 h-96">
                <div class="flex flex-col h-full w-full font-light">
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
    </div>

    <script src="./admin/calendar/js/jquery.min.js"></script>
    <script src="./admin/calendar/js/main.js"></script>
</body>
</html>
<?php
    }else{
          header("location: index.php");
          exit();
    }
?>