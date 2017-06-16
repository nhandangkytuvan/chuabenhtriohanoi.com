@extends('layouts.mobilePost')
@section('css')
	<link href="{{ asset('public/css/mobile/post-detail.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-post.css') }}">
@endsection('css')
@section('content')
	@php $term = $post->term; @endphp
	<div class="container post">
		<h1>{{ $post->name }}</h1>
		<div class="detail">
			{!! $post->content !!}
		</div>
		<div class="more">
			<div>Bài đọc thêm</div>
			<ul>
				@php $post_pre = $term->post()->where('id','<',$post->id)->orderBy('id','desc')->first(); @endphp
				@if($post_pre)
				<li><i class="fa fa-arrow-right"></i> <a href="{{ APIPost::getUrlByObj($post_pre) }}">Bài trước : {{ $post_pre->name }}</a></li>
				@endif
				@php $post_next = $term->post()->where('id','>',$post->id)->orderBy('id','asc')->first(); @endphp
				@if($post_next)
				<li><i class="fa fa-arrow-right"></i> <a href="{{ APIPost::getUrlByObj($post_next) }}">Bài sau : {{ $post_next->name }}</a></li>
				@endif
			</ul>
		</div>
		<div class="row3">
			<div class="bg text-uppercase dis-table width-100">
				<span class="table-cell">TƯ VẤN TRỰC TRUYẾN</span>
				<span class="table-cell text-right">Đã có <strong>956</strong> người tư vấn</span>
			</div>
			<div class="table1">
				<table class="width-100">
					<tr>
						<td class="bg1"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
						<td class="bg2"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
					</tr>
				</table>
			</div>
			<div class="table2">
				<table class="width-100">
					<tr>
						<td class="bg3"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
						<td class="bg4"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
					</tr>
				</table>
			</div>
			<div class="table2">
				<table class="width-100">
					<tr>
						<td class="bg5"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
						<td class="bg6"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row4">
			<div class="title text-uppercase">
				<span class="">Tự động đăng ký hẹn nhanh chóng</span>
			</div>
			<div class="bg">
				<form action="#">
					<table class="width-100">
						<tr>
							<td>Tên :</td>
							<td><input type="text" placeholder="Mời nhập họ và tên"></td>
						</tr>
						<tr>
							<td>Số điện thoại :</td>
							<td><input type="text" placeholder="Mời nhập số điện thoại của bạn"></td>
						</tr>
						<tr>
							<td>Ngày tháng :</td>
							<td><input type="text" placeholder="Mời nhập ngày tới khám"></td>
						</tr>
						<tr>
							<td>Loại bệnh :</td>
							<td><input type="text" placeholder="Mời nhập triệu trứng"></td>
						</tr>
					</table>
					<div class="button text-center">
						<button type="submit">Đăng ký</button>
						<button type="reset">Thiết lập lại</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection('content')