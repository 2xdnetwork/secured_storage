<?php
require_once __DIR__ . '/app/DataHelper.php';
$dataHelper = new DataHelper();
$GLOBALS['vars'] = $dataHelper->data;
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <?php include 'includes/css.php'; ?> 
      <title><?= $GLOBALS['vars']['company_name']?> | IT Consulting and Cyber Security Services in Los Angeles</title>
   </head>
   <body>
      <!---header-and-banner-section-->
      <div class="header-and-banner-con w-100">
         <div class="header-and-banner-inner-con overlay-content">
         <?php include 'includes/header.php'; ?> 
            <section class="banner-main-con">
               <div class="container">
                  <!--banner-start-->
                  <div class="banner-con">
                     <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 d-flex justify-content-center flex-column banner-main-left-con">
                           <div class="banner-left-con wow slideInLeft">
                              <div class="banner-heading">
                                 <h1>IT Consultancy And Cyber Security Services
                                 </h1>
                              </div>
                              <div class="banner-content">
                                 <p class="col-lg-11 pl-0 pr-0">Our goal is to create secure enterprise technology solutions that simplify their workflow while providing them with the best end-user experience.
                                 </p>
                              </div>
                              <div class="banner-btn">
                                 <a href="contact.php" class="contact-btn">Get started</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                           <div class="banner-right-con wow slideInRight">
                              <figure class="mb-0">
                                 <img src="assets/image/banner-right-img.png" alt="banner-right-img">
                              </figure>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--banner-end-->
               </div>
            </section>
         </div>
      </div>
      <!---header-and-banner-section-->
      <!---slider-section-->
      <section>
         <div class="slider-con w-100">
            <div class="container">
               <div class="slider-heading text-center">
                  <h5>Partnering with</h5>
                  <h2>Industry-Leading Technology Providers</h2>
               </div>
               <div class="row wow fadeInUp">
                  <div class="col-lg-2 col-md-4 col-6">
                     <div class="partner-box text-center mb-lg-0 mb-4">
                        <figure class="mb-0">
                           <img src="assets/image/slider-item-img1.png" alt="" class="img-fluid">
                        </figure>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-6">
                     <div class="partner-box text-center mb-lg-0 mb-4">
                        <figure class="mb-0">
                           <img src="assets/image/slider-item-img2.png" alt="" class="img-fluid">
                        </figure>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-6">
                     <div class="partner-box text-center mb-lg-0 mb-4">
                        <figure class="mb-0">
                           <img src="assets/image/slider-item-img3.png" alt="" class="img-fluid">
                        </figure>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-6">
                     <div class="partner-box text-center">
                        <figure class="mb-0">
                           <img src="assets/image/slider-item-img4.png" alt="" class="img-fluid">
                        </figure>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-6">
                     <div class="partner-box text-center">
                        <figure class="mb-0">
                           <img src="assets/image/slider-item-img5.png" alt="" class="img-fluid">
                        </figure>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-6">
                     <div class="partner-box text-center">
                        <figure class="mb-0">
                           <img src="assets/image/slider-item-img6.png" alt="" class="img-fluid">
                        </figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!---slider-section-->
      <!---information-section-->
      <section>
         <div class="informationmain-con dots-left-img w-100">
            <div class="container overlay-content">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 informationmain-left-con">
                     <div class="informationmainleft-sec-img wow slideInLeft">
                        <figure class="mb-0">
                           <img src="assets/image/informationmain-left-sec-img.png" alt="informationmain-left-sec-img">
                        </figure>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 informationmain-right-con wow slideInRight">
                     <div class="informationmain-right-heading">
                        <h5>Who we are</h5>
                        <h2>Trusted IT Consulting
                        </h2>
                     </div>
                     <div class="informationmain-right-content">
                        <p>Our mission at <?= $GLOBALS['vars']['company_name']?> is to provide enterprise-quality IT implementation services and seamless IT services at an affordable price. We provide IT consultancy and cyber security services in Los Angeles and the surrounding areas. Some of our services include:</p>
                        <ul class="mb-0 list">
                           <li><i class="fas fa-check-circle"></i>IT Consulting</li>
                           <li><i class="fas fa-check-circle"></i>IT Services</li>
                           <li><i class="fas fa-check-circle"></i>Cyber Security</li>
                           <li><i class="fas fa-check-circle"></i>Cloud Solutions</li>
                           <li><i class="fas fa-check-circle"></i>IT Backup & Recovery</li>
                           <li><i class="fas fa-check-circle"></i>IT Support</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="Effective-con bg-overly-img w-100">
            <div class="container overlay-content">
               <div class="Effective-sec-heading text-center">
                  <h5>What we do</h5>
                  <h2>Business IT Services</h2>
               </div>
               <div class="row wow fadeInUp">
                  <div class="col-lg-3 col-md-6 col-12">
                     <div class="Effective-sec-item mb-lg-0 mb-4">
                        <figure>
                           <img src="assets/image/Effective-sec-item-img1.png" alt="Effective-sec-item-img" class="img-fluid">
                        </figure>
                        <div class="Effective-sec-item-title">
                           <h4 class="mb-0">IT Services</h4>
                           <p class="mb-0">Our managed IT service package will cover your IT needs so you can focus on your real work.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                     <div class="Effective-sec-item mb-lg-0 mb-4">
                        <figure>
                           <img src="assets/image/Effective-sec-item-img2.png" alt="Effective-sec-item-img" class="img-fluid">
                        </figure>
                        <div class="Effective-sec-item-title">
                           <h4 class="mb-0">IT Consulting</h4>
                           <p class="mb-0">We work advising you how to use technology in order to meet your business objectives.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                     <div class="Effective-sec-item Effective-sec-item3">
                        <figure>
                           <img src="assets/image/Effective-sec-item-img3.png" alt="Effective-sec-item-img" class="img-fluid">
                        </figure>
                        <div class="Effective-sec-item-title">
                        <h4 class="mb-0">IT Security</h4>
                           <p class="mb-0">Cyber Security is a crucial and challenging task. It is one of our highest priorities.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-12">
                     <div class="Effective-sec-item">
                        <figure>
                           <img src="assets/image/Effective-sec-item-img4.png" alt="Effective-sec-item-img" class="img-fluid">
                        </figure>
                        <div class="Effective-sec-item-title">
                        <h4 class="mb-0">IT Support</h4>
                           <p class="mb-0">We are committed to providing responsive tech support to our clients.</p>
                        </div>
                     </div>
                  </div>
                  <div class="Effective-link ml-auto mr-auto">
                     <a href="about.php" class="contact-btn">About Us</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="service-main-con">
         <div class="row  ml-0 mr-0">
            <div class="col-lg-6 pl-0 pr-0">
               <div class="service-main-left-top-con dots-right-img">
                  <div class="row">
                     <div class="col-xl-7 col-lg-12 ml-auto">
                        <div class="service-main-left-con wow slideInLeft">
                           <h5>Reliable IT & Cyber Security</h5>
                           <h2>Cyber Security Services 
                              With Top IT Experts
                           </h2>
                           <p>Over the past decade, we have helped many small and medium-sized businesses in the Los Angeles region. Our team understands the complex demands of today's dynamic technology environment. With our expertise and leading network technologies, we empower our clients.</p>
                           <p>In order to serve you with the most efficient, user-friendly, and cost-effective workflows, we evaluate your organization's current operational workflow challenges and implement a strategic plan taking advantage of the latest emerging technologies.</p>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 pl-0 pr-0">
               <div class="service-main-right-con"></div>
            </div>
            <div class="service-box-content wow slideInRight">
               <figure>
                  <img src="assets/image/service-box-img.png" alt="service-box-img" class="img-fluid">
               </figure>
               <h6>Creative Security Solutions</h6>
               <p>Cyber threats like malware, ransomware, DDoS attacks, and email phishing attacks are up every day. Is your business protected or at least have a basic protection?</p>
            </div>
         </div>
      </div>
      <!-- service-section -->
      <!---Cyber-Security-section-->
      <section>
         <div class="Cyber-Security-con bg-overly-img w-100">
            <div class="container overlay-content">
               <div class="row">
                  <div class="col-lg-6 col-md-12 Cyber-Security-left-con wow slideInLeft">
                     <div class="row Cyber-Security-left-main-con">
                        <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                           <div class="Cyber-Security-left-card-con">
                              <div class="Cyber-Security-left-card-img">
                                 <figure>
                                    <img src="assets/image/Cyber-Security-left-card-img1.png" alt="Cyber-Security-left-card-img" class="img-fluid">
                                 </figure>
                              </div>
                              <div class="Cyber-Security-left-card-title">
                                 <h3 class="count">2000</h3>
                                 <p class="mb-0">Security Projects</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                           <div class="Cyber-Security-left-card-con">
                              <div class="Cyber-Security-left-card-img">
                                 <figure>
                                    <img src="assets/image/Cyber-Security-left-card-img2.png" alt="Cyber-Security-left-card-img" class="img-fluid">
                                 </figure>
                              </div>
                              <div class="Cyber-Security-left-card-title">
                                 <h3 class="count">300</h3>
                                 <p class="mb-0">Clients Protected</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                           <div class="Cyber-Security-left-card-con">
                              <div class="Cyber-Security-left-card-img">
                                 <figure>
                                    <img src="assets/image/Cyber-Security-left-card-img3.png" alt="Cyber-Security-left-card-img" class="img-fluid">
                                 </figure>
                              </div>
                              <div class="Cyber-Security-left-card-title">
                                 <h3 class="count d-inline-block">100</h3>
                                 <span class="text-white static-txt2">%</span>
                                 <p class="mb-0">Service Guarantee</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                           <div class="Cyber-Security-left-card-con mb-0">
                              <div class="Cyber-Security-left-card-img">
                                 <figure>
                                    <img src="assets/image/Cyber-Security-left-card-img4.png" alt="Cyber-Security-left-card-img" class="img-fluid">
                                 </figure>
                              </div>
                              <div class="Cyber-Security-left-card-title position-relative d-inline-block">
                                 <h3 class="count">20</h3>
                                 <span class="text-white position-absolute static-txt">+</span>
                                 <p class="mb-0">Security Experts</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 Cyber-Security-right-con wow slideInRight">
                     <div class="Cyber-Security-right-heading-con">
                        <h5>Serving Los Angeles</h5>
                        <h2>Helping Companies Solve Their It Problems</h2>
                        <p>By providing proper IT consulting, IT security, IT services, and IT support, we aim to help others achieve their goals. We have received many requests from clients seeking to replace their current IT service provider due to poor performance or overcharging. In the Los Angeles area, <?= $GLOBALS['vars']['company_name']?> has been trusted by many businesses as a managed IT service provider with the right tools, prices, and dedication.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section>
      <div class="Pricing-con dots-left-img">
            <div class="container overlay-content">
               <div class="get-start-title text-center">
                  <h1>Ready To Get Started?
                     We're Here To Help.
                  </h1>
                  <div class="get-start-link text-center">
                     <a href="contact.php" class="contact-btn">Let’s Talk</a>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- weight-footer-section -->
      <?php include 'includes/footer.php'; ?> 
      <!-- weight-footer-section -->
      <script src="assets/js/wow.js"></script>
      <?php include 'includes/js.php'; ?> 
   </body>
</html>