@extends('layouts.app')
@section('content')
    <div class="container" style="color: #222">
        <div class="container-fluid">
            @foreach($images as $image)
                <div class=" row">
                    <div class="col-xs-12">
                        <img class="img-rounded productInfoImage"
                             src="/img/products/{{$id}}/{{$image}}">
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <h4 class="text-center">عنوان محصول</h4>
                        <table class="table table-hover table-striped .table-responsive">
                            <thead class="thead-inverse bg-primary">
                            <tr>
                                <th colspan="3">مشخصات فنی</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>فنی 1</td>
                                <td>مقدار</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>فنی 3</td>
                                <td>مقدار</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>فنی 3</td>
                                <td>مقدار</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6 col-xs-12" style="padding-top: 15px;padding-bottom: 15px;">
                        <h4 class="text-center">فرم سفارش</h4>
                        <form class="OrderForm" method="post" action="">
                            <div class="form-group">
                                <label for="nameFormOrder">نام و نام خانوادگی</label>
                                <div class="input-group" style="direction: ltr;">
                                    <input type="text" class="form-control" id="nameFormOrder" name="customerName"
                                           placeholder="نام و نام خانوادگی">
                                    <div class="input-group-addon">
                                        <span class="fa fa-user-circle "></span>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phoneNumberFormOrder">شماره تماس</label>
                                <div class="input-group" style="direction: ltr;">
                                    <input type="tel" class="form-control" pattern="^(09)[0-9]{9}$"
                                           id="phoneNumberFormOrder" placeholder="شماره تماس" name="customerPhone">
                                    <div class="input-group-addon">
                                        <span class="fa fa-mobile "></span>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="emailFormOrder">ایمیل</label>
                                <div class="input-group" style="direction: ltr;">
                                    <input type="email" class="form-control" id="emailFormOrder" name = "customerEmail" placeholder="ایمیل">
                                    <div class="input-group-addon">
                                        <span class="fa fa-envelope "></span>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="addressFormOrder">آدرس</label>
                                <div class="input-group" style="direction: ltr;">
                                    <textarea class="form-control" rows="3" name = "customerAddress" id="addressFormOrder" placeholder="آدرس"></textarea>
                                    <div class="input-group-addon">
                                        <span class="fa  fa-address-card "></span>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="areaFormOrder">متراژ</label>
                                <div class="input-group" style="direction: ltr;">
                                    <input type="number" class="form-control" id="areaFormOrder" name="customerArea" placeholder="متراژ مورد نیاز(متر مربع) ">
                                    <div class="input-group-addon">
                                        <span class="fa fa-area-chart "></span>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="CaptchaCode">کد امنیتی</label>

                            {!! captcha_image_html('ContactCaptcha') !!}

                            <input type="text" id="CaptchaCode" name="CaptchaCode" required="required" class="form-control"  placeholder="کد امنیتی ">

                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" id="callusFormSubmit" class="btn btn-success btn-block btn-lg">سفارش</button>
                            <div style="text-align: center" class="submitFormLoading">
                                <div class="loader-16">
                                </div>

                            </div>
                        </form>
                        @if(isset($sendResult))


                                @if($sendResult == "ارسال شد")
                                    <p style="margin-top: 10px; text-align: center" class="alert alert-success">ارسال شد</p>
                                @endif
                                @if(!$sendResult == "ارسال نشد")
                                    <p style="margin-top: 10px;text-align: center" class="alert alert-danger">ارسال نشد</p>
                                @endif

                            {{--<h3 class="bg-success" style="text-align: center;">{{$sendResult }}</h3>--}}
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger errors">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection