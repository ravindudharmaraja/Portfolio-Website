<html lang="zxx" class="swup-enabled"><head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#2B2B35">
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
  <!-- font awesome css -->
  <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="css/plugins/swiper.min.css">
  <!-- fancybox css -->
  <link rel="stylesheet" href="css/plugins/fancybox.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Arter</title>
<style id="smooth-scrollbar-style">
[data-scrollbar] {
  display: block;
  position: relative;
}

.scroll-content {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}

.scrollbar-track {
  position: absolute;
  opacity: 0;
  z-index: 1;
  background: rgba(222, 222, 222, .75);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -webkit-transition: opacity 0.5s 0.5s ease-out;
          transition: opacity 0.5s 0.5s ease-out;
}
.scrollbar-track.show,
.scrollbar-track:hover {
  opacity: 1;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}

.scrollbar-track-x {
  bottom: 0;
  left: 0;
  width: 100%;
  height: 8px;
}
.scrollbar-track-y {
  top: 0;
  right: 0;
  width: 8px;
  height: 100%;
}
.scrollbar-thumb {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 8px;
  background: rgba(0, 0, 0, .5);
  border-radius: 4px;
}
</style></head>

<body>

  <!-- app -->
  <div class="art-app">

    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

      <!-- app container end -->
      <div class="art-app-container">

        <!-- info bar -->
        <?php echo $__env->make('components.infobar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- info bar end -->

        <!-- content -->
        <div class="art-content">

          <!-- curtain -->
          <div class="art-curtain"></div>

          <!-- top background -->
          <div class="art-top-bg" style="background-image: url(img/bg.jpg)">
            <!-- overlay -->
            <div class="art-top-bg-overlay"></div>
            <!-- overlay end -->
          </div>
          <!-- top background end -->


          <!-- swup container -->
          <div class="transition-fade" id="swup" data-swup="0">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Contact information</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->
                  <!-- col -->
                  <div class="col-lg-4">
                    <!-- contact card -->
                    <div class="art-a art-card">
                      <div class="art-table p-15-15">
                        <ul>
                          <li>
                            <h6>Country:</h6><span>Sri Lanka</span>
                          </li>
                          <li>
                            <h6>City:</h6><span>Balangoda</span>
                          </li>

                          <li>
                            <h6>Streat:</h6><span>208/1, Medabedda, Kalthota</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- contact card end -->
                  </div>
                  <!-- col end -->
                  <!-- col -->
                  <div class="col-lg-4">
                    <!-- contact card -->
                    <div class="art-a art-card">
                      <div class="art-table p-15-15">
                        <ul>
                          <li>
                            <h6>Email:</h6><span>ravindudharmaraja00@gmail.com</span>
                          </li>
                          <li>
                            <h6>Telegram:</h6><span>@ravindudharmaraja</span>
                          </li>
                          <li>
                            <h6>Skype:</h6><span>Ravindu Dharmaraja</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- contact card end -->
                  </div>
                  <!-- col end -->
                  <!-- col -->
                  <div class="col-lg-4">
                    <!-- contact card -->
                    <div class="art-a art-card">
                      <div class="art-table p-15-15">
                        <ul>
                          <li>
                            <h6>Support service:</h6><span>+94 787 37 99 91</span>
                          </li>
                          <li>
                            <h6>Office:</h6><span>-</span>
                          </li>
                          <li>
                            <h6>Personal:</h6><span>-</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- contact card end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Get in touch</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- contact form frame -->
                    <div class="art-a art-card">

                      <!-- contact form -->
                      <form id="form" class="art-contact-form">
                        <!-- form field -->
                        <div class="art-form-field">
                          <!-- name input -->
                          <input id="name" name="name" class="art-input" type="text" placeholder="Name" required="">
                          <!-- label -->
                          <label for="name"><i class="fas fa-user"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- form field -->
                        <div class="art-form-field">
                          <!-- email input -->
                          <input id="email" name="email" class="art-input" type="email" placeholder="Email" required="">
                          <!-- label -->
                          <label for="email"><i class="fas fa-at"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- form field -->
                        <div class="art-form-field">
                          <!-- message textarea -->
                          <textarea id="message" name="text" class="art-input" placeholder="Message" required=""></textarea>
                          <!-- label -->
                          <label for="message"><i class="far fa-envelope"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- button -->
                        <div class="art-submit-frame">
                          <button class="art-btn art-btn-md art-submit" type="submit"><span>Send message</span></button>
                          <!-- success -->
                          <div class="art-success">Success <i class="fas fa-check"></i></div>
                        </div>
                      </form>
                      <!-- contact form end -->

                    </div>
                    <!-- contact form frame end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/1.png" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/2.png" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/3.png" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/1.png" alt="brand">
                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- footer -->
              <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <!-- footer end -->

            </div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 547px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 346.219px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
            <!-- scroll frame end -->

          </div>
          <!-- swup container end -->

        </div>
        <!-- content end -->

        <!-- menu bar -->
        <?php echo $__env->make('components.manu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- menu bar end -->

      </div>
      <!-- app container end -->

    </div>
    <!-- app wrapper end -->

    <!-- preloader -->
    <?php echo $__env->make('components.preloader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- preloader end -->

  </div>
  <!-- app end -->

  <?php /**PATH D:\New folder (3)\my\resources\views/contact/contact.blade.php ENDPATH**/ ?>