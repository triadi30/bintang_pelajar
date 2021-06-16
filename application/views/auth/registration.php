    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-0 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Halaman Pendaftaran</h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url('auth/registration') ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password" value="<?= set_value('password'); ?>">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tempat" placeholder="Tempat Lahir">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" name="tanggal" placeholder="Tanggal Lahir">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nisn" placeholder="NISN">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="asalsekolah" placeholder="Asal Sekolah">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="sekolah_pilihan" id="sekolah_pilihan">
                                        <option disabled selected> Pilihan Sekolah </option>
                                        <?php
                                        foreach ($sekolah_pilihan as $sp) {
                                        ?>
                                            <option value="<?= $sp['nama_cabang'] ?>"><?= $sp['nama_cabang'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftarkan Akun
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth'); ?>">Sudah punya akun? Login Disini!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>