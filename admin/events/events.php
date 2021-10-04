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
.datepicker {
  width: 400px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 0 50px 0 rgba(0, 0, 0, 0.2);
  margin: 50px auto;
  overflow: hidden;
}
.datepicker .datepicker-header {
  height: 250px;
  background-image: url("https://cdn.dribbble.com/users/3178178/screenshots/6346366/lifeguard_on_duty.jpg");
  background-position: center center;
  background-size: 100%;
}
.datepicker .ui-datepicker-inline {
  padding: 30px;
}
.datepicker .ui-datepicker-header {
  text-align: center;
  padding-bottom: 1em;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}
.datepicker .ui-datepicker-header .ui-datepicker-prev,
.datepicker .ui-datepicker-header .ui-datepicker-next {
  display: inline;
  float: left;
  cursor: pointer;
  font-size: 1.4em;
  padding: 0 10px;
  margin-top: -10px;
  color: #ccc;
}
.datepicker .ui-datepicker-header .ui-datepicker-next {
  float: right;
}
.datepicker .ui-datepicker-calendar {
  width: 100%;
  text-align: center;
}
.datepicker .ui-datepicker-calendar thead {
  color: #ccc;
}
.datepicker .ui-datepicker-calendar tr th,
.datepicker .ui-datepicker-calendar tr td {
  padding-bottom: 0.5em;
}
.datepicker .ui-datepicker-calendar a {
  color: #444;
  text-decoration: none;
  display: block;
  margin: 0 auto;
  width: 35px;
  height: 35px;
  line-height: 35px;
  border-radius: 50%;
  border: 1px solid transparent;
  cursor: pointer;
}
.datepicker .ui-datepicker-calendar .ui-state-highlight {
  border-color: #d24d57;
  color: #d24d57;
}

</style>
<div class="flex gap-5 py-10 container mx-auto">
    <div class="bg-white rounded-lg h-96 w-full p-6 shadow-sm ">
    <!-- start -->  
        <div class="flex justify-between items-center pb-2">
            <h1 class="font-medium text-gray-700  " styke="top:40px">BUPC <span class="text-yellow-400">Events</span></h1>
              <a href="#" class="py-1 px-3 bg-yellow-400 rounded text-white hover:bg-yellow-300" onclick="toggleModal('event')">
                    <div class="flex items-center gap-2">
                        <div>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div>
                            <span>Add event</span>
                        </div>
                    </div>
             </a>
        </div>
        <div class="overflow-y-auto example" style="height: 300px">
        <table class="min-w-full divide-y divide-gray-200 border-collapse w-full">
            <thead class="sticky top-0">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Event title
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       <span class="font-extrabold text-green-500">Start</span> date/time
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        <span class="font-extrabold text-red-400">Edit</span> date/time
                    </th>
                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                        Rules
                    </th>
                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white shadow-sm">
                       
                    </th>
          
                </tr>
            </thead>
            <tbody class=" divide-y divide-gray-200 overflow-auto">
            <?php $events = mysqli_query($db, "SELECT * FROM events ORDER BY ID DESC"); ?>
            <?php while ($row = mysqli_fetch_array($events)) { ?>
                <tr>
                    <td class="px-2 py-2 whitespace-nowrap">
                        <div class="ml-4">
                            <small><?php echo $row['eName']?></small>
                        </div>
                    </td>
                    <!-- <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex leading-5 font-semibold rounded-full bg-green-100 text-green-800" style="font-size: 10px">
                            Online
                        </span>
                    </td> -->
                    <td class="px-6 py-2 whitespace-nowrap">
                        <div class="flex flex-col">
                            <small><?php echo $row['startdate']?></small>
                            <small>- <?php echo $row['startime']?></small>
                        </div>
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap">
                        <div class="flex flex-col">
                            <small><?php echo $row['enddate']?></small>
                            <small>- <?php echo $row['endtime']?></small>
                        </div>
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap">
                        <small><?php echo $row['startime']?></small>
                    </td>
                    <td class="px-6 py-2 whitespace-nowrap space-x-2">
                        <a href="?edit=<?php echo $row['id']?>" onclick="toggleModal('view_event')" class="text-blue-400 hover:text-white hover:bg-blue-400 w-full px-3 py-1 bg-blue-50 font-semibold rounded transition-colors text-xs">View More</a>
                        <a href="?edit=<?php echo $row['id']?>" >
                            <i class="far fa-edit text-gray-400 cursor-pointer hover:text-blue-300 transition-all" style="font-size: 13px" onclick="toggleModal('edit_event')"></i>
                        </a> 
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        </div>
    </div>
  <!-- end -->
  <!-- start -->
    
    <div class="bg-white rounded-lg p-1" style="width: 510px">
        <div id="inline_cal"></div>
    </div>
          

  <!-- end -->

  </div>
    

    <script src="../calendar-16/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="../calendar-16/js/popper.min.js"></script> -->
    <!-- <script src="../calendar-16/js/bootstrap.min.js"></script> -->
    <script src="../calendar-16/js/rome.js"></script>
    <script src="../calendar-16/js/main.js"></script>
  <!-- end -->
</div>
