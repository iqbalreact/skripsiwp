@extends('user.blade.home')

@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_3">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="bradcam_text">
                <h3>Hasil Diagnosis</h3>
            </div>
        </div>
    </div>
</div>
</div>
<!--/ bradcam_area  -->
	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
                <h3 class="mb-30">Hasil Analisis Penyakit Anggrek</h3>
                <hr>
                <p>
                    Berdasarkan gejala yang timbul,  tanaman anggrek Anda mengalami kemungkinan penyakit <strong id="hasilpenyakit"></strong>.
                </p>
                {{-- <p>Berdasarkan perhitungan di atas maka dapat disimpulkan USER memiliki tanaman 
                anggrek yang  menderita penyakit <strong>{{$dataVwp[0]['nama']}}</strong> 
                karena nilai perhitungan hasil dari user menunjukkan kemiripan ke penyakit 
                <strong>{{$dataVwp[0]['nama']}}</strong>.</p> --}}
                {{-- <p style="font-weight : bold"> Nilai Vektor S User : ({{$totalVektorSUser[0]}})</p>
                <p style="font-weight : bold"> Nilai Vektor V User : ({{$vektorVuser[0]}})</p> --}}
                {{-- normalisasi data kriteria --}}
                <hr>
				<div class="row">
                    <div class="col-md-12">
						<div class="single-defination">
                        <h4 class="mb-20">Daftar Kemungkinan Penyakit Anggrek</h4>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="20%">No</th>
                                        <th>Kemungkinan Penyakit</th>
                                        {{-- {{-- <th>Keterangan</th> --}}
                                        <th>Solusi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>

                                        <td>
                                            <p id="nama1">
                                                
                                            </p>

                                        </td>

                                        <td>


                                            <p> 
                                                
                                                <span><b>Keterangan : </b> <span id="ket1"></span></span> <br>
                                                <span><b>Solusi : </b> <span id="sol1"></span></span>

                                            </p>

                                        </td>

                                    </tr>

                                    <tr>
                                        <td>2</td>

                                        <td>
                                            <p id="nama2">
                                                
                                            </p>

                                        </td>

                                        <td>


                                            <p> 
                                                
                                                <span><b>Keterangan : </b> <span id="ket2"></span></span> <br>
                                                <span><b>Solusi : </b> <span id="sol2"></span></span>

                                            </p>

                                        </td>

                                    </tr>


                                    <tr>
                                        <td>3</td>

                                        <td>
                                            <p id="nama3">
                                                
                                            </p>


                                        </td>
                                        <td>


                                            <p> 
                                                
                                                <span><b>Keterangan : </b> <span id="ket3"></span></span> <br>
                                                <span><b>Solusi : </b> <span id="sol3"></span></span>

                                            </p>

                                        </td>

                                    </tr>


                                </tbody>


                            </table>
                        </div>
					</div>   
                </div>

                <div class="row text-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <a href="{{url('/cekpenyakit')}}" class="boxed-btn3">Kembali</a>
                    </div>
                    <div class="col-md-4"></div>
                </div>
			</div>
		</div>
	</div>
    <!-- End Align Area -->
    
    <script>

        var hasil = "{{asset('storage/hasil.json')}}";        

        $.ajaxSetup({ cache: true});
        $.getJSON(hasil, function(response) {

            // console.log(response[0][0]);

            $('#hasilpenyakit').append(response[0][0]);
            $('#nama1').append(response[0][0]);
            $('#nama2').append(response[1][0]);
            $('#nama3').append(response[2][0]);


            $('#ket1').append(response[0][1]);
            $('#ket2').append(response[1][1]);
            $('#ket3').append(response[2][1]);

            $('#sol1').append(response[0][2]);
            $('#sol2').append(response[1][2]);
            $('#sol3').append(response[2][2]);

            $.ajaxSetup({ cache: false});
        });



    </script>

@endsection

