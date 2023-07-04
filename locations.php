<?php $title = "SocioLadder - Locations"; ?>
<?php include 'header.php' ?>

<style>
    .float-contact, .floating-form-icon, .floating-contact-menu {
        display: none!important;
    }
</style>

<section class="banner-section locations-banner banner-section-medium">
    <!--******** Banner Image From Css ********-->
</section>

<!--Scroll Down Div-->
<span class="scroll-down">&nbsp;</span>

<section class="py-5 mt-4" id="get-in-touch-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 get-in-touch">
                <h3 class="mb-0 font-weight-600" data-aos="fade-right">Get in touch</h3>
                <!-- <div class="row mb-4">
                    <div class="col-9 col-sm-10 line-height-13 align-self-end">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer<br class="d-none d-lg-block"/> adipiscing elit, sed diam nonummy nibh euismod<br class="d-none d-lg-block"/> tincidunt ut laoreet dolore.</p>
                    </div>
                    <div class="col-3 col-sm-2">
                        <img src="./public/images/png/yellow_icon.png" class="img-fluid">
                    </div>
                </div> -->
                <div class="row mt-4" data-aos="fade-right">
                    <div class="col-md-11">
                        <form action="mail.php" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Name*" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email*" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputSubject" name="subject" placeholder="Subject*" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="inputMessage" rows="8" placeholder="Message*" name="message" required></textarea>
                            </div>
                            <button type="submit" name="submit-contact" class="btn-sl btn btn-primary rounded-pill mt-3">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2 text-center" data-aos="fade-in">
                <img src="./public/images/png/border-circle-vertical.png" class="img-fluid d-none d-md-inline" style="height: 450px!important;">
                <img src="./public/images/png/border-circle.png" class="img-fluid d-block d-md-none py-5">
            </div>
            <div class="col-md-4" data-aos="fade-left">
                <h3 class="mb-4 font-weight-600">Our Locations</h3>
                <div class="row">
                    <div class="col-12 mb-3">
                        <p class="font-weight-bold mb-0 line-height-13 font-serif">Social Tech Ventures FZ-LLC</p>
                        <p class="line-height-13">601, Sama Tower, Sheikh Zayed Road,<br class="d-none d-lg-block"/> Dubai PO Box – 119474</p>
                    </div>
                    <div class="col-12 mb-3">
                        <p class="font-weight-bold mb-0 line-height-13 font-serif">UEV SocioLadder Technologies Pvt Ltd</p>
                        <!-- <p class="line-height-13">Suite No 303A, B wing, VIP Plaza, Off New<br class="d-none d-lg-block"/> Link Road, Andheri West, Mumbai - 400 053<br class="d-none d-lg-block"/> P: +91 22 4979 1898</p> -->
                        <p class="line-height-13">#136, Sri Sri, Nagavarapalya, C V Raman Nagar,<br class="d-none d-lg-block"/> Bengaluru 560093, Karnataka, India.</p>
                    </div>
                    <div class="col-12 mb-3">
                        <p class="font-weight-bold mb-0 line-height-13 font-serif">Universal Equity Ventures Inc.</p>
                        <p class="line-height-13">330 East Main Street Suite 211, Barrington,<br class="d-none d-lg-block"/> IL 60010, United States of America 
                        </p>
                    </div>
                    <!-- <div class="col-12 mb-3">
                        <p class="font-weight-bold mb-0 line-height-13 font-serif">Universal Equity Ventures Inc.</p>
                        <p class="line-height-13">795 Folsom Ave, Suite 600, Australia 94107 <br class="d-none d-lg-block"/>P: (123) 456-7890</p>
                    </div> -->
                </div>

            </div>
        </div>
    </div>
</section>

<!-- <section class="py-5 bg-yellow">
    <div class="container">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold mb-4">Need to talk?</h2>
                <a href="locations.php#get-in-touch-section" class="btn-sl btn btn-primary rounded-pill">Contact Us</a>
            </div>
        </div>
    </div>
</section> -->

<?php include 'footer.php' ?>