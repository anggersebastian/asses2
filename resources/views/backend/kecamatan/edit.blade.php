@extends('backend.layouts.admin')
@section('content')
<div class="content-wrapper kanban">
    <section class="content-header">
        <div class="container-fluid">
            <form action="{{ route('kecamatan.update',$kecamatan->id) }}" method="POST">
                {!! csrf_field() !!}
                {{ method_field('PUT') }}
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
                                    <label>province</label>
                                    <input type="text" class="form-control" value="{{ $kecamatan->province }}" id="exampleInputPassword1" name="province" placeholder="province">
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" class="form-control" value="{{ $kecamatan->kota }}" id="exampleInputPassword1" name="kota" placeholder="kota">
                                </div>
                                <div class="form-group">
                                    <label>Kelurahan</label>
                                    <input type="text" class="form-control "value="{{ $kecamatan->kelurahan }}" id="exampleInputPassword1" name="kelurahan" placeholder="kelurahan">
                                </div>
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control "value="{{ $kecamatan->kecamatan }}" id="exampleInputPassword1" name="kecamatan" placeholder="kecamatan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection



