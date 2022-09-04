@extends('layouts.app')

@section('content')

    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8 order-md-2 col-lg-9">
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="dropdown">
                                <label class="mr-2">{{  __('pagination.sort_by.sort_by') }}:</label>
                                <a class="btn btn-lg btn-light dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{  __('pagination.sort_by.relevance') }} <span class="caret"></span></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 48px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="#">{{ __('pagination.sort_by.relevance') }}</a>
                                    <a class="dropdown-item" href="#">{{ __('pagination.sort_by.price_Descending') }}</a>
                                    <a class="dropdown-item" href="#">{{ __('pagination.sort_by.price_Ascending') }}</a>
                                    <a class="dropdown-item" href="#">{{ __('pagination.sort_by.best_Selling') }}</a>
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

                            <div class="col-2 col-md-2 col-lg-2 mb-3" style="width: 250px;">
                                <a href="product/{{$product->id}}" class=" font-weight-bold text-dark text-uppercase small text-decoration-none">
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
            </div><form class="sidebar-filter col-md-4 order-md-1 col-lg-3">
                <h3 class="mt-0 mb-5 text-capitalize text-break">{{__('pagination.showing')}} <span id='counter' class="text-primary">{{count($products)}}</span> {{__('pagination.products')}}</h3>
                <h6 class="text-uppercase font-weight-bold mb-3">{{ __('pagination.categories.categories') }}</h6>
                @foreach($categories as $category)
                <div class="mt-2 mb-2 pl-2">
                    <div class="category_parent custom-control custom-checkbox" data-count="#e91e63">
                        <div class="w-100 d-flex flex-row">
                        <input type="checkbox" class="custom-control-input" id="category-{{$category->id}}" name="filter[categories][]" value="{{$category->id}}">
                            <a class="custom-control-label category-label" href="categories/{{$category->id}}">{{__('database.'.$category->name)}}</a>
                        </div>
                        <x-category :category="$category"/>
                    </div>
                </div>
                @endforeach
                <div class="divider_subcategories mt-5 mb-5 border-bottom border-secondary d-none"></div>
                <div class="subcategories d-none">
                    <h6 class="text-uppercase font-weight-bold mb-3">{{ __('pagination.categories.subcategories') }}</h6>
                </div>
                <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Price</h6>
                <div class="price-filter-control">
                    <input type="number" class="form-control w-50 pull-left mb-2" placeholder="50" name="filter[price_min]" id="price-min-control">
                    <input type="number" class="form-control w-50 pull-right" placeholder="150" name="filter[price_max]" id="price-max-control">
                </div>
                <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                <a class="btn btn-lg btn-block btn-primary mt-5" id="filter-button">Update Results</a>
            </form>
            <div id="counter1">

            </div>
        </div>
    </div>
@endsection
@section('javascript')
    const storagePath = '{{ asset('images') }}';
@endsection
@section('js-files')
    <script src="{{ asset("js/home.js") }}"></script>
@endsection

