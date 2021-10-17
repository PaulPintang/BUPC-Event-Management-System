<?php  

    $id = $_GET['id'];
    $getUsers = mysqli_query($db, "SELECT * FROM users WHERE id=$id");

?>
      <style>
    /* Hide scrollbar for Chrome, Safari and Opera */
.example::-webkit-scrollbar {
    display: none;
}
/* Hide scrollbar for IE, Edge and Firefox */
.example {
-ms-overflow-style: none;  /* IE and Edge */
scrollbar-width: none;  /* Firefox */
}

</style>
      
      <div class="block md:flex lg:flex gap-7 py-10 container mx-auto">
          <div class="bg-white rounded-lg h-auto md:h-96 lg:h-96 w-full flex justify-center items-start md:items-center md:shadow-sm lg:shadow-sm mb-9 md:mb-0 lg:mb-0">
                    <div class="h-auto block md:flex lg:flex justify-center lg:justify-between md:justify-between p-10 text-center md:text-left` lg:text-left w-full">
                        <div class="w-full lg:w-2/4">
                            <h1 class=" text-3xl lg:text-4xl font-bold text-gray-700"> <span class="text-yellow-400">BUPC</span> College Student Council <span class="border-b-2 border-yellow-100">Admin page</span> </h1>
                            <p class="text-gray-400 py-5 text-sm lg:text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, dicta. Lorem ipsum dolor sit amet.</p>
                            <a href="../../index.php" class="py-2 px-5 bg-yellow-400 rounded text-white hover:bg-yellow-300 transition-all">Official website</a>
                        </div>
                        <div class="w-2/4 hidden lg:block">
                            <img src="../images/admin.svg" alt="" style="width: 100%">
                        </div>
                    </div>
                </div>
        <?php while ($row = mysqli_fetch_array($getUsers)) { ?>
                 <div style="max-width: 400px" class="flex mx-auto overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                    <div class="bg-white p-5 mx-5 my-5" style="max-width: 500px">
                        <div class="flex justify-between items-center pb-8">
                            <h1 class="font-semibold text-gray-600 text-xl">Edit user account</h1>
                            <div class="flex items-center gap-5">
                                <a href="../modals/user_modal_process.php?del=<?php echo $row['id'];?>" name="del">
                                    <i class="fas fa-trash text-gray-300 cursor-pointer hover:text-red-400 transition-all" style="font-size: 13px" onclick="toggleModal('view_event')"></i>
                                </a>
                                <a href="../home">
                                 <i class="fas fa-close text-gray-300 cursor-pointer"></i>
                                </a>
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
                                        onClick="triggerClick()" 
                                        id="profileDisplay"
                                    >
                                    </div>
                                    <input 
                                        type="file" 
                                        name="profileImage" 
                                        style=" top: -60px; margin-right: -120px; display: flex; opacity: 0"
                                        onChange="displayImage(this)" 
                                        id="profileImage" 
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
                                <option value="<?php echo $row['role']; ?>"  selected hidden><?php echo $row['role']; ?></option>
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
                                     <a href="../home">
                                            Cancel
                                    </a>
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
      <div class="bg-white rounded-lg p-6 md:shadow-sm lg:shadow-sm">
                    <div class="flex justify-between pb-5">
                        <h1 class="font-medium text-gray-700">Users</h1>
                        <div>
                           <a href="#addUser" data-toggle="modal" class="">
                                <i class="fas fa-plus text-gray-400"></i>
                            </a>
                        </div>
                    </div>
                     <div class="overflow-y-auto example" style="height: 280px">
                    <table class="min-w-full divide-y divide-gray-200">
                       <thead class="sticky top-0">
                            <tr>
                                <th scope="col" class="bg-white shadow-sm md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="bg-white shadow-sm px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell lg:table-cell">
                                    Role
                                </th>
                                <th scope="col" class="bg-white shadow-sm relative px-3 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 overflow-auto">
                            <?php while ($row = mysqli_fetch_array($users)) { ?>
                                <tr>
                                    <td class="md:px-6 lg:px-6 py-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="<?php echo '../modals/upload/' . $row['picture']; ?>" alt="">
                                            </div>
                                            <div class="ml-4 text-gray-800">
                                                <small><?php echo $row['name'] ?></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap  hidden md:block lg:block">
                                        <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-green-100 text-green-800" style="font-size: 10px">
                                            <?php echo $row['role'] ?>
                                        </span>
                                    </td>

                                    <td class="md:px-6 lg:px-6 py-4 whitespace-nowrap text-right font-medium" style="font-size: 13px">
                                        <a href="index.php?view=edit&id=<?php echo $row['id']; ?>" class="text-indigo-600 hover:text-indigo-900 w-full transition-all">
                                            <i class="far fa-edit text-gray-400 cursor-pointer hover:text-blue-300 transition-all" style="font-size: 13px"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                     </div>
                </div>
            </div>

         