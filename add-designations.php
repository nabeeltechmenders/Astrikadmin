<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <title>Admin Area | Add Employee</title>

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
                    <h2 class="mb-1">Add Designations</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Employee
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Designations</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="me-2 mb-2">
                        <!-- <div class="dropdown">
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
                        </div> -->
                    </div>
                    <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_designation" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Designation</a>
                    </div>
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <!-- Performance Indicator list -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Designation List</h5>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Department
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Finance</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Application Development</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">IT Management</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Web Development</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Sales</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">UI / UX	</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Account Management</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Marketing</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Administration</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Business Development</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Select Status
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
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
                                <!-- <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                                </li> -->
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
                    <div class="custom-datatable-filter table-responsive">
                        <table class="table datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th class="no-sort">
                                        <!-- <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox" id="select-all">
                                        </div> -->
                                    </th>
                                    <th class="no-icon">Designation </th>
                                    <th class="no-icon">Department</th>
                                    <th class="no-icon">No of Employees</th>
                                    <th class="no-icon">Status</th>
                                    <th class="no-icon"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <!-- <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div> -->
                                    </td>
                                    <td>
                                        
                                            <h6 class="fw-medium fs-14 text-dark">Accountant</h6>
                                        
                                    
                                    </td>
                                    <td>Finance</td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div> -->
                                    </td>
                                    <td>
                                        
                                            <h6 class="fw-medium fs-14 text-dark">App Developer</h6>
                                    
                                    
                                    </td>
                                    <td>Application Development</td>
                                    <td>
                                        15
                                    </td>
                                    <td>
                                        <span class="badge badge-success new-badge-green d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div> -->
                                    </td>
                                    <td>
                                        
                                        <h6 class="fw-medium fs-14 text-dark">Technician</h6>
                                        
                                    
                                    </td>
                                    <td>IT Management</td>
                                    <td>
                                        08
                                    </td>
                                    <td>
                                        <span class="badge badge-success new-badge-green d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div> -->
                                    </td>
                                    <td>
                                        
                                        <h6 class="fw-medium fs-14 text-dark">Web Developer</h6>
                                        
                                    
                                    </td>
                                    <td>Web Development</td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <span class="badge badge-success new-badge-green d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div> -->
                                    </td>
                                    <td>
                                        
                                        <h6 class="fw-medium fs-14 text-dark">Sales Executive Officer</h6>
                                    
                                    </td>
                                    <td>Sales</td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <span class="badge badge-success new-badge-green d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div> -->
                                    </td>
                                    <td>
                                        
                                        <h6 class="fw-medium fs-14 text-dark">Designer</h6>
                                    
                                    </td>
                                    <td>UI / UX</td>
                                    <td>
                                        15
                                    </td>
                                    <td>
                                        <span class="badge badge-success new-badge-green d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div> -->
                                    </td>
                                    <td>
                                        
                                        <h6 class="fw-medium fs-14 text-dark">Account Manager</h6>
                                    
                                    </td>
                                    <td>Account Management</td>
                                    <td>
                                        08
                                    </td>
                                    <td>
                                        <span class="badge badge-success new-badge-green d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div> -->
                                    </td>
                                    <td>
                                        
                                        <h6 class="fw-medium fs-14 text-dark">SEO Analyst</h6>
                                    
                                    </td>
                                    <td>Marketing</td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <span class="badge badge-danger new-badge-red d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Inactive
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div> -->
                                    </td>
                                    <td>
                                        
                                        <h6 class="fw-medium fs-14 text-dark">Admin</h6>
                                    
                                    </td>
                                    <td>Administration</td>
                                    <td>
                                        05
                                    </td>
                                    <td>
                                        <span class="badge badge-success new-badge-green d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div> -->
                                    </td>
                                    <td>
                                        
                                        <h6 class="fw-medium fs-14 text-dark">Business Analyst</h6>
                                    
                                    </td>
                                    <td>Business Development</td>
                                    <td>
                                        07
                                    </td>
                                    <td>
                                        <span class="badge badge-success new-badge-green d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_designation"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Performance Indicator list -->

        </div>

       

    </div>
    <!-- /Page Wrapper -->
        <?php include 'includes/footer.php'; ?>
    </div>
   <!-- Add Designation -->
   <div class="modal fade" id="add_designation">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Designation</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Designation Name</label>
                                    <input type="text" class="form-control">
                                </div>	
                            </div>
                            <div class="col-md-12">
                            <div class="mb-3">
                                    <label class="form-label">Department name </label>
                                    <select class="select">
                                        <option>Finance</option>
                                        <option>Application Development</option>
                                        <option>IT Management</option>
                                        <option>Web Development</option>
                                        <option>Sales</option>
                                        <option>UI / UX	</option>
                                        <option>Account Management</option>
                                        <option>Marketing</option>
                                        <option>Administration</option>
                                        <option>Business Development</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Designation</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Designation -->

    <!-- Edit Designation -->
    <div class="modal fade" id="edit_designation">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Designation</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Designation Name</label>
                                    <input type="text" class="form-control" value="Accountant">
                                </div>	
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Department Name</label>
                                    <input type="text" class="form-control" value="Finance">
                                </div>	
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
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
    <!-- /Edit Department -->

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
    <script>
        function selectGender(id) {
            document.querySelectorAll('.gender-option').forEach(option => {
                option.classList.remove('selected');
            });
            document.getElementById(id).classList.add('selected');
        }
    </script>
</body>

</html>