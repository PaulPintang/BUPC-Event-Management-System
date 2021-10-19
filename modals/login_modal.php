 <!-- Start of modal -->

   <!-- <div class="flex hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="login-id">
             <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xs sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
              Login your Account
            </h3>
            
            <form method="POST" action="register_process.php">
            <input type="hidden" autocomplete="false">
            <div class="mt-2 flex justify-center flex-col items-center gap-2">
                <?php if (isset($_GET['error'])) { ?>
                        <div class="text-red-300 text-center">
                            <?php echo $_GET['error']; ?>
                        </div>
                    <?php } ?>
                <div>
                    <label for="" class="block text-gray-700">Your name</label>
                     <input type="text" class="focus:outline-none focus:border-yellow-500 border-2 rounded border-gray-300 p-2" placeholder="Full name" name="name">
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
        <button type="button" onclick="toggleModal('login-id')" class="w-full ml-11">
          Cancel
        </button>
        <button class="w-full bg-yellow-500 focus:bg-yellow-600 pt-1 pb-1 mr-11 text-white" type="submit">
          Login
        </button>
        </form>
      </div>
    </div>
 </div> -->
 <!-- end modal -->

      <div class="flex hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="user_modal">
                  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
          <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
                  <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                  <div class="bg-white p-5 mx-5 my-5" style="max-width: 500px">
                      <div class="flex justify-between items-center pb-8">
                          <h1 class="font-semibold text-gray-600 text-xl">Login your account</h1>
                          <i class="fas fa-close text-gray-300 cursor-pointer" onclick="toggleModal('user_modal')" ></i>
                      </div>
                     <form method="POST" action="login_process.php" class="space-y-2">
                     <input type="hidden" autocomplete="false">
                          <div class="space-y-2">
                              <p class="text-sm">Name <span class="text-red-500">*</span></p>
                              <input type="text"  autocomplete="off" name="name" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                          </div>
                          <div class="space-y-2">
                              <p class="text-sm">StudentID<span class="text-red-500">*</span></p>
                              <input type="text"  autocomplete="off" name="studentId" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                          </div>
                          
                          <div class="flex justify-center py-4">
                              <div style="font-size: 14px">
                                  <button type="button"  onclick="toggleModal('user_modal')" class="px-6 py-2 bg-gray-100 rounded text-gray-500">
                                      Cancel
                                  </button>
                                  <button class="px-6 bg-green-500 hover:bg-green-400 py-2 text-white rounded ml-3" name="update" type="submit">
                                      Login
                                  </button>
                              </div>
                          </div>
                  </form>
                  </div>
                  </div>
          </div>
      </div>