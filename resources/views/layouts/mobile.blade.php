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
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile-popup.css') }}">
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
                    <img src="{{ asset('public/css/mobile/imghome/home-1.png') }}" alt="" class="center-block">
                </div>
                <h1>PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</h1>
                <div class="phone">Điện thoại：<span>1800 - 6181</span></div>
                <div class="slogan">Bởi vì chuyên khoa, cho nên chuyên nghiệp</div>
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
            <div class="row1">
                <div class="dis-table width-100">
                    <a href="#" class="table-cell cell6">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-7.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">1800 - 6181</span>
                    </a>
                    <a href="#" class="table-cell cell7">
                        <span><img src="{{ asset('public/css/mobile/imghome/home-8.png') }}" alt="" class="img-responsive"></span>
                        <span class="text-uppercase">Kỹ thuật<br>điều trị</span>
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
                    <span class="table-cell"><img src="{{ asset('public/css/mobile/imghome/home-1.png') }}" alt="" class="img-responsive"></span>
                    <span class="text-uppercase table-cell">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</span>
                </div>
                <div class="bg2"></div>
            </div>
        </div>
    </footer>
</body>
</html>
