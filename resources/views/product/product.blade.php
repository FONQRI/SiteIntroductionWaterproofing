@extends('layouts.app')
@section('content')
    <div class="container" style="color: #222">
        <div class="container-fluid">
            <div class="productList row">
                @foreach ( $images as $key=>$image)
                    <div class="col-md-12">
                        <a href="/products/{{$key}}">
                            <div class="productItems">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="imgTemp">
                                            <img class="img-rounded  productItemsImg" width="440" height="290"
                                                 data-toggle="lightbox"
                                                 src="/img/products/main/{{$image}}"
                                                 data-title="توضیحات عکس  {{$image}}">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-xs-12" style="text-align: center">
                                                <h3>{{$image}}</h3>
                                            </div>
                                            <div class="col-xs-12" style="text-align: right">
        <pre style="font-family: IRANSansWeb">
            توضیحات مختصر برای معرفی محصول شکفت انگیز {{$image}}
            این محصول خیلی خوبه (^_^)
        </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection