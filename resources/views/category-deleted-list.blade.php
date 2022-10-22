@extends('layouts.mainlayout')

@section('title','Deleted category')

@section('content')
<h1>Deleted Category List</h1>

<div class="my-3 d-flex justify-content-end">

    <a href="/category"class="btn btn-primary">Back</a>
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
            @foreach ($deletedcategories as $item )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="/category-restore/{{$item->slug  }}" class="btn btn-success">Restore</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
