@extends('layouts.mainlayout')

@section('title','book')

@section('content')
<h1>Pemesanan</h1>

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
                <th>Nama_Produk</th>
                <th>Harga_produk</th>
                <th>Deskripsi_produk</th>
                <th>Aksi</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($pemesanans as $item )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->harga }}</td>
                <td>
                    {{-- @foreach ($item->categories as $category )
                        {{ $category->name }} <br>
                    @endforeach --}}
                    {{ $item->deskripsi_produk }}
                </td>

                <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
