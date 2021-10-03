
<!-- Start of modal -->
<div class="flex hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="event">
             <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
            <div class="bg-white p-5 mx-5 my-5" style="max-width: 500px">
                <div class="flex justify-between items-center pb-8">
                    <h1 class="font-semibold text-gray-600 text-xl">Add new event</h1>
                    <i class="fas fa-close text-gray-300 cursor-pointer" onclick="toggleModal('event')"></i>
                </div>
                <form action="./modals/events_modal_process.php" method="POST">
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <p class="text-sm">Event Name <span class="text-red-500">*</span></p>
                            <input type="text" autocomplete="off" name="eName" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                        </div>
                        <div class="space-y-2">
                            <p class="text-sm">Event Description <span class="text-red-500">*</span></p>
                            <input type="text" autocomplete="off" name="eDescription"class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                        </div>
                        <div class="space-y-2">
                            <p class="text-sm">Event Location <span class="text-red-500">*</span></p>
                            <input type="text" autocomplete="off" name="eLocation" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                        </div>

                        <div class="flex gap-4">
                                <div class="space-y-2">
                                    <p class="text-sm">Event Start Date</p>
                                    <input type="text" autocomplete="off" name="startdate" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                                <div class="space-y-2">
                                    <p class="text-sm">Event Start Time</p>
                                    <input type="text" autocomplete="off" name="startime" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                        </div>
                        
                        <div class="flex gap-4">
                                <div class="space-y-2">
                                    <p class="text-sm">Event End Date</p>
                                    <input type="text"  name="enddate" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                                <div class="space-y-2">
                                    <p class="text-sm">Event End Time</p>
                                    <input type="text" name="endtime" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                        </div>

                        <div class="flex justify-center">
                            <div style="font-size: 14px">
                                <button type="button" onclick="toggleModal('event')" class="px-6 py-2 bg-gray-100 rounded text-gray-500">
                                    Cancel
                                </button>
                                <button class="px-6 bg-yellow-500 focus:bg-yellow-600 py-2 text-white rounded ml-3" name="save" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                 </form>
            </div>
            </div>
    </div>
</div>
 <!-- end modal -->