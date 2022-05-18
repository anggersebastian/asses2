@extends('backend.layouts.admin')
@section('content')
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row">
            <!-- table primary start -->
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><b>Import Data Kecamatan</b></h4>
                        <button type="button" class="btn btn-primary mb-3 pull-right">Import Data Kecamatan</button>
                        <button type="button" class="btn btn-outline-primary mb-3 mr-3 pull-right">Download To Excel</button>

                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hoverable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Province </th>
                                            <th scope="col">Kota</th>
                                            <th scope="col">Kelurahan</th>
                                            <th scope="col">Kecamatan</th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <form class="nosubmit">
                                                    <input class="nosubmit" type="search" placeholder="Search...">
                                                </form>
                                            </th>
                                            <th>
                                                <form class="nosubmit">
                                                    <input class="nosubmit" type="search" placeholder="Search...">
                                                </form>
                                            </th>
                                            <th>
                                                <form class="nosubmit">
                                                    <input class="nosubmit" type="search" placeholder="Search...">
                                                </form>
                                            </th>
                                            <th>
                                                <form class="nosubmit">
                                                    <input class="nosubmit" type="search" placeholder="Search...">
                                                </form>
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    </thead>
                                    <tbody>
                                        @foreach ($kecamatan as $kecamatans)
                                        <tr>
                                            <td>{{ $kecamatans->province }}</td>
                                            <td>{{ $kecamatans->kota }}</td>
                                            <td>{{ $kecamatans->kelurahan }}</td>
                                            <td>{{ $kecamatans->kecamatan }}</td>
                                            <td>
                                                <div class="col clearfix">   
                                                    <button class="btn btn-light " data-toggle="dropdown"><i class="ti-more-alt"></i></button>
                                                    <div class="dropdown-menu">
                                                        <form action="{{ route('kecamatan.destroy',$kecamatans->id) }}" method="POST">
                                                            <a class="dropdown-item" href="{{ route('kecamatan.edit',$kecamatans->id) }}">Edit</a>
                                                            {!! csrf_field() !!}
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <a class="dropdown-item" href="#" onclick="parentNode.submit(); return false;">delete</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection