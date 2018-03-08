 @foreach($preferences as $preference)

 @endforeach

 
 
  @if(  auth()->user()->email == $preference['mentee_email'] )

 <?php return Redirect::back()->withErrors(['msg', 'The Message']); ?>

    @else 

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
				<a href="/givepreference">
					<button type="button" class="close">&times;</button>
				</a>
				<h4 class="modal-title" style="text-align:center;">Give Your Preferences Here</h4>
			</div>
			<div class="modal-body">


				<form class="form-horizontal" method="post" action="/gpreference">
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

					<h4>Preference 4</h4>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="pf4" class="form-control" placeholder="Preference 4 ID" minlength="7" maxlength="7" required="required">
						</div>
					</div>



					<h4>Preference 5</h4>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" name="pf5" class="form-control" placeholder="Preference 5 ID" minlength="7" maxlength="7" required="required">
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
				<a href="/givepreference" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#modal_s").modal('show');
	});
</script>

@endif