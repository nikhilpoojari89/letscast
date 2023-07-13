<footer class="pt-3 w-100 position-relative">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="subscribe-card shadow py-5 px-4 px-sm-0 text-center">
                    <h4 class="text-white font-weight-bold font-smooth letter-spacing-1 line-height-17 mt-4 mb-3">Don't miss our weekly updates about<br class="d-none d-md-block"/> academics information</h4>
                    <div>
                        <div class="subscribe-box">
                            <div class="subcribe-form">
                                <form id="subscribe" class="subscribe-form-inner" novalidate="true">
                                    <input class="subscribe-email" name="EMAIL" id="subscribe-email" placeholder="Enter your email address..." spellcheck="false" type="text">
                                    <button class="subscribe-button" type="submit" id="subscribe-button">SUBSCRIBE</button>
                                    <label class="subscribe-message" for="subscribe-email">Successfully Sent!!!</label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="d-sm-flex text-center text-sm-left justify-content-between mt-5 mb-3 mb-sm-0">
            <div class="">
                <div class="d-flex justify-content-center mb-3 mb-sm-0">
                    <h5 class="mr-3"><a class="text-white" href="https://www.facebook.com/LetsCastCom" target="_blank"> <i class="fab fa-facebook-f"></i> </a></h5>
                    <h5 class="mr-3"><a class="text-white" href="https://twitter.com/letscastcom" target="_blank"> <i class="fab fa-twitter"></i> </a></h5>
                    <h5 class="mr-3"><a class="text-white" href="https://www.linkedin.com/company/letscast/" target="_blank"> <i class="fab fa-linkedin-in"></i> </a></h5>
                    <h5 class="mr-3"><a class="text-white" href="https://www.instagram.com/letscast_official" target="_blank"> <i class="fab fa-instagram"></i> </a></h5>
                </div>
            </div>
            <div>
                <a href="mailto:sandruspsp@gmail.com" class="text-white">sandruspsp@gmail.com</a>
            </div>
        </div>

        <div class="row mx-0">
            <div class="col-12 pt-4 mt-3 text-center" style="border-top: 1px solid #352a29;">
                <span class="text-white opacity-6">©letscast all rights reserved</span>
            </div>
        </div>

    </div>
</footer>


<!--NOFILTER Stream Video Popup-->
<div class="modal fade" id="nofilter_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">

        <div class="modal-body">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>        
            
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
            </div>

        </div>

    </div>
  </div>
</div>

<!--SocioCSR Popup-->
<div class="modal fade" id="sociocsr_signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <h4 class="modal-title">Get In Touch</h4>
            <button type="button" class="close align-self-center" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="mail.php" method="post" enctype="multipart/form-data">
            <div class="modal-body pb-0">
                <div class="row mt-1">
                    <div class="col-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="h6 font-weight-600" for="sociocsrFullName">Full Name*</label>
                                <input type="text" name="sociocsrFullName" class="form-control" id="sociocsrFullName" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="h6 font-weight-600" for="sociocsrOfficialMail">Official Email ID*</label>
                                <input type="email" name="sociocsrOfficialMail" class="form-control" id="sociocsrOfficialMail" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="h6 font-weight-600" for="sociocsrOrganizationName">Organization Name*</label>
                                <input type="text" name="sociocsrOrganizationName" class="form-control" id="sociocsrOrganizationName" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="h6 font-weight-600" for="sociocsrLocation">Location*</label>
                                <input type="text" name="sociocsrLocation" class="form-control" id="sociocsrLocation" required>
                            </div>
                            <div class="form-group col-12">
                                <label class="h6 font-weight-600" for="sociocsrDescription">Description*</label>
                                <textarea type="text" name="sociocsrDescription" rows="8" class="form-control" id="sociocsrDescription" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-top-0 pt-0">
                <button type="submit" name="submit-sociocsr" class="btn-lc btn btn-primary rounded-pill">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div> 

<!--Socio Fellowship Popup-->
<div class="modal fade" id="sociofellowship_request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <h4 class="modal-title">Register For Our Program</h4>
            <button type="button" class="close align-self-center" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="mail.php" method="post" enctype="multipart/form-data">
            <div class="modal-body pb-0">
                <div class="row mt-1">
                    <div class="col-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="h6 font-weight-600" for="socioflFullName">Full Name*</label>
                                <input type="text" name="socioflFullName" class="form-control" id="socioflFullName" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="h6 font-weight-600" for="socioflDob">Date Of Birth*</label>
                                <div class="datepicker date input-group p-0 mb-0">
                                    <input type="text" name="socioflDob" placeholder="dd/mm/yyyy" class="form-control" id="socioflDob" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent px-4">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="h6 font-weight-600" for="socioflEmail">Email ID*</label>
                                <input type="email" name="socioflEmail" class="form-control" id="socioflEmail" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="h6 font-weight-600" for="socioflContact">Contact No.*</label>
                                <input type="text" name="socioflContact" class="form-control" id="socioflContact" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="h6 font-weight-600" for="socioflQualification">Highest Qualification*</label>
                                <input type="text" name="socioflQualification" class="form-control" id="socioflQualification" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="h6 font-weight-600" for="socioflLocation">Location*</label>
                                <input type="text" name="socioflLocation" class="form-control" id="socioflLocation" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-top-0 pt-0">
                <button type="submit" name="submit-sociofl" class="btn-lc btn btn-primary rounded-pill">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div> 

<!--Job Application Popup-->
<div class="modal fade" id="job_application" tabindex="-1" aria-labelledby="job_application" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content p-3">
        <div class="modal-header border-bottom-0 pb-0">
            <div>
                <h3 class="modal-title font-weight-600">Apply for a Position</h3>
                <p class="h6 font-weight-600">Please complete the form below to apply for a position with us.</p>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="mail.php" method="post" enctype="multipart/form-data">
            <div class="modal-body pb-1">
                <!-- <input type="hidden" class="form-control" id="jobappJobPosition"> 
                <input type="hidden" class="form-control" id="jobappJobLocation">-->
                <div class="row">
                    <div class="col-12">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="jobappFirstName" name="jobappFirstName" placeholder="First Name*" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="jobappLastName" name="jobappLastName" placeholder="Last Name*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <input type="email" class="form-control" id="jobappEmail" name="jobappEmail" placeholder="Email*" required>
                            </div>
                            <div class="input-group col-md-6 mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Job Location</span>
                                </div>
                                <input type="text" class="form-control bg-transparent" id="jobappJobLocation" name="jobappJobLocation" readonly aria-describedby="basic-addon3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label class="h6 font-weight-600" for="jobappPhoneNumber">Phone Number*</label>
                                <div class="form-row">
                                    <div class="form-group col-md-3 mb-md-0">
                                        <input type="text" class="form-control" id="jobappPhoneCode" name="jobappPhoneCode" placeholder="Code" required>
                                    </div>
                                    <div class="form-group col-md-9 mb-0">
                                        <input type="text" class="form-control" id="jobappPhoneNumber" name="jobappPhoneNumber" placeholder="Phone Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="h6 font-weight-600" for="jobappJobPosition">Applying for the Position</label>
                                <input type="text" class="form-control bg-transparent" id="jobappJobPosition" name="jobappJobPosition" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="jobappSource" name="jobappSource" placeholder="How did you hear about us?*" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="jobappJobStart" name="jobappJobStart" placeholder="When can you start?*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label class="h6 font-weight-600" for="jobappCoverLetter">Cover Letter</label>
                                <textarea type="text" rows="8" class="form-control" id="jobappCoverLetter" name="jobappCoverLetter"></textarea>
                            </div>
                            <div class="input-group mb-3 px-1">
                                <div class="custom-file">
                                    <label class="h6 font-weight-600" for="jobappUploadResume">Upload Resume*</label>
                                    <input type="file" class="h6 font-weight-600 ml-3" id="jobappUploadResume" name="jobappUploadResume" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,image/vnd.sealedmedia.softseal.jpg,image/jpeg,image/png,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-top-0 pt-0 pb-4 justify-content-start">
                <button type="submit" name="submit-jobapp" class="btn-lc btn btn-primary rounded-pill school-verify">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!--Scroll To Top-->
<a class="scrollToTop" href="#"><i class="fas fa-arrow-up"></i></a>

<script src="public/js/app.min.js"></script>
<script src="assets/plugins/slick/slick.min.js"></script>
<script src="assets/plugins/aos/aos.js"></script>
<script src="assets/plugins/datepicker/bootstrap-datepicker.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>