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
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/hover/css/hover.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobileTerm-header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobileTerm-footer.css') }}">
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
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '265984533895012', {
    em: 'insert_email_variable,'
    });
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=265984533895012&ev=PageView&noscript=1"
    /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
</head>
<body>
    <div class="topheader">
        <div class="container">
            <a href="tel:0868608106"><img src="{{ asset('public/css/mobile/imghome/topheader.gif') }}" alt="" class="center-block img-responsive"></a>
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
                        <span class="table-cell text-center"><a href="tel:0868608106"><img src="{{ asset('public/css/mobile/imghome/home-24.png') }}" alt=""></a></span>
                        <span class="table-cell text-center cell2"><a href="tel:0868608106">0868608106</a></span>
                        <a href="tel:0868608106" class="table-cell text-uppercase text-center cell3">Bấm để gọi</a>
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
                        <a href="{{ url('dia-chi-phong-kham.html') }}">Địa chỉ phòng khám : Số 193c1 Bà Triệu, Hai Bà Trưng, Hà Nội</a>
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
                                        <td><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en"><img src="{{ asset('public/css/mobile/imghome/home-27.png') }}" alt=""></a></td>
                                        <td><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" class="text-uppercase">Bác sĩ tư vấn</a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            @include('toolbar.toolbar')
        </div>
    </footer>
    <div id="myloadding"><div id="mytext">Xin chờ chút...</div></div>
    <script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
    <img src="{{ asset('public/images/mobile/shake.gif') }}" alt="" style="position: fixed; top: 15%;right: 0px;z-index: 999;width:55px;">
    @include('layouts.popupMobile1')
    @include('layouts.popupMobile3')
</body>
</html>
