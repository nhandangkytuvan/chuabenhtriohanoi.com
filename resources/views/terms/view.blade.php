@extends('layouts.desktop')
@section('title')
	<title>{{ $term->name }}</title>
	@include('seo.seo_term')
@endsection('title')
@section('css')
	<link rel="canonical" href="{{ APITerm::getUrlByObj($term) }}" />
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-pagination.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-sidebar.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/desktop/desktop-term.css') }}">
@endsection('css')
@section('js')
<script type="text/javascript" src="{{ asset('public/js/global/MSClass.js') }}"></script>
@endsection('js')
@section('banner')
	@if(isset($pcBanner[$term->id]))
		<div>
			<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
				<img src="{{ asset('public/pc-banner/'.$pcBanner[$term->id]) }}" alt="" class="center-block">
			</a>
		</div>
	@else
		@include('layouts.bannerDesktop')
	@endif
@endsection('banner')
@section('menu')
	@include('layouts.menuDesktop')
@endsection('menu')
@section('content')
	<!-- column -->
	<div class="row3">
		<div class="container">
			<i class="fa fa-home"></i>
			<a href="{{ url('/') }}">Trang chủ</a>
			<span>></span>
			<span>{{ $term->name }}</span>
		</div>
	</div>
	<div class="row4">
		<div class="container">
			<div class="flex flex1 justify-content-between">
				<div class="flex1col1">
					@php
						if($term->id==19) 
							$posts = $term->post()->orderBy('id','desc')->paginate(10);
						else{
							$posts = $term->post()->orderBy('id','desc')->paginate(9);
						}
					@endphp
					@if($term->term_id != 0)
					@if(isset($posts[0]))
					<div class="line1">
						<table>
							<tr>
								<td>
									<a href="{{ APIPost::getUrlByObj($posts[0]) }}"><img src="{{ asset('public/upload/'.$posts[0]->avatar) }}" alt="" width="166"></a>
								</td>
								<td>
									<h1><a href="{{ APIPost::getUrlByObj($posts[0]) }}">{{ $posts[0]->name }}</a></h1>
									<p>
										{!! APIPost::getDescription($posts[0]->description,45) !!}... <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Chi tiết</a>
									</p>
								</td>
							</tr>
						</table>
					</div>
					@php unset($posts[0]);@endphp
					@endif
					<div class="line2">
						<table class="width-100 table1">
							<tr>
								<td>
									<table class="width-100 table2">
										<tr>
											<td>Nguyên nhân</td>
											@php $post_nguyen_nhan = $term->post()->where('type',1)->first();  @endphp
											<td>
												@if($post_nguyen_nhan)
												<a href="{{ APIPost::getUrlByObj($post_nguyen_nhan) }}">{{ $post_nguyen_nhan->name }}</a>
												@endif
											</td>
										</tr>
									</table>
								</td>
								<td>
									<table class="width-100 table2">
										<tr>
											<td>Triệu trứng</td>
											@php $post_trieu_trung = $term->post()->where('type',2)->first();  @endphp
											<td>
												@if($post_trieu_trung)
												<a href="{{ APIPost::getUrlByObj($post_trieu_trung) }}">{{ $post_trieu_trung->name }}</a>
												@endif
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td>
									<table class="width-100 table2">
										<tr>
											<td>Nguy hại</td>
											@php $post_nguy_hai = $term->post()->where('type',3)->first();  @endphp
											<td>
												@if($post_nguy_hai)
												<a href="{{ APIPost::getUrlByObj($post_nguy_hai) }}">{{ $post_nguy_hai->name }}</a>
												@endif
											</td>
										</tr>
									</table>
								</td>
								<td>
									<table class="width-100 table2">
										<tr>
											<td>Điều trị</td>
											@php $post_dieu_tri = $term->post()->where('type',4)->first();  @endphp
											<td>
												@if($post_dieu_tri)
												<a href="{{ APIPost::getUrlByObj($post_dieu_tri) }}">{{ $post_dieu_tri->name }}</a>
												@endif
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					@endif
					<div class="line3">
						<div class="posts">
							@foreach($posts as $post)
							<div class="post">
								<h2 class="clearfix">
									<a href="{{ APIPost::getUrlByObj($post) }}" title="{{ $post->name }}">{{ $post->name }}</a>
									<a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" class="pull-right">Click gặp chuyên gia tư vấn</a>	
								</h2>
								<p>
									{!! APIPost::getDescription($post->description,60) !!}...
									<a href="{{ APIPost::getUrlByObj($post) }}" title="Xem thêm">【 Xem thêm 】</a>
								</p>
							</div>
							@endforeach
							<div class="my_pagination">
								{{ $posts->links() }}
							</div>
						</div>
					</div>
					<div class="line4"></div>
					<div class="footer">
						<img src="{{ asset('public/css/desktop/imgterm/term-2.png') }}" alt="" class="img-responsive center-block">
					</div>
				</div>
				<div class="flex1col2">
					@include('layouts.slidebar')
				</div>
			</div>
		</div>
	</div>
@endsection('content')