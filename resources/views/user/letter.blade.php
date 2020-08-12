@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Sistem Informasi Disposisi Surat</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ajukan Surat</h4>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @elseif(session()->get('success'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    {{ session()->get('success') }}
                                </div>
                            </div>
                        @endif
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-12">Tanggal</label>
                                    <div class="col-12">
                                        <input type="date" class="form-control" name="date" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-12">Deskripsi</label>
                                    <div class="col-12">
                                        <textarea class="form-control" name="description" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-12"></label>
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Riwayat Pengajuan Surat</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Tanggal</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>22 Agustus 2000</td>
                                        <td>Kebutuhan mendaftar beasiswa</td>
                                        <td><span class="badge badge-danger">Menunggu</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
