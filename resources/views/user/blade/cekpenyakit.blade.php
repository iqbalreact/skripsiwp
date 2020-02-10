@extends('user.blade.home')

@section('content')
          <!-- bradcam_area  -->
          <div class="bradcam_area bradcam_bg_3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>Diagnosis Penyakit</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->
        
        <!-- apply_form_area -->
        <div class="apply_form_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <form action="#" class="apply_form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="apply_info_text text-center">
                                        <h3>Masukan Gejala Pada Tanaman Anggrek</h3>
                                        <p>We provide online instant cash loans with quick approval that suit your term length</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_field">
                                        <label for="">Kondisi Lingkungan</label>
                                        <select class="wide">
                                            <option data-display="Pilih">Pilih</option>
                                            <option value="1">Lembab</option>
                                            <option value="2">Teduh</option>
                                            <option value="2">Kering</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_field">
                                        <label for="">Kondisi Daun</label>
                                        <select class="wide">
                                            <option data-display="Pilih">Pilih</option>
                                            <option value="1">Bercak berwarna ungu kehitaman</option>
                                            <option value="2">Bercak bulat kuning kehijauan ada
                                                bintik jamur</option>
                                            <option value="2">Menguning dan layu</option>
                                            <option value="2">Keriput</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_field">
                                        <label for="">Kondisi Batang</label>
                                        <select class="wide">
                                            <option data-display="Pilih">Pilih</option>
                                            <option value="1">Membusuk dan ada jamur</option>
                                            <option value="2">Membusuk</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_field">
                                        <label for="">Kondisi Umbi/Akar</label>
                                        <select class="wide">
                                            <option data-display="Pilih">Pilih</option>
                                            <option value="1">Berwarna keunguan dan layu</option>
                                            <option value="2">Akar bekas dipotong berwarna
                                                ungu</option>
                                            <option value="2">Akar membusuk</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_field">
                                        <label for="">Kondisi Bunga</label>
                                        <select class="wide">
                                            <option data-display="Pilih">Pilih</option>
                                            <option value="1">Bercak coklat</option>
                                            <option value="2">Tangkai bunga mengering dan
                                                berkerut</option>
                                            <option value="2">Bunga kehitaman dan rontok</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn3" type="submit">Cek Penyakit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection