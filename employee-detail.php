<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <title>Astrik Hrm | Employee Detail</title>

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
                    <h2 class="mb-1">Employee Detail</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Dashboard
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Employee Detail</li>
                        </ol>
                    </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <!-- <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_bank_satutory" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Bank & Statutory</a>
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

                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                Employee Details
                            </div>
                        </div>
                        <div class="card-body px-sm-4 px-2">
                            <ul class="nav nav-tabs profil-tab nav-justified nav-style-1 mb-5 " id="myTab2" role="tablist">
                                <li class="nav-item me-0" role="presentation">
                                    <button class="nav-link text-start active p1 py-1" id="p1-tab-1"
                                        data-bs-toggle="tab" data-bs-target="#p1-tab-pane" type="button"
                                        role="tab" aria-controls="p1-tab-pane" aria-selected="true">Personal
                                         </button>
                                </li>
                                <!-- <li class="nav-item me-0" role="presentation">
                                    <button class="nav-link p2 py-1" id="p2-tab-2" data-bs-toggle="tab"
                                        data-bs-target="#p2-tab-pane" type="button" role="tab"
                                        aria-controls="p2-tab-pane" aria-selected="false">Contact
                                       </button>
                                </li> -->
                                <li class="nav-item me-0" role="presentation">
                                    <button class="nav-link text-start p3 py-1" id="p3-tab" data-bs-toggle="tab"
                                        data-bs-target="#p3-tab-pane" type="button" role="tab"
                                        aria-controls="p3-tab-pane" aria-selected="false">Employment
                                        </button>
                                </li>
                                <!-- <li class="nav-item me-0" role="presentation">
                                    <button class="nav-link p4 py-1" id="p4-tab" data-bs-toggle="tab"
                                        data-bs-target="#p4-tab-pane" type="button" role="tab"
                                        aria-controls="p4-tab-pane" aria-selected="false">System
                                        Credentials</button>
                                </li> -->

                                <li class="nav-item me-0" role="presentation">
                                    <button class="nav-link text-start p5 py-1" id="p5-tab" data-bs-toggle="tab"
                                        data-bs-target="#p5-tab-pane" type="button" role="tab"
                                        aria-controls="p5-tab-pane" aria-selected="false">Financial 
                                    </button>
                                </li>

                                <li class="nav-item me-0" role="presentation">
                                    <button class="nav-link text-start p6 py-1" id="p6-tab" data-bs-toggle="tab"
                                        data-bs-target="#p6-tab-pane" type="button" role="tab"
                                        aria-controls="p6-tab-pane" aria-selected="false">Experience
                                        </button>
                                </li>

                                <li class="nav-item me-0" role="presentation">
                                    <button class="nav-link text-start p7 py-1" id="p7-tab" data-bs-toggle="tab"
                                        data-bs-target="#p7-tab-pane" type="button" role="tab"
                                        aria-controls="p7-tab-pane" aria-selected="false">Family information</button>
                                </li>

                                <li class="nav-item me-0" role="presentation">
                                    <button class="nav-link text-start p8 py-1" id="p8-tab" data-bs-toggle="tab"
                                        data-bs-target="#p8-tab-pane" type="button" role="tab"
                                        aria-controls="p8-tab-pane" aria-selected="false">Education
                                    </button>
                                </li>

                            

                            </ul>
                            <div class="tab-content" id="myTabContent1">

                                <!--TAB ONE Start-->
                                <div class="tab-pane fade show active text-muted" id="p1-tab-pane" role="tabpanel"
                                    aria-labelledby="personal-tab-1" tabindex="0">

                                    <div class="row py-2">
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Middle Name</label>
                                            <input type="text" class="form-control" placeholder="Middle Name">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Photo Selection</label>
                                            <input type="file" class="form-control" placeholder="Photo Upload">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">CNIC</label>
                                            <input type="number" class="form-control" placeholder="CNIC Number">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Date of Birth</label>
                                            <input type="date" class="form-control" placeholder="Select Date">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Gender</label>
                                            <select class="select">
                                                <option selected>Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Nationality</label>
                                            <input type="text" class="form-control" placeholder="Nationality type here">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Religion</label>
                                            <input type="text" class="form-control" placeholder="Religion type here">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Martial Status</label>
                                            <select class="select">
                                                <option selected>Select</option>
                                                <option>Single</option>
                                                <option>Engaged</option>
                                                <option>Married</option>
                                                <option>Widowed</option>
                                                <option>Seperated</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Employment of Spouse</label>
                                            <select class="select">
                                                <option selected>Select</option>
                                                <option>Youes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">No. of Children</label>
                                            <input type="text" class="form-control" placeholder="Number type here">
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Personal Email Address</label>
                                            <input type="email" class="form-control"
                                                placeholder="Personal Email Address">
                                        </div>

                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Official Email Address</label>
                                            <input type="email" class="form-control"
                                                placeholder="Official Email Address">
                                        </div>

                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Phone No</label>
                                            <input type="number" class="form-control" placeholder="Phone No">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Mobile No</label>
                                            <input type="number" class="form-control" placeholder="Mobile No">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Address</label>
                                            <input type="text" class="form-control" placeholder="Enter Address">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Emergency Contact Number 1</label>
                                            <input type="number" class="form-control"
                                                placeholder="Emergency Contact Number 1">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Emergency Contact Number 2</label>
                                            <input type="number" class="form-control"
                                                placeholder="Emergency Contact Number 2">
                                        </div>
                                    </div>

                                </div>
                                <!--TAB ONE END-->

                                <!--TAB Two Start-->
                                <div class="tab-pane fade text-muted" id="p2-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab-2" tabindex="0">

                                    <!-- <div class="row py-2">
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Personal Email Address</label>
                                            <input type="email" class="form-control"
                                                placeholder="Personal Email Address">
                                        </div>

                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Official Email Address</label>
                                            <input type="email" class="form-control"
                                                placeholder="Official Email Address">
                                        </div>

                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Phone No</label>
                                            <input type="number" class="form-control" placeholder="Phone No">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Mobile No</label>
                                            <input type="number" class="form-control" placeholder="Mobile No">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Address</label>
                                            <input type="text" class="form-control" placeholder="Enter Address">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Emergency Contact Number 1</label>
                                            <input type="number" class="form-control"
                                                placeholder="Emergency Contact Number 1">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Emergency Contact Number 2</label>
                                            <input type="number" class="form-control"
                                                placeholder="Emergency Contact Number 2">
                                        </div>
                                    </div> -->

                                </div>
                                <!--TAB Two End-->

                                <!--TAB Three Start-->
                                <div class="tab-pane fade text-muted" id="p3-tab-pane" role="tabpanel"
                                    aria-labelledby="employ-tab" tabindex="0">

                                    <div class="row py-2">
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Employment Type</label>
                                            <select class="select">
                                                <option selected>Select</option>
                                                <option>Probation</option>
                                                <option>Permanent</option>
                                                <option>Resigned</option>
                                                <option>Notice</option>
                                                <option>Terminated</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Joining Date</label>
                                            <input type="date" class="form-control" placeholder="Select Date">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Department</label>
                                            <select class="select">
                                                <option selected>Select</option>
                                                <option>Brand </option>
                                                <option>Software</option>
                                                <option>Sales</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Designation</label>
                                            <input type="text" class="form-control" placeholder="Type Here">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Shift</label>
                                            <select class="select">
                                                <option selected>Select</option>
                                                <option>10:00 AM - 7 PM </option>
                                                <option>09:00 PM - 6 AM</option>

                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Reporting Authority</label>
                                            <select class="select">
                                                <option selected>Select</option>
                                                <option>Anum </option>
                                                <option>Syed Fawad Hussain</option>
                                                <option>Amash</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Team</label>
                                            <select class="select">
                                                <option selected>Select</option>
                                                <option>Brand </option>
                                                <option>Designer</option>
                                                <option>Developers</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                        <label class="form-label mb-0">User Login ID</label>
                                        <input type="text" class="form-control" placeholder="User Login ID">
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label mb-0">User Login Password</label>
                                        <input type="text" class="form-control" placeholder="User Login Password">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label mb-0">Machine ID</label>
                                        <input type="text" class="form-control" placeholder="Machine ID">
                                    </div>
                                    </div>
                                    

                                </div>
                                <!--TAB End Start-->

                                <!--TAB Four Start-->
                                <div class="tab-pane fade text-muted" id="p4-tab-pane" role="tabpanel"
                                    aria-labelledby="system-tab" tabindex="0">
                                    <!-- <div class="row py-2">

                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">User Login ID</label>
                                            <input type="text" class="form-control" placeholder="User Login ID">
                                        </div>

                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">User Login Password</label>
                                            <input type="text" class="form-control" placeholder="User Login Password">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Machine ID</label>
                                            <input type="text" class="form-control" placeholder="Machine ID">
                                        </div>
                                    </div> -->
                                </div>
                                <!--TAB Four End-->

                                <!--TAB Five Start-->
                                <div class="tab-pane fade text-muted" id="p5-tab-pane" role="tabpanel"
                                    aria-labelledby="financial-tab" tabindex="0">
                                    <div class="row py-2">

                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Bank Name</label>
                                            <input type="text" class="form-control" placeholder="Bank Name">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Bank Account no</label>
                                            <input type="number" class="form-control" placeholder="Bank Account no">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">CNIC</label>
                                            <input type="number" class="form-control" placeholder="CNIC">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Branch</label>
                                            <input type="text" class="form-control" placeholder="Branch">
                                        </div>
                                    </div>
                                </div>
                                <!--TAB Five End-->
                                <!--TAB Six Start-->
                                <div class="tab-pane fade text-muted" id="p6-tab-pane" role="tabpanel"
                                    aria-labelledby="experience-tab" tabindex="0">
                                    <div class="row py-2">

                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label mb-0">Company Name</label>
                                        <input type="text" class="form-control" placeholder="Company Name">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label mb-0">Designation</label>
                                        <input type="text" class="form-control" placeholder="Designation">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label mb-0">Start Date</label>
                                        <input type="date" class="form-control" placeholder="Start Date">
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label class="form-label mb-0">End Date</label>
                                        <input type="date" class="form-control" placeholder="End Date">
                                    </div>
                                    </div>
                                    <div class="row text-end justify-content-end mt-3">
                                            <div class="col-lg-2">
                                    <button type="button" class="btn btn-primary me-2"><i class="ti ti-circle-plus me-2"></i> Add More</button>
                                    </div>
                                    </div>
                                </div>
                                <!--TAB Six End-->
                                <!--TAB Seven Start-->
                                <div class="tab-pane fade text-muted" id="p7-tab-pane" role="tabpanel"
                                    aria-labelledby="family-tab" tabindex="0">
                                    <div class="row py-2">

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label mb-0">Name</label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label mb-0">Relationship</label>
                                    <input type="text" class="form-control" placeholder="Relationship">
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label mb-0">Phone</label>
                                    <input type="tel" class="form-control" placeholder="Phone">
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label mb-0">CNIC</label>
                                    <input type="number" class="form-control" placeholder="CNIC">
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label mb-0">Date of Birth</label>
                                    <input type="date" class="form-control" placeholder="Date of Birth">
                                </div>
                                </div>
                                <div class="row text-end justify-content-end mt-3">
                                            <div class="col-lg-2">
                                    <button type="button" class="btn btn-primary me-2"><i class="ti ti-circle-plus me-2"></i> Add More</button>
                                    </div>
                                    </div>
                                </div>
                                 <!--TAB Seven End-->
                                <!--TAB Eight Start-->
                                <div class="tab-pane fade text-muted" id="p8-tab-pane" role="tabpanel"
                                    aria-labelledby="education-tab" tabindex="0">
                                    <div class="row py-2">

                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Institution Name</label>
                                            <input type="text" class="form-control" placeholder="Institution Name">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Degree</label>
                                            <input type="text" class="form-control" placeholder="Degree">
                                        </div>
                                         <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">Start Date</label>
                                            <input type="date" class="form-control" placeholder="Start Date">
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <label class="form-label mb-0">End Date</label>
                                            <input type="date" class="form-control" placeholder="End Date">
                                        </div>
                                        </div>
                                        <div class="row text-end justify-content-end mt-3">
                                            <div class="col-lg-2">
                                    <button type="button" class="btn btn-primary me-2"><i class="ti ti-circle-plus me-2"></i> Add More</button>
                                    </div>
                                    </div>
                                </div>
                                 <!--TAB Eight End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php include 'includes/footer.php'; ?>
    </div>
    <!-- /Page Wrapper -->

    <!-- Edit Employee -->
    <div class="modal fade" id="edit_employee">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center">
                        <h4 class="modal-title me-2">Edit Employee</h4><span>Employee ID : EMP -0024</span>
                    </div>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/employees-grid">
                    <div class="contact-grids-tab">
                        <ul class="nav nav-underline" id="myTab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="info-tab3" data-bs-toggle="tab"
                                    data-bs-target="#basic-info3" type="button" role="tab" aria-selected="true">Basic
                                    Information</button>
                            </li>
                            <li class="nav-item d-none" role="presentation">
                                <button class="nav-link" id="address-tab3" data-bs-toggle="tab"
                                    data-bs-target="#address3" type="button" role="tab"
                                    aria-selected="false">Permissions</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="basic-info3" role="tabpanel"
                            aria-labelledby="info-tab3" tabindex="0">
                            <div class="modal-body pb-0 ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div
                                            class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">
                                            <div
                                                class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                <img src="assets/img/users/user-13.jpg" alt="img"
                                                    class="rounded-circle">
                                            </div>
                                            <div class="profile-upload">
                                                <div class="mb-2">
                                                    <h6 class="mb-1">Upload Profile Image</h6>
                                                    <p class="fs-12">Image should be below 4 mb</p>
                                                </div>
                                                <div class="profile-uploader d-flex align-items-center">
                                                    <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                        Upload
                                                        <input type="file" class="form-control image-sign" multiple="">
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="btn btn-light btn-sm">Cancel</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">First Name <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" value="Anthony">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="email" class="form-control" value="Lewis">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Employee ID <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" value="Emp-001">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Joining Date <span class="text-danger">
                                                    *</span></label>
                                            <div class="input-icon-end position-relative">
                                                <input type="text" class="form-control datetimepicker"
                                                    placeholder="dd/mm/yyyy" value="17-10-2022">
                                                <span class="input-icon-addon">
                                                    <i class="ti ti-calendar text-gray-7"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Username <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" value="Anthony">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email <span class="text-danger"> *</span></label>
                                            <input type="email" class="form-control" value="anthony@example.com	">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Password <span class="text-danger">
                                                    *</span></label>
                                            <div class="pass-group">
                                                <input type="password" class="pass-input form-control">
                                                <span class="ti toggle-password ti-eye-off"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 ">
                                            <label class="form-label">Confirm Password <span class="text-danger">
                                                    *</span></label>
                                            <div class="pass-group">
                                                <input type="password" class="pass-inputs form-control">
                                                <span class="ti toggle-passwords ti-eye-off"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number <span class="text-danger">
                                                    *</span></label>
                                            <input type="text" class="form-control" value="(123) 4567 890">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Company<span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" value="Abac Company">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Department</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>All Department</option>
                                                <option selected>Finance</option>
                                                <option>Developer</option>
                                                <option>Executive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Designation</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option selected>Team Lead</option>
                                                <option>Manager</option>
                                                <option>Executive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-none">
                                        <div class="mb-3">
                                            <label class="form-label">About <span class="text-danger"> *</span></label>
                                            <textarea class="form-control" rows="3">As an award winning designer, I deliver exceptional quality work and bring value to your brand! With 10 years of experience and 350+ projects completed worldwide with satisfied customers, I developed the 360° brand approach, which helped me to create numerous brands that are relevant, meaningful and loved.
                                                </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-light border me-2"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address3" role="tabpanel" aria-labelledby="address-tab3"
                            tabindex="0">
                            <div class="modal-body">
                                <div class="card bg-light-500 shadow-none">
                                    <div
                                        class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                        <h6>Enable Options</h6>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <div class="form-check form-switch me-2">
                                                <label class="form-check-label mt-0">
                                                    <input class="form-check-input me-2" type="checkbox" role="switch">
                                                    Enable all Module
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center">
                                                <label class="form-check-label mt-0">
                                                    <input class="form-check-input" type="checkbox" checked="">
                                                    Select All
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive border rounded">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch" checked>
                                                            Holidays
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Leaves
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Clients
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Projects
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Tasks
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Chats
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch" checked>
                                                            Assets
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox" checked="">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-switch me-2">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input me-2" type="checkbox"
                                                                role="switch">
                                                            Timing Sheets
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Read
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Write
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Create
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Import
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-check d-flex align-items-center">
                                                        <label class="form-check-label mt-0">
                                                            <input class="form-check-input" type="checkbox">
                                                            Export
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-light border me-2"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#success_modal">Save </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Employee -->

    <!-- Edit Personal -->
    <div class="modal fade" id="edit_personal">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Personal Info</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/employee-details">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <!-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Passport No <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>									
                            </div> -->
                            <!-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Passport Expiry Date <span class="text-danger"> *</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Nationality <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Religion</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Marital status <span class="text-danger"> *</span></label>
                                    <select class="select">
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Widowed </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Employment spouse</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">No. of children</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Personal -->

    <!-- Edit Emergency Contact -->
    <div class="modal fade" id="edit_emergency">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Emergency Contact Details</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/employee-details">
                    <div class="modal-body pb-0">
                        <div class="border-bottom mb-3 ">
                            <div class="row">
                                <h5 class="mb-3">Secondary Contact Details</h5>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Relationship </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone No 1 <span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone No 2 </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="mb-3">Secondary Contact Details</h5>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Name <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Relationship </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone No 1 <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone No 2 </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Emergency Contact -->

    <!-- Edit Bank -->
    <div class="modal fade" id="edit_bank">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Bank Details</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/employee-details">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Bank Details <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Bank account No </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">CNIC</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Branch Address</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Bank -->

    <!-- Add Family -->
    <div class="modal fade" id="edit_familyinformation">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Family Information</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/employee-details">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Name <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Relationship </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Phone </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">CNIC</label>
                                    <input type="phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Date of Birth <span class="text-danger"> *</span></label>
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
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Family -->

    <!-- Add Education -->
    <div class="modal fade" id="edit_education">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Education Information</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/employee-details">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Institution Name <span class="text-danger">
                                            *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Course <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger"> *</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger"> *</span></label>
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
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Education -->

    <!-- Add Experience -->
    <div class="modal fade" id="edit_experience">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Company Information</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/employee-details">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Company Name <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Designation <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Start Date <span class="text-danger"> *</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">End Date <span class="text-danger"> *</span></label>
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-7"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-check-label d-flex align-items-center mt-0">
                                        <input class="form-check-input mt-0 me-2" type="checkbox" checked="">
                                        <span class="text-dark">Check if you working present</span>
                                    </label>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Experience -->

    <!-- Add Employee Success -->
    <div class="modal fade" id="success_modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center p-3">
                        <span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i
                                class="ti ti-check fs-24"></i></span>
                        <h5 class="mb-2">Employee Added Successfully</h5>
                        <p class="mb-3">Stephan Peralt has been added with Client ID : <span class="text-primary">#EMP -
                                0001</span>
                        </p>
                        <div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <a href="/employees" class="btn btn-dark w-100">Back to List</a>
                                </div>
                                <div class="col-6">
                                    <a href="/employee-details" class="btn btn-primary w-100">Detail Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Client Success -->

    <!-- Add Statuorty -->
    <div class="modal fade" id="add_bank_satutory">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Bank & Statutory</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/employee-details">
                    <div class="modal-body pb-0">
                        <div class="border-bottom mb-4">
                            <h5 class="mb-3">Basic Salary Information</h5>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Salary basis <span class="text-danger">
                                                *</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Weekly</option>
                                            <option>Monthly</option>
                                            <option>Annualy</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Salary basis</label>
                                        <input type="text" class="form-control" value="$">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Payment type</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Cash</option>
                                            <option>Debit Card</option>
                                            <option>Mobile Payment</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom mb-4">
                            <h5 class="mb-3">PF Information</h5>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">PF contribution <span class="text-danger">
                                                *</span></label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Employee Contribution</option>
                                            <option>Employer Contribution</option>
                                            <option>Provident Fund Interest</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">PF No</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Employee PF rate</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Additional rate</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>ESI</option>
                                            <option>EPS</option>
                                            <option>EPF</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Total rate</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="mb-3">ESI Information</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">ESI contribution<span class="text-danger">
                                            *</span></label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Employee Contribution</option>
                                        <option>Employer Contribution</option>
                                        <option>Maternity Benefit </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">ESI Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Employee ESI rate<span class="text-danger">
                                            *</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Additional rate</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>ESI</option>
                                        <option>EPS</option>
                                        <option>EPF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Total rate</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Statuorty -->

    <!-- Asset Information -->
    <div class="modal fade" id="asset_info">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Asset Information</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="bg-light p-3 rounded d-flex align-items-center mb-3">
                        <span class="avatar avatar-lg flex-shrink-0 me-2">
                            <img src="assets/img/laptop.jpg" alt="img" class="ig-fluid rounded-circle">
                        </span>
                        <div>
                            <h6>Dell Laptop - #343556656</h6>
                            <p class="fs-13"><span class="text-primary">AST - 001 </span><i
                                    class="ti ti-point-filled text-primary"></i> Assigned on 22 Nov, 2022 10:32AM</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <p class="fs-13 mb-0">Type</p>
                                <p class="text-gray-9">Laptop</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <p class="fs-13 mb-0">Brand</p>
                                <p class="text-gray-9">Dell</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <p class="fs-13 mb-0">Category</p>
                                <p class="text-gray-9">Computer</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <p class="fs-13 mb-0">Serial No</p>
                                <p class="text-gray-9">3647952145678</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <p class="fs-13 mb-0">Cost</p>
                                <p class="text-gray-9">$800</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <p class="fs-13 mb-0">Vendor</p>
                                <p class="text-gray-9">Compusoft Systems Ltd.,</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <p class="fs-13 mb-0">Warranty</p>
                                <p class="text-gray-9">12 Jan 2022 - 12 Jan 2026</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <p class="fs-13 mb-0">Location</p>
                                <p class="text-gray-9">46 Laurel Lane, TX 79701</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="fs-13 mb-2">Asset Images</p>
                        <div class="d-flex align-items-center">
                            <img src="assets/img/laptop-01.jpg" alt="img" class="img-fluid rounded me-2">
                            <img src="assets/img/laptop-2.jpg" alt="img" class="img-fluid rounded me-2">
                            <img src="assets/img/laptop-3.jpg" alt="img" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Asset Information -->

    <!-- Refuse -->
    <div class="modal fade" id="refuse_msg">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Raise Issue</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/employee-details">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description<span class="text-danger"> *</span></label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Refuse -->

    <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                        <i class="ti ti-trash-x fs-36"></i>
                    </span>
                    <h4 class="mb-1">Confirm Delete</h4>
                    <p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <a href="/employee-details" class="btn btn-danger">Yes, Delete</a>
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