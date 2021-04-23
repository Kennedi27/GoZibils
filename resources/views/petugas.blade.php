@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Petugas') }}</h1>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="#" class="btn btn-primary "><span>Tambah Petugas</span></a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Profil</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Handphone</th>
                        <th>Alamat</th>
                        
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                   <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Profil</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Handphone</th>
                        <th>Alamat</th>
                        
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Junar</td>
                        <td>petugas1</td>
                        <td></td>
                        <td>Laki-Laki</td>
                        <td>Batam, 22/04/2000</td>
                        <td>08123456789</td>
                        <td>Perum. Putri Hijau Bok E4 No 87</td>
                        <td><a href="#" class="btn btn-success btn-circle">
                                <i class="fas fa-edit"></i>
                            </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                            </a></td>
                    </tr><tr>
                        <td>Junar</td>
                        <td>petugas1</td>
                        <td></td>
                        <td>Laki-Laki</td>
                        <td>Batam, 22/04/2000</td>
                        <td>08123456789</td>
                        <td>Perum. Putri Hijau Bok E4 No 87</td>
                        <td><a href="#" class="btn btn-success btn-circle">
                                <i class="fas fa-edit"></i>
                            </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td>Junar</td>
                        <td>petugas1</td>
                        <td></td>
                        <td>Laki-Laki</td>
                        <td>Batam, 22/04/2000</td>
                        <td>08123456789</td>
                        <td>Perum. Putri Hijau Bok E4 No 87</td>
                        <td><a href="#" class="btn btn-success btn-circle">
                                <i class="fas fa-edit"></i>
                            </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td>Junar</td>
                        <td>petugas1</td>
                        <td></td>
                        <td>Laki-Laki</td>
                        <td>Batam, 22/04/2000</td>
                        <td>08123456789</td>
                        <td>Perum. Putri Hijau Bok E4 No 87</td>
                        <td><a href="#" class="btn btn-success btn-circle">
                                <i class="fas fa-edit"></i>
                            </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td>Junar</td>
                        <td>petugas1</td>
                        <td></td>
                        <td>Laki-Laki</td>
                        <td>Batam, 22/04/2000</td>
                        <td>08123456789</td>
                        <td>Perum. Putri Hijau Bok E4 No 87</td>
                        <td><a href="#" class="btn btn-success btn-circle">
                                <i class="fas fa-edit"></i>
                            </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                            </a></td>
                    </tr>
                   
                    
                   
                </tbody>
            </table>
        </div>
        </div>
        


        @endsection
