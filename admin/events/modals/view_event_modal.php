
<!-- Start of modal -->
<div class="hidden flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center transition-all duration-150 ease-in-out" id="view_event">
             <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
            <div class="bg-white mx-5 mb-5 mt-2" style="max-width: 600px">
                <div class="flex justify-end items-center gap-7 pr-3 pt-4">
                    <i class="fas fa-trash text-gray-300 cursor-pointer hover:text-red-400 transition-all" style="font-size: 13px" onclick="toggleModal('view_event')"></i>
                    <i class="fas fa-close text-gray-300 cursor-pointer hover:text-blue-300 transition-all" style="font-size: 18px" onclick="toggleModal('view_event')"></i>
                </div>
                
                <div class="space-y-5 px-10 pt-6 pb-10">
                    <div class="flex items-center gap-4">
                        <i class="far fa-calendar-check text-gray-300" style="font-size: 25px"></i>
                        <h1 class="text-2xl font-semibold text-gray-800">Taratakan</h1>
                    </div>
                    <div>
                        <p class="font-bold text-gray-700 text-lg">Objectives: </p>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, tenetur et? Vero magnam nobis fuga, eum expedita quis ullam repellat atque deserunt odit fugit dolor, nostrum molestiae quisquam praesentium a.</p>
                    </div>
                    <div>
                         <style>
                            .circle {
                            height: 13px;
                            width: 13px;
                            border-radius: 50%;
                            display: inline-block;
                            }
                        </style>
                        <div class="space-y-5">
                            <div class="flex items-center gap-3">
                                <i class="fas fa-tags text-gray-400"></i>
                                <span class="px-2 inline-flex leading-5 font-extrabold rounded-full bg-green-100 text-green-900"  style="font-size: 10px">
                                        REQUIRED   
                                </span>
                            </div>
                            <div>
                                <div class="flex gap-3 items-center">
                                        <span class="circle bg-green-400"></span>
                                        <span class="font-extrabold">Starts</span><p class="text-gray-900"> Monday Oct 04, 2021 - <span>1:30 pm</span></p>
                                </div>
                                <div class="flex gap-3 items-center">
                                        <span class="circle bg-red-400"></span>
                                        <span class="font-extrabold">Ends</span><p class="text-gray-900"> Monday Oct 04, 2021 - <span>5:30 pm</span></p>
                                </div>
                            </div>
                           
                            <div class="flex items-center gap-3">
                                <i class="fas fa-map-marker-alt text-gray-400"></i>
                                <p>BUPC Gymnasium</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            </div>
    </div>
</div>
 <!-- end modal -->