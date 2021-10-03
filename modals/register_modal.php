 <!-- Start of modal -->

   <div class="flex hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
             <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xs sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
              Create your Account
            </h3>
            <form action="register_process.php" method="POST">
                    <input type="hidden" autocomplete="false">
                    <div class="mt-2 flex justify-center flex-col items-center gap-2">
                        <div>
                            <label for="" class="block text-gray-700">Your name</label>
                            <input type="text" class="focus:outline-none focus:border-yellow-500 border-2 rounded border-gray-300 p-2" placeholder="Full name" name="name">
                        </div>
                        <div>
                            <label for="" class="block text-gray-700">Your Course</label>
                            <input type="text" class="focus:outline-none focus:border-yellow-500 border-2 rounded border-gray-300 p-2" placeholder="Course" name="course">
                        </div>
                        <div>
                            <label for="" class="block text-gray-700">Your Student ID</label>
                            <input type="text" class="focus:outline-none focus:border-yellow-500 border-2 rounded border-gray-300 p-2" placeholder="Student ID" name="studentId">
                        </div>
                    </div>
                </div>
                </div>
            </div>
                <div class="bg-gray-50 flex justify-center pb-8 w">
                    <button type="button" onclick="toggleModal('modal-id')" class="w-full ml-11">
                    Cancel
                    </button>
                    <button class="w-full bg-yellow-500 focus:bg-yellow-600 pt-1 pb-1 mr-11 text-white" type="submit" name="register" onclick="toggleModal('modal-id')">
                    Register
                    </button>
                </div>
        </form>
    </div>
 </div>
 <!-- end modal -->