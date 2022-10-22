@extends('layouts.mainlayout')

@section('title','book')

@section('content')
<h1>Konsumen</h1>

<div class="my-3 d-flex justify-content-end">
    <a href=""class="btn btn-secondary me-3">View Deleted Data</a>
    <a href=""class="btn btn-primary">Add Data</a>
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
                <th>Nama_Konsumen</th>
                <th>Alamat</th>
                <th>telp</th>
                <th>Email</th>
                <th>Aksi</th>


            </tr>
        </thead>
        {{-- <tbody>
            @foreach ($konsumens as $item )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->Nama_Konsumen }}</td>
                <td>{{ $item->Alamat }}</td>
                <td>{{ $item->telp }}</td>
                <td>{{ $item->Email }}</td> --}}



                {{-- <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div> --}}
@endsection
