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
                            <h4>Data Penduduk</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#userModal">
                                    Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Nama</th>
                                        <th>Blok</th>
                                        <th>Nomor</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td><a href="{{ url('/admin/show') }}">Wahyu Kresna Rachmadika</a></td>
                                        <td>C7</td>
                                        <td>12</td>
                                        <td>
                                            <div class="row">
                                                <a href="" class="btn btn-primary ml-3">Edit</a>
                                                <a class="ml-2">
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
    <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penduduk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="NIK">NIK</label>
                            <input type="text" class="form-control" name="NIK" required>
                        </div>
                        <div class="form-group">
                            <label for="birth_place">Tempat Lahir</label>
                            <input type="text" class="form-control" name="birth_place" required>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="religion">Agama</label>
                            <select class="form-control" name="religion">
                                <option value=""></option>
                                <option value="1">Islam</option>
                                <option value="2">Protestan</option>
                                <option value="3">Katolik</option>
                                <option value="4">Hindu</option>
                                <option value="5">Buddha</option>
                                <option value="6">Khonghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis Kelamin</label>
                            <select class="form-control" name="gender">
                                <option value=""></option>
                                <option value="1">Laki - laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="occupation">Pekerjaan</label>
                            <input type="text" class="form-control" name="occupation">
                        </div>
                        <div class="form-group">
                            <label for="home_block">Blok Rumah</label>
                            <input type="text" class="form-control" name="home_block">
                        </div>
                        <div class="form-group">
                            <label for="home_number">Nomor Rumah</label>
                            <input type="text" class="form-control" name="home_number">
                        </div>
                        <div class="form-group">
                            <label for="KTP">Scan KTP</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="KTP" required>
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
