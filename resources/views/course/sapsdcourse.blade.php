@extends('layouts.app')
@section('meta_title', 'SAP SD Online Course with Practical Training | EzyLern')
@section('meta_description', ' Enroll in our SAP SD online course and gain hands-on expertise in sales & distribution with real-time projects, certification, and placement support. Join now!')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())
@section('og_type', 'website')
@section('og_title', 'SAP SD Online Course with Practical Training | EzyLern')
@section('og_description', ' Enroll in our SAP SD online course and gain hands-on expertise in sales & distribution with real-time projects, certification, and placement support. Join now!')
@section('og_image', asset(''))
@section('og_url', url()->current())
@section('content')


<!--==================================================-->
<!-- Start  breadcumb Section  -->
<!--==================================================-->

<div class="breadcumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-container text-center">
                    <div class="breadcumb-title">
                        <h1>SAP SD Course Online With Certificate & Live Training</h1>
                    </div>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>Courses</li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>SAP SD Course Online With Certificate & Live Training</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcumb-all-shape">
            <div class="breadcumb-shape">
                <img src="assets/images/breadcumb/banner-shape.png"
                    alt="shape">
            </div>
            <div class="breadcumb-shape1">
                <img src="assets/images/breadcumb/banner-shape1.png"
                    alt="shape">
            </div>
            <div class="breadcumb-shape2">
                <img src="assets/images/breadcumb/banner-shape2.png"
                    alt="shape">
            </div>
            <div class="breadcumb-shape3">
                <img src="assets/images/breadcumb/banner-shape3.png"
                    alt="shape">
            </div>
            <div class="breadcumb-shape4">
                <img src="assets/images/breadcumb/banner-shape4.png"
                    alt="shape">
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End  breadcumb Section  -->
<!--==================================================-->

<!--==================================================-->
<!-- Start  courses-details Section  -->
<!--==================================================-->

