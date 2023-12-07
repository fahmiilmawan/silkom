
<!--**********************************
    Sidebar start
***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
            </li> -->
            <li><a href="{{ route('dashboardPage') }}" aria-expanded="false"><i
                        class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
            </li>
            <li class="nav-label">Manajemen Inventaris & Ruangan</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Inventaris & Ruangan</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('ruanganPage') }}">Ruangan</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Barang</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('barangPage') }}">Barang</a></li>
                            <li><a href="{{ route('kategoriBarangPage') }}">Kategori Barang</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-label">Manajemen Peminjaman & Pengembalian</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-world-2"></i><span class="nav-text">Peminjaman & Pengembalian</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('peminjamanPage') }}">Data Peminjaman</a></li>
                    <li><a href="{{ route('pengembalianPage') }}">Data Pengembalian</a></li>
                    <li><a href="{{ route('historyPage') }}">History</a></li>
                </ul>
            </li>
            <li class="nav-label">Manajemen User</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                class="icon icon-single-04"></i><span class="nav-text">Manajemen User</span></a>
            <ul aria-expanded="false">
            <li><a href="{{ route('userPage') }}">Data User</a></li>
        </ul>
    </li>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->

