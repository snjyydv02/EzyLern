@extends('layouts.app')



{{-- ✅ SEO Meta Tags --}}
@section('meta_title', 'SAP Courses Online - Ezylern')
@section('meta_description', 'Explore Ezylerns SAP courses: RAP, MM, ABAP & more. Affordable, job-ready training with lifetime access. Enroll today!.')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())

{{-- ✅ Open Graph (Facebook, LinkedIn, WhatsApp) --}}
@section('og_type', 'website')
@section('og_title', 'SAP Courses at Ezylern ')
@section('og_description', 'Discover Ezylerns SAP courses: RAP, MM, ABAP & more. Easy learn modules, expert instructors, and career-focused training.')
@section('og_image', asset('assets/images/og-home.jpg'))
@section('og_url', url()->current())
@section('content')




<!--==================================================-->
<!-- Start  breadcumb Section  -->
<!--==================================================-->

<div class="breadcumb-carousel-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcumb-container text-center">
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  breadcumb Section  -->
<!--==================================================-->





<!--==================================================-->
<!-- Start  Carousel Section  -->
<!--==================================================-->

<div class="container-fluid p-0 carousel_section">
	<div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">

			<!-- Slide 1 -->
			<div class="carousel-item active ">
				<a href="{{route('mmsapraptraining')}}" target="_blank">
					<img src="assets/images/resource/carousel_mm_img.png" class="d-block w-100" alt="PWSAT 2025">
				</a>
			</div>

			<!-- Slide 2 -->
			<div class="carousel-item">
				<a href="{{route('sapraptraining')}}" target="_blank">
					<img src="assets/images/resource/carousel_rap_img.png" class="d-block w-100" alt="Slide 2">
				</a>
			</div>


			<!-- Slide 3 -->
			<div class="carousel-item">
				<a href="{{route('ficosapraptraining')}}" target="_blank">
					<img src="assets/images/resource/carousel_fico_img.png" class="d-block w-100" alt="Slide 3">
				</a>
			</div>
			<!-- Slide 4 -->
			<div class="carousel-item">
				<a href="{{route('abap.hana')}}" target="_blank">
					<img src="assets/images/resource/carousel_abap_img.png" class="d-block w-100" alt="Slide 3">
				</a>
			</div>
			<!-- Slide 5 -->
			<div class="carousel-item">
				<a href="{{route('sapsdcourse')}}" target="_blank">
					<img src="assets/images/resource/carousel_sd_img.png" class="d-block w-100" alt="Slide 3">
				</a>
			</div>
			<!-- Slide 6 -->
			<div class="carousel-item">
				<a href="{{route('abap')}}" target="_blank">
					<img src="assets/images/resource/carousel_complete_img.png" class="d-block w-100" alt="Slide 3">
				</a>
			</div>
			<!-- Slide 7 -->
			<div class="carousel-item">
				<a href="{{route('ppmodule')}}" target="_blank">
					<img src="assets/images/resource/carousel_pp_img.png" class="d-block w-100" alt="Slide 3">
				</a>
			</div>
			<!-- Slide 8 -->
			<div class="carousel-item">
				<a href="{{route('sapficodinesh')}}" target="_blank">
					<img src="assets/images/resource/carousel_ficoone_img.png" class="d-block w-100" alt="Slide 3">
				</a>
			</div>
			<!-- Slide 9 -->
			<div class="carousel-item">
				<a href="{{route('sappmcourse')}}" target="_blank">
					<img src="assets/images/resource/carousel_pm_img.png" class="d-block w-100" alt="Slide 3">
				</a>
			</div>



			<!-- Controls -->
			<button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden=""></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</div>


<!--==================================================-->
<!-- End  Carousel Section  -->
<!--==================================================-->




<!--==================================================-->
<!-- Start  popular Section  -->
<!--==================================================-->

