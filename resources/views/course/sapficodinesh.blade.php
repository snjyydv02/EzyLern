@extends('layouts.app')


{{-- ✅ SEO Meta Tags --}}
@section('meta_title', 'SAP FICO S/4HANA Course with Certification Online – Ezy Lern')
@section('meta_description', 'Master SAP FICO on S/4HANA with expert-led online training, real-time projects & certification. Build job-ready finance skills at Ezy Lern.')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())

{{-- ✅ Open Graph (Facebook, LinkedIn, WhatsApp) --}}
@section('og_type', 'website')
@section('og_title', 'SAP FICO S/4HANA Course with Certification Online – Ezy Lern')
@section('og_description', 'Master SAP FICO on S/4HANA with expert-led online training, real-time projects & certification. Build job-ready finance skills at Ezy Lern.')
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
                        <h1> SAP FICO S4HANA - PRODUCT COSTING PROCESS</h1>
                    </div>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>Courses</li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>SAP FICO manages financial data, accounting, and financial reporting in SAP ERP.
                    </ul>
                </div>
            </div>
        </div>
        <div class="breadcumb-all-shape">
            <div class="breadcumb-shape">
                <img src="assets/images/breadcumb/banner-shape.png" alt="shape">
            </div>
            <div class="breadcumb-shape1">
                <img src="assets/images/breadcumb/banner-shape1.png" alt="shape">
            </div>
            <div class="breadcumb-shape2">
                <img src="assets/images/breadcumb/banner-shape2.png" alt="shape">
            </div>
            <div class="breadcumb-shape3">
                <img src="assets/images/breadcumb/banner-shape3.png" alt="shape">
            </div>
            <div class="breadcumb-shape4">
                <img src="assets/images/breadcumb/banner-shape4.png" alt="shape">
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
                        <img src="assets/images/resource/coursedetailsficoone_thumb.png" alt="thumb">
                    </div>
                    <div class="courses-details-content">

                        <!-- Modal for video -->
                        <div class="video-modal" id="videoModal">
                            <div class="close-btn" id="closePreview">&times;</div>
                            <div class="video-modal-content">
                                <iframe id="videoIframe" src="" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>

                        <!-- ********************** -->
                        <div class="tab-courses wow fadeInRight">
                            <div class="tab-active">
                                <div class="w3-bar w3-black">
                                    <button class="w3-bar-item w3-button" onclick="openCity('Overview')">Overview</button>
                                    <button class="w3-bar-item w3-button" onclick="openCity('Curriculum')">Curriculum</button>
                                    <button class="w3-bar-item w3-button" onclick="openCity('Instructor')">Instructor</button>
                                    <button class="w3-bar-item w3-button" onclick="openCity('Reviews')">Reviews</button>
                                </div>
                            </div>
                            <div id="Overview" class="w3-container city wow fadeInLeft">
                                <div class="courses-details-text">
                                    <h3>Course Description</h3>
                                    <p>In this SAP CO course, you will learn the end-to-end business process flow of Product Costing using MTS scenario in SAP S4HANA 2023 version. <br><br>
                                        The course covers key topics like Types of Costing, Material master set up with multiple valuation views from costing point of view, production version, standard cost estimation, creation of PP master data like Bill of Material and Master recipe, entire production cycle which includes Order creation, goods issue, order cost analysis, activity confirmation, production goods receipt, executing all month end steps and settlement. You’ll also explore cost centers accounting, activity type rate planning & reporting. By the end of this course, you'll be equipped with a great understanding of product costing business process flow from planning, execution and settlement point of view. Material ledger functionality is also covered in great details.
                                    </p>
                                </div>

                                <div class="courses-details-title wow fadeInRight">
                                    <h3>What You’ll Learn From This Course</h3>
                                    <p>In this SAP Product costing course, you will learn management accounting and business processes, including required master data, process steps, analysis and reports. The course focuses on optimizing financial and managerial reporting for effective decision-making.</p>
                                </div>
                                <div class="courses-details-list wow fadeInLeft">
                                    <ul>
                                        <li><i class="bi bi-check"></i><span>Manage to create master data which are required for product costing process steps. </span></li>
                                        <li><i class="bi bi-check"></i><span>Planning conversion cost, material cost, labour cost to enable standard costing.</span></li>
                                        <li><i class="bi bi-check"></i><span>Perform SAP S4HANA product costing end to end process steps with proper business case analysis and reporting.</span></li>
                                        <li><i class="bi bi-check"></i><span>Actual costing (Material Ledger) and final settlement to see variance in standard costing and actual costing. </span></li>
                                        <li><i class="bi bi-check"></i><span>This course gives you complete understanding of SAP S4HANA product costing from process point of view. </span></li>
                                    </ul>
                                </div>
                                <div class="courses-details-text-left wow fadeInLeft">
                                    <h3>Certification</h3>
                                    <p>
                                        We are pleased to award you the Certificate of Completion for finishing the SAP FICO course. Congratulations on your achievement and best wishes for your success!</p>

                                    <img src="assets/images/resource/fico_certification.webp" alt="">
                                </div>
                            </div>
                            <div id="Curriculum" class="w3-container city" style="display:none">
                                <div class="tab">
                                    <div class="tab_content">
                                        <div class="tabs_item" style="display: block;">
                                            <div class="course-curriculum">
                                                <h4>Getting Started with Uniaro</h4>
                                                <p class="crlm-dtls">At EzyLearn, we’re committed to shaping the future of education through cutting-edge Course design and seamless functionality — ensuring every tool and feature enhances the learner experience.</p>
                                                <p class="crlm-dtls">We create lightweight, powerful learning components that are easy to use, high-performing, and visually engaging — perfectly suited for any modern web-based education platform.
                                                </p>
                                                <div class="tab_container2">
                                                    <div id="tab1" class="tab_content">
                                                        <ul class="accordion up" id="lectureList">
                                                            <li>
                                                                <a class="active">1 Lectures</a>
                                                                <p class="preview_btn">
                                                                    <i class="bi bi-card-checklist"></i> SAP FICO S/4HANA Product Costing Process Intro
                                                                    <span class="clm-prv" data-video-url="https://www.youtube.com/embed/ZdN3U5N28cI?si=RctETQ3uIJc52MzX">Preview</span>
                                                                    <span class="curricolumn-duration">10m 17s</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a class="active">2 Lectures</a>
                                                                <p class="preview_btn">
                                                                    <i class="bi bi-card-checklist"></i> Types of Costs in S/4HANA Product Costing
                                                                    <span class="clm-prv" data-video-url="https://www.youtube.com/embed/nHFZ9_FOAio?si=huqGA_GdYSiM8wyw">Preview</span>
                                                                    <span class="curricolumn-duration">20m 39s</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a class="active">3 Lectures</a>
                                                                <p class="preview_btn">
                                                                    <i class="bi bi-card-checklist"></i> Material master Data S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a class="active">4 Lectures</a>
                                                                <p class="preview_btn">
                                                                    <i class="bi bi-card-checklist"></i>Create BOM and Master recipe S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                                </p>
                                                            </li>

                                                            <li>
                                                                <a>5 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i> VERSION and ACTIVITY RATE S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>6 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i>Standard Cost Estimation S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>7 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i> Material Cost Analysis S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>8 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i> Create Process Order S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>9 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i> Goods issue to Process Order S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>10 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i> Goods issue analysis S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>11 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i>Activity Confirmation S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>12 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i>Ds Sap Fico Classes S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>13 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i>Ds Sap Fico Classes S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>14 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i>Ds Sap Fico Classes S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>15 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i>Ds Sap Fico Classes S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>16 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i>Ds Sap Fico Classes S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>17 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i>Ds Sap Fico Classes S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>18 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i>Ds Sap Fico Classes S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>19 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i>Ds Sap Fico Classes S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <a>20 Lectures</a>
                                                                <p> <i class="bi bi-card-checklist"></i>Ds Sap Fico Classes S/4HANA Product Costing
                                                                    <span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
                                                                </p>
                                                            </li>
                                                        </ul>
                                                        <div class="pagination-buttons">
                                                            <button id="prevBtn">Prev</button>
                                                            <button id="nextBtn">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Instructor" class="w3-container city" style="display:none">
                                <div class="course-author-warpper">
                                    <div class="course-author-img">
                                        <img src="assets/images/resource/team_thumb4.png" alt="">
                                    </div>
                                    <div class="author-content">
                                        <h4><a href="#">Dinesh Sir</a></h4>
                                        <span>SAP Lead Consultant + Trainer</span>
                                        <div class="social-list">
                                            <ul>
                                                <li><a href="#"> <i class="fab fa-linkedin-in"></i> </a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="courses-details-information wow fadeInRight">
                    <div class="courses-details-img">
                        <img src="assets/images/resource/coursedetailficoone_yt_img.webp" alt="img">
                        <div class="courses-video-icon">
                            <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/embed/ZdN3U5N28cI?si=RctETQ3uIJc52MzX"><i class="bi bi-play-fill"></i></a>
                        </div>
                    </div>
                    <div class="courses-details-content">
                        <div class="courses-details-text-right">
                            <p>Duration</p>
                            <span>6 Hours + Total Length</span>
                        </div>
                        <div class="courses-details-text-right">
                            <p> 6 + hours of high-quality video content</p>

                        </div>
                        <div class="courses-details-text-right">
                            <p>Full 2 year access with future updates</p>
                        </div>
                        <div class="courses-details-text-right">
                            <p> Access on mobile & laptop</p>
                        </div>
                        <div class="courses-details-text-right">
                            <p> Hands-on projects & real-world examples</p>
                        </div>
                        <div class="courses-details-text-right">
                            <p>Expert support & Q&A sessions</p>
                        </div>
                        <div class="courses-details-text-right">
                            <p>Certificate of completion upon finishing the course</p>
                        </div>

                        <div class="courses-details-text-right up">
                            <p>Instructor</p>
                            <span>Dinesh Sir</span>
                        </div>
                    </div>
                    <div class="price-button">
                        <a href="#">Price: ₹999</a>
                    </div>
                    <div class="price-btn">
                        <a href="https://lms.ezylern.com/course/SAPFICOFinancialAccountingandControlling-89088/checkout" class="">Buy Now</a>
                    </div>
                    <div class="team-details-text">
                        <h4>Share:</h4>
                    </div>
                    <div class="team-details-social-icon">
                        <ul>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>

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
<!-- Start Related-course Section  -->
<!--==================================================-->

<div class="our_related_course">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h1>Our Related Courses</h1>
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
<!-- Start Bonus-Card Section  -->
<!--==================================================-->

<div class="bonus-section">
    <div class="custom-main-wrapper">
        <div class="custom-bonus-card custom-bonus-card-1">
            <h2 class="custom-bonus-title">Bonus 1</h2>
            <h3 class="custom-bonus-subtitle">Assessment (4 projects)</h3>

            <div class="custom-bonus-image-container">
                <img src="https://srijaninstitute.com/public/images/vedio/certficatioquestion.jpg" alt="Video Solutions" class="custom-bonus-image" />

            </div>
            <p class="custom-bonus-price"><span class="custom-original-price">5000 INR </span> <span class="custom-discounted-price">Free</span></p>
        </div>

        <div class="custom-bonus-card custom-bonus-card-2">
            <h2 class="custom-bonus-title">Bonus 2</h2>
            <h3 class="custom-bonus-subtitle">Interview Questions</h3>

            <div class="custom-bonus-image-container">
                <img src="https://srijaninstitute.com/public/images/vedio/certficatioquestion.jpg" alt="Video Solutions" class="custom-bonus-image" />
            </div>
            <p class="custom-bonus-price"><span class="custom-original-price">500 INR</span> <span class="custom-discounted-price">Free</span></p>
        </div>
        <a href="https://ezylern.com/job-portal" target="_blank" class="custom-bonus-link">
            <div class="custom-bonus-card custom-bonus-card-3">
                <h2 class="custom-bonus-title">Bonus 3</h2>
                <h3 class="custom-bonus-subtitle"> Configuration Documents </h3>

                <div class="custom-bonus-image-container">
                    <img src="https://srijaninstitute.com/public/images/vedio/configurationdoumnets.jpg" alt="Video Solutions" class="custom-bonus-image" />
                </div>
                <p class="custom-bonus-price"><span class="custom-original-price">5000</span> <span class="custom-discounted-price">Free</span></p>
            </div>
        </a>
    </div>
    <div class="custom-main-wrapper">
        <div class="custom-bonus-card custom-bonus-card-1">
            <h2 class="custom-bonus-title">Bonus 4</h2>
            <h3 class="custom-bonus-subtitle">Cheat Sheet</h3>

            <div class="custom-bonus-image-container">
                <img src="https://srijaninstitute.com/public/images/vedio/cheat sheet.jpg" alt="Video Solutions" class="custom-bonus-image" />
            </div>
            <p class="custom-bonus-price"><span class="custom-original-price">5000 INR </span> <span class="custom-discounted-price">Free</span></p>
        </div>

        <div class="custom-bonus-card custom-bonus-card-2">
            <h2 class="custom-bonus-title">Bonus 5</h2>
            <h3 class="custom-bonus-subtitle">Certification (4 Badges)</h3>

            <div class="custom-bonus-image-container">
                <img src="https://srijaninstitute.com/public/images/vedio/digital.jpg" alt="Cheatsheets" class="custom-bonus-image" />
            </div>
            <p class="custom-bonus-price"><span class="custom-original-price">500 INR</span> <span class="custom-discounted-price">Free</span></p>
        </div>

        <div class="custom-bonus-card custom-bonus-card-3">
            <h2 class="custom-bonus-title">Bonus 6</h2>
            <h3 class="custom-bonus-subtitle"> Monthly Q/A Session with Trainers </h3>

            <div class="custom-bonus-image-container">
                <img src="https://srijaninstitute.com/public/images/vedio/monthlyqa.jpg" alt="Cheatsheets" class="custom-bonus-image" />
            </div>
            <p class="custom-bonus-price"><span class="custom-original-price">5000</span> <span class="custom-discounted-price">Free</span></p>
        </div>

        <div class="custom-bonus-card custom-bonus-card-3">
            <h2 class="custom-bonus-title">Bonus 7</h2>
            <h3 class="custom-bonus-subtitle"> List Of Company Hiring SAP</h3>
            <div class="custom-bonus-image-container">
                <img src="assets/images/resource/bonus_7.png" alt="Cheatsheets" class="custom-bonus-image" />
            </div>
            <p class="custom-bonus-price"><span class="custom-original-price">5000</span> <span class="custom-discounted-price">Free</span></p>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End Bonus-Card  Section  -->
