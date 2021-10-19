<style>
    .custom-xl{
        height: 470px;
    }
    @media (min-width: 1024px) { 
        .custom-xl{
            height: 100%;
        }
    }
</style>
<?php $officersEdit = mysqli_query($db, "SELECT * FROM officers"); ?>
<?php while ($row = mysqli_fetch_array($officersEdit)) { ?>
    <div id="officers<?php echo $row['id'] ?>" class="show fade" >
          <div style="max-width: 400px" class="flex px-4 mx-auto overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                 <div class="bg-white px-3 py-5 md:p-5 lg:px-5 mx-5 my-3 overflow-auto example custom-xl" style="max-width: 500px;">
                        <div class="flex justify-between items-center pb-8">
                            <h1 class="font-semibold text-gray-600 text-xl">Update officer</h1>
                            <i class="fas fa-close text-gray-300 cursor-pointer" data-dismiss="modal"></i>
                        </div>
                         <div class="overflow-y-auto example" style="height: 470px">
                        <form action="../officers/process.php" method="post" class="space-y-2 text-sm md:text-base lg:text-base" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="flex justify-center">
                                <div class="space-y-4 relative">
                                    <div class="rounded-full overflow-hidden" style="width: 140px; height: 140px; margin-top:  ">
                                            <!-- <img 
                                            style="object-fit: cover; width: 100%; height: 100%"
                                                src="../images/user1.png"
                                                name="picture"
                                                onClick="triggerClick()" 
                                                id="profileDisplay"
                                            > -->
                                             <?php if ($row['picture'] == NULL): ?>
                                                <img class="h-10 w-10 rounded-full" src="../images/user1.png" alt=""  style="object-fit: cover; width: 100%; height: 100%">
                                             <?php else: ?>
                                                <img class="h-10 w-10 rounded-full" src="<?php echo '../modals/upload/' . $row['picture'] ?>" alt=""  style="object-fit: cover; width: 100%; height: 100%">
                                             <?php endif; ?>
                                            </div>
                                             <div class="absolute bottom-3 text-xs opacity-0">
                                                <input 
                                                    type="file" 
                                                    name="profileImage" 
                                                    style="opacity: "
                                                    onChange="displayImage(this)" 
                                                    id="profileImage" 
                                                >
                                            </div>
                                    </div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">Name <span class="text-red-500">*</span></p>
                                <input type="text" value="<?php echo $row['name'] ?>" autocomplete="off" name="name" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div>
                            <div class="flex gap-3">
                                <div class="space-y-2">
                                    <p class="text-sm">Course<span class="text-red-500">*</span></p>
                                    <input type="text" placeholder="Ex. BSIS-1A" value="<?php echo $row['course'] ?>" autocomplete="off" name="course" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                                <div class="space-y-2">
                                    <p class="text-sm">Year Level <span class="text-red-500">*</span></p>
                                    <input type="text" placeholder="Ex. 1st-Year" value="<?php echo $row['yearLevel'] ?>" autocomplete="off" name="yearLevel" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <select class="rounded" name="position" style="padding: 9px; width: 100%; background:#F3F4F6 " required>
                                    <option value="<?php echo $row['position']; ?>" selected hidden><?php echo $row['position']; ?></option>
                                    <option value="President">President</option>
                                    <option value="Vice Presiden">Vice President</option>
                                    <option value="Secretary">Secretary</option>
                                    <option value="Treasurer">Treasurer</option>
                                    <option value="Auditor">Auditor</option>
                                    <option value="Business Manager">Business Manager</option>
                                    <option value="P.I.O">P.I.O</option>
                                    <option value="Representative">Representative</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">BU Email <span class="text-red-500">*</span></p>
                                <input type="text" value="<?php echo $row['buEmail'] ?>" autocomplete="off" name="buEmail" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">Facebook<span class="text-red-500">*</span></p>
                                <input type="text" value="<?php echo $row['fb'] ?>" autocomplete="off" name="fb" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div>
                            <div class="flex justify-center">
                                <div style="font-size: 14px">
                                    <button type="button" data-dismiss="modal" class="px-6 py-2 bg-gray-100 rounded text-gray-500">
                                        Cancel
                                    </button>
                                    <button class="px-6 bg-yellow-500 hover:bg-yellow-400 py-2 text-white rounded ml-3" name="save" type="submit">
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
 <?php } ?>
