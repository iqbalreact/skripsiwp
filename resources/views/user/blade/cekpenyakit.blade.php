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
                                @if (count($subkriterias) != 0)
                                    @foreach ($subkriterias as $subkriterias)            
                                    <div class="col-md-12">
                                        <div class="single_field">
                                        <label for="">Kondisi <b>{{$subkriterias->namakriteria}}</b></label>
                                        <select class="wide">
                                            <option data-display="Pilih">Pilih</option>
                                            @foreach($subkriterias->Subkriterias as $sub)
                                                <option value="1">{{$sub->namasub}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    @endforeach
                                @else                
                                @endif
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