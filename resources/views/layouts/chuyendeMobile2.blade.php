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
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobilePost-header.css') }}">
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
</head>
<body>
    <div class="topheader">
        <div class="container">
            <a href="tel:1800 6181"><img src="{{ asset('public/css/mobile/imghome/topheader.gif') }}" alt="" class="center-block img-responsive"></a>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="bg">
                <div class="logo">
                    <table class="width-100">
                        <tr>
                            <td>
                                <a href="{{ url('/') }}"><img src="{{ asset('public/css/mobile/imghome/home-1.png') }}" alt="" class="center-block"></a>
                            </td>
                            <td>
                                <div class="name"><a href="{{ url('/') }}">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</a></div>
                                <div class="slogan">Bởi vì chuyên khoa, cho nên chuyên nghiệp</div>
                            </td>
                            <td class="text-right">
                                <div class="text-uppercase dis-table"><span class="table-cell">Chuyên khoa</span></div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </header>
    @yield('banner')
    <menu>
        <div class="container">
            <div class="row1">
                <div class="dis-table width-100">
                    <a href="{{ APIPost::getUrlByID(19) }}" class="table-cell cell1">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-2.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Giới thiệu phòng khám</span>
                    </a>
                    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell cell2">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-3.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Đội ngũ chuyên gia</span>
                    </a>
                </div>
            </div>
            <div class="row1">
                <div class="dis-table width-100">
                    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell cell3">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-4.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Đăng ký<br>đặt hẹn</span>
                    </a>
                    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell cell4">
                       <span><img src="{{ asset('public/css/mobile/imghome/home-5.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Tư vấn<br>trực tuyến</span>
                    </a>
                    <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="table-cell cell5">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-6.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Hướng dẫn<br>chỉ đường</span>
                    </a>
                </div>
            </div>
        </div>
    </menu>
    @yield('menu')
    @yield('content')
    <footer>
        <div class="container">
            <p>Điện thoại tư vấn đặt hẹn: <a href="tel:18006181">1800 6181</a> - <a href="tel:02439.656.999">02439.656.999</a></p>
            <p>Thời gian mở cửa: <a href="tel:18006181">8:00 - 20:00</a></p>
            <p>Địa chỉ phòng khám: <a href="tel:18006181">193C1 BÀ TRIỆU – HAI BÀ TRƯNG – HÀ NỘI</a></p>
        </div>
        <div class="container footer-toolbar">
            <div class="dis-table width-100 forHome">
                <div class="table-cell">
                    <div class="">
                        <h3 class="text-center"><a href="tel:18006181"><i class="glyphicon glyphicon-phone-alt"></i></a></h3>
                        <h4 class="text-center"><a href="tel:18006181">Gọi điện</a></h4>
                    </div>
                </div>
                <div class="table-cell">
                    <div class="">
                        <h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-calendar"></i></a></h3>
                        <h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Đặt hẹn</a></h4>
                    </div>
                </div>
                <div class="table-cell">
                    <div class="">
                        <h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="fa fa-comment"></i></a></h3>
                        <h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn</a></h4>
                    </div>
                </div>
                <div class="table-cell">
                    <div class="">
                        <h3 class="text-center"><a href="{{ url('/dia-chi-phong-kham.html') }}"><i class="fa fa-map-marker"></i></a></h3>
                        <h4 class="text-center"><a href="{{ url('/dia-chi-phong-kham.html') }}">Địa chỉ</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="my_popup">
        <p>Bác sỹ đang yêu cầu được chát với bạn</p>
        <a class="my_popup_close btn-cancel">Từ chối</a>
        <a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en" class="btn-agree">Đồng ý</a>
    </div>
    <div id="myloadding"><div id="mytext">Xin chờ chút...</div></div>
    <script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
    <img src="{{ asset('public/images/mobile/shake.gif') }}" alt="" style="position: fixed; top: 15%;right: 0px;z-index: 999;width:55px;">
</body>
</html>
