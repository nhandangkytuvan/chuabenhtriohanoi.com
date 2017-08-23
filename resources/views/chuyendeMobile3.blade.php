<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="classification" content="hospital" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <meta name="robots" content="index, follow" />
    <meta name="creator" content="Phòng khám Nam Khang" />
    <meta name="publisher" content="Phòng khám Nam Khang" />
    <meta name="author" content="">
    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- facebook -->
    <meta property="og:site_name" content="Phòng Khám Nam Khang" />
    <meta property="og:type" content="article" />
    <meta property="og:locale " content="vi_VN">
    <meta property="fb:app_id" content="">
    <meta property="fb:admins" content="">
    <!-- link rss,sitemap -->
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset('public/upload/'.$configs[0]->avatar) }}" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/chuyendeMobile2/glyphicon-bootstrap/glyphicon-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/hover/css/hover.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/chuyendeMobile1/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/chuyendeMobile3/chuyende.css') }}">
    @yield('css')
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.popupoverlay.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/chuyende/swt_div.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/mobile/shake.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
    @yield('js')
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-104641575-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>
<body>
    <header>
        <table class="width-100">
            <tr>
                <td>
                    <a href="{{ url('/') }}"><img src="{{ asset('public/css/chuyendeMobile3/1.png') }}" alt=""></a>
                </td>
                <td class="pad6">
                    <h1 class="text-uppercase">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</h1>
                    <address class="text-uppercase">SỐ 193C1 BÀ TRIỆU - HAI BÀ TRƯNG - HÀ NỘI</address>
                </td>
                <td>
                    <a href="tel:0868.608.106"><img src="{{ asset('public/css/chuyendeMobile3/2.png') }}" alt=""></a>
                </td>
                <td class="pad6">
                    <div class="s1">ĐƯỜNG DÂY NÓNG 24H:</div>
                    <div class="s2"><a href="tel:0868.608.106">0868.608.106</a></div>
                    <div class="s1">Thời gian mở cửa: 8:00 - 20:00</div>
                </td>
            </tr>
        </table>
    </header>
    <div class="banner">
        <div class="myslick1">
            <div class="img">
                <img src="{{ asset('public/css/chuyendeMobile3/3.png') }}" alt="" class="img-responsive center-block">
            </div>
            <div class="img">
                <img src="{{ asset('public/css/chuyendeMobile3/ch3-banner.jpg') }}" alt="" class="img-responsive center-block">
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.myslick1').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 5000,
                });    
            });
        </script>
    </div>
    <main>
        <div class="r1">
            <div class="title text-center"><span>CÁC DIỆN BỆNH ĐIỀU TRỊ</span></div>
            <div class="row">
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(3) }}" class="term">Trĩ nội</a></div>
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(2) }}" class="term">Trĩ ngoại</a></div>
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(4) }}" class="term">Trĩ hỗn hợp</a></div>
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(6) }}" class="term">Áp xe hậu môn</a></div>
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(7) }}" class="term">Ngứa hậu môn</a></div>
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(8) }}" class="term">Polyp hậu môn</a></div>
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(12) }}" class="term">Rò hậu môn</a></div>
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(14) }}" class="term">Sa trực tràng</a></div>
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(13) }}" class="term">Nứt kẽ hậu môn</a></div>
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(16) }}" class="term">Đi ngoài ra máu</a></div>
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(9) }}" class="term">Đau hậu môn</a></div>
                <div class="col-xs-6"><a href="{{ APITerm::getUrlByID(17) }}" class="term">Táo bón</a></div>
            </div>
            <div class="dangkytuvan text-center">
                <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block text-uppercase">ĐĂNG ký tư vấn</a>
                <a href="tel:0868.608.106" class="text-center dis-inline-block text-uppercase">GỌI ĐIỆN TRỰC TIẾP</a>
            </div>
        </div>
        <div class="r2">
            <div class="title text-center"><span>BỆNH TRĨ LÀ GÌ?</span></div>
            <p>
                Hiện nay, cùng với sự phát triển không ngừng của xã hội, chất lượng cuộc sống không ngừng được cải thiện. Bên cạnh đó, do tác động của các yếu tố của cuộc sống hiện đại, và thói quen sinh hoạt không khoa học, mà số lượng người mắc bệnh trĩ ngày một càng tăng lên.
                Bệnh trĩ (thường được gọi là bệnh lòi dom) được hình thành sau quá trình co giãn quá mức của các đám rối tĩnh mạch trĩ ở những mô xung quanh hậu môn. Bệnh trĩ đang là một bệnh rất phổ biến ở cả Việt Nam lẫn thế giới, nó xuất hiện ở người già, trẻ nhỏ, nam, nữ không phân biệt. Tất cả mọi người đều có nguy cơ mắc bệnh trĩ rất cao khi không lo quan tâm chăm sóc tới cơ thể, sức khỏe của bản thân.
            </p>
            <div class="dangkytuvan text-center">
                <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block text-uppercase">ĐĂNG ký tư vấn</a>
                <a href="tel:0868.608.106" class="text-center dis-inline-block text-uppercase">GỌI ĐIỆN TRỰC TIẾP</a>
            </div>
        </div>
        <div class="r3">
            <div class="title text-center"><span>BIỂU HIỆN CỦA BỆNH TRĨ</span></div>
            <table class="width-100">
                <tr>
                    <td>
                        <img src="{{ asset('public/css/chuyendeMobile3/4.png') }}" alt="">
                    </td>
                    <td>
                        <p><span class="text-uppercase">Trĩ nội : </span>đại tiện ra máu, đau rát, ngứa ngáy, ẩm ướt, sưng tấy vùng hậu môn, có thể xuất hiện tình trạng búi trĩ thò ra ngoài.</p>
                    </td>
                </tr>
            </table>
            <table class="width-100">
                <tr>
                    <td>
                        <img src="{{ asset('public/css/chuyendeMobile3/5.png') }}" alt="">
                    </td>
                    <td>
                        <p><span class="text-uppercase">Trĩ ngoại : </span>búi trĩ thò ra ngoài, hậu môn ẩm ướt, đau đớn, khó chịu, đại tiện ra nhiều máu, búi trĩ có thể bị viêm thậm chí hoại tử dẫn đến có dịch nhày và mùi hôi khó chịu.</p>
                    </td>
                </tr>
            </table>
            <table class="width-100">
                <tr>
                    <td>
                        <img src="{{ asset('public/css/chuyendeMobile3/6.png') }}" alt="">
                    </td>
                    <td>
                        <p><span class="text-uppercase">Trĩ hỗn hợp : </span>đại tiện ra máu, sa búi trĩ, tiết dịch nhày, ngứa hậu môn, nứt kẽ hậu môn.</p>
                    </td>
                </tr>
            </table>
            <div class="dangkytuvan text-center">
                <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block text-uppercase">ĐĂNG ký tư vấn</a>
                <a href="tel:0868.608.106" class="text-center dis-inline-block text-uppercase">GỌI ĐIỆN TRỰC TIẾP</a>
            </div>
        </div>
        <div class="r4">
            <div class="title text-center"><span>NGUYÊN NHÂN GÂY BỆNH TRĨ</span></div>
            <div class="row">
                <div class="col-xs-4">
                    <img src="{{ asset('public/css/chuyendeMobile3/7.png') }}" alt="" class="center-block img-responsive">
                </div>
                <div class="col-xs-4">
                    <img src="{{ asset('public/css/chuyendeMobile3/8.png') }}" alt="" class="center-block img-responsive">
                </div>
                <div class="col-xs-4">
                    <img src="{{ asset('public/css/chuyendeMobile3/9.png') }}" alt="" class="center-block img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <img src="{{ asset('public/css/chuyendeMobile3/10.png') }}" alt="" class="center-block img-responsive">
                </div>
                <div class="col-xs-4">
                    <img src="{{ asset('public/css/chuyendeMobile3/11.png') }}" alt="" class="center-block img-responsive">
                </div>
                <div class="col-xs-4">
                    <img src="{{ asset('public/css/chuyendeMobile3/12.png') }}" alt="" class="center-block img-responsive">
                </div>
            </div>
            <div class="dangkytuvan text-center">
                <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block text-uppercase">ĐĂNG ký tư vấn</a>
                <a href="tel:0868.608.106" class="text-center dis-inline-block text-uppercase">GỌI ĐIỆN TRỰC TIẾP</a>
            </div>
        </div>
        <div class="r5">
            <div class="title text-center"><span>NGUY HẠI CỦA BỆNH TRĨ</span></div>
            <div class="row">
                <div class="col-xs-6">
                    <img src="{{ asset('public/css/chuyendeMobile3/13.png') }}" alt="" class="center-block img-responsive">
                </div>
                <div class="col-xs-6">
                    <img src="{{ asset('public/css/chuyendeMobile3/14.png') }}" alt="" class="center-block img-responsive">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <img src="{{ asset('public/css/chuyendeMobile3/15.png') }}" alt="" class="center-block img-responsive">
                </div>
                <div class="col-xs-6">
                    <img src="{{ asset('public/css/chuyendeMobile3/16.png') }}" alt="" class="center-block img-responsive">
                </div>
            </div>
            <div class="dangkytuvan text-center">
                <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block text-uppercase">ĐĂNG ký tư vấn</a>
                <a href="tel:0868.608.106" class="text-center dis-inline-block text-uppercase">GỌI ĐIỆN TRỰC TIẾP</a>
            </div>
        </div>
        <div class="r6">
            <div class="title text-center"><span>PHƯƠNG PHÁP ĐIỀU TRỊ BỆNH TRĨ</span></div>
            <p>
                Hiện nay phương pháp điều trị bệnh trĩ hiệu quả nhất là áp dụng kỹ thuật xâm lấn tối thiểu HCPT sử dụng trường điện dung cao tần, trong vùng có ion và các cặp ion giữa hai cực bị sốc sản sinh ra nhiệt. Khi ion di chuyển đến vị trí dịch mô kẽ cần phẫu thuật, vùng phẫu thuật sau khi se lại, máy sẽ tự động dừng lại, không gây khô, vùng bệnh thừa lập tức rụng đi.
            </p>
            <h3 class="s2">Ưu điểm của kỹ thuật HCPT</h3>
            <div class="img">
                <img src="{{ asset('public/css/chuyendeMobile3/17.png') }}" alt="" class="img-responsive center-block">
            </div>
            <div class="dangkytuvan text-center">
                <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block text-uppercase">ĐĂNG ký tư vấn</a>
                <a href="tel:0868.608.106" class="text-center dis-inline-block text-uppercase">GỌI ĐIỆN TRỰC TIẾP</a>
            </div>
        </div>
        <div class="r7">
            <div class="title text-center"><span>VÌ SAO NÊN LỰA CHỌN CHÚNG TÔI</span></div>
            <div class="myslick2">
                <div class="row">
                    <div class="col-xs-6">
                        <img src="{{ asset('public/css/chuyendeMobile3/18.png') }}" alt="" class="center-block img-responsive">
                    </div>
                    <div>
                        <h3>Đội ngũ y bác sỹ giàu kinh nghiệm: </h3>
                        <p>Phòng khám chuyên khoa Nam Khang quy tụ những chuyên gia đầu ngành từ khắp các nước. Với kinh nghiệm dày dặn, kiến thức chuyên môn sâu rộng và phương châm “lương y như từ mẫu”, các bác sĩ tại phòng khám luôn cố gắng để quá trình điều trị đạt được kết quả tốt nhất, đầy lùi bệnh trĩ ra khỏi cuộc sống.</p>
                    </div>
                </div>
            </div>
            <div class="dangkytuvan text-center">
                <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" class="text-center dis-inline-block text-uppercase">ĐĂNG ký tư vấn</a>
                <a href="tel:0868.608.106" class="text-center dis-inline-block text-uppercase">GỌI ĐIỆN TRỰC TIẾP</a>
            </div>
        </div>
    </main>
    <footer>
        <table class="width-100">
            <tr>
                <td>
                    <a href="{{ url('/') }}"><img src="{{ asset('public/css/chuyendeMobile3/1.png') }}" alt=""></a>
                </td>
                <td class="pad6">
                    <h2 class="text-uppercase">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</h2>
                    <address class="text-uppercase">SỐ 193C1 BÀ TRIỆU - HAI BÀ TRƯNG - HÀ NỘI</address>
                </td>
                <td>
                    <a href="tel:0868.608.106"><img src="{{ asset('public/css/chuyendeMobile3/2.png') }}" alt=""></a>
                </td>
                <td class="pad6">
                    <div class="s1">ĐƯỜNG DÂY NÓNG 24H:</div>
                    <div class="s2"><a href="tel:0868.608.106">0868.608.106</a></div>
                    <div class="s1">Thời gian mở cửa: 8:00 - 20:00</div>
                </td>
            </tr>
        </table>
        <div class="row row1">
            <div class="col-xs-4">
                <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Đặt lịch trực tuyến</a>
            </div>
            <div class="col-xs-4">
                <a href="tel:0868.608.106">Điện thoại tư vấn</a>
            </div>
            <div class="col-xs-4">
                <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Hỏi đáp trực tuyến</a>
            </div>
        </div>
        <div class="row row1">
            <div class="col-xs-4">
                <a href="{{ url('dia-chi-phong-kham.html') }}">Hướng dẫn chỉ đường</a>
            </div>
            <div class="col-xs-4">
                <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Đội ngũ chuyên gia</a>
            </div>
            <div class="col-xs-4">
                <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Facebook Phòng khám</a>
            </div>
        </div>
        <div class="row row2">
            <div class="col-xs-4">
                <a href="#" class="scrolltop"><img src="{{ asset('public/css/chuyendeMobile3/19.png') }}" alt=""> <span>VỀ ĐẦU TRANG</span></a>
            </div>
            <div class="col-xs-8">
                <p>
                    Các thông tin trên trang web mang tính chất tham khảo, không thể làm căn cứ để chuẩn đoán hay chữa trị, hãy làm theo sự chuẩn đoán của bác sĩ.
                </p>
            </div>
        </div>
    </footer>
    <div class="footer-toolbar toolbarHome">
        <div class="dis-table width-100 forHome">
            <div class="table-cell">
                <div class="">
                    <h3 class="text-center"><a href="tel:0868608106"><i class="glyphicon glyphicon-phone-alt"></i></a></h3>
                    <h4 class="text-center"><a href="tel:0868608106">Gọi điện</a></h4>
                </div>
            </div>
            <div class="table-cell">
                <div class="">
                    <h3 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-calendar"></i></a></h3>
                    <h4 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Đặt hẹn</a></h4>
                </div>
            </div>
            <div class="table-cell">
                <div class="">
                    <h3 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-comment"></i></a></h3>
                    <h4 class="text-center"><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Tư vấn</a></h4>
                </div>
            </div>
            <div class="table-cell">
                <div class="">
                    <h3 class="text-center"><a href="{{ url('dia-chi-phong-kham.html') }}"><i class="fa fa-map-marker"></i></a></h3>
                    <h4 class="text-center"><a href="{{ url('dia-chi-phong-kham.html') }}">Địa chỉ</a></h4>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.popupMobile1')
    @include('layouts.popupMobile3')
    <img src="{{ asset('public/images/mobile/shake.gif') }}" alt="" style="position: fixed; top: 15%;right: 0px;z-index: 999;width:55px;">
</body>
</html>
