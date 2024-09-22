<body>
<style>
  html, body {
    margin: 0;
    padding: 0;
    overflow-y: hidden; /* Hindari scroll horizontal */
    height: 100%; /* Pastikan tinggi halaman 100% */
    font-family: Arial, sans-serif; /* Sesuaikan font jika diperlukan */
}
#banner {
    background: #F9F3EC;
    padding: 1px 0; /* Sesuaikan padding vertikal sesuai kebutuhan */
    overflow: hidden; /* Hindari elemen yang meluber */
}
.img-wrapper {
    max-width: 400px; /* Sesuaikan ukuran maksimum gambar */
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
              <li class="nav-item">
         <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" id="pages" data-bs-toggle="dropdown"
                  aria-expanded="false">Restore</a>
                <ul class="dropdown-menu" aria-labelledby="pages">
                  <li><a href="<?= base_url('home/rbarang')?>" class="dropdown-item">Barang</a></li>
                  <li><a href="<?= base_url('home/ruser')?>" class="dropdown-item">User</a></li>
                </ul>
              <li class="nav-item">
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

    </div>
  </section>
 <section id="banner" style="background: #F9F3EC;">
    <div class="container">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">

       
        </div>
      </div>
    </div>
  </section>
</section>


        <div class="content">
            <div class="animated fadeIn"></div>
<div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <!-- Credit Card -->
                                <table class="table-form">
          <tr>
            <th>Judul Website</th>
            <td><input name="judul_website" type="text" class="form-control" value="<?= $setting->judul_website ?>" required></td>
          </tr>
          <tr>
            <th>Tab Icon</th>
            <td><input name="t_icon" type="file" class="form-control" required></td>
          </tr>
          <tr>
            <th>Menu Icon</th>
            <td><input name="m_icon" type="file" class="form-control" required></td>
          </tr>
          <tr>
            <td colspan="2">
              <button type="submit">
                <i class="fa fa-save fa-lg"></i>&nbsp;
                <span>Submit</span>
              </button>
              <input type="hidden" value="<?= $setting->id_setting ?>" name="id">
            </td>
          </tr>
        </table>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->
                    </div>
                    