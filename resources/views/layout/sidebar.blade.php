<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{asset('../assets/images/image.png')}}" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        {{-- admin name section --}}
                        <span class="media-heading text-semibold">Hello, {{ Auth::user()->name }}</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Pontianak
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li><a href="{{url('/admin')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li><a href="{{url('/admin/alternatif')}}"><i class="icon-drawer"></i> <span>Data Alternatif</span></a></li>
                    <li><a href="{{url('/admin/kriteria')}}"><i class="icon-grid4"></i> <span>Data Kriteria</span></a></li>
                    <li><a href="{{url('/admin/subkriteria')}}"><i class="icon-typewriter"></i> <span>Data Sub Kriteria</span></a></li>
                    <li><a href="{{url('/admin/nilaialternatif')}}"><i class="icon-typewriter"></i> <span>Data Nilai Alternatif</span></a></li>
                    <li><a href="{{url('/admin/tentang')}}"><i class="icon-clipboard3"></i> <span>Kelola Tentang</span></a></li>
                    <li><a href="{{url('/admin/jenisanggrek')}}"><i class="icon-pushpin"></i> <span>Kelola Jenis Anggrek</span></a></li>
                    <li><a href="{{url('/admin/penyakitanggrek')}}"><i class="icon-pushpin"></i> <span>Kelola Penyakit Anggrek</span></a></li>
                    <li><a href="{{url('/admin/saran')}}"><i class="icon-mailbox"></i> <span>Kelola Saran</span></a></li>
                    <li><a href="{{url('/admin/histori')}}"><i class="icon-mailbox"></i> <span>Kelola Histori</span></a></li>

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->
