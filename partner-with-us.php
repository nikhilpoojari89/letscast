<?php $title = "SocioLadder - Partner With Us"; ?>
<?php include 'header.php' ?>

<section class="banner-section partner-banner">
    <div class="container">
        <div class="row py-4 py-sm-5 py-xl-4 justify-content-center text-center text-md-left">
            <div class="col-md-6 align-self-center">
                <img src="./public/images/png/partner-banner-img.png" class="img-fluid banner-img" alt="">
            </div>
            <div class="col-md-6 align-self-center">
                <h1 class="ml-md-5 mt-4 mt-md-n5 font-weight-bold line-height-1 banner-text">Partner With Us</h1>
                <!--Scroll Down Div-->
                <span class="scroll-down">&nbsp;</span>
            </div>
        </div>  
    </div>
</section>

<section class="mt-md-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center text-md-right mb-3 mb-md-0" data-aos="fade-right">
                <img src="./public/images/png/yellow_icon.png" width="100" alt="">
            </div>
            <div class="col-md-6 ml-md-4" data-aos="fade-right">
                <h3 class="mb-4 font-weight-600">Strong partnerships that are the <br class="d-none d-md-block"/>bedrock of high impact change</h3>
                <p class="h6 font-weight-600">A more inclusive world calls for a sweeping change across the globe. This change demands the united will and the focussed effort of people who are driven by a sense of responsibility and commitment to the mission of building a better and more equitable global community.  We seek such change agents, who will work with with us and help forge a brighter future.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="bg-white p-4 p-sm-5 border" data-aos="fade-up">
            <div class="row">
                <div class="col-12">
                    <h3 class="mt-3 font-weight-600">Partner Application Form</h3>
                    <form action="mail.php" method="post" enctype="multipart/form-data">
                        <p class="h6 font-weight-600">Tell us about you and your company</p>
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="partnerFullName" name="partnerFullName" placeholder="Full Name*" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" id="partnerEmail" name="partnerEmail" placeholder="Email*" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="h6 font-weight-600" for="inputPhoneNumber">Phone Number*</label>
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <input type="text" class="form-control" id="partnerPhoneCode" name="partnerPhoneCode" placeholder="Code" required>
                                            </div>
                                            <div class="form-group col-md-9">
                                                <input type="text" class="form-control" id="partnerPhoneNumber" name="partnerPhoneNumber" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="h6 font-weight-600" for="inputSource">How did you hear about us</label>
                                        <input type="text" class="form-control" id="partnerSource" name="partnerSource" required>
                                    </div>
                                </div>
                                <hr/>
                            </div>
                            <div class="col-12 mt-1">
                                <h5 class="mt-3 font-weight-600">Company Information</h5>
                                <div class="row mt-3">
                                    <div class="form-group col-md-6">
                                        <label class="h6 font-weight-600" for="partnerCompanyName">Company Name</label>
                                        <input type="text" class="form-control" id="partnerCompanyName" name="partnerCompanyName" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="h6 font-weight-600" for="partnerBusinessType">Type of Business</label>
                                        <input type="text" class="form-control" id="partnerBusinessType" name="partnerBusinessType" required>
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="h6 font-weight-600" for="partnerAddress">Address</label>
                                        <textarea type="text" rows="2" class="form-control" id="partnerAddress" name="partnerAddress" required></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="h6 font-weight-600" for="partnerWebsite">Website</label>
                                        <input type="text" class="form-control" id="partnerWebsite" name="partnerWebsite" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="h6 font-weight-600" for="partnerPatnershipArea">Area of Partnership</label>
                                        <input type="text" class="form-control" id="partnerPatnershipArea" name="partnerPatnershipArea" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit-partner" class="btn-sl btn btn-primary rounded-pill mt-5">Submit</button>
                    </form>
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