<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-info">
                <h6 class="m-0 font-weight-bold text-white"><span class="fa fa-folder-open"></span> LIST DATA PASIEN</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-cog"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <!-- <div class="dropdown-header">Aksi :</div>
                        <a class="dropdown-item text-primary" href="#"><span class="fa fa-print"></span> Cetak Data</a> -->
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-info text-white">
                            <tr>
                                <th>NO</th>
                                <th>NORM</th>
                                <th>NAMA PASIEN</th>
                                <th>TGL LAHIR</th>
                                <th>ALAMAT</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $d) :
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $d['norm'] ?></td>
                                    <td><?= $d['nmpasien'] ?></td>
                                    <td><?= tgl_indo($d['tgllhrpasien']) ?></td>
                                    <td><?= $d['almtpasien'] ?></td>
                                    <td class="text-center">
                                        <a class="btn text-primary" href="<?= base_url($this->uri->segment(1) . '/' . 'update' . '/' . $d['norm']) ?>"><span class="fa fa-edit"></span></a>
                                        <a class="btn text-danger" href="#" onclick="hapus('<?= $d['norm'] ?>')"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>