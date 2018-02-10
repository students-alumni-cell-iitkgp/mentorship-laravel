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
				<h4 class="modal-title" style="text-align:center;">Register  Here</h4>
			</div>
			<div class="modal-body">


<h3><i>Student Registration will be starting soon! Stay tuned.</i></h3>
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