<?php
require_once __DIR__ . '/../app/EmailHelper.php';
$emailHelper = new EmailHelper();
$emailHelper->sendMail();
$notifications = $emailHelper->getMessages();
?>

<section>
    <div class="form-main-con dots-left-img">
        <div class="container overlay-content">

            <?php include 'errorMessage.php'?>
            <?php include 'successMessage.php'?>

            <div class="form-title-con text-center wow slideInLeft">
                <h5>Get in touch</h5>
                <h2>Send us a Message</h2>
            </div>
            <form class="form-inner-con wow slideInLeft" id="contactpage" method="POST">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                    <input type="text" placeholder="Name" name="name" id="name" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <input type="email"  placeholder="Email" name="email" id="email" required>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                    <input type="tel" placeholder="Phone" name="phone" id="phone" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    <textarea class="w-100"  placeholder="Message" rows="3" name="comments" id="comments" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                    <button type="submit" id="submit" class="contact-btn" >Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $emailHelper->deleteMessages() ?>