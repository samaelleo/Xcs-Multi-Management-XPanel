@extends('layouts.master')
@section('title','Xcs - Edit Reseller')
@section('content')
    @if(!empty(session('success')))
        <div class="p-4 mb-2" style="position: fixed;z-index: 9999;left: 0;">
            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="/assets/images/xlogo.png" class="img-fluid m-r-5" alt="Xcs" style="width: 17px">
                    <strong class="me-auto">Xcs</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">{{ session('success') }} </div>
            </div>
        </div>
    @endif

    @if(!empty(session('error')))
        <div class="p-4 mb-2" style="position: fixed;z-index: 9999;left: 0;">
            <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="/assets/images/xlogo.png" class="img-fluid m-r-5" alt="Xcs" style="width: 17px">
                    <strong class="me-auto">Xcs</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body"><span style="color:red">{{ session('error') }}</span> </div>
            </div>
        </div>
    @endif
<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">Edit Reseller</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->


        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            
                                <form class="modal-content" action="{{route('admin.update')}}" method="POST" enctype="multipart/form-data"
                                      onsubmit="return confirm('Are you sure you want to perform this operation?');">
                                    @csrf
                                <div class="">
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <input type="text" class="form-control" placeholder="Username" value="{{$show->username}}" disabled="">
                                                    <input type="hidden" class="form-control" name="username" value="{{$show->username}}">
                                                    <small class="form-text text-muted">Username</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                                        <input type="text" name="password" class="form-control" placeholder="New Password" value="">
                                                    </div>
                                                    <small class="form-text text-muted">Enter New Password</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <input type="text" name="credit" class="form-control"
                                                               placeholder="10000" value="{{$show->credit}}" required>
                                                    </div>
                                                    <small class="form-text text-muted">Credit</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" value="submit" name="submit">Save</button>                        </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- [ Main Content ] end -->
@endsection