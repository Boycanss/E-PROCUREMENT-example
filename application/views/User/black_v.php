<div class="panel panel-default">
    <div class="panel-body">
        <div class="panel panel-default">
            <div class="panel-body">
                </div>
				 <div class="panel-body">
                  <div class="btn-group">
                    <a href="<?= site_url('tambah-user'); ?>" type="button" class="btn btn-default" title="Tambah Data User">&nbsp;TAMBAH USER</a>
                </div>
				 <div class="btn-group">
                    <a href="<?= site_url('blackuser'); ?>" type="button" class="btn btn-default" title="Tambah Data User">&nbsp;BLACK LIST</a>
                </div>
				 <div class="btn-group">
                    <a href="<?= site_url('panitiagudang'); ?>" type="button" class="btn btn-default" title="Tambah Data User">&nbsp;P. GUDANG</a>
                </div>
				<div class="btn-group">
                    <a href="<?= site_url('panitiapurchasing'); ?>" type="button" class="btn btn-default" title="Tambah Data User">&nbsp;P. PURCHASING</a>
                </div>
				 <div class="btn-group">
                    <a href="<?= site_url('vendor'); ?>" type="button" class="btn btn-default" title="Tambah Data User">&nbsp;VENDOR</a>
                </div>
                <hr>
                <?php echo $this -> session -> flashdata('pesan'); ?>
                <?php if (!empty($user)) { ?>
                    <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA USER</th>
                                <th>USERNAME</th>
                                <th>HAK AKSES</th>
                                <th>OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($user as $u) {
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= strtoupper($u -> nama); ?></td>
                                    <td><?= strtolower($u -> username); ?></td>
                                    <td><?= __flag($u -> akses_level); ?></td>
                                    <td>
                                        <a href="<?= site_url('rubah-user'); ?>/<?= $u -> username; ?>" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i>&nbsp;</a>
                                        <a href="<?= site_url('hapus-user'); ?>/<?= $u -> username; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i>&nbsp;</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA USER</th>
                                <th>USERNAME</th>
                                <th>HAK AKSES</th>
                                <th>OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="5">Maaf data user belum tersedia ...</td>
                            </tr>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
        </div>

    </div>
</div>
