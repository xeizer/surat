@extends('surat/layout')
@section('content')
<div class="container-fluid" style="min-height: 73.5vh;">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card text-center m-3">
                <div class="m-3 rounded-circle">
                    <img src="{{asset('foto/pp.jpg')}}" class="rounded-circle" style="width: 100%; height: 100%;">
                </div>
            <div class="card-body">
                <h5 class="card-title">Olivert</h5>
                <p class="card-text">UI/UX Developers</p>
            </div>
        </div>
    </div>
</div>
@endsection