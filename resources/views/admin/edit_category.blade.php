@extends('admin/base')
@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="{{ URL('admin/dashboard') }}"><i class="fa fa-home"></i>Home</a></li>
                <li>Edit Category</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>Edit Category</h4>
                    </div>
                    <div class="widget-inner">
                        <form class="edit-profile m-b30" action="{{ URL('admin/update_category') }}" method="POST">
                            @csrf
                            @foreach($data as $item)
                            <input type="hidden" name="id" value="{{ $item['id'] }}">
                            <div class="row">
                                <div class="col-12">
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            <strong>{{ session('success') }}</strong>
                                        </div>
                                    @endif
                                    @if(session('failed'))
                                        <div class="alert alert-danger">
                                            <strong>{{ session('failed') }}</strong>
                                        </div>
                                    @endif
                                    <div class="ml-auto">
                                        <h3>1. Edit Category</h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Change Category Name</label>
                                    <div>
                                        <input class="form-control" type="text" name="name" placeholder="Enter Category Name" value="{{ $item['name'] }}">
                                        <span class="error">@error('name') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn">Save changes</button>
                                </div>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection