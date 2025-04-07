<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <title>Admin Area | Group Company Setup</title>

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
                    <h2 class="mb-1">Setting</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href=""><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Adminstration
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">group-company-setup.php</li>
                        </ol>
                    </nav>
                </div>
                <!-- <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="me-2 mb-2">
                        <div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
                            <a href="" class="btn btn-icon btn-sm me-1"><i class="ti ti-list-tree"></i></a>
                            <a href="" class="btn btn-icon btn-sm active bg-primary text-white"><i class="ti ti-layout-grid"></i></a>
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
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div> -->
            </div>
            <!-- /Breadcrumb -->

       
           
            <div class="card">
            <div class="card-header">
                            <div class="card-title">
                            Group company setup
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <span class="fs-18 fw-bold text-dark mb-4">Basic information</span>

                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Company Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Company Name">
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Industry Type</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Business Type</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Company Logo</label>
                                    <div class="col-md-10">
                                    <input type="file" class="form-control" placeholder="Company Logo">
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-12 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-1">About company</label>
                                    <div class="col-md-11">
                                        <textarea name="" id="" class="form-control" placeholder="About Company"></textarea>
                                    </div>
                                </div>
                                </div>



                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Website</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Website">
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Phone Number</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                                </div>

                            </div>


                            <div class="row mt-4">
                            <span class="fs-18 fw-bold text-dark mb-4">Business & Legal Details</span>

                            <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Company Registration Number</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Company Registration Number">
                                    </div>
                                </div>
                                </div>                   




                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Currency References</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option></option>
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Tax Identification Number (TIN) </label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" placeholder="Tax Identification Number (TIN) ">
                                    </div>
                                </div>
                                </div>


                            </div>
                            

                              <div class="card-header"> </div> 



                              <div class="row mt-4">
                            <span class="fs-18 fw-bold text-dark mb-4">Head office adress</span>

                            <div class="col-lg-12 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-1">Address </label>
                                    <div class="col-md-11">
                                        <input type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                </div>                   

                              


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">City</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">State</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Country</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Postal Code</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Time Zone</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                               
                            </div>



                            <div class="card-header"> </div> 


                            <div class="row mt-4">
                            <span class="fs-18 fw-bold text-dark mb-4">Owners & Partners Information</span>
                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Ownership type</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Owner name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Owner name">
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Phone number</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" placeholder="Phone number">
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Ownership%</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Ownership%">
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Role in the company</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <a href="#" class="btn btn-primary " >Add Partners</a>
                                </div>
                            </div>

                            

                            <div class="card-header"> </div> 


                            <div class="row mt-4">
                            <span class="fs-18 fw-bold text-dark mb-4">Group Branches</span>


                              <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Branch name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Branch name">
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Branch code</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Branch code">
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-12 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-1">Address</label>
                                    <div class="col-md-11">
                                        <textarea type="text" class="form-control" placeholder="Address"></textarea>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">City</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">State</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-2">Country</label>
                                    <div class="col-md-10">
                                        <select class="form-select">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-12 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-1">Postal Code</label>
                                    <div class="col-md-11">
                                        <textarea type="text" class="form-control" placeholder="Postal Code"></textarea>
                                    </div>
                                </div>
                                </div>


                                <div class="col-lg-12 mb-2">
                                <div class="mb-3 row">
                                    <label class="form-label col-md-1">Postal Number</label>
                                    <div class="col-md-11">
                                        <textarea type="text" class="form-control" placeholder="Postal Number"></textarea>
                                    </div>
                                </div>
                                </div>
                               

                            </div>

                            </div>
                        </div>
            </div>
    

   

    </div>
    <!-- /Page Wrapper -->
        <?php include 'includes/footer.php'; ?>
    </div>
   <!-- Page Wrapper -->
  

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