<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets/home/assets/img/logo3.png" rel="icon">
  <link href="<?= base_url(); ?>assets/home/assets/img/logo3.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/style.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/font-awesome.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/styles.min.css" />
<<<<<<< HEAD
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/styles.min2.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/simple-line-icons.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
=======
>>>>>>> 7aee980f2ca99d6a6dfbea003f3c791ee8a35621

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>/assets/home/assets/css/style.css" rel="stylesheet">

</head>

<body>
  <div class="d-none d-sm-block bg-image" style="height: 350px;background: url(&quot;<?= base_url(); ?>assets/img/frr.png&quot;) center / cover no-repeat;">
    <div class="d-flex justify-content-center align-items-center" style="height: inherit;min-height: initial;width: 100%;position: absolute;left: 0;background: rgba(30,41,99,0);">
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
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

  <!-- Top News Start-->

  <div class="top-news">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 tn-left">
          <div class="tn-img">
            <img src="<?= base_url(); ?>/assets/top-news-1.jpg" />
            <div class="tn-content">
              <div class="tn-content-inner">
                <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                <a class="tn-title" href="">Lorem ipsum dolor sit amet adipiscing elit</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 tn-right">
          <div class="row">
            <div class="col-md-6">
              <div class="tn-img">
                <img src="<?= base_url(); ?>/assets/top-news-2.jpg" />
                <div class="tn-content">
                  <div class="tn-content-inner">
                    <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                    <a class="tn-title" href="">Integer faucibus pharetra odio</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="tn-img">
                <img src="<?= base_url(); ?>/assets/top-news-3.jpg" />
                <div class="tn-content">
                  <div class="tn-content-inner">
                    <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                    <a class="tn-title" href="">Nulla vitae pharetra ligula</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="tn-img">
                <img src="<?= base_url(); ?>/assets/top-news-4.jpg" />
                <div class="tn-content">
                  <div class="tn-content-inner">
                    <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                    <a class="tn-title" href="">Ut ac euismod tellus a blandit</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="tn-img">
                <img src="<?= base_url(); ?>/assets/top-news-5.jpg" />
                <div class="tn-content">
                  <div class="tn-content-inner">
                    <a class="tn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                    <a class="tn-title" href="">Cras ac egestas sem nec euismod</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Top News End-->

  <div id="main-content" class="blog-page">
    <div class="container">
      <div class="row clearfix">
        <div class="col-lg-8 col-md-12 left-box">
          <div class="card single_post">
            <div class="body">
              <div class="img-post">
                <img class="d-block img-fluid" src="https://via.placeholder.com/800x280/87CEFA/000000" alt="First slide">
              </div>
              <h3><a href="blog-details.html">All photographs are accurate</a></h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
          </div>
          <div class="card">
            <div class="header">
              <h2>Comments 3</h2>
            </div>
            <div class="body">
              <ul class="comment-reply list-unstyled">
                <li class="row clearfix">
                  <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Awesome Image"></div>
                  <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                    <h5 class="m-b-0">Gigi Hadid </h5>
                    <p>Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p>
                    <ul class="list-inline">
                      <li><a href="javascript:void(0);">Mar 09 2018</a></li>
                      <li><a href="javascript:void(0);">Reply</a></li>
                    </ul>
                  </div>
                </li>
                <li class="row clearfix">
                  <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Awesome Image"></div>
                  <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                    <h5 class="m-b-0">Christian Louboutin</h5>
                    <p>Great tutorial but few issues with it? If i try open post i get following errors. Please can you help me?</p>
                    <ul class="list-inline">
                      <li><a href="javascript:void(0);">Mar 12 2018</a></li>
                      <li><a href="javascript:void(0);">Reply</a></li>
                    </ul>
                  </div>
                </li>
                <li class="row clearfix">
                  <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Awesome Image"></div>
                  <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                    <h5 class="m-b-0">Kendall Jenner</h5>
                    <p>Very nice and informative article. In all the years I've done small and side-projects as a freelancer, I've ran into a few problems here and there.</p>
                    <ul class="list-inline">
                      <li><a href="javascript:void(0);">Mar 20 2018</a></li>
                      <li><a href="javascript:void(0);">Reply</a></li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="header">
              <h2>Leave a reply <small>Your email address will not be published. Required fields are marked*</small></h2>
            </div>
            <div class="body">
              <div class="comment-form">
                <form class="row clearfix">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 right-box">
          <div class="card">
            <div class="body search">
              <div class="input-group m-b-0">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Search...">
              </div>
            </div>
          </div>
          <div class="card">
            <div class="header">
              <h2>Categories Clouds</h2>
            </div>
            <div class="body widget">
              <ul class="list-unstyled categories-clouds m-b-0">
                <li><a href="javascript:void(0);">eCommerce</a></li>
                <li><a href="javascript:void(0);">Microsoft Technologies</a></li>
                <li><a href="javascript:void(0);">Creative UX</a></li>
                <li><a href="javascript:void(0);">Wordpress</a></li>
                <li><a href="javascript:void(0);">Angular JS</a></li>
                <li><a href="javascript:void(0);">Enterprise Mobility</a></li>
                <li><a href="javascript:void(0);">Website Design</a></li>
                <li><a href="javascript:void(0);">HTML5</a></li>
                <li><a href="javascript:void(0);">Infographics</a></li>
                <li><a href="javascript:void(0);">Wordpress Development</a></li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="header">
              <h2>Popular Posts</h2>
            </div>
            <div class="body widget popular-post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="single_post">
                    <p class="m-b-0">Apple Introduces Search Ads Basic</p>
                    <span>jun 22, 2018</span>
                    <div class="img-post">
                      <img src="https://via.placeholder.com/280x280/87CEFA/000000" alt="Awesome Image">
                    </div>
                  </div>
                  <div class="single_post">
                    <p class="m-b-0">new rules, more cars, more races</p>
                    <span>jun 8, 2018</span>
                    <div class="img-post">
                      <img src="https://via.placeholder.com/280x280/87CEFA/000000" alt="Awesome Image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="header">
              <h2>Instagram Post</h2>
            </div>
            <div class="body widget">
              <ul class="list-unstyled instagram-plugin m-b-0">
                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
                <li><a href="javascript:void(0);"><img src="https://via.placeholder.com/100x100/87CEFA/000000" alt="image description"></a></li>
              </ul>
            </div>
          </div>
          <div class="card">
            <div class="header">
              <h2>Email Newsletter <small>Get our products/news earlier than others, let’s get in touch.</small></h2>
            </div>
            <div class="body widget newsletter">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter Email">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <main id="main">

      <!-- ======= About Section ======= -->
      <div id="about" class="about-area area-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <br>
                <h2>TENTANG KAMI</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="well-left">
                <div class="single-well">
                  <img src="<?= base_url(); ?>/assets/home/assets/img/about/hero1.jpg" alt="">
                </div>
              </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="well-middle">
                <div class="single-well ">
                  <h4 class="sec-head">PROFILE</h4>
                  <p>
                    Kesehatan tubuh merupakan hal yang sangat penting dan tidak dapat dipandang sebelah mata. Masalah nyeri otot, tulang, dan sendi bisa sangat mengganggu keseharian Anda, dan bisa mempengaruhi produktivitas dan kualitas hidup Anda. Jika Anda mengalami masalah tersebut, maka kami memiliki solusi yang tepat untuk Anda.
                  </p>
                  <p>
                    Nama Perusahaan adalah layanan kesehatan akupuntur yang mengkhususkan diri pada pengobatan nyeri otot, tulang, dan sendi. Kami memiliki tim ahli terapis akupuntur yang berpengalaman dan kompeten dalam memberikan pengobatan yang efektif untuk mengatasi masalah kesehatan Anda.
                  </p>
                  <div class=""><a href="<?= base_url('Home/about'); ?>" class="btn-about">Read More</a></div>
                </div>

              </div>
            </div>
            <!-- End col-->
          </div>
        </div>
      </div><!-- End About Section -->


      <!-- ======= Pelayana Section ======= -->
      <div id="blog" class="blog-area">
        <div class="blog-inner area-padding">
          <div class="blog-overly"></div>
          <div class="container ">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>LAYANAN TERPOPULER KAMI</h2>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- Start Left Blog -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <img src="<?= base_url(); ?>/assets/home/assets/img/blog/sakit_kepala.jpg" alt="">
                  </div>
                  <div class="blog-meta">

                  </div>
                  <div class="blog-text text-center">
                    <h4>
                      NYERI KEPALA
                    </h4>
                    <p>
                      Sakit kepala atau nyeri kepala adalah kondisi ketika seseorang merasakan rasa sakit, tekanan, atau ketegangan di sekitar kepala
                    </p>
                  </div>
                  <div class="text-center"><a href="<?= base_url('Home/Nyeri_kepala'); ?>" class="btn ready-btn align-center">Read More</a></div>
                </div>
                <!-- Start single blog -->
              </div>
              <!-- End Left Blog-->
              <!-- Start Left Blog -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <img src="<?= base_url(); ?>/assets/home/assets/img/blog/leher.jpg" alt="">
                  </div>
                  <div class="blog-meta">

                  </div>
                  <div class="blog-text text-center">
                    <h4>
                      NYERI LEHER
                    </h4>
                    <p>
                      Nyeri leher dapat disebabkan oleh berbagai faktor, seperti postur yang buruk, cedera fisik, kondisi medis, stres dan kecemasan, kurangnya gerakan, posisi tidur yang salah, dll.
                    </p>
                  </div>
                  <div class="text-center"><a href="<?= base_url('Home/Nyeri_leher'); ?>" class="btn ready-btn align-center">Read More</a></div>
                </div>
                <!-- Start single blog -->
              </div>
              <!-- End Left Blog-->
              <!-- Start Left Blog -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <img src="<?= base_url(); ?>/assets/home/assets/img/blog/bahu.jpg" alt="">
                  </div>
                  <div class="blog-meta">

                  </div>
                  <div class="blog-text text-center">
                    <h4>
                      NYERI BAHU
                    </h4>
                    <p>
                      Nyeri bahu dapat disebabkan oleh berbagai kondisi medis atau faktor lain, termasuk cedera, postur yang buruk, kondisi medis, stres, beban berlebihan pada bahu, dll.
                    </p>
                  </div>
                  <div class="text-center"><a href="<?= base_url('Home/Nyeri_bahu'); ?>" class="btn ready-btn align-center">Read More</a></div>
                </div>
                <!-- Start single blog -->
              </div>
              <!-- End Left Blog-->
            </div>
            <br>
            <div class="row">
              <!-- Start Left Blog -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <img src="<?= base_url(); ?>/assets/home/assets/img/blog/lutut.jpg" alt="">
                  </div>
                  <div class="blog-meta">

                  </div>
                  <div class="blog-text text-center">
                    <h4>
                      NYERI LUTUT
                    </h4>
                    <p>
                      Nyeri lutut pada orang dewasa bisa disebabkan oleh berbagai faktor, termasuk cedera, kondisi medis, berlebihan beban pada lutut, masalah postur, faktor usia, dll.
                    </p>
                  </div>
                  <div class="text-center"><a href="<?= base_url('Home/Nyeri_lutut'); ?>" class="btn ready-btn align-center">Read More</a></div>
                </div>
                <!-- Start single blog -->
              </div>
              <!-- End Left Blog-->
              <!-- Start Left Blog -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <img src="<?= base_url(); ?>/assets/home/assets/img/blog/pinggang.jpg" alt="">
                  </div>
                  <div class="blog-meta">

                  </div>
                  <div class="blog-text text-center">
                    <h4>
                      NYERI PINGGANG
                    </h4>
                    <p>
                      Nyeri pinggang dapat disebabkan oleh berbagai faktor, seperti cedera fisik, postur yang buruk, kelebihan berat badan, kondisi medis seperti herniated disk, dll.

                    </p>
                  </div>
                  <div class="text-center"><a href="<?= base_url('Home/Nyeri_pinggang'); ?>" class="btn ready-btn align-center">Read More</a></div>
                </div>
                <!-- Start single blog -->
              </div>
              <!-- End Left Blog-->
              <!-- Start Left Blog -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <img src="<?= base_url(); ?>/assets/home/assets/img/blog/saraf.jpg" alt="">
                  </div>
                  <div class="blog-meta">

                  </div>
                  <div class="blog-text text-center">
                    <h4>
                      SYARAF KEJEPIT
                    </h4>
                    <p>
                      Syaraf kejepit atau kondisi medis yang dikenal dengan istilah "pinched nerve" terjadi ketika saraf terjepit atau tertekan oleh jaringan di sekitarnya.
                    </p>
                  </div>
                  <div class="text-center"><a href="<?= base_url('Home/Syaraf_kejepit'); ?>" class="btn ready-btn align-center">Read More</a></div>
                </div>
              </div>
              <!-- End Left Blog-->

            </div><br>
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <img src="<?= base_url(); ?>/assets/home/assets/img/blog/stroke1.jpeg" alt="">
                </div>
                <div class="blog-meta">

                </div>
                <div class="blog-text text-center">
                  <h4>
                    STROKE
                  </h4>
                  <p>
                    Stroke adalah kondisi medis yang terjadi ketika pasokan darah ke otak terganggu atau terhenti, biasanya disebabkan oleh penyumbatan atau pecahnya pembuluh darah di otak.
                  </p>
                </div>
                <div class="text-center"><a href="<?= base_url('Home/Stroke'); ?>" class="btn ready-btn align-center">Read More</a></div>
              </div>
            </div>
            <!-- End Left Blog-->


          </div>

        </div>
      </div><!-- End Blog Section -->

      <!-- ======= Rviews Section ======= -->
      <div class="reviews-area">
        <div class="row g-0">
          <div class="col-lg-6">
            <img src="<?= base_url(); ?>/assets/home/assets/img/about/hero4.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-lg-6 work-right-text d-flex align-items-center">
            <div class="px-5 py-5 py-lg-0">
              <h2>Mempunyai Keluhan Dengan Kesehatan Anda</h2>
              <h5>Jangan Ragu untu datang atau menghubungi kami!</h5>
              <a href="https://wa.me/6281288843033?text=Hallo%20admin.%20Saya%20Ingin%20Konsultasi%20Mengenai%20keluhan%20Saya" target="_blank" class="ready-btn scrollto">Hubungi Kami</a>
            </div>
          </div>
        </div>
      </div><!-- End Rviews Section -->

      <!-- ======= Suscribe Section ======= -->
      <div class="suscribe-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
              <div class="suscribe-text text-center">
                <h3>Konsultasikan tentang kesehatan anda pada kami</h3>
                <a class="sus-btn" href="https://wa.me/6281288843033?text=Hallo%20admin.%20Saya%20Ingin%20Konsultasi%20Mengenai%20keluhan%20Saya" target="_blank">Free Konsultasi</a>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Suscribe Section -->


      <!-- ======= Testimonials Section ======= -->
      <div id="testimonials" class="testimonials">
        <div class="container">

          <div class="testimonials-slider swiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <!-- <img src="</?= base_url(); ?>/assets/home/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                  <h3>Muhammad Syukri</h3>
                  <h4>(52 Tahun)</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Saya sudah mencoba beberapa sesi akupuntur dengan Nama Perusahaan dan saya merasa sangat lega setiap kali selesai. Saya memiliki masalah nyeri kronis dan akupuntur telah membantu saya mengelola rasa sakit saya dengan sangat baik.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <!-- <img src="</?= base_url(); ?>/assets/home/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt=""> -->
                  <h3>Fatimah Az-zahra</h3>
                  <h4>(38 Tahun)</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Saya baru saja menyelesaikan program akupuntur dengan Nama Perusahaan dan saya merasa sehat dan bahagia. Praktisi mereka sangat ramah dan profesional, dan saya merasa sangat dihargai sebagai pasien.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <!-- <img src="</?= base_url(); ?>/assets/home/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt=""> -->
                  <h3>Elidaswis</h3>
                  <h4>(50 Tahun)</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Saya telah mencoba berbagai jenis pengobatan untuk masalah kesehatan saya dan akupuntur adalah yang terbaik. Saya sangat senang menemukan Nama Perusahaan karena mereka memiliki praktisi yang sangat terampil dan perhatian pada kebutuhan saya.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div><!-- End Testimonials Section -->

      <div class="text-center border-dark col m-auto"><span class="text-center m-auto py-4" id="fb"></span></div>
      <div id="fixed-social">
        <div>
          <a class="fixed-facebook" href="#" target="_blank"><i class="fa fa-facebook"></i><span>&nbsp;Facebook</span></a>
        </div>
        <div>
          <a class="fixed-instagram" href="#" target="_blank"><i class="fa fa-instagram"></i><span>&nbsp;Instagram</span></a>
        </div>
        <div>
          <a class="fixed-twitter" href="#" target="_blank"><i class="fa fa-twitter"></i><span>&nbsp;Twitter</span></a>
        </div>
        <div>
          <a class="fixed-linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i><span>&nbsp;Linkedin</span></a>
        </div>
        <div>
          <a class="fixed-youtube" href="#" target="_blank"><i class="fa fa-youtube-play"></i><span>&nbsp;Youtube</span></a>
        </div>
      </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
      <div class="footer-area">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="footer-content">
                <div class="footer-head">
                  <div class="footer-logo">
                    <a href="<?= base_url('Home'); ?>"><img src="<?= base_url(); ?>assets/home/assets/img/logo.png" alt="" class="img-fluid"></a>
                  </div>

                  <p>Kesehatan yang Bermutu dengan Nama Perusahaan. Tidak Ada Kompromi.</p>
                  <!-- <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div> -->
                </div>
              </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-4">
              <div class="footer-content">
                <div class="footer-head">
                  <h4>information</h4>
                  <p>
                    Untuk Informasi lebih Lanjut. Silahkan Hubungi Kami pada contact di bawah!!
                  </p>
                  <div class="footer-contacts">
                    <p><span>Tel:</span> +62 812-XXXX-XXXX</a></p>
                    <p><span>Email:</span> customer.service@gmail.com</a></p>
                    <p><span>Jam Kerja:</span> Setiap Hari 08:00-21:00 WIB</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-4">
              <div class="footer-content">
                <div class="footer-head">
                  <h4>Map</h4>
                  <div class="footer-contacts text-center">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3801079258897!2d106.7787701204349!3d-6.213497785806541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7942b54a85d%3A0x950e8ada7f1416a1!2sGriya!5e0!3m2!1sid!2sid!4v1680499486149!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-area-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="copyright text-center">
                <p>
                  <?= date('Y'); ?> &copy; Copyright <strong>Nama Perusahaan</strong>. All Rights Reserved
                </p>
              </div>
              <div class="credits">
                Web Developer <a href="https://duduweb.id/">Duduweb.id</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <a href="https://wa.me/6281288843033?text=Hallo%20admin.%20Saya%20Ingin%20Konsultasi%20Mengenai%20keluhan%20Saya" class="wa-floating d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-whatsapp"></i></a>
    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/assets/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/home/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/assets/home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/home/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/home/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/assets/home/assets/js/main.js"></script>

</body>

</html>