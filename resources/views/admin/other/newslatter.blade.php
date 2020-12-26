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
            <h5>Subscriber Table</h5>
        </div>
        <!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">
                Subscriber List
                <a href="#" class="btn btn-sm btn-danger" style="float: right;" id="delete" ><i class="icon ion-trash-a"></i></i>All Delete</a>
            </h6>
            <br />
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Email</th>
                            <th class="wd-15p">Subscribe Time</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subs as $row)
                        <tr>
                            <td><input type="checkbox">  {{$row->id}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{ \Carbon\Carbon::parse($row->created_at)->diffForhumans()}}</td>
                            <td>
                                <a href="{{URL::to('delete/newslatter/'.$row->id)}}" class="btn btn-md btn-danger" id="delete"><i class="icon ion-trash-a"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- table-wrapper -->
        </div>
        <!-- card -->
    </div>
    @endsection

