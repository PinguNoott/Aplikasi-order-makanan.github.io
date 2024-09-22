<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <h2 class="mb-4">Tambah Barang</h2>
   <form action="<?= base_url('home/aksi_t_barang/' . $dua->id_barang) ?>" method="post" enctype="multipart/form-data">


        <div class="form-group mb-3">
          <label for="nama_barang">Nama Barang</label>
          <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $dua->nama_barang ?>" required>
        </div>

        <div class="form-group mb-3">
          <label for="hbeli">Harga Beli</label>
          <input type="number" class="form-control" id="hbeli" name="hbeli" value="<?= $dua->hbeli ?>" required>
        </div>

        <div class="form-group mb-3">
          <label for="hjual">Harga Jual</label>
          <input type="number" class="form-control" id="hjual" name="hjual" value="<?= $dua->hjual ?>" required>
        </div>

        <div class="form-group mb-3">
          <label for="stok">Stok</label>
          <input type="number" class="form-control" id="stok" name="stok" value="<?= $dua->stok ?>" required>
        </div>

        <div class="form-group mb-3">
          <label for="foto">Foto Barang</label>
          <input type="file" class="form-control" id="foto" name="foto">
          <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
        </div>

        <div class="form-group mb-3">
          <label for="status">Status</label>
          <select class="form-control" id="status" name="status" required>
            <option value="Tersedia" <?= $dua->status == 'Tersedia' ? 'selected' : '' ?>>Tersedia</option>
            <option value="Tidak Tersedia" <?= $dua->status == 'Tidak Tersedia' ? 'selected' : '' ?>>Tidak Tersedia</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= base_url('home/barang') ?>" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
</div>