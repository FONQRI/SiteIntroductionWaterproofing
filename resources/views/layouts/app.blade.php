<!DOCTYPE html>
<html lang="fa">

<html>
<head>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="/css/lightslider.css"/>
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">

</head>
<body >

{{--/* telegram id bar ************************************************************/--}}
<div class="container-fluid ">
    <div class="topinfo row hidden-xs ">
        <div class="col-md-3 col-sm-3  col-xs-3">
            <div class="visible-md visible-lg">
                behnamsabaghi@gmail.com
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 hidden-xs">
            <a href="https://t.me/learning_programming">
                <i class="fa fa-telegram" aria-hidden="true"></i>عضویت در کانال تلگرام
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">

        </div>
    </div>
    {{--this will be shon in mobile devices and stick at bottom--}}
    <div class="topinfo row visible-xs navbar-fixed-bottom">
        <div class="col-md-3 col-sm-3  col-xs-3">

        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 ">
            <a href="https://t.me/learning_programming">
                <i class="fa fa-telegram" aria-hidden="true"></i>عضویت در کانال تلگرام
            </a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">

        </div>
    </div>
</div>

{{--/* navigation bar ************************************************************--}}
<nav class="navbar navbar-inverse container-fluid" data-spy='affix' data-offset-top='25'>

    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logolink hidden-sm" href="/"><img src="/img/logo/logo.png" class="isologo"/></a>
        </div>


        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav openedmenu navbar-right">
                <li class="active">
                    <a href="/" class="mainpagelink">
                        <i class="fa fa-home " style="font-size:23px;" aria-hidden="false"></i>
                        صفحه اصلی
                    </a></li>
                <li><a href="#">اطلاعات فنی</a></li>
                <li><a href="/products">محصولات</a></li>
                <li><a href="/gallery">گالری تصاویر</a></li>
                <li><a href="/content/1" id= "representation" >اعطای نمایندگی</a></li>
                <li>
                    <a href="/content">
                        ارتباط با ما
                    </a>
                </li>
                <li><a href="/aboutUsCo">درباره شرکت</a></li>

                {{--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
                                        {{--aria-haspopup="true"--}}
                                        {{--aria-expanded="false">--}}
{{--درباره ما--}}
                        {{--<span class="caret"></span> </a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="/aboutUsCo">درباره شرکت</a></li>--}}
                        {{--<li><a href="/aboutUsPersonnel">پرسنل ما</a></li>--}}
                        {{--<li><a href="/aboutUsCatalogues">کاتلوگ‌ها</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

            </ul>

        </div>

        <!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>

<div id="main">

    @yield('content')

</div>

<footer>
    <div class="container-fluid">

        <div class="row ">
            <div class="col-md-3 col-sm-6 col-xs-12 ">
                <h2 class="footerTitle">اطلاعات تماس</h2>
                <div class="footerCol">
                    <p>ادرس : محلات میدان استقلال ساختمان فرهنگ طبقه 2</p>
                    <p>تلفن : 09384797401</p>
                    <p>ایمیل : behnamsabaghi@gmail.com</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h2 class="footerTitle">محصولات</h2>
                <div class="footerCol">

                    <p>محصول 1</p>
                    <p>محصول 2</p>
                    <p>محصول 3</p>
                    <p>محصول 4</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <h2 class="footerTitle">خبرنامه</h2>
                <h4>برای عضویت در خبرنامه ایمیل خود را وارد کنید </h4>
                <form method="post" action="/">
                    <input type="email" id="txtSubscribe_Newsletter_Email"
                           name="txtSubscribe_Newsletter_Email"> </input>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" value="ثبت نام" class="btn btn-success btn-md newslettersButton"
                           id="btnSubscribe_Newsletter"> </input>
                </form>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 ">
                <h2 class="footerTitle ">برندها</h2>
                <div class="footerCol">

                    <p>برند اول</p>
                    <p>برند دوم</p>
                    <p>برند سوم</p>
                    <p>برند سوم</p>
                </div>
            </div>
        </div>
        <div class="row copyrightBottom">

            <p>
                کلیه حقوق این سایت متعلق به شرکت داده پژوهان میباشد copy right 2017
            </p>
        </div>

    </div>


</footer>

{{--**********************************foter*******************************************--}}

<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/lightslider.js"></script>

<script src="/js/jquery.nicescroll.min.js" type="text/javascript"></script>

<script src="/js/script.js" type="text/javascript"></script>

</body>
</html>
