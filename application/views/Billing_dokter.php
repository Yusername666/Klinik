<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-info">
                <h6 class="m-0 font-weight-bold text-white"><span class="fa fa-folder-open"></span> LAPORAN BILLING PER
                    DOKTER
                </h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-cog"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <!-- <div class="dropdown-header">Aksi :</div>
                        <a class="dropdown-item text-primary" href="#"><span class="fa fa-print"></span> Cetak Data</a> -->
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="card-title">
                    <form action="<?=base_url('Dokter')?>" method="POST">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="tgl_awal">Tanggal Awal :</label>
                                <input type="date" id="tgl_awal" name="tgl_awal" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tgl_awal">Tanggal Akhir :</label>
                                <input type="date" id="tgl_akhir" name="tgl_akhir" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-info btn-block"><i class="fa fa-filter"></i> Filter</button>
                            </div>
                        </div>
                    </form>
                    <hr>
            </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-info text-white">
                            <tr>
                                <th>Tanggal Billing</th>
                                <th>Nama Dokter</th>
                                <th class="text-center">Jumlah (Rp.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $d): ?>
                                <tr>
                                    <td><?=tgl_indo($d['tgl_billing'])?></td>
                                    <td><?=$d['nama_dokter']?></td>
                                    <td class="text-right"><?=$d['biaya']?></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="text-right">Total :</td>
                                <td class="text-right"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>