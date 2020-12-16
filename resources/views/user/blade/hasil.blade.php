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
                {{-- {{dd($dataVwp)}} --}}
                <p>
                    Berdasarkan gejala yang timbul,  tanaman anggrek Anda mengalami kemungkinan penyakit <strong>{{$dataVwp[0]['nama']}}</strong>.
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
                            {{-- {{print_r($normalisasi)}} --}}
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="10%">No</th>
                                        <th>Kemungkinan Penyakit</th>
                                        {{-- <th>Keterangan</th>
                                        <th>Solusi</th> --}}
                                        {{-- <th>Nilai Vektor V Terdekat</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- {{dd($dataVwp)}} --}}
                                    {{-- @foreach ($dataVwp as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item['nama']}}</td>
                                        <td>Lorem, ipsum dolor.</td>
                                        <td>Lorem, ipsum dolor.</td> --}}
                                        {{-- <td>{{$item['vektorv']}}</td> --}}
                                        {{-- <td>{{$nilaivektor}}</td> --}}
                                    {{-- </tr>
                                    @endforeach --}}
                                    <tr>
                                        {{-- {{dd($dataVwp)}} --}}
                                        <td>1</td>
                                        <td>
                                            <p>
                                                {{$dataVwp[0]['nama']}}
                                            </p>

                                            <p>
                                                <span><b>Keterangan : </b></span>{{getKeterangan($dataVwp[0]['id'])}}
                                            </p>

                                            <p>
                                                <span><b>Solusi : </b></span>{{getSolusi($dataVwp[0]['id'])}}
                                            </p>
                                            
                                        </td>
                                    </tr>

                                    {{-- <tr>
                                        <td>2</td>
                                        <td>{{$dataVwp[1]['nama']}}</td>
                                        <td>{{getKeterangan($dataVwp[1]['id'])}}</td>
                                        <td>{{getSolusi($dataVwp[1]['id'])}}</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>{{$dataVwp[2]['nama']}}</td>
                                        <td>{{getKeterangan($dataVwp[2]['id'])}}</td>
                                        <td>{{getSolusi($dataVwp[2]['id'])}}</td>
                                    </tr> --}}
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

@endsection

