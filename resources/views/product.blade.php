@extends('layouts.app')

@section('content')
    {{$product->id}}
    {{$category->parent_id}}
    @foreach($images as $image)
        {{$image->url}}
    @endforeach

@endsection