<div class="popular-section">
	<div class="container">

		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="section-title up wow fadeInLeft">
					<h1>SAP Courses</h1>
				</div>
			</div>
		</div>
		<div class="row">

			<!-- *****************Start Course 1************* -->

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
							<p class="discount_color"> Discount of 70.59% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹4,999</span>
							<span class="original-price">₹16,999</span>
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

			<!-- *****************End Course 1************* -->

			<!-- *****************Start Course 2************* -->

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
							<p> Discount of 68.75% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹4,999</span>
							<span class="original-price">₹15,999</span>
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

			<!-- *****************End Course 2************* -->

			<!-- *****************start Course 3************* -->

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
							<p> Discount of 68.75% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹4,999</span>
							<span class="original-price">₹15,999</span>
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

			<!-- *****************End Course 3************* -->

			<!-- *****************start Course 4************* -->

			<div class="col-lg-4 col-md-6 popular_course_box">
				<div class="single-popular-box wow fadeInRight">
					<div class="popular-thumb">
						<img src="assets/images/resource/sapabap_thumb.svg" alt="thumb">
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
						<h3> <a href="{{route('abap.hana')}}">ABAP On HANA – Advanced Business Application Programming</a></h3>
						<div class="text-icon">
							<p>Discount of 72.23% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹4,999</span>
							<span class="original-price">₹17,999</span>
							<div class="note">(For full batch)</div>
						</div>
						<div class="button-group">
							<div class="explore">
								<p><a href="{{route('abap.hana')}}">Explore</a></p>
							</div>
							<div class="project-button">
								<a href="https://lms.ezylern.com/course/ABAPAdvancedBusinessApplicationProgramming-87626/checkout">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- *****************End Course 4************* -->

			<!-- *****************Start Course 5************* -->

			<div class="col-lg-4 col-md-6 popular_course_box">
				<div class="single-popular-box wow fadeInUp">
					<div class="popular-thumb">
						<img src="assets/images/resource/completeabap_thumb.svg" alt="thumb">
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
						<h3> <a href="{{route('abap')}}">Complete ABAP – Advanced Business Application Programming</a></h3>
						<div class="text-icon">
							<p> Discount of 68.75% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹6,999</span>
							<span class="original-price">₹15,999</span>
							<div class="note">(For full batch)</div>
						</div>
						<div class="button-group">
							<div class="explore">
								<p><a href="{{route('abap')}}">Explore</a></p>
							</div>
							<div class="project-button">
								<a href="https://lms.ezylern.com/course/ABAPCompleteAdvancedBusinessApplicationProgramming-87995/checkout">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- *****************End Course 5************* -->

			<!-- *****************start Course 6************* -->

			<div class="col-lg-4 col-md-6 popular_course_box">
				<div class="single-popular-box wow fadeInUp">
					<div class="popular-thumb">
						<img src="assets/images/resource/sappp_thumb.svg" alt="thumb">
					</div>
					<div class="popular-content">
						<div class="people-name">
							<div class="people-img">
								<img src="assets/images/resource/pp_instructur.png" alt="img">
							</div>
							<p>Instructor</p>
							<div class="star-icon">
								<p><i class="bi bi-star-fill"></i> (5.0)</p>
							</div>
						</div>
						<h3> <a href="{{route('ppmodule')}}">SAP PP – Production Planning</a></h3>
						<div class="text-icon">
							<p> Discount of 68.75% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹4,999</span>
							<span class="original-price">₹15,999</span>
							<div class="note">(For full batch)</div>
						</div>
						<div class="button-group">
							<div class="explore">
								<p><a href="{{route('ppmodule')}}">Explore</a></p>
							</div>
							<div class="project-button">
								<a href="https://lms.ezylern.com/course/SAPPPProductionPlanning-88573/checkout">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- *****************End Course 6************* -->

			<!-- *****************start and Course 7************* -->

			<div class="col-lg-4 col-md-6 popular_course_box">
				<div class="single-popular-box wow fadeInUp">
					<div class="popular-thumb">
						<img src="assets/images/resource/sapsd_thum.png" alt="thumb">
					</div>
					<div class="popular-content">
						<div class="people-name">
							<div class="people-img">
								<img src="assets/images/resource/sd_instructer.png" alt="img">
							</div>
							<p>Instructor</p>
							<div class="star-icon">
								<p><i class="bi bi-star-fill"></i> (5.0)</p>
							</div>
						</div>
						<h3> <a href="{{route('sapsdcourse')}}">SAP SD – Sales and Distribution</a></h3>
						<div class="text-icon">
							<p> Discount of 68.75% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹4,999</span>
							<span class="original-price">₹15,999</span>
							<div class="note">(For full batch)</div>
						</div>
						<div class="button-group">
							<div class="explore">
								<p><a href="{{route('sapsdcourse')}}">Explore</a></p>
							</div>
							<div class="project-button">
								<a href="https://lms.ezylern.com/course/SAPSDSalesandDistribution-88791/checkout">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- *****************End Course 7************* -->

			<!-- *****************start Course 8************* -->

			<div class="col-lg-4 col-md-6 popular_course_box">
				<div class="single-popular-box wow fadeInUp">
					<div class="popular-thumb">
						<img src="assets/images/resource/sapficoone_thumb.png" alt="thumb">
					</div>
					<div class="popular-content">
						<div class="people-name">
							<div class="people-img">
								<img src="assets/images/resource/dinesh_sir.png" alt="img">
							</div>
							<p>Dinesh Sir</p>
							<div class="star-icon">
								<p><i class="bi bi-star-fill"></i> (5.0)</p>
							</div>
						</div>
						<h3><a href="{{route('sapficodinesh')}}">SAP FICO S4HANA - Product Costing Process </a></h3>
						<div class="text-icon">
							<p> Discount of 85.73% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹999</span>
							<span class="original-price">₹6,999</span>
							<div class="note">(For full batch)</div>
						</div>
						<div class="button-group">
							<div class="explore">
								<p><a href="{{route('sapficodinesh')}}">Explore</a></p>
							</div>
							<div class="project-button">
								<a href="https://lms.ezylern.com/course/SAPFICOFinancialAccountingandControlling-89088/checkout">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- *****************End Course 8************* -->



			<!-- *****************start and Course 9************* -->

			<div class="col-lg-4 col-md-6 popular_course_box">
				<div class="single-popular-box wow fadeInUp">
					<div class="popular-thumb">
						<img src="assets/images/resource/sappm_thum.png" alt="thumb">
					</div>
					<div class="popular-content">
						<div class="people-name">
							<div class="people-img">
								<img src="assets/images/resource/pm_instructer.png" alt="img">
							</div>
							<p>Instructor</p>
							<div class="star-icon">
								<p><i class="bi bi-star-fill"></i> (5.0)</p>
							</div>
						</div>
						<h3> <a href="{{route('sappmcourse')}}">SAP PM – Plant Maintenance</a></h3>
						<div class="text-icon">
							<p> Discount of 66.67%applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹4,999</span>
							<span class="original-price">₹14,999</span>
							<div class="note">(For full batch)</div>
						</div>
						<div class="button-group">
							<div class="explore">
								<p><a href="{{route('sappmcourse')}}">Explore</a></p>
							</div>
							<div class="project-button">
								<a href="https://lms.ezylern.com/course/SAPPMPlantMaintenance-90155/checkout">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- *****************End Course 9************* -->

		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  popular Section  -->
