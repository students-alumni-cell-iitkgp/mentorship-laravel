<!--
	It uses layouts including carousel,contents and testimonials
-->
<style type="text/css">

	.card{
		box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.2), 0 4px 11px 0 rgba(0, 0, 0, 0.19);
	}
	.card:hover{
		box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 8px 22px 0 rgba(0, 0, 0, 0.19);
	}

</style>
@extends('layouts.master')
<br><br><br><br>
@include('layouts.carousel')
@section('contents')

<div class="container-fluid">
	<hr>
	<div class="row">

		<div style="width: 99.5%" class="row">
			<div class="col-md-1">

			</div>
			<!--
				The modal to register for mentor or mentee is in another page :
						For mentor : mentor.registration
						For mentee : mentee.registration
					-->
					<div  class="col-md-3 col-xs-12 col-sm-6" align="center" >
						<a href="/mentor_registration" style="outline: none;">
							<img class="card" src="img/mentor.png" alt="Mentor Registration" style="width:300px;margin-top: 2em">

						</a> 
					</div>

					<div class="col-md-3 col-xs-12 col-sm-6" align="center" style="border-right: 1px solid lightgrey;margin-top: 2em;">
						<a href="/mentee_registration" style="outline: none;">
							<img class="card"  src="img/ente.png" alt="Mentee Registration" style="max-width:300px;">

						</a> 
					</div>
					<div class="col-md-0 col-xs-3 col-sm-3">

					</div>

					<div class="col-md-5 col-sm-6 col-xs-6" align="center">
						<div class="row">
							<h3>LOG IN</h3><br>
					<!-- 
						The form redirects to show.blade.php which is the dashboard for profile containiny its layouts in resources/view/profile directory
						Action of the form uses ProfileController with post menthod calling store function
					-->
					<form action="/show" class="form-horizontal" method="post" role="form" accept-charset="utf-8">
						{{ csrf_field() }}
						<div class="col-md-6 col-sm-6 col-xs-6" align="center">

						</div>

						<div class="col-md-12 col-sm-12 col-xs-12 " align="center">
							<input type="email" name="email" value="" class="form-control" placeholder="Enter Your Email" required="required"  />
						</div>
						<br>
						<br>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="password" name="password" value="" class="form-control" placeholder="Enter Your Password" required="required"  />
						</div>
						<br>
						<hr>
						<div class="col-md-2" style="padding-top: -5px;margin-top: -15px;">
							<button  style="background-color: #2f4c73" type="submit" class="btn">
								Log In
							</button>
						</div>


						<div class="col-md-2" style="padding-top: -5px;margin-top: -15px;">
						<a href="/fpassword">
							<button   class="btn btn-danger">
								Forgot Password
							</button>
						</a>	
						</div>


						<br><br>
						<div class="col-md-12 col-sm-12 col-xs-12 " align="center">
							@include('layouts.errors')
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="tab-content" style="left: 25px">
		<center>
			<h2>
				Mentorship Programme
			</h2>
		</center>
		<p>
			The Student Alumni Mentorship programme was started in session 2010-11 by the Students’ Alumni Cell as an initiative to create a platform for the exchange of ideas and experience between the alumni and the current students of IIT Kharagpur.<br><br>
			With an ocean of possibilities available, students often find it difficult to decide their way out into the future. There are lots of instances where students need  a mentor who can counsel and guide them through. The alumni can improve students' insight into various aspects of life.  Their journey and personal experiences can help the students and motivate them through this pivotal phase of life. Under this programme, we invite our alumni from across the world and from different fields to interact with the students and help them build their network and gain new perspective on the possibilities open to them after graduation.
		</p>
		<hr>
		<center>
			<h2>
				Why choose this programme
			</h2>
		</center>
		<h4  style="text-align:center;background-color:	#babfc6;color:white;border-radius:8px;">
			For Mentors
		</h4>
		<p>
			As a successful member of the IIT Kharagpur alumni community, you have the power to inspire, motivate, and support IIT KGP students. Your knowledge, experience, and insight will help students open their eyes to the opportunities and challenges they will face after graduation.

			When you serve as a mentor, you form meaningful, rewarding relationships that prepare students to be better employees and leaders, inspire them to stay connected with IIT Kharagpur, and motivate them to support the next generation of students. Mentors help perpetuate, grow, and strengthen IIT Kharagpur’s global alumni network.
		</p>
		<h4  style="text-align:center;background-color:	#babfc6;color:white;border-radius:8px;">
			For Mentees
		</h4>
		<p>
			Mentees can expect to receive guidance to help them navigate various career options, learn invaluable skills for professional development and make new contacts to expand their network.

			Mentors and students form supportive relationships built on the shared experience of the KGP way of life, and connect one-on-one in a relaxed, informal way. It’s a valuable relationship that serves as an important complement to your classroom and action learning experiences, and makes for a richer KGP experience.
		</p>
		<hr>

	</div>
</div>
@include('layouts.testimonials')

@endsection('contents')