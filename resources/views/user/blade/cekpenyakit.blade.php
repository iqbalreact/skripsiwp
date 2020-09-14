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
                        <form action="{{route('perhitunganwp')}}" method="post">
                            @csrf
                            <div class="row" style="margin-top: -100px">
                                <div class="col-lg-12">
                                    <div class="apply_info_text text-center">
                                        <h3>Masukan Gejala Pada Tanaman Anggrek</h3>
                                        <p>Silahkan pilih gejala pada tanaman anggrek</p>
                                    </div>
                                </div>
                                @if (count($subkriterias) != 0)
                                    @foreach ($subkriterias as $subkriterias)            
                                    <div class="col-md-12">
                                        <div class="single_field">
                                        <label for="">Kondisi <b>{{$subkriterias->namakriteria}}</b></label>
                                        <input type="hidden" name="kriteria[]" value="{{$subkriterias->id}}">
                                        <select name="bobot[]" required>
                                            <option value="">Pilih</option>
                                            {{-- <option value="1">Tidak Ada Gejala</option> --}}
                                            @foreach($subkriterias->Subkriterias as $sub)
                                                <option value="{{$sub->bobotsub}}">{{$sub->namasub}}</option>
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