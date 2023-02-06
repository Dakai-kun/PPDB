@extends('ppdb.layout')
@section('layout')
<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$split = explode('-', $tanggal);
	
	// variabel split 0 = tanggal
	// variabel split 1 = bulan
	// variabel split 2 = tahun
 
	return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}
?>

<div class="print-area" id="konten1">
    <div class="container d-flex mt-4">
        <div class="header">
            <img src="../assets/img/logo-wk.png" width="110">
        </div>
        <div class="alamat m-4 mt-4 ">
            <h6><strong>PANITIA PENERIMAAN PESERTA DIDIK BARU</strong></h6>
            <h6 class="sekolah-pdf"><strong>SMK WIKRAMA BOGOR TP.2023-2024</strong></h6>
            <H6>Jl. Raya Wangun Kel. Sindangsari Kec. Bogor Timur Kota Bogor</H6>
            <h6>Email : prohumasi@smkwikrama.sch.id | Website : http://smkwikrama.sch.id//</h6>
        </div>
    </div>
    <div class="container mt-2" align="center">
        <h6><strong>TANDA BUKTI PENDAFTARAN</strong></h6>
        <h6 class="sekolah-pdf"><strong>Smk Wikrama Bogor TP.2023-2024</strong></h6>
    </div><br>
    <div class="container">
        <div class="teks">
            <ol type="I">
                <div class="teks2"><li class="title"><strong>BIODATA CALON PERSERTA DIDIK</strong></li><br>
                <strong>TANGGAL DAFTAR: </strong><?= tgl_indo(date('Y-m-d')); ?><br>
                @foreach($ppdb as $p)
                <strong>NOMOR SELEKSI:  </strong> {{$p->id }}<br>
                <strong>NAMA LENGKAP:   </strong> {{$p->nama}}<br>
                <strong>NISN:           </strong> {{$p->nisn}}<br>
                <strong>ASAL SEKOLAH:   </strong> @if($p->sekolah == 0) @elseif ($p->sekolah !== 0) {{$p->sekolah}} @else {{$p->n_sekolah}}<br>
                @endif <br>
                <strong>NO HP:          </strong> {{$p->no_hp}}<br>
                <strong>EMAIL:          </strong> ppdb@gmail.com<br>
                <strong>NO AYAH:        </strong> {{$p->no_ay}}<br>
                <strong>NO IBU:         </strong> {{$p->no_ib}}<br><br>
                @endforeach
                <div><li class="title"><strong>INFORMASI DAN PERSYARATAN</strong></li><br></div>
                <ol type="A">
                    <li><strong>Akun Anda</strong></li>
                    Akses ppdb-smkwikrama/student, login gunakan <br>
                    Email : example@example.com <br>
                    Password : 12108397 <br>
                    Akun ini digunakan untuk mengecek pendaftaran status pada SIM PPDB Smk Wikrama Bogor. <br><br>
                    <li><strong>Foto/Scan Dokumen yang Harus Dipersiapkan</strong></li>
                    <ol type="1">
                        <li>Persyartan satu</li>
                        <li>Persyartan dua</li>
                        <li>Persyartan tiga</li>
                    </ol><br>
                    <li><strong>Biaya Seleksi</strong></li>
                    <p>Pembayaran uang seleksi sebesar Rp. 200.000 melalui transfer bank: Bank BNI: 1234567890 A.N Smk Wikrama Bogor.</p>
                </ol>
            </ol>
        </div>
    </div>
</div>
<br>
<button onclick="printContent('konten1')" class="btn btn-primary">Cetak</button>
<br><br>

<title>Print Page</title>
<script>
    function printContent(el)/*el di sini sebagai perwakilan dari id-id di bawah */{
			var restorepage = document.body.innerHTML;
			var printcontent = document.getElementById(el).innerHTML;
			document.body.innerHTML = printcontent;
			window.print();/*fungsi untuk mencetak*/
			document.body.innerHTML = restorepage;
		}
</script>
@endsection