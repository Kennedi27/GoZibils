@extends('layouts.admin')

@section('main-content')

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
<div class="alert alert-success border-left-success" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pembayaran Masuk</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 60.000,00</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-money-check fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Informasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">R-Big Trash</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                        <div class="row no-gutters align-items-center">

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-trash fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Users -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">{{ __('Users') }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $widget['users'] }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Content Column -->
    <div class="col-xl-6 col-lg-5">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pengguna Baru</h6>
            </div>
            <div class="card-body">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Handphone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Arinah</td>
                        <td>arinah@gmail.com</td>
                        <td>08123456789</td>
                        
                    </tr>
                    <tr>
                    <td>Arinah</td>
                        <td>arinah@gmail.com</td>
                        <td>08123456789</td>
                    </tr>
                    <tr>
                    <td>Arinah</td>
                        <td>arinah@gmail.com</td>
                        <td>08123456789</td>
                    </tr>
                    <tr>
                    <td>Arinah</td>
                        <td>arinah@gmail.com</td>
                        <td>08123456789</td>
                    </tr>
                    <tr>
                        <td>Arinah</td>
                        <td>arinah@gmail.com</td>
                        <td>08123456789</td>
                    </tr>
                    
                   
                </tbody>
            </table>
            </div>
            <a class="dropdown-item text-center small text-gray-500" href="#">Lihat semua</a>
        </div>

    </div>

    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Pemasukan Bulanan</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <!-- Content Column -->
    <div class="col-lg-5 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">R-Big Trash</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Jenis</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Arinah</td>
                                <td>2021/02/28</td>
                                <td>Sofa</td>
                                <td>
                                    <span class="icon text-white-50 btn btn-primary btn-icon-split">
                                        <i class="fas fa-spinner"></i>
                                    </span>
                                    <span class="text">Process</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Arinah</td>
                                <td>2021/02/28</td>
                                <td>Sofa</td>
                                <td>
                                    <span class="icon text-white-50 btn btn-success btn-icon-split">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Accept</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Arinah</td>
                                <td>2021/02/28</td>
                                <td>Sofa</td>
                                <td>
                                    <span class="icon text-white-50 btn btn-danger btn-icon-split">
                                        <i class="fas fa-ban"></i>
                                    </span>
                                    <span class="text">Reject</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Arinah</td>
                                <td>2021/02/28</td>
                                <td>Sofa</td>
                                <td>
                                    <span class="icon text-white-50 btn btn-danger btn-icon-split">
                                        <i class="fas fa-ban"></i>
                                    </span>
                                    <span class="text">Reject</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Arinah</td>
                                <td>2021/02/28</td>
                                <td>Sofa</td>
                                <td>
                                    <span class="icon text-white-50 btn btn-danger btn-icon-split">
                                        <i class="fas fa-ban"></i>
                                    </span>
                                    <span class="text">Reject</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <a class="dropdown-item text-center small text-gray-500" href="{{ route('rbigtrash') }}">Lihat semua</a>
            </div>
            
        </div>

    </div>

    <div class="col-lg-7 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Informasi</h6>
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tentang</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Arinah</td>
                        <td>Sampah Berserakan</td>
                        <td>Sampah berserakan di pinggir jalan, setiap sore selalu ada orang yang membuang sampah di tempat ini</td>
                        
                    </tr>
                    <tr>
                        <td>Arinah</td>
                        <td>Sampah Berserakan</td>
                        <td>Sampah berserakan di pinggir jalan, setiap sore selalu ada orang yang membuang sampah di tempat ini</td>
                        
                    </tr>
                    <tr>
                        <td>Arinah</td>
                        <td>Sampah Berserakan</td>
                        <td>Sampah berserakan di pinggir jalan, setiap sore selalu ada orang yang membuang sampah di tempat ini</td>
                        
                    </tr>
                    <tr>
                        <td>Arinah</td>
                        <td>Sampah Berserakan</td>
                        <td>Sampah berserakan di pinggir jalan, setiap sore selalu ada orang yang membuang sampah di tempat ini</td>
                        
                    </tr>
                    <tr>
                        <td>Arinah</td>
                        <td>Sampah Berserakan</td>
                        <td>Sampah berserakan di pinggir jalan, setiap sore selalu ada orang yang membuang sampah di tempat ini</td>

                    </tr>
                    
                   
                </tbody>
            </table>
        </div>
        <a class="dropdown-item text-center small text-gray-500" href="{{ route('informasi') }}">Lihat semua</a>
            
            </div>
            
        </div>
        
    </div>
</div>



@endsection
