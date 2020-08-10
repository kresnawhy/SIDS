@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Sistem Informasi Disposisi Surat</h1>
        </div>

        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Nama</div>
                                    <div class="profile-widget-item-value">Wahyu Kresna Rachmadika</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Blok Rumah</div>
                                    <div class="profile-widget-item-value">C7</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Nomor Rumah</div>
                                    <div class="profile-widget-item-value">12</div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>NIK</label>
                                            <input type="text" class="form-control-plaintext" value="3509212208000007" readonly>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Jenis Kelamin</label>
                                            <input type="text" class="form-control-plaintext" value="Laki-laki" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control-plaintext" value="Sidoarjo" readonly>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" class="form-control-plaintext" value="22 Agustus 2000" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Agama</label>
                                            <input type="text" class="form-control-plaintext" value="Islam" readonly>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Pekerjaan</label>
                                            <input type="text" class="form-control-plaintext" value="Pelajar" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 col-12">
                                            <label>Password</label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password" required>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
