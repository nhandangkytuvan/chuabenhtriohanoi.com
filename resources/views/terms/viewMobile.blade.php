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
				<div class="post">
					<h2 class="text-uppercase">Nguyên nhân gây ra bệnh trĩ</h2>
					<div class="description">
						Bệnh trĩ là bệnh thường gặp hiện nay, nếu kéo dài bệnh không chỉ khiến người bệnh thường xuyên gặp nhiều đau đớn, ảnh hưởng tới công việc và chất lượng cuộc sống, thậm chí là dẫn ... <a href="#">(chi tiết)</a>
					</div>
					<div class="footer text-right">
						<a href="#" class="dis-inline-block">Hỏi chuyên gia</a>
					</div>
				</div>
				<div class="post">
					<h2 class="text-uppercase">Nguyên nhân gây ra bệnh trĩ</h2>
					<div class="description">
						Bệnh trĩ là bệnh thường gặp hiện nay, nếu kéo dài bệnh không chỉ khiến người bệnh thường xuyên gặp nhiều đau đớn, ảnh hưởng tới công việc và chất lượng cuộc sống, thậm chí là dẫn ... <a href="#">(chi tiết)</a>
					</div>
					<div class="footer text-right">
						<a href="#" class="dis-inline-block">Hỏi chuyên gia</a>
					</div>
				</div>
				<div class="post">
					<h2 class="text-uppercase">Nguyên nhân gây ra bệnh trĩ</h2>
					<div class="description">
						Bệnh trĩ là bệnh thường gặp hiện nay, nếu kéo dài bệnh không chỉ khiến người bệnh thường xuyên gặp nhiều đau đớn, ảnh hưởng tới công việc và chất lượng cuộc sống, thậm chí là dẫn ... <a href="#">(chi tiết)</a>
					</div>
					<div class="footer text-right">
						<a href="#" class="dis-inline-block">Hỏi chuyên gia</a>
					</div>
				</div>
				<div class="post">
					<h2 class="text-uppercase">Nguyên nhân gây ra bệnh trĩ</h2>
					<div class="description">
						Bệnh trĩ là bệnh thường gặp hiện nay, nếu kéo dài bệnh không chỉ khiến người bệnh thường xuyên gặp nhiều đau đớn, ảnh hưởng tới công việc và chất lượng cuộc sống, thậm chí là dẫn ... <a href="#">(chi tiết)</a>
					</div>
					<div class="footer text-right">
						<a href="#" class="dis-inline-block">Hỏi chuyên gia</a>
					</div>
				</div>
				<div class="post">
					<h2 class="text-uppercase">Nguyên nhân gây ra bệnh trĩ</h2>
					<div class="description">
						Bệnh trĩ là bệnh thường gặp hiện nay, nếu kéo dài bệnh không chỉ khiến người bệnh thường xuyên gặp nhiều đau đớn, ảnh hưởng tới công việc và chất lượng cuộc sống, thậm chí là dẫn ... <a href="#">(chi tiết)</a>
					</div>
					<div class="footer text-right">
						<a href="#" class="dis-inline-block">Hỏi chuyên gia</a>
					</div>
				</div>
				<div class="post">
					<h2 class="text-uppercase">Nguyên nhân gây ra bệnh trĩ</h2>
					<div class="description">
						Bệnh trĩ là bệnh thường gặp hiện nay, nếu kéo dài bệnh không chỉ khiến người bệnh thường xuyên gặp nhiều đau đớn, ảnh hưởng tới công việc và chất lượng cuộc sống, thậm chí là dẫn ... <a href="#">(chi tiết)</a>
					</div>
					<div class="footer text-right">
						<a href="#" class="dis-inline-block">Hỏi chuyên gia</a>
					</div>
				</div>
			</div>
			<div class="my_pagination text-center">
				<a href="#" class="text-uppercase">Trang trước</a>
				<a href="#" class="text-uppercase">Trang sau</a>
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
						<td class="bg1"><a href="#">{{ $meta[0] }}</a></td>
						<td class="bg2"><a href="#">{{ $meta[1] }}</a></td>
					</tr>
				</table>
			</div>
			<div class="table2">
				<table class="width-100">
					<tr>
						<td class="bg3"><a href="#">{{ $meta[2] }}</a></td>
						<td class="bg4"><a href="#">{{ $meta[3] }}</a></td>
					</tr>
				</table>
			</div>
			<div class="table2">
				<table class="width-100">
					<tr>
						<td class="bg5"><a href="#">{{ $meta[4] }}</a></td>
						<td class="bg6"><a href="#">{{ $meta[5] }}</a></td>
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
									<td><img src="{{ asset('public/css/mobile/imgterm/term-3.png') }}" alt=""></td>
									<td>Nếu có thắc mắc, xin mời gọi </td>
								</tr>
							</table>
						</td>
						<td class="bg8">
							<table class="width-100">
								<tr>
									<td><img src="{{ asset('public/css/mobile/imgterm/term-4.png') }}" alt=""></td>
									<td>Tư vấn trực tuyến</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<table class="width-100 table5">
					<tr>
						<td class="bg9">
							<a href="#">1800-6181</a>
						</td>
						<td class="bg10">
							<a href="#">Hỏi đáp trực tiếp cùng chuyên gia</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
@endsection('content')