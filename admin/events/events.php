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
<div class="flex gap-5 py-10 container mx-auto">
    <div class="bg-white rounded-lg h-96 w-full p-6 shadow-sm ">
    <!-- start -->  
        <div class="flex justify-between items-center pb-2">
            <h1 class="font-medium text-gray-700  " styke="top:40px">BUPC <span class="text-yellow-400">Events</span></h1>
              <a href="#" class="py-1 px-3 bg-yellow-400 rounded text-white hover:bg-yellow-300 transition-all" onclick="toggleModal('event')">
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
        <div class="overflow-y-auto example" style="height: 300px">
        <table class="min-w-full divide-y divide-gray-200 border-collapse w-full">
            <thead class="sticky top-0">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Event title
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       <span class="font-extrabold text-green-500">Start</span> date/time
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        <span class="font-extrabold text-red-400">Edit</span> date/time
                    </th>
                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Rules
                    </th>
                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       
                    </th>
          
                </tr>
            </thead>
            <tbody class=" divide-y divide-gray-200 overflow-auto text-gray-700">
            <?php $events = mysqli_query($db, "SELECT * FROM events ORDER BY ID DESC"); ?>
            <?php while ($row = mysqli_fetch_array($events)) { ?>
                <tr>
                    <td class="px-2 py-2 whitespace-nowrap">
                        <div class="ml-4">
                            <small><?php echo $row['eName']?></small>
                        </div>
                    </td>
                    <!-- <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-green-100 text-green-800" style="font-size: 10px">
                            Online
                        </span>
                    </td> -->
                    <?php
                    
                        $startime = $row['startime'];
                        $endtime = $row['endtime'];

                    ?>
                    <td class="px-6 py-2 whitespace-nowrap">
                        <div class="flex flex-col">
                            <small><?php echo $row['startdate']?></small>
                            <small>- <?php echo $startime?></small>
                        </div>
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap">
                        <div class="flex flex-col">
                            <small><?php echo $row['enddate']?></small>
                            <small>- <?php echo $endtime?></small>
                        </div>
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap">
                        <?php

                            if ($row['rules'] == 'Required') {
                               echo ' <span class="px-2 inline-flex leading-5 font-extrabold rounded-full bg-yellow-300 text-gray-600"  style="font-size: 10px">
                                       REQUIRED
                                </span> ';
                            }else{
                                echo '
                                <span class="px-2 inline-flex leading-5 font-extrabold rounded-full bg-green-100 text-green-900"  style="font-size: 10px">
                                       NOT REQUIRED
                                </span>
                                ';
                            }
                        
                        ?>
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap space-x-2">
                        <a href="#view<?php echo $row['id'];?>" data-toggle="modal" class="text-blue-400 hover:text-white hover:bg-blue-400 w-full px-3 py-1 bg-blue-50 font-semibold rounded transition-colors text-xs">View More</a>
                        <a href="#edit<?php echo $row['id'];?>" data-toggle="modal" >
                            <i class="far fa-edit text-gray-400 cursor-pointer hover:text-blue-300 transition-all" style="font-size: 13px"></i>
                        </a> 
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        </div>
    </div>
  <!-- end -->

  <!-- start -->
    
    <div class="bg-white rounded-lg flex items-center justify-center" style="width: 510px">
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
  <!-- end -->
  </div>
  <script src="../calendar/js/jquery.min.js"></script>
  <!-- <script src="../calendar-10/js/popper.js"></script> -->
  <!-- <script src="../calendar-10/js/bootstrap.min.js"></script> -->
  <script src="../calendar/js/main.js"></script>
</div>
