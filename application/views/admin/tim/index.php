<div class="card">
    <div class="card-header"><?= $title ?>
        <a href="<?= base_url('admin/tim/tambah')?>" class="btn btn-primary float-right" >
            Tambah Data
        </a >
    </div>
    <?php
    if ($this->session->flashdata('success')) {
        echo '<div class="alert alert-sm alert-success">';
        echo $this->session->flashdata('success');
        echo '</div>';
    }
    ?>
    <?php
    if ($this->session->flashdata('warning')) {
        echo '<div class="alert alert-sm alert-warning">';
        echo $this->session->flashdata('warning');
        echo '</div>';
    }
    ?>
    <div class="card-body">
        <table id="example2" class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Anggota</td>
                    <td>No Kontak</td>
                    <td>Jabatan</td>
                    <td>Foto</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($tim as $kat) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $kat->nama_tim ?></td>
                        <td><?= $kat->no_kontak ?></td>
                        <td><?= $kat->jabatan ?></td>
                        <td><img src="<?= base_url() ?>assets/uploads/<?= $kat->foto?>" width="100" alt="<?= $kat->nama_tim?>"></td>
                        <td>
                            <!-- <a href="<?= base_url('admin/tim/edit/' . $kat->id) ?>" class="btn btn-warning" title="Edit Data"><i class="fas fa-edit"></i></a> -->
                            <a href="<?= base_url('admin/tim/aksi/hapus/' . $kat->id) ?>" class="btn btn-danger" onclick="return confirm('Data yang dihapus tidak akan bisa dikembalikan?');" title="Hapus Data"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</div>

