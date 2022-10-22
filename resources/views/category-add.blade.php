@extends('layouts.mainlayout')

@section('title','category-add')

@section('content')

<h1>Add New Category</h1>

<div class="mt-5 w-50">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="category-add" method="post">
    @csrf
    <div>
        <label for="name" class="form-lael">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Category Name">
    </div>

    <div class="mt-5">
        <button class="btn btn-success" type="submit">save</button>
    </div>
</form>
</div>
@endsection