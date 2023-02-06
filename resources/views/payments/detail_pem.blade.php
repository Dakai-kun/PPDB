@extends('payments.layout')
@section('content')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <ul>
        <li>NISN:            {{$ppdb->nisn}}</li>
        <li>NAMA LENGKAP:    {{$ppdb->nama}}</li>
        <li>ASAL SEKOLAH:    @if($ppdb->sekolah == 0) @elseif ($ppdb->sekolah !== 0) {{$ppdb->sekolah}} @else {{$ppdb->n_sekolah}}
        @endif </li>
        <li>JENIS KELAMIN:   {{$ppdb->JK }}</li>
        <li>EMAIL:           ppdb@gmail.com</li>
        <li>NO HP:           {{$ppdb->no_hp}}</li>
        <li>NO AYAH:         {{$ppdb->no_ay}}</li>
        <li>NO IBU:          {{$ppdb->no_ib}}</li>
    </ul>
    <a href="{{route('payments.index')}}">Kembali</a>
  </div>
</div>
@endsection