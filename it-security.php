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
      <title>IT Security |  <?= $GLOBALS['vars']['company_name']?>, Los Angeles, CA</title>
   </head>
   <body>
      <!---header-and-banner-section-->
      <div class="header-and-banner-con w-100">
         <div class="header-and-banner-inner-con overlay-content">
            <!--navbar-start-->
            <?php include 'includes/header.php'; ?> 
            <!--navbar-end-->
            <!--banner-start-->
            <section class="banner-main-con about-page-main-banner-con">
               <div class="container">
                  <div class="banner-con about-page-banner-con text-center">
                     <div class="row wow slideInLeft">
                        <div class="col-lg-12">
                           <div class="about-page-banner-title">
                              <h1>IT Security</h1>
                              <p class="mb-0">Leader In It Security And Compliance Provider</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!--banner-end-->
            <!--- Effective-section-->
            <section>
               <div class="Effective-con about-page-Effective-con service-Effective-con w-100 pt-0 pb-0">
                  <div class="container">
                     <div class="row service-Effective-con-item wow fadeInUp">
                        <div class="col-lg-4 col-md-4 col-12">
                           <div class="Effective-sec-item mb-lg-0 mb-4">
                              <div class="Effective-sec-item-img">
                                 <figure>
                                    <img src="assets/image/service-Effective-sec-item-img1.png" alt="service-Effective-sec-item-img" class="img-fluid">
                                 </figure>
                              </div>
                              <div class="Effective-sec-item-title">
                                 <h4 class="mb-0">IT Consulting</h4>
                                 <p class="mb-0">We work advising you how to use technology in order to meet your business objectives.</p>
                                 <a href="it-consulting.php" class="blog-post-item-title-link service-box-link">Read more <i class="fas fa-chevron-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                           <div class="Effective-sec-item mb-lg-0 mb-4">
                              <div class="Effective-sec-item-img">
                                 <figure>
                                    <img src="assets/image/service-Effective-sec-item-img2.png" alt="service-Effective-sec-item-img" class="img-fluid">
                                 </figure>
                              </div>
                              <div class="Effective-sec-item-title">
                                 <h4 class="mb-0">IT Support</h4>
                                 <p class="mb-0">We are committed to providing responsive tech support to our clients.</p>
                                 <a href="it-support.php" class="blog-post-item-title-link service-box-link">Read more <i class="fas fa-chevron-right"></i></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                           <div class="Effective-sec-item Effective-sec-item3">
                              <div class="Effective-sec-item-img">
                                 <figure>
                                    <img src="assets/image/service-Effective-sec-item-img3.png" alt="service-Effective-sec-item-img" class="img-fluid">
                                 </figure>
                              </div>
                              <div class="Effective-sec-item-title">
                                 <h4 class="mb-0">IT Services</h4>
                                 <p class="mb-0">Our managed IT service package will cover your IT needs so you can focus on your real work.</p>
                                 <a href="it-services.php" class="blog-post-item-title-link service-box-link">Read more <i class="fas fa-chevron-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </section>
            <!--- Effective-section-->
         </div>
      </div>
      <!---header-and-banner-section-->
      <!--- Effective-section-->
      <section>
         <div class="Effective-con w-100 service-Effective-tabs-con">
            <div class="container overlay-content">
               <div class="Effective-sec-heading text-center">
                  <h5>What we do</h5>
                  <h2>Cyber Security Services</h2>
               </div>



               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Security Risk Assessment</h3>
                        <div class="informationmain-right-content">
                        <p>We offer security risk assessments to identify, estimate and prioritize risks to client’s operations and assets resulting from cyber attack.</p>
                     </div>
                     </div>
                  </div>
               </div>



               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Network Vulnerability Scanning</h3>
                        <div class="informationmain-right-content">
                        <p>We perform external and internal comprehensive network vulnerability scanning for your network.</p>
                     </div>
                     </div>
                  </div>
               </div>


               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Penetration Testing</h3>
                        <div class="informationmain-right-content">
                        <p>Every business must have a secure and safe network in order to have minimum security for protecting their assets “data” and operate.</p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <img src="assets/image/security.png" alt="">
                     </div>
                     </div>
                  </div>

               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>It Security And Compliance Services For Production Studios And Content Owners In Media & Entertainment</h3>
                        <div class="informationmain-right-content">
                        <p><?= $GLOBALS['vars']['company_name']?> has worked with many production studios and content creators in media and entertainment industry to ensure their data and content security is in compliance with TPN “Trusted Partner Network” based on the latest security standards required by Motion Picture Association security guidelines which can be found on Motion Picture Association - MPA - best security practices.</p>
                        <p>One of our leading-edge IT security services we offer is network security solutions which consist of the security policies, protocols, and practices adopted to monitor unauthorized access, misuse, modification, or denial of a computer network which ultimately prevent from any cybersecurity breach or digital threat.</p>
                        <p>We work with you closely so we can help you creating and implementing all required IT security policies such as business continuity, security incident management, Internet acceptable, Server and workstation hardening policy, firewall policy, on-boarding and off-boarding policy, password policy, hard drive destruction policy, backup and recovery policy, patch management policy, change management policy, Wireless policy, and visitor’s policy. We will also help you designing your network diagram, network topology, IT Inventory and detailed IT documentation according to Motion Picture Association - MPA - best security practices.</p>
                        <p> We will also assist you conduct a risk assessment, network vulnerability scan, and penetration testing in classifying your assets and identifying your network vulnerabilities and how to remediate those flaws so you can execute a comprehensive content security plan.</p>

                     </div>
                     </div>
                  </div>
               </div>


               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Our Leading-edge Cybersecurity Services:</h3>
                        <div class="informationmain-right-content">
                        <ul class="mb-0 list">
                            <li><i class="fas fa-check-circle"></i>IT Security Policy & Strategy to align information security policy and strategy with business requirements for maintenance and monitoring</li>
                            <li><i class="fas fa-check-circle"></i>Threat and malware detection to protect your company’s data at the time of any security incident</li>
                            <li><i class="fas fa-check-circle"></i>Log management and monitoring to define what you need to log, how to log it, and how long to retain the information</li>
                            <li><i class="fas fa-check-circle"></i>Cloud security monitoring involves collecting and analyzing information to detect suspicious behavior or unauthorised system changes on your network</li>
                            <li><i class="fas fa-check-circle"></i>Security risk assessment to better understand risk by classifying network assets & identifying network flaws</li>
                            <li><i class="fas fa-check-circle"></i>Security Incident Management to improve response to unauthorized intrusion attacks, ransomware, et</li>
                            <li><i class="fas fa-check-circle"></i>Identity and Access Management to design, implement, and test IAM systems for more centralized busines</li>
                            <li><i class="fas fa-check-circle"></i>Security Awareness Program to promote behavior that improves security and reduces ris</li>
                            <li><i class="fas fa-check-circle"></i>Vulnerability Management to find and fix flaws and vulnerabilities in your networ</li>
                            <li><i class="fas fa-check-circle"></i>Penetration testing  Conducting a simulated cyber attack against your network to check for exploitable vulnerabilities</li>
                        </ul>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Meets Hipaa, Red Flags, Soc, Pci, & Tpn Compliance With Our Advanced Next Generation Firewall Services: </h3>
                        <div class="informationmain-right-content">
                        <ul class="mb-0 list">
                        <li><i class="fas fa-check-circle"></i>Intrusion detection and prevention setup</li>
                        <li><i class="fas fa-check-circle"></i>Block security incursions</li>
                        <li><i class="fas fa-check-circle"></i>Protects against viruses, malware, ransomware, etc.</li>
                        <li><i class="fas fa-check-circle"></i>Traffic shaping for bandwidth management and limitation</li>
                        <li><i class="fas fa-check-circle"></i>VLAN setup and management</li>
                        <li><i class="fas fa-check-circle"></i>Identity management integration and Single Sign On</li>
                        <li><i class="fas fa-check-circle"></i>Secure VPN setup for remote users</li>
                        <li><i class="fas fa-check-circle"></i>Firewall Policy/Access Rules setup</li>
                        <li><i class="fas fa-check-circle"></i>Secure Sockets Layer (SSL) setup</li>
                        <li><i class="fas fa-check-circle"></i>Deep packet inspection (DPI)</li>
                        <li><i class="fas fa-check-circle"></i>Intelligence advance threat protection</li>
                        <li><i class="fas fa-check-circle"></i>Multi-factor authentication (MFA/2FA)</li>
                        <li><i class="fas fa-check-circle"></i>Access rules setup</li>
                        <li><i class="fas fa-check-circle"></i>Web filtering</li>
                        <li><i class="fas fa-check-circle"></i>Application filtering</li>
                        <li><i class="fas fa-check-circle"></i>Centralize logging and monitoring</li>
                        <li><i class="fas fa-check-circle"></i>Advanced threat protection</li>
                        </ul>
                     </div>
                     </div>
                  </div>
               </div>


               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Manage Cyber Security By Helping You Achieve Any Security Compliance.</h3>
                        <div class="informationmain-right-content">
                        <p><?= $GLOBALS['vars']['company_name']?> enables organizations to develope, document, and maintain compliance with common regulatory security frameworks. We work closely with your business to develop and standardize documentation processes framework as well as any cyber security planning and  implementations  in order to eliminate any obstacles associated with IT security compliance standards.</p>
                     </div>
                     </div>
                  </div>
               </div>


               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Patch Management</h3>
                        <div class="informationmain-right-content">
                        <p><?= $GLOBALS['vars']['company_name']?>'s smart tools will automate across all servers throughout your network that we manage which seamlessly download and deliver all updates, service packs, patches and hot-fixes to the managed local servers as well as cloud hosted servers.Our patch management policy will ensure our clients that your IT systems will have the latest vital security patches and updates. </p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Disk & Storage Management</h3>
                        <div class="informationmain-right-content">
                        <p>Disk and Storage Management throughout the network is an vital part of the overall management of the network. By utilizing smart agents and monitoring tools, <?= $GLOBALS['vars']['company_name']?> support team can keep an eye on every disk and storage location throughout the network.</p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>System Maintenance</h3>
                        <div class="informationmain-right-content">
                        <p>For any server to perform at its optimum level, continues system maintenance needs to be in place. This is a combination of hardware and software monitoring and response which can be done both manually as well as automatically.</p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Virtualization</h3>
                        <div class="informationmain-right-content">
                        <p>Server virtualization makes it possible to run multiple applications and operating systems on fewer hardware resources, which appeals to many IT managers looking to improve utilization. Companies can take advantage of such a feature that brings the hardware cost down and makes the maintenance environment more efficient and quicker.</p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Active Directory Management</h3>
                        <div class="informationmain-right-content">
                        <p>Any professionally configured network needs a central entity that holds and manages all policies and details of each object on the network. Such objects could be users, computers, servers, printers or any other network related object. Windows uses Active Directory to control all policies.</p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Domain Controller Management</h3>
                        <div class="informationmain-right-content">
                        <p>A Windows Server can be configured as Active Directory Domain Controller to host the Active Directory database and maintain other security and access policies for the entire network. We are also specialized on any server Post-OS installation, database setup and administration, security setup, domain controller, active directory, open directory, DHCP server, terminal server, and DNS servers.</p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Group Policy Management</h3>
                        <div class="informationmain-right-content">
                        <p>A Windows Server can be configured as Group Policy Domain Controller to host the group policies and maintain other security and access policies for the entire network. In fact it handles the most important local security policy on the domain controller.</p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>Application Management</h3>
                        <div class="informationmain-right-content">
                        <p>Various applications used throughout the network should be properly managed to ensure proper access to each application while protecting the application files and environment. <?= $GLOBALS['vars']['company_name']?> team is highly experienced in distribution of access to various applications in many industries throughout the network.</p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="tabs-content mt-5 mb-5">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-12">
                        <h3>OS Support</h3>
                        <div class="informationmain-right-content">
                        <p><?= $GLOBALS['vars']['company_name']?> can assist in any new OS installation, imaging, or repair for any platform such as Mac, Linux, Windows, Chrome, or any other common operating systems.</p>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--- Effective-section-->
      <!-- get-start-section-->
      <section>
         <div class="get-start-con bg-overly-img ">
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
      <!-- get-start-section-->
      <!--form-section-->
      <?php include 'includes/page-form.php'; ?> 
      <!--form-section-->
      <!-- weight-footer-section -->
      <?php include 'includes/footer.php'; ?> 
      <!-- weight-footer-section -->
      <script src="assets/js/wow.js"></script>
      <?php include 'includes/js.php'; ?> 
   </body>
</html>