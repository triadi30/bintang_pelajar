<!-- Page content holder -->
<div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-1 mb-4 py-0"><i class="fa fa-bars"></i><small class="font-weight-bold">
            <b>
                <>
            </b>
        </small></button>

    <!-- content -->
    <h2 class="display-4 text-white">Halaman Siswa</h2>
    <p class="lead text-white mb-0">Sistem PPDB Bintang Pelajar</p>

    <div class="separator"></div>
    <div class="row text-white">
        <div class="col-lg-6">
            <h4>Biodata Anda</h4>
            <table class="table text-white">
                <tr>
                    <td> Nama </td>
                    <td> : </td>
                    <td> <?= $nama_user; ?></td>
                </tr>
                <tr>
                    <td> Tempat / Tanggal Lahir </td>
                    <td> : </td>
                    <td> <?= $user['tempat_lahir']; ?> / <?= $user['tanggal_lahir']; ?></td>
                </tr>
                <tr>
                    <td> NISN </td>
                    <td> : </td>
                    <td> <?= $user['nisn']; ?></td>
                </tr>
                <tr>
                    <td> Alamat </td>
                    <td> : </td>
                    <td> <?= $user['alamat']; ?></td>
                </tr>
                <tr>
                    <td> Sekolah Asal </td>
                    <td> : </td>
                    <td> <?= $user['asal_sekolah'];; ?></td>
                </tr>
                <tr>
                    <td> Pilihan Sekolah </td>
                    <td> : </td>
                    <td> <?= $user['sekolah_pilihan'];; ?></td>
                </tr>
                <tr>
                    <td> Status </td>
                    <td> : </td>
                    <td> <?= $user['status'];; ?></td>
                </tr>
            </table>
        </div>




    </div>

</div>
<!-- End content -->