<div class="courses-details-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-courses-details-box wow fadeInLeft">
                    <div class="courses-details-thumb">
                        <img
                            src="assets/images/resource/coursedetailssd_thumb.jpg"
                            alt="thumb">
                    </div>
                    <div class="courses-details-content">

                        <!-- Modal for video -->
                        <div class="video-modal" id="videoModal">
                            <div class="close-btn"
                                id="closePreview">&times;</div>
                            <div class="video-modal-content">
                                <iframe id="videoIframe" src
                                    frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>

                        <!-- ********************** -->
                        <div class="tab-courses wow fadeInRight">
                            <div class="tab-active">
                                <div class="w3-bar w3-black">
                                    <button
                                        class="w3-bar-item w3-button"
                                        onclick="openCity('Overview')">Overview</button>
                                    <button
                                        class="w3-bar-item w3-button"
                                        onclick="openCity('Curriculum')">Curriculum</button>
                                    <!-- <button
                                                class="w3-bar-item w3-button"
                                                onclick="openCity('Instructor')">Instructor</button> -->
                                    <button
                                        class="w3-bar-item w3-button"
                                        onclick="openCity('Reviews')">Reviews</button>
                                </div>
                            </div>
                            <div id="Overview"
                                class="w3-container city wow fadeInLeft">
                                <div class="courses-details-text">
                                    <h2>Course Description</h2>
                                    <p>The SAP SD online course focuses on guiding individuals on how to use SAP Sales and Distribution within the SAP system to manage shipping, pricing, and billing. This course is great for sales professionals, management specialists, as well as SAP consultants who need to understand.</p>
                                </div>

                                <div class="courses-details-title wow fadeInRight">
                                    <h3>This course is for</h3>
                                </div>
                                <div class="courses-details-list wow fadeInLeft">
                                    <ul class="courses-details-title-check">
                                        <li><i
                                                class="bi bi-check"></i><span>People who want to grow span</li>
                                        <li><i
                                                class="bi bi-check"></i><span>People who are from a technical background</span></li>
                                        <li><i
                                                class="bi bi-check"></i><span>Anyone who wants to learn SAP and is passionate</span></li>
                                    </ul>
                                </div>

                                <div class="courses-details-title wow fadeInRight">
                                    <h3>You will</h3>
                                </div>
                                <div class="courses-details-list wow fadeInLeft">
                                    <ul class="courses-details-title-check">
                                        <li><i
                                                class="bi bi-check"></i><span>Learn step by step, even if you do not know about SAP SD</li>
                                        <li><i
                                                class="bi bi-check"></i><span>Prepare for SAP exams</span></li>
                                        <li><i
                                                class="bi bi-check"></i><span>Increase your chances of getting hired</span></li>
                                    </ul>
                                </div>

                                <div class="courses-feature-text">
                                    <h2>Course Features</h2>
                                </div>
                                <div class="courses-details-list wow fadeInLeft">
                                    <ul class="courses-details-title-check">
                                        <li><i
                                                class="bi bi-check"></i><span>Our <strong>SAP SD online course</strong> provides you with live classes with our best instructors.</li>
                                        <li><i
                                                class="bi bi-check"></i><span>By joining our <strong>SAP SD online course</strong>, you will get a certificate after completion.</span></li>
                                        <li><i
                                                class="bi bi-check"></i><span>You will benefit from real examples from organizations and case studies.</span></li>
                                        <li><i
                                                class="bi bi-check"></i><span>Get hands-on experience with SAP systems like real jobs.</span></li>
                                        <li><i
                                                class="bi bi-check"></i><span>Enhanced learning with fun quizzes and homework to increase skills.</span></li>
                                        <li><i
                                                class="bi bi-check"></i><span>Enjoy personalized doubt-clearing sessions with our 24/7 team support</span></li>
                                    </ul>
                                </div>

                                <div class="courses-details-text">
                                    <p>These features make our course unique and beneficial, and crucial for all SAP professionals.</p>
                                </div>



                                <div class="course-lern-details-text">
                                    <div class="courses-details-text wow fadeInLeft">
                                        <h3>What You’ll Learn </h3>
                                        <p>In the <strong>SAP SD online course</strong>, you will learn how companies sell their products, send them to customers, and get paid using SAP SD.</p>
                                    </div>
                                    <div class="courses-details-text  wow fadeInRight">
                                        <h3>Sales order processing </h3>
                                        <p>You will learn how to create and manage sales orders. A sales order is when a customer wants to buy something, and you will learn how to write all the details, like buying, purchasing, billing, and pricing.</p>
                                    </div>
                                    <div class="courses-details-text wow fadeInLeft">
                                        <h3>Billing, shipping, and delivery</h3>
                                        <p>You will learn how to make bills, how products are packed for customers and shipped, and how they reach customers on time.</p>
                                    </div>
                                    <div class="courses-details-text wow fadeInRight">
                                        <h3>Integration with MM and FICO</h3>
                                        <p>You will learn about MM and FICO for managing products and stocks, and for money and payments.</p>
                                    </div>
                                    <div class="courses-details-text wow fadeInLeft">
                                        <h3>Real-time case studies</h3>
                                        <p>You will get real-life examples and stories from companies, so you understand how SAP is used in jobs.</p>
                                    </div>
                                    <div class="courses-feature-text  wow fadeInLeft">
                                        <h2>Who This Course Is For </h2>
                                    </div>
                                    <div class="courses-details-list wow fadeInLeft">
                                        <ul class="courses-details-title-check">
                                            <li><i
                                                    class="bi bi-check"></i><span>People want to learn SAP and start a new job with good skills.</li>
                                            <li><i
                                                    class="bi bi-check"></i><span>People working somewhere else who now want to move to SAP. This course will teach them everything.</span></li>
                                            <li><i
                                                    class="bi bi-check"></i><span>Students studying business or management will get help to understand how companies work.</span></li>
                                            <li><i
                                                    class="bi bi-check"></i><span>People who already using SAP can learn more by adding SAP SD.</span></li>
                                            <li><i
                                                    class="bi bi-check"></i><span>Anyone who wants good and high-paying jobs will get major help.</span></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <!-- ****************************************************** -->
                            <!-- Start Curriculum Section -->
                            <!-- ******************************************************* -->


                            <div id="Curriculum"
                                class="w3-container city"
                                style="display:none">
                                <div class="tab">
                                    <div class="tab_content">
                                        <div class="tabs_item"
                                            style="display: block;">
                                            <div
                                                class="course-curriculum">
                                                <h4>Getting Started with
                                                    Uniaro</h4>
                                                <p class="crlm-dtls">At
                                                    EzyLearn, we’re
                                                    committed to shaping
                                                    the future of
                                                    education through
                                                    cutting-edge Course
                                                    design and seamless
                                                    functionality —
                                                    ensuring every tool
                                                    and feature enhances
                                                    the learner
                                                    experience.</p>
                                                <p class="crlm-dtls">We
                                                    create lightweight,
                                                    powerful learning
                                                    components that are
                                                    easy to use,
                                                    high-performing, and
                                                    visually engaging —
                                                    perfectly suited for
                                                    any modern web-based
                                                    education platform.
                                                </p>
                                                <div class="course-tab_container2">
                                                    <ul class="course-accordion" id="lectureList">
                                                        <li>
                                                            <a>1 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Basics Of SAP SD on SAP S/4 HANA
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-clm-prv"
                                                                        data-video-url="https://www.youtube.com/embed/ccQdZa8l0zs?si=LUMWsI2AWRsGiYpg">Preview</span>
                                                                    <span class="course-curricolumn-duration">25m
                                                                    </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>2 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Basics Of SAP SD on SAP S/4 HANA
                                                                    Location
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-clm-prv"
                                                                        data-video-url="https://www.youtube.com/embed/i9wgBhmfnQo?si=tGS8bxhpAroSwmeS">Preview</span>
                                                                    <span class="course-curricolumn-duration">1h
                                                                        33s</span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>3 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    O2C (Order to Cash) Process Part-1
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-clm-prv"
                                                                        data-video-url="https://www.youtube.com/embed/Y_iLnnOJ7x0?si=eu3YkQr4jV--diPb">Preview</span>
                                                                    <span class="course-curricolumn-duration">31m
                                                                        33s</span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>4 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    O2C (Order to Cash) Process Part-2
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>5 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Sales Document Structure Part-1
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>6 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Sales Document Structure Part-2
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>7 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    O2C (Order to Cash) cycle Part-1
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>8 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    O2C (Order to Cash) cycle Part-2
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>9 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Sales Order- Processing-BIEL
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>10 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Source Of data Into Sales order Part-1
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>11 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Source Of data Into Sales order Part-2
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>12 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Organizational Structure
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>13 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Organizational Structure Part-2
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>14 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Enterprise Structure Config
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>15 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Understanding Build
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>16 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Enterprises Configuration & Order type
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>17 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Sales Order Processing and Troubleshoot
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>18 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Plant Determiantion & Shipping Point
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>19 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Material Inward
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>20 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Controlling of sales doc type
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>21 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Sales doc type Control
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>22 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Incompletion Log
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>23 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Listing Exclusion
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>24 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Material Determination
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>25 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Route Determination
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>26 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Pricing Part-1
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>27 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Pricing Part-2
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>28 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Pricing Procedure Part-1
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>29 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Pricing Procedure Part-2
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>30 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Consignment Process Part-1
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <a>31 Lectures</a>
                                                            <p>
                                                                <span class="course-preview-left">
                                                                    <i class="bi bi-card-checklist"></i>
                                                                    Consignment Process Part-2
                                                                </span>
                                                                <span class="course-preview-right">
                                                                    <span class="course-curricolumn-duration"><i
                                                                            class="bi bi-lock-fill"></i></span>
                                                                </span>
                                                            </p>
                                                        </li>
                                                    </ul>

                                                    <div class="course-pagination-buttons">
                                                        <button id="loadMore">Load More Lecture</button>
                                                        <button id="showLess" style="display: none;">Show Less
                                                            Lecture</button>
                                                    </div>
                                                </div>

                                                <div id="videoModal" class="course-video-modal">
                                                    <div class="course-video-modal-content">
                                                        <span class="course-close-modal">&times;</span>
                                                        <iframe id="videoIframe" width="100%" height="400"
                                                            frameborder="0" allowfullscreen></iframe>
                                                    </div>
                                                </div>






                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ****************************************************** -->
                            <!-- End Curriculum Section -->
                            <!-- ******************************************************* -->


                            <!-- ****************************************************** -->
                            <!-- Start Review Section -->
                            <!-- ******************************************************* -->
                            <div id="Reviews" class="w3-container city" style="display:none">
                                <div class="row revicws">
                                    <div class="col-lg-4">
                                        <div class="course-rating-box">
                                            <div class="rating-number">
                                                <h3 id="averageRating">0.0</h3>
                                            </div>
                                            <div class="course-rating" id="starIcons">
                                                <i class="bi bi-star" data-star="1"></i>
                                                <i class="bi bi-star" data-star="2"></i>
                                                <i class="bi bi-star" data-star="3"></i>
                                                <i class="bi bi-star" data-star="4"></i>
                                                <i class="bi bi-star" data-star="5"></i>
                                            </div>
                                            <span class="course-review" id="reviewCount">(0 Reviews)</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="review-wrapper" id="reviewBars">
                                            <!-- Rating bars -->
                                            <div class="single-progress-bar" data-stars="5">
                                                <div class="rating-text">5 <i class="bi bi-star-fill"></i></div>
                                                <div class="progress">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>

                                            <div class="single-progress-bar" data-stars="4">
                                                <div class="rating-text">4 <i class="bi bi-star-fill"></i></div>
                                                <div class="progress">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>

                                            <div class="single-progress-bar" data-stars="3">
                                                <div class="rating-text">3 <i class="bi bi-star-fill"></i></div>
                                                <div class="progress">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>

                                            <div class="single-progress-bar" data-stars="2">
                                                <div class="rating-text">2 <i class="bi bi-star-fill"></i></div>
                                                <div class="progress">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>

                                            <div class="single-progress-bar" data-stars="1">
                                                <div class="rating-text">1 <i class="bi bi-star-fill"></i></div>
                                                <div class="progress">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <span class="rating-value">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ****************************************************** -->
                            <!-- End Review Section -->
                            <!-- ******************************************************* -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="courses-details-information wow fadeInRight">
                    <div class="courses-details-img">
                        <img
                            src="assets/images/resource/coursedetailsd_yt_img.png"
                            alt="img">
                        <div class="courses-video-icon">
                            <a class="video-vemo-icon venobox vbox-item"
                                data-vbtype="youtube"
                                data-autoplay="true"
                                href="https://www.youtube.com/embed/ccQdZa8l0zs?si=LUMWsI2AWRsGiYpg"><i
                                    class="bi bi-play-fill"></i></a>
                        </div>
                    </div>
                    <div class="courses-details-content">
                        <div class="courses-details-text-right">
                            <p>Duration</p>
                            <span>50 + Hours Total Length</span>
                        </div>
                        <div class="courses-details-text-right">
                            <p>50 + Hours of High-Quality Video
                                Content</p>

                        </div>
                        <div class="courses-details-text-right">
                            <p>Full 2 Year Access with Future
                                Updates</p>
                        </div>
                        <div class="courses-details-text-right">
                            <p>Access on mobile & laptop</p>
                        </div>
                        <div class="courses-details-text-right">
                            <p>Hands-on projects & real-world
                                examples</p>
                        </div>
                        <div class="courses-details-text-right">
                            <p>Expert support & Q&A sessions</p>
                        </div>
                        <div class="courses-details-text-right">
                            <p>Certificate of completion upon finishing
                                the course</p>
                        </div>

                        <!-- <div class="courses-details-text-right up">
                                    <p>Instructor</p>
                                    <span>Amrit Raj </span>
                                </div> -->
                    </div>
                    <div class="price-button">
                        <a href="#">Price: ₹4,999</a>
                    </div>
                    <div class="price-btn">
                        <a href="https://lms.ezylern.com/course/SAPSDSalesandDistribution-88791/checkout">Buy Now</a>
                    </div>
                    <div class="team-details-text">
                        <h4>Share:</h4>
                    </div>
                    <div class="team-details-social-icon">
                        <ul>
                            <li><a href="#"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i
                                        class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#"><i
                                        class="fab fa-youtube"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End courses-details Section  -->
<!--==================================================-->



<!--==================================================-->
<!-- Start  team Section  -->
<!--==================================================-->

<div class="team-section-course">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title center-title wow fadeInLeft">
                    <h2>Our Most Popular Trainer</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-team-box wow fadeInRight">
                    <div class="team-thumb">
                        <img src="assets/images/resource/team_thumb1.png" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3>Manoj Pandey</h3>
                        <div>
                            <p>SAP Lead Consultant + Trainer</p>
                        </div>

                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team-box wow fadeInUp">
                    <div class="team-thumb">
                        <img src="assets/images/resource/team_thumb3.png" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3>Kumar Sir</h3>
                        <div>
                            <p>SAP Lead Consultant + Trainer</p>
                        </div>
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team-box wow fadeInDown">
                    <div class="team-thumb">
                        <img src="assets/images/resource/team_thumb2.png" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3>Amrit Raj</h3>
                        <div>
                            <p>Technical Lead Consultant + Trainer</p>
                        </div>
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team-box wow fadeInLeft">
                    <div class="team-thumb">
                        <img src="assets/images/resource/team_thumb4.png" alt="thumb">
                    </div>
                    <div class="team-content">
                        <h3>Dinesh Sir</h3>
                        <div>
                            <p>SAP Lead Consultant + Trainer</p>
                        </div>
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End  team Section  -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Related-course Section  -->
<!--==================================================-->

