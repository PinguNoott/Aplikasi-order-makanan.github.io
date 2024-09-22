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

          <div class="swiper-slide py-5">
            <div class="row banner-content align-items-center">
              <div class="img-wrapper col-md-5">
                <img src="<?=base_url('images/kanade2.png')?>" class="img-fluid" >
              </div>
              <div class="content-wrapper col-md-7 p-5 mb-5">
                <h2 class="banner-title display-1 fw-normal">パン屋さんへようこそ！</h2>
                <a href="<?= base_url('home/order')?>" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">BUY NOW
                  <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                    <use xlink:href="#arrow-right"></use>
                  </svg></a>
              </div>

         
        </div>
      </div>
    </div>
  </section>
</section>

           

      
         

  

 