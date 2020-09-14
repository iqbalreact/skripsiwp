@extends('user.blade.home')

@section('content')
        <!-- slider_area_start -->
        <div class="slider_area">
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="slider_text">
                                <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">Sistem Deteksi Penyakit Anggrek</h3>
                                <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                                    <a href="{{url('/cekpenyakit')}}" class="boxed-btn3">Cek Penyakit Anggrek</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider_area_end -->
    
       
        <!-- about_area_start  -->
        {{-- <div class="about_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="about_img wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                            <img src="{{asset('user/img/about/anggrek.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about_info pl-68">
                            <div class="section_title wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".3s">
                                <h3>Tentang Aplikasi</h3>
                            </div>
                            <p class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">Esteem spirit temper too say adieus who direct esteem.It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable.</p>
                            <div class="about_list">
                                <ul>
                                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">Loans with quick approval.</li>
                                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s">Customize a loan based on the amount.</li>
                                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".7s">Good credit profile and you have built your loan.</li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".8s">
                                    <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".9s">We provide online instant cash loans.</li>
                                </ul>
                            </div>
                            <div class="about_btn wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".5s">
                                <a class="boxed-btn3" href="apply.html">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- about_area_end  -->
    
        <div class="works_area" style="margin-top: -100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center mb-90">
                            <span class="wow lightSpeedIn" data-wow-duration="1s" data-wow-delay=".1s"></span>
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">Cara Kerja Aplikasi</h3>
                            {{-- <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">We provide online instant cash loans with quick approval that suit your term</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <span>
                                01
                            </span>
                            <h3>Klik Cek Penyakit</h3>
                            <p>Klik tombol cek penyakit yang ada pada menu Beranda</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <span>
                                02
                            </span>
                            <h3>Pilih Gejala Pada Anggrek</h3>
                            <p>Pilih gejala sesuai yang ada pada tanaman anggrek, jika tidak ada gejala pilih tidak ada gejala pada pilihan</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <span>
                                03
                            </span>
                            <h3>Dapatkan Hasil Diagnosis</h3>
                            <p>Hasil yang ditampilkan merupakan urutan rekomendasi penyakit paling terdekat hingga terjauh dengan gejala</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="accordion_area">
            <div class="container">
                <div class="row justify-content-end">
                    <div>
                    <img src="{{asset('user/img/about/anggrek.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="faq_ask pl-68">
                            <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Jenis Penyakit</h3>
                            <div id="accordion">
                                <div class="card wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".3s">
                                    <div class="card-header" id="headingOnee">
                                        <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOnee" aria-expanded="true" aria-controls="collapseOnee">
                                            Busuk hitam
                                        </button>
                                        </h5>
                                    </div>
                                
                                    <div id="collapseOnee" class="collapse show" aria-labelledby="headingOnee" data-parent="#accordion">
                                        <div class="card-body">
                                            Penyakit ini terutama dijumpai pada anggrek Cattleya sp, Phalaenopsis sp, dendrodium sp, epidendrum sp dan Oncidium sp. Infeksi tampak pada daun bercak berwarna ungu kecoklatan dikelilingi lingkran kuning. Batang dipangkalnya berwarna hitam, akar berwarna hitam keunguan terdapat benang-benang jamur putih.Penyebaran penyakit ini sangat cepat ketika lingkungan lembab. Solusi penanganan bisa potong bagian yang terkena penyakit. Pemberian fungisida (fosetyl-al, mefenoxam, banrot, subdue)
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Antraknosa
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                            <div class="card-body">Penyakit ini dijumpai pada anggrek jenis Dendrobium sp, Arachnis sp, Ascocendo sp, Phalaenopsis sp, Vanda sp, Oncidium sp. Infeksi pada daun terdapat bercak cekung tidak beraturan berwarna coklat kehitaman mengumpul, dimulai dari ujung daun. Batang tampak kerdil dan bercak coklat/hitam kecil pada bunga. Mudah terserang pada cuaca lembab/hujan dipancarkan dari percikan air hujan/siraman dan bisa dari serangga. Penanganan berupa membuang bagian yang terserang serta fungisida(metil tiophanat dan mancozeb)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Layu sclerotium
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                            <div class="card-body">Penyakit ini menyerak jenis anggrek terrestrial seperti Vanda sp, Arachnis. Infeksi pada daun menjadi menguning dan layu dimulai dari daun muda. Pangkal batang membusuk membentuk benang jamur putih dan ada berbutir coklat. Akar membusuk berwarna hitam. Menyerang pada cuaca lembab, menyerang bagian tanaman yang luka. Penanganan dengan memotong bagian yang terserang atau dengan dibakar.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".6s">
                                        <div class="card-header" id="headingThree4">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                                    Virus Mosaik Cymbidium
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordion" style="">
                                            <div class="card-body">Dijumpai di 8 genera, yaitu Aranthera sp., Calanthe sp., Cattleya sp., Cymbidium sp., Gromatophyllum sp., Phalaenopsis sp., Oncidium sp., dan Vanda sp. Menyerang pada lingkungan yang lembab. Infeksi pada daun tampak bercak berwarna kuning pucat bentuk tidak beraturan(mosaik). Bunga tampak lebih kecil dan ada bercak coklat nekrosis pada petal dan sepalnya. Penanganan dengan melakukan pembuangan bagian tanaman yang terserang.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".6s">
                                        <div class="card-header" id="headingThree4">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                                                    Virus Mosaik Tembakau
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree5" class="collapse" aria-labelledby="headingThree4" data-parent="#accordion" style="">
                                            <div class="card-body">Virus penyakit ini dikenal dengan virus bercak bercincin. Jenis anggrek yang biasa terserang virus ini mencangkup dendrobium sp, Epidendrum sp, Vanda sp, Cattleya sp, Oncidium sp, cymbidium sp, Phalaenopsis.Infeksi pada daun terdapat bercak bercincin dipermukaan daun dan tepi bunga tampak bergelombang. Mudah menyerang tanaman pada lingkungan lembab. Penenganan dengan cara membuang/memotong bagian tanaman yang terserang.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".6s">
                                        <div class="card-header" id="headingThree4">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                                    Hawar Bunga
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree6" class="collapse" aria-labelledby="headingThree4" data-parent="#accordion" style="">
                                            <div class="card-body">Penyakit ini menyerang pada cuaca lembab. Menyerang bunga dengan gejala bintik-bintik hitam, menguning, kering, membusuk pada kuncup. Penanganan dengan memberikan fungisida berupa protein harpin, mancozeb, bacillus subtilis+Trichoderma.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".6s">
                                        <div class="card-header" id="headingThree4">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                                                    Rebah Bibit / Kecambah
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree7" class="collapse" aria-labelledby="headingThree4" data-parent="#accordion" style="">
                                            <div class="card-body">Penyakit in dijumpai ada tanaman muda didalam kompot pada anggrek jenis  Cymbidium sp, Dendrobium sp, Oncidium sp. Infeksi pada daun mudah roboh dan ada bercak bening. Pangkal batang membusuk dan ada bercak bening, warna akar coklat kemerahan dibagian pangkal. Bibit penyakit bisa melalui cipratan air. Penanganan dengan cara membakar tanaman yang terserang.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <br><br> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top : 150px;"></div>

@endsection