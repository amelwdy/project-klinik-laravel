<section class="sidebar" style="height: auto;">
    <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MENU</li>
        <li>
            <a href="/home">
                <i class="fa fa-home"></i> <span>Home</span>
                <span class="pull-right-container">
                </span>
            </a>
        </li>
        <li>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder-open-o"></i> <span>Master</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active">@role('dokter')<a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> Data User</a>@endrole</li>
                <li class="active"><a href="{{route('pasien.index')}}"><i class="fa fa-circle-o"></i> Data Pasien</a></li>
                <li class="active">@role('admin')<a href="{{route('akun.index')}}"><i class="fa fa-circle-o"></i> Data Akun</a>@endrole</li>
                <li class="active">@role('apoteker')<a href="{{route('obat.index')}}"><i class="fa fa-circle-o"></i> Data Obat</a>@endrole</li>
            </ul>
        </li>
        <li>
            <a href="{{route('rekam_medis.index')}}">
                <i class="fa fa-stethoscope"></i>
                <span class="menu-text">Rekam Medis</span>
            </a>
        </li>
        <li>
        @role('admin')
            <a href="{{route('transaksi.index')}}">
                <i class="fa fa-calculator"></i>
                <span class="menu-text">Transaksi</span>
            </a>
        @endrole
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-bar-chart"></i> <span>Laporan</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="{{route('laporan.index')}}"><i class="fa fa-circle-o"></i>Jurnal</a></li>
            </ul>
        </li>
    </ul>
</section>
