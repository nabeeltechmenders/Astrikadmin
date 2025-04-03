<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Astrik Hrm | holidays</title>


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
                    <h2 class="mb-1">Holidays</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="assetsindex"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Employee
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Holidays</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="me-2 mb-2">
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
                    </div>
                    <!-- <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_holiday" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Holiday</a>
                    </div> -->
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->


            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Holidays List</h5>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <div class="me-3">
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-chevron-down"></i>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Select Status
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Office Open</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Holiday</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <!-- <th class="no-sort">
                                        <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox" id="select-all">
                                        </div>
                                    </th> -->
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <!-- <th></th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>
                                        <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td> -->
                                    <td>
                                        <h6 class="fw-medium"><a href="#">New Year</a></h6>
                                    </td>
                                    <td>01 Jan 2024</td>
                                    <td>First day of the new year</td>
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Office Open 
                                        </span>
                                    </td>
                                   
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <h6 class="fw-medium"><a href="#">Martin Luther King Jr. Day</a></h6>
                                    </td>
                                    <td>15 Jan 2024</td>
                                    <td>Celebrating the civil rights leader</td>
                                    <td>
                                        <span class="badge badge-info d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Holiday
                                        </span>
                                    </td>
                                   
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <h6 class="fw-medium"><a href="#">President's Day</a></h6>
                                    </td>
                                    <td>19 Feb 2024</td>
                                    <td>Honoring past US Presidents</td>
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Office Open
                                        </span>
                                    </td>
                                   
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <h6 class="fw-medium"><a href="#">Good Friday</a></h6>
                                    </td>
                                    <td>29 Mar 2024</td>
                                    <td>Holiday before Easter</td>
                                    <td>
                                        <span class="badge badge-info d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Holiday
                                        </span>
                                    </td>
                                   
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <h6 class="fw-medium"><a href="#">Easter Monday</a></h6>
                                    </td>
                                    <td>01 Apr 2024</td>
                                    <td>Holiday after Easter</td>
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Office Open
                                        </span>
                                    </td>
                                   
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <h6 class="fw-medium"><a href="#">Memorial Day</a></h6>
                                    </td>
                                    <td>27 May 2024</td>
                                    <td>Honors military personnel</td>
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Office Open
                                        </span>
                                    </td>
                                   
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <h6 class="fw-medium"><a href="#">Independence Day</a></h6>
                                    </td>
                                    <td>04 Jul 2024</td>
                                    <td>Celebrates Independence</td>
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Office Open
                                        </span>
                                    </td>
                                   
                                </tr>
                                <tr>
                                  
                                    <td>
                                        <h6 class="fw-medium"><a href="#">Labour Day</a></h6>
                                    </td>
                                    <td>02 Sep 2024</td>
                                    <td>Honors working people</td>
                                    <td>
                                        <span class="badge badge-info d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Holiday
                                        </span>
                                    </td>
                                   
                                </tr>
                                <tr>
                                   
                                    <td>
                                        <h6 class="fw-medium"><a href="#">Veterans Day</a></h6>
                                    </td>
                                    <td>11 Nov 2024</td>
                                    <td>Honors military veterans</td>
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Office Open
                                        </span>
                                    </td>
                                   
                                </tr>
                                <tr>
                                 
                                    <td>
                                        <h6 class="fw-medium"><a href="#">Christmas Day</a></h6>
                                    </td>
                                    <td>25 Dec 2024</td>
                                    <td>Celebration of Christmas</td>
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-sm">
                                            <i class="ti ti-point-filled me-1"></i>Office Open
                                        </span>
                                    </td>
                                   
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

    <!-- Add Plan -->
    <div class="modal fade" id="add_holiday">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Holiday</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="assetsholidays">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Holiday</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Plan -->

    <!-- Edit Plan -->
    <div class="modal fade" id="edit_holiday">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Holiday</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="assetsholidays">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" value="New Year">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" value="01/01/2024">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="3">First day of the new year</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option selected>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Plan -->

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
                        <a href="assetsholidays" class="btn btn-danger">Yes, Delete</a>
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