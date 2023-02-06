@extends('payments.layout')
@section('content')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <div class="proof">
    <img src="{{asset('storage/assets/img/' . $payments->image)}}" alt="">
        <h6>Nama Bank: {{$payments->bank}}</h6>
        <h6>Nama Pemilik Rekening: {{$payments->nama_pem}}</h6>
        <h6>Nominal: Rp.{{$payments->nominal}}</h6>
    </div>
    <a href="{{route('payments.index')}}">Kembali</a>
  </div>
</div>
@endsection