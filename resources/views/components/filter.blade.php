<form class="sidebar-filter col-md-4 order-md-1 col-lg-3">
    <h3 class="mt-0 mb-5 text-capitalize text-break">{{__('pagination.showing')}} <span id='counter' class="text-primary">{{count($products)}}</span> {{__('pagination.products')}}</h3>
    <h6 class="text-uppercase font-weight-bold mb-3">{{ __('pagination.categories.categories') }}</h6>
    @foreach($categories as $category)
        <div class="mt-2 mb-2 pl-2">
            <div class="category_parent custom-control custom-checkbox" data-count="#e91e63">
                <div class="w-100 d-flex flex-row">
                    <input type="checkbox" class="custom-control-input" id="category-{{$category->id}}" name="filter[categories][]" value="{{$category->id}}">
                    <a class="custom-control-label category-label" href="../categories/{{$category->id}}">{{__('database.'.$category->name)}}</a>
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
        <input type="number" class="form-control w-50 pull-left mb-2" placeholder="Min" name="filter[price_min]" id="price-min-control" min="0" max="9999999">
        <input type="number" class="form-control w-50 pull-right" placeholder="Max" name="filter[price_max]" id="price-max-control" min="0" max="9999999">
    </div>
    <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
    <a class="btn btn-lg btn-block btn-primary mt-5 animate_on_load_append_left" id="filter-button">Update Results</a>
</form>
