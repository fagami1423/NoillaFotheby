
@extends('frontend.layouts.layout')
@section('content')
<div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Items</h3>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    @foreach ($items as $item)
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="/storage/images/{{$item->art_image}}" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <p class="product-category">{{$item->cat_name}}</p>
                                                    <h3 class="product-name"><a href="#">{{$item->name}}</a></h3>
                                                    <h3 class="product-name"><a href="#">artist: {{$item->artist}}</a></h3>
                                                    <h4 class="product-price">${{$item->estimated_price}}</del></h4>
                                                    <div class="product-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                        
                                                <a href="/items/{{$item->id}}"><button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button></a>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                   
                                   
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
    </div>

@endsection