<div class="our_related_course mt-5">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Our Related Courses</h2>
            </div>
            <div class="col-lg-4 col-md-6 popular_course_box">
                <div class="single-popular-box wow fadeInLeft">
                    <div class="popular-thumb">
                        <img src="assets/images/resource/saprap_thumb.svg" alt="thumb">
                    </div>
                    <div class="popular-content">
                        <div class="people-name">
                            <div class="people-img">
                                <img src="assets/images/resource/amrit_sir.png" alt="img">
                            </div>
                            <p>Amrit Raj</p>
                            <div class="star-icon">
                                <p><i class="bi bi-star-fill"></i> (5.0)</p>
                            </div>
                        </div>
                        <h3> <a href="{{route('sapraptraining')}}">SAP RAP – RESTful Application Programming</a></h3>
                        <div class="text-icon">
                            <p class="discount_color"> Discount of 66% applied</p>
                        </div>
                        <div class="price-box">
                            <span class="discounted-price">₹4,999</span>
                            <span class="original-price">₹17,000</span>
                            <div class="note">(For full batch)</div>
                        </div>
                        <div class="button-group">
                            <div class="explore">
                                <p><a href="{{route('sapraptraining')}}">Explore</a></p>
                            </div>
                            <div class="project-button">
                                <a href="https://lms.ezylern.com/course/ABAPOnCloudRAP-85720/checkout">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 popular_course_box">
                <div class="single-popular-box wow fadeInUp">
                    <div class="popular-thumb">
                        <img src="assets/images/resource/sapmm_thumb.svg" alt="thumb">
                    </div>
                    <div class="popular-content">
                        <div class="people-name">
                            <div class="people-img">
                                <img src="assets/images/resource/manoj_sir.png" alt="img">
                            </div>
                            <p>Manoj Pandey</p>
                            <div class="star-icon">
                                <p><i class="bi bi-star-fill"></i> (5.0)</p>
                            </div>
                        </div>
                        <h3> <a href="{{route('mmsapraptraining')}}"> MM – Materials Management</a></h3>
                        <div class="text-icon">
                            <p> Discount of 62% applied</p>
                        </div>
                        <div class="price-box">
                            <span class="discounted-price">₹4,999</span>
                            <span class="original-price">₹16,000</span>
                            <div class="note">(For full batch)</div>
                        </div>
                        <div class="button-group">
                            <div class="explore">
                                <p><a href="{{route('mmsapraptraining')}}">Explore</a></p>
                            </div>
                            <div class="project-button">
                                <a href="https://lms.ezylern.com/course/SAPMM-MaterialsManagement-82845/checkout">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 popular_course_box">
                <div class="single-popular-box wow fadeInUp">
                    <div class="popular-thumb">
                        <img src="assets/images/resource/sapfico_thumb.svg" alt="thumb">
                    </div>
                    <div class="popular-content">
                        <div class="people-name">
                            <div class="people-img">
                                <img src="assets/images/resource/kumar_sir.png" alt="img">
                            </div>
                            <p>Kumar Sir</p>
                            <div class="star-icon">
                                <p><i class="bi bi-star-fill"></i> (5.0)</p>
                            </div>
                        </div>
                        <h3><a href="{{route('ficosapraptraining')}}">FICO – Financial Accounting and Controlling</a></h3>
                        <div class="text-icon">
                            <p> Discount of 62% applied</p>
                        </div>
                        <div class="price-box">
                            <span class="discounted-price">₹4,999</span>
                            <span class="original-price">₹16,000</span>
                            <div class="note">(For full batch)</div>
                        </div>
                        <div class="button-group">
                            <div class="explore">
                                <p><a href="{{route('ficosapraptraining')}}">Explore</a></p>
                            </div>
                            <div class="project-button">
                                <a href="https://lms.ezylern.com/course/SAPFICOFinancialAccountingandControlling-88425/checkout">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--==================================================-->
<!-- End Related-course Section  -->
<!--==================================================-->


<!--==================================================-->
<!-- Start  Certificate Section  -->
<!--==================================================-->

<div class="testimonial-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="courses-details-title wow fadeInRight">
                    <h2>SAP Course Certification</h2>
                    <p><strong>Master SAP Skills & Earn Your SAP Professional Certificate</strong></p>
                </div>
                <div class="courses-details-list wow fadeInLeft">
                    <ul>
                        <li><i class="bi bi-check"></i><span>Industry-recognized certificate by Ezy Lern, awarded upon successful course completion.</span></li>
                        <li><i class="bi bi-check"></i><span>Learn from SAP-Certified Trainers and Industry Experts with hands-on training sessions.</span></li>
                        <li><i class="bi bi-check"></i><span>Receive career support and placement guidance to help you step confidently into the SAP job market.</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-thumb wow fadeInLeft">
                    <img src="assets/images/resource/sd_certification.webp" alt="certificate">
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End  Certificate Section  -->
<!--==================================================-->



<!--==================================================-->
<!-- Start  Bonus Section  -->
<!--==================================================-->

<div class="bonus-categorie-section">
    <div class="bonus-container container">
        <div class="bonus-row row">
            <div class="col-lg-12 text-center">
                <div class="bonus-section-title center-title wow fadeInLeft">
                    <h2>Bonus Assessment Of SAP SD Course</h2>
                </div>
            </div>
        </div>
        <div class="bonus-row row bonus-card-assessment">

            <!-- Category 1 -->

            <div class="col-lg-3 col-md-6">
                <div class="bonus-single-categorie-box">
                    <div class="bonus-categorie-img">
                        <img src="assets/images/resource/bonus1.jpg" alt="Bunus Img">
                    </div>
                    <div class="bonus_text_content">
                        <div class="bonus-categorie-content">
                            <h4>Bonus 1</h4>
                            <p>Assessment (4 projects)</p>
                            <span>A collection of sap mm certification questions for exam preparation.</span>
                        </div>
                        <div class="bonus-price-box">
                            <span class="bonus-cut-price">5000 INR</span>
                            <span class="bonus-free-price">Free</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category 2 -->

            <div class="col-lg-3 col-md-6">
                <div class="bonus-single-categorie-box">
                    <div class="bonus-categorie-img">
                        <img src="assets/images/resource/bonus2.jpg" alt="Bunus Img">
                    </div>
                    <div class="bonus_text_content">
                        <div class="bonus-categorie-content">
                            <h4>Bonus 2</h4>
                            <p>Interview Questions</p>
                            <span>A collection of sap mm certification questions for exam preparation.</span>
                        </div>
                        <div class="bonus-price-box">
                            <span class="bonus-cut-price">500 INR</span>
                            <span class="bonus-free-price">Free</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category 3 -->

            <div class="col-lg-3 col-md-6">
                <div class="bonus-single-categorie-box">
                    <div class="bonus-categorie-img">
                        <img src="assets/images/resource/bonus3.jpg" alt="Bunus Img">
                    </div>
                    <div class="bonus_text_content">
                        <div class="bonus-categorie-content">
                            <h4>Bonus 3</h4>
                            <p> Configuration Documents </p>
                            <span>Detailed guides covering essential sap mm configurations..</span>
                        </div>
                        <div class="bonus-price-box">
                            <span class="bonus-cut-price">5000 INR</span>
                            <span class="bonus-free-price">Free</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category 4 -->

            <div class="col-lg-3 col-md-6">
                <div class="bonus-single-categorie-box">
                    <div class="bonus-categorie-img">
                        <img src="assets/images/resource/bonus4.jpg" alt="Bunus Img">
                    </div>
                    <div class="bonus_text_content">
                        <div class="bonus-categorie-content">
                            <h4>Bonus 4</h4>
                            <p>Cheat Sheet</p>
                            <span>A handy guide summarizing key sap mm concepts and t-codes.</span>
                        </div>
                        <div class="bonus-price-box">
                            <span class="bonus-cut-price">5000 INR</span>
                            <span class="bonus-free-price">Free</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category 5 -->

            <div class="col-lg-3 col-md-6">
                <div class="bonus-single-categorie-box">
                    <div class="bonus-categorie-img">
                        <img src="assets/images/resource/bonus5.jpg" alt="Bunus Img">
                    </div>
                    <div class="bonus_text_content">
                        <div class="bonus-categorie-content">
                            <h4>Bonus 5</h4>
                            <p>Certification (4 Badges)</p>
                            <span>Earn a certification and badge to showcase your expertise.</span>
                        </div>
                        <div class="bonus-price-box">
                            <span class="bonus-cut-price">500 INR</span>
                            <span class="bonus-free-price">Free</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category 6 -->

            <div class="col-lg-3 col-md-6">
                <div class="bonus-single-categorie-box">
                    <div class="bonus-categorie-img">
                        <img src="assets/images/resource/bonus6.jpg" alt="Bunus Img">
                    </div>
                    <div class="bonus_text_content">
                        <div class="bonus-categorie-content">
                            <h4>Bonus 6</h4>
                            <p>Monthly Q/A Session with Trainers</p>
                            <span>Live q&a sessions for doubt resolution and expert insights.</span>
                        </div>
                        <div class="bonus-price-box">
                            <span class="bonus-cut-price">5000 INR</span>
                            <span class="bonus-free-price">Free</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category 7 -->

            <div class="col-lg-3 col-md-6">
                <div class="bonus-single-categorie-box">
                    <div class="bonus-categorie-img">
                        <img src="assets/images/resource/bonus7.png" alt="Bunus Img">
                    </div>
                    <div class="bonus_text_content">
                        <div class="bonus-categorie-content">
                            <h4>Bonus 7</h4>
                            <p>List Of Company Hiring SAP</p>
                            <span> Companies currently hiring sap professionals
                            </span>
                        </div>
                        <div class="bonus-price-box">
                            <span class="bonus-cut-price">5000 INR</span>
                            <span class="bonus-free-price">Free</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--==================================================-->