<!--==================================================-->






<!--==================================================-->
<!-- FAQ Section  -->
<!--==================================================-->


<div class="faq-section up">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title center-title wow fadeInLeft">
                    <h5>FAQ QUESTIONS</h5>
                    <h1>Get SAP FICO Common Answers From Here</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="Home" class="tabcontent">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <!-- Start Accordion -->
                            <div id="tab1" class="tab_content">
                                <ul class="accordion wow fadeInLeft">
                                    <li>
                                        <a class=""><span>What is SAP FICO?</span></a>
                                        <p style="display: none;">SAP FICO stands for Financial Accounting (FI) and Controlling (CO). It is a core module in SAP ERP that helps businesses manage financial data and generate accurate financial statements. FI focuses on external financial reporting, while CO deals with internal cost management. </p>
                                    </li>
                                    <li>
                                        <a class=""><span>What is a Posting Period in SAP FICO?</span></a>
                                        <p style="display: none;">A Posting Period is a specific time frame during which financial transactions can be posted. Typically, a fiscal year is divided into multiple posting periods (like months), and each period must be open for posting. You can open and close posting periods as needed to control financial entries.</p>
                                    </li>
                                    <li>
                                        <a><span> What is a Field Status Group in SAP FICO?</span></a>
                                        <p>A Field Status Group controls the fields that appear during document entry in accounting. It determines whether fields are required, optional, hidden, or suppressed. This helps in maintaining consistent data entry standards and controlling which information must be captured.</p>
                                    </li>
                                    <li>
                                        <a><span>What is an Account Group in SAP FICO?</span></a>
                                        <p>An Account Group in SAP FICO is used to classify G/L accounts and control the creation of master data. It determines the number range and the field status for each account. Examples of account groups include Assets, Liabilities, Revenue, and Expenses.</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Accordion -->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- Start Accordion -->
                            <div id="tab2" class="tab_content">
                                <ul class="accordion wow fadeInRight">
                                    <li>
                                        <a class=""><span>What is Parallel Accounting in SAP FICO? </span></a>
                                        <p style="display: none;">Parallel Accounting allows companies to maintain multiple ledgers for different accounting principles (like IFRS and local GAAP). This feature helps businesses comply with various regulatory standards without duplicating financial data.</p>
                                    </li>
                                    <li>
                                        <a class=""><span>What are Special Purpose Ledgers in SAP FICO? </span></a>
                                        <p style="display: none;">Special Purpose Ledgers allow users to define ledgers for special reporting requirements. They provide flexibility for creating additional ledgers apart from the standard general ledger, useful for reporting purposes without affecting primary data.</p>
                                    </li>
                                    <li>
                                        <a><span>What is Real-time Integration between FI and CO?</span></a>
                                        <p>Real-time integration ensures that every financial transaction posted in the FI module is simultaneously updated in the CO module. This eliminates the need for manual reconciliation between financial and controlling data.</p>
                                    </li>
                                    <li>
                                        <a><span>What is the purpose of 'Segment Reporting' in SAP FICO?</span></a>
                                        <p>Segment Reporting allows businesses to present financial information segmented by business units, products, or geographical regions. It helps in analyzing profitability and financial performance from various perspectives.</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Accordion -->
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
<!-- Start Search Popup Area -->
<!--==================================================-->

