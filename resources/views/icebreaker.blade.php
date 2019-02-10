<!--
	It uses layouts including contents and testimonials
-->
<style type="text/css">
#quotes {
	width: 60px;
	height: 60px;
}
.container{

	font-family: Century gothic;
}

</style>
@extends('layouts.master')
@section('contents')
<br><br>
<div class="cover">
	<img src="{{ asset('img/cover.jpg') }}" width="100%"> 
</div>
<div class="container">
	<center><h2 id="testimonials"><br>Icebreaker</h2> </center>
	<hr>
	<p style="font-size: 20px">Students' Alumni Cell conducted the first ever Ice Breaker session to start the interaction between the mentors and the mentees. Ice Breaker session helps the mentee to set a good rapport with their mentors and solves the problem of lack of communication. We saw a great enthusiasm of students and the alumni mentors for this event.<br>
	Here is the pool of experiences shared by the mentees who made their first call breaking the ice and initiating a promising journey. </p>
	<hr>
	<div class="row" >
		<div class="col-md-8">
			<img src="{{ asset('img/a.png') }}" alt="" id="quotes" />

			<p style="font-size: 25px">   It was wonderful. My mentor was very friendly and interactive. He suggested me to mail or call him any time if I need any guidance. I definitely plan to have a lot of future interactions with him and make the best out of his lifetime of experience.
				<br>
				<img src="{{ asset('img/b.png') }}" alt="" id="quotes" class="pull-right" />


			</p>
		</div>

		<div class="col-md-4" >	<br><br><img src="{{ asset('img/rajarshi.jpg') }}" class="img img-circle" width="200px" height="200px">
			<br><br>	<b style="position:relative;left:60px;">Rajarshi Saha</b>
		</div>
	</div><hr>
	<div class="row">
		<div class="col-md-8">
			<img src="{{ asset('img/a.png') }}" alt="" id="quotes" />
			<p style="font-size: 25px">  It was great. Talking to someone with so much of experience (20+ years in the industry) always clears up your doubts and definitely helps in making future choices. My mentor was very humble and helpful. Thank you, Students' Alumni Cell for connecting me to him. <br>
				<img src="{{ asset('img/b.png') }}" alt="" id="quotes" class="pull-right" />


			</p>
		</div>

		<div class="col-md-4"><br><img src="{{ asset('img/vaishal.jpg') }}" class="img img-circle"  width="200px" height="200px"><br><br><b style="position:relative;left:60px;">Vaishal Shah</b>
		</div>
	</div><hr>
	<div class="row">
		<div class="col-md-8">
			<img src="{{ asset('img/a.png') }}" alt="" id="quotes" />
			<p style="font-size: 25px">My mentor is very experienced. He shared with me the detailed intricacies of a successful life, how important it is to follow your passion and continue what you love alongside your career.  It was a wonderful experience and I look forward to learning a lot from him.<br>
				<img src="{{ asset('img/b.png') }}" alt="" id="quotes" class="pull-right" />
			</p>
		</div>

		<div class="col-md-4"><img src="{{ asset('img/siddharth.jpg') }}" class="img img-circle" width="200px" height="200px"><br><br><b style="position:relative;left:60px;">Siddharth Jindal</b>
		</div>
	</p>
</div>
<hr>
<div class="col-md-8">
	<img src="{{ asset('img/a.png') }}" alt="" id="quotes" />

	<p style="font-size: 25px">
		It was nice and up to my expectations. Most of my doubts and confusions about my future plans became clear and I got some great insights related to my goals.
		<br>
		<img src="{{ asset('img/b.png') }}" alt="" id="quotes" class="pull-right" />


	</p>
</div>

<div class="col-md-4" >	<br><br><img src="{{ asset('img/jithin.jpg') }}" class="img img-circle" width="200px" height="200px">
	<br><br>	<b style="position:relative;left:60px;">Jithin Sukumar</b>
</div>
<hr>
<div class="col-md-8">
	<img src="{{ asset('img/a.png') }}" alt="" id="quotes" />

	<p style="font-size: 25px">
		Ice Breaker was really great. My mentor and I shared a whole lot of things. He was really very helpful and told me to keep in touch and even update him with my progress.
		<br>
		<img src="{{ asset('img/b.png') }}" alt="" id="quotes" class="pull-right" />


	</p>
</div>

<div class="col-md-4" >	<br><br><img src="{{ asset('img/sudutt.jpg') }}" class="img img-circle" width="200px" height="200px">
	<br><br> <b style="position:relative;left:60px;">Sudutt Uday Harne</b> <br> <br>
</div>
</div>
@include('layouts.testimonials')
@endsection('contents')
