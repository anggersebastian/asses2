@extends('backend.layouts.admin')
@section('content')
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row">
            <!-- table primary start -->
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h2 class="header-title"><b>Import Data Kecamatan</b></h2>
                        <button type="button" class="btn btn-primary mb-3 pull-right"><i class="ti-upload"> </i> Import Data Kecamatan</button>
                        <button type="button" class="btn btn-outline-primary mb-3 mr-3 pull-right"><i class="ti-download"></i> Download To Excel</button>

                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hoverable">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">Province <button class="btn btn-xs pull-right"><i class="ti-arrow-down"></i></button></th>
                                            <th scope="col">Kota <button class="btn btn-xs pull-right"><i class="ti-arrow-down"></i></button></th>
                                            <th scope="col">Kelurahan <button class="btn btn-xs pull-right"><i class="ti-arrow-down"></i></button></th>
                                            <th scope="col">Kecamatan <button class="btn btn-xs pull-right"><i class="ti-arrow-down"></i></button></th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <form class="nosubmit">
                                                    <input class="nosubmit" type="search" placeholder="Cari...">
                                                </form>
                                            </th>
                                            <th>
                                                <form class="nosubmit">
                                                    <input class="nosubmit" type="search" placeholder="Cari...">
                                                </form>
                                            </th>
                                            <th>
                                                <form class="nosubmit">
                                                    <input class="nosubmit" type="search" placeholder="Cari...">
                                                </form>
                                            </th>
                                            <th>
                                                <form class="nosubmit">
                                                    <input class="nosubmit" type="search" placeholder="Cari...">
                                                </form>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kecamatan as $kecamatans)
                                        <tr>
                                            <td>{{ $kecamatans->province }}</td>
                                            <td>{{ $kecamatans->kota }}</td>
                                            <td>{{ $kecamatans->kelurahan }}</td>
                                            <td>{{ $kecamatans->kecamatan }}</td>
                                            <td class="pull-right">
                                                <div class="col clearfix">   
                                                    <button class="btn btn-light " data-toggle="dropdown"><i class="ti-more-alt"></i></button>
                                                    <div class="dropdown-menu">
                                                        <form action="{{ route('kecamatan.destroy',$kecamatans->id) }}" method="POST">
                                                            <a class="dropdown-item" href="{{ route('kecamatan.edit',$kecamatans->id) }}"><i class="ti-pencil-alt"></i> Ubah</a>
                                                            {!! csrf_field() !!}
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <a class="dropdown-item" href="#" onclick="parentNode.submit(); return false;"><i class="ti-trash"></i> Hapus</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                                <div class="row" style="margin-top: 23px;">
                                    <div class="col-sm-6">
                                        <div class="dropdown">
                                            <span>Items per page</span>
                                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">
                                                10
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">20</a>
                                                <a class="dropdown-item" href="#">30</a>
                                                <a class="dropdown-item" href="#">40</a>
                                            </div>
                                    
                                            {{ $kecamatan->firstItem() }}
                                            -
                                            {{ $kecamatan->lastItem() }}
                                            of
                                            {{ $kecamatan->total() }}
                                            items
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="pull-right">
                                            {{ $kecamatan->links() }} 
                                        </div>
                                        <div class="pull-right" style="margin-right: 30px;">
                                                <button class="btn btn-light" type="button" data-toggle="dropdown">
                                                    {{ $kecamatan->currentPage() }}
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">20</a>
                                                    <a class="dropdown-item" href="#">30</a>
                                                    <a class="dropdown-item" href="#">40</a>
                                                </div>
                                            of {{ $kecamatan->lastPage() }} pages
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection