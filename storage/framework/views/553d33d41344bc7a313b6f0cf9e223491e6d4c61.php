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

                    <!-- filter -->
                    <div class="art-filter mb-30">
                      <!-- filter link -->
                      <a href="#" data-filter="*" class="art-link art-current">All Categories</a>
                      <!-- filter link -->
                      <a href="#" data-filter=".webTemplates" class="art-link">Web Templates</a>
                      <!-- filter link -->
                      <a href="#" data-filter=".logos" class="art-link">Logos</a>
                      <!-- filter link -->
                      <a href="#" data-filter=".drawings" class="art-link">Drawings</a>
                      <!-- filter link -->
                      <a href="#" data-filter=".ui" class="art-link">UI Elements</a>
                    </div>
                    <!-- filter end -->

                  </div>
                  <!-- col end -->

                  <div class="art-grid art-grid-2-col art-gallery" style="position: relative; height: 729.9px;">

                    <!-- grid item -->
                    <div class="art-grid-item webTemplates" style="position: absolute; left: 0px; top: 0px;">
                      <!-- grid item frame -->
                      <a data-fancybox="gallery" href="img/works/original-size/1.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                        <!-- img -->
                        <img src="img/works/thumbnail/1.jpg" alt="item">
                        <!-- zoom icon -->
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                      </a>
                      <!-- grid item frame end -->
                      <!-- description -->
                      <div class="art-item-description">
                        <!-- title -->
                        <h5 class="mb-15">Project title</h5>
                        <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                        <!-- button -->
                        <a href="/portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                      </div>
                      <!-- description end -->

                    </div>
                    <!-- grid item end -->

                    <!-- grid item -->
                    <div class="art-grid-item logos" style="position: absolute; left: 258.6px; top: 0px;">

                      <!-- grid item frame -->
                      <a data-fancybox="gallery" href="img/works/original-size/2.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                        <!-- img -->
                        <img src="img/works/thumbnail/2.jpg" alt="item">
                        <!-- zoom icon -->
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                      </a>
                      <!-- grid item frame end -->
                      <!-- description -->
                      <div class="art-item-description">
                        <!-- title -->
                        <h5 class="mb-15">Rilawacrm Landing</h5>
                        <div class="mb-15">As the developer of rilawacm.com's landing page, I designed a visually appealing and user-friendly interface that highlights the platform's core features. Through effective use of color, typography, and layout, I created a landing page that encourages users to explore the site and connect with experienced lawyers for affordable legal services.</div>
                        <!-- button -->
                        <a href="/portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                      </div>
                      <!-- description end -->

                    </div>
                    <!-- grid item end -->

                    <!-- grid item -->
                    <div class="art-grid-item drawings" style="position: absolute; left: 0px; top: 182.475px;">

                      <!-- grid item frame -->
                      <a data-fancybox="gallery" href="img/works/original-size/3.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                        <!-- img -->
                        <img src="img/works/thumbnail/3.jpg" alt="item">
                        <!-- zoom icon -->
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                      </a>
                      <!-- grid item frame end -->
                      <!-- description -->
                      <div class="art-item-description">
                        <!-- title -->
                        <h5 class="mb-15">Picker</h5>
                        <div class="mb-15">As the developer of the API for the app.picker.lk platform, I designed and implemented a robust and secure set of endpoints that allow the app to communicate with the server and exchange data seamlessly. Using modern web technologies such as RESTful architecture, JSON, and HTTP methods, I created an API that is fast, efficient, and scalable, capable of handling a large number of requests while maintaining the platform's high performance. By implementing security measures such as encryption and authentication, I ensured that the API is protected against unauthorized access and data breaches, giving users peace of mind when using the app</div>
                        <!-- button -->
                        <a href="/portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                      </div>
                      <!-- description end -->

                    </div>
                    <!-- grid item end -->

                    <!-- grid item -->
                    <div class="art-grid-item ui" style="position: absolute; left: 258.6px; top: 182.475px;">

                      <!-- grid item frame -->
                      <a data-fancybox="gallery" href="img/works/original-size/4.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                        <!-- img -->
                        <img src="img/works/thumbnail/4.jpg" alt="item">
                        <!-- zoom icon -->
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                      </a>
                      <!-- grid item frame end -->
                      <!-- description -->
                      <div class="art-item-description">
                        <!-- title -->
                        <h5 class="mb-15">Egzar</h5>
                        <div class="mb-15">As a member of the Egzar.com development team, I contributed to the design, development, and maintenance of the company's web application. Working closely with other developers, designers, and project managers, I helped build a user-friendly platform that enables users to browse, purchase, and sell a wide range of products and services. Using modern web technologies such as HTML, CSS, JavaScript, and PHP, I implemented various features and functionalities that enhance the user experience and improve the platform's performance. I also collaborated on bug fixing, testing, and deployment, ensuring that the platform is always running smoothly and efficiently..</div>
                        <!-- button -->
                        <a href="/portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                      </div>
                      <!-- description end -->

                    </div>
                    <!-- grid item end -->

                    <!-- grid item -->
                    <div class="art-grid-item webTemplates" style="position: absolute; left: 0px; top: 364.95px;">

                      <!-- grid item frame -->
                      <a data-fancybox="gallery" href="img/works/original-size/5.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                        <!-- img -->
                        <img src="img/works/thumbnail/5.jpg" alt="item">
                        <!-- zoom icon -->
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                      </a>
                      <!-- grid item frame end -->
                      <!-- description -->
                      <div class="art-item-description">
                        <!-- title -->
                        <h5 class="mb-15">Ceycast</h5>
                        <div class="mb-15">As the developer of the API for the Ceycast podcasting website and app, I designed and developed a comprehensive set of endpoints that allow users to access, browse, and stream podcast content from the platform. Using modern web technologies such as RESTful architecture, JSON, and HTTP methods, I implemented a fast, efficient, and scalable API that can handle a large number of requests and provide a seamless user experience. Additionally, I integrated various security measures such as encryption and authentication to ensure that user data is protected and secure. By collaborating with the website and app development teams, I helped create a robust and reliable platform for podcast enthusiasts in Sri Lanka and beyond.</div>
                        <!-- button -->
                        <a href="/portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                      </div>
                      <!-- description end -->

                    </div>
                    <!-- grid item end -->

                    <!-- grid item -->
                    <div class="art-grid-item logos" style="position: absolute; left: 258.6px; top: 364.95px;">

                      <!-- grid item frame -->
                      <a data-fancybox="gallery" href="img/works/original-size/6.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                        <!-- img -->
                        <img src="img/works/thumbnail/6.jpg" alt="item">
                        <!-- zoom icon -->
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                      </a>
                      <!-- grid item frame end -->
                      <!-- description -->
                      <div class="art-item-description">
                        <!-- title -->
                        <h5 class="mb-15">Green Office Android & iOS App</h5>
                        <div class="mb-15">In that case, as a developer for the Green Office Flutter application for Sri Lanka Telecom, I created a mobile app that promotes sustainability by reducing paper usage in the workplace. Using Flutter, I developed the app for both iOS and Android devices, ensuring a seamless user experience across multiple platforms. The app includes features such as paperless workflows, document scanning and digitization, and electronic signature capabilities, all aimed at reducing paper usage and promoting a more sustainable workplace. By working closely with the SLT team, I delivered a high-quality app that meets the needs of its users and contributes to SLT's commitment to sustainability and corporate social responsibility.</div>
                        <!-- button -->
                        <a href="/portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                      </div>
                      <!-- description end -->

                    </div>
                    <!-- grid item end -->

                    <!-- grid item -->
                    <div class="art-grid-item drawings" style="position: absolute; left: 0px; top: 547.425px;">

                      <!-- grid item frame -->
                      <a data-fancybox="gallery" href="img/works/original-size/7.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                        <!-- img -->
                        <img src="img/works/thumbnail/7.jpg" alt="item">
                        <!-- zoom icon -->
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                      </a>
                      <!-- grid item frame end -->
                      <!-- description -->
                      <div class="art-item-description">
                        <!-- title -->
                        <h5 class="mb-15">BrainBoosters</h5>
                        <div class="mb-15">As a Laravel developer for the BrainBooster online learning platform, I leveraged the power of this powerful PHP framework to create a robust and scalable e-learning platform. I designed and implemented a range of features including user registration and login, course creation and management, video playback, quizzes and assessments, and progress tracking. Using Laravel's MVC architecture and built-in features such as Eloquent ORM and Blade templating engine, I developed a flexible and maintainable codebase that was easy to update and customize. Additionally, I integrated various third-party APIs to provide additional functionality such as payment processing and email notifications. Throughout the development process, I worked closely with the BrainBooster team to ensure the platform met their requirements and exceeded their expectations.



</div>
                        <!-- button -->
                        <a href="/portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                      </div>
                      <!-- description end -->

                    </div>
                    <!-- grid item end -->

                    <!-- grid item -->
                    <div class="art-grid-item ui" style="position: absolute; left: 258.6px; top: 547.425px;">

                      <!-- grid item frame -->
                      <a data-fancybox="gallery" href="img/works/original-size/8.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                        <!-- img -->
                        <img src="img/works/thumbnail/8.jpg" alt="item">
                        <!-- zoom icon -->
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                      </a>
                      <!-- grid item frame end -->
                      <!-- description -->
                      <div class="art-item-description">
                        <!-- title -->
                        <h5 class="mb-15">Project title</h5>
                        <div class="mb-15">Sit amet, consectetur adipisicing elit. Quas, architecto.</div>
                        <!-- button -->
                        <a href="/portfolio-single.html" class="art-link art-color-link art-w-chevron">Read more</a>
                      </div>
                      <!-- description end -->

                    </div>
                    <!-- grid item end -->

                  </div>

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

              <!-- container -->
              <div class="container-fluid">

                <!-- footer -->
                <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- footer end -->

              </div>
              <!-- container end -->

            </div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 547px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 283.185px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
            <!-- scroll frame end -->

          </div>
          <!-- swup container end -->

        </div>
        <!-- content end -->

        <!-- menu bar -->
              <?php echo $__env->make('components.manu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- menu end -->

             

            </div>
            <!-- scroll frame end -->

          </div>
          <!-- menu bar frame -->

        </div>
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

  <?php /**PATH D:\New folder (3)\my\resources\views/portfolio/project-1.blade.php ENDPATH**/ ?>