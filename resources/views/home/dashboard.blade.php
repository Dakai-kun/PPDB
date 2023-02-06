@extends('home.layout')
@section('content')
<div class="justify-content-center">
    @if( $message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
    <h1>Ini Halaman Home</h1>
    <a href="{{route('ppdb.create')}}" class="btn btn-primary">Pendaftaran</a>
@endsection