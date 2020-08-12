<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModal"
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
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <input type="date" class="form-control" name="birth_date" required>
                    </div>
                    <div class="form-group">
                        <label for="religion">Agama</label>
                        <select class="form-control" name="religion" required>
                            <option value=""></option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                        <select class="form-control" name="gender" required>
                            <option value=""></option>
                            <option value="Laki - laki">Laki - laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="occupation">Pekerjaan</label>
                        <input type="text" class="form-control" name="occupation" required>
                    </div>
                    <div class="form-group">
                        <label for="home_block">Blok Rumah</label>
                        <input type="text" class="form-control" name="home_block" required>
                    </div>
                    <div class="form-group">
                        <label for="home_number">Nomor Rumah</label>
                        <input type="text" class="form-control" name="home_number" required>
                    </div>
                    <div class="form-group">
                        <label for="KTP">Scan KTP</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="KTP" required>
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password" required>
                    </div>
                    <div class="form-group text-right mt-5">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
