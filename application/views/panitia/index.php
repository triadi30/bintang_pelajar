<!-- Page content holder -->
<div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-1 mb-4 py-0"><i class="fa fa-bars"></i><small class="font-weight-bold">
            <b>
                <>
            </b>
        </small></button>

    <!-- content -->
    <h2 class="display-4 text-white">Halaman Panitia PPDB</h2>
    <p class="lead text-white mb-0">Sistem PPDB Bintang Pelajar</p>

    <div class="separator"></div>
    <div class="row text-white">
        <div class="col-lg-6">
            <h4>Daftar siswa yang terdaftar PPDB Bintang Pelajar</h4>
            <table class="table text-white">
                <th> Nama Siswa
                </th>
                <th> Pilihan Sekolah
                </th>
                <th> Status
                </th>


                <?php
                foreach ($siswa as $s) {;
                ?>
                    <tr>
                        <td> <?= $s['name']; ?></td>
                        <td> <?= $s['sekolah_pilihan'];; ?></td>
                        <td> <?= $s['status'];; ?></td>
                    </tr>
                <?php
                };
                ?>
            </table>
        </div>
    </div>

</div>
<!-- End content -->