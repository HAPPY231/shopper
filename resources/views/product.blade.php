@extends('layouts.app')

@section('links_add')

@endsection
@section('content')


    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="main_image">
                            @if($product->image_url!="default_image")
                            <img src="{{asset('images/products/'.$product->image_url.'.png') }}" id="main_product_image" width="350">
                            @else
                                <img src="{{asset('images/default_image.png') }}" id="main_product_image" width="350">
                            @endif
                        </div>
                        <div class="thumbnail_images">
                            <ul id="thumbnail">
                                @if($product->image_url!="default_image")
                                <li>
                                    <img src="{{asset('images/products/'.$product->image_url.'.png') }}" width="70" class="thumbnail">
                                </li>
                                @foreach($images as $image)
                                    <li>
                                        <img src="{{asset('images/products/'.$image->url.'.png') }}" width="70" height="70" class="thumbnail">
                                    </li>
                                @endforeach
                                @else
                                    <li>
                                        <img src="{{asset('images/default_image.png') }}" width="70" class="thumbnail">
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 right-side">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>{{$product->name}}</h3>
                            <span class="heart">
                                <img src="{{asset('images/heart.svg')}}" alt="heart">
                            </span>
                        </div>
                        <div class="mt-2 pr-3 content">
                            <p>{{$product->description}}</p>
                        </div>
                        <h3>${{$product->price}}</h3>
                        <div class="ratings d-flex flex-row align-items-center">
                            <div class="d-flex flex-row">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bx-star'></i>
                            </div>
                            <span>441 reviews</span>
                        </div>
                        <div class="mt-5">
                            <span class="fw-bold">Color</span>
                            <div class="colors">
                                <ul id="marker">
                                    <li id="marker-1"></li>
                                    <li id="marker-2"></li>
                                    <li id="marker-3"></li>
                                    <li id="marker-4"></li>
                                    <li id="marker-5"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="buttons d-flex flex-row mt-5 gap-3">
                            <button class="btn btn-outline-dark">Buy Now</button>
                            <a href="/"></a><button class="btn btn-dark">Add to Basket</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js-files')
    <script src="{{ asset("js/product.js") }}"></script>
@endsection
