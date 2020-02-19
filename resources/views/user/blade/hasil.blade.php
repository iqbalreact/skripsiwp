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
                <p>Berdasarkan perhitungan di atas maka dapat disimpulkan USER memiliki tanaman 
                anggrek yang  menderita penyakit <strong>{{$dataVwp[0]['nama']}}</strong> 
                karena nilai perhitungan hasil dari user menunjukkan kemiripan ke penyakit 
                <strong>{{$dataVwp[0]['nama']}}</strong>.</p>
                <p style="font-weight : bold"> Nilai Vektor S User : ({{$totalVektorSUser[0]}})</p>
                <p style="font-weight : bold"> Nilai Vektor V User : ({{$vektorVuser[0]}})</p>
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
                                        <th>No</th>
                                        <th>Kemungkinan Penyakit</th>
                                        <th>Nilai Vektor V Terdekat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    {{-- {{dd($dataVwp)}} --}}
                                    @foreach ($dataVwp as $item)
                                    @php
                                        // $nilaivektor = -1*$item['vektorv']+$vektorVuser[0];
                                    @endphp
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item['nama']}}</td>
                                        <td>{{$item['vektorv']}}</td>
                                        {{-- <td>{{$nilaivektor}}</td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
					</div>   
                </div>

                <div class="row text-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <a href="{{url('/')}}" class="boxed-btn3">Kembali</a>
                    </div>
                    <div class="col-md-4"></div>
                </div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

@endsection

