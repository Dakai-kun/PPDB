
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SMK WIKRAMA</title>
        
<!-- 

Sentra Template

https://templatemo.com/tm-518-sentra

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../assets/css/fontAwesome.css">
        <link rel="stylesheet" href="../assets/css/light-box.css">
        <link rel="stylesheet" href="../assets/css/owl-carousel.css">
        <link rel="stylesheet" href="../assets/css/templatemo-style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>



        <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><a href="#top">Home</a></li>
                        <li><a href="#featured">Jurusan</a></li>
                        <li><a href="#projects">Galeri</a></li>
                        <li><a href="#video">Presentasi</a></li>
                        <li><a href="#blog">Berita</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
            <div class="logo">
                <a href="#">SMK<em>WIKRAMA<em>Bogor</em></a>
            </div>
            <nav>
                <ul>
                    @auth
                    <li class="dropdown open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Hello, {{Auth()->user()->name}} </span></a>
                        <ul class="dropdown-menu">
                            <form action="/data" method="get">
                                <li><button type="submit" style="border:none;padding-left:20px;padding-right:50px;font-size:15px;background:transparent" class="text-black">Pembayaran</button></li>
                            </form>
                        <!-- <li class="divider"></li> -->
                        <form action="/logout" method="post">
                            @csrf
                            <li><Button type="submit" style="border:none;padding-left:20px;padding-right:50px;font-size:15px;background:transparent">Logout</Button></li>
                        </form>
                        </ul>
                    </li><br><br>
                        @else
                    <li>
                        <form action="{{route ('login')}}" method="get">
                            @csrf
                            <span class="rect"></span>
                            <span class="circle"></span>
                            <button type="submit" class="text-white" style="border:none;background:transparent;font-size:15px;">
                                Login
                            </button>
                        </form>
                    </li><br><br>
                    @endauth
                    <li>
                        <a href="#top">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#featured">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Jurusan
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Galeri
                        </a>
                    </li>
                    <li>
                        <a href="#video">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Presentasi
                        </a>
                    </li>
                    <li>
                        <a href="#blog">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Berita
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Kontak
                        </a>
                    </li>
                </ul>
            </nav>
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>                
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>

        <div class="slider">
            <div class="Modern-Slider content-section" id="top">
                <!-- Item -->
                <div class="item item-1">
                    <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                        <div>
                          <h1>Sekolah Menengah Kejuaruan<br>WIKRAMA BOGOR</h1>
                          <p>There Is No Learning Community<br>
                          	Without Vission School Leadership.</p>
                          <div class="white-button button">
                              <a href="{{route ('ppdb.create')}}">-->Pendaftraan PPDB<--</a>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="item item-2">
                    <div class="img-fill">
                        <div class="image"></div>
                        <div class="info">
                        <div>
                          <h1>Sekolah Menengah Kejuaruan<br>WIKRAMA BOGOR</h1>
                          <p>There Is No Learning Community<br>
                            Without Vission School Leadership.</p>
                          
                          <div class="white-button button">
                              <a href="form.html    ">-->Pendaftraan PPDB<--</a>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
                <!-- Item -->
                
                <!-- // Item -->
            </div>
        </div>


        <div class="page-content">
            <section id="featured" class="content-section">
                <div class="section-heading">
                    <h1>jurusan <br><em>SMK WIKRAMA BOGOR</em></h1>
                </div>
                <div class="section-content">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="image">
                                <img src="../assets/img/pplg.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>PPLG</h4>
                                <span>Pengembangan Perangakat Lunak Dan Gim</span>
                                <p>Keunggulan: Desktop Programming, Web Programming, Mobile Programming, Bussiness Analyst, Database Administration.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="../assets/img/mplb.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>MPLB</h4>
                                <span>Manajemen Perkantoran Lembaga Bisnis</span>
                                <P>Keunggulan: Program keahlian Manajemen Perkantoran dan Layanan Bisnis memiliki keunggulan dibidang prestasi peserta didik seperti juara II lomba keterampilan siswa bidang lomba sekretaris tingkat provinsi tahun 2016 dan juara I lomba olimpiade sekretaris tingkat nasional tahun 2017</P>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="../assets/img/tkj.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>TJKT</h4>
                                <span>Teknik Jaringan Komputer Dan Telekominasi</span>
                                <p>Keunggulan: Program keahlian Teknik Jaringan Komputer dan Telekomunikasi sudah memiliki sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA (Mikrotik Certified Network Associate).</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="../assets/img/dkv.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>DKV</h4>
                                <span>Desain Komukasi Visual</span>
                                <p>Keunggulan: Lulusan dapat memiliki kesempatan kerja yang luas dibidang periklanan, production house, radio & televisi, studio foto, percetakan grafis, corporate brand identity, penerbit majalan/Koran, dll.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="../assets/img/bdp.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>BDP</h4>
                                <span>Bisnis Daring Dan Pemasaran</span>
                                <p>Keunggulan: Program  keahlian Pemasaran memiliki kompetensi yang mirip dengan program Multimedia dan Perkantoran. Lulusan program ini diharuskan mampu membuat foto produk, desain, copy writing, dll.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="../assets/img/tbg.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>TBG</h4>
                                <span>Tataboga</span>
                                <p>Keunggulan: Siswa jurusan Kuliner mampu bekerja diberbagai bidang jasa boga seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah dipelajari.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="../assets/img/hotel.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>HTL</h4>
                                <span>Hotel</span>
                                <p>Keunggulan: Siswa Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                            </div>
                    </div>
                </div>
            </section>
            <section id="projects" class="content-section">
                <div class="section-heading">
                    <h1>Galeri<br><em>SMK WIKRAMA BOGOR</em></h1>
                    
                </div>
                <div class="section-content">
                    <div class="masonry">
                        <div class="row">
                            <div class="item">
                                <div class="col-md-8">
                                    <a href="../assets/img/portfolio_big_1.jpg" data-lightbox="image"><img src="../assets/img/portfolio_1.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item second-item">
                                <div class="col-md-4">
                                    <a href="../assets/img/portfolio_big_2.jpg" data-lightbox="image"><img src="../assets/img/portfolio_2.jpg" alt="image 2"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="../assets/img/portfolio_big_3.jpg" data-lightbox="image"><img src="../assets/img/portfolio_3.jpg" alt="image 3"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="../assets/img/portfolio_big_4.jpg" data-lightbox="image"><img src="../assets/img/portfolio_4.jpg" alt="image 4"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-8">
                                    <a href="../assets/img/portfolio_big_5.jpg" data-lightbox="image"><img src="../assets/img/portfolio_5.jpg" alt="image 5"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </section>
            <section id="video" class="content-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h1>Presentasi <em>SMK WIKRAMA BOGOR</em></h1>
                        
                    </div>
                    <div class="col-md-12">
                        <div class="box-video">
                            <div class="bg-video" style="background-image: url(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D7xf7D3QnoEc&psig=AOvVaw06Iw-Pi5Ttckkaq02WdMeW&ust=1672535996161000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCPj6mcXjovwCFQAAAAAdAAAAABAJ );">
                                <div class="bt-play">Play</div>
                            </div>
                            <div class="video-container">
                                <iframe width="100%" height="520" src="https://www.youtube.com/embed/7xf7D3QnoEc?controls=0"   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="blog" class="content-section">
                <div class="section-heading">
                    <h1>Berita Terbaru<br><em>SMK WIKRAMA BOGOR</em></h1>
                </div>
                <div class="section-content">
                    <div class="tabs-content">
                        <div class="wrapper">
                            <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                              <li><a href="#tab1" class="active">September 2022</a></li>
                              <li><a href="#tab2">Oktober  2022</a></li>
                              <li><a href="#tab3">November 2022</a></li>
                              <li><a href="#tab4">Desember 2022</a></li>
                            </ul>
                            <section id="first-tab-group" class="tabgroup">
                                <div id="tab1">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/juara1.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Alya Raih Juara 2 dalam Festival Perkantoran Tingkat Nasional Tahun 2022</h4>
                                                    <span>5 September 2022</span>
                                                    <p>Alya Nurshifa, jurusan Manajemen Perkantoran dan Layanan Bisnis meraih Juara 2 dalam
                                                        "FESTIVAL PERKANTORAN TINGKAT NASIONAL TAHUN 2022"
                                                        
                                                        <span>Yang diselenggarakan oleh Universitas Sebelas Maret.</span> </p>
                                                    
                                                    <div class="accent-button button">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/produk lokal.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Wikrama Berpartisipasi dalam Festival Produk Lokal</h4>
                                                    <span>6 September 2022</span>
                                                    <p>SMK Wikrama Bogor berpartisipasi dalam
                                                        Festival Produk Lokal yang diselenggarakan oleh Festival Merah Putih dan HIPMI Kota Bogor di Lippo Plaza Ekalokasari Bogor (21/98/2022).
                                                        
                                                        SMK Wikrama menampilkan produk digital berupa Smartcard Attempt dan beberapa produk kuliner dari jurusan Tata Boga.
                                                        
                                                        Produk Wikrama mendapat apresiasi dari Pak Bima Arya Loohh</p>
                                                    
                                                    <div class="accent-button button">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/tamu.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Penerimaan Tamu 43 Kepala SMK Indonesia</h4>
                                                    <span>16 September 2022</span>
                                                    <p>Penerimaan tamu Kepala SMK peserta pelatihan "Strategi Mewujudkan SMK Pusat Keunggulan"

                                                        Terima kasih atas kunjungan Bapak/Ibu sekalian, semoga bisa terus berbagi inspirasi
                                                        
                                                        Terima kasih juga untuk peserta didik jurusan Perhotelan dan Kuliner, atas pelayanan prima yang diberikan kepada tamu.</p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab2">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/pmr.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Gerakan Nasional Aksi Bergizi di SMK Wikrama</h4>
                                                    <span>10 Oktober 2022</span>
                                                    <p>Gerakan Nasional Aksi Bergizi
                                                        Terima kasih atas kepercayaaan yang diberikan kepada SMK Wikrama Bogor untuk menjadi penyelenggara Gerakan Nasional Aksi Bergizi di Kota Bogor
                                                        Gerakan ini dilaksanakan sebagai implementasi Pembudayaan Germas di Tatanan sekolah dengan kegiatan berupa Senam Bersama, Sarapan Bersama dan Minum Tablet Tambah Darah (TTD) bagi Remaja Putri.
                                                        Kegiatan ini dilakukan secara serentak di seluruh Indonesia pada tanggal 26 Oktober 2022 jam 08.00 WIB.                                                      

                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/goes to japan.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>WIKRAMA GOES TO JAPAN</h4>
                                                    <span>26 Oktober 2022</span>
                                                    <p>Qeyla Raiq Alva saat ini sudah berada di Jepang untuk mengikuti rangkaian program Sakura Science High School Program (SSHP) Tahun 2022 di Tokyo.

                                                        Qeyla mewakili Indonesia bersama 2 pelajar lain dalam program ini.
                                                        
                                                        SSHP 2022 diselenggarakan atas kerjasama @direktoratsmk @kemdikbud.ri, International Test Center (ITC), dan JST (Japan Science and Technology Agency).
                                                        
                                                        Program bertujuan memperluas wawasan para pelajar SMK dalam bidang sains dan teknologi.
                                                        
                                                        Good Luck, Qeyla!
                                                        </p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/futsal.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Tim Futsal Wikrama Raih Juara 3 Sport Competitions 2022!</h4>
                                                    <span>31 Oktober 2018</span>
                                                    <p>Tim Futsal SMK Wikrama Bogor raih Juara 3 dalam SPEAK XII CONSTELLATION, SPORT COMPETITIONS 2022!
                                                        Yang diselenggarakan oleh SMA Kesatuan (3-8 Oktober 2022)                                                        
                                                        <span>Selamat untuk Tim "Garuda Wikrama"</span> 
                                                        </p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab3">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/chelsea.jpg " alt="">
                                                <div class="text-content">
                                                    <h4>Chelsea Masuk 10 Besar FLS2N Tingkat Nasional 2022!</h4>
                                                    <span>14 November 2022</span>
                                                    <p>Tiada Hari Tanpa Prestasi Selamat atas prestasi yang diraih oleh peserta didik SMK Wikrama Bogor, Aprilla Chelsea Herlambang yang masuk nominasi 10 besar nasional dalam FLS2N Tahun 2022, bidang lomba Menyanyi Solo.</p>
                                                    
                                                    <div class="accent-button button">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/juara3.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Prestasi Kembali diraih SMK Wikrama Bogor ????</h4>
                                                    <span>30 November 2022</span>
                                                    <p>SMK Wikrama raih juara 3 dalam Bogor Innovation Award (BIA) tahun 2022 bidang Inovasi Kategori Perguruan Tinggi, Lembaga/Pelaku Usaha yang diselenggarakan oleh BAPPEDA Kota Bogor (31/11/2022).

                                                        Lomba diikuti oleh Guru jurusan Pemasaran SMK Wikrama, Rina Finanti, Shinta Oktavia, M. Rizky Rhamadan dan Noor Muhammad Reksy yang membawakan tema:
                                                        
                                                        "Peran Pembelajaran Praktik Berbasis Kelas Industri pada Siswa Pemasaran untuk Peningkatan Hard Skill dan Sofskill".
                                                        
                                                        Selamat!!!</p>
                                                    
                                                    <div class="accent-button button">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/smk pk.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>SMK Wikrama Bogor terpilih sebagai SMK PK terbaik program Cybersecurity Training & Certification Mastercard Academy 2.0</h4>
                                                    <span>31 November 2022</span>
                                                    <p>
                                                        Penghargaan diberikan secara langsung oleh Director Public Policy Mastercard Indonesia, Mr. Wilson Siahaan, serta sebagai Pembina InfraDigital Foundation, Mr. Ian McKenna kepada Kepala SMK Wikrama Bogor, Iin Mulyani di Jakarta pada Selasa, 29 November 2022.
                                                        
                                                        SMK Wikrama Bogor dinilai telah menunjukkan komitmennya demi mendukung upaya pemerintah Indonesia dalam melahirkan talenta digital.
                                                  </p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab4">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/blog_1.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Lorem ipsum dolor sit</h4>
                                                    <span>26 April 2018</span>
                                                    <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>                                
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/blog_3.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Integer ultrices augue eu</h4>
                                                    <span>24 April 2018</span>
                                                    <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/blog_2.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Cras commodo odio ut</h4>
                                                    <span>20 April 2018</span>
                                                    <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section> 
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="content-section">
                <div id="map">
                
                	<!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0158481205144!2d106.84162231477129!3d-6.644953095195113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sSMK%20Wikrama%20Bogor!5e0!3m2!1sid!2sid!4v1672451963813!5m2!1sid!2sid" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div id="contact-content">
                    <div class="section-heading">
                        <h1>Kontak<br><em>SMK WIKRAMA BOGOR</em></h1>        
                        
                    </div>
                    <div class="section-content">
                        <form id="contact" action="#" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-4">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                  </fieldset>
                                </div>
                                 <div class="col-md-4">
                                  <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="footer">
                <p>Copyright &copy; 2022
            </section>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

</body>
</html>