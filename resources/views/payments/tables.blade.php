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

                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session ('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @elseif (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session ('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @endif

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Validasi Pembayaran</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Registrasi</th>
                                            <th>Nama</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Detail Pembayaran</th>
                                            <th width="100px">Aksi</th>
                                        </tr>
                                        @foreach($payments as $payment)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$payment->id}}</td>
                                            <td>{{$payment->nama_pem}}</td>
                                            <td><a href="/bukti/{{$payment['id']}}">Lihat</a></td>
                                            <td><a href="/detail/{{$payment['id']}} ">Lihat</a></td>
                                            <td>@if($payment['status'] == 1)
                                                <p><h4 style="color:green;">Diterima</h4></p>
                                                @elseif($payment['status'] == 2)
                                                <p><h4 style="color:red;">Ditolak</h4></p>
                                                @else
                                                <form action="{{route('validasi',$payment->id)}}" method="post">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button class="btn btn-success" type="submit">Validasi</button>
                                                </form>
                                                <form action="{{route('tolak',$payment->id)}}" method="post">
                                                @csrf
                                                @method('patch')
                                                <button class="btn btn-danger" type="submit">Tolak</button>
                                                @endif
                                            </form></td>
                                        </tr>
                                        @endforeach
                                </table>
                                {{ $payments->links() }}

                            </div>
                        </div>
                    </div>

                </div>
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