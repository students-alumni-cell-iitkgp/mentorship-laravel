<!--
	This is the page for registration of mentor using modal_a
	Action of the form page uses Mentor Controller calling store function
 -->
@include('../home')


<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger" style="display: none;" href="#modal_a"></a>
<div id="modal_a" class="modal"  role="dialog" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<a href="/">
					<button type="button" class="close">&times;</button>
				</a>
				<h4 class="modal-title" style="text-align:center;">Register  Here</h4>
			</div>
			<div class="modal-body">
				
				<form class="form-horizontal" method="post" action="/mentor_registration">
					{{ csrf_field() }}

					<div class="form-group">
						<div class="col-sm-12">
							<input type="name" name="name" class="form-control" placeholder="Enter your name" required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="email" name="email" class="form-control" placeholder="Enter your email" required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="password" name="password" class="form-control" placeholder="Enter your password" required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="password" name="password_confirmation" class="form-control" placeholder="Enter your password again" required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<select name='department' class='form-control'>
								<option value='0'>Select Your Department</option>
								<option value="AE">Aerospace Engineering</option>
								<option value="AG">Agricultural & Food Engineering</option>
								<option value="AR">Architecture & Regional Planning</option>
								<option value="BT">Biotechnology</option>
								<option value="CE">Civil Engineering</option>
								<option value="CH">Chemical Engineering</option>
								<option value="CS">Computer Science & Engineering</option>
								<option value="CY">Chemistry</option>
								<option value="EE">Electrical Engineering</option>
								<option value="EC">Electronics & Electrical Communication Engineering</option>
								<option value="GG">Geology & Geophysics</option>
								<option value="HS">Humanities & Social Sciences</option>
								<option value="IM">Industrial & Systems Engineering</option>
								<option value="MA">Mathematics</option>
								<option value="ME">Mechanical Engineering</option>
								<option value="MT">Metallurgical & Materials Engineering</option>
								<option value="MI">Mining Engineering</option>
								<option value="NA">Ocean Engineering & Naval Architecture</option>
								<option value="PH">Physics</option>
								<option value="ATDC">Advanced Techology Development Center</option>
								<option value="CET">Center for Educational Technology</option>
								<option value="CYE">Cryogenic Engineering</option>
								<option value="MS">Materials Science</option>
								<option value="ORALS">Oceans, Rivers, Atmosphere and Land Sciences</option>
								<option value="CBE">P K Sinha Centre for Bio Energy</option>
								<option value="REC">Reliability Engineering Centre</option>
								<option value="RTC">Rubber Technology Centre</option>
								<option value="RDC">Rural Development Centre</option>
								<option value="GSSST">G S Sanyal School of Telecommunications</option>
								<option value="IT">Information Technology</option>
								<option value="RCIM">Ranbir and Chitra Gupta School of Infrastructure Design and Management</option>
								<option value="RMSEE">Rajendra Mishra School of Engineering Entrepreneurship</option>
								<option value="RGSIPL">Rajiv Gandhi School of Intellectual Property Law</option>
								<option value="MST">Medical Science & Technology</option>
								<option value="SB">School of Bioscience</option>
								<option value="SEST">School of Environment Science and Technology</option>
								<option value="SES">School of Energy Science</option>
								<option value="SNST">School of Nano-Science and Technology</option>
								<option value="SWS">School of Water Resources</option>
								<option value="VGSOM">Vinod Gupta School of Management</option>

							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="pout" class="form-control" placeholder="Enter Your Year Of Graduation" required="required">

						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-3">
							<h4>Preferred No. Of Mentees</h4>
						</div>
						<div class="col-sm-4">
							<select name='mentee' class="form-control">
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								<option value="4">Four</option>
							</select>
						</div>
					</div>

					<h4>In which field do you want to Mentor?</h4>

					<div class="form-group">
						<div class="col-sm-12">
							<select name='pref1' class='form-control'>
								<option value='-1'>Choose your 1st Preference</option>
								<option value='4'>Banking & Finance</option>
								<option value='23'>Entrepreneurship</option>
								<option value='24'>Consulting</option>
								<option value='25'>Data Analytics</option>
								<option value='26'>Software Development</option>
								<option value="27">Marketing</option>
								<option value="28">Civil Services</option>
								<optgroup label="Core Fields"></optgroup>
								<option value='1'>Aerospace Engineering</option>
								<option value='2'>Agricultural & Food Engineering</option>
								<option value='3'>Architecture & Regional Planning</option>
								<option value='5'>Biotechnology</option>
								<option value='6'>Civil Engineering</option>
								<option value='7'>Chemical Engineering</option>
								<option value='9'>Computer Science & Engineering</option>

								<option value='11'>Chemistry</option>
								<option value='12'>Electrical Engineering</option>
								<option value='13'>Electronics & Electrical Communication Engineering</option>

								<option value='14'>Geology & Geophysics</option>
								<option value='15'>Humanities & Social Sciences</option>
								<option value='16'>Industrial & Systems Engineering</option>
								<option value='17'>Mathematics</option>
								<option value='18'>Mechanical Engineering</option>
								<option value='19'>Metallurgical & Materials Engineering</option>
								<option value='20'>Mining Engineering</option>
								<option value='21'>Ocean Engineering & Naval Architecture</option>
								<option value='22'>Physics</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<select  onchange="f1(this)" class='form-control'>
								<option value='-1'>Do You Want More Preferences</option>
								<option >Yes</option>
								<option>No</option>
							</select>
						</div>
					</div>


					<div id="f1" style="display:none;">
						<div class="form-group">
							<div class="col-sm-12">
								<select name='pref2' class='form-control'>
									<option value='-1'>Choose your 2nd Preference</option>
									<option value='4'>Banking & Finance</option>
									<!-- <option value='10'>Management Consultancy</option> -->
									<option value='23'>Entrepreneurship</option>
									<option value='24'>Consulting</option>
									<option value='25'>Data Analytics</option>
									<option value='26'>Software Development</option>
									<option value="27">Marketing</option>
									<option value="28">Civil Services</option>
									<optgroup label="Core Fields"></optgroup>
									<option value='1'>Aerospace Engineering</option>
									<option value='2'>Agricultural & Food Engineering</option>
									<option value='3'>Architecture & Regional Planning</option>
									<option value='5'>Biotechnology</option>
									<option value='6'>Civil Engineering</option>
									<option value='7'>Chemical Engineering</option>
									<option value='9'>Computer Science & Engineering</option>

									<option value='11'>Chemistry</option>
									<option value='12'>Electrical Engineering</option>
									<option value='13'>Electronics & Electrical Communication Engineering</option>

									<option value='14'>Geology & Geophysics</option>
									<option value='15'>Humanities & Social Sciences</option>
									<option value='16'>Industrial & Systems Engineering</option>
									<option value='17'>Mathematics</option>
									<option value='18'>Mechanical Engineering</option>
									<option value='19'>Metallurgical & Materials Engineering</option>
									<option value='20'>Mining Engineering</option>
									<option value='21'>Ocean Engineering & Naval Architecture</option>
									<option value='22'>Physics</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<select name='pref3' class='form-control'>
									<option value='-1'>Choose your 3rd Preference</option>
									<option value='4'>Banking & Finance</option>
									<!-- <option value='10'>Management Consultancy</option> -->
									<option value='23'>Entrepreneurship</option>
									<option value='24'>Consulting</option>
									<option value='25'>Data Analytics</option>
									<option value='26'>Software Development</option>
									<option value="27">Marketing</option>
									<option value="28">Civil Services</option>
									<optgroup label="Core Fields"></optgroup>
									<option value='1'>Aerospace Engineering</option>
									<option value='2'>Agricultural & Food Engineering</option>
									<option value='3'>Architecture & Regional Planning</option>
									<option value='5'>Biotechnology</option>
									<option value='6'>Civil Engineering</option>
									<option value='7'>Chemical Engineering</option>
									<!-- <option value='8'>Civil Services</option> -->
									<option value='9'>Computer Science & Engineering</option>

									<option value='11'>Chemistry</option>
									<option value='12'>Electrical Engineering</option>
									<option value='13'>Electronics & Electrical Communication Engineering</option>

									<option value='14'>Geology & Geophysics</option>
									<option value='15'>Humanities & Social Sciences</option>
									<option value='16'>Industrial & Systems Engineering</option>
									<option value='17'>Mathematics</option>
									<option value='18'>Mechanical Engineering</option>
									<option value='19'>Metallurgical & Materials Engineering</option>
									<option value='20'>Mining Engineering</option>
									<option value='21'>Ocean Engineering & Naval Architecture</option>
									<option value='22'>Physics</option>
								</select>
							</div>
						</div>
					</div>

					<h3 class="center"> Contact Details </h3>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="phone" class="form-control" placeholder="Enter Your Phone No." required="required">

						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="firm" class="form-control" placeholder="Enter Your Organisation">

						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="desg" class="form-control" placeholder="Enter Your Designation">
						</div>
					</div>
					@include('layouts.errors')

					<div class="form-group"	>
						<div class="col-sm-12">
							<button   name="sub2" style="width:100%" class="btn btn-lg btn-success" >Submit</button>
						</div>
					</div>

				</form>
			</div>

			<div class="modal-footer">
				<a href="/" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$("#modal_a").modal('show');
	});
	function f1(x){
		if(x.options[x.selectedIndex].text=="Yes") {
			document.getElementById("f1").style.display="block";
		}
		else {
			document.getElementById("f1").style.display="none";
		}
	}
</script>
