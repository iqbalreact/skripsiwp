@extends('user.blade.home')

@section('content')
          <!-- bradcam_area  -->
          <div class="bradcam_area bradcam_bg_3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>Berikan Saran Anda</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->
      <!-- ================ contact section start ================= -->
      <section class="contact-section section_padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="contact-title">Tulis Saran Anda Disini</h2>
            </div>
            <div class="col-lg-8">
              <form class="form-contact contact_form" action="{{route('add-saran')}}" enctype='multipart/form-data' method="POST" novalidate="novalidate">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="saran" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Saran Anda'" placeholder = 'Masukan Saran Anda'></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input class="form-control" name="nama" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Nama Anda'" placeholder = 'Masukan Nama Anda'>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Email Anda'" placeholder = 'Masukan Email Anda'>
                    </div>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <button type="submit" class="button button-contactForm btn_4 boxed-btn">Kirim</button>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8160887086483!2d109.34186731475332!3d-0.06059999995578222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d598ffeaa7c83%3A0x8733f84693d660a!2sUniversitas%20Tanjungpura!5e0!3m2!1sid!2sid!4v1581490234531!5m2!1sid!2sid" width="auto" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </section>
@endsection