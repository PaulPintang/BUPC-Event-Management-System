
<!-- Start of modal -->
<?php while ($row = mysqli_fetch_array($userEdit)) { ?>
    <div id="edit<?php echo $row['id'] ?>" class="show fade">
        <div class=" flex overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="user_modal">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                    <div class="bg-white p-5 mx-5 my-5" style="max-width: 500px">
                        <div class="flex justify-between items-center pb-8">
                            <h1 class="font-semibold text-gray-600 text-xl">Edit user account</h1>
                            <i class="fas fa-close text-gray-300 cursor-pointer" data-dismiss="modal"></i>
                        </div>
                        <form action="./modals/user_modal_process.php" method="post" class="space-y-2" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="flex justify-center">
                                <div class="space-y-4">
                                <div class="rounded-full overflow-hidden"style="width: 150px; height: 150px;">
                                       
                                            <img 
                                            style="object-fit: cover; width: 100%; height: 100%"
                                                src="<?php echo '../../../capstone-csc-2021/admin/modals/upload/' . $row['picture'];  ?>"
                                                name="picture"
                                                onClick="triggerClick()" 
                                                id="profileDisplay"
                                            >
                                            </div>
                                <input 
                                                
                                                type="file" 
                                                name="profileImage" 
                                                style=" top: -60px; margin-right: -120px; display: flex;"
                                                onChange="displayImage(this)" 
                                                id="profileImage" 
                                            >
                               
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">Name <span class="text-red-500">*</span></p>
                                <input type="text" value="<?php echo $row['name']; ?>" autocomplete="off" name="name" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">Username<span class="text-red-500">*</span></p>
                                <input type="text" value="<?php echo $row['username']; ?>" autocomplete="off" name="username" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">Password <span class="text-red-500">*</span></p>
                                <input type="password" value="<?php echo $row['password']; ?>" autocomplete="off" name="password" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div>
                            <div>
                                <small class="text-gray-500">Note: this account can also access this admin page. Thank you!</small>
                            </div>
                            <div class="flex justify-center">
                                <div style="font-size: 14px">
                                    <button type="button" data-dismiss="modal" class="px-6 py-2 bg-gray-100 rounded text-gray-500">
                                        Cancel
                                    </button>
                                    <button class="px-6 bg-green-500 hover:bg-green-400 py-2 text-white rounded ml-3" name="update" type="submit" onclick="toggleModal('modal-id')">
                                        Update
                                    </button>
                                </div>
                            </div>
                    </form>
                    </div>
                    </div>
            </div>
        </div>
    </div>
<?php } ?>
 <!-- end modal -->
 <script>
	function triggerClick(e) {
		document.querySelector("#profileImage").click();
	}

	function displayImage(e) {
		if (e.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				document
					.querySelector("#profileDisplay")
					.setAttribute("src", e.target.result);
			};
			reader.readAsDataURL(e.files[0]);
		}
	}
</script>