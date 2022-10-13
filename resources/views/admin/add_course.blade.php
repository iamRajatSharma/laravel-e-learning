@extends('admin.base')
@section('content')
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <ul class="db-breadcrumb-list">
                <li><a href="{{ URL('admin/dashboard') }}"><i class="fa fa-home"></i>Home</a></li>
                <li>Add Course</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>Add New Course</h4>
                    </div>
                    <div class="widget-inner">
                        <form class="edit-profile m-b30" action="{{ URL('admin/save_course') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3>1. Basic info</h3>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Course title</label>
                                    <div>
                                        <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Course Title">
                                        <span class="error">@error('title') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Select Course Category</label>
                                    <div>
                                        <select name="" id="" class="form-control" name="category">
                                            <option value="" hidden=''>Select Course Category</option>
                                            @foreach($category as $cat)
                                                <option value="{{ $cat['name']."#".$cat['id'] }}">{{ ucfirst($cat['name']) }}</option>
                                            @endforeach
                                        </select>
                                        <span class="error">@error('category') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Course Price</label>
                                    <div>
                                        <input class="form-control" type="text" name="price" value="{{ old('price') }}" placeholder="Course Price">
                                        <span class="error">@error('price') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Course Discount Price</label>
                                    <div>
                                        <input class="form-control" type="text" name="discount" value="{{ old('discount') }}" placeholder="Course Discount Price">
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Total Lecture</label>
                                    <div>
                                        <input class="form-control" type="text" name="lecture" value="{{ old('lecture') }}" placeholder="Total Lecture">
                                        <span class="error">@error('lecture') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Total Quiz</label>
                                    <div>
                                        <input class="form-control" type="text" name="quiz" value="{{ old('quiz') }}" placeholder="Total Lecture">
                                        <span class="error">@error('quiz') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Course Level</label>
                                    <div>
                                        <input class="form-control" type="text" name="level" value="{{ old('level') }}" placeholder="Course Level">
                                        <span class="error">@error('level') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Course Language</label>
                                    <div>
                                        <input class="form-control" type="text" name="language" value="{{ old('language') }}" placeholder="Course Language">
                                        <span class="error">@error('language') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Course Image</label>
                                    <div>
                                        <input class="form-control" name="img" type="file">
                                        <span class="error">@error('img') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="seperator"></div>

                                <div class="col-12 m-t20">
                                    <div class="ml-auto m-b5">
                                        <h3>2. Description</h3>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">About Course</label>
                                    <div>
                                        <textarea class="form-control" name="about">{{ old('about') }} </textarea>
                                        <span class="error">@error('about') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Course Description</label>
                                    <div>
                                        <textarea class="form-control" name="description">{{ old('description') }} </textarea>
                                        <span class="error">@error('description') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">What Student learn</label>
                                    <div>
                                        <textarea class="form-control" name="learn">{{ old('learn') }} </textarea>
                                        <span class="error">@error('learn') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label class="col-form-label">Course Requirements</label>
                                    <div>
                                        <textarea class="form-control" name="requirement">{{ old('requirement') }} </textarea>
                                        <span class="error">@error('requirement') {{ $message }} @enderror</span>
                                    </div>
                                </div>

                                <div class="col-12 m-t20">
                                    <div class="ml-auto m-b5">
                                        <h3>3. Course Instructor</h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Select Instructor</label>
                                    <div>
                                        <select name="" id="" class="form-control" name="teacher_email">
                                            <option value="" hidden=''>Course Instructor Email</option>
                                            @foreach($teachers as $teach)
                                                <option value="{{ $teach['name']."#".$teach['email'] }}">{{ ucfirst($teach['name']) }}</option>
                                            @endforeach
                                        </select>
                                        <span class="error">@error('teacher_email') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Course Instructor Name</label>
                                    <div>
                                        <input class="form-control" type="text" readonly name="teacher_name" value="" placeholder="Course Language">
                                        <span class="error">@error('teacher_name') {{ $message }} @enderror</span>
                                    </div>
                                </div>
                                
                                <div class="col-12 mt-4 text-center">
                                    <button type="reset" class="btn-secondry add-item m-r5">Reset Data</button>
                                    <button type="submit" class="btn">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>
@endsection