<body>
<style>
  html, body {
    margin: 0;
    padding: 0;
    overflow-y: hidden; /* Prevent horizontal scroll */
    height: 100%; /* Ensure full height */
    font-family: Arial, sans-serif; /* Set font */
  }
  #banner {
    background: #F9F3EC;
    padding: 1px 0; /* Adjust vertical padding */
    overflow: hidden; /* Prevent overflow */
  }
  .img-wrapper {
    max-width: 180px; /* Adjust image size */
  }
..table-wrapper {
    width: 100%;
    overflow-x: scroll; /* Pastikan scroll horizontal muncul jika tabel terlalu besar */
    display: block;
}

.table {
    min-width: 100px; /* Set ukuran minimum agar tabel melebar */
    width: 100%; /* Buat tabel melebar sesuai kebutuhan */
    border-collapse: collapse;
}

.table th, .table td {
    padding: 10px;
    text-align: left;
    white-space: nowrap; /* Hindari pemotongan teks */
}

.actions {
    width: 280px; /* Lebar kolom aksi */
}

.table-wrapper::-webkit-scrollbar {
    height: 8px;
}

.table-wrapper::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 5px;
}

.table-wrapper::-webkit-scrollbar-thumb:hover {
    background: #555;
}

  .btn-edit {
    background-color: #f0ad4e; /* Edit button color */
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
  }
  .btn-edit:hover {
    background-color: #ec971f; /* Darker shade on hover */
  }
  .btn-delete {
    background-color: #d9534f; /* Delete button color */
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
  }
  .btn-delete:hover {
    background-color: #c9302c; /* Darker shade on hover */
  }
</style>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;"></svg>
  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        

        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
      </div>
    </div>
  </div>

  
    <div class="container">
      <nav class="main-menu d-flex navbar navbar-expand-lg ">


       
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

          <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body justify-content-between">
           
            <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 mb-0">
              <li class="nav-item">
                <a href="<?= base_url('home/dashboard')?>" class="nav-link active">Home</a>
              </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" id="pages" data-bs-toggle="dropdown"
                  aria-expanded="false">Menu</a>
                <ul class="dropdown-menu" aria-labelledby="pages">
                  <li><a href="<?= base_url('home/barang')?>" class="dropdown-item">Barang</a></li>
                  <li><a href="<?= base_url('home/user')?>" class="dropdown-item">User</a></li>
                  <li><a href="<?= base_url('home/activity')?>" class="dropdown-item">Activity</a></li>
                </ul>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" id="pages" data-bs-toggle="dropdown"
                  aria-expanded="false">Restore</a>
                <ul class="dropdown-menu" aria-labelledby="pages">
                  <li><a href="<?= base_url('home/rbarang')?>" class="dropdown-item">Barang</a></li>
                  <li><a href="<?= base_url('home/ruser')?>" class="dropdown-item">User</a></li>
                </ul>
              <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" href="<?= base_url('home/setting')?>">
          <i class="bi bi-menu-button-wide"></i><span>Setting</span>
        </a>

              <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" href="<?= base_url('home/logout')?>">
          <i class="bi bi-menu-button-wide"></i><span>Logout</span>
        </a>
            </ul>

            <div class="d-none d-lg-flex align-items-end">
              <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                <?= date('d-m-Y') ?></span></h5>
                                </ol>
                            </div>
                        </div>
                    </div>
              <ul class="d-flex justify-content-end list-unstyled m-0">
                <li>
                  <a href="<?= base_url('home/profil') ?>" class="mx-3">
  <img src="<?= base_url('images/kanade2.png') ?>" style="width: 40px; height: 40px; border-radius: 50%;" class="fs-4">
</a>
                </li>
                <li>
                  <a href="index.html" class="mx-3">
                    <iconify-icon icon="mdi:heart" class="fs-4"></iconify-icon>
                  </a>
                </li>
</ul>
</div>
</div>
</div>
</nav>
</div>
</header>
</body>

    <section class="section">
        <section id="banner" style="background: #F9F3EC;">
    <div class="container">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide py-5">
            <div class="row banner-content align-items-center">
              <div class="img-wrapper col-md-5">
                <img src="<?=base_url('images/kanade.png')?>" class="img-fluid"style="max-width: 100%; height: auto;">
              </div>
              <div class="content-wrapper col-md-7 p-5 mb-5">
      <div class="row">
        <div class="col-lg-12">
         
             <a href="<?= base_url('home/tambahbarang') ?>" class="btn btn-primary">Tambah Barang</a>

              
              <!-- Table with stripped rows -->
            <div class="table-wrapper">
  <table class="table datatable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga Beli</th>
        <th scope="col">Harga Jual</th>
        <th scope="col">Stok</th>
        <th scope="col">Foto</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; foreach ($satu as $dua): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $dua->nama_barang ?></td>
          <td><?= $dua->hbeli ?></td>
          <td><?= $dua->hjual ?></td>
          <td><?= $dua->stok ?></td>
          <td><?= $dua->foto ?></td>
          <td><?= $dua->status ?></td>
          <td class="actions">
           <a href="<?= base_url('home/editbarang/' . $dua->id_barang) ?>" class="btn-edit">Edit</a>
            <a href="<?= base_url('home/hapus_barang/'.$dua->id_barang) ?>" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

              <!-- End Table with stripped rows -->

            </div>
          </div>
        </div>
      </div>
    </section>
</main><!-- End #main -->
