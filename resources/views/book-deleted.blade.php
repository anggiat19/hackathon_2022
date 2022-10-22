@extends('layouts.mainlayout')

@section('title','book-delete')

@section('content')
<h2>Are you sure to delete book {{ $book->title }} ?</h2>
<div>
    <a href="/book-destroy/{{ $book->slug }}" class="btn btn-danger">Sure</a>
    <a href="/books" class="btn btn-info">Cancel</a>
</div>
@endsection
