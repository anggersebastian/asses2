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
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hoverable">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Province</th>
                                            <th scope="col">Kota</th>
                                            <th scope="col">Kelurahan</th>
                                            <th scope="col">Kecamatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kecamatan as $kecamatans)
                                        <tr>
                                            <td>{{ $kecamatans->province }}</td>
                                            <td>{{ $kecamatans->kota }}</td>
                                            <td>{{ $kecamatans->kelurahan }}</td>
                                            <td>{{ $kecamatans->kecamatan }}</td>
                                            {{-- <td>
                                                <button type="button" class="btn btn-light mb-3" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                                    <a class="ti-more-alt"></a>
                                                </button>
                                            </td> --}}
                                            <td>
                                                    
                                                    <button class="btn btn-light mb-3" data-toggle="dropdown"><i class="ti-more-alt"></i></h4>
                                                    <div class="dropdown-menu">
                                                        <form action="{{ route('kecamatan.destroy',$kecamatans->id) }}" method="POST">
                                                            <a class="dropdown-item" href="{{ route('kecamatan.edit',$kecamatans->id) }}">edit</a>
                                                            {!! csrf_field() !!}
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <a class="dropdown-item" href="#" onclick="parentNode.submit(); return false;">Delete</a>
                                                            
                                                        </form>
                                                    </div>
                                            </td>
                                            
                                                {{-- <td>
                                                <form action="{{ route('kecamatan.destroy',$kecamatans->id) }}" method="POST">
                                                    <a class="btn btn-primary" href="{{ route('kecamatan.edit',$kecamatans->id) }}">
                                                        <i class="nav-icon fas fa-pen"></i>
                                                        Edit</a>
                                
                                
                                                    {!! csrf_field() !!}
                                                    <input name="_method" type="hidden" value="DELETE">
                                
                                    
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="nav-icon fas fa-trash"></i>
                                                        Delete</button>
                                                </form>
                                            </td> --}}
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