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
					<div class="col-md-6">
						<div class="single-defination">
                            <h4 class="mb-20">Pengembang Aplikasi</h4>
                            <a href="{{asset('user/img/elements/g1.jpg')}}" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url(user/img/elements/g1.jpg);"></div>
                            </a>
							<p><b>Nama :</b> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat veritatis id hic.</p>
						</div>
                    </div>
                    <div class="col-md-6">
						<div class="single-defination">
                            <h4 class="mb-20">Deskripsi Aplikasi</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe labore recusandae facilis magni totam nostrum non, unde, dolor laborum sequi optio soluta nihil corrupti nobis sed quisquam, minima repudiandae pariatur?</p>
						</div>
                    </div>
                    
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

@endsection