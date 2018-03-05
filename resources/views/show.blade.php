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
    <li><a href="#menu1">Instructions</a></li>
    <li><a href="#menu2">Give Preferences</a></li>
    
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <br>
    <br>
      <p>Thank you for registering! We will allot a mentor to you soon.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Instructions</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
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
