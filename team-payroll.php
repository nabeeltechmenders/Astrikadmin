<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Astrik Hrm | Team Payroll</title>


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
                    <h2 class="mb-1">Team Payroll</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <!-- <li class="breadcrumb-item">
                                HR
                            </li> -->
                            <li class="breadcrumb-item active" aria-current="page">Team Payroll</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

                    <!-- <div class="me-2 mb-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-file-export me-1"></i>Export
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                            class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                            class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->

                    <!-- <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#new-employee-salary"
                            class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add
                            Salary</a>
                    </div> -->
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->



            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Team Salary List</h5>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <!-- <div class="me-3">
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control date-range bookingrange"
                                    placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-chevron-down"></i>
                                </span>
                            </div>
                        </div> -->
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Designation
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Finance</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Developer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Executive</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Manager</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
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
                                    
                                    <th>Emp ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Designation</th>
                                    <th>Joining Date</th>
                                    <th>Current Salary</th>
                                    <th>Payslip</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  
                                    <td>Emp-001</td>
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                        <a href="assets/img/users/user-32.webp" data-fancybox="gallery" class="avatar avatar-md">
                                                <img src="assets/img/users/user-32.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="#">Anthony Lewis</a></h6>
                                               
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e3f302a363130271e3b263f332e323b703d3133">[email&#160;protected]</a></td>
                                    <td>(123) 4567 890</td>
                                    <td>
                                      Lead
                                    </td>

                                    <td>12 Sep 2024 </td>
                                    <td>$40000</td>
                                   <td><a href="pay-slip.php" class="btn btn-outline-primary py-1">View Payslip</a></td>
                                 
                                </tr>
                                <tr>
                                  
                                    <td>Emp-002</td>
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                        <a href="assets/img/users/user-09.webp" data-fancybox="gallery" class="avatar avatar-md">
                                                <img src="assets/img/users/user-09.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="#">Brian Villalobos</a></h6>
                                              
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7c1e0e151d123c19041d110c1019521f1311">[email&#160;protected]</a></td>
                                    <td>(179) 7382 829</td>
                                    <td>
                                       Manager
                                    </td>

                                    <td>24 Oct 2024</td>
                                    <td>$35000</td>
                                   <td><a href="pay-slip.php" class="btn btn-outline-primary py-1">View Payslip</a></td>
                                 
                                </tr>
                                <tr>
                                  
                                    <td>Emp-003</td>
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                        <a href="assets/img/users/user-01.webp" data-fancybox="gallery" class="avatar avatar-md">
                                                <img src="assets/img/users/user-01.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="#">Harvey Smith</a></h6>
                                                <!-- <span class="d-block mt-1">Developer</span> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef878e9d998a96af8a978e829f838ac18c8082">[email&#160;protected]</a></td>
                                    <td>(184) 2719 738</td>
                                    <td>
                                       Manager
                                    </td>

                                    <td>18 Feb 2024</td>
                                    <td>$20000</td>
                                   <td><a href="pay-slip.php" class="btn btn-outline-primary py-1">View Payslip</a></td>
                                 
                                </tr>
                                <tr>
                                  
                                    <td>Emp-004</td>
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                        <a href="assets/img/users/user-33.webp" data-fancybox="gallery" class="avatar avatar-md">
                                                <img src="assets/img/users/user-33.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                               
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d9a9bcabb8b599bca1b8b4a9b5bcf7bab6b4">[email&#160;protected]</a></td>
                                    <td>(193) 7839 748</td>
                                    <td>
                                       Executive
                                    </td>

                                    <td>17 Sep 2024</td>
                                    <td>$$22000</td>
                                   <td><a href="pay-slip.php" class="btn btn-outline-primary py-1">View Payslip</a></td>
                                 
                                </tr>
                                <tr>
                                  
                                    <td>Emp-005</td>
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                        <a href="assets/img/users/user-34.webp" data-fancybox="gallery" class="avatar avatar-md">
                                                <img src="assets/img/users/user-34.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="#">Doglas Martini</a></h6>
                                              
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7a171b080e14130d083a1f021b170a161f54191517">[email&#160;protected]</a></td>
                                    <td>(183) 9302 890</td>
                                   <td>
                                       Manager
                                    </td>
                                    <td>20 Jul 2024</td>
                                    <td>$25000</td>
                                   <td><a href="pay-slip.php" class="btn btn-outline-primary py-1">View Payslip</a></td>
                                 
                                </tr>
                                <tr>
                                  
                                    <td>Emp-006</td>
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                        <a href="assets/img/users/user-02.webp" data-fancybox="gallery" class="avatar avatar-md">
                                                <img src="assets/img/users/user-02.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="#">Linda Ray</a></h6>
                                               
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="493b28307d7c7f092c31282439252c672a2624">[email&#160;protected]</a></td>
                                    <td>(120) 3728 039</td>
                                    <td>
                                      Lead
                                    </td>

                                    <td>10 Apr 2024</td>
                                    <td>$30000</td>
                                   <td><a href="pay-slip.php" class="btn btn-outline-primary py-1">View Payslip</a></td>
                                 
                                </tr>
                                <tr>
                                  
                                    <td>Emp-007</td>
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                        <a href="assets/img/users/user-35.webp" data-fancybox="gallery" class="avatar avatar-md">
                                                <img src="assets/img/users/user-35.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="#">Elliot Murray</a></h6>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="18756d6a6a7961587d60797568747d367b7775">[email&#160;protected]</a></td>
                                    <td>(102) 8480 832</td>
                                    <td>
                                      Executive
                                    </td>

                                    <td>29 Aug 2024</td>
                                    <td>$35000</td>
                                   <td><a href="pay-slip.php" class="btn btn-outline-primary py-1">View Payslip</a></td>
                                 
                                </tr>
                                <tr>
                                  
                                    <td>Emp-008</td>
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                        <a href="assets/img/users/user-36.webp" data-fancybox="gallery" class="avatar avatar-md">
                                                <img src="assets/img/users/user-36.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="#">Rebecca Smtih</a></h6>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dba8b6afb2b39bbea3bab6abb7bef5b8b4b6">[email&#160;protected]</a></td>
                                    <td>(162) 8920 713</td>
                                    <td>
                                      Manaer
                                    </td>

                                    <td>22 Feb 2024</td>
                                    <td>$45000</td>
                                   <td><a href="pay-slip.php" class="btn btn-outline-primary py-1">View Payslip</a></td>
                                 
                                </tr>
                                <tr>
                                  
                                    <td>Emp-009</td>
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                        <a href="assets/img/users/user-37.webp" data-fancybox="gallery" class="avatar avatar-md">
                                                <img src="assets/img/users/user-37.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="#">Connie Waters</a></h6>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="beddd1d0d0d7dbfedbc6dfd3ced2db90ddd1d3">[email&#160;protected]</a></td>
                                    <td>(189) 0920 723</td>
                                    <td>
                                     Executive
                                    </td>

                                    <td>03 Nov 2024</td>
                                    <td>$50000</td>
                                   <td><a href="pay-slip.php" class="btn btn-outline-primary py-1">View Payslip</a></td>
                                 
                                </tr>
                                <tr>
                                  
                                    <td>Emp-010</td>
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                              <a href="assets/img/users/user-38.webp" data-fancybox="gallery" class="avatar avatar-md">
                                                <img src="assets/img/users/user-38.webp" class="img-fluid rounded-circle" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="#">Lori Broaddus</a></h6>
                                              
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="26445449474242535566435e474b564a430845494b">[email&#160;protected]</a></td>
                                    <td>(168) 8392 823</td>
                                    <td>
                                     Executive
                                    </td>
                                    <td>17 Dec 2024</td>
                                    <td>$25000</td>
                                   <td><a href="pay-slip.php" class="btn btn-outline-primary py-1">View Payslip</a></td>
                                 
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <?php include 'includes/footer.php'; ?>

    </div>
    <!-- /Page Wrapper -->
    <!-- Add Termination -->
    <div class="modal fade" id="new-employee-salary">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Employee Salary</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="">
                    <div class="modal-body pb-0">
                        <div class="row">                               
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Employee Name </label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Anthony Lewis</option>
                                        <option>Brian Villalobos</option>
                                        <option>Doglas Martini</option>
                                    </select>
                                </div>									
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Net Salary </label>
                                <input type="text" class="form-control">								
                            </div>
                        </div>
                        <div class="row earning-row">
                            <div class="d-flex justify-content-between mb-3">
                                <label class="form-label">Earnings</label>
                                <a href="#" class="add-earnings text-primary mb-2"><i class="ti ti-plus me-2"></i>Add New</a>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Basic</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">DA(40%)</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">HRA(15%)</label>
                                    <input type="text" class="form-control">                               
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Conveyance</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Allowance </label>
                                    <input type="text" class="form-control">                                       
                                </div>									
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Medical Allowance</label>
                                    <input type="text" class="form-control">                                       
                                </div>									
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Others</label>
                                    <input type="text" class="form-control">                                       
                                </div>						
                            </div>
                        </div>
                            <div class="row deduction-row">
                                <div class="d-flex justify-content-between mb-3">
                                    <label class="form-label">Deductions</label>
                                    <a href="#" class="add-deduction text-primary mb-2"><i class="ti ti-plus me-2"></i>Add New</a>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">TDS</label>
                                        <input type="text" class="form-control">                                       
                                    </div>									
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">ESI</label>
                                        <input type="text" class="form-control">
                                    
                                    </div>									
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">PF</label>
                                        <input type="text" class="form-control">                                       
                                    </div>									
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Leave</label>
                                        <input type="text" class="form-control">                                       
                                    </div>									
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Prof.Tax</label>
                                        <input type="text" class="form-control">                                       
                                    </div>									
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Labour Welfare</label>
                                        <input type="text" class="form-control">                                       
                                    </div>									
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Others</label>
                                        <input type="text" class="form-control">
                                    
                                    </div>									
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Employee Salary</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Termination -->

    <!-- Edit Termination -->
    <div class="modal fade" id="edit-employee-salary">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Employee Salary</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="">
                    <div class="modal-body pb-0">
                        <div class="row">                               
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Employee Name </label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Anthony Lewis</option>
                                        <option>Brian Villalobos</option>
                                        <option>Doglas Martini</option>
                                    </select>
                                </div>									
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Net Salary </label>
                                <input type="text" class="form-control">								
                            </div>
                        </div>
                        <div class="row earning-row">
                            <div class="d-flex justify-content-between mb-3">
                                <label class="form-label">Earnings</label>
                                <a href="#" class="add-earnings text-primary mb-2"><i class="ti ti-plus me-2"></i>Add New</a>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Basic</label>
                                    <input type="text" class="form-control" value="$40000">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">DA(40%)</label>
                                    <input type="text" class="form-control" value="$16000">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">HRA(15%)</label>
                                    <input type="text" class="form-control" value="$2666">                               
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Conveyance</label>
                                    <input type="text" class="form-control" value="$2000">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Allowance </label>
                                    <input type="text" class="form-control" value="$1000">                                       
                                </div>									
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Medical Allowance</label>
                                    <input type="text" class="form-control" value="$2000">                                       
                                </div>									
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Others</label>
                                    <input type="text" class="form-control">                                       
                                </div>
                                                                
                            </div>
                        </div>
                            <div class="row deduction-row">
                                <div class="d-flex justify-content-between mb-3">
                                    <label class="form-label">Deductions</label>
                                    <a href="#" class="add-deduction text-primary mb-2"><i class="ti ti-plus me-2"></i>Add New</a>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">TDS</label>
                                        <input type="text" class="form-control" value="$4000">                                       
                                    </div>									
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">ESI</label>
                                        <input type="text" class="form-control" value="$2000">
                                    
                                    </div>									
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">PF</label>
                                        <input type="text" class="form-control" value="$3000">                                       
                                    </div>									
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Leave</label>
                                        <input type="text" class="form-control" value="$1000">                                       
                                    </div>									
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Prof.Tax</label>
                                        <input type="text" class="form-control" value="$800">                                       
                                    </div>									
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Labour Welfare</label>
                                        <input type="text" class="form-control" value="$500">                                       
                                    </div>									
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Others</label>
                                        <input type="text" class="form-control" value="$100">
                                    
                                    </div>									
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Employee Salary</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Termination -->

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
                        <a href="" class="btn btn-danger">Yes, Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->


</div>
<!-- /Main Wrapper -->


	<?php include 'includes/script.php'; ?>

</body>

</html>