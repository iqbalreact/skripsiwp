@extends('user.blade.home')

@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Jenis Anggrek</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="whole-wrap"></div>
<!--/ bradcam_area  -->
	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<div class="row">

                    
                    @if (count($jenisanggreks) != 0)
                            @foreach ($jenisanggreks as $jenisanggrek)   
                            <div class="col-md-4">
                                <div class="single-defination text-center">
                                    <h4 class="mb-20">{{$jenisanggrek->nama}}</h4>

                                    <div class="owl-carousel owl-theme">
                                        
                                        @foreach (explode('|', $jenisanggrek->gambar) as $image)
                                        <div class="item">
                                            <img width="100%" height="100%" src="{{ url('/anggrek/'.$image) }}">
                                        </div>
                                        @endforeach
                                    </div>

                                    <article>
                                        {{$jenisanggrek->keterangan}}
                                    </article>
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