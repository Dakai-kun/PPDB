<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    <script type="text/javascript" src="jquery-1.7.min.js"></script>
    <script>
        function show() {
            var asal_sekolah = document.getElementById("asal_sekolah").value;
            var lainnya = document.getElementById("sekolah_lainnya");
            if (asal_sekolah == "lainnya") {
                lainnya.style.display = "";
            } else {
                lainnya.style.display = "none";
            }
        }
    </script>
</head>
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
<body class="bg-light" style="background-image:url('../assets/img/slide_1.jpg')">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Pendaftaran</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="nama" type="text"
                                                        placeholder="Masukan Nama Lengkap" name="nama" />
                                                    <label for="inputFirstName">Nama Lengkap</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="nisn" type="number"
                                                        placeholder="Masukan NISN" name="nisn" />
                                                    <label for="inputLastName">NISN</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" type="email"
                                                placeholder="Masukan Email Aktif" name="email" />
                                            <label for="inputEmail">Email Aktif</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="theSelect form-control" name="sekolah"
                                                id="asal_sekolah" onchange="show()">
                                                <option ></option>
                                                <option>esempe 1</option>
                                                <option>esempe 2</option>
                                                <option>esempe 3</option>
                                                <option>esempe 4</option>
                                                <option>esempe 5</option>
                                                <option>esempe 6</option>
                                                <option>esempe 7</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="form-floating mb-3" id="sekolah_lainnya" style="display: none;">
                                            <input class="form-control" type="text"
                                                placeholder="Masukan Nama Sekolah" name="n_sekolah" />
                                            <label for="asal_sekolah">Masukan Nama Sekolah</label>
                                        </div>
                                        <select name="JK" class="form-select mb-3">
                                            <option hidden>Jenis Kelamin</option>
                                            <option value="perempuan">Perempuan</option>
                                            <option value="laki-laki">Laki - Laki</option>
                                        </select>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="no_hp" type="number"
                                                placeholder="Contoh: 08....." name="no_hp" />
                                            <label for="no_hp">Nomer Handphone</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="no_ay" type="number"
                                                placeholder="Contoh: 08....." name="no_ay" />
                                            <label for="no_ay">Nomer Handphone Ayah</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="no_ib" type="number"
                                                placeholder="Contoh: 08....." name="no_ib" />
                                            <label for="no_ib">Nomer Handphone Ibu</label>
                                        </div>
                                        <div class="mt-4 mb-0 d-flex">
                                            <button class="d-grid btn btn-lg btn-primary mt-4"
                                                data-target="">Submit</button>
                                                <a href="" style="color:white;">a</a>
                                                <a href="/" class="btn btn-lg btn-danger mt-4">Back</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script>
        $(".theSelect").select2({
            placeholder: 'Asal Sekolah',
            allowClear: true
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>