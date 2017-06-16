@extends('layouts.mobileTerm')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-term.css') }}">
@endsection('css')
@section('content')
	<div class="container term">
		<div class="row1">
			<a href="{{ url('/') }}">Trang chủ</a>
			<span>></span>
			<h1>{{ $term->name }}</h1>
		</div>
		<div class="row2">
			<div class="posts">
				@php $posts = $term->post()->orderBy('id','desc')->paginate(8); @endphp
				@foreach($posts as $post)
				<div class="post">
					<h2 class="text-uppercase"><a href="{{ APIPost::getUrlByObj($post) }}">{{ $post->name }}</a></h2>
					<div class="description">
						{!! APIPost::getDescription($post->description,40) !!}... <a href="{{ APIPost::getUrlByObj($post) }}">(chi tiết)</a>
					</div>
					<div class="footer text-right">
						<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="dis-inline-block">Hỏi chuyên gia</a>
					</div>
				</div>
				@endforeach
			</div>
			<div class="my_pagination text-center">
				@if($posts->previousPageUrl())
				<a href="$posts->previousPageUrl()" class="text-uppercase">Trang trước</a>
				@endif
				@if($posts->nextPageUrl())
				<a href="$posts->nextPageUrl()" class="text-uppercase">Trang sau</a>
				@endif
			</div>
		</div>
		@php 	
			$orther = json_decode($term->orther,true);
			if(isset($orther['meta'])){
				$meta = explode(";",$orther['meta']);
			}	
		@endphp
		<div class="row3">
			@if(isset($meta))
			<div class="bg text-uppercase">Câu hỏi thường gặp</div>
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
			@endif
			<div class="table3">
				<table class="width-100 table4">
					<tr>
						<td class="bg7">
							<table class="width-100">
								<tr>
									<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/css/mobile/imgterm/term-3.png') }}" alt=""></a></td>
									<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Nếu có thắc mắc, xin mời gọi</a></td>
								</tr>
							</table>
						</td>
						<td class="bg8">
							<table class="width-100">
								<tr>
									<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/css/mobile/imgterm/term-4.png') }}" alt=""></a></td>
									<td><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<table class="width-100 table5">
					<tr>
						<td class="bg9">
							<a href="tel:1800 6181">1800-6181</a>
						</td>
						<td class="bg10">
							<a href="tel:1800 6181">Hỏi đáp trực tiếp cùng chuyên gia</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
@endsection('content')