<!--==================================================-->


<!--==================================================-->
<!-- Start  Training Features Section  -->
<!--==================================================-->

<div class="process-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center-title wow fadeInLeft">
					<h2>Training Features</h2>
				</div>
			</div>
		</div>
		<div class="row process">
			<div class="col-lg-4">
				<div class="single-process-box wow fadeInLeft">
					<div class="process-content">
						<div class="process-icon">
							<img src="assets/images/resource/need_live_sessions.png" alt="icon">
						</div>
						<div class="process-title">
							<h3>Live Online Classes</h3>
							<p>Learn directly from industry experts in live interactive sessions.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-process-box wow fadeInUp">
					<div class="process-content">
						<div class="process-icon">
							<img src="assets/images/resource/quizzes_and_mock_test.png" alt="icon">
						</div>
						<div class="process-title">
							<h3>Quizzes and Mock Tests</h3>
							<p> Test your knowledge with regular quizzes and mock exams.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-process-box wow fadeInRight">
					<div class="process-content">
						<div class="process-icon">
							<img src="assets/images/resource/need_hands_on_projects.png" alt="icon">
						</div>
						<div class="process-title">
							<h3>Hands-on Projects</h3>
							<p>Gain real-world experience through practical tasks and projects.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row process">
			<div class="col-lg-4">
				<div class="single-process-box wow fadeInLeft">
					<div class="process-content">
						<div class="process-icon">
							<img src="assets/images/resource/need_prerecorded_video.png" alt="icon">
						</div>
						<div class="process-title">
							<h3>Pre-recorded Video</h3>
							<p>Access self-paced video lessons anytime, anywhere.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-process-box wow fadeInUp">
					<div class="process-content">
						<div class="process-icon">
							<img src="assets/images/resource/need_24_7_expert_support.png" alt="icon">
						</div>
						<div class="process-title">
							<h3>24/7 Expert Help</h3>
							<p>Get round-the-clock assistance from certified professionals.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="single-process-box wow fadeInRight">
					<div class="process-content">
						<div class="process-icon">
							<img src="assets/images/resource/need_certification_by_industry.png" alt="icon">
						</div>
						<div class="process-title">
							<h3>Certification</h3>
							<p>Receive a certificate that adds value to your professional profile.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  Training Features Section  -->
