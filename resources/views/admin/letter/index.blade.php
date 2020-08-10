@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Sistem Informasi Disposisi Surat</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Pengajuan Surat</h4>
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
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>22 Agustus 2000</td>
                                        <td>Wahyu Kresna Rachmadika</td>
                                        <td>Kebutuhan mendaftar beasiswa</td>
                                        <td><a href="#" class="btn btn-primary">Verifikasi</a></td>
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
