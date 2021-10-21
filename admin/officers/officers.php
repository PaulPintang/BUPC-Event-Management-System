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
        <div class="overflow-y-auto example" style="height: 280px">
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