<!--==================================================-->




<!--==================================================-->
<!-- Start  team Section  -->
<!--==================================================-->

<div class="team-section">
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
<!-- Start  Student Review Section  -->
<!--==================================================-->


<!-- <div class="Student-review-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center-title wow fadeInLeft">
					<h2>Our Lovely Students Feedback</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="testi-list owl-carousel">
				<div class="col-lg-12">
					<div class="single-testimonial-box">
						<div class="testimonial-content">
							<div class="testi-desc">
								<p>"Enable goal-oriented networks after enterprise
									wide leadership. Objectively leverage existing
									dependent leadership through multidisciplinary
									portals. Proactively envisioneer maintainable
									applications parallel aligents. Quickly maximize
									team driven resources" </p>
							</div>
							<div class="testi-people">
							</div>
							<div class="testi-people-name">
								<h4>Juli Joygon</h4>
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
								<p>"Enable goal-oriented networks after enterprise
									wide leadership. Objectively leverage existing
									dependent leadership through multidisciplinary
									portals. Proactively envisioneer maintainable
									applications parallel aligents. Quickly maximize
									team driven resources" </p>
							</div>
							<div class="testi-people">
							</div>
							<div class="testi-people-name">
								<h4>Juli Joygon</h4>
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
								<p>"Enable goal-oriented networks after enterprise
									wide leadership. Objectively leverage existing
									dependent leadership through multidisciplinary
									portals. Proactively envisioneer maintainable
									applications parallel aligents. Quickly maximize
									team driven resources" </p>
							</div>
							<div class="testi-people">
							</div>
							<div class="testi-people-name">
								<h4>Juli Joygon</h4>
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
								<p>"Enable goal-oriented networks after enterprise
									wide leadership. Objectively leverage existing
									dependent leadership through multidisciplinary
									portals. Proactively envisioneer maintainable
									applications parallel aligents. Quickly maximize
									team driven resources" </p>
							</div>
							<div class="testi-people">
							</div>
							<div class="testi-people-name">
								<h4>Juli Joygon</h4>
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
</div> -->

<!--==================================================-->
<!-- End Student Review Section  -->
<!--==================================================-->




