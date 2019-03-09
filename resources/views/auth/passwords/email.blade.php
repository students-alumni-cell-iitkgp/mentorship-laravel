
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
                

                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
        

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
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