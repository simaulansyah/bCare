  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!-- <h1><a href="index.html">Beauty Care</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href=""><img src="<?= base_url('assets/img/beautycareFix.png');?>" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?=base_url();?>">Home</a></li>
          <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="<?=base_url();?>.#about">About Us</a></li>
              <li><a href="<?=base_url();?>.#team">Team</a></li>
              <li class="drop-down"><a href="#">Deep Drop Dow</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="<?=base_url();?>.#services">Services</a></li>
          <li><a href="<?=base_url();?>.#portfolio">Catalogue</a></li>
          <li><a href="<?=base_url();?>.#testimonials">Testimonials</a></li>
          <li><a href="<?=base_url();?>.#contact">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->