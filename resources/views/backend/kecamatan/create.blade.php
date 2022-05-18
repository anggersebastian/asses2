@extends('backend.layouts.admin')
@section('content')
<div class="content-wrapper kanban">
    <section class="content-header">
        <div class="container-fluid">
            <form action="{{ route('kecamatan.store') }}" method="POST">
                {!! csrf_field() !!}
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('kecamatan.index') }}"> 
                        <i class="nav-icon fas fa-arrow-left"></i>
                        Kembali</a>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Data kecamatan</h3>
                            </div>
                            <form action="{{ route('kecamatan.store') }}" method="POST">
                            {!! csrf_field() !!}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Province</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="province" placeholder="province">
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="kota" placeholder="kota">
                                </div>
                                <div class="form-group">
                                    <label>Kelurahan</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="kelurahan" placeholder="kelurahan">
                                </div>
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="kecamatan" placeholder="kecamatan">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection