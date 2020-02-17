@extends('user.blade.home')

@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_3">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="bradcam_text">
                <h3>Tentang Aplikasi</h3>
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
				<h3 class="mb-30">Informasi Tentang Pengembang Aplikasi</h3>
				<div class="row">
					<div class="col-md-3">
						<div class="single-defination">
							<h4 class="mb-20">Pengembang Aplikasi</h4>
							@if (count($tentangs) != 0)
								@foreach ($tentangs as $tentang)
								<img width="150px" src="{{ url('/tentang/'.$tentang->gambar) }}">          
								
							</div>
						</div>
						<div class="col-md-9">
							<div class="single-defination">
								<h4 class="mb-20">Deskripsi Aplikasi</h4>
								<p><b>Nama Pengembang :</b> {{$tentang->nama }} </p>
								<p>
									{{$tentang->keterangan}}									
								</p>
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

@endsection

