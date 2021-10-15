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
<div class="block md:flex lg:flex gap-5 py-10 container">
    <div class="bg-white md:rounded-lg lg:rounded-lg h-96 w-full p-6 shadow-sm">
    <!-- start -->  
        <div class="flex justify-between items-center pb-2">
            <h1 class="font-medium text-gray-700  " styke="top:40px">User <span class="text-yellow-400">Logs</span></h1>
             <a href="process.php?clear" name="clear" class="bg-red-300 text-white rounded hover:bg-red-400 px-2 py-1 transition-all">Clear logs</a>
        </div>
        <div class="overflow-y-auto example" style="height: 300px">
        <table class="min-w-full divide-y divide-gray-200 border-collapse w-full">
            <thead class="sticky top-0">
                <tr>
                    <th scope="col" class="px-3 md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       Username
                    </th>
                    <th scope="col" class="hidden md:table-cell lg:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Date
                    </th>
                    <th scope="col" class="px-3 md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Login Time
                    </th>
                    <th scope="col" class="hidden md:table-cell lg:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Logout Time
                    </th>
                     <th scope="col" class="md:hidden lg:hidden px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       
                    </th>
                </tr>
            </thead>
            <tbody class=" divide-y divide-gray-200 overflow-auto text-gray-700">
            <?php $logs = mysqli_query($db, "SELECT * FROM logs ORDER BY ID DESC"); ?>
            <?php while ($row = mysqli_fetch_array($logs)) { ?>
                <tr>
                    <td class="px-3 md:px-6 lg:px-6 py-2 whitespace-nowrap">
                        <div class="flex items-center">
                       
                        <div class="ml-4">
                            <small><?php echo $row['username']?></small>
                        </div>
                        </div>
                    </td>
                    <td class=" hidden md:table-cell lg:table-cell px-6 py-2 whitespace-nowrap">
                        <small><?php echo $row['date']?></small> 
                    </td>
                    <td class="px-3 md:px-6 lg:px-6 py-2 whitespace-nowrap">
                        <small><?php echo $row['login']?></small>
                    </td>
                    <td class="hidden md:table-cell lg:table-cell px-3 md:px-6 lg:px-6 py-2 whitespace-nowrap">
                        <style>
                            .dot {
                            height: 5px;
                            width: 5px;
                            border-radius: 50%;
                            display: inline-block;
                            }
                        </style>
                        <?php
                            $timeOut = $row['logout'];
                            if ($timeOut == NULL) {
                                echo '
                                    <div class="flex gap-1">
                                        <span class="dot bg-green-400"></span>
                                        <span class="dot bg-green-400"></span>
                                        <span class="dot bg-green-400"></span>
                                    </div>
                                ';
                            }else{
                                echo
                                    "<small>$timeOut</small>";
                                ;
                            }
                        ?>
                    </td>
                      <td class="px-0 py-2 whitespace-nowrap">
                        <a href="#view<?php echo $row['id'];?>" data-toggle="modal" class="md:hidden lg:hidden text-blue-400 hover:text-white hover:bg-blue-400 w-full px-3 py-1 bg-blue-50 font-semibold rounded transition-colors text-xs">View</a>
                        <!-- <a href="#view<?php echo $row['id'];?>" data-toggle="modal" class="hidden md:inline lg:inline text-blue-400 hover:text-white hover:bg-blue-400 w-full px-3 py-1 bg-blue-50 font-semibold rounded transition-colors text-xs">Activity log</a> -->
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        </div>
    <!-- end -->
    </div>
    <div class="bg-white rounded-lg p-6 shadow-sm w-full lg:w-5/12">
        <div class="flex justify-between pb-2">
            <h1 class="font-medium text-gray-700">User <span class="text-yellow-400">Status</span></h1>
        </div>
          <div class="overflow-y-auto example" style="height: 280px">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="sticky top-0">
                <tr>
                    <th scope="col" class="bg-white px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider shadow-sm">
                        Name
                    </th>
                    <th scope="col" class="bg-white px-3 md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider shadow-sm">
                        Status
                    </th>
                </tr>
            </thead>
        <tbody class="bg-white divide-y divide-gray-200 text-gray-700">
            <?php while ($row = mysqli_fetch_array($users)) { ?>
                <tr>
                    <td class="px-3 py-2 whitespace-nowrap">
                        <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="<?php echo '../modals/upload/' . $row['picture']; ?>" alt="">
                        </div>
                        <div class="ml-4">
                            <small><?php echo $row['name']?></small>
                        </div>
                        </div>
                    </td>
                    <td class="px-3 md:px-6 lg:px-6 py-4 whitespace-nowrap">
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
</div>
