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
                                        <a href="../home?view=edit&id=<?php echo $row['id']; ?>" class="text-indigo-600 hover:text-indigo-900 w-full transition-all">
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
         
        </div>
