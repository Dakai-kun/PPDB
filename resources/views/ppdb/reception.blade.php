@extends('ppdb.layout')
@section('layout')
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ $message }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div>
    @elseif (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
             @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
    @elseif ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nisn:</strong>
                <input type="number" name="nisn" class="form-control" placeholder="NISN">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>jenis kelamin:</strong>
                <select name="JK" class="form-control">
                  <option hidden value="--Pilih Jenis Kelamin--">--Pilih Jenis Kelamin--</option>
                  <option value="laki-laki">Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sekolah:</strong>
                <select name="sekolah" class="form-control" onchange="showDiv('hidden_div',this)">
                  <option hidden value="--Pilih Sekolah--">--Pilih Sekolah--</option>
                  <option value="sekolah a">A</option>
                  <option value="sekolah b">B</option>
                  <option value="sekolah c">C</option>
                  <option value= 0>Lainnya</option>
                </select>
                <div id="hidden_div"><Strong>Nama Sekolah</Strong>
                <input type="text" name="n_sekolah" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="example@example.com" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No.HP:</strong>
                <input type="number" name="no_hp" class="form-control" placeholder="08--------" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No.Ayah:</strong>
                <input type="number" name="no_ay" class="form-control" placeholder="08--------" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No.Ibu:</strong>
                <input type="number" name="no_ib" class="form-control" placeholder="08--------" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a target="_blank" href="{{route('ppdb.store')}}" style="text-decoration:none"><button target="_blank" class="btn btn-primary mt-2">Submit</button> </a>
                <a href="/" class="btn btn-danger mt-2">Back</a>
        </div>
    </div>
</form>
<script>
    function showDiv(divId, element) {
        document.getElementById(divId).style.display = element.value == 0 ? 'block' : 'none';
    }
</script>
@endsection