<!--==================================================-->
<!-- Start  Need guidance Section  -->
<!--==================================================-->

<div class="need-guidance-section">
	<div class="container">
		<div class="need-guidance">
			<div class="need-guidance-content">
				<div class="need-guidance-text">
					<h2><strong>Need guidance?</strong> <span>Talk to our career
							expert!</span></h2>
					<p>Our experts are here to help you move forward — confidently and clearly.</p>
					<a href="https://wa.me/919220601945" target="_blank" class="need-guidanc-btn">
						Connect With Us
					</a>
					<p class="contact">Or Call Us: <strong>+91 9220601945</strong></p>
				</div>
				<div class="need-guidance-img">
					<img src="assets/images/resource/need_guidance.webp" alt="Career Advisor">
				</div>
			</div>
		</div>
	</div>
</div>


<!--==================================================-->
<!-- End  Need guidance Section  -->
<!--==================================================-->




<!--==================================================-->
<!-- Start  Register Section  -->
<!--==================================================-->

<div class="subscribe-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title up center-title wow fadeInLeft">

					<h1>Register For a Free Account</h1>
					<h5>SIGN UP NOW</h5>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form action="#">
					<div class="mail-address text-center wow fadeInLeft">
						<div class="register_btn">
							<a href="" class="loginButton login">Get Started</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  Register Section  -->
<!--==================================================-->


<!--==================================================-->
<!-- Start  Sap-Course Section  -->
<!--==================================================-->

