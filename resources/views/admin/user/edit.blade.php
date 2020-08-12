@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Sistem Informasi Disposisi Surat</h1>
        </div>

        <div class="section-body">
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
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ubah Data Penduduk</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIK</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="NIK" value="{{ $user->NIK }}" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tempat Lahir</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="birth_place" value="{{ $user->birth_place }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Lahir</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="date" class="form-control" name="birth_date" value="{{ $user->birth_date }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Agama</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control" name="religion" required>
                                            <option value="Islam" {{ old('religion') == 'Islam' ? 'selected':'' }}>Islam</option>
                                            <option value="Protestan" {{ old('religion') == 'Protestan' ? 'selected':'' }}>Protestan</option>
                                            <option value="Katolik" {{ old('religion') == 'Katolik' ? 'selected':'' }}>Katolik</option>
                                            <option value="Hindu" {{ old('religion') == 'Hindu' ? 'selected':'' }}>Hindu</option>
                                            <option value="Buddha" {{ old('religion') == 'Buddha' ? 'selected':'' }}>Buddha</option>
                                            <option value="Khonghucu" {{ old('religion') == 'Khonghucu' ? 'selected':'' }}>Khonghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control" name="gender" required>
                                            <option value="Laki - laki" {{ old('gender') == 'Laki - laki' ? 'selected':'' }}>Laki - laki</option>
                                            <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected':'' }}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="occupation" value="{{ $user->occupation }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Blok Rumah</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="home_block" value="{{ $user->home_block }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomor Rumah</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="home_number" value="{{ $user->home_number }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">KTP</label>
                                    <div class="col-sm-12 col-md-7">
                                        <img src="{{ url('/storage/ktp/' . $user->KTP) }}" id="output" class="img-thumbnail mb-1" width="150"/>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="KTP" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" value="{{ $user->KTP }}" required>
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="password" value="{{ $user->old_password }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
