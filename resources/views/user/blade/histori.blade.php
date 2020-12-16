@extends('user.blade.home')

@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_3">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="bradcam_text">
                <h3>Histori Diagnosis</h3>
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
                <h3 class="mb-30">Histori Diagnosis Penyakit Anggrek</h3>
				<div class="row">
                    <div class="col-md-12">
						<div class="single-defination">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th style="width: 20%">Nama Pengguna</th>
                                        <th>Gejala</th>
                                        <th>Hasil</th>
                                        {{-- <th>Nilai Vektor V Terdekat</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($d as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item['nama']}}</td>
                                        <td>
                                            @foreach ($item['gejala'] as $k => $t)
                                                {{ getKriteria($k). ' : ' .getSubkriteria($t) }}
                                                <br>
                                            @endforeach
                                        </td>
                                        <td>{{$item['hasil']}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $historis->links() }}
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

