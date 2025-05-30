@extends('layouts.master')
@section('title', 'atlantis')
@section('content')

    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data ULTG</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="/">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Tables</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('ultg.create') }}" class="btn btn-success">
                            <div class="fa fa-plus-circle"></div>
                            <span class="d-none d-lg-block" style="float: right;  margin-left:3px;"> Tambah Data</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode ULTG</th>
                                        <th>Nama UPT</th>
                                        <th>Nama ULTG</TH>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($dataUltg as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->kode_ultg }}</td>
                                            <td>{{ $data->upt->nama_upt }}</td>
                                            <td>{{ $data->nama_ultg }}</td>
                                            <td>
                                                <form action="{{ route('ultg.delete', $data->id) }}" method="post">@csrf
                                                    <a href="{{ route('ultg.edit', $data->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
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

@endsection
