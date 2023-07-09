    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Form Pendaftaran</h1>
                                <p>Siswa Baru Yayasan Manba'ul Khair Tobadak</p>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/booking'); ?>">
                                <div class="form-group">
                                    <label for="jenisPendaftaran">Jenis Pendaftaran</label>
                                    <select class="form-control" name="jenisPendaftaran">
                                        <option value="MA">MA</option>
                                        <option value="MTs">MTs</option>
                                        <option value="Tahfidz">Tahfidz</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?= set_value('nama'); ?>" placeholder="Nama Lengkap">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nisn">Nomor NISN</label>
                                    <input type="text" class="form-control form-control-user" id="nisn" name="nisn" value="<?= set_value('nama'); ?>" placeholder="Nomor Induk Siswa">
                                    <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jenisKelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="jenisKelamin">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tempatLahir">Tempat Lahir</label>
                                    <input type="text" class="form-control form-control-user" id="tempatLahir" name="tempatLahir" value="<?= set_value('tempatLahir'); ?>" placeholder="TempatLahir">
                                    <?= form_error('tempatLahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-user" id="tanggalLahir" name="tanggalLahir" value="<?= set_value('tanggalLahir'); ?>" placeholder="tanggalLahir">
                                    <?= form_error('tanggalLahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="namaWali">Nama Orang Tua / Wali</label>
                                    <input type="text" class="form-control form-control-user" id="namaWali" name="namaWali" value="<?= set_value('email'); ?>" placeholder="Orang Tua / Wali">
                                    <?= form_error('namaWali', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="asalSekolah">Asal Sekolah</label>
                                    <input type="text" class="form-control form-control-user" id="asalSekolah" name="asalSekolah" value="<?= set_value('nama'); ?>" placeholder="Asal Sekolah">
                                    <?= form_error('asalSekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email (Jika ada)</label>
                                    <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Alamat Email">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="telp">Nomor HP / Whatsapp</label>
                                    <input type="text" class="form-control form-control-user" id="telp" name="telp" value="<?= set_value('telp'); ?>" placeholder="No Telephone">
                                    <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="kota">Kota Asal</label>
                                    <input type="text" class="form-control form-control-user" id="kota" name="kota" value="<?= set_value('kota'); ?>" placeholder="Kotal">
                                    <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>" placeholder="Alamat">
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar Sekarang
                                </button>
                            </form>
                            <hr>
                            <!--  <div class="text-center">
                                <a class="small" href="forgot-password.html">Lupa Password?</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>