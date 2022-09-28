@foreach($categories as $category)
    <div class="category-children {{$category->name}}">

            <div class="w-100 d-flex flex-row">
            <input type="checkbox" class="custom-control-input" id="category-{{$category->id}}" name="filter[categories][]" value="{{$category->id}}">
            <a class="custom-control-label category-label" href="../categories/{{$category->id}}">{{__('database.'.$category->name)}}</a>
            </div>
        @if(count($category->children)>0)
            <x-category :category="$category"/>
        @endif
    </div>

@endforeach

