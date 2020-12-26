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
            <h5>Cupon Update</h5>
        </div>
        <!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Cupon Update</h6>

            <form action="{{url('update/cupon/'.$edit->id)}}" method="post">
                @csrf
                <div class="row">
                    
                <div class="form-group  col-md-6">
                    <label for="exampleInputEmail1">Cupon</label>
                    <input type="text" name="cupon" class="form-control" value="{{$edit->cupon}}" required />
                </div>  
                 <div class="form-group  col-md-6">
                    <label for="exampleInputEmail1">Discount(%)</label>
                    <input type="text" name="discount" class="form-control" value="{{$edit->discount}}" required />
                </div>
              
                </div>
                <button type="submit" class="btn btn-primary pull-right">Update</button>
            </form>
        </div>

        @endsection
    </div>
</div>
