@extends('admin.base')
@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="{{ URL('dashboard') }}"><i class="fa fa-home"></i>Home</a></li>
                <li>View Category</li>
            </ul>
        </div>
        <!-- Card -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-12">
                @if(session('success'))
                    <div class="alert alert-success">
                        <strong> {{ session('success') }}</strong>
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">
                        <strong> {{ session('error') }}</strong>
                    </div>
                @endif
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>S.NO</th>
                            <th>Category_id</th>
                            <th>Categor_name</th>
                            <th>Total_courses</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($data as $item)
                        <tr class="text-center">
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ ucfirst($item->name) }}</td>
                            <td>{{ $item->count }}</td>
                            <td>
                                @if($item->count==0)
                                    <a onclick="return edit_confirm()" href="edit_category/{{ $item->id }}" class="btn btn-primary">Edit</a>
                                    <a onclick="return delete_confirm()" href="delete_category/{{ $item->id }}" class="btn btn-danger">Delete</a>
                                @else
                                    <div class="btn">
                                        NOT ALLOWED
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <script>
                            function edit_confirm(){
                                const ask = confirm("You want to edit the {{ $item->name }} category")
                                if(ask){
                                    return true;
                                }
                                else{
                                    return false;
                                }
                            }
                            function delete_confirm(){
                                const ask = confirm("You want to delete the {{ $item->name }} category")
                                if(ask){
                                    return true;
                                }
                                else{
                                    return false;
                                }
                            }
                        </script>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</main>
@endsection