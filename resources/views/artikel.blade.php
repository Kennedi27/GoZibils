@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">{{ __('Artikel') }}</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="#" class="btn btn-primary "><span>Tambah Artikel</span></a>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">    
                <thead>

                    <tr>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Artikel</th>
                        <th>Sumber</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Artikel</th>
                        <th>Sumber</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Jenis-Jenis Sampah</td>
                        <td></td>
                        <td>Sampah berserakan di pinggir jalan, setiap sore selalu ada orang yang membuang sampah di
                            tempat ini</td>
                        <td>www.kompas.com</td>
                        <td><a href="#" class="btn btn-success btn-circle">
                                <i class="fas fa-edit"></i>
                            </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                            </a></td>

                    </tr>
                    <tr>
                        <td>Jenis-Jenis Sampah</td>
                        <td></td>
                        <td>Sampah berserakan di pinggir jalan, setiap sore selalu ada orang yang membuang sampah di
                            tempat ini</td>
                        <td>www.kompas.com</td>
                        <td><a href="#" class="btn btn-success btn-circle">
                                <i class="fas fa-edit"></i>
                            </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                            </a></td>

                    </tr>
                    <tr>
                        <td>Jenis-Jenis Sampah</td>
                        <td></td>
                        <td>Sampah berserakan di pinggir jalan, setiap sore selalu ada orang yang membuang sampah di
                            tempat ini</td>
                        <td>www.kompas.com</td>
                        <td><a href="#" class="btn btn-success btn-circle">
                                <i class="fas fa-edit"></i>
                            </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                            </a></td>

                    </tr>
                    <tr>
                        <td>Jenis-Jenis Sampah</td>
                        <td></td>
                        <td>Sampah berserakan di pinggir jalan, setiap sore selalu ada orang yang membuang sampah di
                            tempat ini</td>
                        <td>www.kompas.com</td>
                        <td><a href="#" class="btn btn-success btn-circle">
                                <i class="fas fa-edit"></i>
                            </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i>
                            </a></td>

                    </tr>
                    <tr>
                        <td>Jenis-Jenis Sampah</td>
                        <td></td>
                        <td>Sampah berserakan di pinggir jalan, setiap sore selalu ada orang yang membuang sampah di
                            tempat ini</td>
                        <td>www.kompas.com</td>
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
</div>
@endsection
