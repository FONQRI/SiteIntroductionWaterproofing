@extends('layouts.app')
@section('content')

    {{--فثسف ********************************************--}}
    <div class="container galleryMainContainer">
        <div class="row">
            @foreach($images as $image)
                {{--<img src="{{$image}}" />--}}
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <a title="Image 1" href="#">
                        <section class="cardimg">
                            <img class="img-rounded galleryShowIconCollection" data-toggle="lightbox"
                                 src="/img/gallery/{{$id}}/{{$image}}" data-title="توضیحات عکس  {{$image}}">

                        </section>

                    </a>
                </div>
            @endforeach

        </div>
    </div>
    <div tabindex="-1" class="modal fade" id="myModal" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="imageViewer col-xs-10">
                    </div>
                    <div class=" col-xs-2">

                        <div class="sideMenu">
                            @foreach($images as $image)
                                <a href="#">
                                    <div class="cardimg">
                                        <img class="img-rounded img-responsive sidMenuPic" data-toggle="lightbox"
                                             src="/img/gallery/{{$id}}/{{$image}}"
                                             data-title="توضیحات عکس  {{$image}}">


                                    </div>

                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="modal-footer">

                </div>
                <div style="text-align: left">
                    <input type="button" class="btn fa-input btn-danger closeModalBtn" data-dismiss="modal"
                           value="&#xf00d;">
                </div>
            </div>
        </div>
    </div>


@endsection