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
            <h5>Brand Update</h5>
        </div>
        <!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Brand Update</h6>
            <form action="{{url('update/brand/'.$brand->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Brand Name</label>
                    <input type="text" name="brand_name" class="form-control" value="{{$brand->brand_name}}" required />
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Brand Logo</label>
                    <input type="file" name="brand_logo" class="form-control" />
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Old Logo</label>
                    <img src="{{URL::to($brand->brand_logo)}}" height="70px;" />
                    <input type="hidden" name="old_logo" value="{{ $brand->brand_logo}}" />
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

        @endsection
    </div>
</div>
