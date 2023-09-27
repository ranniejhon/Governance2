<?php
include ("admin/includes/header.php");
include ("admin/includes/navbar.php");
include ("admin/includes/sidebar.php");
?>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Governance Resource Management and Information System</h1>
            <ol class="breadcrumb mb-4">
               
                <li class="breadcrumb-item active">Add School Profile</li>
            </ol>
            <div class="card mb-4">
                <ul class="nav nav-tabs" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="schoolInfo-tab" data-toggle="tab" href="#schoolInfo" role="tab" aria-controls="schoolInfo" aria-selected="true">School Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="physicalFacilities-tab" data-toggle="tab" href="#physicalFacilities" role="tab" aria-controls="physicalFacilities" aria-selected="false">Physical Facilities</a>
                    </li>
                    
                </ul>
                <div class="tab-content" id="myTabsContent">
                    <div class="tab-pane fade show active" id="schoolInfo" role="tabpanel" aria-labelledby="schoolInfo-tab">
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
										<!--begin::Card header-->
										<div class="card-header cursor-pointer">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h2 class="fw-bolder m-0">School Information</h2>
											</div>
											<!--end::Card title-->
											<!--begin::Action-->
											
											<!--end::Action-->
										</div>
										<!--begin::Card header-->
										<!--begin::Card body-->
									<form action="code.php" method="POST">	
										<div class="card-body p-9">
											<!--begin::Row-->
											<div class="row mb-7">
												<!--begin::Label-->
												<label class="col-lg-4 fw-bold text-muted"><h5>Upload School Logo</h5></label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
																<!--begin::Preview existing avatar-->
																<div class="image-input-wrapper w-150px h-150px" style="background-image: url(assets/media/avatars/deped.png)"></div>
																<!--end::Preview existing avatar-->
																<!--begin::Label-->
																<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																	<i class="bi bi-pencil-fill fs-7"></i>
																	<!--begin::Inputs-->
																	<input type="file" name="school_logo" accept=".png, .jpg, .jpeg" value =""  />
																	<input type="hidden" name="avatar_remove" />
																	<!--end::Inputs-->
																</label>
																<!--end::Label-->
															</div>
															<!--end::Image input-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->

													<div class="row mb-7">
														<!--begin::Label-->
														<label class="col-lg-4 fw-bold text-muted"><h5>Upload School Header</h5></label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8">
															<!--begin::Image input-->
															<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
																<!--begin::Preview existing avatar-->
																<div class="image-input-wrapper w-550px h-200px" style="background-image: url(assets/media/avatars/header.jpg)"></div>
																<!--end::Preview existing avatar-->
																<!--begin::Label-->
																<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																	<i class="bi bi-pencil-fill fs-7"></i>
																	<!--begin::Inputs-->
																	<input type="file" name="school_header" accept=".png, .jpg, .jpeg" value =""  />
																	<input type="hidden" name="avatar_remove" />
																	<!--end::Inputs-->
																</label>
																<!--end::Label-->																
															</div>
															<!--end::Image input-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Input group-->
											
											<?php
											include ("admin/config/dbcon2.php");

											$sql = "SELECT * FROM schools";
											$sql2 = mysqli_query($conn, $sql);
											

											?>
											<div class="row mb-7">
											<div class="col-md-5 fv-row">
											<label class="col-lg-4 fw-bold text-muted"><h5>School ID</h5></label>
                                				<!-- <input class="form-control form-control-solid" size="5" type="text" class="form-control" name="school_id"> -->
												<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select ID" id = "school_id" name="school_id" class="form-control">
													<option value="">Select School ID</option>
													<?php
													if(mysqli_num_rows($sql2)>0){

														foreach($sql2 as $row){

												

													?>
													<option value="<?=$row['school_id']?>"><?=$row['school_id']?></option>
													<?php
																			}
																				}
													?>
												</select>
											</div>
											</div>
												<div class="col-md-7 fv-row">
													<label class="col-lg-4 fw-bold text-muted"><h5>School Name</h5></label>
													<input class="form-control form-control-solid" size="5" type="text" class="form-control" name="school_name" id="school_name" readonly>
												</div>
										
											<div class="row mb-7">
											<div class="col-md-5 fv-row">
											<label class="col-lg-5 fw-bold text-muted"><h5>School Type</h5></label>
											<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Grade Level" name="school_type" class="form-control">
																<option value="URBAN">URBAN</option>
																<option value="RURAL">RURAL</option>
															</select>
                            				</div>
											<div class="col-md-7 fv-row">
											<label class="col-lg-4 fw-bold text-muted"><h5>School Address</h5></label>
                                				<input class="form-control form-control-solid" size="5" type="text" class="form-control" name="school_address">
                            				</div>
											
											</div>
											
											<div class="row mb-7">
											<div class="col-md-12 fv-row">
												<label class="col-lg-4 fw-bold text-muted"><h5>About the School</h5></label>
								
													<textarea class="form-control form-control-solid"  id="about_us" name="about_us"  rows="5" cols="100"></textarea>
											</div>
											</div>
											<div class="row mb-7">
											<div class="col-md-5 fv-row">
											<label class="col-lg-4 fw-bold text-muted"><h5>School Size</h5></label>
											<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Category" name="category" class="form-control">
																<option value="small">Small</option>
																<option value="medium">Medium</option>
																<option value="large">Large</option>
																<option value="large">Very Large</option>
												
															</select>
                            				</div>
											<div class="col-md-7 fv-row">
											<label class="col-lg-7 fw-bold text-muted"><h5>SBM Level of Practice</h5></label>
											<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Category" name="sbm" class="form-control">
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
															</select>
                            				</div>
											</div>
											<div class="row mb-7">
											<div class="col-md-5 fv-row">
											<label class="col-lg-5 fw-bold text-muted"><h5>Email Address</h5></label>
                                				<input class="form-control form-control-solid" size="5" type="text" class="form-control" name="school_email">
                            				</div>
											<div class="col-md-7 fv-row">
											<label class="col-lg-5 fw-bold text-muted"><h5>Contact Number</h5></label>
                                				<input class="form-control form-control-solid" size="5" type="text" class="form-control" name="school_number">
                            				</div>
											</div>
											<div class="row mb-7">
											<div class="col-md-5 fv-row">
											<label class="col-lg-5 fw-bold text-muted"><h5>Municipality</h5></label>
													<select class="form-select form-select-solid" id="municipality" data-control="select2" data-hide-search="true" data-placeholder="Select Category" name="Municipality" class="form-control">
														<option value="">Select Municipality</option>
														<option value="BANSALAN">BANSALAN</option>
														<option value="HAGONOY">HAGONOY</option>
														<option value="KIBLAWAN">KIBLAWAN</option>
														<option value="MAGSAYSAY">MAGSAYSAY</option>
														<option value="MALALAG">MALALAG</option>
														<option value="MATANAO">MATANAO</option>
														<option value="PADADA">PADADA</option>
														<option value="SANTA CRUZ">SANTA CRUZ</option>
														<option value="SULOP">SULOP</option>
													</select>
                            				</div>
											<div class="col-md-7 fv-row">
													<label class="col-lg-4 fw-bold text-muted"><h5>District</h5></label>
													<input class="form-control form-control-solid" size="5" type="text" class="form-control" name="district" id="district" readonly>
												</div>
											</div>
											<!--begin::Actions-->
											<div class="text-center">
													<a type="button" class="btn btn-primary me-3" href="index.php">Back</a>
														<button type="submit" name="submit_sh_info" class="btn btn-success">
																		<span class="my-button">Save</span>
																	</button>			
														<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-danger me-3">Cancel</button>
														
											</div>
													<!--end::Actions-->
											
											
											
										</div>
									</form>
										<!--end::Card body-->
									</div>
								</div>
                    <div class="tab-pane fade" id="physicalFacilities" role="tabpanel" aria-labelledby="physicalFacilities-tab">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h1 class="fw-bolder m-0">School Physical Facilities</h1>
											</div>
											<!--end::Card title-->
										</div>
										<!--begin::Card header-->
										<!--begin::Content-->
						
										<form action="code.php" method="POST">
										<div id="kt_account_profile_details" class="collapse show">
											<!--begin::Form-->
											<form id="kt_account_profile_details_form" class="form">
												<!--begin::Card body-->
												<div class="card-body border-top p-9">
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-bold fs-6"><h4>School ID</h4></label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="school_id" class="form-control form-control-lg form-control-solid" placeholder="School ID" value="" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-bold fs-6"><h4>No. of Academic Classroom in Good Condition</h4></label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="academic_classroom" class="form-control form-control-lg form-control-solid" placeholder="" value="" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-bold fs-6"><h4>No. of Academic Classroom Damaged</h4></label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="non_academic_classroom" class="form-control form-control-lg form-control-solid" placeholder="" value="" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->

														<!--begin::Input group-->
														<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-bold fs-6"><h4>No. of Academic Classrom Needing Repair</h4></label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="needing_repair" class="form-control form-control-lg form-control-solid" placeholder="" value="" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-bold fs-6"><h4>No. of Temporary Learning Space</h4>	</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="tls" class="form-control form-control-lg form-control-solid" placeholder="" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-bold fs-6"><h4>No. of Makeshift</h4></label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="makeshift" class="form-control form-control-lg form-control-solid" placeholder=""  />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-bold fs-6"><h4>No. of Arms & Chairs</h4></label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="arms_and_chairs" class="form-control form-control-lg form-control-solid" placeholder="" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-bold fs-6"><h4>No. of Tables and Chairs</h4></label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="tables_and_chairs" class="form-control form-control-lg form-control-solid" placeholder="" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-bold fs-6">
															<span class="required"><h4>Functional Clinic</h4></span>
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="tel" name="functional_clinic" class="form-control form-control-lg form-control-solid" placeholder="" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													
													<!--begin::Actions-->
											<div class="text-center">
											<button type="submit" id="kt_modal_new_target_submit" data-toggle="modal" name="update_pf" class="btn btn-success">
															<span class="my-button">Save</span>
														<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-warning me-3">Cancel</button>
														
															
														</button>
													</div>
													<!--end::Actions-->

												</div>
												<!--end::Card body-->
												<!--begin::Actions-->
												<!-- <div class="card-footer d-flex justify-content-end py-6 px-9">
													<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
													<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
												</div> -->
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
								</form>		
								</form>
										<!--end::Content-->
</div>
									</div>
								</div>
                    </div>
                    <div class="tab-pane fade" id="enrollment" role="tabpanel" aria-labelledby="enrollment-tab">
                        <!-- Content for Enrollment tab -->
                        <p>This is the Enrollment tab.</p>
                    </div>
                    <div class="tab-pane fade" id="schoolStatus" role="tabpanel" aria-labelledby="schoolStatus-tab">
                        <!-- Content for School Status tab -->
                        <p>This is the School Status tab.</p>
                    </div>
                </div>
            </div>
        </div>




<?php
include ("admin/includes/script.php");
include ("admin/includes/footer.php");
?>