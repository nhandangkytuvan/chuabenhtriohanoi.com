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

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
    @yield('css')
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.popupoverlay.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/desktop.js') }}"></script>
    @yield('js')
</head>
<body>
    <header>
        <div class="container">
            <div class="dis-table table1 width-100">
                <div class="table-cell cell1 text-left">
                    <div class="dis-table table2">
                        <div class="table-cell cell1">
                            <a href="#"><img src="{{ asset('public/css/desktop/imghome/home-1.png') }}" alt=""></a>
                        </div>
                        <div class="table-cell cell2">
                            <h1>PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</h1>
                            <address>SỐ 193C1 BÀ TRIỆU - HAI BÀ TRƯNG - HÀ NỘI</address>
                        </div>
                    </div>
                </div>
                <div class="table-cell cell2 text-right">
                    <div class="dis-table table3">
                        <div class="table-cell cell1">
                            <a href="#"><img src="{{ asset('public/css/desktop/imghome/home-2.png') }}" alt=""></a>
                        </div>
                        <div class="table-cell cell2">
                            <div class="hotline">Đường dây nóng 24h : </div>
                            <div class="phone"><a href="#">1800 - 6181</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('banner')
    @yield('menu')
    @yield('content')
    <footer>
    </footer>
</body>
</html>
