@extends('layouts.mainlayout')

@section('title','Deleted book')

@section('content')
<h1>Deleted Book List</h1>

<div class="my-3 d-flex justify-content-end">

    <a href="/books"class="btn btn-primary">Back</a>
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
                <th>Code</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deletedbook as $item )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->book_code }}</td>
                    <td>{{ $item->title }}</td>
                    <td>
                        <a href="/book-restore/{{$item->slug  }}" class="btn btn-success">Restore</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
