@extends('layouts.mainlayout')

@section('title','dashboard')

@section('content')
<h1>Welcome, {{ Auth::user()->username }}</h1>
<div class="row mt-5">
    <div class="col-lg-4  ">
        <div class="card-data book">
            <div class="row">
                <div class="col-6"><i class="bi bi-journal-bookmark"></i></div>
                <div class="col-6  d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Produk</div>
                    <div class="card-count">{{ $produks }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4  ">
        <div class="card-data user">
            <div class="row">
                <div class="col-6"><i class="bi bi-people"></i></div>
                <div class="col-6  d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">user</div>
                    {{-- <div class="card-count">{{  }}</div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4  ">
        <div class="card-data user">
            <div class="row">
                <div class="col-6"><i class="bi bi-people"></i></div>
                <div class="col-6  d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">konsumen</div>
                    {{-- <div class="card-count">{{  }}</div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4  ">
        <div class="card-data user">
            <div class="row">
                <div class="col-6"><i class="bi bi-people"></i></div>
                <div class="col-6  d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Pembayaran</div>
                    {{-- <div class="card-count">{{  }}</div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4  ">
        <div class="card-data categories">
            <div class="row">
                <div class="col-6"><i class="bi bi-list-task"></i></div>
                <div class="col-6  d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">categories</div>
                    {{-- <div class="card-count">{{  }}</div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5">
    <h2>#Rent Log</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>user</th>
                <th>Book Title</th>
                <th>Rent Date</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7" style="text-align: center">No data</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
