<?php $title = "Courses"; ?>
<?php include 'header.php' ?>

<section class="banner-section">
    <div class="container">
        <div class="row py-4 py-sm-5 py-lg-4 justify-content-center text-center text-md-left text-white">
            <div class="col-md-9 align-self-center order-2 order-md-1">
                <h3 class="font-weight-semibold line-height-17">Are you ready to take center stage and embark on a thrilling journey as an Actor?</h3>
                <p class="h6 font-weight-semibold">Program 3</p>
                <span class="small text-uppercase letter-spacing-2">Home / Course / Program 3</span>
            </div>
            <div class="col-md-3 align-self-center order-1 order-md-2 text-center">
                <img src="./public/images/svg/actor.svg" class="img-fluid opacity-5" width="130">
                <div class="d-flex justify-content-center mt-2">
                    <fieldset class="rate align-self-center">
                        <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                        <input type="radio" id="rating9" name="rating" value="9" checked/><label class="half" for="rating9" title="4 1/2 stars"></label>
                        <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                        <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                        <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                        <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                        <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                        <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                        <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                        <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>

                    </fieldset>
                    <p class="mb-0 align-self-center">(<span class="small">35</span>)</p>
                </div>

            </div>
        </div>  
    </div>
</section>

<section class="pt-5 pb-100">
    <div class="container">
        
        <div class="row justify-content-start">

            <div class="col-12">
                <div class="row program-tabs-section" data-aos="fade-up">
                    <div class="col-12">
                        <div class="row program-tabs-div">
                            <div class="col-12">

                                <div class="program-tabs-wrapper">

                                    <ul class="nav nav-pills list mb-2 justify-content-lg-center program-tabs py-2" id="program_info_tabs" role="tablist">
                                        <li class="nav-item mr-3" role="presentation">
                                            <a class="nav-link active rounded-pill font-serif font-weight-semibold" id="pills-courses-tab" data-toggle="pill" href="#pills-courses" role="tab" aria-controls="pills-courses" aria-selected="true"><img src="./public/images/svg/courses.svg" class="mr-1" alt="Courses" width="35">Courses</a>
                                        </li>
                                        <li class="nav-item mr-3" role="presentation">
                                            <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-career-prospects-tab" data-toggle="pill" href="#pills-career-prospects" role="tab" aria-controls="pills-career-prospects" aria-selected="false"><img src="./public/images/svg/career-prospects.svg" class="mr-1" alt="Career Prospects" width="35">Career Prospects</a>
                                        </li>
                                        <li class="nav-item mr-3" role="presentation">
                                            <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-opportunities-tab" data-toggle="pill" href="#pills-opportunities" role="tab" aria-controls="pills-opportunities" aria-selected="false"><img src="./public/images/svg/opportunities.svg" class="mr-1" alt="Opportunities" width="35">Opportunities</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-people-tab" data-toggle="pill" href="#pills-people" role="tab" aria-controls="pills-people" aria-selected="false"><img src="./public/images/svg/people.svg" class="mr-1" alt="People" width="35">People</a>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-courses" role="tabpanel" aria-labelledby="pills-courses-tab">

                                <div class="row justify-content-start">
                                    <div class="col-12">
                                        <div class="row courses-tabs-section" data-aos="fade-up">
                                            <div class="col-12">
                                                <div class="row courses-tabs-div">
                                                    <div class="col-12">

                                                        <div class="courses-tabs-wrapper">

                                                            <ul class="nav nav-pills list mb-0 courses-tabs py-2" id="courses_info_tabs" role="tablist">
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link active rounded-pill font-serif font-weight-semibold" id="pills-course-one-tab" data-toggle="pill" href="#pills-course-one" role="tab" aria-controls="pills-course-one" aria-selected="true">Degree Programs</a>
                                                                </li>
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-course-two-tab" data-toggle="pill" href="#pills-course-two" role="tab" aria-controls="pills-course-two" aria-selected="false">Certificate Programs</a>
                                                                </li>
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-course-three-tab" data-toggle="pill" href="#pills-course-three" role="tab" aria-controls="pills-course-three" aria-selected="false">Short-term Workshops</a>
                                                                </li>
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-course-four-tab" data-toggle="pill" href="#pills-course-four" role="tab" aria-controls="pills-course-four" aria-selected="false">Youth Programs</a>
                                                                </li>
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-course-five-tab" data-toggle="pill" href="#pills-course-five" role="tab" aria-controls="pills-course-five" aria-selected="false">Study Abroad with NYFA</a>
                                                                </li>
                                                                <li class="nav-item" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-course-six-tab" data-toggle="pill" href="#pills-course-six" role="tab" aria-controls="pills-course-six" aria-selected="false">Online Programs</a>
                                                                </li>
                                                            </ul>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-content mt-4" id="pills-tabContent">

                                                    <div class="tab-pane fade show active" id="pills-course-one" role="tabpanel" aria-labelledby="pills-course-one-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="grid-cards-section">

                                                                    <div class="grid-card-lg">
                                                                        <a href="javascript:void(0);" class="grid-link">
                                                                            <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">
                                                                                &nbsp;
                                                                            </div>
                                                                            <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                                <p class="mb-0 font-weight-bold line-height-1">FILM MAKING</p>
                                                                                <span><small>Sample Text</small></span>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="grid-card-md">
                                                                        <a href="javascript:void(0);" class="grid-link">
                                                                            <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/photo-1417722009592-65fa261f5632?q=75&fm=jpg&s=553e7d8a753f4d7b2a4161dcbe9d9801)">
                                                                                &nbsp;
                                                                            </div>
                                                                            <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                                <p class="mb-0 font-weight-bold line-height-1">ACTING FOR FILM</p>
                                                                                <span><small>Sample Text</small></span>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="grid-card-md">
                                                                        <a href="javascript:void(0);" class="grid-link">
                                                                            <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1418227165283-1595d13726cd?q=75&fm=jpg&s=cace1590a29be6d4d6db13c3ebd1ba72)">
                                                                                &nbsp;
                                                                            </div>
                                                                            <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                                <p class="mb-0 font-weight-bold line-height-1">PHOTOGRAPHY</p>
                                                                                <span><small>Sample Text</small></span>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="grid-card-lg">
                                                                        <a href="javascript:void(0);" class="grid-link">
                                                                            <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/uploads/1412862685615b0212e3d/5fcb0a55?q=75&fm=jpg&s=e003fb9a4e39e3c07e4a94f7e0ef3db8)">
                                                                                &nbsp;
                                                                            </div>
                                                                            <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                                <p class="mb-0 font-weight-bold line-height-1">PRODUCING</p>
                                                                                <span><small>Sample Text</small></span>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="grid-card-lg">
                                                                        <a href="javascript:void(0);" class="grid-link">
                                                                            <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">
                                                                                &nbsp;
                                                                            </div>
                                                                            <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                                <p class="mb-0 font-weight-bold line-height-1">SCREENWRITING</p>
                                                                                <span><small>Sample Text</small></span>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="grid-card-md">
                                                                        <a href="javascript:void(0);" class="grid-link">
                                                                            <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/photo-1417722009592-65fa261f5632?q=75&fm=jpg&s=553e7d8a753f4d7b2a4161dcbe9d9801)">
                                                                                &nbsp;
                                                                            </div>
                                                                            <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                                <p class="mb-0 font-weight-bold line-height-1">CINEMATOGRAPHY</p>
                                                                                <span><small>Sample Text</small></span>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="grid-card-md">
                                                                        <a href="javascript:void(0);" class="grid-link">
                                                                            <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1418227165283-1595d13726cd?q=75&fm=jpg&s=cace1590a29be6d4d6db13c3ebd1ba72)">
                                                                                &nbsp;
                                                                            </div>
                                                                            <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                                <p class="mb-0 font-weight-bold line-height-1">DOCUMENTARY FILMMAKING</p>
                                                                                <span><small>Sample Text</small></span>
                                                                            </div>
                                                                        </a>
                                                                    </div>

                                                                    <div class="grid-card-lg">
                                                                        <a href="javascript:void(0);" class="grid-link">
                                                                            <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/uploads/1412862685615b0212e3d/5fcb0a55?q=75&fm=jpg&s=e003fb9a4e39e3c07e4a94f7e0ef3db8)">
                                                                                &nbsp;
                                                                            </div>
                                                                            <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                                <p class="mb-0 font-weight-bold line-height-1">VIRTUAL REALITY</p>
                                                                                <span><small>Sample Text</small></span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-course-two" role="tabpanel" aria-labelledby="pills-course-two-tab">

                                                        <div class="row">
                                                            <div class="col-12">
                                                            
                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">Certificate Programs</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-course-three" role="tabpanel" aria-labelledby="pills-course-three-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">Short-term Workshops</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-course-four" role="tabpanel" aria-labelledby="pills-course-four-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">Youth Programs</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-course-five" role="tabpanel" aria-labelledby="pills-course-five-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">Study Abroad with NYFA</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-course-six" role="tabpanel" aria-labelledby="pills-course-six-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">Online Programs</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-career-prospects" role="tabpanel" aria-labelledby="pills-career-prospects-tab">

                                <div class="row justify-content-start">
                                    <div class="col-12">
                                        <div class="row courses-tabs-section" data-aos="fade-up">
                                            <div class="col-12">
                                                <div class="row courses-tabs-div">
                                                    <div class="col-12">

                                                        <div class="courses-tabs-wrapper">

                                                            <ul class="nav nav-pills list mb-0 courses-tabs py-2" id="cp_info_tabs" role="tablist">
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link active rounded-pill font-serif font-weight-semibold" id="pills-cp-one-tab" data-toggle="pill" href="#pills-cp-one" role="tab" aria-controls="pills-cp-one" aria-selected="true">Summary</a>
                                                                </li>
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-cp-two-tab" data-toggle="pill" href="#pills-cp-two" role="tab" aria-controls="pills-cp-two" aria-selected="false">What they Do</a>
                                                                </li>
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-cp-three-tab" data-toggle="pill" href="#pills-cp-three" role="tab" aria-controls="pills-cp-three" aria-selected="false">Work Environment</a>
                                                                </li>
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-cp-four-tab" data-toggle="pill" href="#pills-cp-four" role="tab" aria-controls="pills-cp-four" aria-selected="false">How to Become one</a>
                                                                </li>
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-cp-five-tab" data-toggle="pill" href="#pills-cp-five" role="tab" aria-controls="pills-cp-five" aria-selected="false">Pay</a>
                                                                </li>
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-cp-six-tab" data-toggle="pill" href="#pills-cp-six" role="tab" aria-controls="pills-cp-six" aria-selected="false">Job Outlook</a>
                                                                </li>
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-cp-seven-tab" data-toggle="pill" href="#pills-cp-seven" role="tab" aria-controls="pills-cp-seven" aria-selected="false">State & Area Data</a>
                                                                </li>
                                                                <li class="nav-item mr-3" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-cp-eight-tab" data-toggle="pill" href="#pills-cp-eight" role="tab" aria-controls="pills-cp-eight" aria-selected="false">Similar Occupations</a>
                                                                </li>
                                                                <li class="nav-item" role="presentation">
                                                                    <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-cp-nine-tab" data-toggle="pill" href="#pills-cp-nine" role="tab" aria-controls="pills-cp-nine" aria-selected="false">More Info</a>
                                                                </li>
                                                            </ul>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-content mt-4" id="pills-CourseContent">

                                                    <div class="tab-pane fade show active" id="pills-cp-one" role="tabpanel" aria-labelledby="pills-cp-one-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="cp-summary">

                                                                    <div class="d-sm-flex justify-content-between">
                                                                        <div>
                                                                            <h3 class="font-weight-bold text-secondary mb-2">Summary</h3>
                                                                            <p class="mb-0 font-weight-semibold text-secondary h6">2021 Median Pay :$23.48 h</p>
                                                                        </div>
                                                                        <div class="mt-3 mt-sm-0 align-self-center">
                                                                            <a href="javascript:void(0);" class="btn-lc btn btn-primary rounded-pill enroll-now-btn">
                                                                                Enroll Now
                                                                                <img class="ml-2 mt-n1" src="./public/images/svg/get-started-arrow.svg" width="16" alt="Enroll Now">
                                                                            </a>
                                                                        </div>   
                                                                    </div>
                                                                    

                                                                    <div class="work-exp-details mt-3">

                                                                        <div class="d-md-flex exp-inner mt-4">
                                                                            <div class="exp-info mt-4 my-md-0 align-self-center pr-md-2 pr-lg-5">
                                                                                <p class="mb-0 text-secondary opacity-8 line-height-13"><span class="font-13 opacity-7">Typical Entry-Level Education:</span></p>
                                                                                <span class="font-13 text-secondary font-weight-bold">Some college, no degree</span>
                                                                            </div>
                                                                            <div class="exp-info my-3 my-md-0 align-self-center position-relative px-md-2 px-lg-5">
                                                                                <p class="mb-0 text-secondary opacity-8 line-height-13"><span class="font-13 opacity-7">Work Experience in a Related Occupation:</span></p>
                                                                                <span class="font-13 text-secondary font-weight-bold">None</span>
                                                                            </div>
                                                                            <div class="exp-info mb-4 my-md-0 align-self-center position-relative pl-md-2 pl-lg-5">
                                                                                <p class="mb-0 text-secondary opacity-8 line-height-13"><span class="font-13 opacity-7">On-the-job Training:</span></p>
                                                                                <span class="font-13 text-secondary font-weight-bold">Long-term on-the-job training</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="d-sm-flex pt-2 pt-sm-0 mt-3">
                                                                            <div class="font-13 text-secondary opacity-7 d-flex pr-sm-5">
                                                                                <img class="mr-2" src="./public/images/svg/bag.svg" width="" alt="Jobs">
                                                                                <span class="align-self-center">Number of Jobs : 50,600</span>
                                                                            </div>
                                                                            <div class="font-13 text-secondary opacity-7 mt-3 mt-sm-0 d-flex pl-sm-5">
                                                                                <img class="mr-2" src="./public/images/svg/bag.svg" width="" alt="Jobs">
                                                                                <span class="align-self-center">Job Outlook, 2021-31 : 8% (Faster than average)</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row mt-5">
                                                                            <div class="col-12">

                                                                                <div>
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">What Actors Do ?</h5>
                                                                                    <p class="text-secondary opacity-6">Actors express ideas and portray characters in theater, film, television, and other performing arts media.</p>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">Work Environment ?</h5>
                                                                                    <p class="text-secondary opacity-6">Actors work in various settings, including production studios, theaters, and theme parks, or on location. Work assignments are usually short, ranging from 1 day to a few months.</p>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">How to Become an Actor ?</h5>
                                                                                    <p class="text-secondary opacity-6">Actors typically enhance their skills through formal education, and long-term training is common.</p>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">Pay</h5>
                                                                                    <p class="text-secondary opacity-6">The median hourly wage for actors was $23.48 in May 2021.</p>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">Job Outlook</h5>
                                                                                    <p class="text-secondary opacity-6">Employment of actors is projected to grow 8 percent from 2021 to 2031, faster than the average for all occupations.</p>
                                                                                    <p class="text-secondary opacity-6">About 7,000 openings for actors are projected each year, on average, over the decade. Many of those openings are expected to result from the need to replace workers who transfer to different occupations or exit the labor force, such</p>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">State & Area Data</h5>
                                                                                    <p class="text-secondary opacity-6">Explore resources for employment and wages by state and area for actors.</p>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">Similar Occupations</h5>
                                                                                    <p class="text-secondary opacity-6">Compare the job duties, education, job growth, and pay of actors with similar occupations.</p>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">More Information, Including Links to O*NET</h5>
                                                                                    <p class="text-secondary opacity-6">Learn more about actors by visiting additional resources, including O*NET, a source on key characteristics of workers and occupations.</p>
                                                                                </div>


                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                               </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-cp-two" role="tabpanel" aria-labelledby="pills-cp-two-tab">

                                                        <div class="row">
                                                            <div class="col-12">
                                                            
                                                                <div class="cp-summary">

                                                                    <div class="d-sm-flex justify-content-between">
                                                                        <div class="align-self-center">
                                                                            <h3 class="font-weight-bold text-secondary mb-0 mb-md-2">What they Do</h3>
                                                                        </div>
                                                                        <div class="mt-3 mt-sm-0 align-self-center">
                                                                            <a href="javascript:void(0);" class="btn-lc btn btn-primary rounded-pill enroll-now-btn">
                                                                                Enroll Now
                                                                                <img class="ml-2 mt-n1" src="./public/images/svg/get-started-arrow.svg" width="16" alt="Enroll Now">
                                                                            </a>
                                                                        </div>   
                                                                    </div>

                                                                    <div class="work-exp-details mt-4 mt-md-0">
                                                                        <div class="row">
                                                                            <div class="col-12">

                                                                                <div>
                                                                                    <h5 class="font-weight-semibold text-secondary mb-4">What Film and Video Editors and Camera Operators Do</h5>
                                                                                    <p class="text-secondary opacity-6">Film and video editors and camera operators manipulate images that entertain or inform an audience. Camera operators capture a wide range of material for television, movies, and other media. Editors arrange footage shot by camera operators and collaborate with producers and directors to create the final content.</p>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">Duties</h5>
                                                                                    <p class="text-secondary opacity-6">Film and video editors and camera operators typically do the following:</p>
                                                                                    <div class="my-4">
                                                                                        <div class="d-flex">
                                                                                            <div><img src="./public/images/svg/tick.svg" width="23" alt="Check"></div>
                                                                                            <div class="align-self-center ml-3 text-secondary font-13"><span>Shoot and record television programs, films, music videos, documentaries, or news and sporting events</span></div>
                                                                                        </div>
                                                                                        <div class="d-flex mt-1">
                                                                                            <div><img src="./public/images/svg/tick.svg" width="23" alt="Check"></div>
                                                                                            <div class="align-self-center ml-3 text-secondary font-13"><span>Organize digital footage with video-editing software</span></div>
                                                                                        </div>
                                                                                        <div class="d-flex mt-1">
                                                                                            <div><img src="./public/images/svg/tick.svg" width="23" alt="Check"></div>
                                                                                            <div class="align-self-center ml-3 text-secondary font-13"><span>Collaborate with a director to determine the overall vision of the production</span></div>
                                                                                        </div>
                                                                                        <div class="d-flex mt-1">
                                                                                            <div><img src="./public/images/svg/tick.svg" width="23" alt="Check"></div>
                                                                                            <div class="align-self-center ml-3 text-secondary font-13"><span>Discuss filming and editing techniques with a director to improve a scene</span></div>
                                                                                        </div>
                                                                                        <div class="d-flex mt-1">
                                                                                            <div><img src="./public/images/svg/tick.svg" width="23" alt="Check"></div>
                                                                                            <div class="align-self-center ml-3 text-secondary font-13"><span>Select the appropriate equipment, such as the type of lens or lighting</span></div>
                                                                                        </div>
                                                                                        <div class="d-flex mt-1">
                                                                                            <div><img src="./public/images/svg/tick.svg" width="23" alt="Check"></div>
                                                                                            <div class="align-self-center ml-3 text-secondary font-13"><span>Shoot or edit a scene based on the director's vision</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <p class="text-secondary opacity-6">Many camera operators supervise one or more assistants. The assistants set up the camera equipment and may be responsible for its storage and care. Assistants also help the operator determine the best shooting angle and make sure that the camera stays in focus.</p>
                                                                                    <p class="text-secondary opacity-6">Likewise, editors often have one or more assistants. The assistants support the editor by keeping track of each shot in a database or loading digital video into an editing bay. Assistants also may do some of the editing tasks.</p>
                                                                                    <p class="text-secondary opacity-6">Most operators prefer using digital cameras because the smaller, more inexpensive instruments give them more flexibility in shooting angles. Digital cameras also have changed the job of some camera assistants: Instead of loading film or choosing lenses, they download digital images or choose a type of software program to use with the camera. In addition, drone cameras give operators an opportunity to film in the air, or in places that are hard to reach.</p>
                                                                                    <p class="text-secondary opacity-6">Nearly all editing work is done on a computer, and editors often are trained in a specific type of editing software. The following are examples of types of camera operators:</p>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">Cinematographer</h5>
                                                                                    <p class="text-secondary opacity-6">film motion pictures. They usually work with a team of camera operators and assistants. Cinematographers determine the angles and types of equipment that will best capture a shot. They also adjust the lighting in a shot, because that is an important part of how the image looks.</p>
                                                                                    <p class="text-secondary opacity-6">Cinematographers may use stationary cameras that shoot whatever passes in front of them, or they may use a camera mounted on a track and move around the action. Some cinematographers sit on cranes to film an action scene; others carry the camera on their shoulder while they move around the action.</p>
                                                                                    <p class="text-secondary opacity-6">Some cinematographers specialize in filming cartoons or special effects. For information about a career in animation, see special effects artists and animators. Other cinematographers function as a film's artistic director. For information about these workers, see art directors.</p>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">Studio camera operators</h5>
                                                                                    <p class="text-secondary opacity-6">work in a broadcast studio and videotape their subjects from a fixed position. There may be one or several cameras in use at a time. Operators normally follow directions that give the order of the shots. They often have time to practice camera movements before shooting begins. If they are shooting a live event, they must be able to make adjustments at a moment's notice and follow the instructions of the show's director. The use of robotic cameras is common among studio camera operators, and one operator may control several cameras at once.</p>
                                                                                </div>
                                                                                <div class="mt-4">
                                                                                    <h5 class="font-poppins-semibold text-secondary mb-4">Videographers</h5>
                                                                                    <p class="text-secondary opacity-6">film or videotape private ceremonies or special events, such as weddings. They also may work with companies and make corporate documentaries on a variety of topics. Most videographers edit their own material.</p>
                                                                                    <p class="text-secondary opacity-6">Many videographers run their own business or do freelance work. They may submit bids, write contracts, and get permission to shoot on locations that may not be open to the public. They also get copyright protection for their work and keep financial records.</p>
                                                                                    <p class="text-secondary opacity-6">Many editors and camera operators, but particularly videographers, put their creative work online. If it becomes popular, they gain more recognition, which can lead to future employment or freelance opportunities.</p>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-cp-three" role="tabpanel" aria-labelledby="pills-cp-three-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">Work Environment</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-cp-four" role="tabpanel" aria-labelledby="pills-cp-four-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">How to Become one</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-cp-five" role="tabpanel" aria-labelledby="pills-cp-five-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">Pay</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-cp-six" role="tabpanel" aria-labelledby="pills-cp-six-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">Job Outlook</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-cp-seven" role="tabpanel" aria-labelledby="pills-cp-seven-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">State & Area Data</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-cp-eight" role="tabpanel" aria-labelledby="pills-cp-eight-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">Similar Occupations</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="tab-pane fade" id="pills-cp-nine" role="tabpanel" aria-labelledby="pills-cp-nine-tab">

                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                                                    <h4 class="title-color">More Info</h4>

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-opportunities" role="tabpanel" aria-labelledby="pills-opportunities-tab">

                                <div class="row">
                                    <div class="col-12">

                                        <div class="grid-cards-section">

                                            <div class="grid-card-lg">
                                                <a href="javascript:void(0);" class="grid-link">
                                                    <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">
                                                        &nbsp;
                                                    </div>
                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                        <p class="mb-0 font-weight-bold line-height-1">FILM MAKING</p>
                                                        <span><small>Sample Text</small></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="grid-card-md">
                                                <a href="javascript:void(0);" class="grid-link">
                                                    <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/photo-1417722009592-65fa261f5632?q=75&fm=jpg&s=553e7d8a753f4d7b2a4161dcbe9d9801)">
                                                        &nbsp;
                                                    </div>
                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                        <p class="mb-0 font-weight-bold line-height-1">ACTING FOR FILM</p>
                                                        <span><small>Sample Text</small></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="grid-card-md">
                                                <a href="javascript:void(0);" class="grid-link">
                                                    <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1418227165283-1595d13726cd?q=75&fm=jpg&s=cace1590a29be6d4d6db13c3ebd1ba72)">
                                                        &nbsp;
                                                    </div>
                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                        <p class="mb-0 font-weight-bold line-height-1">PHOTOGRAPHY</p>
                                                        <span><small>Sample Text</small></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="grid-card-lg">
                                                <a href="javascript:void(0);" class="grid-link">
                                                    <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/uploads/1412862685615b0212e3d/5fcb0a55?q=75&fm=jpg&s=e003fb9a4e39e3c07e4a94f7e0ef3db8)">
                                                        &nbsp;
                                                    </div>
                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                        <p class="mb-0 font-weight-bold line-height-1">PRODUCING</p>
                                                        <span><small>Sample Text</small></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="grid-card-lg">
                                                <a href="javascript:void(0);" class="grid-link">
                                                    <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">
                                                        &nbsp;
                                                    </div>
                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                        <p class="mb-0 font-weight-bold line-height-1">SCREENWRITING</p>
                                                        <span><small>Sample Text</small></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="grid-card-md">
                                                <a href="javascript:void(0);" class="grid-link">
                                                    <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/photo-1417722009592-65fa261f5632?q=75&fm=jpg&s=553e7d8a753f4d7b2a4161dcbe9d9801)">
                                                        &nbsp;
                                                    </div>
                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                        <p class="mb-0 font-weight-bold line-height-1">CINEMATOGRAPHY</p>
                                                        <span><small>Sample Text</small></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="grid-card-md">
                                                <a href="javascript:void(0);" class="grid-link">
                                                    <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1418227165283-1595d13726cd?q=75&fm=jpg&s=cace1590a29be6d4d6db13c3ebd1ba72)">
                                                        &nbsp;
                                                    </div>
                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                        <p class="mb-0 font-weight-bold line-height-1">DOCUMENTARY FILMMAKING</p>
                                                        <span><small>Sample Text</small></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="grid-card-lg">
                                                <a href="javascript:void(0);" class="grid-link">
                                                    <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/uploads/1412862685615b0212e3d/5fcb0a55?q=75&fm=jpg&s=e003fb9a4e39e3c07e4a94f7e0ef3db8)">
                                                        &nbsp;
                                                    </div>
                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                        <p class="mb-0 font-weight-bold line-height-1">VIRTUAL REALITY</p>
                                                        <span><small>Sample Text</small></span>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-people" role="tabpanel" aria-labelledby="pills-people-tab">

                                <div class="row courses-tabs-section" data-aos="fade-up">
                                    <div class="col-12">
                                        <div class="row courses-tabs-div d-none">
                                            <div class="col-12">

                                                <div class="courses-tabs-wrapper">

                                                    <ul class="nav nav-pills list mb-0 courses-tabs py-2" id="people_info_tabs" role="tablist">
                                                        <li class="nav-item mr-3" role="presentation">
                                                            <a class="nav-link active rounded-pill font-serif font-weight-semibold" id="pills-people-one-tab" data-toggle="pill" href="#pills-people-one" role="tab" aria-controls="pills-people-one" aria-selected="true">People Home</a>
                                                        </li>
                                                        <li class="nav-item mr-3" role="presentation">
                                                            <a class="nav-link rounded-pill font-serif font-weight-semibold" id="pills-people-two-tab" data-toggle="pill" href="#pills-people-two" role="tab" aria-controls="pills-people-two" aria-selected="false">People Inner</a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-content" id="pills-PeopleContent">

                                            <div class="tab-pane fade show active" id="pills-people-one" role="tabpanel" aria-labelledby="pills-people-one-tab">

                                                <div class="row">
                                                    <div class="col-12">

                                                        <div class="grid-cards-section">

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">FILM MAKING</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/photo-1417722009592-65fa261f5632?q=75&fm=jpg&s=553e7d8a753f4d7b2a4161dcbe9d9801)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">3D ANIMATION & VFX + GAME DESIGN</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1418227165283-1595d13726cd?q=75&fm=jpg&s=cace1590a29be6d4d6db13c3ebd1ba72)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">BROADCAST JOURNALISM</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/uploads/1412862685615b0212e3d/5fcb0a55?q=75&fm=jpg&s=e003fb9a4e39e3c07e4a94f7e0ef3db8)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">PRODUCING</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">U.S. VETERANS</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/photo-1417722009592-65fa261f5632?q=75&fm=jpg&s=553e7d8a753f4d7b2a4161dcbe9d9801)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">DOCUMENTARY FILMMAKING</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1418227165283-1595d13726cd?q=75&fm=jpg&s=cace1590a29be6d4d6db13c3ebd1ba72)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">CINEMATOGRAPHY</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/uploads/1412862685615b0212e3d/5fcb0a55?q=75&fm=jpg&s=e003fb9a4e39e3c07e4a94f7e0ef3db8)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">YOUTH PROGRAMS</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">MUSICAL THEATRE</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/photo-1417722009592-65fa261f5632?q=75&fm=jpg&s=553e7d8a753f4d7b2a4161dcbe9d9801)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">ACTING FOR FILM</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1418227165283-1595d13726cd?q=75&fm=jpg&s=cace1590a29be6d4d6db13c3ebd1ba72)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">PHOTOGRAPHY</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="grid-card-sm">
                                                                <a href="javascript:void(0);" class="open-info grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://unsplash.imgix.net/uploads/1412862685615b0212e3d/5fcb0a55?q=75&fm=jpg&s=e003fb9a4e39e3c07e4a94f7e0ef3db8)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 grid-title font-weight-bold line-height-1">SCREENWRITING</p>
                                                                        <span class="grid-desc"><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="pills-people-two" role="tabpanel" aria-labelledby="pills-people-two-tab">

                                                <div class="row">
                                                    <div class="col-12">

                                                        <div class="grid-cards-section">

                                                            <div class="grid-card-full">
                                                                <a href="javascript:void(0);" class="grid-link">
                                                                    <div class="grid-img" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">
                                                                        &nbsp;
                                                                    </div>
                                                                    <div class="grid-info position-absolute bottom-0 left-0 w-100 px-4 pt-3 pb-2 text-white">
                                                                        <p class="mb-0 font-weight-bold line-height-1">FILM MAKING</p>
                                                                        <span><small>Sample Text</small></span>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                        </div>

                                                        <div class="row pt-5">
                                                            <div class="col-12">

                                                                <div class="row justify-content-between">

                                                                    <div class="col-auto people-circle-img img-1 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-2 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-3 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-4 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-5 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-6 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-7 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-8 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-9 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-10 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-11 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-12 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-13 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-14 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto people-circle-img img-15 mt-4">
                                                                        <div class="single-team-member">
                                                                            <div class="wrapper">
                                                                                <div class="img-box">
                                                                                    &nbsp;
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                     
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="text-center pt-5">
                                                            <a href="javascript:void(0);" id="prev_people_info" class="btn-lc btn btn-primary rounded-pill go-back-btn mt-2 prev-people-info">Back</a>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>


<!--************ Join Us Section *************
<?php include 'join-us-tab.php' ?>-->


<?php include 'footer.php' ?>

<script>

    $(".open-info").on("click", function(){
        //$('#people_info_tabs a[href="#pills-people-two-tab"]').tab('show');
        $('#people_info_tabs li:eq(1) a').tab('show');
    });

    $(".prev-people-info").on("click", function(){
        //$('#people_info_tabs a[href="#pills-people-one-tab"]').tab('show');
        $('#people_info_tabs li:eq(0) a').tab('show');
    });

</script>