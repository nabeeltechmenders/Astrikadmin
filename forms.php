<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Astrik Hrm | Forms</title>


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
                    <h2 class="mb-1">Forms</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.php"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                home
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Forms</li>
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
                    <!-- <div class="input-icon w-180 position-relative mb-2 me-2">
                        <span class="btn btn-white d-inline-flex text-danger rounded-1 ">Today time in: 03:05 pm</span>
                       
                    </div>
                    <div class="input-icon w-120 position-relative mb-2">
                        <span class="input-icon-addon">
                            <i class="ti ti-calendar text-gray-9"></i>
                        </span>
                        <input type="text" class="form-control datetimepicker" value="15/05/2025">
                    </div> -->
                    <div class="ms-2 head-icons">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->


 <!-- Vertical Tab Style-2 -->
 <div class="row">
           <div class="col-xxl-12">
               <div class="card">
                   <div class="card-header">
                       <div class="card-title">
                          Forms
                       </div>
                   </div>
                   <div class="card-body">
                       <div class="row">
                           <div class="col-xl-3">
                               <ul class="nav nav-tabs flex-column vertical-tabs-2 post-stik " role="tablist">
                                   <li class="nav-item">
                                       <a class="nav-link active" data-bs-toggle="tab" role="tab"
                                           aria-current="page" href="#home-vertical-custom"
                                           aria-selected="true">
                                           <p class="mb-1"><i class="feather-home"></i></p>
                                           <p class="mb-0 text-break">Resignation Form</p>
                                       </a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" data-bs-toggle="tab" role="tab"
                                           aria-current="page" href="#about-vertical-custom"
                                           aria-selected="true">
                                           <p class="mb-1"><i class="feather-phone"></i></p>
                                           <p class="mb-0 text-break">Test</p></a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" data-bs-toggle="tab" role="tab"
                                           aria-current="page" href="#services-vertical-custom"
                                           aria-selected="true">
                                           <p class="mb-1"><i class="feather-phone"></i></p>
                                           <p class="mb-0 text-break">Test</p></a>
                                   </li>
                                  
                               </ul>
                           </div>
                           <div class="col-xl-9">
                               <div class="tab-content ">
                                   <div class="tab-pane show active text-muted" id="home-vertical-custom" role="tabpanel">
                                      
                                    <form>
                                   <div class="row">
                                   <h5 class="card-title mb-3">Employee Details</h5>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name </label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Employee ID</label>
                                            <input type="number" class="form-control">
                                        </div>
                                       
                                        <div class="mb-3">
                                            <label class="form-label">Department</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option value="1">Brand</option>
                                                <option value="2">Software</option>
                                                <option value="3">Sales</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Designation</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Reporting Authority (RA)</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option value="1">Anum Altaf Hussain</option>
                                                <option value="2">Syed Fawad Hussain</option>
                                                <option value="3">Amash</option>
                                            </select>
                                        </div>
                                        <!-- <div class="mb-3">
                                            <label class="d-block form-label">Gender:</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="gender_male" value="option1">
                                                <label class="form-check-label" for="gender_male">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="gender_female" value="option2">
                                                <label class="form-check-label" for="gender_female">Female</label>
                                            </div>
                                        </div> -->
                                 
                                   </div>
                                   <div class="col-lg-12">
                                   <h5 class="card-title py-3">Resignation Details</h5>
                                   <div class="mb-3">
                                            <label class="form-label">Last Working Date</label>
                                            <input type="date" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Reason for Resignation</label>
                                            <input type="text" class="form-control" placeholder="Career Growth, Personal, Health, Relocation, Other">
                                        </div>
                                    <div class="mb-3">
                                            <label class="d-block form-label">Will you serve notice period?</label>
                                               <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                                </div>
                                          
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">How was your experience during employment?</label>
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Kindly give your feedback</label>
                                            <textarea type="text" class="form-control" placeholder=""></textarea>
                                            <p class="text-dark-10  fs-12 mt-1">It will help us improve in future.</p>
                                        </div>
                                   </div>
                                   <div class="col-lg-12">
                                   <h5 class="card-title py-3">Resignation Details</h5>
                                   <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                I confirm that I am resigning voluntarily and will complete the exit formalities
                                </label>
                            </div>
                                </div>
                                   <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                   </div>
                                   </form>
                                   </div>
                                   <div class="tab-pane text-muted" id="about-vertical-custom"
                                       role="tabpanel">
                                       <ul class="mb-0">
                                           <li class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's <b>standard dummy text ever since the 1500s</b>, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</li>
                                           <li>How hotel deals can help you live a better life. <b>How celebrity cruises</b> aren't as bad as you think. How cultural solutions can help you predict the future. How to cheat at dog friendly hotels and get away with it.</li>
                                       </ul>
                                   </div>
                                   <div class="tab-pane text-muted" id="services-vertical-custom"
                                       role="tabpanel">
                                       <ul class="mb-0">
                                           <li class="mb-2">
                                               There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.
                                           </li>
                                           <li>
                                               How hotel deals can help you live a better life. <b>How celebrity cruises</b> aren't as bad as you think. How cultural solutions can help you predict the future. How to cheat at dog friendly hotels and get away with it.
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           
       </div>
       <!-- /Vertical Tab Style-2 -->



        </div>

        <?php  include 'includes/footer.php'; ?>

    </div>
    <!-- /Page Wrapper -->

    <!-- Add Leaves -->
    <div class="modal fade" id="add_leaves">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Leave</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/employee-dashboard">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Employee Name</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Anthony Lewis</option>
                                        <option>Brian Villalobos</option>
                                        <option>Harvey Smith</option>
                                    </select>
                                </div>	
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Leave Type</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Medical Leave</option>
                                        <option>Casual Leave</option>
                                        <option>Annual Leave</option>
                                    </select>
                                </div>	
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">From </label>
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
                                    <label class="form-label">To </label>
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
                                    <label class="form-label">No of Days</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Remaining Days</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Reason</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Leaves</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Leaves -->

    <!-- Edit Task -->
    <div class="modal fade" id="edit_task">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Task  </h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="/employee-dashboard">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Todo Title</label>
                                    <input type="text" class="form-control" value="Patient appointment booking">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Due Date</label>
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
                                    <label class="form-label">Project</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Office Management</option>
                                        <option>Clinic Management </option>
                                        <option>Educational Platform</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label me-2">Team Members</label>
                                    <input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Jerald,Andrew,Philip,Davis">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Tag</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Internal</option>
                                        <option selected>Projects</option>
                                        <option>Meetings</option>
                                        <option>Reminder</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Inprogress</option>
                                        <option>Completed</option>
                                        <option>Pending</option>
                                        <option>Onhold</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Priority</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Medium</option>
                                        <option>High</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Who Can See this Task?</label>
                                <div class="d-flex align-items-center">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                        <label class="form-check-label text-dark" for="flexRadioDefault4">
                                            Public
                                        </label>
                                    </div>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked="">
                                        <label class="form-check-label text-dark" for="flexRadioDefault5">
                                            Private
                                        </label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                        <label class="form-check-label text-dark" for="flexRadioDefault6">
                                            Admin Only
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Descriptions</label>
                                    <div class="summernote"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Upload Attachment</label>
                                <div class="bg-light rounded p-2">
                                    <div class="profile-uploader border-bottom mb-2 pb-2">
                                        <div class="drag-upload-btn btn btn-sm btn-white border px-3">
                                            Select File
                                            <input type="file" class="form-control image-sign" multiple="">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between border-bottom mb-2 pb-2">
                                        <div class="d-flex align-items-center">
                                            <h6 class="fs-12 fw-medium me-1">Logo.zip</h6>
                                            <span class="badge badge-soft-info">21MB </span>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h6 class="fs-12 fw-medium me-1">Files.zip</h6>
                                            <span class="badge badge-soft-info">25MB </span>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Task -->

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
                        <a href="/employee-dashboard" class="btn btn-danger">Yes, Delete</a>
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