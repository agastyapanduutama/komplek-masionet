<div class="card">
    <div class="card-body">
        <?php echo form_open_multipart('admin/kategori/aksi/tambah'); ?>
        <div class="form-group">
            <label for="" class="label-control">Judul</label>
            <input type="text" name="judul" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="label-control">Isi Konten</label>
            <textarea id="summernote" name="teks" class="summernote" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="" class="label-control">Kategori</label>
            <select name="id_kategori" id="" class="form-control">
                <option value="">-- Silakan Pilih -- </option>
                <?php foreach ($kategori as $kat) : ?>
                    <option value="<?= $kat->id ?>"> <?= $kat->nama_kategori ?> </option>
                <?php endforeach ?>
            </select>
        </div>

        <input type="hidden" value="<?= $tipe ?>" name="tipe">

        <div class="form-group">
            <label for="" class="label-control">Gambar</label>
            <input type="file" accept="image/x-png,image/gif,image/jpeg" name="foto" class="form-control">
        </div>
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

    </form>
</div>
</div>