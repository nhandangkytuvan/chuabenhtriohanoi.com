<div class="panel panel-default">
	<div class="panel-heading">Bộ lọc</div>
	<div class="panel-body">
		<form action="{{ url('posts') }}" method="get">
			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="term_id" class="form-control">
					<option value="">Chọn</option>
					{{ APITerm::getOptionSelectBladePost($terms,Request::input('term_id')) }}
				</select>
			</div>
			<div class="form-group">
				<label for="">Tên bài</label>
				<input type="text" name="name" class="form-control" placeholder="{{ Request::input('name') }}">
			</div>
			<div class="form-group">
				<label for="">Tác giả</label>
				<select name="user_id" class="form-control">
					<option value="">Chọn tác giả</option>
					{!! APIUser::getOption(Request::input('user_id')) !!}
				</select>
			</div>
			<div class="form-group">
				<label for="">Thời gian</label>
				<input type="date" name="created_at" class="form-control" value="{{ Request::input('created_at') }}">
			</div>
			<div class="form-group">
				<label for="">Tổng bài : {{ $posts->total() }}</label>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-search"></i> Tìm bài</button>
			</div>
		</form>
	</div>
</div>
@if(Session::has('success'))
    <div class="alert alert-success">
        <span class="glyphicon glyphicon-check"></span> 
        {!! Session::get('success') !!}
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger">
        <span class="glyphicon glyphicon-alert"></span>
        {!! Session::get('error') !!}
    </div>
@endif
@if(Session::has('info'))
    <div class="alert alert-info">
        <span class="fa fa-lightbulb-o"></span>
        {!! Session::get('info') !!}
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul style="list-style: none;">
            @foreach ($errors->all() as $error)
                <li><span class="glyphicon glyphicon-alert"></span> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif