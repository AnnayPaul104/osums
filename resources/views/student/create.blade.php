@extends('layouts.master')

@section('title', 'Student')
@section('extrastyle')
<link href="{{ URL::asset('assets/css/select2.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('assets/css/green.css')}}" rel="stylesheet">
@endsection

@section('content')

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="row">

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Student Admission<small class="text-danger"> * Feilds are required.
						</small></h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">

						<form id="myForm" class="form-horizontal form-label-left" novalidate method="post" action="{{URL::route('student.store')}}" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<h3 class="text-info">Academic Information</h3>

									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="department_id">Department: <span class="text-danger">*</span></label>
											{!!Form::select('department_id', $departments, null, ['placeholder' => 'Pick a department','class'=>'select2_single form-control has-feedback-left','tabindex'=>'-1','id'=>'department_id']) !!}
											<i class="fa fa-home form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_department_id" class="text-danger" >{{ $errors->first('department_id') }}</span>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="session">Session: <span class="text-danger">*</span></label>
											<input type="text" id="session" class="form-control has-feedback-left" name="session" data-inputmask="'mask': '9999-9999'" required />
											<i class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_session" class="text-danger" >{{ $errors->first('session') }}</span>

										</div>


									</div>
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<label for="bncReg">BNC Reg.: <span class="text-danger">*</span></label>
											<input type="text" id="bncReg" class="form-control has-feedback-left" name="bncReg" required />
											<i class="fa fa-info form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_bncReg" class="text-danger" >{{ $errors->first('bncReg') }}</span>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<label for="batchNo">Batch No: <span class="text-danger">*</span></label>
											<input type="text" id="batchNo" class="form-control has-feedback-left" name="batchNo" required />
											<i class="fa fa-info form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_batchNo" class="text-danger" >{{ $errors->first('batchNo') }}</span>
										</div>

										<div class="col-md-4 col-sm-4 col-xs-12">
											<label for="idNo">ID No: <span class="text-danger">*</span></label>
											<input type="text" id="idNo" class="form-control has-feedback-left" name="idNo" required />
											<i class="fa fa-info form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_idNo" class="text-danger" >{{ $errors->first('idNo') }}</span>
										</div>

									</div>

									<h3 class="text-info">Student Information</h3>

									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="firstName">First Name: <span class="text-danger">*</span></label>
											<input type="text" id="firstName" class="form-control has-feedback-left" name="firstName" required />
											<i class="fa fa-user form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_firstName" class="text-danger" >{{ $errors->first('firstName') }}</span>
										</div>

										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="middleName">Middle Name :</label>
											<input type="text" id="middleName" class="form-control has-feedback-left" name="middleName" data-parsley-trigger="change" required />
											<i class="fa fa-user form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_middleName" class="text-danger" >{{ $errors->first('middleName') }}</span>

										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="lastName">Last Name: <span class="text-danger">*</span></label>
											<input type="text" id="lastName" class="form-control has-feedback-left" name="lastName" required />
											<i class="fa fa-user form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_lastName" class="text-danger" >{{ $errors->first('lastName') }}</span>

										</div>

										<div class="col-md-2 col-sm-6 col-xs-12">
											<label for="gender">Gender: <span class="text-danger">*</span></label>
											<p>
												Male:
												<input type="radio" class="flat" name="gender" id="genderM" value="Male" checked="" required /> Female:
												<input type="radio" class="flat" name="gender" id="genderF" value="Female" />
											</p>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<label for="bloodgroup">Blood Group: <span class="text-danger">*</span></label><br>
											<select name="bloodgroup" id="bloodgroup" class="has-feedback-left select2_single form-control" tabindex="-1">
												<option></option>
												<option value="A+">A+</option>
												<option value="A-">A-</option>
												<option value="B+">B+</option>
												<option value="B-">B-</option>
												<option value="AB+">AB+</option>
												<option value="AB-">AB-</option>
												<option value="O+">O+</option>
												<option value="O-">O-</option>

											</select>
											<i class="fa fa-info form-control-feedback left"></i>
											<span id="msg_bloodgroup" class="text-danger" >{{ $errors->first('bloodgroup') }}</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="religion">Religion: <span class="text-danger">*</span></label><br>
											<select name="religion" id="religion" class="has-feedback-left select2_single form-control" required>
												<option value="Islam">Islam</option>
												<option value="Hindu">Hindu</option>
												<option value="Cristian">Cristian</option>
												<option value="Buddhist">Buddhist</option>
												<option value="Other">Other</option>
											</select>
											<i class="fa fa-info form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_religion" class="text-danger" >{{ $errors->first('religion') }}</span>

										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="nationality">Nationality: <span class="text-danger">*</span></label>
											<input type="text" id="nationality" value="Bangladeshi" class="form-control has-feedback-left" name="nationality" required />
											<i class="fa fa-info form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_nationality" class="text-danger" >{{ $errors->first('nationality') }}</span>
										</div>

									</div>
									<div class="row">

										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="dob">Date of birth: <span class="text-danger">*</span></label>
											<input type="text" name="dob" id="dob" class="form-control has-feedback-left" data-inputmask="'mask': '99/99/9999'" required>
											<i class="fa fa-calendar form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_dob" class="text-danger" >{{ $errors->first('dob') }}</span>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="mobileNo">Mobile No: <span class="text-danger">*</span></label>
											<input type="text" id="mobileNo" class="form-control has-feedback-left" data-inputmask="'mask': '880 9999999999'" name="mobileNo" required />
											<i class="fa fa-phone form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_mobileNo" class="text-danger" >{{ $errors->first('mobileNo') }}</span>

										</div>
									</div>
									<div class="row">

										<div class="col-md-4">
											<label for="parmanentAddress">Photograph: <span class="text-danger">*</span></label>
											<input type="file" id="photo" required="required" class="form-control has-feedback-left" name="photo">
											<i class="fa fa-file-image-o form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_photo" class="text-danger" >{{ $errors->first('photo') }}</span>

										</div>
										<div class="col-md-8">

										</div>
									</div>
									<h3 class="text-info">Guardian Information</h3>


									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="fatherName">Father Name: <span class="text-danger">*</span></label>
											<input type="text" id="fatherName" class="form-control has-feedback-left" name="fatherName" required />
											<i class="fa fa-user form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_fatherName" class="text-danger" >{{ $errors->first('fatherName') }}</span>

										</div>

										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="fatherMobileNo">Father Mobile No: <span class="text-danger">*</span></label>
											<input type="text" id="fatherMobileNo" class="form-control has-feedback-left" data-inputmask="'mask': '880 9999999999'" name="fatherMobileNo" required />
											<i class="fa fa-phone form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_fatherMobileNo" class="text-danger" >{{ $errors->first('fatherMobileNo') }}</span>

										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="motherName">Mother Name: <span class="text-danger">*</span></label>
											<input type="text" id="motherName" class="form-control has-feedback-left" name="motherName" required />
											<i class="fa fa-user form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_motherName" class="text-danger" >{{ $errors->first('motherName') }}</span>

										</div>

										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="motherMobileNo">Mother Mobile No: <span class="text-danger">*</span></label>
											<input type="text" id="motherMobileNo" class="form-control has-feedback-left" data-inputmask="'mask': '880 9999999999'" name="motherMobileNo" required />
											<i class="fa fa-phone form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_motherMobileNo" class="text-danger" >{{ $errors->first('motherMobileNo') }}</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="localGuardian">Local Guardian Name :</label>
											<input type="text" id="localGuardian" class="form-control has-feedback-left" name="localGuardian" />
											<i class="fa fa-user form-control-feedback left" aria-hidden="true"></i>

										</div>

										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="localGuardianMobileNo">Local Guardian Mobile No :</label>
											<input type="text" id="localGuardianMobileNo" class="form-control has-feedback-left" data-inputmask="'mask': '880 9999999999'" name="localGuardianMobileNo"  />
											<i class="fa fa-phone form-control-feedback left" aria-hidden="true"></i>

										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="presentAddress">Present Address: <span class="text-danger">*</span></label>
											<textarea id="presentAddress" required="required" class="form-control has-feedback-left" name="presentAddress" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="255" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
											data-parsley-validation-threshold="10"></textarea>
											<i class="fa fa-info form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_pra" class="text-danger" >{{ $errors->first('presentAddress') }}</span>
										</div>

										<div class="col-md-6 col-sm-6 col-xs-12">
											<label for="parmanentAddress">Parmanent Address: <span class="text-danger">*</span></label>
											<textarea id="parmanentAddress" required="required" class="form-control has-feedback-left" name="parmanentAddress" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="255" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
											data-parsley-validation-threshold="10"></textarea>
											<i class="fa fa-info form-control-feedback left" aria-hidden="true"></i>
											<span id="msg_paa" class="text-danger" >{{ $errors->first('parmanentAddress') }}</span>
										</div>
									</div>
									<br> <br>
										<button type="submit" class="btn btn-primary">Submit</button>


								</form>
								</div>

							</div>

					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- /page content -->
@endsection
@section('extrascript')

<script src="{{ URL::asset('assets/js/select2.full.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/icheck.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/jquery.inputmask.bundle.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/validator.min.js')}}"></script>

<script>
$(document).ready(function() {

	$(".select2_single").select2({
		placeholder: "Select a Option",
		allowClear: true
	});
	$(":input").inputmask();
});
</script>

@endsection
