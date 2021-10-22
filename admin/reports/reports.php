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
            <h1 class="font-medium text-gray-700  " styke="top:40px">Accomplishment <span class="text-yellow-400">Reports</span></h1>
            <div class="flex gap-3 items-center">
                <!-- <a class="relative py-1 px-3 bg-yellow-400 rounded text-white hover:bg-yellow-300 transition-all" >
                        <div class="flex items-center gap-2">
                            <div>
                                <i class="fas fa-plus"></i>
                            </div>
                            <div>
                                <span>Add event</span>
                            </div>
                        </div>
                        <div class="absolute text-xs bottom-1 opacity-0 right-2" style="font-size: 5px">
                             <input type="file" name="report" id="">
                        </div>
                </a> -->
                 <a href="#addReport" data-toggle="modal" class="py-1 px-3 bg-yellow-400 rounded text-white hover:bg-yellow-300 transition-all" >
              <!-- <a href="#" class="py-1 px-3 bg-yellow-400 rounded text-white hover:bg-yellow-300 transition-all" onclick="toggleModal('event')"> -->
                    <div class="flex items-center gap-2">
                        <div>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div>
                            <span>Add</span>
                        </div>
                    </div>
             </a>
                <div class="hover:opacity-70 transition-all">
                    <a href="https://docs.google.com/document/d/1j8Hb1rebrMbqqnitR77d8qJyFItSgbVekOaeOEeFxVk/edit" target="blank">
                         <img src="../images/docs.png" alt="" style="width: 24px">
                    </a>
                 </div>
            </div>
              
        </div>
        <div class="overflow-y-auto example" style="height: 300px">
        <table class="min-w-full divide-y divide-gray-200 border-collapse w-full">
            <thead class="sticky top-0 bg-white z-50">
                <tr>
                    <th scope="col" class="px-3 md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        File
                    </th>
                    <th scope="col" class="hidden md:table-cell lg:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        School Year
                    </th>
                    <th scope="col" class="hidden md:table-cell lg:table-cell px-3 md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Semester
                    </th>
                    <!-- <th scope="col" class="hidden md:table-cell lg:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Logout Time
                    </th> -->
                     <th scope="col" class="hidden md:table-cell lg:table-cellpx-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       
                    </th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_array($files)) { ?>

            <tbody class=" divide-y divide-gray-200 overflow-auto text-gray-700">
                <tr>
                    <td class="pl-2 md:px-6 lg:px-6 py-2 whitespace-nowrap text-gray-900">
                            <!-- <small>BUPC-CSC AR 2019-2020.pdf</small>
                            <small class="text-gray-500 italic text-xs block" style="padding-top: -10px">Uploaded last week</small> -->
                            <a href="" class="hover:text-yellow-500">
                                <div class="flex items-center gap-2 border border-gray-200 rounded-md pr-4 w-full md:w-full lg:w-full">
                                    <div style="width: 90px; height: 60px; overflow:hidden; " class="opacity-50 border border-gray-200">
                                        <iframe src="<?php echo './files/' . $row['report']; ?>" frameBorder="0" scrolling="no" style="width: 100%; border: 0;" class="relative bottom-5 cursor-pointer"></iframe>
                                    </div>
                                    <div class="py-2">
                                        <small style="font-size: 13px" class="hover:text-yellow-500"><?php echo $row['report'] ?></small>
                                        <small class="text-gray-500 italic text-xs block" style="padding-top: -10px">Uploaded today</small>
                                    </div>
                                </div>
                            </a>
                            <div class="flex gap-2 py-2 md:hidden lg:hidden">
                                <small><?php echo $row['sYear'] ?></small> 
                                <small><?php echo $row['sem'] ?></small>
                                <a href="../events/modals/events_modal_process.php?del=<?php echo $row['id'];?>" name="del">    
                                     <i class="fas fa-trash text-gray-300 cursor-pointer hover:text-red-300 transition-all px-2" style="font-size: 13px" onclick="toggleModal('view_event')"></i>
                                </a>
                            </div>
                    </td>
                    <td class=" hidden md:table-cell lg:table-cell px-6 py-2 whitespace-nowrap">
                        <small><?php echo $row['sYear'] ?></small> 
                    </td>
                    <td class="hidden md:table-cell lg:table-cell px-3 md:px-6 lg:px-6 py-2 whitespace-nowrap">
                        <small><?php echo $row['sem'] ?></small>
                    </td>
                    <td class="hidden md:table-cell lg:table-cell md:px-6 lg:px-6 py-2 whitespace-nowrap">
                        <a href="../events/modals/events_modal_process.php?del=<?php echo $row['id'];?>" name="del">
                            <i class="fas fa-trash text-gray-300 cursor-pointer hover:text-red-300 transition-all px-2" style="font-size: 13px" onclick="toggleModal('view_event')"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            <?php }?>
        </table>
        </div>
    <!-- end -->
    </div>
    <div class="bg-white rounded-lg flex items-center justify-center pt-10 md:pt-0 lg:pt-0 w-full lg:w-5/12 px-5 md:px-0 lg:px-0">
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

 <script src="../calendar/js/jquery.min.js"></script>
  <script src="../calendar/js/main.js"></script>