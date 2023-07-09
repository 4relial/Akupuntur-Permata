 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
   <div class="container d-flex justify-content-between">

     <div class="logo">
       <!-- <h1><a href="index.html"><span>Logo</span>Perusahaan</a></h1> -->
       <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?= base_url('Home'); ?>"><img src="<?= base_url(); ?>assets/home/assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url('Home'); ?>">Home</a></li>
          <li class="dropdown"><a href="#"><span>Pendidikan</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="<?= base_url('Home/Nyeri_kepala'); ?>">MTs</a></li>
              <li><a href="<?= base_url('Home/Nyeri_leher'); ?>">MA </a></li>
              <li><a href="<?= base_url('Home/Nyeri_bahu'); ?>">Tahfidzh</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Sosial</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="<?= base_url('Home/Nyeri_kepala'); ?>">Berbagi Yatim</a></li>
              <li><a href="<?= base_url('Home/Nyeri_leher'); ?>">Berbagi Qur'an </a></li>
              <li><a href="<?= base_url('Home/Nyeri_bahu'); ?>">Penyelenggaraan Jenazah</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Donasi</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="<?= base_url('Home/Nyeri_kepala'); ?>">Pesantren</a></li>
              <li><a href="<?= base_url('Home/Nyeri_leher'); ?>">Santri Yatim dan Miskin</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= base_url('auth/booking'); ?>">Pendaftaran</a></li>
          <!-- <li><a class="nav-link scrollto" href="<?= base_url('auth/register'); ?>">Daftar</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

   </div>
 </header><!-- End Header -->