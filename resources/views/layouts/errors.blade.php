<!--
	It shows errors in registration and login page
-->
@if(count($errors))
<div class="form-group">
	<div class="error alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>	
	</div>
</div>
@endif