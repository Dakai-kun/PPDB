@extends('payments.layout')
@section('content')
<div class="container d-flex">
    <div>
        <i class="fa-solid fa-user-minus"></i>
    </div>
    <h5 style="margin-left:10px;">Selamat Datang, {{Auth()->user()->name}}</h5>
</div>
@if ($message = Session::get('done'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
@endsection