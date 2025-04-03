<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Astrik Manager | My Team</title>


	<?php include 'includes/style.php'; ?>

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
                    <h2 class="mb-1">My Team</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                HOME
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">My Team</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <!-- <div class="me-2 mb-2">
                        <div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
                            <a href="your-team-list.php" class="btn btn-icon btn-sm me-1 active bg-primary text-white"><i class="ti ti-list-tree"></i></a>
                            <a href="your-team.php" class="btn btn-icon btn-sm "><i class="ti ti-layout-grid"></i></a>
                        </div>
                        <button type="button" class="btn btn-primary d-flex align-items-center py-1 me-2"><i class="ti ti-circle-plus me-2"></i> Add Employee</button>
                    </div> -->
                   
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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_contact" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Contact</a>
                    </div> -->
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <!-- Contact Grid -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>My Team</h5>
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
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Designation
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Manager</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Team Lead</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Executive</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Select Department
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Brand</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Software</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Sales</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Sort By : Last 7 Days
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                </li>
                            </ul>
                        </div> -->
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Reporting Authoriy
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Anum Altaf Hussain</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Amash Hussain</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Syed Fawad Hussain</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive table-responsive-lg table-responsive-md">
                        <table class="table ">
                            <thead class="thead-light">
                                <tr>
                                    
                                    <th>Emp ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Designation</th>
                                    <th>Joining Date</th>
                                    <th>Department</th>
                                    <th>Reporting Authoriy</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <td><a href="">Emp-001</a></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="assets/img/users/user-32.webp" data-fancybox="gallery" data-caption="" class="avatar avatar-md">
                                                <img src="assets/img/users/user-32.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <p class="text-dark mb-0"><a href="" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Saim Khan</a></p>
                                                <span class="fs-12">Brand </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection">saim@thetechmenders.com</a></td>
                                    <td>(123) 4567 890</td>
                                    <td>Team Lead</td>
                                    <td>12 Sep 2024</td>
                                    <td>
                                   Sales
                                    </td>
                                    <td>
                                    Syed Fawad Hussain
                                    </td>
                                    <td>
                                    Probation
                                    </td>
                                    <td>
                                    <div class="action-icon d-inline-flex">
                                            <a href="profile.php" ><i class="ti ti-eye"></i></a>    
                                            <!-- <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="ti ti-edit"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal" class="me-2"><i class="ti ti-trash"></i></a> -->
                                            
                                        </div>
                                       
                                    </td>
                                   
                                </tr>
                                <tr>	
                                    
                                    <td><a href="">Emp-002</a></td>						
                                    <td>
                                        <div class="d-flex align-items-center">
                                        <a href="assets/img/users/user-09.webp" data-fancybox="gallery" data-caption="" class="avatar avatar-md">
                                                <img src="assets/img/users/user-09.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <p class="text-dark mb-0"><a href="" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Samit Hussain</a></p>
                                                <span class="fs-12">Developer</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection">samit@thetechmedenders.com</a></td>
                                    <td>(179) 7382 829</td>
                                    <td>Executive</td>
                                   
                                    <td>24 Oct 2024</td>
                                    <td>
                                    Brand
                                    </td>
                                    <td>
                                    Anum Altaf
                                    </td>
                                    <td>
                                    Permanent
                                    </td>
                                    <td>
                                 <div class="action-icon d-inline-flex">
                                            <a href="profile.php" ><i class="ti ti-eye"></i></a>    
                                            <!-- <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="ti ti-edit"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal" class="me-2"><i class="ti ti-trash"></i></a> -->
                                            
                                        </div>
                                       
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td><a href="">Emp-003</a></td>									
                                    <td>
                                        <div class="d-flex align-items-center">
                                        <a href="assets/img/users/user-01.webp" data-fancybox="gallery" data-caption="" class="avatar avatar-md">
                                                <img src="assets/img/users/user-01.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <p class="text-dark mb-0"><il href="" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Talha Khalil</il></p>
                                                <span class="fs-12">Sr Designer</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection">talha@thetechmenders.com</a></td>                                     
                                    <td>(184) 2719 738</td>
                                    <td>Manager</td>
                                    <td>18 Feb 2024</td>
                                    <td>
                                   Software
                                    </td>
                                    <td>
                                    Anum Altaf
                                    </td>
                                    <td>
                                    Resigned
                                    </td>
                                    <td>
                                    <div class="action-icon d-inline-flex">
                                            <a href="profile.php" ><i class="ti ti-eye"></i></a>    
                                            <!-- <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="ti ti-edit"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal" class="me-2"><i class="ti ti-trash"></i></a> -->
                                            
                                        </div>
                                       
                                    </td>
                                   
                                </tr>
                                <tr>
                                    
                                    <td><a href="">Emp-004</a></td>									
                                    <td>
                                        <div class="d-flex align-items-center">
                                        <a href="assets/img/users/user-33.webp" data-fancybox="gallery" data-caption="" class="avatar avatar-md">
                                                <img src="assets/img/users/user-33.webp" class="img-fluid rounded-circle" alt="img" ></a>
                                            <div class="ms-2">
                                                <p class="text-dark mb-0"><a href="" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Talha Khalil</a></p>
                                                <span class="fs-12">Designer</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection">talha@thetechmenders.com</a></td>
                                    <td>(193) 7839 748</td>
                                    <td>Team Lead</td>
                                    <td>17 Oct 2024</td>
                                    <td>
                                   Sales
                                    </td>
                                    <td>
                                    Anum Altaf
                                    </td>
                                    <td>
                                    Notice
                                    </td>
                                    <td>
                                    <div class="action-icon d-inline-flex">
                                            <a href="profile.php" ><i class="ti ti-eye"></i></a>    
                                            <!-- <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="ti ti-edit"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal" class="me-2"><i class="ti ti-trash"></i></a> -->
                                            
                                        </div>
                                       
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td><a href="">Emp-005</a></td>							
                                    <td>
                                        <div class="d-flex align-items-center">
                                        <a href="assets/img/users/user-33.webp" data-fancybox="gallery" data-caption="" class="avatar avatar-md">
                                                <img src="assets/img/users/user-33.webp" class="img-fluid rounded-circle" alt="img"></a>
                                            <div class="ms-2">
                                                <p class="text-dark mb-0"><a href="" data-bs-toggle="modal"
                                                    data-bs-target="#view_details">Ahsan</a></p>
                                                <span class="fs-12">Junior Designer</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection">ahsan@thetechmenders.com</a></td>
                                    <td>(183) 9302 890</td>
                                    <td>Manager</td>
                                    <td>20 Jul 2024</td>
                                    <td>
                                   Software
                                    </td>
                                    <td>
                                    Anum Altaf
                                    </td>
                                    <td>
                                    Terminated
                                    </td>
                                    <td>
                                    <div class="action-icon d-inline-flex">
                                            <a href="profile.php" ><i class="ti ti-eye"></i></a>    
                                            <!-- <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="ti ti-edit"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal" class="me-2"><i class="ti ti-trash"></i></a> -->
                                            
                                        </div>
                                       
                                    </td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





            <div class="table-responsive table-responsive-lg">
            <table class="table mb-5 mt-5">
                <thead></thead>
                <tbody>
                    <tr>
                        <td class="text-center">
                            <a href="assets/img/users/user-32.webp" data-fancybox="gallery" class="avatar avatar-xxl me-2">
                           <img src="assets/img/users/user-32.webp" class="rounded-circle" alt="user">
                        </a>
                        </td>
                        <td>
                        <h5 class="fw-medium mb-1">Samit Hussain</h5>
						<p class="fs-14 mb-0">EMP-001</p>
						
                        </td>
                        <td>
                        <h5 class="fw-medium mb-1">Brand </h5>
										<p class="fs-14 mb-0">Manager</p>
									
                        </td>
                        <td>
                        <h5 class="fw-medium mb-1">Anum Altaf Hussain</h5>
                        <p class="fs-12 mb-0">Probation - 10-06-2024 </p>
                    
									
                        </td>
                        <td>
										<p class="fs-12 mb-0">saim@thetechmenders.com</p>
										<p class="fs-12 mb-0">03342305467</p>
									
                        </td>
                      
                        <td>
                            <a href="profile.php" class="btn btn-dark">View Profile</a>
                        </td>

                    </tr>
                </tbody>
            </table>
            </div>

        </div>
        <?php include 'includes/footer.php'; ?>
     

    </div>
    <!-- /Page Wrapper -->




</div>
<!-- /Main Wrapper -->


	<?php include 'includes/script.php'; ?>

</body>

</html>