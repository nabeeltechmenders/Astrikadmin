<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Astrik Break | Team Breaks</title>


	<?php include 'includes/style.php'; ?>
Performance
</head>

<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

<?php include 'includes/header.php'; ?>
<?php  include 'includes/sidebar.php'; ?>


   <!-- Page Wrapper -->
   <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Team Breaks</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="/index"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <!-- <li class="breadcrumb-item">
                                Employee
                            </li> -->
                            <li class="breadcrumb-item active" aria-current="page">Team Breaks</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <!-- <div class="me-2 mb-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                <i class="ti ti-file-export me-1"></i>Export
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_leaves" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Leave</a>
                    </div> -->
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <!-- Leaves Info -->
                <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-black-le">
                        <div class="card-body px-0">
                            <div class="d-flex  justify-content-between">									
                                <div class="text-start px-4">
                                    <p class="mb-1">Total Team Members</p>
                                    <h4>05</h4>                                        
                                </div>         
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-2">
                                        <span class="avatar avatar-md d-flex">
                                            <i class="ti ti-calendar-event fs-32"></i>
                                        </span>
                                    </div>
                                </div>                          
                            </div>
                            <!-- <span class="badge bg-secondary-transparent">Remaining Leaves : 07</span>                                 -->
                        </div>
                    </div>
                </div>									
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-blue-le">
                        <div class="card-body px-0">
                            <div class="d-flex justify-content-between">									
                                <div class="text-start px-4">
                                    <p class="mb-1">Currently Active Users</p>
                                    <h4>11</h4>                                        
                                </div>         
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-2">
                                        <span class="avatar avatar-md d-flex">
                                            <i class="ti ti-vaccine fs-32"></i>
                                        </span>
                                    </div>
                                </div>                          
                            </div>
                            <!-- <span class="badge bg-info-transparent">Remaining Leaves : 01</span>                                 -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-purple-le">
                        <div class="card-body px-0">
                            <div class="d-flex  justify-content-between">									
                                <div class="text-start px-4">
                                    <p class="mb-1">Users on Break</p>
                                    <h4>02</h4>                                        
                                </div>         
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-2">
                                        <span class="avatar avatar-md d-flex">
                                            <i class="ti ti-hexagon-letter-c fs-32"></i>
                                        </span>
                                    </div>
                                </div>                          
                            </div>
                            <!-- <span class="badge bg-transparent-purple">Remaining Leaves : 10</span>                                 -->
                        </div>
                    </div>
                </div>								
                <div class="col-xl-3 col-md-6 d-none">
                    <div class="card bg-pink-le">
                        <div class="card-body px-0">
                            <div class="d-flex justify-content-between">									
                                <div class="text-start px-4">
                                    <p class="mb-1">Other Leaves</p>
                                    <h4>07</h4>                                        
                                </div>         
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-2">
                                        <span class="avatar avatar-md d-flex">
                                            <i class="ti ti-hexagonal-prism-plus fs-32"></i>
                                        </span>
                                    </div>
                                </div>                          
                            </div>
                            <span class="badge bg-pink-transparent">Remaining Leaves : 05</span>                                
                        </div>
                    </div>
                </div>								
                </div>
                <!-- /Leaves Info -->

            <!-- Leaves list -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">						
                    <div class="d-flex">
                        <h5 class="me-2">Team Break List</h5>
                        <!-- <span class="badge bg-primary-transparent me-2">Total Leaves : 48</span>
                        <span class="badge bg-secondary-transparent">Total Remaining Leaves : 23</span> -->
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <!-- <div class="me-3">
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-chevron-down"></i>
                                </span>
                            </div>
                        </div> -->
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Break Type
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Meeting</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Team Discussion </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Lunch</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Dinner</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Smoking</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Pray</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Approved By
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Doglas Martini</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Warren Morales</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Doglas Martini</a>
                                </li>
                            </ul>
                        </div> -->
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Select Status
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center text-success">Active</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center text-danger">On Break</a>
                                </li>
                                <!-- <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center text-warning">Pray</a>
                                </li> -->
                            </ul>
                        </div>
                        <div class="me-3">
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-chevron-down"></i>
                                </span>
                            </div>
                        </div>
                        <!-- <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Sort By : Last 7 Days
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive table-responsive-lg">
                        <table class="table ">
                            <thead class="thead-light">
                                <tr>
                                   
                                    <th>Employmee Name</th>
                                    <th>Designation</th>
                                    <th>Break Type</th>
                                    <!-- <th>Applied Date</th> -->
                                    <th>Break Start Time</th>
                                    <th>Break End Time</th>
                                    <th><button data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Total Breaks Taken" class="border-0 btn fw-600 text-left px-0">TBT</button> </th>
                                    <th>Break Duration</th>
                                    <th>Status</th>
                                    <th>Manual Break</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   <td>
                                   <div class="d-flex align-items-center">
                                    <a href="assets/img/users/user-32.webp" data-fancybox="gallery" data-caption="" class="avatar avatar-md">
                                        <img src="assets/img/users/user-32.webp" class="img-fluid rounded-circle" alt="img">
                                    </a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Anthony Lewis</a></p>
                                            <span class="fs-12">Finance</span>
                                        </div>
                                    </div>
                                   <!-- <p class="fs-14 fw-medium  mb-0">Nabeel Ahmed</p> -->
                                   </td>
                                   <td>
                                   <p class="fs-14 mb-0">Sr. Developer</p>
                                   </td>
                                   <td>
                                   <p class="fs-14  mb-0">Lunch</p>
                                   </td>
                                  
                                    <td>
                                        03:45 PM 
                                    </td>
                                    <td>
                                        04:45 PM 
                                    </td>
                                    <td class="">
                                        2
                                    </td>
                                    <td>
                                        1 Hrs 35 Mins 
                                    </td>
                                    <td>
                                            <p class="fs-14 fw-medium text-success mb-0">Active</p>
                                    </td>
                                    
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>		
                                <tr>
                                   <td>
                                   <div class="d-flex align-items-center">
                                    <a href="assets/img/users/user-09.webp" data-fancybox="gallery" data-caption="" class="avatar avatar-md">
                                        <img src="assets/img/users/user-09.webp" class="img-fluid rounded-circle" alt="img">
                                    </a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Brian Villalobos</a></p>
                                            <span class="fs-12">Developer</span>
                                        </div>
                                    </div>
                                   <!-- <p class="fs-14 fw-medium  mb-0">Samit Hussain</p> -->
                                   </td>
                                   <td>
                                   <p class="fs-14 mb-0">Jr. Developer</p>
                                   </td>
                                   <td>
                                   <p class="fs-14  mb-0">Smoking </p>
                                   </td>
                                 
                                    <td>
                                        03:45 PM 
                                    </td>
                                    <td>
                                       ---
                                    </td>
                                    <td class="">
                                        3
                                    </td>
                                    <td>
                                        2 Hrs 35 Mins 
                                    </td>
                                    <td>
                                            <p class="fs-14 fw-medium text-danger mb-0">On Break</p>
                                    </td>
                                    
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>									
                          			
                                <tr>
                                   <td>
                                   <div class="d-flex align-items-center">
                                    <a href="assets/img/users/user-01.webp" data-fancybox="gallery" data-caption="" class="avatar avatar-md">
                                        <img src="assets/img/users/user-01.webp" class="img-fluid rounded-circle" alt="img">
                                    </a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Harvey Smith</a></p>
                                            <span class="fs-12">Developer</span>
                                        </div>
                                    </div>
                                   <!-- <p class="fs-14 fw-medium  mb-0">Khizran Hussain</p> -->
                                   </td>
                                   <td>
                                   <p class="fs-14 mb-0">Jr. Designer</p>
                                   </td>
                                   <td>
                                   <p class="fs-14  mb-0">Pray</p>
                                   </td>
                                 
                                    <td>
                                        03:45 PM 
                                    </td>
                                    <td>
                                    ---
                                    </td>
                                    <td class="">
                                        4
                                    </td>
                                    <td>
                                        1 Hrs 20 Mins 
                                    </td>
                                    <td>
                                            <p class="fs-14 fw-medium text-danger mb-0">On Break</p>
                                    </td>
                                    
                                    <td>
                                        <div class="action-icon  d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                   <td>
                                   <div class="d-flex align-items-center">
                                    <a href="assets/img/users/user-35.webp" data-fancybox="gallery" data-caption="" class="avatar avatar-md">
                                        <img src="assets/img/users/user-35.webp" class="img-fluid rounded-circle" alt="img">
                                    </a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Elliot Murray</a></p>
                                            <span class="fs-12">Finance</span>
                                        </div>
                                    </div>
                                   <!-- <p class="fs-14 fw-medium  mb-0">Talha Khalil</p> -->
                                   </td>
                                   <td>
                                   <p class="fs-14 mb-0">Lead</p>
                                   </td>
                                   <td>
                                   <p class="fs-14  mb-0">Smoking</p>
                                   </td>
                                   
                                    <td>
                                        02:45 PM 
                                    </td>
                                    <td>
                                    ---
                                    </td>
                                    <td class="">
                                        6
                                    </td>
                                    <td>
                                        1 Hrs 20 Mins 
                                    </td>
                                    <td>
                                            <p class="fs-14 fw-medium text-danger mb-0">On Break</p>
                                    </td>
                                    
                                    <td>
                                        <div class="action-icon  d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                   <td>
                                   <div class="d-flex align-items-center">
                                    <a href="assets/img/users/user-36.webp" data-fancybox="gallery" data-caption="" class="avatar avatar-md">
                                        <img src="assets/img/users/user-36.webp" class="img-fluid rounded-circle" alt="img">
                                    </a>
                                        <div class="ms-2">
                                            <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Murray Smith</a></p>
                                            <span class="fs-12">Finance</span>
                                        </div>
                                    </div>
                                   <!-- <p class="fs-14 fw-medium  mb-0">Shahzaib Ghori</p> -->
                                   </td>
                                   <td>
                                   <p class="fs-14 mb-0">Sr Designer</p>
                                   </td>
                                   <td>
                                   <p class="fs-14  mb-0">Dinner</p>
                                   </td>
                                 
                                    <td>
                                        02:45 PM 
                                    </td>
                                    <td>
                                    ---
                                    </td>
                                    <td class="">
                                        7
                                    </td>
                                    <td>
                                        1 Hrs 35 Mins 
                                    </td>
                                    <td>
                                            <p class="fs-14 fw-medium text-danger mb-0">On Break</p>
                                    </td>
                                    
                                    <td>
                                        <div class="action-icon  d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Leaves list -->

        </div>
        <?php include 'includes/footer.php'; ?>
    </div>
    <!-- /Page Wrapper -->

  

    <!-- Edit Leaves -->
    <div class="modal fade" id="edit_leaves">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Mark Manual Break</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/leaves">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="mb-3">
                                    <label class="form-label">Break Type</label>
                                    <select class="select">
                                        <option selected>Lunch</option>
                                        <option>Smoking</option>
                                        <option>Pray</option>
                                        <option>Meeting</option>
                                        <option>Team Discussion</option>
                                        <option>Dinner</option>
                                      
                                    </select>
                                </div>	
                            </div>
                            <div class="col-md-12 ">
                                <div class="mb-3 count-tm-css">
                                    <label class="form-label">Start Time</label>
                                    <input type="time" class="form-control">
                                    <!-- <div id="MyClockDisplay" class="clock" onload="showTime()"></div> -->
                                </div>	
                            </div>
                            <div class="col-md-12 ">
                                <div class="mb-3 count-tm-css">
                                    <label class="form-label">End Time</label>
                                    <input type="time" class="form-control">
                                    <!-- <div id="MyClockDisplay" class="clock" onload="showTime()"></div> -->
                                </div>	
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Mark Break</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Leaves -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                        <i class="ti ti-trash-x fs-36"></i>
                    </span>
                    <h4 class="mb-1">Confirm Delete</h4>
                    <p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="/leaves" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
</div>
<!-- /Main Wrapper -->

	<?php include 'includes/script.php'; ?>

    <script>
    function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    if(h == 0){
        h = 12;
    }
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    setTimeout(showTime, 1000);
    }
    showTime();
    </script>

</body>

</html>