<!-- End  Bonus Section  -->
<!--==================================================-->


<!--==================================================-->
<!-- Start  Student Testimonial Section  -->
<!--==================================================-->


<div class="Student-review-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title center-title wow fadeInLeft">
                    <h2> Students Testimonials</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testi-list owl-carousel">
                <div class="col-lg-12">
                    <div class="single-testimonial-box">
                        <div class="testimonial-content">
                            <div class="testi-desc">
                                <p>"I enrolled in the SAP SD online course, and it completely transformed my understanding and knowledge. The instructors were industry experts, and the classes were very interactive." </p>
                            </div>
                            <div class="testi-people">
                            </div>
                            <div class="testi-people-name">
                                <p>Kuldeep Kulkarni</p>
                                <div class="testi-star-icon">
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                </div>
                            </div>
                            <div class="testi-shape">
                                <img src="assets/images/resource/quote-shape.png" alt="shape">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-testimonial-box">
                        <div class="testimonial-content">
                            <div class="testi-desc">
                                <p>"As someone with a non-technical background, I was nervous at first, but the support team was very helpful, and mentors were always there to help. Highly recommend it for freshers as well as professionals." </p>
                            </div>
                            <div class="testi-people">
                            </div>
                            <div class="testi-people-name">
                                <p>Amrita Naidu</p>
                                <div class="testi-star-icon">
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                </div>
                            </div>
                            <div class="testi-shape">
                                <img src="assets/images/resource/quote-shape.png" alt="shape">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-testimonial-box">
                        <div class="testimonial-content">
                            <div class="testi-desc">
                                <p>"The SAP SD training course was very detailed and up-to-date, with the best instructors providing real-time case studies to enhance confidence and skills." </p>
                            </div>
                            <div class="testi-people">
                            </div>
                            <div class="testi-people-name">
                                <p>Harshita K</p>
                                <div class="testi-star-icon">
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                </div>
                            </div>
                            <div class="testi-shape">
                                <img src="assets/images/resource/quote-shape.png" alt="shape">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-testimonial-box">
                        <div class="testimonial-content">
                            <div class="testi-desc">
                                <p>"As a full-time employee, recorded sessions gave me flexibility, which I needed. The quizzes and hands-on experience helped increase learning." </p>
                            </div>
                            <div class="testi-people">
                            </div>
                            <div class="testi-people-name">
                                <p>Shweta Mehta</p>
                                <div class="testi-star-icon">
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                </div>
                            </div>
                            <div class="testi-shape">
                                <img src="assets/images/resource/quote-shape.png" alt="shape">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-testimonial-box">
                        <div class="testimonial-content">
                            <div class="testi-desc">
                                <p>"I have tried other platforms before, but this one helped me a lot. The trainers and instructors explained everything in detail and a structured manner." </p>
                            </div>
                            <div class="testi-people">
                            </div>
                            <div class="testi-people-name">
                                <p>Manoj Agrawal</p>
                                <div class="testi-star-icon">
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                    <p><i class="bi bi-star-fill"></i></p>
                                </div>
                            </div>
                            <div class="testi-shape">
                                <img src="assets/images/resource/quote-shape.png" alt="shape">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End Student Testimonial Section  -->
<!--==================================================-->


<!--==================================================-->
<!-- FAQ Section  -->
<!--==================================================-->

