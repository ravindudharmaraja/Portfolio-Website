

<title>History</title>
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
        <!-- info-bar -->
        <?php echo $__env->make('components.infobar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- infobar end -->

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
                  <div class="col-lg-6">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Education</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- timeline -->
                    <div class="art-timeline art-gallery">
                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Sri Lanka International Buddhist Acadamy</h5>
                              <div class="art-el-suptitle mb-15">Graduate</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">jan 2020 - may 2023</span>
                            </div>
                          </div>

                          <p>I am a BSc IT graduate from SIBA Campus, with a passion for technology and a strong foundation in information technology. During my time at SIBA Campus, I gained a solid understanding of programming languages, database management, web development, and other IT-related concepts. I also had the opportunity to work on various group projects and assignments, which improved my communication, collaboration, and problem-solving skills. Through my education and hands-on experience, I have developed a keen eye for detail and a strong ability to analyze complex problems, which I bring to my work as a web developer and mobile application developer</p>
                          <a data-fancybox="diplome" href="files/certificate.jpg" class="art-link art-color-link art-w-chevron">Degree</a>
                        </div>
                      </div>

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <!-- <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Arter design school</h5>
                              <div class="art-el-suptitle mb-15">Student</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">jan 2018 - may 2020</span>
                            </div>
                          </div>
                          <div>Consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</div>
                        </div> -->
                      </div>

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Web developer courses</h5>
                              <div class="art-el-suptitle mb-15">Student</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">jan 2020 - present</span>
                            </div>
                          </div>
                          <p>As a lifelong learner, I am committed to staying up-to-date with the latest technologies and industry best practices. I have completed several online courses to further develop my skills in web development, mobile application development, and other IT-related fields. Some of the courses I have completed include [list of courses], which have provided me with valuable insights and practical knowledge that I have been able to apply to my work. Through these courses, I have learned new programming languages, frameworks, and design patterns, and I have also improved my problem-solving and critical thinking skills. I am always looking for new learning opportunities and ways to expand my knowledge and expertise</p>
                          <a data-fancybox="diplome" href="files/certificate.jpg" class="art-link art-color-link art-w-chevron">Licence</a>
                        </div>

                      </div>

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <!-- <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Academy of Art University</h5>
                              <div class="art-el-suptitle mb-15">Student</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">jan 2018 - may 2020</span>
                            </div>
                          </div>
                          <p>Ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                          <a data-fancybox="diplome" href="files/certificate.jpg" class="art-link art-color-link art-w-chevron">Certificate</a>
                        </div> -->

                      </div>

                    </div>
                    <!-- timeline end -->

                  </div>
                  <div class="col-lg-6">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Work History</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- timeline -->
                    <div class="art-timeline">

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>


                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Sri Lanka Telecome</h5>
                              <div class="art-el-suptitle mb-15">Software Engineer</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">jan 2023 - aug 2023</span>
                            </div>
                          </div>
                          <p>As a mobile application developer at Sri Lanka Telecom, I was responsible for designing and developing mobile applications for the company. I worked closely with product owners, business analysts, and designers to ensure that the applications were user-friendly, efficient, and effective. My role involved coding, testing, and debugging mobile applications for both Android and iOS platforms, as well as ensuring that the applications met the company's quality standards and complied with industry standards and best practices. I also provided technical support to users as needed and maintained and updated existing mobile applications.</p>
                        </div>
                      </div>

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>


                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>Lex Solution</h5>
                              <div class="art-el-suptitle mb-15">Web Developer</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">jan 2022 - may 2023</span>
                            </div>
                          </div>
                          <p>At Lex Solution, web developers are responsible for designing and developing custom websites and web applications that meet client requirements. They collaborate with designers and project managers to ensure that all web projects are delivered on time and to client specifications. Using modern web technologies such as HTML, CSS, JavaScript, and PHP, they implement and maintain web applications and websites, troubleshooting and fixing issues as needed. Web developers also ensure that all websites and web applications are responsive, mobile-friendly, and accessible to all users. They work with content management systems to create and manage websites and web applications and stay up-to-date with the latest industry trends and best practices.</p>
                          <a data-fancybox="recommendation" href="#art-recomendation-popup-1" class="art-link art-color-link art-w-chevron">Recommendation</a>
                        </div>

                        <!-- popup -->
                        <div class="art-recomendation-popup" style="display: none;" id="art-recomendation-popup-1">

                          <!-- testimonial -->
                          <div class="art-a art-testimonial">
                            <!-- testimonial body -->
                            <div class="testimonial-body">
                              <!-- photo -->
                              <img class="art-testimonial-face" src="img/testimonials/face-3.jpg" alt="face">
                              <!-- name -->
                              <h5>Lex Solution</h5>
                              <div class="art-el-suptitle mb-15">Web Developer</div>
                              <!-- text -->
                              <div class="mb-15">At Lex Solution, web developers are responsible for designing and developing custom websites and web applications that meet client requirements. They collaborate with designers and project managers to ensure that all web projects are delivered on time and to client specifications. Using modern web technologies such as HTML, CSS, JavaScript, and PHP, they implement and maintain web applications and websites, troubleshooting and fixing issues as needed. Web developers also ensure that all websites and web applications are responsive, mobile-friendly, and accessible to all users. They work with content management systems to create and manage websites and web applications and stay up-to-date with the latest industry trends and best practices.</div>
                            </div>
                            <!-- testimonial body end -->
                            <!-- testimonial footer -->
                            <div class="art-testimonial-footer">
                              <div class="art-left-side">
                                <!-- star rate -->
                                <ul class="art-star-rate">
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                  <li><i class="fas fa-star"></i></li>
                                </ul>
                                <!-- star rate end -->
                              </div>
                              <div class="art-right-side">

                              </div>
                            </div>
                            <!-- testimonial footer end -->
                          </div>
                          <!-- testimonial end -->

                        </div>
                        <!-- popup end -->

                      </div>

                      

                      </div>

                    </div>
                    <!-- timeline end -->

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

              <!-- container -->
              <div class="container-fluid">

                <!-- footer -->
                <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- footer end -->

              </div>
              <!-- container end -->


            </div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 547px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 221.171px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
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

  <!-- jquery js -->
  <script src="js/plugins/jquery.min.js"></script>
  <!-- anime js -->
  <script src="js/plugins/anime.min.js"></script>
  <!-- swiper js -->
  <script src="js/plugins/swiper.min.js"></script>
  <!-- progressbar js -->
  <script src="js/plugins/progressbar.min.js"></script>
  <!-- smooth scrollbar js -->
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
  <!-- overscroll js -->
  <script src="js/plugins/overscroll.min.js"></script>
  <!-- typing js -->
  <script src="js/plugins/typing.min.js"></script>
  <!-- isotope js -->
  <script src="js/plugins/isotope.min.js"></script>
  <!-- fancybox js -->
  <script src="js/plugins/fancybox.min.js"></script>
  <!-- swup js -->
  <script src="js/plugins/swup.min.js"></script>

  <!-- main js -->
  <script src="js/main.js"></script>




<style type="text/css">.txt-rotate > .wrap { border-right: 0.08em solid rgba(215,205,240,.6); padding-right: 5px }</style></body></html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder (3)\my\resources\views/history/history.blade.php ENDPATH**/ ?>