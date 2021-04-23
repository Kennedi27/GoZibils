@extends('layouts.admin')

@section('main-content')
<!-- Page Heading -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List R-Big Trash</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jenis</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jenis</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Arinah</td>
                        <td>2021/02/28</td>
                        <td>Sofa</td>
                        <td>Perum. Putri Hijau Blok 9 No 34, Tanjung Piayu</td>
                        <td>087766665554</td>
                        <td></td>
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
                        <td>Perum. Putri Hijau Blok 9 No 34, Tanjung Piayu</td>
                        <td>087766665554</td>
                        <td></td>
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
                        <td>Perum. Putri Hijau Blok 9 No 34, Tanjung Piayu</td>
                        <td>087766665554</td>
                        <td></td>
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
                        <td>Perum. Putri Hijau Blok 9 No 34, Tanjung Piayu</td>
                        <td>087766665554</td>
                        <td></td>
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
                        <td>Perum. Putri Hijau Blok 9 No 34, Tanjung Piayu</td>
                        <td>087766665554</td>
                        <td></td>
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
                        <td>Perum. Putri Hijau Blok 9 No 34, Tanjung Piayu</td>
                        <td>087766665554</td>
                        <td></td>
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
                        <td>Perum. Putri Hijau Blok 9 No 34, Tanjung Piayu</td>
                        <td>087766665554</td>
                        <td></td>
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
                        <td>Perum. Putri Hijau Blok 9 No 34, Tanjung Piayu</td>
                        <td>087766665554</td>
                        <td></td>
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
                        <td>Perum. Putri Hijau Blok 9 No 34, Tanjung Piayu</td>
                        <td>087766665554</td>
                        <td></td>
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
    </div>
</div>
@endsection
