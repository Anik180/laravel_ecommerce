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
            <h5>Category Table</h5>
        </div>
        <!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">
                Category List
                <a href="#" class="btn btn-sm btn-success" style="float: right;" data-toggle="modal" data-target="#modaldemo3"><i class="fa fa-plus"></i>Add New</a>
            </h6>
            <br />
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">ID</th>
                            <th class="wd-15p">Category Name</th>
                            <th class="wd-20p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($category as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->category_name}}</td>
                            <td>
                                <a href="{{URL::to('edit/category/'.$row->id)}}" class="btn btn-md btn-info"><i class="fa fa-pencil"></i></a>
                                <a href="{{URL::to('delete/category/'.$row->id)}}" class="btn btn-md btn-danger" id="delete"><i class="icon ion-trash-a"></i></a>
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
    <div id="modaldemo3" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New Category</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-20">
                    <form method="post" action="{{route('store.category')}}" >
                        @csrf
                            <div class="d-flex mg-b-30">
                                <div class="form-group mg-b-0 mg-l-100 mg-r-100 ">
                                    <label>Category Name: <span class="tx-danger">*</span></label>
                                        @if ($errors->any())
                                             <div class="alert alert-danger">
                                               <ul>
                                                @foreach ($errors->all() as $error)
                                                 <li>{{ $error }}</li>
                                                @endforeach
                                              </ul>
                                             </div>
                                          @endif
                                    <input type="text" name="category_name" class="form-control wd-250" placeholder="Enter Category Name" required />
                                </div>
                            </div>
                        </div>
                <!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info pd-x-20">Save changes</button>
                    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
                    </form>
        </div>
        </div>
        <!-- modal-dialog -->
    </div>
</div>
</div>

    @endsection

