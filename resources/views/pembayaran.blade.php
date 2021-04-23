@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Pembayaran') }}</h1>
    <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Transaksi</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jenis Pembayaran</th>
                        <th>Bank</th>
                        <th>Virtual Account Number</th>
                        <th>Jumlah Bayar</th>    
                        <th>Status Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>12345678910</td>
                        <td>2021-03-26 14:18:42</td>
                        <td>Trasnfer_bank</td>
                        <td>BCA</td>
                        <td>66666888888444</td>
                        <td>50.000</td>    
                        <td>
                            <span class="icon text-white-50 btn btn-warning btn-icon-split">
                                <i class="fas fa-spinner"></i>
                            </span>
                            <span class="text">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>12345678910</td>
                        <td>2021-03-26 14:18:42</td>
                        <td>Trasnfer_bank</td>
                        <td>BCA</td>
                        <td>66666888888444</td>
                        <td>50.000</td>    
                        <td>
                            <span class="icon text-white-50 btn btn-warning btn-icon-split">
                                <i class="fas fa-spinner"></i>
                            </span>
                            <span class="text">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>12345678910</td>
                        <td>2021-03-26 14:18:42</td>
                        <td>Trasnfer_bank</td>
                        <td>BCA</td>
                        <td>66666888888444</td>
                        <td>50.000</td>    
                        <td>
                            <span class="icon text-white-50 btn btn-warning btn-icon-split">
                                <i class="fas fa-spinner"></i>
                            </span>
                            <span class="text">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>12345678910</td>
                        <td>2021-03-26 14:18:42</td>
                        <td>Trasnfer_bank</td>
                        <td>BCA</td>
                        <td>66666888888444</td>
                        <td>50.000</td>    
                        <td>
                            <span class="icon text-white-50 btn btn-warning btn-icon-split">
                                <i class="fas fa-spinner"></i>
                            </span>
                            <span class="text">Pending</span>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    

@endsection
