<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-info">
                <h6 class="m-0 font-weight-bold text-white"><span class="fa fa-folder-open"></span> DATA PASIEN</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-cog"></span>
                    </a>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">

                <form id="form" action="<?= isset($data->norm) ? '#' : base_url('Pasien/create') ?>" name="form" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="norm">No. Rekam Medik</label>
                            <input type="number" placeholder="Masukan No. Rekam Medik..." class="form-control form-control-norm <?= form_error('norm') ? 'is-invalid' : '' ?>" <?= set_value('norm') != null ? ' value="' . set_value('norm') . '"' : '';
                                                                                                                                                                                echo isset($data->norm) ? ' value="' . $data->norm . '" readonly' : '' ?> name="norm" id="norm" minlength="0" maxlength="6">
                            <div class="invalid-feedback">
                                <?= form_error('norm') ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="nik">NIK</label>
                            <input type="number" placeholder="Masukan NIK KTP..." class="form-control form-control-nik <?= form_error('nik') ? 'is-invalid' : '' ?>" <?= set_value('nik') != null ? ' value="' . set_value('nik') . '"' : '';
                                                                                                                                                                        echo isset($data->nik) ? ' value="' . $data->nik . '" readonly' : '' ?> name="nik" id="nik" onkeyup="this.value = this.value.toUpperCase();" minlength="0" maxlength="16">
                            <div class="invalid-feedback">
                                <?= form_error('nik') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-6 mb-sm-0">
                            <label for="nmpasien">Nama PASIEN</label>
                            <input type="text" placeholder="Masukan Nama Pasien..." class="form-control form-control-nmpasien <?= form_error('nmpasien') ? 'is-invalid' : '' ?>" <?= set_value('nmpasien') != null ? ' value="' . set_value('nmpasien') . '"' : '';
                                                                                                                                                                                    echo isset($data->nmpasien) ? ' value="' . $data->nmpasien . '"' : '' ?> name="nmpasien" id="nmpasien" onkeyup="this.value = this.value.toUpperCase();">
                            <div class="invalid-feedback">
                                <?= form_error('nmpasien') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="tgllhrpasien">TGL. LAHIR</label>
                            <input type="date" placeholder="Masukan No. Rekam Medik..." class="form-control form-control-tgllhrpasien <?= form_error('tgllhrpasien') ? 'is-invalid' : '' ?>" <?= set_value('tgllhrpasien') != null ? ' value="' . set_value('tgllhrpasien') . '"' : '';
                                                                                                                                                                                                echo isset($data->tgllhrpasien) ? ' value="' . $data->tgllhrpasien . '" ' : '' ?> name="tgllhrpasien" id="tgllhrpasien">
                            <div class="invalid-feedback">
                                <?= form_error('tgllhrpasien') ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="kelaminpasien">JENIS KELAMIN</label>
                            <select class="form-control form-control-user <?= form_error('kelaminpasien') ? 'is-invalid' : '' ?>" name="kelaminpasien" id="kelaminpasien">
                                <option value='Laki-Laki' <?= isset($data->kelaminpasien) ? $data->kelaminpasien == 'Laki-Laki' ? ' selected' : '' : '' ?>>Laki-Laki</option>
                                <option value='Perempuan' <?= isset($data->kelaminpasien) ? $data->kelaminpasien == 'Perempuan' ? ' selected' : '' : '' ?>>Perempuan</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= form_error('kelaminpasien') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-6 mb-sm-0">
                            <label for="almtpasien">ALAMAT</label>
                            <input type="text" placeholder="Masukan Alamat..." class="form-control form-control-almtpasien <?= form_error('almtpasien') ? 'is-invalid' : '' ?>" <?= set_value('almtpasien') != null ? ' value="' . set_value('almtpasien') . '"' : '';
                                                                                                                                                                                echo isset($data->almtpasien) ? ' value="' . $data->almtpasien . '"' : '' ?> name="almtpasien" id="almtpasien" onkeyup="this.value = this.value.toUpperCase();">
                            <div class="invalid-feedback">
                                <?= form_error('almtpasien') ?>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="log" id="log" value="<?= date('Y-m-d') ?>">

                    <hr>
                    <button type="submit" class="btn btn-success btn-user tn-block" id="sbm"><i class="fa fa-archive"></i> Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</div>