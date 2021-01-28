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
                <div class="row justify-content-center" id="form-data">
                    <div class="col-lg-8">
                        <form>
                        {{-- <form action="{{route('perhitunganwp')}}" method="post"> --}}
                            {{-- @csrf --}}
                            <div class="row" style="margin-top: -100px">
                                <div class="col-lg-12">
                                    <div class="apply_info_text text-center">
                                        <h3>Masukan Gejala Pada Tanaman Anggrek</h3>
                                        <p>Silahkan pilih gejala pada tanaman anggrek (Minimal 2)</p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" class="form-control input-lg" id="nama" name="nama" placeholder="Masukan Nama Anda" required>
                                    </div>

                                    <span>Pilih Gejala Pada Tanaman</span>
                                    <hr>
                                </div>

                                <div class="col-md-12">
                                    <div class="single_field">
                                    <label for="">Kondisi <b>{{$subkriterias[0]->namakriteria}}</b></label>
                                    <input type="hidden" id="kriteria1" name="kriteria1" value="{{$subkriterias[0]->id}}">
                                    <select name="bobot1" id="bobot1" class="form-control">
                                        <option value="">Pilih</option>
                                        @foreach($subkriterias[0]->Subkriterias as $sub)
                                            <option value="{{$sub->bobotsub}}">{{$sub->namasub}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single_field">
                                    <label for="">Kondisi <b>{{$subkriterias[1]->namakriteria}}</b></label>
                                    <input type="hidden" id="kriteria2" name="kriteria2" value="{{$subkriterias[1]->id}}">
                                    <select name="bobot2" id="bobot2" class="form-control">
                                        <option value="">Pilih</option>
                                        @foreach($subkriterias[1]->Subkriterias as $sub)
                                            <option value="{{$sub->bobotsub}}">{{$sub->namasub}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single_field">
                                    <label for="">Kondisi <b>{{$subkriterias[2]->namakriteria}}</b></label>
                                    <input type="hidden" id="kriteria3" name="kriteria3" value="{{$subkriterias[2]->id}}">
                                    <select name="bobot3" id="bobot3" class="form-control">
                                        <option value="">Pilih</option>
                                        @foreach($subkriterias[2]->Subkriterias as $sub)
                                            <option value="{{$sub->bobotsub}}">{{$sub->namasub}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single_field">
                                    <label for="">Kondisi <b>{{$subkriterias[3]->namakriteria}}</b></label>
                                    <input type="hidden" id="kriteria4" name="kriteria4" value="{{$subkriterias[3]->id}}">
                                    <select name="bobot4" id="bobot4" class="form-control">
                                        <option value="">Pilih</option>
                                        @foreach($subkriterias[3]->Subkriterias as $sub)
                                            <option value="{{$sub->bobotsub}}">{{$sub->namasub}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="single_field">
                                    <label for="">Kondisi <b>{{$subkriterias[4]->namakriteria}}</b></label>
                                    <input type="hidden" id="kriteria5" name="kriteria5" value="{{$subkriterias[4]->id}}">
                                    <select name="bobot5" id="bobot5" class="form-control">
                                        <option value="">Pilih</option>
                                        @foreach($subkriterias[4]->Subkriterias as $sub)
                                            <option value="{{$sub->bobotsub}}">{{$sub->namasub}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                {{-- @if (count($subkriterias) != 0)
                                    @foreach ($subkriterias as $subkriterias)                                    
                                    <div class="col-md-12">
                                        <div class="single_field">
                                        <label for="">Kondisi <b>{{$subkriterias->namakriteria}}</b></label>
                                        <input type="hidden" name="kriteria[]" value="{{$subkriterias->id}}">
                                        <select name="bobot[]" class="form-control" required>
                                            <option value="">Pilih</option>
                                            @foreach($subkriterias->Subkriterias as $sub)
                                                <option value="{{$sub->bobotsub}}">{{$sub->namasub}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    @endforeach
                                @else                
                                @endif --}}

                                {{-- <div id="klik"> Coba Klik</div> --}}
                                
                                <div class="col-md-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn3" id="submit" type="submit">Cek Penyakit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        
        

        <script>

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function(){

                $('form').on('submit', function(e){
                // var id = getUrlParameter('id');
                e.preventDefault();
                $.ajax({
                    type :'post',
                    url :'{{route('perhitunganwp')}}',
                    data: $('form').serialize(),
                success: function(result){
                        // console.log(result);
                        if (result == 'Pilih Minimal 2 Gejala!') {
                            // alert (result);
                            swal("Oops",result,"error");
                        }
                        else{
                            // console.log(result[0]);
                            swal("Good job!", "Melakukan Diagnosis" ,"success");

                            // $('#form-data').remove();
                            
                            // var id1 = result[0]['id'];
                            // var id2 = result[1]['id'];
                            // var id3 = result[2]['id'];

                            // var nama1 = result[0]['nama'];
                            // var nama2 = result[1]['nama'];
                            // var nama3 = result[2]['nama'];
                            // window.location="hasil?id1="+id1+"&nama1="+nama1+"&id2="+id2+"&nama2="+nama2+"&id3="+id2+"&nama3="+nama3;

                            window.location = "{{route('hasil')}}";
                        }

                        }
                    })
                })

                // $("#submit").click(function(){


                //     var bobot1 = $("#bobot1 option:selected").val();
                //     var bobot2 = $("#bobot2 option:selected").val();
                //     var bobot3 = $("#bobot3 option:selected").val();
                //     var bobot4 = $("#bobot4 option:selected").val();
                //     var bobot5 = $("#bobot5 option:selected").val();
                //     var kriteria1 = $("#kriteria1").val();
                //     var kriteria2 = $("#kriteria2").val();
                //     var kriteria3 = $("#kriteria3").val();
                //     var kriteria4 = $("#kriteria4").val();
                //     var kriteria5 = $("#kriteria5").val();

                //     bobot.push(bobot1, bobot2, bobot3, bobot4, bobot5);
                //     kriteria.push(kriteria1, kriteria2, kriteria3, kriteria4, kriteria5);


                // });
            });

        </script>

@endsection
