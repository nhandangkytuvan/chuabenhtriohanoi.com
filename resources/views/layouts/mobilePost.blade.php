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
    <link rel="shortcut icon" href="" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/hover/css/hover.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobilePost-header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobileTerm-footer.css') }}">
    <link href="{{ asset('public/css/app/codepen.min.css') }}" rel="stylesheet">
    @yield('css')
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.popupoverlay.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
    @yield('js')
</head>
<body>
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
    <menu>
        <div class="container">
            <div class="row1">
                <div class="dis-table width-100">
                    <a href="#" class="table-cell cell1">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-2.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Giới thiệu phòng khám</span>
                    </a>
                    <a href="#" class="table-cell cell2">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-3.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Đội ngũ chuyên gia</span>
                    </a>
                </div>
            </div>
            <div class="row1">
                <div class="dis-table width-100">
                    <a href="#" class="table-cell cell3">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-4.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Đăng ký<br>đặt hẹn</span>
                    </a>
                    <a href="#" class="table-cell cell4">
                       <span><img src="{{ asset('public/css/mobile/imghome/home-5.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Tư vấn<br>trực tuyến</span>
                    </a>
                    <a href="#" class="table-cell cell5">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-6.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Hướng dẫn<br>chỉ đường</span>
                    </a>
                </div>
            </div>
        </div>
    </menu>
    @yield('banner')
    @yield('menu')
    @yield('content')
    <footer>
        <div class="container">
            <div class="bg">
                <div class="logo dis-table width-100 table1">
                    <span class="table-cell"><a href="{{ url('/') }}"><img src="{{ asset('public/css/mobile/imghome/home-1.png') }}" alt="" class="img-responsive"></a></span>
                    <span class="text-uppercase table-cell"><a href="{{ url('/') }}">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</a></span>
                </div>
                <div class="bg2">
                    <div class="line1">
                        <span class="table-cell text-center"><a href="tel:1800 - 6181"><img src="{{ asset('public/css/mobile/imghome/home-24.png') }}" alt=""></a></span>
                        <span class="table-cell text-center cell2"><a href="tel:1800 - 6181">1800 - 6181</a></span>
                        <a href="tel:1800 - 6181" class="table-cell text-uppercase text-center cell3">Bấm để gọi</a>
                    </div>
                    <div class="line2">
                        <table class="width-100 table2">
                            <tr>
                                <td><img src="{{ asset('public/css/mobile/imghome/home-25.png') }}" alt=""></td>
                                <td>8:00 - 20:00</td>
                                <td class="text-uppercase">( không nghỉ lễ tết cuối tuần)</td>
                            </tr>
                        </table>
                    </div>
                    <div class="line3">
                        <a href="#">Địa chỉ phòng khám : Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội</a>
                    </div>
                </div>
                <div class="goTop">
                    <table class="width-100">
                        <tr>
                            <td>
                                <table class="width-100">
                                    <tr>
                                        <td><a href="#"><img src="{{ asset('public/css/mobile/imghome/home-26.png') }}" alt=""></a></td>
                                        <td><a href="#" class="text-uppercase">Về đầu trang</a></td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table class="width-100">
                                    <tr>
                                        <td><a href="#"><img src="{{ asset('public/css/mobile/imghome/home-27.png') }}" alt=""></a></td>
                                        <td><a href="#" class="text-uppercase">Bác sĩ tư vấn</a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="toolbarTerm">
                <div class="dis-table width-100">
                    <div class="table-cell cell1">
                        <div class="dis-table width-100">
                            <div class="table-cell">
                                <h3 class="text-center"><a href="tel:18006181"><i class="bg bg1"></i></a></h3>
                            </div>
                            <div class="table-cell">
                                <h4 class="text-center"><a href="tel:18006181">Điện thoại tư vấn</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="table-cell cell2">
                        <div class="dis-table width-100">
                            <div class="table-cell">
                                <h3 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en"><i class="bg bg2"></i></a></h3>
                            </div>
                            <div class="table-cell">
                                <h4 class="text-center"><a href="http://swt.phongkham193.com/LR/Chatpre.aspx?id=MFI63108226&cid=1489654963660812714370&lng=en">Tư vấn trực tuyến</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="table-cell cell1">
                        <div class="dis-table width-100">
                            <div class="table-cell">
                                <h3 class="text-center"><a href="#top"><i class="bg bg3"></i></a></h3>
                            </div>
                            <div class="table-cell">
                                <h4 class="text-center"><a href="{{ url('/') }}">Quay lại</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
