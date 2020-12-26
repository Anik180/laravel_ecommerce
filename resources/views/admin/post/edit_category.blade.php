@extends('admin.admin_layouts') 
@section('admin_content')

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Admin</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
        <br />
        <div class="sl-page-title">
            <h5>Post Category Update</h5>
        </div>
        <!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Post Category Update</h6>

            <form action="{{url('update/post/category/'.$edit->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3"></div>
                <div class="form-group  col-md-6">
                    <label for="exampleInputEmail1">Category Name English</label>
                    <input type="text" name="category_name_en" class="form-control" value="{{$edit->category_name_en}}" required />
                </div>
                 <div class="col-md-3"></div>
                </div>
                   <div class="row">
                    <div class="col-md-3"></div>
                <div class="form-group  col-md-6">
                    <label for="exampleInputEmail1">Category Name Bangla</label>
                    <input type="text" name="category_name_bn" class="form-control" value="{{$edit->category_name_bn}}" required />
                </div>
                 <div class="col-md-3"></div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Update</button>
            </form>
        </div>

        @endsection
    </div>
</div>
