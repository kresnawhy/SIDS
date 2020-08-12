@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Sistem Informasi Disposisi Surat</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Profil</h2>

            <div class="row mt-sm-4">
                <div class="col-12">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Nama</div>
                                    <div class="profile-widget-item-value">{{ $user->name }}</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Blok Rumah</div>
                                    <div class="profile-widget-item-value">{{ $user->home_block }}</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Nomor Rumah</div>
                                    <div class="profile-widget-item-value">{{ $user->home_number }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>NIK</label>
                                            <input type="text" class="form-control-plaintext" value="{{ $user->NIK }}" readonly>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Jenis Kelamin</label>
                                            <input type="text" class="form-control-plaintext" value="{{ $user->gender }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control-plaintext" value="{{ $user->birth_place }}" readonly>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" class="form-control-plaintext" value="{{ $user->birth_date }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Agama</label>
                                            <input type="text" class="form-control-plaintext" value="{{ $user->religion }}" readonly>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Pekerjaan</label>
                                            <input type="text" class="form-control-plaintext" value="{{ $user->occupation }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Riwayat Lokasi</h2>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Tanggal</th>
                                        <th>Kunjungan</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>22 Agustus 2000</td>
                                        <td>Jember</td>
                                        <td>
                                            <div class="row">
                                                <a class="ml-1">
                                                    <form action="" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </a>
                                            </div>
                                        </td>
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
