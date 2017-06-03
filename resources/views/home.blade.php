@extends('layouts.app') @section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner " role="listbox">
        <div class="item active"> <img src="/img/header/showSide1.jpg" alt="news 1" class="img-responsive"> </div>
        <div class="item"> <img src="/img/header/showSide2.jpg" alt="news 2" class="img-responsive"> </div>
        <div class="item"> <img src="/img/header/showSide3.jpg" alt="news 3" class="img-responsive"> </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>
<hr> {{--******************************************************************************End of Header--}} {{--******************************************************************************start of info co div--}}
<div class="container backgroundContainer">
    <div class=" infoco">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <section class="card">
                    <h3 class="titlecards">ارتباط سریع</h3>
                    <ul class="dicul">
                        <li><a href="#">ایمیل: behnamsabaghi@gmail.com</a></li>
                        <li><a href="#">موبایل: 09184908400</a></li>
                        <li><a href="#">آدرس: محلات یکم اونطرف تر</a></li>
                        <li><a href="#">ماهان گستر</a></li>
                    </ul>
                </section>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <section class="card">
                    <h3 class="titlecards">گواهینامه و افتخارات</h3>
                    <ul class="dicul">
                        <li>
                            <h3><a href="#">زیر منوی اول</a></h3></li>
                        <li>
                            <h3><a href="#">زیر منوی دوم</a></h3></li>
                        <li>
                            <h3><a href="#">زیر منوی سوم</a></h3></li>
                        <li>
                            <h3><a href="#">زیر منوی چهارم</a></h3></li>
                    </ul>
                </section>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <section class="card">
                    <h3 class="titlecards">درخواست نمایندگی</h3>
                    <div class="row">
                        <div class="container-fluid">
                            <div class="col-xs-12">
                                <p class="darkhastNamayandegi" style="font-family: IRANSansWeb"> توضیحات مورد نیاز برای درخواست نمایندگی و گرفتن توضیحات </p>
                            </div>
                            <div class="col-xs-12">
                                <a href="/content/1" type="submit" class="btn btn-lg btn-success  btn-block" id="callusFormSubmit"> <span class="glyphicon glyphicon-send"></span>درخواست</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-xs-12" style="border-style: solid; border-width: 1px;margin-bottom: 10px; ">
        <h3 style="text-align: center">معرفی شرکت</h3>
        <p class="darkhastNamayandegi text-justify"> یک برنامه‌نویس، برنامه‌نویس رایانه، توسعه‌دهنده، کدنویس، یا مهندس نرم‌افزار کسی است که نرم‌افزار رایانه می‌نویسد. عبارت برنامه‌نویس رایانه می‌تواند به یک متخصص در زمینه‌ای از برنامه‌نویسی یا یک شخص دارای سررشته که برای بسیاری از گونه‌های نرم‌افزار کد می‌نویسد اشاره کند. شخصی که یک روش رسمی برای برنامه‌نویسی تمرین یا تدریس می‌کند همچنین می‌تواند به عنوان یک تحلیل‌گر برنامه‌نویس شناخته شود. زبان برنامه‌نویسی اصلی یک برنامه‌نویس (کوبول، سی، سی++، سی شارپ، جاوا، لیسپ، پایتون، غیره) اغلب دارای پیشوندی به این نام‌ها است، و کسانی که در محیط وب کار می‌کنند اغلب عنوان‌هایشان را با پیشوند وب می‌نویسند. عبارت برنامه‌نویس می‌تواند برای اشاره به یک توسعه‌دهنده نرم‌افزار، توسعه‌دهنده وب، توسعه‌دهندهٔ اپلیکیشن‌های تلفن همراه، توسعه‌دهندهٔ سفت‌افزار تعبیه‌شده، مهندس نرم‌افزار، دانشمند رایانه یا تحلیل‌گر نرم‌افزار به کار برده‌ شود </p>
    </div>
    <div class="clearfix"></div>
    <br>
    <hr> {{--******************************************************************************products start from here--}}
    <div class="promaintitle ">
        <h3> محصولات ما</h3> </div>
    <div class=" row ">
        <div class=" col-md-3 col-sm-6 col-xs-12 blur pic ">
            <section class="cardimg"> <img src="/img/products/main/pro.jpg" class="img-responsive   img-rounded">
                <h3>پشم شیشه</h3> </section>
        </div>
        <div class="  col-md-3 col-sm-6 col-xs-12  blur pic ">
            <section class="cardimg"> <img src="/img/products/main/pro1.jpg" class="img-responsive  img-rounded" />
                <h3>مهتاب شرق</h3> </section>
        </div>
        <div class="  col-md-3 col-sm-6 col-xs-12 blur pic ">
            <section class="cardimg"> <img src="/img/products/main/pro2.jpg" class=" img-responsive  img-rounded" />
                <h3>قمر شرق</h3> </section>
        </div>
        <div class=" col-md-3 col-sm-6 col-xs-12 blur pic ">
            <section class="cardimg"> <img src="/img/products/main/pro3.jpg" class=" img-responsive  img-rounded" />
                <h3>ماهان گستر</h3> </section>
        </div>
    </div>
    <hr> </div>
<div class="container">
    <h1 style="text-align: center;">پروژه های انجام شده </h1>
    <div class="row">
        <div class="col-md-12 col-xs-12 classShowProductImage" style="box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.16), 0 0 0 1px rgba(0, 0, 0, 0.08);">
            <div class="col-xs-12 showSliderActivePic"> <img style="width: 100%;height: 200px" src="/img/projects/{{$images[0] or '0.jpg'}}" data-title="/img/projects/{{$images[0] or '0.jpg'}}" data-content="{{$projectDescription[0] or '0'}}" /> </div>
        </div>
        <div class="col-xs-12 " style="margin-top:10px ;margin-bottom: 5px; ">
            <div class=" productSliderAllProductsInner">
                <a class="right carousel-control" href="#next" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                <div class="multiSliderParent "> @foreach($images as $key=>$image) @if($key == 0)
                    <div class="multiSlider activeOpacity"> @else
                        <div class="multiSlider"> @endif <img src="/img/projects/{{$image}}" data-title="/img/projects/{{$image}}" /> </div> @endforeach </div>
                    <a class="left carousel-control" href="#prev" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                </div>
            </div>
        </div>
    </div> @endsection