@extends('layouts.mainlayout')

@section('title','category-delete')

@section('content')
<h2>Are you sure to delete category {{ $category->name }} ?</h2>
<div>
    <a href="/category-destroy/{{ $category->slug }}" class="btn btn-danger">Sure</a>
    <a href="/categories" class="btn btn-info">Cancel</a>
</div>
@endsection
