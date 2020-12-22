<div class="card">
    <div class="card-header"><?= $title ?>
        <a href="<?= base_url('admin/konten/tambah/1') ?>" class="btn btn-primary float-right">
            Tambah Data
        </a>
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
                    <td>Judul</td>
                    <td>Kategori</td>
                    <td>Dibuat</td>
                    <td>Gambar</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data as $kat) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $kat->judul ?></td>
                        <td><?= $kat->nama_kategori ?></td>
                        <td><?= $kat->waktu_dibuat ?></td>
                        <td><img src="<?= base_url() ?>assets/uploads/<?= $kat->gambar ?>" width="100"></td>
                        <td>
                            <a href="<?= base_url('admin/konten/edit/' . $kat->id) ?>" class="btn btn-warning" title="Edit Data"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url('admin/konten/aksi/hapus/' . $kat->id) ?>" class="btn btn-danger" onclick="return confirm('Data yang dihapus tidak akan bisa dikembalikan?');" title="Hapus Data"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</div>
=