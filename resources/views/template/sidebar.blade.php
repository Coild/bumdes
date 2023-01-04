<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="text-center">
                <img src={{ asset("images/users/avatar-1.jpg") }} alt="" class="img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">BUMDes Kuta Mandalika</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"> Profil BUMDes</a></li>
                        <li><a href="javascript:void(0)"> Pengaturan</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)"> Logout</a></li>
                    </ul>
                </div>

                {{-- <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p> --}}
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="/" class="waves-effect"><i class="ion-android-user-menu"></i><span> Dashboard </span></a>
                </li>


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ion-android-note"></i> <span> Master Data</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="/datausaha">Data Usaha</a></li>
                        <li><a href="/pengelola">Pengelola</a></li>
                        <li><a href="/akun">Data Akun</a></li>
                        <li><a href="/pemasok">Pemasok</a></li>
                        <li><a href="/pelanggan">Pelanggan</a></li>
                        <!-- <li><a href="ui-progressbars.html">Data Investor</a></li> Note: Future Development -->
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-group"></i> <span> Jasa</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="/pendapatan">Transaksi Jasa</a></li>
                        <li><a href="/bebanjasa">Beban</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-shopping-basket"></i> <span> Dagang</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="/pembelian">Pembelian</a></li>
                        <li><a href="/penjualan">Penjualan</a></li>
                        <li><a href="{{ route('get.bebandagang') }}">Beban</a></li>
                    </ul>
                </li>

                <!-- <li>
                    <a href="index.html" class="waves-effect"><i class="ti-home"></i><span> Bagi Hasil </span></a>
                </li> Note: Future Development-->

                <li>
                    <a href="/stok" class="waves-effect"><i class="fa fa-cubes"></i><span> Persediaan Barang </span></a>
                </li>

                <li>
                    <a href="/laporan" class="waves-effect"><i class="fa fa-bar-chart-o"></i><span> Laporan </span></a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->