<div class="sap-course-section">
	<div class="container">
		<div class="row">
			<div class="courses-details-text">
				<h2>SAP Course Online</h2>
				<p>
					Do you want to master SAP with Ezylern, which powers global businesses? <br>
					SAP is the world’s leading ERP software, used by top companies to manage everything from finances and human resources to logistics and supply chain management. Our SAP online course is perfect for everyone to enhance their confidence and skills. Whether you are a beginner or a working professional, Ezylern’s SAP online courses are designed to help you get job-ready fast.
					<br>
					If you're searching for the best online SAP courses that blend hands-on practice with knowledge related to the industry, this program is perfect.
				</p>
			</div>
			<div class="courses-details-text wow fadeInLeft">
				<h2>Why should you learn SAP?</h2>
				<p>We offer industry-relevant SAP training across key modules and technologies. Each course is taught in simple language, incorporating real-time projects and providing certification support.
				</p>
			</div>
			<div class="courses-details-list wow fadeInRight">
				<ul class="courses-details-title-check">
					<li><i
							class="bi bi-check"></i>
						<p>SAP is used by 400,000 companies worldwide.
					</li>
					<li><i
							class="bi bi-check"></i>
						<p>High demand for SAP consultants and developers.</p>
					</li>
					<li><i
							class="bi bi-check"></i>
						<p>Boost your career opportunities and salary potential.</p>
					</li>
					<li><i
							class="bi bi-check"></i>
						<p>Work in top industries like IT, manufacturing, banking, and healthcare.</p>
					</li>
				</ul>
			</div>
			<div class="courses-feature-text  wow fadeInRight">
				<h2>Modules covered in our online SAP course</h2>
				<p>We offer in-depth and practical modules that cover both functional and technical SAP domains.</p>
			</div>
			<div class="courses-details-list wow fadeInLeft">
				<ul class="courses-details-advantage-check">
					<li><i class="bi bi-check"></i>
						<h3 class="course-details-advantage-check-heading">Complete ABAP Course</h3>
					</li>
					<p class="course-details-advantage-check-text">Learn the core programming language of SAP, from basic syntax to creating smart forms and reports, and you will become job-ready for technical SAP roles. If you want to work as a technical consultant or SAP developer, ABAP is your gateway to the SAP world.</p>
				</ul>
				<ul class="courses-details-advantage-check">
					<li><i class="bi bi-check"></i>
						<h3 class="course-details-advantage-check-heading">SAP MM Course</h3>
					</li>
					<p class="course-details-advantage-check-text">SAP MM helps companies manage the buying and storing of materials. This lecture covers everything from procurement to invoice certification, making it super easy for professionals who want to work in supply chain, warehouse, or purchase departments.</p>
				</ul>
				<ul class="courses-details-advantage-check">
					<li><i class="bi bi-check"></i>
						<h3 class="course-details-advantage-check-heading">SAP SD Course</h3>
					</li>
					<p class="course-details-advantage-check-text">SAP SD focuses on managing the sales process in a company. This lecture is ideal for those interested in sales operations, customer service, or order processing, and it integrates with other modules.</p>
				</ul>
				<ul class="courses-details-advantage-check">
					<li><i class="bi bi-check"></i>
						<h3 class="course-details-advantage-check-heading">SAP FICO Course</h3>
					</li>
					<p class="course-details-advantage-check-text">SAP FICO is one of the most widely used modules, helping companies manage their money and accounting. It is best for finance professionals and accountants who want to gain skills and improve their confidence</p>
				</ul>
				<ul class="courses-details-advantage-check">
					<li><i class="bi bi-check"></i>
						<h3 class="course-details-advantage-check-heading">SAP PP Course</h3>
					</li>
					<p class="course-details-advantage-check-text">SAP PP deals with planning and controlling the production process in factories. This lecture is best suited for professionals in the manufacturing, operations, or production departments.p>
				</ul>
				<ul class="courses-details-advantage-check">
					<li><i class="bi bi-check"></i>
						<h3 class="course-details-advantage-check-heading">SAP PM Course </h3>
					</li>
					<p class="course-details-advantage-check-text">SAP PM is used to take care of machines and equipment in a company. It helps in planning and managing repairs to minimize downtime. This module is best for maintenance engineers and managers.</p>
				</ul>
				<ul class="courses-details-advantage-check">
					<li><i class="bi bi-check"></i>
						<h3 class="course-details-advantage-check-heading">SAP RAP Course</h3>
					</li>
					<p class="course-details-advantage-check-text">It is a latest programming tool used to build applications using simple coding. It allows developers to create scalable, secure, and Fiori-enabled applications. It is best for developers.</p>
				</ul>
			</div>
			<div class="courses-feature-text  wow fadeInRight">
				<h2>Key features of our SAP online courses</h2>
				<p>The course is for anyone who wants to learn how to build software, even if you are new to it. It is perfect for freshers, students, or anyone who wants to work with big companies.</p>
			</div>
			<div class="courses-details-list wow fadeInRight">
				<ul class="courses-details-title-check">
					<li><i
							class="bi bi-check"></i>
						<p>Beginner to advanced level courses.
					</li>
					<li><i
							class="bi bi-check"></i>
						<p>Expert trainers with real-time experience.</p>
					</li>
					<li><i
							class="bi bi-check"></i>
						<p>Project-based learning. </p>
					</li>
					<li><i
							class="bi bi-check"></i>
						<p>Flexible learning, online and recorded classes.</p>
					</li>
					<li><i
							class="bi bi-check"></i>
						<p>Certification support and job assistance.</p>
					</li>
				</ul>
			</div>
			<div class="courses-feature-text  wow fadeInRight">
				<p>Whether you're searching for the best SAP course online or a SAP online course with hands-on training, Ezylern ensures your learning is complete and career-focused.</p>
			</div>
			<div class="courses-feature-text  wow fadeInRight">
				<h2>Course Duration, Fees & Enrollment Process</h2>
				<p>We've made it easy to get going. A summary of what you should know is provided below:</p>
				<p><strong>Course Duration:</strong></p>
			</div>
			<div class="courses-details-list wow fadeInRight">
				<ul class="courses-details-title-check">
					<li><i
							class="bi bi-check"></i>
						<p><strong>SAP FICO</strong> – 6 to 8 weeks
					</li>
					<li><i
							class="bi bi-check"></i>
						<p><strong>SAP MM</strong> – 5 to 6 weeks
					</li>
					<li><i
							class="bi bi-check"></i>
						<p><strong>SAP SD</strong> – 5 to 6 weeks
					</li>
					<li><i
							class="bi bi-check"></i>
						<p><strong>SAP ABAP</strong> – 7 to 8 weeks
					</li>
					<li><i
							class="bi bi-check"></i>
						<p><strong>SAP PP</strong> – 6 weeks
					</li>
					<li><i
							class="bi bi-check"></i>
						<p><strong>SAP RAP</strong> –
					</li>
					<li><i
							class="bi bi-check"></i>
						<p><strong>SAP PM</strong> –
					</li>

				</ul>
			</div>
			<div class="courses-details-text wow fadeInLeft">
				<h2> SAP Course Fees and Payment Options:</h2>
			</div>
			<div class="courses-details-list wow fadeInRight">
				<ul class="courses-details-title-check">
					<li><i
							class="bi bi-check"></i>
						<p>Starting from ₹18,000 per module
					</li>
					<li><i
							class="bi bi-check"></i>
						<p>Installment options available</p>
					</li>
					<li><i
							class="bi bi-check"></i>
						<p>Discounts on combo course packs (for example, SAP FICO + MM)</p>
					</li>
				</ul>
			</div>
			<div class="courses-details-text wow fadeInLeft">
				<h2>How to Enroll in the SAP Online Course:</h2>
			</div>
			<div class="courses-details-list wow fadeInRight">
				<ul class="courses-details-title-check">
					<li><i
							class="bi bi-check"></i>
						<p>Book a Free Demo Class
					</li>
					<li><i
							class="bi bi-check"></i>
						<p>Speak with our SAP course advisor</p>
					</li>
					<li><i
							class="bi bi-check"></i>
						<p>Choose your schedule and start learning immediately</p>
					</li>
				</ul>
			</div>
			<div class="courses-details-text wow fadeInLeft">
				<h2>Take the first step towards a high-paying career</h2>
				<p>Whether you are aiming to become a SAP consultant, a developer, or a business analyst, Ezylern’s SAP online courses will help you gain the skills, confidence, and certification to succeed. <br>
					Enroll today, start learning and earning. Have questions? Chat with our course advisors now.
				</p>
			</div>
		</div>
	</div>
