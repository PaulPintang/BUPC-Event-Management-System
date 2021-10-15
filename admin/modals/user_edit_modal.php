
<!-- Start of modal -->
<?php while ($row = mysqli_fetch_array($userEdit)) { ?>
    <div id="editU<?php echo $row['id'] ?>" class="show fade">
        <div style="max-width: 400px" class="flex mx-auto overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                    <div class="bg-white p-5 mx-5 my-5" style="max-width: 500px">
                        <div class="flex justify-between items-center pb-8">
                            <h1 class="font-semibold text-gray-600 text-xl">Edit user account</h1>
                            <div class="flex items-center gap-5">
                                <a href="process.php?del=<?php echo $row['id'];?>" name="del">
                                    <i class="fas fa-trash text-gray-300 cursor-pointer hover:text-red-400 transition-all" style="font-size: 13px" onclick="toggleModal('view_event')"></i>
                                </a>
                                 <i class="fas fa-close text-gray-300 cursor-pointer" data-dismiss="modal"></i>
                            </div>
                        </div>
                        <form action="../modals/user_modal_process.php" method="post" class="space-y-2" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="flex justify-center">
                                <div class="space-y-4">
                                <div class="rounded-full overflow-hidden" style="width: 150px; height: 150px; margin-bottom: -2rem">
                                    <img 
                                    style="object-fit: cover; width: 100%; height: 100%"
                                        src="<?php echo '../modals/upload/' . $row['picture']; ?>"
                                        name="picture"
                                        onClick="triggerClickE()" 
                                        id="profileDisplayE"
                                    >
                                    </div>
                                    <input 
                                        type="file" 
                                        name="profileImage" 
                                        style=" top: -60px; margin-right: -120px; display: flex; opacity: 0"
                                        onChange="displayImageE(this)" 
                                        id="profileImageE" 
                                    >
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">Name <span class="text-red-500">*</span></p>
                                <input type="text" value="<?php echo $row['name']; ?>" autocomplete="off" name="name" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div>
                            <div class="flex gap-3">
                                <div class="space-y-2">
                                    <p class="text-sm">Username<span class="text-red-500">*</span></p>
                                    <input type="text" value="<?php echo $row['username']; ?>" autocomplete="off" name="username" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                                <div class="space-y-2">
                                    <p class="text-sm">Password <span class="text-red-500">*</span></p>
                                    <input type="password" value="<?php echo $row['password']; ?>" autocomplete="off" name="password" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                            </div>
                             <select class="rounded" name="role" style="padding: 9px; width: 100%; background:#F3F4F6 " required>
                                <option value="" disabled selected hidden>Role</option>
                                <option value="President">President</option>
                                <option value="Vice Presiden">Vice President</option>
                                <option value="Secretary">Secretary</option>
                                <option value="Treasurer">Treasurer</option>
                                <option value="Auditor">Auditor</option>
                                <option value="Business Manager">Business Manager</option>
                                <option value="P.I.O">P.I.O</option>
                                <option value="Represendtative">Represendtative</option>
                            </select>
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
<?php } ?> 
 <!-- end modal -->

<script>
function triggerClickE(e) {
    document.querySelector("#profileImageE").click();
}

function displayImageE(e) {
    if (e.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document
                .querySelector("#profileDisplayE")
                .setAttribute("src", e.target.result);
        };
        reader.readAsDataURL(e.files[0]);
    }
}
</script>