<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <title>Admin Area | Sister Company Setup</title>

    <?php include 'includes/style.php'; ?>
    Performance
</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <?php include 'includes/header.php'; ?>
        <?php include 'includes/sidebar.php'; ?>

        <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Companies</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="/index"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Application
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Sister Companies List</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="me-2 mb-2">
                        <div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
                            <a href="/companies-crm" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i class="ti ti-list-tree"></i></a>
                            <a href="/companies-grid" class="btn btn-icon btn-sm"><i class="ti ti-layout-grid"></i></a>
                        </div>
                    </div>
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
                    <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_company" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Company</a>
                    </div>
                    <div class="ms-2 head-icons">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Sister companies list</h5>
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
                                Company
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">BrightWave Innovations </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Quantum Nexus</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">TerraFusion Energy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Owner
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Hendry</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Jami</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Newell</a>
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
                        <table class="table ">
                            <thead class="thead-light">
                                <tr>
                                  
                                    <th>Company Name</th>
                                    <th>Headquarters Location</th>
                                    <th>Branches</th>
                                    <th>Departments</th>
                                   
                                    <th>Owner</th>
                                    
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                 
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="/company-details" class="avatar avatar-md border rounded-circle">
                                                <img src="assets/img/company/company-01.svg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="/company-details">BrightWave Innovations</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Berlin, Germany </td>
                                    <td>3060 Olsen Drive San Jose, CA 95128. United States</td>
                                    <td>2</td>
                                    
                                    <td>Hendry Milner</td>
                                    
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="/company-details" class="me-2"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                 
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="/company-details" class="avatar avatar-md border rounded-circle">
                                                <img src="assets/img/company/company-02.svg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="/company-details">Stellar Dynamics</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Berlin, Germany </td>
                                    <td>3060 Olsen Drive San Jose, CA 95128. United States</td>
                                    <td>3</td>
                                   
                                    <td>Guilory Berggren</td>
                                    
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="/company-details" class="me-2"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                 
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="/company-details" class="avatar avatar-md border rounded-circle">
                                                <img src="assets/img/company/company-03.svg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="/company-details">Quantum Nexus</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Berlin, Germany </td>
                                    <td>3060 Olsen Drive San Jose, CA 95128. United States</td>
                                    <td>5</td>
                                  
                                    <td>Jami Carlile</td>
                                    
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="/company-details" class="me-2"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                 
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="/company-details" class="avatar avatar-md border rounded-circle">
                                                <img src="assets/img/company/company-04.svg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="/company-details">EcoVision Enterprises</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Berlin, Germany </td>
                                    <td>3060 Olsen Drive San Jose, CA 95128. United States</td>
                                    <td>2</td>
                                   
                                    <td>Theresa Nelson</td>
                                    
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="/company-details" class="me-2"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                 
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="/company-details" class="avatar avatar-md border rounded-circle">
                                                <img src="assets/img/company/company-05.svg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="/company-details">Aurora Technologies</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Berlin, Germany </td>
                                    <td>3060 Olsen Drive San Jose, CA 95128. United States</td>
                                    <td>3</td>
                                   
                                    <td>Smith Cooper</td>
                                    
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="/company-details" class="me-2"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                 
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="/company-details" class="avatar avatar-md border rounded-circle">
                                                <img src="assets/img/company/company-06.svg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="/company-details">BlueSky Ventures</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Berlin, Germany </td>
                                    <td>3060 Olsen Drive San Jose, CA 95128. United States</td>
                                    <td>4</td>
                                   
                                    <td>Martin Lewis</td>
                                    
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="/company-details" class="me-2"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                 
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="/company-details" class="avatar avatar-md border rounded-circle">
                                                <img src="assets/img/company/company-07.svg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="/company-details">TerraFusion Energy</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Berlin, Germany </td>
                                    <td>3060 Olsen Drive San Jose, CA 95128. United States</td>
                                    <td>5</td>
                                  
                                    <td>Newell Egan</td>
                                    
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="/company-details" class="me-2"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                 
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="/company-details" class="avatar avatar-md border rounded-circle">
                                                <img src="assets/img/company/company-08.svg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="/company-details">UrbanPulse Design</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Berlin, Germany </td>
                                    <td>3060 Olsen Drive San Jose, CA 95128. United States</td>
                                    <td>2</td>
                                   
                                    <td>Janet</td>
                                    
                                    <td>
                                        <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Inactive
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="/company-details" class="me-2"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                 
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="/company-details" class="avatar avatar-md border rounded-circle">
                                                <img src="assets/img/company/company-09.svg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="/company-details">Nimbus Networks</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Berlin, Germany </td>
                                    <td>3060 Olsen Drive San Jose, CA 95128. United States</td>
                                    <td>3</td>
                                  
                                    <td>Craig Brown</td>
                                    
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="/company-details" class="me-2"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                 
                                    <td>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <a href="/company-details" class="avatar avatar-md border rounded-circle">
                                                <img src="assets/img/company/company-10.svg" class="img-fluid" alt="img">
                                            </a>
                                            <div class="ms-2">
                                                <h6 class="fw-medium"><a href="/company-details">Epicurean Delights</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Berlin, Germany </td>
                                    <td>3060 Olsen Drive San Jose, CA 95128. United States</td>
                                    <td>4</td>
                                   
                                    <td>Daniel Byrne</td>
                                    
                                    <td>
                                        <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                            <i class="ti ti-point-filled me-1"></i>Active
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="/company-details" class="me-2"><i class="ti ti-eye"></i></a>
                                            <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-target="#delete_modal" data-bs-toggle="modal"><i class="ti ti-trash"></i></a>
                                        </div>
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