</div>
</div>

<!--==================================================-->
<!-- End   Sap-Course  Section  -->
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
										<h3>How much does the SAP course cost?</h3>
										<p>The course fee ranges from 20,000 to 75,000. It depends on the module and duration </p>
									</li>
									<li>
										<h3>Who can enroll in your online SAP course?</h3>
										<p>Anyone can join the course fresher, a student, or a working professional. No technical background is required.</p>
									</li>
									<li>
										<h3>Is the SAP course online certificate recognized? </h3>
										<p>Yes, our certificate is widely accepted by companies. It adds value to your resume.</p>
									</li>
									<li>
										<h3>What is the duration of your SAP online course?</h3>
										<p>The course takes 1 to 3 months to complete. You can choose fast-track or weekend batches</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div id="tab2" class="course-faq-tab_content">
								<ul class="course-faq-accordion wow fadeInRight">
									<li>
										<h3> Are there any discounts or promotional offers?</h3>
										<p>Yes, we offer special discounts and festive offers. Contact us to know the current deals.</p>
									</li>
									<li>
										<h3>How do I make a payment for the SAP course online?</h3>
										<p>You can pay using UPI, debit/credit card, or net banking. EMI options are also available.</p>
									</li>
									<li>
										<h3>What is the average salary after completing an SAP course?</h3>
										<p>Freshers earn around 3.5 to 6 LPA, and experienced professionals can get 8-25 LPA. It depends on the role and skills.</p>
									</li>
									<li>
										<h3>Will I get hands-on experience or just theory?</h3>
										<p>Yes, you will get real-time SAP system access. We focus on both theory and practical training.</p>
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


@endsection