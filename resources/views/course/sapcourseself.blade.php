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

<!-- <div class="sap-course-section">
	<div class="container">
		<div class="row">
			<div class="sap-course-heading">
				<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, debitis!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas cum libero error accusamus autem consequuntur adipisci officia fugiat officiis voluptatem ipsa enim ab, delectus placeat ad nesciunt quas, culpa tempore.</p>
			</div>

			<div class="brand-links">
				<a href="#">SAP RAP</a>
				<a href="#">SAP MM</a>
				<a href="#">SAP FICO</a>
				<a href="#">ABAP on HANA</a>
				<a href="#">Complete ABAP</a>
				<a href="#">SAP PP</a>
				<a href="#">SAP SD</a>
				<a href="#">SAP FICO S4HANA</a>
			</div>

			<div class="product-title">Lorem ipsum dolor sit amet?</div>

			<div class="product-description">
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita alias corrupti porro inventore. Libero maxime illum consequuntur, corrupti corporis numquam optio?</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque velit officiis sit! Veniam praesentium aliquid quos blanditiis quaerat hic fugiat iure optio impedit maiores.</p>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sapiente iste id eos dolorem quod, harum ratione obcaecati quidem quam, tempore dolorum temporibus molestiae recusandae sit!</p>
			</div>
		</div>
	</div>
</div> -->

<!--==================================================-->
<!-- End   Sap-Course  Section  -->
<!--==================================================-->



@endsection