<div class="search-popup">
    <button class="close-search style-two"><i class="fas fa-times"></i></button>
    <button class="close-search"><i class="fas fa-arrow-up"></i></button>
    <form method="post" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fas fa-search"></i></button>
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
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 270.456;"></path>
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

        if (e.target.classList.contains("clm-prv")) {
            const videoUrl = e.target.getAttribute("data-video-url");
            const iframe = document.getElementById("videoIframe");
            const modal = document.getElementById("videoModal");


            iframe.src = videoUrl;
            modal.style.display = "flex";
        }


        if (e.target.id === "closePreview" || e.target.id === "videoModal") {
            const iframe = document.getElementById("videoIframe");
            const modal = document.getElementById("videoModal");


            iframe.src = "";
            modal.style.display = "none";
        }
    });
</script>

<!--*********************End YouTube Video Script****************** -->


<!--*********************Next Preview Button Scricpt****************** -->

<script>
    const listItems = document.querySelectorAll('#lectureList li');
    const itemsPerPage = 4;
    let currentPage = 0;

    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    function updateVisibility() {
        listItems.forEach((li, index) => {
            li.classList.remove('visible');
            if (index >= currentPage * itemsPerPage && index < (currentPage + 1) * itemsPerPage) {
                li.classList.add('visible');
            }
        });

        // Disable buttons accordingly
        prevBtn.disabled = currentPage === 0;
        nextBtn.disabled = (currentPage + 1) * itemsPerPage >= listItems.length;
    }

    prevBtn.addEventListener('click', () => {
        if (currentPage > 0) {
            currentPage--;
            updateVisibility();
        }
    });

    nextBtn.addEventListener('click', () => {
        if ((currentPage + 1) * itemsPerPage < listItems.length) {
            currentPage++;
            updateVisibility();
        }
    });

    updateVisibility();
</script>





<!-- start reviews javascript -->
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
<!-- end reviews javascript -->









@endsection