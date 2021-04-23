@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('About') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow mb-4 bg-light">

                <div class="card-profile-image mt-4">
                    <img src="{{ asset('img/logo.png') }}" alt="user-image">
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-center">
                                <h5 class="font-weight-bold text-primary">GoZibil</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-1 text-center">
                            <a href="https://facebook.com" target="_blank" class="btn btn-facebook btn-outline-primary btn-circle btn-lg"><i class="fab fa-facebook-f fa-fw"></i></a>
                        </div>
                        <div class="col-md-4 mb-1 text-center">
                            <a href="https://github.com" target="_blank" class="btn btn-github btn-circle btn-lg"><i class="fab fa-github fa-fw"></i></a>
                        </div>
                        <div class="col-md-4 mb-1 text-center">
                            <a href="https://twitter.com" target="_blank" class="btn btn-twitter btn-circle btn-lg"><i class="fab fa-twitter fa-fw"></i></a>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">GoZibil</h5>
                            <p>GoZibil merupakan aplikasi berbasis mobile yang terintegrasi dengan perangkat IoT. GoZibil memberikan kemudahan bagi masyarakat maupun petugas kebersihan dalam melakukan pengelolaan sampah. </p>
                        
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="font-weight-bold">Credits</h5>
                            <ul>
                                <li><a href="https://laravel.com" target="_blank" class="text-decoration-none text-reset">Laravel</a> - Open source framework.</li>
                                <li><a href="https://github.com/DevMarketer/LaravelEasyNav" target="_blank" class="text-decoration-none text-reset">LaravelEasyNav</a> - Making managing navigation in Laravel easy.</li>
                                <li><a href="https://startbootstrap.com/themes/sb-admin-2" target="_blank" class="text-decoration-none text-reset">SB Admin 2</a> - Thanks to Start Bootstrap.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
