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
<div class="flex gap-7 py-10 container mx-auto">
    <div class="bg-white rounded-lg h-96 w-full p-6 shadow-sm ">
    <!-- start -->  
        <div class="flex justify-between items-center pb-2">
            <h1 class="font-medium text-gray-700  " styke="top:40px">BUPC <span class="text-yellow-400">Events</span></h1>
              <a href="#" class="py-1 px-3 bg-yellow-400 rounded text-white hover:bg-yellow-300" onclick="toggleModal('event')">
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
            <tbody class=" divide-y divide-gray-200 overflow-auto">
            <?php $events = mysqli_query($db, "SELECT * FROM events ORDER BY ID DESC"); ?>
            <?php while ($row = mysqli_fetch_array($events)) { ?>
                <tr>
                    <td class="px-6 py-2 whitespace-nowrap">
                        <div class="ml-4">
                            <small><?php echo $row['eName']?></small>
                        </div>
                    </td>
                    <!-- <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-green-100 text-green-800" style="font-size: 10px">
                            Online
                        </span>
                    </td> -->
                    <td class="px-6 py-2 whitespace-nowrap">
                        <small><?php echo $row['startdate']?></small> 
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap">
                        <small><?php echo $row['enddate']?></small>
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap">
                        <small><?php echo $row['startime']?></small>
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap space-x-2">
                        <a href="#" onclick="toggleModal('view_event')" class="text-blue-400 hover:text-white hover:bg-blue-400 w-full px-3 py-1 bg-blue-50 font-semibold rounded transition-colors text-xs">View More</a>
                        <i class="far fa-edit text-gray-400 cursor-pointer hover:text-blue-300 transition-all" style="font-size: 13px" onclick="toggleModal('edit_event')"></i>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        </div>
    <!-- end -->
    </div>
    <div class="bg-white rounded-lg p-6 shadow-sm" style="width: 500px">
        <div class="flex justify-between pb-2">
            <h1 class="font-medium text-gray-700">Users</h1>
        </div>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status
                    </th>
                </tr>
            </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php while ($row = mysqli_fetch_array($users)) { ?>
                <tr>
                    <td class="px-6 py-2 whitespace-nowrap">
                        <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="../images/undraw_profile.svg" alt="">
                        </div>
                        <div class="ml-4">
                            <small><?php echo $row['name']?></small>
                        </div>
                        </div>
                    </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                         <?php
                         if ($row['status'] == 'Online') {
                            echo'
                                <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-green-100 text-green-800" style="font-size: 10px">
                                    Online
                                </span>
                             ';
                         }else{
                             echo '
                               <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-red-100 text-green-800" style="font-size: 10px">
                                        Offline
                                </span>
                             ';
                         }
                         ?>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>