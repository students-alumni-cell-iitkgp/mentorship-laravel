@extends('profile.master')
@section('content')
<div class="container">
	<div class="row">

		<div class="col-md-3">



			<br>
			<br>

			<div style="">
				<img src="../img/user.png" class="img img-rounded" style="position:relative;left:20px;" width="200" height="180"><br><br>
				<div class="list-group">
					<ul class="list-group">
						<li class="list-group-item"><strong>Email</strong><span class="pull-right">{{ $details ->email }}</span>
						</li>
						@if($details->roll !='')
						<li class="list-group-item"><strong>Roll Number </strong><span class="pull-right">{{ $details ->roll }}</span>
						</li>
						@endif
						@if($details->phone !='')
						<li class="list-group-item"><strong>Phone Number </strong><span class="pull-right">{{ $details ->phone }}</span>
						</li>
						@endif
						@if($details->pout !='')
						<li class="list-group-item"><strong>Year of Graduation</strong><span class="pull-right">{{ $details ->pout }}</span>
						</li>
						@endif
						<li class="list-group-item"><strong>Department  </strong><span class="pull-right">{{ $details ->department }}</span>
						</li>
						@if($details->hall!='')
						<li class="list-group-item"><strong>Hall </strong><span class="pull-right">{{ $details->hall }}</span></li>
						@endif
					</ul>		
				</div>
			</div>
		</div><!--col-md-3 ends -->

		<div class="col-md-6">
			<br>

			<div style="margin:30px 0px 5px 0px" class="well">
				<h3>
					Welcome to the Student-Alumni Mentorship Programme!
				</h3>


				<h4>
		
				@if ( auth()->user()->type=='mentor')

				Thank you for registering! We will allot a mentee to you soon.
				@endif
				</h4>

				<h4>
				@if( auth()->user()->type=='mentee')
				

  <ul class="nav nav-tabs">
    <li class="active"><a href="#home">Home</a></li>
   <!-- <li><a href="#menu1">Guidelines</a></li> -->
    <li><a href="#menu2">Give Preferences</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <br>
    <br>
      <p>Thank you for registering! Fill in your preferences to get a mentor.</p>
      <h3>Guidelines</h3>
    <p>
      <h5>
1) Login with your email-ID and the password set by you during registration to see the mentor preference list. 
<br>
<br>
2) Go through the list of mentors in the “Give Preferences” tab carefully and look for the alumni whose interests / hometown / area of expertise match with yours. 
<br>
<br>
3) After carefully evaluating the list of alumni on the web page, choose five alumni who you want to be mentored by and fill their Mentor IDs in the space given below in the descending order of preference. 
<br>
<br>
<b>4) The mentors who have been marked red have been alloted to the fullest of their capacity. Kindly ignore those mentors while filling in the choices.</b>
<br>
<br>
5) After filling in the five text fields with distinct preferences, check once again and click on the submit button. 
<br>
<br>
6) Please remember that the preference once submitted cannot be changed. 
<br>
<br>
7) You might or might not get an alumnus of your preference as the allotment is strictly based on first come - first serve basis.
<br>
<br>
8) You will be informed of the mentor allotted to you via email within 15 days of preference filling.
<br>
<br>
</h5>
      </p>

    </div>
 <!--   <div id="menu1" class="tab-pane fade">
      <h3>Guidelines</h3>
  
    </div>
    -->
    <div id="menu2" class="tab-pane fade">
<br>
<br>
    	<div  align="center" >
              <a href="/givepreference">
            
            <button   name="givepreference" class="btn btn-success " > View Mentors Profile</button>
            </a>
            </div>

    </div>

  </div>

<!-- cdns are in profile master-->
  <script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
				
				@endif
				</h4>

			</div>
		</div>
		<div class="col-md-3">

		</div>
	</div>

</div>
@endsection('content')
