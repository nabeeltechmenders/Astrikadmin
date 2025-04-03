<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Astrik Hrm | Employee Dashboard</title>


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
                    <h2 class="mb-1">Policies</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href=""><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Dashboard
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Policies</li>
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
                          Company Policies
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
                                           <p class="mb-0 text-break">Attendance Policy</p>
                                       </a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" data-bs-toggle="tab" role="tab"
                                           aria-current="page" href="#about-vertical-custom"
                                           aria-selected="true">
                                           <p class="mb-1"><i class="feather-phone"></i></p>
                                           <p class="mb-0 text-break">About</p></a>
                                   </li>
                                   <li class="nav-item">
                                       <a class="nav-link" data-bs-toggle="tab" role="tab"
                                           aria-current="page" href="#services-vertical-custom"
                                           aria-selected="true">
                                           <p class="mb-1"><i class="feather-phone"></i></p>
                                           <p class="mb-0 text-break">Services</p></a>
                                   </li>
                                   <!-- <li class="nav-item">
                                       <a class="nav-link mb-0" data-bs-toggle="tab" role="tab"
                                           aria-current="page" href="#services-vertical-custom"
                                           aria-selected="true">
                                           <p class="mb-1"><i class="feather-headphones"></i></p>
                                           <p class="mb-0 text-break">Services</p>
                                       </a>
                                   </li> -->
                               </ul>
                           </div>
                           <div class="col-xl-9">
                               <div class="tab-content ">
                                   <div class="tab-pane show active text-muted" id="home-vertical-custom"
                                       role="tabpanel">
                                       <h5 class="mb-3">Objective: </h5>
                                       <p>The aim of this policy is to ensure regular attendance and punctuality among all employees to maintain a productive work environment.</p>
                                       <h6 class="mb-3">Attendance Recording:</h6>
                                       <ul class="policies-bullet">
                                           <li>Cut-off Date: The 25th calendar day of every month will serve as the cut-off date for attendance records.</li>
                                           <li>Late Arrival: Employees are allowed a maximum of 2 instances of late arrival within a calendar month. The 3rd late arrival will be considered as one absent day with a corresponding deduction.</li>
                                        </ul>
                                        <h6 class="mb-3">Grace Period:</h6>
                                       <ul class="policies-bullet">
                                        <li>A 15-minutes of grace period will be granted after the shift start time but the user will have to complete shift hours i.e. 09:00 Hours/day.</li>
                                        <li>Arriving beyond the designated grace period but within 90 minutes of the shift start time will be recorded as late arrival.</li>
                                        <li>Exceeding 90 minutes after the shift start time will be recorded as a half-day absence.</li>
                                        <li>Arriving three or more hours after the shift start time will result in a full-day absence</li>

                                        </ul>       
                                        <h6 class="mb-3">Reporting and Communication:</h6>

                                       <ul class="policies-bullet">
                                        <li> Employees must promptly inform their immediate supervisors/reporting authorities or the HR department in case of anticipated lateness or absence due to unforeseen circumstances.</li>
                                        <li> Any attendance-related matters will be reviewed and finalized based on your reporting authorities’ discretion and approval before 25th of the current month.</li>
                                        <li> All absences or late arrivals must be properly documented and communicated to HR for accurate record-keeping.</li>

                                        </ul>


                                        <h6 class="mb-3">Policy Enforcement:</h6>

                                       <ul class="policies-bullet">
                                        <li>Supervisors/Reporting Authorities will ensure and monitor attendance regularly.</li>
                                        <li>HR will oversee the implementation of this policy and manage the deductions as per the attendance records.</li>
                                        <li>Breaks are subject to approval by the Responsible Authority (RA). Employees must seek permission before altering or taking breaks outside the designated schedule.</li>
                                        <li>Employees are encouraged to regularly check their attendance records on the company portal. It is the responsibility of each employee to monitor their attendance and promptly report any discrepancies or errors to their Reporting Authority/HR department.</li>
                                        <li>ny concerns regarding attendance or discrepancies in attendance records must be reported by employees no later than the 25th of each month. This ensures timely resolution and accurate maintenance of attendance records.</li>
                                        <li>Employees are required to accurately record their check in and check out. Failure to do so without prior notification will result in the day being considered as an unapproved absence or a full day off.</li>
                                        <li>Exceptions to this policy will be considered for valid reasons upon submission of appropriate documentation, such as medical emergencies or other unavoidable situations.</li>
                                        <li>The break hour duration is fixed at 1 hour, and it is imperative that employees adhere strictly to this timeframe.</li>
                                        <li>Team leaders are required to ensure that their teams adhere to the designated break time, promoting consistency and compliance across the organization.</li>
                                        </ul>

                                        <h6 class="mb-3">Disciplinary Action: </h6>
                                        <ul class="policies-bullet">
                                        <li>Repeated violation of this policy may result in progressive disciplinary actions, including verbal warnings, written warnings, and potential termination as a final resort.</li>
                                        </ul>
                                 

                                        <h6 class="mb-3">Policy Review: </h6>
                                        <ul class="policies-bullet">
                                        <li>This policy will be periodically reviewed to ensure its effectiveness and relevance, and adjustments will be made as necessary.</li>

                                        </ul>
                                 
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