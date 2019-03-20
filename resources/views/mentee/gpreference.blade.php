
@include('../preference')

<style>
    select:invalid { color: gray; }
</style>

<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger" style="display: none;" href="#modal_s"></a>
<div id="modal_s" class="modal"  role="dialog" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<a href="{{ url('/givepreference') }}">
					<button type="button" class="close">&times;</button>
				</a>
				<h4 class="modal-title" style="text-align:center;">Give Your Preferences Here</h4>
			</div>
			<div class="modal-body">

				<h5 style="color: red"><center>**Please enter the exact Mentor codes as preferences. For example to enter the preference of a mentor with id '19MPXXX', enter '19MPXXX' in the input box.</center></h4>

				<form class="form-horizontal" method="post" action="{{ url('/gpreference') }}">
					{{ csrf_field() }}

					<h4>Preference 1</h4>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="pf1" class="form-control" placeholder="Preference 1 ID" minlength="7" maxlength="7" required="required">
						</div>
					</div>
					<h4>Preference 2</h4>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="pf2" class="form-control" placeholder="Preference 2 ID" minlength="7" maxlength="7" required="required">
						</div>
					</div>
					<h4>Preference 3</h4>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="pf3" class="form-control" placeholder="Preference 3 ID" minlength="7" maxlength="7" required="required">
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
				<a href="{{ url('/givepreference') }}" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#modal_s").modal('show');
	});
</script>
