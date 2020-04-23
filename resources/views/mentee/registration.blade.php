<!--
	This is the page for registration of mentee using modal_s
	Action of the form page uses Mentee Controller calling store function
 -->
@include('../home')

<style>
    select:invalid { color: gray; }
</style>

<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger" style="display: none;" href="#modal_s"></a>
<div id="modal_s" class="modal"  role="dialog" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<a href="{{url('/')}}">
					<button type="button" class="close">&times;</button>
				</a>
				<h4 class="modal-title" style="text-align:center;">Register  Here</h4>
			</div>
			<div class="modal-body">	
				@if(session()->has('message'))
					    <div class="alert alert-success">
					        {{ session()->get('message') }}
					    </div>
					@endif			
				<form class="form-horizontal" method="post" action="{{url('/mentee_registration')}}">
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
							<input type="password" name="password_confirmation" class="form-control" placeholder="Re-Enter your password" required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<select required name='department' class='form-control'  >
								<option  value="" disabled selected >Select Your Department</option>
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
							<select required name='hall' class='form-control' class="required">
								<option  value="" disabled selected >Select Your Hall</option>
								<option value="SAM">Sir Ashutosh Mukherjee  Hall</option>
								<option value="AZ">Azad  Hall</option>
								<option value="BCR">B C Roy  Hall</option>
								<option value="BRAH">B R Ambedkar  Hall</option>
								<option value="GH">Gokhale  Hall</option>
								<option value="HJB">Homi Bhabha  Hall</option>
								<option value="JCB">J C Bose  Hall</option>
								<option value="LLR">Lala Lajpat Rai  Hall</option>
								<option value="LBS">Lal Bahadur Shastri </option>
								<option value="MMM">Madan Mohan Malviya  Hall</option>
								<option value="MS">Megnad Saha  Hall</option>
								<option value="MT">Mother Teresa  Hall</option>
								<option value="NH">Nehru  Hall</option>
								<option value="PT">Patel  Hall</option>
								<option value="RK">Radha Krishnan  Hall</option>
								<option value="RP">Rajendra Prasad  Hall</option>
								<option value="RLB">Rani Laxmibai  Hall</option>
								<option value="SN">Sarojini Naidu / Indira Gandhi  Hall</option>
								<option value="SNVH"> Sister Nivedita Hall </option>
								<option value="VS">Vidyasagar  Hall</option>
								<option value="VSRC">Vikram Sarabhai Residential Complex</option>
								<option value="ZH">Zakir Hussain  Hall</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="roll" class="form-control" placeholder="Enter your Roll No." required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="cgpa" class="form-control" placeholder="Enter your CGPA" >
						</div>
					</div>



					<div class="form-group">
						<div class="col-sm-12">							
							<select required name='current' class='form-control' class="required">
								<option  value="" disabled selected >Choose your Current Academic Year</option>
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
								<option value='5'>5</option>
				
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="q1" class="form-control" placeholder="What is the most important thing you wish to know from your mentor ?" required="required" maxlength="200">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="q2" class="form-control" placeholder="What are your major reasons for joining the mentorship programme ?" required="required" maxlength="200">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="hcity" class="form-control" placeholder="Enter your hometown/Location of Summer Internship" required="required" maxlength="40">
						</div>
</div>

					<div class="form-group" >
						<div class="col-sm-12" >
							<h4>In which field do you want to  be Mentored?</h4>
							<select required name='pref1' class='form-control' class="required">
								<option  value="" disabled selected >Choose your 1st Preference</option>
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
							<select required name='pref2' class='form-control' class="required">
								<option  value="" disabled selected >Choose your 2nd Preference</option>

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
							<select required name='pref3' class='form-control' class="required">
								<option  value="" disabled selected >Choose your 3rd Preference</option>
								<option value='4'>Banking & Finance</option>
								<!-- Deleted Management Consultancy pref 10 -->
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

					<h3>Contact Details</h3>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="phone" class="form-control" placeholder="Enter your Phone No." required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="fb" class="form-control" placeholder="Enter your Facebook Profile link" required="required">
						</div>
					</div>										
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="linkedin" class="form-control" placeholder="Enter your LinkedIn Profile link" >
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
		$("#modal_s").modal('show');
	});
</script>
