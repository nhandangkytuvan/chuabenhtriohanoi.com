@extends('layouts.app')
@section('menu')
    @include('layouts.menuUserAdmin')
@endsection('menu')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Thay Password</div>
        <div class="panel-body">
			<form class="form-horizontal" action="{{ url('users/editPassword') }}" method="post" enctype="multipart/form-data">
			    {{ csrf_field() }}
			    <div class="form-group{{ $errors->has('password_old') ? ' has-error' : '' }}">
			        <label class="col-md-4 control-label">Password cũ</label>
			        <div class="col-md-6">
			            <input type="password" class="form-control" name="password_old" required />
			            @if ($errors->has('password_old'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_old') }}</strong>
                            </span>
                        @endif
			        </div>
			    </div>
			    <div class="form-group{{ $errors->has('password_new') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_new" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_new_confirmation" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Cập nhật
                        </button>
                    </div>
                </div>   
			</form>
        </div>
    </div>
@endsection('content')

@section('search')
    @include('layouts.notifi')
@endsection('search')