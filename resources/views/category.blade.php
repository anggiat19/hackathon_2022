@extends('layouts.mainlayout')

@section('title','category')

@section('content')
<h1>Category List</h1>

<div class="my-3 d-flex justify-content-end">
    <a href="category-deleted"class="btn btn-secondary me-3">View Deleted Data</a>
    <a href="category-add"class="btn btn-primary">Add Data</a>
</div>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div>
    <table class="table ">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="category-edit/{{$item->slug  }}" class="btn btn-success">Edit</a>
                        <a href="category-delete/{{ $item->slug }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
