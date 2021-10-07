
<!-- Start of modal -->
<div id="add" class="show fade">
<div class="flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="event">
             <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
            <div class="bg-white p-5 mx-5 my-3 overflow-auto example" style="max-width: 500px; height: 580px">
                <div class="flex justify-between items-center pb-8">
                    <h1 class="font-semibold text-gray-600 text-xl">Add event</h1>
                    <i class="fas fa-close text-gray-300 cursor-pointer" onclick="toggleModal('event')"></i>
                </div>
                 <div class="overflow-y-auto example" style="height: 470px">
                <!-- <form action="../events/modals/events_modal_process.php" method="POST"> -->
                <form action="../events/modals/events_modal_process.php" method="POST">
                <?php while ($row = mysqli_fetch_array($eventlogs)) { ?>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                 <?php }?>
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <p class="text-sm">Event Name <span class="text-red-500">*</span></p>
                            <input required type="text" autocomplete="off" id="eName" name="eName" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                        </div>
                        <div class="space-y-2">
                            <p class="text-sm">Event Description <span class="text-red-500">*</span></p>
                            <textarea required rows="4" cols="50" name="eDescription" class="bg-gray-100 text-sm focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full"></textarea>
                        </div>
                        <div class="space-y-2">
                            <p class="text-sm">Event Objectives <span class="text-red-500">*</span></p>
                            <!-- <input type="text" autocomplete="off" name="eDescription"class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full"> -->
                            <textarea required rows="4" cols="50" name="eObjectives" class="bg-gray-100 text-sm focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full"></textarea>
                        </div>
                        <div>
                            <label>
                                <div class="flex gap-2">
                                <span class="bg-yellow-50 text-yellow-400 font-extrabold gap-1 uppercase rounded-full px-3 py-1 text-xs flex items-center"> <input id="optionsRadios1" type="radio" value="Required" name="rules" checked> Required </span>
                                <span class="bg-green-50 text-green-400 font-extrabold gap-1 uppercase rounded-full px-3 py-1 text-xs flex items-center"> <input id="optionsRadios2" type="radio" value="Not Required" name="rules">Not Required </span>
                                </div>
                            </label>
                        </div>
                        <div class="space-y-2">
                            <p class="text-sm">Event Location <span class="text-red-500">*</span></p>
                            <input required type="text" autocomplete="off" name="eLocation" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                        </div>

                        <div class="flex gap-4">
                                <div class="space-y-2 w-6/12">
                                    <p class="text-sm">Event Start Date</p>
                                    <?php
                                       date_default_timezone_set("Asia/Manila");
                                       $date = date("Y-m-d");
                                    ?>
                                    <input required type="date" value="<?php echo $date?>" autocomplete="off" name="startdate" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                                <div class="space-y-2 w-6/12">
                                    <p class="text-sm">Event Start Time</p>
                                    <input required type="text" autocomplete="off"  name="startime" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                        </div>
                        
                        <div class="flex gap-4 w-full">
                                <div class="space-y-2 w-6/12">
                                    <p class="text-sm">Event End Date</p>
                                    <input required type="date" value="<?php echo $date?>" name="enddate" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                                <div class="space-y-2 w-6/12">
                                    <p class="text-sm">Event End Time</p>
                                    <input required type="text" name="endtime"  class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                        </div>
                        <!-- activity log -->
                        <?php while ($row = mysqli_fetch_array($toAct)) { ?>
                            <input type="hidden" name="user" value="<?php echo $row['username'] ?>">    
                        <?php }?>
                        <input type="text" name="activity">
                        <!-- end -->
                        <div class="flex justify-center">
                            <div style="font-size: 14px">
                                <button type="button" onclick="toggleModal('event')" class="px-6 py-2 bg-gray-100 rounded text-gray-500">
                                    Cancel
                                </button>
                                <button class="px-6 bg-yellow-500 hover:bg-yellow-400 py-2 text-white rounded ml-3 transition-all" name="save" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                 </form>
                        </div>
            </div>
            </div>
    </div>
</div>
</div>
 <!-- end modal -->
