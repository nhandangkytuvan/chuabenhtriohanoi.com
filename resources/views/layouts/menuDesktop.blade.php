<menu>
	<div class="container">
		<div class="dis-table table1 width-100">
			<div class="table-cell cell1 border1 hvr-sweep-to-right">
				<a href="{{ url('/') }}">Trang chủ</a>
			</div>
			<div class="table-cell cell1 border1 hvr-sweep-to-right">
				<a href="{{ APIPost::getUrlByID(19) }}">Giới thiệu<br>phòng khám</a>
			</div>
			<div class="table-cell cell1 border1 hvr-sweep-to-right">
				<a href="{{ APITerm::getUrlByID(18) }}">Kỹ thuật<br>đặc biệt</a>
			</div>
			<div class="table-cell cell1 border1 hvr-sweep-to-right">
				<a href="{{ APITerm::getUrlByID(19) }}">Bệnh án<br>điển hình</a>
			</div>
			<div class="table-cell cell1 border1 hvr-sweep-to-right">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Hỏi đáp<br>sức khỏe</a>
			</div>
			<div class="table-cell cell1 hvr-sweep-to-right">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Đăng ký<br>trực tuyến</a>
			</div>
			<div class="table-cell cell2 border1 hvr-sweep-to-right">
				<a href="{{ url('dia-chi-phong-kham.html') }}">Chỉ đường</a>
			</div>
			<div class="table-cell cell2 hvr-sweep-to-right">
				<a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Đặt hẹn<br>trực tuyến</a>
			</div>
		</div>
	</div>
</menu>
<div class="row1">
		<div class="container">
			<div class="items">
				<div class="item active">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg1">
							<a href="#">chuyên khoa<br>trĩ</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(2) }}"><i class="fa fa-circle"></i> Trĩ ngoại</a></td>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(3) }}"><i class="fa fa-circle"></i> Trĩ nội</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(4) }}"><i class="fa fa-circle"></i> Trĩ hỗn hợp</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg2">
							<a href="#">bệnh quanh<br>hậu môn</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left" style="vertical-align: top;"><a href="{{ APITerm::getUrlByID(6) }}"><i class="fa fa-circle"></i> Áp xe hậu môn</a></td>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(7) }}"><i class="fa fa-circle"></i> Ngứa rát hậu môn</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(8) }}"><i class="fa fa-circle"></i> Polyp hậu môn</a></td>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(9) }}"><i class="fa fa-circle"></i> Đau hậu môn</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(10) }}"><i class="fa fa-circle"></i> Hậu môn có vật thể lạ</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg3">
							<a href="#">chấn thương<br>hậu môn</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(12) }}"><i class="fa fa-circle"></i> Rò hậu môn</a></td>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(13) }}"><i class="fa fa-circle"></i> Nứt kẽ hậu môn</a></td>
								</tr>
								<tr>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(14) }}"><i class="fa fa-circle"></i> Sa trực tràng</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="dis-table table1">
						<div class="table-cell cell1 bg4">
							<a href="#">biểu hiện<br>thường gặp</a>
						</div>
						<div class="table-cell cell2">
							<table class="width-100">
								<tr>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(16) }}"><i class="fa fa-circle"></i> Đi ngoài ra máu</a></td>
									<td class="text-left"><a href="{{ APITerm::getUrlByID(17) }}"><i class="fa fa-circle"></i> Táo bón</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<div class="row2">
	<div class="container">
		<table class="width-100">
			<tr>
				<td>
					<span class="text-uppercase">tìm kiếm</span>
					<input type="text">
					<button><i class="fa fa-search" aria-hidden="true"></i></button>
				</td>
				<td class="text-right">
					<span class="text-uppercase">từ khóa hót :</span>
					<span> đi ngoài ra máu, ngứa hậu môn, trĩ nội, trĩ ngoại, bệnh xung quanh hậu môn, nguyên nhân dẫn đến bệnh trĩ...</span>
				</td>
			</tr>
		</table>
	</div>
</div>