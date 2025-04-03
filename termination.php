<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Astrik Manager | Termination</title>


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
                    <h2 class="mb-1">Termination</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <!-- <li class="breadcrumb-item">
                                Performance
                            </li> -->
                            <li class="breadcrumb-item active" aria-current="page">Termination</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    
                    <div class="mb-2">
                        <a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#new_termination"><i class="ti ti-circle-plus me-2"></i>Add Termination</a>
                    </div>
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <!-- Termination List -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                            <h5 class="d-flex align-items-center">Termination List</h5>
                            <div class="d-flex align-items-center flex-wrap row-gap-3">
                                <!-- <div class="input-icon position-relative me-2">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                    <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy ">
                                </div> -->
                                <!-- <div class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center fs-12" data-bs-toggle="dropdown">
                                        <p class="fs-12 d-inline-flex me-1">Sort By : </p>
                                        Last 7 Days
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
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                           
                                            <th>Terminated Employee</th>
                                            <th>Department</th>
                                            <th>Termination Type</th>
                                            <th>Termination Date</th>
                                            <!-- <th>Notice Date</th> -->
                                            <th>Reason</th>
                                            
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="assets/img/users/user-32.webp" data-fancybox="gallery" class="avatar avatar-lg me-2">
                                                        <img src="assets/img/users/user-32.webp" class="rounded-circle" alt="user">
                                                    </a>
                                                    <h6 class="fw-medium"><a href="invoice-details">Anthony Lewis</a></h6>
                                                </div>
                                            </td>
                                            <td>Finance</td>
                                            <td>Retirement</td>
                                            <td>14 Mar 2024</td>
                                            <!-- <td>14 Jan 2024</td> -->
                                            <td>Employee retires</td>
                                         
                                            <td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_termination"><i class="ti ti-edit"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="assets/img/users/user-09.webp" data-fancybox="gallery" class="avatar avatar-lg me-2">
                                                        <img src="assets/img/users/user-09.webp" class="rounded-circle" alt="user">
                                                    </a>
                                                    <h6 class="fw-medium"><a href="invoice-details">Brian Villalobos</a></h6>
                                                </div>
                                            </td>
                                            <td>Application Development</td>
                                            <td>Insubordination</td>
                                            <td>21 Mar 2024</td>
                                       
                                            <td>Entrepreneurial Pursuits</td>
                                           
                                            <td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_termination"><i class="ti ti-edit"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="assets/img/users/user-01.webp" data-fancybox="gallery" class="avatar avatar-lg me-2">
                                                        <img src="assets/img/users/user-01.webp" class="rounded-circle" alt="user">
                                                    </a>
                                                    <h6 class="fw-medium"><a href="invoice-details">Harvey Smith</a></h6>
                                                </div>
                                            </td>
                                            <td>Web Development</td>
                                            <td>Layoff</td>
                                            <td>18 Apr 2024</td>
                                           <td>Workforce reduction</td>
                                           
                                            <td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_termination"><i class="ti ti-edit"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="assets/img/users/user-33.webp" data-fancybox="gallery" class="avatar avatar-lg me-2">
                                                        <img src="assets/img/users/user-33.webp" class="rounded-circle" alt="user">
                                                    </a>
                                                    <h6 class="fw-medium"><a href="invoice-details">Stephan Peralt</a></h6>
                                                </div>
                                            </td>
                                            <td>UI / UX</td>
                                            <td>Breach of Contract</td>
                                            <td>14 Apr 2024</td>
                                            <td>Violates the terms of the contract</td>
                                            
                                            <td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_termination"><i class="ti ti-edit"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td>
                                                <div class="d-flex align-items-center">
                                                <a href="assets/img/users/user-34.webp" data-fancybox="gallery" class="avatar avatar-lg me-2">
                                                        <img src="assets/img/users/user-34.webp" class="rounded-circle" alt="user">
                                                    </a>
                                                    <h6 class="fw-medium"><a href="invoice-details">Doglas Martini</a></h6>
                                                </div>
                                            </td>
                                            <td>Marketing</td>
                                            <td>Lack of Skills</td>
                                            <td>10 Jun 2024</td>
                                            <td>Unable to perform job duties</td>
                                           
                                            <td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_termination"><i class="ti ti-edit"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Termination List  -->
        </div>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>
        <!-- /Footer -->
    </div>

    <!-- /Page Wrapper -->

    <!-- Add Termination -->
    <div class="modal fade" id="new_termination">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Termination</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="termination">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Terminated Employee </label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Anthony Lewis</option>
                                        <option>Brian Villalobos</option>
                                        <option>Doglas Martini</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Termination Type</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Retirement</option>
                                        <option>Insubordination</option>
                                        <option>Lack of Skills</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Notice Date</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Reason</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Termination Date</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Termination</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Termination -->

    <!-- Edit Termination -->
    <div class="modal fade" id="edit_termination">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Termination</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="resignation">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <!-- <div class="col-md-12 ">
                                <div class="mb-3">
                                    <label class="form-label">Terminated Employee </label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Anthony Lewis</option>
                                        <option>Brian Villalobos</option>
                                        <option>Doglas Martini</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Termination Type</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Retirement</option>
                                        <option>Insubordination</option>
                                        <option>Lack of Skills</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Notice Date</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="14/01/2024">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Termination Date</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="14/01/2024">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Reason</label>
                                    <textarea class="form-control" rows="3">Employee retires</textarea>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edi Termination -->

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
                        <a href="termination" class="btn btn-danger">Yes, Delete</a>
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