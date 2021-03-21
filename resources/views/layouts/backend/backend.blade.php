<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TK PEMBINA 2 JAMBI</title>
        <link href="" rel="icon">
        <link href="{{ asset('backend') }}/dist/css/styles.css" rel="stylesheet" />
        <link href="{{ asset('css/form.css') }}" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="">TK PEMBINA 2 JAMBI</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>{{ Auth::user()->name}}</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">

            @if(auth()->user()->role == 'admin')
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">

                                <div class="sb-sidenav-menu-heading">Halaman Admin</div>
                                    <a class="nav-link" href="{{url('home',[])}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                        Beranda
                                    </a>


                                <div class="sb-sidenav-menu-heading">Data Pendaftar</div>
                                    <a class="nav-link" href="{{ url ('data-pendaftar', [])}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                        Pendaftar
                                    </a>
                                    <a class="nav-link" href="{{ url ('data-pembayaran', [])}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-cart-arrow-down"></i></div>
                                        Pembayaran
                                    </a>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon"><i class="fas fa-chart-pie"></i></div>
                                        Grafik Laporan
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{url('laporan-daftar',[])}}">Pendaftaran</a>
                                            <a class="nav-link" href="{{url('laporan-bayar',[])}}">Pembayaran</a>
                                            <a class="nav-link" href="{{url('laporan-pembatalan',[])}}">Pembatalan</a>
                                        </nav>
                                    </div>

                                <div class="sb-sidenav-menu-heading">Data Pegawai</div>
                                <a class="nav-link" href="{{ url ('pegawai',[])}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                    Pegawai
                                </a>

                                <div class="sb-sidenav-menu-heading">Data Siswa-Siswi</div>
                                <a class="nav-link" href="{{ url('siswa',[])}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                    Siswa/i
                                </a>

                                <div class="sb-sidenav-menu-heading">Data Kegiatan</div>
                                <a class="nav-link" href="{{ url('kegiatan',[])}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                    Pelajaran
                                </a>
                                <a class="nav-link" href="{{ url('kurikulum',[])}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Kurikulum
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            @endif

            @if(auth()->user()->role == 'siswa')
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">

                                <div class="sb-sidenav-menu-heading">Halaman Pendaftar</div>
                                    <a class="nav-link" href="{{url('home',[])}}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                        Beranda
                                    </a>

                                    @if ($cek <1)
                                        <a class="nav-link" href="{{ url ('isi-biodata', [])}}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                            Isi Data Anak
                                        </a>
                                    @else
                                        <a class="nav-link" href="{{ url ('isi-biodata', [])}}">
                                            <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                            Edit Data Anak
                                        </a>
                                    @endif

                                    <a class="nav-link" href="{{ url ('pembayaran', []) }}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-money-check-alt"></i></div>
                                        Pembayaran
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                @endif

            <div id="layoutSidenav_content">

                @yield('content')

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="text-center">Copyright &copy; Design by <strong>TK Pembina 2 Kota Jambi</strong></div>
                    </div>
                </footer>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/form.js') }}" defer></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend') }}/dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend') }}/dist/assets/demo/chart-area-demo.js"></script>
        <script src="{{ asset('backend') }}/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend') }}/dist/assets/demo/datatables-demo.js"></script>
        @yield('grafik')
    </body>
</html>


