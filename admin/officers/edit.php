<?php  

    $id = $_GET['id'];
    $getOfficers = mysqli_query($db, "SELECT * FROM officers WHERE id=$id");

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
<div class="block md:flex lg:flex gap-5 py-10 container">
    <div class="bg-white md:rounded-lg lg:rounded-lg h-96 w-full p-6 shadow-sm">
    <!-- start -->  
       <div class="flex justify-between items-center pb-2">
            <div>
               <h1 class="font-medium text-gray-700  " styke="top:40px"><span class="text-yellow-400">CSC</span> - Officers 2021</h1>
                <small class="text-gray-500 text-xs italic">Note: The list of  officers is in correct order!</small>
            </div>
            <div class="flex gap-1 items-center pb-3 font-normal">
                <small class="text-yellow-300 font-semibold">Clock: </small>
                <small class="text-gray-800" id='ct6'></small>
            </div>
        </div>
        <div class="overflow-y-auto example" style="height: 300px">
        <table class="min-w-full divide-y divide-gray-200 border-collapse w-full">
            <thead class="sticky top-0">
                 <tr>
                    <th scope="col" class="px-3 md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       Officer
                    </th>
                    <th scope="col" class="hidden md:table-cell lg:table-cell  px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Position
                    </th>
                    <th scope="col" class="hidden md:table-cell lg:table-cell px-3 md:px-6 lg:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       Course/Year level
                    </th>
                    <th scope="col" class="hidden md:table-cell lg:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       
                    </th>
                     <th scope="col" class="md:hidden lg:hidden px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       
                    </th>
                </tr>
            </thead>

            <?php while ($row = mysqli_fetch_array($officers)) { ?>
            <tbody class=" divide-y divide-gray-200 overflow-auto text-gray-500">
                <tr>
                    <td class="px-3 md:px-6 lg:px-6 py-2 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class=" flex items-center gap-2">
                                <div class="flex-shrink-0 h-10 w-10">
                                 <?php if ($row['picture'] == NULL): ?>
                                    <img class="h-10 w-10 rounded-full" src="../images/user1.png" alt="">
                                <?php else: ?>
                                    <img class="h-10 w-10 rounded-full" src="<?php echo './upload/' . $row['picture'] ?>" alt="">
                                <?php endif; ?>
                                </div>
                                <small><?php echo $row['name'] ?></small>
                            </div>
                        </div>
                    </td>
                    <td class="hidden md:table-cell lg:table-cell  px-6 py-2 whitespace-nowrap">
                        <?php
                            $position = $row['position'];
                            if ($position == 'President') {
                                echo '
                                    <span class="uppercase px-4 inline-flex leading-5 font-extrabold rounded-full bg-blue-100 text-blue-400"  style="font-size: 10px">
                                        '.$position.'
                                    </span>
                                ';
                            }else if($position == 'Representative'){
                                 echo '
                                    <span class="uppercase px-4 inline-flex leading-5 font-extrabold rounded-full bg-yellow-100 text-yellow-400"  style="font-size: 10px">
                                        '.$position.'
                                    </span>
                                ';
                            }else{
                                echo '
                                    <span class="uppercase px-4 inline-flex leading-5 font-extrabold rounded-full bg-pink-100 text-pink-400"  style="font-size: 10px">
                                        '.$position.'
                                    </span>
                                ';
                            }

                        ?>
                      
                    </td>
                    <td class="hidden md:table-cell lg:table-cell  px-3 md:px-6 lg:px-6 py-2 whitespace-nowrap">
                        <small><?php echo $row['course'] ?> <?php echo $row['yearLevel'] ?></small>
                    </td>
                    <td class="px-4 py-2 whitespace-nowrap">
                       <a href="../officers?view=edit&id=<?php echo $row['id']?>" >
                            <i class="far fa-edit text-gray-400 cursor-pointer hover:text-blue-300 transition-all" style="font-size: 13px"></i>
                        </a> 
                    </td>
                </tr>
          
            </tbody>
            <?php } ?>
        </table>
        </div>
    <!-- end -->
     </div>
        <div class="bg-white rounded-lg p-6 shadow-sm w-full lg:w-5/12">
            <img src="../images/officers.jpg" alt="">
            <div class="flex justify-center text-center text-gray-600 font-bold italic">
                <div>
                    <p class="uppercase">"Alone we can do little; <br> together we can do so much!"</p>
                    <small class="text-gray-500">Hellen Keller</small>
                    <div class="flex justify-center">
                      <div class="h-1 w-6 bg-blue-300"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<?php while ($row = mysqli_fetch_array($getOfficers)) { ?>
                 <div style="max-width: 400px" class="flex px-4 mx-auto overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
                 <div class="bg-white px-3 py-5 md:p-5 lg:px-5 mx-5 my-3 overflow-auto example custom-xl" style="max-width: 500px;">
                        <div class="flex justify-between items-center pb-8">
                            <h1 class="font-semibold text-gray-600 text-xl">Update officer</h1>
                            <a href="../officers">
                                 <i class="fas fa-close text-gray-300 cursor-pointer"></i>
                            </a>
                        </div>
                         <div class="overflow-y-auto example" style="height: 470px">
                        <form action="../officers/process.php" method="post" class="space-y-2 text-sm md:text-base lg:text-base" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="flex justify-center">
                                <div class="space-y-4 relative">
                                    <div class="rounded-full overflow-hidden" style="width: 140px; height: 140px;">
                                            <!-- <img 
                                            style="object-fit: cover; width: 100%; height: 100%"
                                                src="../images/user1.png"
                                                name="picture"
                                                onClick="triggerClick()" 
                                                id="profileDisplay"
                                            > -->
                                             <?php if ($row['picture'] == NULL): ?>
                                                <img class="h-10 w-10 rounded-full"
                                                     src="../images/user1.png" alt=""  
                                                     style="object-fit: cover; width: 100%; height: 100%"
                                                     name="picture"
                                                     onClick="triggerClick()" 
                                                     id="profileDisplay"
                                                     >
                                             <?php else: ?>
                                                <img class="h-10 w-10 rounded-full" 
                                                     src="<?php echo '../officers/upload/' . $row['picture'] ?>" alt=""  
                                                     style="object-fit: cover; width: 100%; height: 100%"
                                                     name="picture"
                                                     onClick="triggerClick()" 
                                                     id="profileDisplay"
                                                     >
                                             <?php endif; ?>
                                            </div>
                                             <div class="absolute top-3 opacity-0">
                                                <input 
                                                    type="file" 
                                                    name="profileImage" 
                                                    class="py-8"
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
                                    <a href="../officers" class="px-6 py-2 bg-gray-100 rounded text-gray-500">
                                        Cancel
                                    </a>
                                    <button class="relative px-6 bg-yellow-500 hover:bg-yellow-400 py-2 text-white rounded ml-3" name="save" type="submit" onclick="this.classList.toggle('button--loading')">
                                        <span class="button-text">Submit</span>
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