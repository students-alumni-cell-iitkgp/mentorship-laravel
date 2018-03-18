@include('../home')


<style>
    select:invalid { color: gray; }
</style>

<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger" style="display: none;" href="#modal_s"></a>
<div id="modal_s" class="modal"  role="dialog" >
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<a href="/">
					<button type="button" class="close">&times;</button>
				</a>
				<h4 class="modal-title" style="text-align:center;">Forgot Password</h4>
			</div>
			<div class="modal-body">				
				<form class="form-horizontal" method="post" action="/fpassword">
					{{ csrf_field() }}


					<div class="form-group">
						<div class="col-sm-12">
							<input type="email" name="email" class="form-control" placeholder="Enter your email" required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="password" name="password" class="form-control" placeholder="Enter your new password" required="required">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm your new password" required="required">
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
				<a href="/" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("#modal_s").modal('show');
	});
</script>