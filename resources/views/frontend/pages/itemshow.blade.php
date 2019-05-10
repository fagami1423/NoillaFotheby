
@extends('frontend.layouts.layout')
@section('content')
<div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
               	<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
                            <div id="product-main-img">
                                <div class="product-preview">
                                    <img src="/storage/images/{{$items->art_image}}" alt="">
                                </div>
    
                                
                            </div>
                        </div>
                        <!-- /Product main img -->
    
                        <!-- Product thumb imgs -->
                        <div class="col-md-2  col-md-pull-5">
                            <div id="product-imgs">
                                <div class="product-preview">
                                    <img src="/storage/images/{{$items->art_image}}" alt="">
                                </div>	
                            </div>
                        </div>
                        <!-- /Product thumb imgs -->
                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                    <h2 class="product-name">{{$items->name}} by {{$items->artist}}</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">10 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">${{$items->estimated_price-0.12*$items->estimated_price}} <del class="product-old-price">${{$items->estimated_price}}</del></h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>{{$items->description}}</p>
                   
                        @if(Auth::check() && auth()->user()->client_status == 'buyer')
                        <div class="product-options">
                            {!!Form::open(['action'=>'BidsController@store','method'=>'POST'])!!}
                            <div class="form-group">
                                    {{Form::label('start_price','Min Price')}}
                                    {{Form::number('start_price','',['class'=>'form-control'])}}
                            </div>
                            <div class="form-group">
                                    {{Form::label('max_price','Max Price')}}
                                    {{Form::number('max_price','',['class'=>'form-control'])}}
                            </div>
                               
                                <input type="hidden" name="item_id" value="{{$items->id}}" >
                                <div class="add-to-cart">
                                        {{Form::submit('Add Bid',['class'=>'add-to-cart-btn'])}}
                                    </div>
                                
                               
                            {!!Form::close()!!}
                        </div>

                        <div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Buy</button>
                            </div>
                        @endif
                        
                        <ul class="product-links">
                            <li>Category:</li>
                            <li>{{$items->cat_name}}</li>
                            
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>

                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                            <li><a data-toggle="tab" href="#tab2">Properties</a></li>
                            <li><a data-toggle="tab" href="#tab3">Bids ({{$number}})</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                    <p>{{$items->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->

                            <!-- tab2  -->
                            <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>{!! $items->property !!}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab2  -->

                            <!-- tab3  -->
                            <div id="tab3" class="tab-pane fade in">
                                <div class="row">
                                

                                    <!-- Reviews -->
                                    <div class="col-md-6">
                                        <div id="reviews">
                                            <ul class="reviews">
                                                <li>
                                                  @foreach ($bids as $bid)
                                                      
                                                 
                                                    <div class="review-body">
                                                    <p>{{$bid->firstname}} added a bid in this item with min price {{$bid->start_price}} and max price {{$bid->max_price}}</p>
                                                    </div>
                                                    @endforeach
                                                </li>
                                                
                                          
                                        </div>
                                    </div>
                                    
                                    <!-- /Reviews -->

                                </div>
                            </div>
                            <!-- /tab3  -->
                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection