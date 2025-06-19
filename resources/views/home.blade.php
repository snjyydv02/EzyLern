@extends('layouts.app')

@section('meta_title', 'EzyLern: Learn SAP Online Course with Easy Method - Ezy Lern')
@section('meta_description', 'Learn SAP online with Ezy Lern. Ezylern offers easy learn courses in SAP ABAP, MM & RAP. Boost your career with job-ready SAP skills today.')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())
@section('og_type', 'website')
@section('og_title', 'Ezy Learn - Easy Learn SAP Online with Ezylern')
@section('og_description', 'Join Ezylern for SAP ABAP, MM, and RAP courses. Learn SAP the easy way and become job-ready with our expert-led training programs.')
@section('og_image', asset('assets/images/og-home.jpg'))
@section('og_url', url()->current())
@section('content')

<!--==================================================-->
<!-- Start  slider Section  -->
<!--==================================================-->

<div class="slider-section align-items-center d-flex">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="slider-content">
					<h5>EXCELLENCE IN EDUCATION</h5>
					<h1>Start Better</h1>
					<h1>Learning Future</h1>
					<h1>From Here</h1>
					<p>Together, Let's Revolutionize Skill Learning.</p>
					<div class="slider-button">
						<a href="#" class="loginButton login">Get Started Today <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="slider-thumb">
					<img src="assets/images/slider/slider-thumb1.png" alt="thumb">
				</div>
			</div>
			<div class="slider-all-shape">
				<div class="slider-shape">
					<img src="assets/images/slider/slider-shape.png" alt="shape">
				</div>
				<div class="slider-shape1">
					<img src="assets/images/slider/slider-shape1.png" alt="shape">
				</div>
				<div class="slider-shape2">
					<img src="assets/images/slider/slider-shape2.png" alt="shape">
				</div>
				<div class="slider-shape3">
					<img src="assets/images/slider/slider-shape3.png" alt="shape">
				</div>
				<div class="slider-shape4">
					<img src="assets/images/slider/slider-shape4.png" alt="shape">
				</div>
				<div class="slider-shape5">
					<img src="assets/images/slider/slider-shape5.png" alt="shape">
				</div>
				<div class="slider-shape6">
					<img src="assets/images/slider/slider-shape6.png" alt="shape">
				</div>
				<div class="slider-shape7">
					<img src="assets/images/slider/slider-shape7.png" alt="shape">
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  slier Section  -->
<!--==================================================-->




<!--==================================================-->
<!-- Start  about Section  -->
<!--==================================================-->

<div class="about-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about-thumb wow fadeInLeft">
					<img src="assets/images/resource/about-thumb.png" alt="thumb">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title wow fadeInRight">
					<h5>About Ezylern</h5>
					<h1>Lead Innovation in Online Education</h1>
					<!-- <h1>Long Learners</h1> -->
					<p class="section-dsc">EzyLern, powered by Digivibrant Techsolutions, is a modern e-learning platform committed to making quality education accessible anytime, anywhere. We offer expert-designed recorded courses across diverse subjects, empowering learners with flexible, affordable, high-quality education. Most of our content remains free for the community.</p>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="about-icon-list wow fadeInRight">
							<p><i class="bi bi-check-lg"></i> Learn From Anywhere</p>
							<p><i class="bi bi-check-lg"></i> Flexible Classes</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-icon-list wow fadeInRight">
							<p><i class="bi bi-check-lg"></i> Find the right instructor for you</p>
							<p><i class="bi bi-check-lg"></i> Popular topics to learn now</p>
						</div>
					</div>
				</div>
				<div class="about-button wow fadeInRight">
					<a href="{{route('About.us')}}">Know About Us <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  about Section  -->
<!--==================================================-->





<!--==================================================-->
<!-- Start  categorie Section  -->
<!--==================================================-->

<div class="categorie-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center-title wow fadeInLeft">
					<h5>COURSE CATEGORIES</h5>
					<h1>Popular Topics To Learn</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<a href="https://ezylern.com/sap-course" target="_blank" style="text-decoration: none; color: inherit;">
					<div class="single-categorie-box wow fadeInLeft">
						<div class="categorie-img">
							<img src="assets/images/resource/categorie_img01.png" alt="img">
						</div>
						<div class="categorie-content">
							<h4>SAP</h4>
							<p>SAP Leading ERP provider, streamlining business processes by integrating finance, HR, procurement,and sales.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<a href="https://ezylern.com/coming-soon" target="_blank" style="text-decoration: none; color: inherit;">
					<div class="single-categorie-box wow fadeInLeft">
						<div class="categorie-img">
							<img src="assets/images/resource/categorie-img.png" alt="img">
						</div>
						<div class="categorie-content">
							<h4>Business Analysis</h4>
							<p>Business Analysis Identifying business needs and solutions to improve efficiency and support decision-making.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-categorie-box wow fadeInDown">
					<a href="https://ezylern.com/coming-soon" target="_blank" style="text-decoration: none; color: inherit;">
						<div class="categorie-img">
							<img src="assets/images/resource/categorie-img1.png" alt="img">
						</div>
						<div class="categorie-content">
							<h4>Sales Marketing</h4>
							<p>Sales Marketing Promoting and selling products using marketing and sales strategies to attract and convert customers.</p>
						</div>
				</div>
				</a>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-categorie-box wow fadeInUp">
					<a href="https://ezylern.com/coming-soon" target="_blank" style="text-decoration: none; color: inherit;">
						<div class="categorie-img">
							<img src="assets/images/resource/categorie-img2.png" alt="img">
						</div>
						<div class="categorie-content">
							<h4>Data Science</h4>
							<p>Data Science Combining statistics and machine learning to extract insights and support decision-making.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  categorie Section  -->
<!--==================================================-->





<!--==================================================-->
<!-- Start  popular Section  -->
<!--==================================================-->

<div class="popular-section">
	<div class="container">

		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="section-title up wow fadeInLeft">
					<h5>POPULAR COURSES</h5>
					<h1>Featured On This Month</h1>
				</div>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="popular-button wow fadeInRight">
					<a href="{{route('sapcourseself')}}">View All Courses <i class="fas fa-arrow-right"></i></a>
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
<!-- Start  testimonial Section  -->
<!--==================================================-->

<div class="testimonial-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="testimonial-thumb wow fadeInLeft">
					<img src="assets/images/resource/testimonial-thumb.png" alt="thumb">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title up wow fadeInRight">
					<h5>Testimonial</h5>
					<h1>What Our Student Says</h1>
				</div>
				<div class="testimonial-list owl-carousel wow fadeInRight">
					<div class="testimonial-box">
						<div class="testimonial-desc">
							<p>"I did SAP SD course at Ezy Lern & Training Center. The training was excellent and trainer had super knowledge on SAP SD which makes us to understand the concepts easily and each session makes us interest especially the practical session.The support I got from the Ezy Lern team helped me during the training period."</p>
						</div>
						<div class="testi-img">
							<img src="assets/images/resource/testi_img1.png" alt="img">
							<div class="testi-icon">
								<img src="assets/images/resource/testi-icon.png" alt="icon">
							</div>
						</div>
						<div class="testimonial-title">
							<h4>Kuldeep Kulkarni</h4>
							<p>SAP SD Consultant</p>
						</div>
					</div>
					<div class="testimonial-box">
						<div class="testimonial-desc">
							<p>"Ezy Lern SAP Tranning center is well managed and equipped with knowledgeable staff and trainer, counsellors and good to suggest you right module as per experience and academics, after completion of course the institute is very good in their placement and serices. Thank you Ezy Lern for making my dream come true, got placed in MNC."</p>
						</div>
						<div class="testi-img">
							<img src="assets/images/resource/testi_img2.png" alt="img">
							<div class="testi-icon">
								<img src="assets/images/resource/testi-icon.png" alt="icon">
							</div>
						</div>
						<div class="testimonial-title">
							<h4>Shweta Mehta</h4>
							<p>Module SAP SD</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  testimonial Section  -->
<!--==================================================-->





<!--==================================================-->
<!-- Start  team Section  -->
<!--==================================================-->

<div class="team-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center-title wow fadeInLeft">
					<h1>Our Most Popular Trainer</h1>
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
						<h4>Manoj Pandey</h4>
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
						<h4>Kumar Sir</h4>
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
						<h4>Amrit Raj</h4>
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
						<h4>Dinesh Sir</h4>
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
<!-- Start Resume Section  -->
<!--==================================================-->


<div id="resumesection">
	<section class="resume-section" id="resume-sectionsss">
		<div class="container">
			<div class="text-content">
				<div class="textBeautiful">
					<h5 style="
    color: #fd8e00;">Beautiful ready-to-use resume templates</h5>
				</div>
				<p>
					Win over employers and recruiters by using one of our 25+ elegant, professionally-designed.Resume
					Download to word or PDF.
				</p>
				<div style="max-width: 400px; margin: 20px auto; padding: 20px; background: #f9f9f9; border: 1px solid #ddd; border-radius: 8px; font-family: Arial, sans-serif;">
					<h3 style="text-align: center; margin-bottom: 20px; font-size: 1.2rem; color: #333;">User Information</h3>
					<form id="resumeForm" method="POST">
						@csrf
						<div id="error-message" style="display:none; color:red;"></div>

						<label for="email" style="display: block; margin-bottom: 8px; font-size: 0.9rem; color: #555;">Email:</label>
						<input
							type="email"
							id="email"
							name="email"
							required
							style="width: 100%; padding: 18px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 15px; font-size: 0.9rem;">
						<label for="courses" style="display: block; margin-bottom: 8px; font-size: 0.9rem; color: #555;">Select Course:</label>
						<select
							id="coursesdata"
							name="courses"
							required
							style="width: 100%; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 15px; font-size: 0.9rem;">
							<option value="" disabled selected>Select your course</option>
							<option value="sap_mm">SAP MM</option>
							<option value="sap_fico">SAP FICO</option>
							<option value="sap_fico">SAP abap</option>
							<option value="sap_basis">SAP BASIS</option>
							<option value="sap_UI5FIORI">SAP UI5 FIORI</option>
							<option value="sap_ariba">SAP ARIBA</option>

							<option value="sap_sd">SAP SD</option>
							<option value="sap_pm">SAP PM</option>
							<option value="sap_tm">SAP TM </option>
							<option value="sap_pp">SAP PP </option>
							<option value="sap_ibp">SAP IBP</option>
							<option value="sap_ewm">SAP EWM</option>
							<option value="sap_scm">SAP SCM</option>
							<option value="sap_b1">SAP B1</option>
							<option value="sap_hcm">SAP HCM</option>
							<option value="sap_qm">SAP QM</option>
							<option value="sap_factors">SAP Success Factors</option>
							<option value="sap_cpi">SAP CPI</option>
							<option value="sap_btp">SAP BTP</option>
							<option value="sap_trm">SAP TRM</option>
							<option value="sap_hana">SAP BW4HANA</option>
							<option value="sap_sac">SAP SAC</option>
							<option value="sap_mdm">SAP MDM</option>
							<option value="sap_ps">SAP PS</option>
							<option value="sap_bods">SAP BODS</option>
							<option value="sap_gts">SAP GTS</option>
							<option value="sap_grc">SAP GRC</option>
							<option value="sap_cs">SAP CS</option>
							<option value="sap_co">SAP CO</option>
							<option value="sap_brim">SAP BRIM</option>

						</select>

						<label for="experience" style="display: block; margin-bottom: 8px; font-size: 0.9rem; color: #555;">Experience:</label>
						<select
							id="experience"
							name="experience"
							required
							style="width: 100%; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 15px; font-size: 0.9rem;">
							<option value="" disabled selected>Select your experience</option>
							<option value="fresher">Fresher</option>
							<option value="1">1 Year</option>
							<option value="2">2 Years</option>
							<option value="3">3 Years</option>
							<option value="4">4 Years</option>
							<option value="5">5 Years</option>
							<option value="6">6 Years</option>
						</select>
						<br>
						<button
							type="submit"
							style="width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 4px; font-size: 1rem; cursor: pointer;">
							Download Resume
						</button>
					</form>
				</div>

				<!-- <button class="btn">Download Resume</button> -->
				<div class="rating">
					<span>⭐ ⭐ ⭐ ⭐ ½</span>
					<p>4.5 out of 5 based on 5000 reviews <a href="#"></a></p>
				</div>
			</div>
			<div class="templates">
				<div class="template">
					<img src="https://www.srijaninstitute.com/public/frontend/img/home/toronto-resume-templates.jpg">
				</div>
				<div class="template">
					<img src="https://www.srijaninstitute.com/public/frontend/img/home/shanghai-resume-templates.jpg" alt="Resume Template 2">
				</div>
			</div>
		</div>
	</section>
</div>

<!--==================================================-->
<!-- End Resume Section  -->
<!--==================================================-->



<!--==================================================-->
<!-- Start  choose us Section  -->
<!--==================================================-->

<div class="choose-us-section d-flex align-items-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title up wow fadeInLeft">
					<h5>WHY CHOOSE US</h5>
					<h1>Our Core Features</h1>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="single-choose-us-box wow fadeInLeft">
							<div class="choose-us-icon">
								<img src="assets/images/resource/choose-us-icon.png" alt="icon">
								<div class="choose-us-title">
									<h1>01</h1>
								</div>

							</div>
							<div class="choose-us-content">
								<h4> <a href="{{route('jobportal')}}">Dedicated Job Portal </a></h4>
								<p>A Dedicated Job Portal connects job seekers with employers in specific fields.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-choose-us-box upper wow fadeInDown">
							<div class="choose-us-icon">
								<img src="assets/images/resource/choose-us-icon1.png" alt="icon">
								<div class="choose-us-title">
									<h1>02</h1>
								</div>
							</div>
							<div class="choose-us-content">
								<a href="#resumesection">
									<h4>ATS-Friendly Resume</h4>
								</a>
								<p>An ATS-Friendly Resume uses keywords and simple formatting to pass ATS filters.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-choose-us-box up wow fadeInUp">
							<div class="choose-us-icon">
								<img src="assets/images/resource/choose-us-icon2.png" alt="icon">
								<div class="choose-us-title">
									<h1>03</h1>
								</div>
							</div>
							<div class="choose-us-content">
								<h4>Digital Learning</h4>
								<p>Digital Learning uses technology to enhance and enable flexible education.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-choose-us-box wow fadeInRight">
							<div class="choose-us-icon">
								<img src="assets/images/resource/choose-us-icon3.png" alt="icon">
								<div class="choose-us-title">
									<h1>04</h1>
								</div>
							</div>
							<div class="choose-us-content">
								<h4>Educator Support</h4>
								<p>Educator Support offers resources and tools to improve teaching.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="choose-us-thumb wow fadeInRight">
					<img src="assets/images/resource/choose-us-thumb.jpg" alt="thumb">
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  choose us Section  -->
<!--==================================================-->



<!--==================================================-->
<!-- Start  subscribe Section  -->
<!--==================================================-->

<div class="subscribe-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title up center-title wow fadeInLeft">
					<h5>SUBSCRIBE NEWSLETTER</h5>
					<h1>Get Every Latest News</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form action="#">
					<div class="mail-address text-center wow fadeInLeft">
						<div class="social-icon">
							<i class="bi bi-envelope"></i>
						</div>
						<input type="text" name="Mail" placeholder="Enter Your mail Address" required="">
						<div class="Subcribe-button">
							<button type="submit">SUBSCRIBE<i class="bi bi-send"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!--==================================================-->
<!-- End  subscribe Section  -->
<!--==================================================-->






<!--==================================================-->
<!-- Start  webinar Section  -->
<!--==================================================-->


<div class="webinar-section">
	<div class="container">
		<div class="row">
			   <div class="webinar-fixed-wrapper">
      <div class="webinar-fixed-heading">
		<h2>Upcoming Webinar</h2>
	  </div>
      <div class="webinar-fixed-top-section">
        <h3>
          Live Online Classroom <span class="webinar-badge">PREFERRED</span>
        </h3>
        <div class="webinar-features">
          <span>Everything in Self-Paced Plus</span>
          <span>Mentoring by Award Winning Trainers</span>
          <span>1-Year Gold Membership</span>
          <span>Attend Unlimited Live Sessions</span>
          <span>Flexible Schedule</span>
          <span>Weekly Bootcamp Sessions</span>
          <span>Get Recordings of All Batches</span>
        </div>
      </div>

      <div class="webinar-scrollable-section">
        <h3>Post Graduate Program In French Language - Job Guarantee Program</h3>
        <table class="webinar-table-main">
          <tr class="webinar-table">
            <th>Starts</th>
            <th>Mode</th>
            <th>Timing</th>
            <th>Status</th>
          </tr>
          <tr class="webinar-table">
            <td>Starts Every Week</td>
            <td>Live Virtual Classroom</td>
            <td class="webinar-filling-fast">⚡ Filling Fast</td>
            <td><button class="webinar-enroll-btn" onclick="openPopup()">ENROLL NOW</button></td>
          </tr>
        </table>

        <div class="webinar-heading">
			<h3>French Language A1 Level Course </h3>
		</div>
        <table class="webinar-table-main">
          <tr class="webinar-table">
            <th>Starts</th>
            <th>Mode</th>
            <th>Timing</th>
            <th>Status</th>
          </tr>
          <tr class="webinar-table">
            <td>Starts Every Week</td>
            <td>Live Virtual Classroom</td>
            <td class="webinar-filling-fast">⚡ Filling Fast</td>
            <td><button class="webinar-enroll-btn" onclick="openPopup()">ENROLL NOW</button></td>
          </tr>
          <!-- Repeatable row -->
          <tr class="webinar-table">
            <td>11 June 2025 🛈<br /><small>Weekday Batch</small></td>
            <td>Instructor-Led Live Online</td>
            <td>8:00PM–10:00PM <br /><span style="color: green">Registration Open</span></td>
            <td><button class="webinar-enroll-btn" onclick="openPopup()">ENROLL NOW</button></td>
          </tr>
          <tr class="webinar-table">
            <td>11 June 2025 🛈<br /><small>Weekday Batch</small></td>
            <td>Instructor-Led Live Online</td>
            <td>8:00PM–10:00PM <br /><span style="color: green">Registration Open</span></td>
            <td><button class="webinar-enroll-btn" onclick="openPopup()">ENROLL NOW</button></td>
          </tr>
          <tr class="webinar-table">
            <td>11 June 2025 🛈<br /><small>Weekday Batch</small></td>
            <td>Instructor-Led Live Online</td>
            <td>8:00PM–10:00PM <br /><span style="color: green">Registration Open</span></td>
            <td><button class="webinar-enroll-btn" onclick="openPopup()">ENROLL NOW</button></td>
          </tr>
          <tr class="webinar-table">
            <td>11 June 2025 🛈<br /><small>Weekday Batch</small></td>
            <td>Instructor-Led Live Online</td>
            <td>8:00PM–10:00PM <br /><span style="color: green">Registration Open</span></td>
            <td><button class="webinar-enroll-btn" onclick="openPopup()">ENROLL NOW</button></td>
          </tr>
          <tr class="webinar-table">
            <td>11 June 2025 🛈<br /><small>Weekday Batch</small></td>
            <td>Instructor-Led Live Online</td>
            <td>8:00PM–10:00PM <br /><span style="color: green">Registration Open</span></td>
            <td><button class="webinar-enroll-btn" onclick="openPopup()">ENROLL NOW</button></td>
          </tr>
          <tr class="webinar-table">
            <td>11 June 2025 🛈<br /><small>Weekday Batch</small></td>
            <td>Instructor-Led Live Online</td>
            <td>8:00PM–10:00PM <br /><span style="color: green">Registration Open</span></td>
            <td><button class="webinar-enroll-btn" onclick="openPopup()">ENROLL NOW</button></td>
          </tr>
        </table>
      </div>
    </div>

    <!-- POPUP -->
    <div class="webinar-popup" id="webinar-popup">
      <div class="webinar-popup-content">
        <button class="webinar-close-btn" onclick="closePopup()">&times;</button>
        <div class="webinar-enroll-now">
			<h3>Enroll Now</h3>
		</div>
        <form onsubmit="return validateForm()">
          <div class="webinar-form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" required placeholder="Your Name" />
          </div>
          <div class="webinar-form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" required placeholder="example@email.com" />
          </div>
          <div class="webinar-form-group">
            <label for="number">Mobile Number</label>
            <div class="webinar-phone-input">
              <div class="webinar-country-code">+91</div>
              <input type="tel" id="number" required maxlength="10" pattern="[0-9]{10}" placeholder="10-digit number" />
            </div>
          </div>
          <div class="webinar-form-group">
            <label>Captcha</label>
            <div class="webinar-captcha-box">
              <div class="webinar-captcha-code" id="webinar-captcha">ABC123</div>
              <span class="webinar-refresh-captcha" onclick="generateCaptcha()">&#x21bb;</span>
            </div>
            <input type="text" id="captchaInput" placeholder="Enter captcha" required />
          </div>
          <button type="submit" class="webinar-submit-btn">Save</button>
        </form>
      </div>
    </div>

	  

		</div>
	</div>
</div>



<!--==================================================-->
<!-- End  webinar Section  -->
<!--==================================================-->




















<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://lms.ezylern.com/js-sdks/signup-sdk/signup-sdk.js?v=2.8"></script>
<script>
	$(window).on('load', function() {
		loadInstBundleDetails();
	});
</script>

<script>
	$(document).ready(function() {
		$('#resumeForm').submit(function(event) {
			event.preventDefault(); // Prevent normal form submission

			var formData = $(this).serialize(); // Get form data
			var url = '{{ route("resume.download") }}';
			// Clear previous error messages
			$('#error-message').html('');

			$.ajax({
				url: url,
				type: 'POST',
				data: formData,
				success: function(response) {
					// Check if the response indicates failure
					if (response.success === false) {
						// If success is false, show the error message
						$('#error-message').html(response.errorMessage).show();
					} else {
						// If success is true, open the download link in a new tab
						window.open(response.downloadLink, '_blank');
					}
				},
				error: function(xhr, status, error) {
					// If there are validation errors or status 405, handle accordingly
					if (xhr.status === 405) {
						$('#error-message').html("Oops! An Error Occurred. The server returned a '405 Method Not Allowed'.").show();
					} else {
						$('#error-message').html("Something went wrong. Please try again.").show();
					}
				}
			});
		});
	});
</script>



<!-- Webinar Script -->
 
    <script>
      function openPopup() {
        generateCaptcha();
        document.getElementById("webinar-popup").classList.add("active");
      }

      function closePopup() {
        document.getElementById("webinar-popup").classList.remove("active");
      }

      function generateCaptcha() {
        const charset = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
        let captcha = "";
        for (let i = 0; i < 6; i++) {
          captcha += charset[Math.floor(Math.random() * charset.length)];
        }
        const captchaElem = document.getElementById("webinar-captcha");
        captchaElem.textContent = captcha;
        captchaElem.setAttribute("data-code", captcha);
      }

      function validateForm() {
        const name = document.getElementById("name").value.trim();
        const number = document.getElementById("number").value.trim();
        const captchaInput = document.getElementById("captchaInput").value.trim();
        const captchaCode = document.getElementById("webinar-captcha").getAttribute("data-code");

        if (!/^[a-zA-Z\s]+$/.test(name)) {
          alert("Name must only contain letters and spaces.");
          return false;
        }

        if (!/^\d{10}$/.test(number)) {
          alert("Please enter a valid 10-digit number.");
          return false;
        }

        if (captchaInput.toUpperCase() !== captchaCode) {
          alert("Captcha incorrect.");
          generateCaptcha();
          return false;
        }

        alert("Form submitted successfully!");
        closePopup();
        return false;
      }
    </script>

<!-- Webinar Script -->





@endsection