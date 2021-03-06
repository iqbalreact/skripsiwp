@extends('user.blade.home')

@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_3">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="bradcam_text">
                <h3>Jenis Penyakit Anggrek</h3>
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
				{{-- <h3 class="mb-30">Jenis Penyakit Tanaman Anggrek</h3> --}}
                <div class="row">
                    @if (count($penyakitanggreks) != 0)
                        @foreach ($penyakitanggreks as $penyakitanggrek)
                        
                        <div class="col-md-4">
                            <div class="single-defination text-center">
                                <h4 class="mb-30">{{$penyakitanggrek->nama}}</h4>
                                <div class="owl-carousel owl-theme">
                                        
                                    @foreach (explode('|', $penyakitanggrek->gambar) as $image)
                                    <div class="item">
                                        <img width="300px" height="300px" src="{{ url('/penyakit/'.$image) }}">
                                    </div>
                                    <br>
                                    @endforeach
                                </div>

                                
                                {{-- <img width="300px" src="{{ url('/penyakit/'.$penyakitanggrek->gambar) }}"> --}}
                                <p style="text-align : justify"><b>Keterangan :</b> {{$penyakitanggrek->keterangan}}</p>
                            </div>
                        </div>                    
						@endforeach
					@else                
					@endif
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

    <script>

        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:10,
                autoWidth:false,
                // nav:true,
                singleItem:true,
                items: 1,
                navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
            });
        });

    </script>

@endsection