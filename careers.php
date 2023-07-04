<?php $title = "SocioLadder - Careers"; ?>
<?php include 'header.php' ?>

<section class="banner-section banner-section-medium">
    <div class="container">
        <div class="row py-4 py-sm-5 py-xl-4 justify-content-center text-center text-md-left">
            <div class="col-md-6 align-self-center">
                <img src="./public/images/png/career-banner-img.png" class="img-fluid banner-img" alt="">
            </div>
            <div class="col-md-6 align-self-center">
                <h1 class="ml-md-5 mt-4 mt-md-n5 font-weight-bold line-height-1 banner-text">Careers at<br class="d-none d-md-block"/> SocioLadder</h1>
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
                <h3 class="mb-4 font-weight-600">The future is created by <br class="d-none d-md-block"/>people like you.</h3>
                <p class="h6 font-weight-600">A more inclusive world calls for a sweeping change across the globe. This change demands the united will and the focussed effort of people who are driven by a sense of responsibility and commitment to the mission of building a better and more equitable global community. We seek such change agents, who will work with with us and help forge a brighter future.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">

        <div class="d-flex justify-content-between">
            <h3 class="my-3 font-weight-600" data-aos="fade-up">Openings at SocioLadder</h3>

            <div class="form-inline" data-aos="fade-up">
                <label class="my-1 mr-2 h6" for="job_location_select">Select Location:</label>
                <select class="form-control my-1 mr-sm-2" id="job_location_select">
                    <option value='0'>India</option>
                    <option value='1'>Dubai</option>
                </select>
            </div>

            <ul class="nav nav-tabs d-none" id="job_location_tab">
                <li class="active"><a href="#india">India</a></li>
                <li><a href="#dubai">Dubai</a></li>
            </ul>
        </div>

        <div class="tab-content">

            <?php include 'job-listings.php' ?>

        </div>

        <h5 data-aos="fade-up">If you think you are a suitable candidate for the listed position and <span class="font-weight-600 font-serif">want to be a part of our winning team,</span><br class="d-none d-md-block"/> kindly email your resume to <a href="mailto:careersdsa@socioladder.com" class="text-danger font-weight-600 font-serif">careersdsa@socioladder.com</a> or click on 'Apply Now'.</h5>

    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">

        <h3 class="my-3 font-weight-600" data-aos="fade-up">Life at SocioLadder</h3>

        <div class="row justify-content-center pb-5" data-aos="fade-up">
            <div class="col-md-12">
                <div class="life-sl-slider mb-3">
                    <img src="./public/images/png/slider/slider-1.png" alt="Slider Image" class="img-fluid mx-2 border">
                    <img src="./public/images/png/slider/slider-2.png" alt="Slider Image" class="img-fluid mx-2 border">
                    <!-- <img src="./public/images/png/slider/slider-3.png" alt="Slider Image" class="img-fluid mx-2 border">
                    <img src="./public/images/png/slider/slider-4.png" alt="Slider Image" class="img-fluid mx-2 border">
                    <img src="./public/images/png/slider/slider-5.png" alt="Slider Image" class="img-fluid mx-2 border"> -->
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