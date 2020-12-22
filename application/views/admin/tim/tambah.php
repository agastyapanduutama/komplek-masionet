<div class="card">
    <div class="card-body">
        <?php echo form_open_multipart('admin/tim/aksi/tambah'); ?>
        <div class="form-group">
            <label for="" class="label-control">Nama</label>
            <input type="text" name="nama_tim" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="label-control">No Kontak</label>
            <input type="text" name="no_kontak" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="label-control">Jabatan</label>
            <input type="text" name="jabatan" value="" class="form-control">
        </div>
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