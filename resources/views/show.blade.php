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
					Thank you for registering! We will allot a {{ (auth()->user()->type=='mentor') ? 'mentee' : 'mentor' }} to you soon.
				</h4>
			</div>
		</div>
		<div class="col-md-3">

		</div>
	</div>

</div>
@endsection('content')
