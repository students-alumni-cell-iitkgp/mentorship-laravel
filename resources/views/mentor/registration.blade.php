<!--
	This is the page for registration of mentor using modal_a
	Action of the form page uses Mentor Controller calling store function
 -->
@include('../home')


<style>
    select:invalid { color: gray; }
</style>


<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger" style="display: none;" href="#modal_a"></a>
<div id="modal_a" class="modal"  role="dialog" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<a href="{{url('/')}}">
					<button type="button" class="close">&times;</button>
				</a>
				<h4 class="modal-title" style="text-align:center;">Register  Here</h4>
			</div>
			<div class="modal-body">
				
				<form class="form-horizontal" method="post" action="{{ url('/mentor_registration') }}">
					{{ csrf_field() }}

					<div class="form-group">
						<div class="col-sm-12">
							<input type="name" name="name" class="form-control" placeholder="Enter your name" required="required" value="{{ old('name') }}">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="email" name="email" class="form-control" placeholder="Enter your email" required="required" value="{{ old('email') }}">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="password" name="password" class="form-control" placeholder="Enter your password" required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="password" name="password_confirmation" class="form-control" placeholder="Re-Enter your password " required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<select required name='department' class='form-control' >
								<option  value="" disabled selected >Select Your Department</option>
								<option value="AE" @if (old('department') == 'AE') selected="selected" @endif>Aerospace Engineering</option>
								<option value="AG" @if (old('department') == 'AG') selected="selected" @endif>Agricultural & Food Engineering</option>
								<option value="AR" @if (old('department') == 'AR') selected="selected" @endif>Architecture & Regional Planning</option>
								<option value="BT" @if (old('department') == 'BT') selected="selected" @endif>Biotechnology</option>
								<option value="CE" @if (old('department') == 'CE') selected="selected" @endif>Civil Engineering</option>
								<option value="CH" @if (old('department') == 'CH') selected="selected" @endif>Chemical Engineering</option>
								<option value="CS" @if (old('department') == 'CS') selected="selected" @endif>Computer Science & Engineering</option>
								<option value="CY" @if (old('department') == 'CY') selected="selected" @endif>Chemistry</option>
								<option value="EE" @if (old('department') == 'EE') selected="selected" @endif>Electrical Engineering</option>
								<option value="EC" @if (old('department') == 'EC') selected="selected" @endif>Electronics & Electrical Communication Engineering</option>
								<option value="GG" @if (old('department') == 'GG') selected="selected" @endif>Geology & Geophysics</option>
								<option value="HS" @if (old('department') == 'HS') selected="selected" @endif>Humanities  & Social Sciences</option>
								<option value="IM" @if (old('department') == 'IM') selected="selected" @endif> Industrial & Systems Engineering</option>
								<option value="MA" @if (old('department') == 'MA') selected="selected" @endif>Mathematics</option>
								<option value="ME" @if (old('department') == 'ME') selected="selected" @endif>Mechanical Engineering</option>
								<option value="MT" @if (old('department') == 'MT') selected="selected" @endif>Metallurgical & Materials Engineering</option>
								<option value="MI" @if (old('department') == 'MI') selected="selected" @endif>Mining Engineering</option>
								<option value="NA" @if (old('department') == 'NA') selected="selected" @endif>Ocean Engineering & Naval Architecture</option>
								<option value="PH" @if (old('department') == 'PH') selected="selected" @endif>Physics</option>
								<option value="ATDC" @if (old('department') == 'ATDC') selected="selected" @endif>Advanced Techology Development Center</option>
								<option value="CET" @if (old('department') == 'CET') selected="selected" @endif>Center for Educational Technology</option>
								<option value="CYE" @if (old('department') == 'CYE') selected="selected" @endif>Cryogenic Engineering</option>
								<option value="MS" @if (old('department') == 'MS') selected="selected" @endif>Materials Science</option>
								<option value="ORALS" @if (old('department') == 'ORALS') selected="selected" @endif>Oceans, Rivers, Atmosphere and Land Sciences</option>
								<option value="CBE" @if (old('department') == 'CBE') selected="selected" @endif>P K Sinha Centre for Bio Energy</option>
								<option value="REC" @if (old('department') == 'REC') selected="selected" @endif>Reliability Engineering Centre</option>
								<option value="RTC" @if (old('department') == 'RTC') selected="selected" @endif>Rubber Technology Centre</option>
								<option value="RDC" @if (old('department') == 'RDC') selected="selected" @endif>Rural Development Centre</option>
								<option value="GSSST" @if (old('department') == 'GSSST') selected="selected" @endif>G S Sanyal School of Telecommunications</option>
								<option value="IT" @if (old('department') == 'IT') selected="selected" @endif>Information Technology</option>
								<option value="RCIM" @if (old('department') == 'RCIM') selected="selected" @endif>Ranbir and Chitra Gupta School of Infrastructure Design and Management</option>
								<option value="RMSEE" @if (old('department') == 'RMSEE') selected="selected" @endif>Rajendra Mishra School of Engineering Entrepreneurship</option>
								<option value="RGSIPL" @if (old('department') == 'RGSIPL') selected="selected" @endif>Rajiv Gandhi School of Intellectual Property Law</option>
								<option value="MST" @if (old('department') == 'MST') selected="selected" @endif>Medical Science & Technology</option>
								<option value="SB" @if (old('department') == 'SB') selected="selected" @endif>School of Bioscience</option>
								<option value="SEST" @if (old('department') == 'SEST') selected="selected" @endif>School of Environment Science and Technology</option>
								<option value="SES" @if (old('department') == 'SES') selected="selected" @endif>School of Energy Science</option>
								<option value="SNST" @if (old('department') == 'SNST') selected="selected" @endif>School of Nano-Science and Technology</option>
								<option value="SWS" @if (old('department') == 'SWS') selected="selected" @endif>School of Water Resources</option>
								<option value="VGSOM" @if (old('department') == 'VGSOM') selected="selected" @endif>Vinod Gupta School of Management</option>

							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="pout" class="form-control" placeholder="Enter Your Year Of Graduation" required="required" value="{{ old('pout') }}">

						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="foe" class="form-control" placeholder="Enter Your Field Of Expertise" required="required" value="{{ old('foe') }}">

						</div>
					</div>
					
									

					<div class="form-group">
						<div class="col-sm-3">
							<h4>Preferred No. Of Mentees</h4>
						</div>
						<div class="col-sm-4">
							<select required name='mentee' class="form-control">
								<option  value="" disabled selected >No. of Mentees</option>
								<option value="2" @if (old('mentee') == '2') selected="selected" @endif>Two</option>
								<option value="3" @if (old('mentee') == '3') selected="selected" @endif>Three</option>
								<option value="4" @if (old('mentee') == '4') selected="selected" @endif>Four</option>
								<option value="5" @if (old('mentee') == '5') selected="selected" @endif>Five</option>
								<option value="6" @if (old('mentee') == '6') selected="selected" @endif>Six</option>
								<option value="7" @if (old('mentee') == '7') selected="selected" @endif>Seven</option>
								<option value="8" @if (old('mentee') == '8') selected="selected" @endif>Eight</option>
							</select>
						</div>
					</div>

					<h4>In which field do you want to Mentor?</h4>

					<div class="form-group">
						<div class="col-sm-12">
							<select required name='pref1' class='form-control'>
								<option  value="" disabled selected >Choose your 1st Preference</option>
								<option value='4' @if (old('pref1') == '4') selected="selected" @endif>Banking & Finance</option>
								<option value='23' @if (old('pref1') == '23') selected="selected" @endif>Entrepreneurship</option>
								<option value='24' @if (old('pref1') == '24') selected="selected" @endif>Consulting</option>
								<option value='25' @if (old('pref1') == '25') selected="selected" @endif>Data Analytics</option>
								<option value='26' @if (old('pref1') == '26') selected="selected" @endif>Software Development</option>
								<option value="27" @if (old('pref1') == '27') selected="selected" @endif>Marketing</option>
								<option value="28" @if (old('pref1') == '28') selected="selected" @endif>Civil Services</option>
								<optgroup label="Core Fields"></optgroup>
								<option value='1' @if (old('pref1') == '1') selected="selected" @endif>Aerospace Engineering</option>
								<option value='2' @if (old('pref1') == '2') selected="selected" @endif>Agricultural & Food Engineering</option>
								<option value='3' @if (old('pref1') == '3') selected="selected" @endif>Architecture & Regional Planning</option>
								<option value='5' @if (old('pref1') == '5') selected="selected" @endif>Biotechnology</option>
								<option value='6' @if (old('pref1') == '6') selected="selected" @endif>Civil Engineering</option>
								<option value='7' @if (old('pref1') == '7') selected="selected" @endif>Chemical Engineering</option>
								<option value='9' @if (old('pref1') == '9') selected="selected" @endif>Computer Science & Engineering</option>

								<option value='11' @if (old('pref1') == '11') selected="selected" @endif>Chemistry</option>
								<option value='12' @if (old('pref1') == '12') selected="selected" @endif>Electrical Engineering</option>
								<option value='13' @if (old('pref1') == '13') selected="selected" @endif>Electronics & Electrical Communication Engineering</option>

								<option value='14' @if (old('pref1') == '14') selected="selected" @endif>Geology & Geophysics</option>
								<option value='15' @if (old('pref1') == '15') selected="selected" @endif>Humanities & Social Sciences</option>
								<option value='16' @if (old('pref1') == '16') selected="selected" @endif>Industrial & Systems Engineering</option>
								<option value='17' @if (old('pref1') == '17') selected="selected" @endif>Mathematics</option>
								<option value='18' @if (old('pref1') == '18') selected="selected" @endif>Mechanical Engineering</option>
								<option value='19' @if (old('pref1') == '19') selected="selected" @endif>Metallurgical & Materials Engineering</option>
								<option value='20' @if (old('pref1') == '20') selected="selected" @endif>Mining Engineering</option>
								<option value='21' @if (old('pref1') == '21') selected="selected" @endif>Ocean Engineering & Naval Architecture</option>
								<option value='22' @if (old('pref1') == '22') selected="selected" @endif>Physics</option>
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
									<option   >Choose your 2nd Preference</option>
						
								<option value='4' @if (old('pref2') == '4') selected="selected" @endif>Banking & Finance</option>
								<option value='23' @if (old('pref2') == '23') selected="selected" @endif>Entrepreneurship</option>
								<option value='24' @if (old('pref2') == '24') selected="selected" @endif>Consulting</option>
								<option value='25' @if (old('pref2') == '25') selected="selected" @endif>Data Analytics</option>
								<option value='26' @if (old('pref2') == '26') selected="selected" @endif>Software Development</option>
								<option value="27" @if (old('pref2') == '27') selected="selected" @endif>Marketing</option>
								<option value="28" @if (old('pref2') == '28') selected="selected" @endif>Civil Services</option>
								<optgroup label="Core Fields"></optgroup>
								<option value='1' @if (old('pref2') == '1') selected="selected" @endif>Aerospace Engineering</option>
								<option value='2' @if (old('pref2') == '2') selected="selected" @endif>Agricultural & Food Engineering</option>
								<option value='3' @if (old('pref2') == '3') selected="selected" @endif>Architecture & Regional Planning</option>
								<option value='5' @if (old('pref2') == '5') selected="selected" @endif>Biotechnology</option>
								<option value='6' @if (old('pref2') == '6') selected="selected" @endif>Civil Engineering</option>
								<option value='7' @if (old('pref2') == '7') selected="selected" @endif>Chemical Engineering</option>
								<option value='9' @if (old('pref2') == '9') selected="selected" @endif>Computer Science & Engineering</option>

								<option value='11' @if (old('pref2') == '11') selected="selected" @endif>Chemistry</option>
								<option value='12' @if (old('pref2') == '12') selected="selected" @endif>Electrical Engineering</option>
								<option value='13' @if (old('pref2') == '13') selected="selected" @endif>Electronics & Electrical Communication Engineering</option>

								<option value='14' @if (old('pref2') == '14') selected="selected" @endif>Geology & Geophysics</option>
								<option value='15' @if (old('pref2') == '15') selected="selected" @endif>Humanities & Social Sciences</option>
								<option value='16' @if (old('pref2') == '16') selected="selected" @endif>Industrial & Systems Engineering</option>
								<option value='17' @if (old('pref2') == '17') selected="selected" @endif>Mathematics</option>
								<option value='18' @if (old('pref2') == '18') selected="selected" @endif>Mechanical Engineering</option>
								<option value='19' @if (old('pref2') == '19') selected="selected" @endif>Metallurgical & Materials Engineering</option>
								<option value='20' @if (old('pref2') == '20') selected="selected" @endif>Mining Engineering</option>
								<option value='21' @if (old('pref2') == '21') selected="selected" @endif>Ocean Engineering & Naval Architecture</option>
								<option value='22' @if (old('pref2') == '22') selected="selected" @endif>Physics</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<select  name='pref3' class='form-control'>
									<option   >Choose your 3rd Preference</option>
								<option value='4' @if (old('pref3') == '4') selected="selected" @endif>Banking & Finance</option>
								<option value='23' @if (old('pref3') == '23') selected="selected" @endif>Entrepreneurship</option>
								<option value='24' @if (old('pref3') == '24') selected="selected" @endif>Consulting</option>
								<option value='25' @if (old('pref3') == '25') selected="selected" @endif>Data Analytics</option>
								<option value='26' @if (old('pref3') == '26') selected="selected" @endif>Software Development</option>
								<option value="27" @if (old('pref3') == '27') selected="selected" @endif>Marketing</option>
								<option value="28" @if (old('pref3') == '28') selected="selected" @endif>Civil Services</option>
								<optgroup label="Core Fields"></optgroup>
								<option value='1' @if (old('pref3') == '1') selected="selected" @endif>Aerospace Engineering</option>
								<option value='2' @if (old('pref3') == '2') selected="selected" @endif>Agricultural & Food Engineering</option>
								<option value='3' @if (old('pref3') == '3') selected="selected" @endif>Architecture & Regional Planning</option>
								<option value='5' @if (old('pref3') == '5') selected="selected" @endif>Biotechnology</option>
								<option value='6' @if (old('pref3') == '6') selected="selected" @endif>Civil Engineering</option>
								<option value='7' @if (old('pref3') == '7') selected="selected" @endif>Chemical Engineering</option>
								<option value='9' @if (old('pref3') == '9') selected="selected" @endif>Computer Science & Engineering</option>

								<option value='11' @if (old('pref3') == '11') selected="selected" @endif>Chemistry</option>
								<option value='12' @if (old('pref3') == '12') selected="selected" @endif>Electrical Engineering</option>
								<option value='13' @if (old('pref3') == '13') selected="selected" @endif>Electronics & Electrical Communication Engineering</option>

								<option value='14' @if (old('pref3') == '14') selected="selected" @endif>Geology & Geophysics</option>
								<option value='15' @if (old('pref3') == '15') selected="selected" @endif>Humanities & Social Sciences</option>
								<option value='16' @if (old('pref3') == '16') selected="selected" @endif>Industrial & Systems Engineering</option>
								<option value='17' @if (old('pref3') == '17') selected="selected" @endif>Mathematics</option>
								<option value='18' @if (old('pref3') == '18') selected="selected" @endif>Mechanical Engineering</option>
								<option value='19' @if (old('pref3') == '19') selected="selected" @endif>Metallurgical & Materials Engineering</option>
								<option value='20' @if (old('pref3') == '20') selected="selected" @endif>Mining Engineering</option>
								<option value='21' @if (old('pref3') == '21') selected="selected" @endif>Ocean Engineering & Naval Architecture</option>
								<option value='22' @if (old('pref3') == '22') selected="selected" @endif>Physics</option>
								</select>
							</div>
						</div>
					</div>

					<h3 class="center"> Contact Details </h3>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="phone" class="form-control" placeholder="Enter Your Phone No." required="required" value="{{ old('phone') }}">

						</div>
					</div>

					


					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="firm" class="form-control" placeholder="Enter Your Organisation" required="required" value="{{ old('firm') }}">

						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="desg" class="form-control" placeholder="Enter Your Designation" required="required" value="{{ old('desg') }}">
						</div>
					</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>

			 @endforeach

  	<?php echo "<script type='text/javascript'>alert(' $error ');</script>"; ?>	 
	 
        </ul>
    </div>
@endif


					<div class="form-group"	>
						<div class="col-sm-12">
							<button   name="sub2" style="width:100%" class="btn btn-lg btn-success" >Submit</button>
						</div>
					</div>

				</form>
			</div>

			<div class="modal-footer">
				<a href="{{url('/')}}" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
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

