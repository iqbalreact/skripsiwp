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
                    <li><a href="{{url('/')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li><a href="{{url('alternatif')}}"><i class="icon-users2"></i> <span>Data Alternatif</span></a></li>
                    <li><a href="{{url('kriteria')}}"><i class="icon-grid4"></i> <span>Data Kriteria</span></a></li>
                    <li><a href="{{url('subkriteria')}}"><i class="icon-typewriter"></i> <span>Data Sub Kriteria</span></a></li>
                    {{-- <li><a href="{{url('nilaikriteria')}}"><i class="icon-typewriter"></i> <span>Data Nilai Alternatif</span></a></li>
                    <li><a href="{{url('perhitungan')}}"><i class="icon-list-numbered"></i> <span>Perhitungan</span></a></li> --}}
                    <!-- /main -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->
