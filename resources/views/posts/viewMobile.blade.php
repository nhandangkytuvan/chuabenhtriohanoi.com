@extends('layouts.mobilePost')
@section('css')
	<link rel="stylesheet" href="{{ asset('public/css/mobile/mobile-post.css') }}">
@endsection('css')
@section('content')
	<div class="container post">
		<h1>Nguyên nhân gây ra bệnh trĩ</h1>
		<div class="detail">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, sint reiciendis delectus dolor facilis dolorum saepe dolores sunt, eum magni aliquam quaerat officiis, repellat commodi. Ipsum, deleniti suscipit nobis optio at dolorem labore cupiditate saepe ad dolore! Quasi vitae aliquam nulla iure voluptates expedita, quaerat magnam voluptatum facere, itaque eveniet consequuntur fuga culpa deleniti atque! Dolores a adipisci labore dignissimos vitae quaerat velit perferendis, atque voluptatum optio accusamus culpa saepe nulla esse est at. Quisquam odio explicabo neque voluptas, mollitia placeat quas sequi officiis aperiam provident rerum optio architecto voluptatem fuga dolore nesciunt cumque earum ratione numquam eum. Eveniet recusandae, nihil quae labore animi. Veniam similique optio maiores et rerum officiis nisi minus nihil explicabo iure eum quibusdam sint doloremque nemo accusamus vel mollitia autem atque repellat, aperiam consequatur placeat est! Repellat, praesentium porro consequatur aperiam. Facere, neque voluptatum aliquam quam totam eligendi atque officiis possimus delectus commodi dignissimos maiores natus velit ipsum, voluptatibus? Fugiat ea aperiam pariatur, dolor. Ea, cupiditate. Quibusdam ipsum assumenda, pariatur optio iusto non illum dolor molestias fuga quae eligendi nostrum eius natus hic similique quam alias. Minima, dolores. Quod similique magnam corporis numquam, labore maiores ipsam rerum eos facere est incidunt maxime iure amet accusamus!
		</div>
		<div class="more">
			<div>Bài đọc thêm</div>
			<ul>
				<li><i class="fa fa-arrow-right"></i> <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
				<li><i class="fa fa-arrow-right"></i> <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
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