<div class="course-faq-section up">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="course-faq-section-title center-title wow fadeInLeft">
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="Home" class="tabcontent">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div id="tab1" class="course-faq-tab_content">
                                <ul class="course-faq-accordion wow fadeInLeft">
                                    <li>
                                        <h3>Is SAP SD easy to learn?</h3>
                                        <p>Yes, SAP SD is relatively easy to learn for those who are from a non-technical background. </p>
                                    </li>
                                    <li>
                                        <h3>How much does an SAP SD course cost</h3>
                                        <p>The SAP SD online course is easily accessible for all individuals. The average cost ranges from INR 4,999 to 5,999/-</p>
                                    </li>
                                    <li>
                                        <h3>Is SAP SD a good career option? </h3>
                                        <p>Yes, it is a good career option that will boost your skills and knowledge and will help in growth and good earnings. </p>
                                    </li>
                                    <li>
                                        <h3>Is your SAP SD online training conducted live or through recorded videos?</h3>
                                        <p>We provide both SAP SD online training, conducted live and through recorded videos, allowing real-time interaction with a flexible learning experience.</p>
                                    </li>
                                    <li>
                                        <h3>What is the duration of the SAP SD online training program?</h3>
                                        <p>The duration of the SAP SD online training course takes 3 to 6 months.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div id="tab2" class="course-faq-tab_content">
                                <ul class="course-faq-accordion wow fadeInRight">
                                    <li>
                                        <h3>Do you offer job assistance after completing the SAP SD online course?</h3>
                                        <p>Yes, we provide job assistance after completion of the SAP online course and other career-related support as well.</p>
                                    </li>
                                    <li>
                                        <h3>What makes your SAP SD online course better than free YouTube tutorials?</h3>
                                        <p>Our SAP SD online course provides comprehensive learning and practical exposure to all participants and hands-on experience on actual SAP systems.</p>
                                    </li>
                                    <li>
                                        <h3>What tools and platforms will I learn to use during the SAP SD training?</h3>
                                        <p>During SAP SD online training, you will learn different tools like S/4HANA, ABAP, and HANA. </p>
                                    </li>
                                    <li>
                                        <h3>What is the difference between SAP SD and SAP MM, and SAP FICO?</h3>
                                        <p>They are all SAP modules that handle different aspects of business processes.</p>
                                    </li>
                                    <li>
                                        <h3>Do you offer personalized mentorship or 1-on-1 doubt-clearing sessions?</h3>
                                        <p>Yes, we provide both personalized mentorship and 1-on-1 doubt-clearing sessions to provide individualized support. </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--==================================================-->
<!-- End FAQ Section  -->
<!--==================================================-->

<!--==================================================-->

<!--==================================================-->

<!--==================================================-->
<!-- Start Search Popup Area -->
<!--==================================================-->

<div class="search-popup">
    <button class="close-search style-two"><i
            class="fas fa-times"></i></button>
    <button class="close-search"><i
            class="fas fa-arrow-up"></i></button>
    <form method="post" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value
                placeholder="Search Here" required>
            <button type="submit"><i
                    class="fas fa-search"></i></button>
        </div>
    </form>
</div>

<!--==================================================-->
<!-- End Search Popup Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start scrollup section Section -->
<!--==================================================-->

<div class="prgoress_indicator active-progress">
    <svg class="progress-circle svg-content" width="100%"
        height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 270.456;"></path>
    </svg>
</div>

<!--==================================================-->
<!-- Start scrollup section Section -->
<!--==================================================-->

<script>
    function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";
    }
</script>

<script>
    //curseer animation
    var curser = document.querySelector(".curser");
    var curser2 = document.querySelector(".curser2");
    document.addEventListener("mousemove", function(e) {
        curser.style.cssText = curser2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;";
    });
</script>

<!--*********************Start YouTube Video Script****************** -->

<script>
    document.addEventListener("click", (e) => {
        // ✅ Handle preview click
        if (e.target.classList.contains("clm-prv") || e.target.classList.contains("course-clm-prv")) {
            const videoUrl = e.target.getAttribute("data-video-url");
            const iframe = document.getElementById("videoIframe");
            const modal = document.getElementById("videoModal");

            if (videoUrl && iframe && modal) {
                iframe.src = videoUrl;
                modal.style.display = "flex";
            }
        }

        // ✅ Handle close via cross or outside click
        if (
            e.target.id === "closePreview" ||
            e.target.id === "videoModal"
        ) {
            const iframe = document.getElementById("videoIframe");
            const modal = document.getElementById("videoModal");

            if (iframe && modal) {
                iframe.src = "";
                modal.style.display = "none";
            }
        }
    });
</script>
<!--*********************End YouTube Video Script****************** -->


<!--*********************Start FAQ Script****************** -->


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const headers = document.querySelectorAll(".course-faq-accordion h3");

        function closeAllParagraphs() {
            document.querySelectorAll(".course-faq-accordion h3").forEach(h => h.classList.remove("active"));
            document.querySelectorAll(".course-faq-accordion p").forEach(p => {
                p.classList.remove("show");
                p.style.maxHeight = null;
            });
        }

        headers.forEach(header => {
            header.addEventListener("click", () => {
                const isActive = header.classList.contains("active");
                const content = header.nextElementSibling;

                // Close all first
                closeAllParagraphs();

                if (!isActive) {
                    header.classList.add("active");
                    content.classList.add("show");

                    // Get scrollHeight and set maxHeight to enable smooth transition
                    const fullHeight = content.scrollHeight + "px";
                    content.style.maxHeight = fullHeight;
                }
            });
        });

        // Optional: Equal height for all h3 based on tallest one
        function setEqualHeadingHeight() {
            let maxHeight = 0;

            headers.forEach(h => {
                h.style.height = 'auto'; // Reset first
                const height = h.scrollHeight;
                if (height > maxHeight) maxHeight = height;
            });

            headers.forEach(h => h.style.height = maxHeight + "px");
        }

        setEqualHeadingHeight();

        window.addEventListener("resize", () => {
            clearTimeout(window.resizeTimeout);
            window.resizeTimeout = setTimeout(setEqualHeadingHeight, 100);
        });
    });
