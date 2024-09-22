<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <h2 class="mb-4">Edit User</h2>
      <form action="<?= base_url('home/aksi_e_user') ?>" method="post" enctype="multipart/form-data">

        <!-- Hidden input untuk ID barang -->
        <input type="hidden" name="id" value="<?= $satu->id_user ?>">

        <div class="form-group mb-3">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" value="<?= $satu->username ?>" required>
        </div>

        <div class="form-group mb-3">
          <label for="password">Password</label>
          <input type="text" class="form-control" id="password" name="password" value="<?= $satu->password ?>" required>
        </div>

        <div class="form-group mb-3">
          <label for="foto">Foto User</label>
          <input type="file" class="form-control" id="foto" name="foto">
          <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="<?= base_url('home/user') ?>" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
</div>
