@extends('admin/base')
@section('content')
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-12">
                    <div class="account-form">
                        <div class="account-form-inner">
                            <div class="account-container">
                                <div class="error-page">
                                    <h3>Ooopps :(</h3>
                                    <h2 class="error-title">404</h2>
                                    <h5>The Page you were looking for, couldn't be found.</h5>
                                    <p>The page you are looking for might have been removed, had its name changed, or is
                                        temporarily
                                        unavailable.</p>
                                    <div class="">
                                        <a href="{{ URL('admin') }}" class="btn outline black">Back To Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
