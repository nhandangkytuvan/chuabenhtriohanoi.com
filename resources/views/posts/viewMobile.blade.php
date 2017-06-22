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
		@php 	
			$orther = json_decode($term->orther,true);
			if(isset($orther['meta'])){
				$meta = explode(";",$orther['meta']);
			}	
		@endphp
		@if(isset($meta))
		<div class="row3">
			<div class="bg text-uppercase dis-table width-100">
				<span class="table-cell">TƯ VẤN TRỰC TRUYẾN</span>
				<span class="table-cell text-right">Đã có <strong>956</strong> người tư vấn</span>
			</div>
			<div class="table1">
				<table class="width-100">
					<tr>
						<td class="bg1"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">{{ $meta[0] }}</a></td>
						<td class="bg2"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">{{ $meta[1] }}</a></td>
					</tr>
				</table>
			</div>
			<div class="table2">
				<table class="width-100">
					<tr>
						<td class="bg3"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">{{ $meta[2] }}</a></td>
						<td class="bg4"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">{{ $meta[3] }}</a></td>
					</tr>
				</table>
			</div>
			<div class="table2">
				<table class="width-100">
					<tr>
						<td class="bg5"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">{{ $meta[4] }}</a></td>
						<td class="bg6"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">{{ $meta[5] }}</a></td>
					</tr>
				</table>
			</div>
		</div>
		@endif
		<div class="row4">
			<div class="title text-uppercase">
				<span class="">Tự động đăng ký hẹn nhanh chóng</span>
			</div>
			<div class="bg">
				<form action="{{ url('sendmail') }}" method="post" id="formMailSend">
					{{ csrf_field() }}
					<table class="width-100">
						<tr>
							<td>Tên :</td>
							<td><input name="ho_va_ten" required type="text" placeholder="Mời nhập họ và tên"></td>
						</tr>
						<tr>
							<td>Số điện thoại :</td>
							<td><input name="phone" required type="number" placeholder="Mời nhập số điện thoại của bạn"></td>
						</tr>
						<tr>
							<td>Ngày tháng :</td>
							<td><input name="thoigian" type="date" placeholder="Mời nhập ngày tới khám"></td>
						</tr>
						<tr>
							<td>Loại bệnh :</td>
							<td><input name="mieutabenh" type="text" placeholder="Mời nhập triệu trứng"></td>
						</tr>
					</table>
					<div class="button text-center">
						<button type="submit">Đăng ký</button>
						<button type="reset">Thiết lập lại</button>
					</div>
				</form>
				<script>
					$(document).ready(function() 
					{
						$('#formMailSend').ajaxForm(
						{
							beforeSubmit:function(){
								$("#myloadding").show();
							},
							success:function(){
				                alert("Cảm ơn bạn đã đăng ký!");
				                $("#myloadding").hide(); 
				                $('#formMailSend').resetForm();
							}
						});
					});
				</script>
			</div>
		</div>
	</div>
@endsection('content')
@section('back')
	<h4 class="text-center"><a href="{{ APITerm::getUrlByObj($term) }}">Quay lại</a></h4>
@endsection('back')