</script>




<!--*********************End FAQ Script****************** -->


<!--*********************Review JavaScript****************** -->
<script>
    // Admin/backend-provided fixed ratings
    const externalRatings = {
        5: 18,
        4: 4,
        3: 2,
        2: 1,
        1: 0
    };

    // User rating saved locally (1 vote only)
    let userRating = parseInt(localStorage.getItem("userRating")) || null;

    // Track user's vote
    const internalRatings = {
        5: userRating === 5 ? 1 : 0,
        4: userRating === 4 ? 1 : 0,
        3: userRating === 3 ? 1 : 0,
        2: userRating === 2 ? 1 : 0,
        1: userRating === 1 ? 1 : 0
    };

    // Merge user rating with backend ratings
    function getCombinedRatings() {
        const combined = {};
        for (let i = 1; i <= 5; i++) {
            combined[i] = (externalRatings[i] || 0) + (internalRatings[i] || 0);
        }
        return combined;
    }

    // Update star UI and progress bars
    function updateReviewLayout() {
        const ratings = getCombinedRatings();
        const total = Object.values(ratings).reduce((a, b) => a + b, 0);
        const totalScore = Object.entries(ratings).reduce((sum, [star, count]) => sum + (star * count), 0);
        const avg = total > 0 ? (totalScore / total).toFixed(1) : "0.0";

        document.getElementById("averageRating").textContent = avg;
        document.getElementById("reviewCount").textContent = `(${total} Reviews)`;

        // Fill stars based on user selection
        const stars = document.querySelectorAll("#starIcons i");
        stars.forEach((star, index) => {
            star.className = userRating && index < userRating ? "bi bi-star-fill" : "bi bi-star";
        });

        // Update each progress bar
        document.querySelectorAll(".single-progress-bar").forEach(bar => {
            const star = bar.getAttribute("data-stars");
            const count = ratings[star];
            const percent = total > 0 ? (count / total) * 100 : 0;

            bar.querySelector(".progress-bar").style.width = percent + "%";
            bar.querySelector(".rating-value").textContent = count;
        });
    }

    // Handle star clicks
    document.querySelectorAll("#starIcons i").forEach(star => {
        star.addEventListener("click", () => {
            const newRating = parseInt(star.getAttribute("data-star"));

            // Clear old rating
            if (userRating) internalRatings[userRating] = 0;

            // Set new rating
            internalRatings[newRating] = 1;
            userRating = newRating;

            // Save to localStorage
            localStorage.setItem("userRating", userRating.toString());

            updateReviewLayout();
        });
    });

    // Initial update
    updateReviewLayout();
</script>
<!--*********************Review JavaScript****************** -->


<!--*********************Curriculum Javascript****************** -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const allItems = document.querySelectorAll("#lectureList li");
        const loadMoreBtn = document.getElementById("loadMore");
        const showLessBtn = document.getElementById("showLess");
        let visibleCount = 10; // Default visible items

        function updateVisibleItems() {
            allItems.forEach((li, index) => {
                li.style.display = index < visibleCount ? "block" : "none";
                if (index >= visibleCount) {
                    li.classList.remove("open");
                }
            });

            // Show Load More button only if more items are hidden
            loadMoreBtn.style.display = visibleCount < allItems.length ? "inline-block" : "none";

            // ✅ Fix: Show Less button only if more than 10 are visible
            showLessBtn.style.display = visibleCount > 10 ? "inline-block" : "none";
        }

        // Show all on Load More click
        loadMoreBtn.addEventListener("click", () => {
            visibleCount = allItems.length;
            updateVisibleItems();
        });

        // Collapse to first 10 on Show Less
        showLessBtn.addEventListener("click", () => {
            visibleCount = 10;
            updateVisibleItems();
            loadMoreBtn.scrollIntoView({
                behavior: "smooth",
                block: "center"
            });
        });

        updateVisibleItems(); // Initialize

        // Accordion logic
        document.querySelectorAll(".course-accordion li").forEach(item => {
            const header = item.querySelector("a");

            if (header) {
                header.addEventListener("click", (e) => {
                    e.preventDefault();

                    const isOpen = item.classList.contains("open");

                    // Close all
                    document.querySelectorAll(".course-accordion li").forEach(li => {
                        li.classList.remove("open");
                    });

                    // Toggle current
                    if (!isOpen) {
                        item.classList.add("open");
                    }
                });
            }
        });
    });
</script>
<!--*********************Curriculum Javascript****************** -->


<!--*********************Bonus Javascript****************** -->

<script>
    function setEqualHeight() {
        const boxes = document.querySelectorAll('.bonus-single-categorie-box');
        let maxHeight = 0;

        boxes.forEach(box => {
            box.style.height = "auto"; // reset first
            if (box.offsetHeight > maxHeight) {
                maxHeight = box.offsetHeight;
            }
        });

        boxes.forEach(box => {
            box.style.height = maxHeight + "px";
        });
    }

    window.addEventListener("load", function() {
        // Wait for layout/rendering cycle
        requestAnimationFrame(() => {
            setTimeout(setEqualHeight, 100); // 100ms buffer for content to appear
        });
    });

    window.addEventListener("resize", setEqualHeight);
</script>

<!--*********************Bonus Javascript****************** -->

@endsection