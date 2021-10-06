
<!-- Start of modal -->
<?php while ($row = mysqli_fetch_array($viewActivity)) { ?>
    <div id="view<?php echo $row['id'] ?>" class="show fade">
        <div class="flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center transition-all duration-150 ease-in-out" id="activity">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                <div class="bg-white mx-5 mb-5 mt-2 w-96" style="width:">
                    <div class="flex justify-end items-center gap-7 pr-3 pt-4">
                        <a href="process.php?del=<?php echo $row['id'];?>" name="del">
                            <i class="fas fa-trash text-gray-300 cursor-pointer hover:text-red-400 transition-all" style="font-size: 13px" onclick="toggleModal('activity')"></i>
                        </a>
                        <a href="../logs" class="fas fa-close text-gray-300 cursor-pointer hover:text-blue-300 transition-all" style="font-size: 18px" onclick="toggleModal('activity')"></a>
                    </div>
                    
                    <div class="space-y-5 px-10 pt-6 pb-10">
                        <div>
                            <div class="flex items-center gap-4">
                                <i class="far fa-user text-gray-300" style=""></i>
                                <h1 class="text-2xl font-semibold text-gray-800"><?php echo $row['username']?></h1>
                            </div>
                            <div class="flex gap-1 items-center">
                                <span class="text-gray-900 text-sm">Date logged in: </span>
                                <span class="text-gray-600 italic text-sm"><?php echo $row['date']?></span>
                            </div>
                            <div class="flex gap-1 items-center">
                                <span class="text-gray-900 text-sm">Time: </span>
                                <span class="text-gray-600 italic text-sm"><?php echo $row['login']?></span>
                            </div>
                            <!-- <div class="py-2">
                                <div class="h-auto bg-gray-200 relative" style="width: 1.5px">
                                <i class="fas fa-wizards-of-the-coast    "></i>
                                <i class="fas fa-drafting-compass    "></i>
                                    <div class="w-3 h-3 bg-gray-200 rounded-full overflow-hidden absolute bottom-9" style="left: -3px"></div>
                                </div>
                            </div> -->
                            <div class="py-3">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 bg-gray-200 rounded-full overflow-hidden"></div>
                                    <span class="text-sm text-gray-600">4:30 PM</span>
                                </div>
                                <div class="flex items-center gap-1">
                                    <div class="w-6 bg-blue-300" style="height: 1px"></div>
                                    <span class="text-gray-500 text-xs italic">  Add new event <span class="text-gray-700 font-extrabold">'Welcome Party 2021'</span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
        </div>
    </div>
    </div>
<?php } ?>
 <!-- end modal -->