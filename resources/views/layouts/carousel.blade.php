
<!--
	It contains carousel with three slider,indicators and conterols 	
-->
<div id="bg">
	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" style="margin-top:10px;">
			<div class="item active">
				<img src="{{ asset('img/cover1.jpg') }}" alt="Info">
			</div>

			<div class="item">
				<img src="{{ asset('img/alumnireg.jpg') }}" alt="Alumni Registration">
			</div>

			<div class="item">
				<img src="{{ asset('img/studentreg.jpg') }}" alt="Student Registration">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>