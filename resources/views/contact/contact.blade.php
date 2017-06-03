@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <form action="/content" method="post" id="contactForm" class="contactFormClass"
                          enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">


                                <label for="contactNameInput">نام و نام خانوادگی<span
                                            class="form-required">*</span> </label>


                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <div class="input-group" style="direction: ltr;">
                                    <input type="text" class="form-control" id="contactNameInput" name="inputName"
                                           placeholder="نام و نام خانوادگی" value={{old('inputName')}}>
                                    <div class="input-group-addon">
                                        <span class="fa fa-user-circle "></span>
                                    </div>

                                </div>

                                {{----}}
                                {{--<input type="text" class="form-control" name="inputName" id="contactNameInput"--}}
                                {{--value={{old('inputName')}}>--}}
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <label for="contactNameEmail">ایمیل<span
                                            class="form-required">*</span></label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <div class="input-group" style="direction: ltr;">
                                    <input type="email" class="form-control"
                                           id="contactNameEmail" placeholder="ایمیل" name="inputEmail">
                                    <div class="input-group-addon" value={{old('inputEmail')}}>
                                        <span class="fa fa-envelope "></span>
                                    </div>

                                </div>


                                {{--<input type="email" class="form-control" name="inputEmail" id="contactNameEmail"--}}
                                {{--value={{old('inputEmail')}}>--}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <label form="contactForm" for="contactNamePhone">تلفن همراه</label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <div class="input-group" style="direction: ltr;">
                                    <input type="tel" class="form-control" pattern="^(09)[0-9]{9}$"
                                           id="contactNamePhone" placeholder="شماره تماس" name="inputPhone" value={{old('inputPhone')}}>
                                    <div class="input-group-addon">
                                        <span class="fa fa-mobile "></span>
                                    </div>
                                </div>

                                {{--<input type="tel" class="form-control" name="inputPhone" id="contactNamePhone"--}}
                                       {{--pattern="^(09)[0-9]{9}$"--}}
                                       {{--value={{old('inputPhone')}}>--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <label for="contactNameSubject">موضوع<span
                                            class="form-required">*</span></label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">

                                <select class="form-control" id="inputSubject" name="contactNameSubject">
                                    <option value="-1">انتخاب</option>
                                    @if($id == 1)
                                        <option value="1" selected="selected">درخواست نمایندگی</option>
                                    @else
                                        <option value="1">درخواست نمایندگی</option>
                                    @endif

                                    {{--<option value="1" selected="selected">درخواست نمایندگی</option>--}}
                                    <option value="2">انتقاد</option>
                                    <option value="3">پیشنهاد</option>
                                    <option value="4"></option>
                                </select>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <label for="contentNameText">پیام<span
                                            class="form-required">*</span></label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                            <textarea class="form-control" id="contentText" name="contentNameText"
                                      placeholder="متن پیام" rows="5" value={{old('contentNameText')}}></textarea>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <label for="contentNameText">انتخاب فایل</label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <label class="btn btn-primary  btn-block btn-file" style="margin-bottom: 15px"
                                       class="attachedFile">

                                    انتخاب فایل <input type="file" value="" style="display : none" id="inputFile"
                                                       name="inputFile">
                                    <span class="fa fa-paperclip chooseFileIcon"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                {{--<input type="submit" class="btn btn-lg btn-success  btn-block"--}}
                                {{--value="&#xf1d8; ارسال" id="callusFormSubmit">--}}
                                {{--<input type="submit" class="icon icon-search btn btn-lg btn-success  btn-block" value="ارسال" id="callusFormSubmit">--}}
                                <a href="#" type="submit" class="btn btn-lg btn-success  btn-block"
                                   id="callusFormSubmit">
                                    <span class="glyphicon glyphicon-send"></span> ارسال</a>


                                <div style="text-align: center" class="submitFormLoading">
                                    <div class="loader-16">
                                    </div>

                                </div>

                            </div>


                        </div>

                        <div class="row">
                            <label class="col-xs-12">
                                @if(isset($sendResult))
                                    @if($sendResult == "ارسال شد")
                                        <p style="margin-top: 10px; text-align: center" class="alert alert-success">
                                            ارسال شد</p>
                                    @endif
                                    @if(!$sendResult == "ارسال نشد")
                                        <p style="margin-top: 10px;text-align: center" class="alert alert-danger">ارسال
                                            نشد</p>
                                    @endif
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
                            </label>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <iframe src='http://map.parsijoo.ir/API.html?lat=33.91119529388772&lon=50.45237027983929&zoom=16&m=1'
                            style="width: 100%;height: 400px;"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
