@extends('layouts.app')

@section('search')

    <ul class="navbar-nav col-7 me-auto d-flex justify-content-end">
        <form style="width:70%; display:flex; justify-content: center" role="search">
            <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="{{ __('pagination.search') }}" aria-label="Search" id="search_by_name">
        </form>
    </ul>

@endsection

@section('content')

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8 order-md-2 col-lg-9">
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="dropdown">
                                <label class="mr-2">{{  __('pagination.sort_by.sort_by') }}:</label>
                                <a class="btn btn-lg btn-light dropdown-toggle products-sort-by" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="price_Descending">{{  __('pagination.sort_by.price_Descending') }} <span class="caret"></span></a>
                                <div class="dropdown-menu products-sort" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 48px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="price_Descending">{{ __('pagination.sort_by.price_Descending') }}</a>
                                    <a class="dropdown-item" href="price_Ascending">{{ __('pagination.sort_by.price_Ascending') }}</a>
                                    <a class="dropdown-item" href="best_Selling">{{ __('pagination.sort_by.best_Selling') }}</a>
                                </div>
                            </div>

                            <div class="dropdown float-right">
                                <label class="mr-2">View:</label>
                                <a class="btn btn-lg btn-light dropdown-toggle products-actual-count" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">10 <span class="caret"></span></a>
                                <div class="dropdown-menu dropdown-menu-right products-count" aria-labelledby="navbarDropdown" x-placement="bottom-end" style="will-change: transform; position: absolute; transform: translate3d(120px, 48px, 0px); top: 0px; left: 0px;">
                                    <a class="dropdown-item" href="#">10</a>
                                    <a class="dropdown-item" href="#">15</a>
                                    <a class="dropdown-item" href="#">20</a>
                                    <a class="dropdown-item" href="#">100</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="btn-group float-md-right ml-3">
                                <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-left"></span> </button>
                                <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-right"></span> </button>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="products-wrapper">
                        @foreach($products as $product)

                            <div class="col-2 col-md-2 col-lg-2 mb-3 animate_on_load" style="width: 250px;">
                                <a href="../product/{{$product->id}}" class=" font-weight-bold text-dark text-uppercase small text-decoration-none">
                                    <div class="card h-100 border-0">
                                        <div class="card-img-top">
                                            @if($product->image_url == 'default_image')
                                                <img src="{{asset('images/default_image.png') }}" class="img-fluid mx-auto d-block" alt="default_image">
                                            @else
                                                <img src="{{asset('images/products/'.$product->image_url.'.png') }}" class="img-fluid mx-auto d-block" alt="{{$product->name}}">
                                            @endif
                                        </div>
                                        <div class="card-body text-center">
                                            <h4 class="card-title">
                                               {{$product->name}}
                                            </h4>
                                            <h5 class="card-price small text-warning">
                                                <i>{{$product->price}}PLN</i>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="row sorting mb-5 mt-5">
                        <div class="col-2">
                            <div class="btn-group float-md-right ml-3">
                                <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-left"></span> </button>
                                <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-right"></span> </button>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <a class="btn btn-light">
                                <i class="fas fa-arrow-up mr-2"></i> Back to top
                            </a>
                        <div class="dropdown float-right">
                            <label class="mr-2">View:</label>
                            <a class="btn btn-lg btn-light dropdown-toggle products-actual-count" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">10 <span class="caret"></span></a>
                            <div class="dropdown-menu dropdown-menu-right products-count" aria-labelledby="navbarDropdown" x-placement="bottom-end" style="will-change: transform; position: absolute; transform: translate3d(120px, 48px, 0px); top: 0px; left: 0px;">
                                <a class="dropdown-item" href="#">10</a>
                                <a class="dropdown-item" href="#">15</a>
                                <a class="dropdown-item" href="#">20</a>
                                <a class="dropdown-item" href="#">100</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-filter :products="$products" :categories="$categories"/>
        </div>
    </div>
@endsection
@section('javascript')
    const storagePath = '{{ asset('images') }}';
@endsection
@section('js-files')
    <script src="{{ asset("js/home.js") }}"></script>
@endsection

