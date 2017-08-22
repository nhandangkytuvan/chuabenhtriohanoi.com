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

    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/desktop/desktop-popup.css') }}">
    @yield('css')
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-1.12.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.form.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery.popupoverlay.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/jquery-scrolltofixed-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/right.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/dkdt.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/desktop/desktop.js') }}"></script>
    @yield('js')
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-104641575-1', 'auto');
      ga('send', 'pageview');

    </script>
    <!-- Facebook Pixel Code -->
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
    <header>
        <div class="container">
            <div class="dis-table table1 width-100">
                <div class="table-cell cell1 text-left">
                    <div class="dis-table table2">
                        <div class="table-cell cell1">
                            <a href="{{ url('/') }}"><img src="{{ asset('public/css/desktop/imghome/home-1.png') }}" alt=""></a>
                        </div>
                        <div class="table-cell cell2">
                            @if(Request::url()==url('/'))
                            <h1><a href="{{ url('/') }}">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</a></h1>
                            @else
                            <div><a href="{{ url('/') }}">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</a></div>
                            @endif
                            <address>SỐ 193C1 BÀ TRIỆU - HAI BÀ TRƯNG - HÀ NỘI</address>
                        </div>
                    </div>
                </div>
                <div class="table-cell cell2 text-right">
                    <div class="dis-table table3">
                        <div class="table-cell cell1">
                            <a href="tel:0868608106"><img src="{{ asset('public/css/desktop/imghome/home-2.png') }}" alt=""></a>
                        </div>
                        <div class="table-cell cell2">
                            <div class="hotline">Đường dây nóng 24h : </div>
                            <div class="phone"><a href="tel:0868608106">0868608106</a></div>
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
        <div class="container">
            <div class="menu-footer">
                <table class="table1">
                    <tr>
                        <td><a href="{{ APIPost::getUrlByID(19) }}">Giới thiệu<br>phòng khám</a></td>
                        <td><a href="{{ APITerm::getUrlByID(18) }}">Kỹ thuật<br>đặc biệt</a></td>
                        <td><a href="{{ APITerm::getUrlByID(19) }}">Bệnh án<br>điển hình</a></td>
                        <td><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Các câu hỏi<br>về sức khỏe</a></td>
                        <td><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Đăng ký<br>trực tuyến</a></td>
                        <td><a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Tư vấn<br>trực tuyến</a></td>
                    </tr>
                </table>
            </div>
            <table class="width-100 table2">
                <tr>
                    <td class="td1">
                        <div>
                            <a href="{{ url('/') }}"><img src="{{ asset('public/css/desktop/imghome/home-1.png') }}" alt="" class="center-block"></a>
                            <div class="title"><a href="{{ url('/') }}">PHÒNG KHÁM CHUYÊN KHOA NAM KHANG</a></div>
                            <address>SỐ 193C1 BÀ TRIỆU - HAI BÀ TRƯNG - HÀ NỘI</address>
                        </div>
                    </td>
                    <td class="td2">
                        <div>
                            <p class="p1">Thời gian mở cửa:  <span>8:00 - 20:00</span></p>
                            <p class="p2">Hotline:  <span>0868608106</span></p>
                            <p class="p3">
                                Các thông tin trên trang web mang tính chất tham khảo, không thể làm
                                căn cứ để chuẩn đoán hay chữa trị, hãy làm theo sự chuẩn đoán của bác sĩ.
                            </p>
                        </div>
                    </td>
                    <td>
                        <div>
                            <table class="table3">
                                <tr>
                                    <td>
                                        <a class="text-center dis-block" href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
                                            <i class="dis-inline-block bg1"></i>
                                            <span class="dis-block">Đặt lịch<br>trực tuyến</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="text-center dis-block" href="tel:0868608106">
                                            <i class="dis-inline-block bg2"></i>
                                            <span class="dis-block">Điện thoại<br>miễn phí</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="text-center dis-block" href="#">
                                            <i class="dis-inline-block bg3"></i>
                                            <span class="dis-block">Facebook<br>Phòng khám</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="text-center dis-block" href="{{ url('dia-chi-phong-kham.html') }}">
                                            <i class="dis-inline-block bg4"></i>
                                            <span class="dis-block">Chỉ đường <br>&nbsp;</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="text-center dis-block" href="#">
                                            <i class="dis-inline-block bg5"></i>
                                            <span class="dis-block">Đội ngũ<br>chuyên gia</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="text-center dis-block" href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">
                                            <i class="dis-inline-block bg6"></i>
                                            <span class="dis-block">Hỏi đáp<br>trực tuyến</span>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="toolbar2">
            <div class="container">
                <div class="bg">
                    <form action="{{ url('sendmail') }}" method="post" id="formMailSendDesktopBottom">
                    {{ csrf_field() }}
                        <table>
                            <tr>
                                <td class="td1"><img src="{{ asset('public/css/desktop/imghome/home-34.png') }}" alt=""></td>
                                <td class="td2">
                                    <div>
                                        <p>Nhận cuộc gọi miễn phí từ chuyên gia</p>
                                        <p><input type="text" class="dis-block" placeholder="Hãy nhập số điện thoại của bạn" name="phone" required></p>
                                    </div>
                                </td>
                                <td class="td3">
                                    <button type="submit">Gửi</button>
                                </td>
                                <td class="td4">
                                    Hoặc gọi: <span>0868608106</span>
                                </td>
                                <td class="td5">
                                    <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Tư vấn<br>kĩ thuật<br>điều trị</a>
                                </td>
                                <td class="td6">
                                    <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en">Tư vấn<br>chi phí<br>điều trị</a>
                                </td>
                                <td class="td7">
                                    <a href="http://swt.phongkham193.com/lr/chatpre.aspx?id=mfi63108226&cid=1489654963660812714370&lng=en" class="dis-table">
                                        <i class="fa fa-user table-cell"></i>
                                        <span class="table-cell">
                                            Hỏi bệnh trực tuyến<br>
                                            Hỏi nhanh đáp nhanh
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <script>
                        $(document).ready(function() 
                        {
                            $('#formMailSendDesktopBottom').ajaxForm(
                            {
                                beforeSubmit:function(){
                                    $("#myloadding").show();
                                },
                                success:function(){
                                    alert("Cảm ơn bạn đã đăng ký!");
                                    $("#myloadding").hide(); 
                                    $('#formMailSendDesktopBottom').resetForm();
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="toolbar">
        </div>
    </footer>
    <div id="myloadding"><div id="mytext">Xin chờ chút...</div></div>
    @include('layouts.popupDesktop1')
    <script language="javascript" src="http://swt.phongkham193.com/JS/LsJS.aspx?siteid=MFI63108226&float=1&lng=en"></script>
</body>
</html>
