@extends('layouts.app')
@section('content')
    <div class="container-fluid galleryCollection">
        <div class="container cardproduct">
            <div class="row">
                <div class="col-md-3  blur pic ">
                    <a href="/gallery/1">
                        <section class="cardimg">
                            <img src="/img/gallery/1.jpg" class="img-responsive img-rounded galleryShowIconCollection">
                            <h3>گالری اول</h3>
                        </section>
                    </a>
                </div>
                <div class="col-md-3  blur pic ">
                    <a href="/gallery/2">

                        <section class="cardimg">
                            <img src="/img/gallery/2.jpg" class="img-responsive img-rounded galleryShowIconCollection">
                            <h3>گالری دوم</h3>
                        </section>
                    </a>
                </div>
                <div class="col-md-3  blur pic ">
                    <a href="/gallery/3">
                        <section class="cardimg">
                            <img src="/img/gallery/3.jpg" class="img-responsive img-rounded galleryShowIconCollection">
                            <h3>گالری سوم</h3>
                        </section>
                    </a>
                </div>

                <div class="col-md-3  blur pic ">
                    <a href="/gallery/4">
                        <section class="cardimg">
                            <img src="/img/gallery/4.jpg" class="img-responsive img-rounded galleryShowIconCollection">
                            <h3>گالری چهام</h3>
                        </section>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection