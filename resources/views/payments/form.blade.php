@extends('payments.layout')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container d-flex">
                        <div>
                            <i class="fa-solid fa-user-minus"></i>
                        </div>
                        <h5 style="margin-left:10px;">Selamat Datang, {{Auth()->user()->name}} 
                            @if(Auth()->user()->name == 'admin') / <div class="text-grey-400">Verifikasi Pembayaran</div>@endif</h5>
                    </div>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @endif
                    @if(empty($payment->bank))
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                            <div class="card-header">
                                                <h3 class="text-center font-weight-light my-4">Pembayaran</h3>
                                                @error('bank')
                                                    {{$message}}
                                                @enderror
                                                @error('nama_pem')
                                                    {{$message}}
                                                @enderror
                                                @error('nominal')
                                                    {{$message}}
                                                @enderror
                                                @error('n_bank')
                                                    {{$message}}
                                                @enderror
                                                @error('image')
                                                    {{$message}}
                                                @enderror
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ route('payments.store') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row mb-3">
                                                        <div class="col-md-4">
                                                        <label for="form-label">Nama Bank</label>
                                                            <select class="theSelect form-control" name="bank" id="bank" onchange="show()">
                                                                <option hidden>Pilih Bank</option>
                                                                <option>bank 1</option>
                                                                <option>bank 2</option>
                                                                <option>bank 3</option>
                                                                <option>bank 4</option>
                                                                <option>bank 5</option>
                                                                <option>bank 6</option>
                                                                <option>bank 7</option>
                                                                <option value="lainnya">Lainnya</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="inputLastName">Nama Pemilik Rekening</label>
                                                            <div class="form-floating">
                                                                <input class="form-control" id="nama_pem" type="text"
                                                                placeholder="Masukan Nama Pemilik Rekening" name="nama_pem" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="inputLastName">Nominal</label>
                                                            <div class="form-floating">
                                                                    <div class="input-group mb-3">
                                                                        <span class="input-group-text">Rp</span>
                                                                    <input class="form-control" id="nominal" type="number" 
                                                                        placeholder="Masukan Nominal" name="nominal">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating mb-3" id="bank_lainnya" style="display: none;">
                                                        <label for="bank">Nama Bank atau Dompet Digital</label>
                                                        <input class="form-control" type="text"
                                                            placeholder="Masukan Nama Bank atau Dompet Digital" name="n_bank" />
                                                    </div>
                                                    <div class="form-floating mb-3 input-group">
                                                        <input class="form-control" id="inputGroupFile02" type="file"
                                                            placeholder="Foto" name="image">
                                                        <label class="input-group-text" for="inputGroupFile02">Foto</label>
                                                    </div>
                                                    <div class="mt-4 mb-0 d-flex">
                                                        <button class="d-grid btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            @elseif($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
            @endif
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script>
        function show() {
            var bank = document.getElementById("bank").value;
            var lainnya = document.getElementById("bank_lainnya");
            if (bank == "lainnya") {
                lainnya.style.display = "";
            } else {
                lainnya.style.display = "none";
            }
        }
    </script>
@endsection