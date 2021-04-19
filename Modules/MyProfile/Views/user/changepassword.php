
<?=$this->extend('layouts/master') ?>

<?= $this->section('content') ?>


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Profile Change Password-->
								<div class="d-flex flex-row">
									<!--begin::Aside-->
									<div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
										<!--begin::Profile Card-->
										<form  class="form" id="change_password" method="post" action="<?= base_url('/changepassword')?>" >
										<div class="card card-custom card-stretch">
											<!--begin::Body-->
											<div class="card-body pt-4">
											
												<!--begin::User-->
												<div class="d-flex align-items-center">
													<div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
														<div class="symbol-label" style="background-image: url(upload/user/<?= session()->get('profile_pic')?>)"></div>
														<i class="symbol-badge bg-success"></i>
													</div>
													<div>
														<a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary"><?= session()->get('name')?></a>
																										
													</div>
												</div>
												<!--end::User-->
												<!--begin::Contact-->
												<div class="py-9">
													<div class="d-flex align-items-center justify-content-between mb-2">
														<span class="font-weight-bold mr-2">Email:</span>
														<a href="#" class="text-muted text-hover-primary"><?= session()->get('email')?></a>
													</div>
												
													
												</div>
												<!--end::Contact-->
												<!--begin::Nav-->
												<div class="navi navi-bold navi-hover navi-active navi-link-rounded">
													
													<div class="navi-item mb-2">
														<a href="<?= base_url('/myprofile')?>" class="navi-link py-4">
															<span class="navi-icon mr-2">
																<span class="svg-icon">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24" />
																			<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																			<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="navi-text font-size-lg">Personal Information</span>
														</a>
													</div>
													
													<div class="navi-item mb-2">
														<a href="" class="navi-link py-4 active">
															<span class="navi-icon mr-2">
																<span class="svg-icon">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
																			<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
																			<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
															</span>
															<span class="navi-text font-size-lg">Change Password</span>
															<!-- <span class="navi-label">
																<span class="label label-light-danger label-rounded font-weight-bold">5</span>
															</span> -->
														</a>
													</div>
												
											
												</div>
												<!--end::Nav-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Profile Card-->
									</div>
									<!--end::Aside-->
									<!--begin::Content-->
									<div class="flex-row-fluid ml-lg-8">
										<!--begin::Card-->
										<div class="card card-custom">
											<!--begin::Header-->
											<div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark">Change Password</h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1">Change your account password</span>
												</div>
												<div class="card-toolbar">
													<button type="submit" class="btn btn-success mr-2">Save Changes</button>
													<a href="<?= base_url('/dashboard')?>" class="btn btn-secondary">Cancel</a>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Form-->
											
												<div class="card-body">
												
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label text-alert">Current Password</label>
														<div class="col-lg-9 col-xl-6">
															<input type="password" class="form-control form-control-lg form-control-solid mb-2" value="" name="currentpassword" id="currentpassword" placeholder="Current password" />
															<!-- <a href="#" class="text-sm font-weight-bold">Forgot password ?</a> -->
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label text-alert">New Password</label>
														<div class="col-lg-9 col-xl-6">
															<input type="password" class="form-control form-control-lg form-control-solid" value="" name="newpassword" id="newpassword" placeholder="New password" />
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label text-alert">Confirm Password</label>
														<div class="col-lg-9 col-xl-6">
															<input type="password" class="form-control form-control-lg form-control-solid" value="" name="confirmpassword" placeholder="Confirm password" id="confirmpassword"/>
														</div>
													</div>
												</div>
											</form>
											<!--end::Form-->
										</div>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Profile Change Password-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>					
					

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script type="text/javascript">
var flag='<?= session()->getFlashData("failure")?>';

if(flag==1)
{
	toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};

toastr.error("Current Password does not match", "Error");
}
if(flag==2)
{
	toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};

toastr.error("New Password already exist", "Error");
}
var flag='<?= session()->getFlashData("success")?>';
if(flag==1)
{
	toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};

toastr.success("Password change successfully.You will be redirect to login", "Success");
setTimeout(function () {
   //Redirect to login page after 5 seconds
   window.location.href= '<?=site_url('/logout')?>';
}, 5000);
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
<script>
$(document).ready(function(){

	$('#change_password').validate({
		rules:
		{
			
			currentpassword:
			{
				required:true,
				minlength:6,

			},
			newpassword:
			{
				required:true,
				minlength:6,
				passwordStrength:true,
			},
			confirmpassword:
			{
				required:true,
				//minlength:6,
				equalTo:'#newpassword',
			}
		},
		messages:
		{
			currentpassword:
			{
				required:'Please enter current password',
				minlength:'Password must be atleast 6 character',	
							
			},
			newpassword:
			{
				required:'Please enter new password',
				minlength:'New Password must be atleast 6 character',
				passwordStrength:'Password must have one special character,digit and one Uppercase alphabet',	
										
			},
			confirmpassword:
			{
				required:'Please enter confirm password',
				equalTo:'Confirm password and New Password must be same',
			}
		},
		submitHandler:function(change_password)
		{
		  change_password.submit();
		}

	});
});	
	$.validator.addMethod('passwordStrength',function (value,element){
		if(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])/.test(value))//contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character
		{
			
			 return true;
		}
		   else
		{
  
			  return false;
		}
	  });
		


</script>

<?= $this->endSection() ?>
