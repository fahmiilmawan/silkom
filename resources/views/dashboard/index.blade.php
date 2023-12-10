@extends('layout.master')
@section('main-content')
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!, {{ Auth::user()->username;}}</h4>
                    <p class="mb-0">Sistem Informasi Laboratorium Komputer</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-one card-body">
                        <div class="stat-icon d-inline-block">
                            <i class="ti-money text-success border-success"></i>
                        </div>
                        <div class="stat-content d-inline-block">
                            <div class="stat-text">Data Ruangan</div>
                                <div class="stat-digit">{{ $dataRuangan }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-one card-body">
                        <div class="stat-icon d-inline-block">
                            <i class="ti-user text-primary border-primary"></i>
                        </div>
                        <div class="stat-content d-inline-block">
                            <div class="stat-text">Data Barang</div>
                            <div class="stat-digit">{{ $dataBarang }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-one card-body">
                        <div class="stat-icon d-inline-block">
                            <i class="ti-layout-grid2 text-pink border-pink"></i>
                        </div>
                        <div class="stat-content d-inline-block">
                            <div class="stat-text">Data Peminjaman</div>
                            <div class="stat-digit">{{ $dataPeminjaman }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="stat-widget-one card-body">
                        <div class="stat-icon d-inline-block">
                            <i class="ti-link text-danger border-danger"></i>
                        </div>
                        <div class="stat-content d-inline-block">
                            <div class="stat-text">Data Pengembalian</div>
                            <div class="stat-digit">{{ $dataPengembalian }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection



