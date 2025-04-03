<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<title>Astrik Hrm | Notice Board</title>


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
                    <h2 class="mb-1">Notices</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="assetsindex"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Dashboard
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Notices</li>
                        </ol>
                    </nav>
                </div>

				

                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
						<div class="pe-1 mb-2">
							<a href="#" class="btn btn-outline-light bg-white btn-icon me-1" data-bs-toggle="tooltip"
								data-bs-placement="top" aria-label="Refresh" data-bs-original-title="Refresh">
								<i class="ti ti-refresh"></i>
							</a>
						</div>
						<div class="pe-1 mb-2">
							<button type="button" class="btn btn-outline-light bg-white btn-icon me-1"
								data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Print"
								data-bs-original-title="Print">
								<i class="ti ti-printer"></i>
							</button>
						</div>
						<div class="dropdown me-2 mb-2">
							<a href="javascript:void(0);"
								class="dropdown-toggle btn btn-light fw-medium d-inline-flex align-items-center"
								data-bs-toggle="dropdown">
								<i class="ti ti-file-export me-2"></i>Export
							</a>
							<ul class="dropdown-menu  dropdown-menu-end p-3">
								<li>
									<a href="javascript:void(0);" class="dropdown-item rounded-1"><i
											class="ti ti-file-type-pdf me-2"></i>Export as PDF</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="dropdown-item rounded-1"><i
											class="ti ti-file-type-xls me-2"></i>Export as Excel </a>
								</li>
							</ul>
						</div>
						<!-- <div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_message"
								class="btn btn-primary d-flex align-items-center"><i
									class="ti ti-square-rounded-plus me-2"></i>Add Message</a>
						</div> -->
					</div>
				</div>
				<!-- /Page Header -->

				<div class="d-flex align-items-center justify-content-end flex-wrap mb-2">
					<div class="form-check me-2 mb-3">
						<input class="form-check-input" type="checkbox">
						<span class="checkmarks">Mark & Delete All</span>
					</div>
					<div class="d-flex align-items-center flex-wrap">
						<div class="input-icon-start mb-3 me-2 position-relative">
							<span class="icon-addon">
								<i class="ti ti-calendar"></i>
							</span>
							<input type="text" class="form-control date-range bookingrange" placeholder="Select"
								value="Academic Year : 2024 / 2025">
						</div>
						<!-- <div class="dropdown mb-3">
							<a href="javascript:void(0);" class="btn btn-outline-light bg-white dropdown-toggle"
								data-bs-toggle="dropdown" data-bs-auto-close="outside"><i
									class="ti ti-filter me-2"></i>Filter</a>
							<div class="dropdown-menu drop-width">
								<form action="notice-board.php">
									<div class="d-flex align-items-center border-bottom p-3">
										<h4>Filter</h4>
									</div>
									<div class="p-3 border-bottom pb-0">
										<div class="row">
											<div class="col-md-12">
												<div class="mb-3">
													<label class="form-label">Message to</label>
													<select class="select">
														<option>Select</option>
														<option>Staff</option>
														<option>Student</option>
														<option>Teacher</option>
														<option>Parent</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="mb-3">
													<label class="form-label">Added Date</label>
													<select class="select">
														<option>Select</option>
														<option>15 May 2024</option>
														<option>16 May 2024</option>
														<option>17 May 2024</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="p-3 d-flex align-items-center justify-content-end">
										<a href="#" class="btn btn-light me-3">Reset</a>
										<button type="submit" class="btn btn-primary">Apply</button>
									</div>
								</form>
							</div>
						</div> -->
					</div>
				</div>



				<div class="row notice-board-dtl">
	<div class="accordion accordion-flush" id="accordionFlushExample">
		<div class="accordion-item  card">
			<h2 class="accordion-header ">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
					<div class="flex-column">
						<strong class="d-block mb-1 fs-20 text-dark"> Mandatory Notification to HR for Joining and Layoffs</strong>
						<p class="fs-12 text-primary"><i class="fa-regular fa-clock me-2"></i>Added on : 9 hours ago 18 May 2024</p>
					</div>
				   
				</button>
			</h2>
			<div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
				<div class="accordion-body">
					<p>This is a reminder to all departments that it is mandatory to inform the HR department in advance regarding the following:</p>

					<p>New Joiners: Notify HR at least one day prior to the joining date of any new employee with all details.</p>
					<p>Employee Layoffs: Inform HR at least one day in advance about any planned layoffs or separations.</p>
					<p>Failure to provide timely notification may result in operational disruptions, inaccurate record-keeping, and potential losses to the company. In cases of negligence, the team leader will be held accountable for discrepancies and any associated impact on the organization’s performance.</p>

					<p>This policy is essential for maintaining smooth operations and ensuring that HR can make necessary arrangements and process documentation effectively.</p>

					<p>If you have any questions or need clarification, please reach out to HR.</p>

					<p>Thank you for your cooperation and support.</p>

					<div class="py-3">
						<p class="mb-0"><b>Regards;</b></p>
						<p>HR Team</p>
					</div>
				</div>

			</div>
		</div>
		<div class="accordion-item card">
			<h2 class="accordion-header fw-semibold">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
					<div class="flex-column">
						<strong class="d-block mb-1 fs-20 text-dark">Leave Approval Update</strong>
						<p class="fs-12 text-primary"><i class="fa-regular fa-clock me-2"></i>Added on : 1 hours ago 24 April 2024</p>
					</div>
				</button>
			</h2>
			<div id="flush-collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
				<div class="accordion-body">
					<p>Great news! Your leave request for January 25 to January 27 has been reviewed and approved by your manager. Kindly ensure that all pending tasks are either completed or delegated before the start of your leave. If there are any urgent matters requiring attention during your absence, communicate with your team beforehand. Should you have further questions or need adjustments to your leave dates, feel free to contact HR.</p>

					<div class="py-3">
						<p class="mb-0"><b>Regards;</b></p>
						<p>HR Team</p>
					</div>
				</div>
			</div>
		</div>
		<div class="accordion-item card">
			<h2 class="accordion-header fw-semibold">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
					<div class="flex-column">
						<strong class="d-block mb-1 fs-20 text-dark"> New Policy Announcement</strong>
						<p class="fs-12 text-primary"><i class="fa-regular fa-clock me-2"></i>Added on : 3 hours ago 24 May 2024</p>
					</div>
				</button>
			</h2>
			<div id="flush-collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
				<div class="accordion-body">
				


					<div class="py-3">
						<p class="mb-0"><b>Regards;</b></p>
						<p>HR Team</p>
					</div>
				</div>
			</div>
		</div>

		<div class="accordion-item card">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
					<div class="flex-column">
						<strong class="d-block mb-1 fs-20 text-dark"> Mandatory Notification to HR for Joining and Layoffs</strong>
						<p class="fs-12 text-primary"><i class="fa-regular fa-clock me-2"></i>Added on :  24 May 2024</p>
					</div>
				</button>
			</h2>
			<div id="flush-collapseFour" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample">
				<div class="accordion-body">
				<p> Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body.
				Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world
						application.
					</p>
				</div>
			</div>
		</div>

		<div class="accordion-item card">
			<h2 class="accordion-header">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
					<div class="flex-column">
						<strong class="d-block mb-1 fs-20 text-dark"> Mandatory Notification to HR for Joining and Layoffs</strong>
						<p class="fs-12 text-primary"><i class="fa-regular fa-clock me-2"></i>Added on :  24 May 2024</p>
					</div>
				</button>
			</h2>
			<div id="flush-collapseFive" class="accordion-collapse collapse " data-bs-parent="#accordionFlushExample">
				<div class="accordion-body">
					<p>
						Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body.
						Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world
						application.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
				
				<div class="d-none">
				<!-- Notice Board List -->
				<div class="card board-hover mb-3">
					<div class="card-body d-md-flex align-items-center justify-content-between pb-1">
						<div class="d-flex align-items-center mb-3">
							<div class="form-check form-check-md me-2">
								<input class="form-check-input" type="checkbox">
							</div>
							<span class="bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
								<i class="ti ti-notification fs-16"></i>
							</span>
							<div>
								<h6 class="mb-1 fw-semibold">
									<a href="#" data-bs-toggle="modal" data-bs-target="#view_details">Classes
										Preparation</a>
								</h6>
								<p><i class="ti ti-calendar me-1"></i>Added on : 24 May 2024</p>
							</div>
						</div>
						<div class="d-flex align-items-center board-action mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_message"
								class="text-primary border rounded p-1 badge me-1 primary-btn-hover d-none">
								<i class="ti ti-edit-circle fs-16"></i>
							</a>
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal"
								class="text-danger border rounded p-1 badge ">
								<i class="ti ti-trash-x fs-16"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Notice Board List -->

				<!-- Notice Board List -->
				<div class="card board-hover mb-3">
					<div class="card-body d-md-flex align-items-center justify-content-between pb-1">
						<div class="d-flex align-items-center mb-3">
							<div class="form-check form-check-md me-2">
								<input class="form-check-input" type="checkbox">
							</div>
							<span class="bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
								<i class="ti ti-notification fs-16"></i>
							</span>
							<div>
								<h6 class="mb-1 fw-semibold"><a href="#" data-bs-toggle="modal"
										data-bs-target="#view_details">Fees Reminder</a></h6>
								<p><i class="ti ti-calendar me-1"></i>Added on : 12 May 2024</p>
							</div>
						</div>
						<div class="d-flex align-items-center board-action mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_message"
								class="text-primary border rounded p-1 badge me-1 primary-btn-hover d-none">
								<i class="ti ti-edit-circle fs-16"></i>
							</a>
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal"
								class="text-danger border rounded p-1 badge ">
								<i class="ti ti-trash-x fs-16"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Notice Board List -->

				<!-- Notice Board List -->
				<div class="card board-hover mb-3">
					<div class="card-body d-md-flex align-items-center justify-content-between pb-1">
						<div class="d-flex align-items-center mb-3">
							<div class="form-check form-check-md me-2">
								<input class="form-check-input" type="checkbox">
							</div>
							<span class="bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
								<i class="ti ti-notification fs-16"></i>
							</span>
							<div>
								<h6 class="mb-1 fw-semibold"><a href="#" data-bs-toggle="modal"
										data-bs-target="#view_details">Parents Teacher Meeting</a></h6>
								<p><i class="ti ti-calendar me-1"></i>Added on : 10 May 2024</p>
							</div>
						</div>
						<div class="d-flex align-items-center board-action mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_message"
								class="text-primary border rounded p-1 badge me-1 primary-btn-hover d-none">
								<i class="ti ti-edit-circle fs-16"></i>
							</a>
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal"
								class="text-danger border rounded p-1 badge ">
								<i class="ti ti-trash-x fs-16"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Notice Board List -->

				<!-- Notice Board List -->
				<div class="card board-hover mb-3">
					<div class="card-body d-md-flex align-items-center justify-content-between pb-1">
						<div class="d-flex align-items-center mb-3">
							<div class="form-check form-check-md me-2">
								<input class="form-check-input" type="checkbox">
							</div>
							<span class="bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
								<i class="ti ti-notification fs-16"></i>
							</span>
							<div>
								<h6 class="mb-1 fw-semibold"><a href="#" data-bs-toggle="modal"
										data-bs-target="#view_details">New Academic Session For Admission
										(2024-25)</a></h6>
								<p><i class="ti ti-calendar me-1"></i>Added on : 28 Apr 2024</p>
							</div>
						</div>
						<div class="d-flex align-items-center board-action mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_message"
								class="text-primary border rounded p-1 badge me-1 primary-btn-hover d-none">
								<i class="ti ti-edit-circle fs-16"></i>
							</a>
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal"
								class="text-danger border rounded p-1 badge ">
								<i class="ti ti-trash-x fs-16"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Notice Board List -->

				<!-- Notice Board List -->
				<div class="card board-hover mb-3">
					<div class="card-body d-md-flex align-items-center justify-content-between pb-1">
						<div class="d-flex align-items-center mb-3">
							<div class="form-check form-check-md me-2">
								<input class="form-check-input" type="checkbox">
							</div>
							<span class="bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
								<i class="ti ti-notification fs-16"></i>
							</span>
							<div>
								<h6 class="mb-1 fw-semibold"><a href="#" data-bs-toggle="modal"
										data-bs-target="#view_details">Staff Meeting</a></h6>
								<p><i class="ti ti-calendar me-1"></i>Added on : 23 Apr 2024</p>
							</div>
						</div>
						<div class="d-flex align-items-center board-action mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_message"
								class="text-primary border rounded p-1 badge me-1 primary-btn-hover d-none">
								<i class="ti ti-edit-circle fs-16"></i>
							</a>
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal"
								class="text-danger border rounded p-1 badge ">
								<i class="ti ti-trash-x fs-16"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Notice Board List -->

				<!-- Notice Board List -->
				<div class="card board-hover mb-3">
					<div class="card-body d-md-flex align-items-center justify-content-between pb-1">
						<div class="d-flex align-items-center mb-3">
							<div class="form-check form-check-md me-2">
								<input class="form-check-input" type="checkbox">
							</div>
							<span class="bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
								<i class="ti ti-notification fs-16"></i>
							</span>
							<div>
								<h6 class="mb-1 fw-semibold"><a href="#" data-bs-toggle="modal"
										data-bs-target="#view_details">World Environment Day
										Program.....!!!</a></h6>
								<p><i class="ti ti-calendar me-1"></i>Added on : 21 Apr 2024</p>
							</div>
						</div>
						<div class="d-flex align-items-center board-action mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_message"
								class="text-primary border rounded p-1 badge me-1 primary-btn-hover d-none">
								<i class="ti ti-edit-circle fs-16"></i>
							</a>
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal"
								class="text-danger border rounded p-1 badge ">
								<i class="ti ti-trash-x fs-16"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Notice Board List -->

				<!-- Notice Board List -->
				<div class="card board-hover mb-3">
					<div class="card-body d-md-flex align-items-center justify-content-between pb-1">
						<div class="d-flex align-items-center mb-3">
							<div class="form-check form-check-md me-2">
								<input class="form-check-input" type="checkbox">
							</div>
							<span class="bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
								<i class="ti ti-notification fs-16"></i>
							</span>
							<div>
								<h6 class="mb-1 fw-semibold"><a href="#" data-bs-toggle="modal"
										data-bs-target="#view_details">New Syllabus Instructions</a></h6>
								<p><i class="ti ti-calendar me-1"></i>Added on : 11 Mar 2024</p>
							</div>
						</div>
						<div class="d-flex align-items-center board-action mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_message"
								class="text-primary border rounded p-1 badge me-1 primary-btn-hover d-none">
								<i class="ti ti-edit-circle fs-16"></i>
							</a>
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal"
								class="text-danger border rounded p-1 badge ">
								<i class="ti ti-trash-x fs-16"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Notice Board List -->

				<!-- Notice Board List -->
				<div class="card board-hover mb-3">
					<div class="card-body d-md-flex align-items-center justify-content-between pb-1">
						<div class="d-flex align-items-center mb-3">
							<div class="form-check form-check-md me-2">
								<input class="form-check-input" type="checkbox">
							</div>
							<span class="bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
								<i class="ti ti-notification fs-16"></i>
							</span>
							<div>
								<h6 class="mb-1 fw-semibold"><a href="#" data-bs-toggle="modal"
										data-bs-target="#view_details">Exam Preparation
										Notification!</a></h6>
								<p><i class="ti ti-calendar me-1"></i>Added on : 18 Mar 2024</p>
							</div>
						</div>
						<div class="d-flex align-items-center board-action mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_message"
								class="text-primary border rounded p-1 badge me-1 primary-btn-hover d-none">
								<i class="ti ti-edit-circle fs-16"></i>
							</a>
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal"
								class="text-danger border rounded p-1 badge ">
								<i class="ti ti-trash-x fs-16"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Notice Board List -->

				<!-- Notice Board List -->
				<div class="card board-hover mb-3">
					<div class="card-body d-md-flex align-items-center justify-content-between pb-1">
						<div class="d-flex align-items-center mb-3">
							<div class="form-check form-check-md me-2">
								<input class="form-check-input" type="checkbox">
							</div>
							<span class="bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
								<i class="ti ti-notification fs-16"></i>
							</span>
							<div>
								<h6 class="mb-1 fw-semibold"><a href="#" data-bs-toggle="modal"
										data-bs-target="#view_details">Gandhi Jayanti Programmed</a></h6>
								<p><i class="ti ti-calendar me-1"></i>Added on : 16 Feb 2024</p>
							</div>
						</div>
						<div class="d-flex align-items-center board-action mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_message"
								class="text-primary border rounded p-1 badge me-1 primary-btn-hover d-none">
								<i class="ti ti-edit-circle fs-16"></i>
							</a>
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal"
								class="text-danger border rounded p-1 badge ">
								<i class="ti ti-trash-x fs-16"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Notice Board List -->

				<!-- Notice Board List -->
				<div class="card board-hover mb-3">
					<div class="card-body d-md-flex align-items-center justify-content-between pb-1">
						<div class="d-flex align-items-center mb-3">
							<div class="form-check form-check-md me-2">
								<input class="form-check-input" type="checkbox">
							</div>
							<span class="bg-soft-primary text-primary avatar avatar-md me-2 br-5 flex-shrink-0">
								<i class="ti ti-notification fs-16"></i>
							</span>
							<div>
								<h6 class="mb-1 fw-semibold"><a href="#" data-bs-toggle="modal"
										data-bs-target="#view_details">Republic Day Celebration</a></h6>
								<p><i class="ti ti-calendar me-1"></i>Added on : 24 Jan 2024</p>
							</div>
						</div>
						<div class="d-flex align-items-center board-action mb-3">
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_message"
								class="text-primary border rounded p-1 badge me-1 primary-btn-hover d-none">
								<i class="ti ti-edit-circle fs-16"></i>
							</a>
							<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-modal"
								class="text-danger border rounded p-1 badge ">
								<i class="ti ti-trash-x fs-16"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Notice Board List -->

				<!-- <div class="text-center">
					<a href="#" class="btn btn-primary"><i class="ti ti-loader-3 me-2"></i>Load More</a>
				</div> -->

				</div>

			</div>

			<?php include 'includes/footer.php'; ?>
		</div>
		<!-- /Page Wrapper -->

		

		<!-- Edit Messase -->
		<div class="modal fade" id="edit_message">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Message</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="notice-board.html">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Title</label>
										<input type="text" class="form-control" placeholder="Enter Title"
											value="Fees Reminder">
									</div>
									<div class="mb-3">
										<label class="form-label">Notice Date</label>
										<div class="date-pic">
											<input type="text" class="form-control datetimepicker"
												placeholder="15 May 2024">
											<span class="cal-icon"><i class="ti ti-calendar"></i></span>
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label">Publish On</label>
										<div class="date-pic">
											<input type="text" class="form-control datetimepicker"
												placeholder="15 May 2024">
											<span class="cal-icon"><i class="ti ti-calendar"></i></span>
										</div>
									</div>
									<div class="mb-3">
										<div class="bg-light p-3 pb-2 rounded">
											<div class="mb-3">
												<label class="form-label">Attachment</label>
												<p>Upload size of 4MB, Accepted Format PDF</p>
											</div>
											<div class="d-flex align-items-center flex-wrap">
												<div class="btn btn-primary drag-upload-btn mb-2 me-2">
													<i class="ti ti-file-upload me-1"></i>Upload
													<input type="file" class="form-control image_sign" multiple="">
												</div>
												<p class="mb-2">Fees_Structure.pdf</p>
											</div>
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label">Message</label>
										<textarea class="form-control" rows="4"
											placeholder="Add Comment">Please clear the outstanding dues for the school fees on the urgent basis.</textarea>
									</div>
									<div class="mb-0">
										<label class="form-label">Message To</label>
										<div class="row">
											<div class="col-md-6">
												<div class="form-check form-check-md mb-1">
													<input class="form-check-input" type="checkbox">
													<span>Student</span>
												</div>
												<div class="form-check form-check-md mb-1">
													<input class="form-check-input" type="checkbox">
													<span>Parent</span>
												</div>
												<div class="form-check form-check-md mb-1">
													<input class="form-check-input" type="checkbox">
													<span>Admin</span>
												</div>
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
													<span>Teacher</span>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-check-md mb-1">
													<input class="form-check-input" type="checkbox">
													<span>Accountant</span>
												</div>
												<div class="form-check form-check-md mb-1">
													<input class="form-check-input" type="checkbox">
													<span>Librarian</span>
												</div>
												<div class="form-check form-check-md mb-1">
													<input class="form-check-input" type="checkbox">
													<span>Receptionist</span>
												</div>
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
													<span>Super Admin</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Messase -->

		<!-- View Details -->
		<div class="modal fade" id="view_details">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Leaves Reminder</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body pb-0">
						<div class="mb-3">
							<p class="mb-1">Dear Employee,</p>
							<p>As your leave period has concluded, we’re excited to have you back and look forward to your continued contributions.</p>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Notice Date</label>
									<p class="d-flex align-items-center"><i class="ti ti-calendar me-1"></i>15 May 2024
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Publish On</label>
									<p class="d-flex align-items-center"><i class="ti ti-calendar me-1"></i>21 May 2024
									</p>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<div class="bg-light p-3 pb-2 rounded">
								<div class="mb-0">
									<label class="form-label">Attachment</label>
									<p class="text-primary">Leaves_structure.pdf</p>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label d-block">Message To</label>
							<span class="badge badge-soft-primary me-2">HR</span>
							<span class="badge badge-soft-primary">Employee</span>
						</div>
						<div class="border-top pt-3">
							<div class="d-flex align-items-center flex-wrap">
								<div class="d-flex align-items-center me-4 mb-3">
									<span class="avatar avatar-sm bg-light me-1"><i
											class="ti ti-calendar text-default fs-14"></i></span>Added on: 2 Apr 2024   
								</div>
								<div class="d-flex align-items-center mb-3">
									<span class="avatar avatar-sm bg-light me-1"><i
											class="ti ti-user-edit text-default fs-14"></i></span>Added By
									: HR
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /View Details -->

		</div>
	

		

	


       

   
    <!-- /Page Wrapper -->

    <!-- Delete Modal -->
		<div class="modal fade" id="delete-modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form action="notice-board.html">
						<div class="modal-body text-center">
							<span class="delete-icon">
								<i class="ti ti-trash-x"></i>
							</span>
							<h4>Confirm Deletion</h4>
							<p>You want to delete all the marked items, this cant be undone once you
								delete.</p>
							<div class="d-flex justify-content-center">
								<a href="javascript:void(0);" class="btn btn-light me-3"
									data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-danger">Yes, Delete</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->


</div>
<!-- /Main Wrapper -->


	<?php include 'includes/script.php'; ?>

</body>

</html>