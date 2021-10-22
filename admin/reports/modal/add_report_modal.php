    <div id="addReport" class="show fade" >
          <div class="flex px-4 mx-auto overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all" style="width: 350px">
                  <div class="bg-white p-6 mx-3 my-4 md:my-5 lg:my-5" style="max-width: 500px">
                        <div class="flex justify-between items-center pb-8">
                            <h1 class="font-semibold text-gray-600 text-xl">Upload report</h1>
                            <i class="fas fa-close text-gray-300 cursor-pointer" data-dismiss="modal"></i>
                        </div>
                        <form action="./process.php" method="post" class="space-y-3 text-sm md:text-base lg:text-base" enctype="multipart/form-data">
                            <div class="space-y-2">
                                <p class="text-sm">School Year <span class="text-red-500">*</span></p>
                                <input type="text" value="" placeholder="Ex. 2020-2021" autocomplete="off" name="sYear" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">Semester <span class="text-red-500">*</span></p>
                                <input type="text" value="" placeholder="Ex. 1st Semester" autocomplete="off" name="sem" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div>
                            <div class="space-y-2">
                                  <p class="text-sm">File <span class="text-red-500">*</span></p>
                                <!-- <div class="flex items-center gap-2 border border-gray-200 rounded-md pr-4 w-60 md:w-full lg:w-full">
                                    <div style="width: 90px; height: 60px; overflow:hidden; " class="opacity-50 border border-gray-200">
                                        <iframe src="./files/PINTANG.QUIZ1.pdf" frameBorder="0" scrolling="no" style="width: 100%; border: 0;" class="relative bottom-5 cursor-pointer"></iframe>
                                    </div>
                                    <div class="py-2">
                                         <small style="font-size: 13px" class="hover:text-yellow-500">BUPC-CSC AR 2019-2020.pdf</small>
                                         <small class="text-gray-500 italic text-xs block" style="padding-top: -10px">PDF</small>
                                    </div>
                                </div> -->
                                <!-- <div class="relative cursor-pointer">
                                    <button class="cursor-pointer py-2 px-2 rounded border border-opacity-70 border-gray-300 hover:bg-gray-50 hover:border-yellow-100 transition-all w-full">
                                        <div class="cursor-pointer text-yellow-400 flex justify-center text-sm items-center gap-2">
                                            <div class="text-xs">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <div>
                                                <span>Add file</span>
                                            </div>
                                        </div>
                                    </button>
                                     <div class="cursor-pointer absolute text-sm bottom-1 opacity-0" style="font-size: 13px">
                                        <input type="file" name="report" id="" class="cursor-pointer">
                                    </div>
                                </div> -->
                                    <button type="button" class="cursor-pointer py-2 rounded border border-opacity-70 bg-gray-50 border-gray-300 hover:bg-gray-50 hover:border-yellow-100 transition-all w-full">
                                        <input type="file" class="text-xs flex flex-start pl-2" name="report">
                                    </button>
                            </div>
                            <div class="flex justify-center pt-2">
                                <div style="font-size: 14px">
                                    <button type="button" data-dismiss="modal" class="px-6 py-2 bg-gray-100 rounded text-gray-500">
                                        Cancel
                                    </button>
                                    <button class="relative px-6 bg-yellow-500 hover:bg-yellow-400 py-2 text-white rounded ml-3" name="upload" type="button" onclick="this.classList.toggle('button--loading')">
                                         <span class="button-text">Upload</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

