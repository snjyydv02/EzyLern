@extends('layouts.app')


{{-- ✅ SEO Meta Tags --}}
@section('meta_title', 'SAP ABAP Course | Learn SAP ABAP Programming - Ezy Lern')
@section('meta_description', 'Master SAP ABAP with Ezylern. Learn ABAP programming through practical, real-time projects and gain skills that are in high demand.')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())

{{-- ✅ Open Graph (Facebook, LinkedIn, WhatsApp) --}}
@section('og_type', 'website')
@section('og_title', 'SAP ABAP Course | Learn SAP ABAP Programming - Ezylearn')
@section('og_description', '
Master SAP ABAP with Ezylern. Learn ABAP programming through practical, real-time projects and gain skills that are in high demand.')
@section('og_image', asset('assets/images/og-home.jpg'))
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
						<h1>ABAP on HANA (Advanced Business Application Programming)</h1>
					</div>
					<ul>
						<li><a href="{{route('home')}}">Home</a></li>
						<li><i class="bi bi-chevron-right"></i></li>
						<li>Courses</li>
						<li><i class="bi bi-chevron-right"></i></li>
						<li>ABAP on HANA using Eclipse with CDS, AMDP, OData, and OOPs ABAP (Advanced Business Application Programming)
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
						<img src="assets/images/resource/courseabapdetails_thumb.png" alt="thumb">
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
									<p>ABAP on HANA combines the traditional ABAP programming environment with the high-performance capabilities of SAP HANA. In this course, you will learn to develop optimized applications using HANA’s in-memory computing. You’ll explore techniques like CDS views, AMDP (ABAP Managed Database Procedures), and performance tuning. The course equips you to enhance existing ABAP programs and build new HANA-based applications.</p>
								</div>

								<div class="courses-details-title wow fadeInRight">
									<h3>What You’ll Learn From This Course</h3>
									<p>In an ABAP on HANA course, you will learn to optimize ABAP applications for SAP HANA's in-memory capabilities. You’ll master creating CDS views, using AMDP for advanced data processing, and tuning performance for high efficiency. The course also focuses on enhancing existing ABAP programs to run seamlessly on HANA.</p>
								</div>
								<div class="courses-details-list wow fadeInLeft">
									<ul>
										<li><i class="bi bi-check"></i><span>Develop optimized ABAP applications leveraging SAP HANA’s in-memory computing.</span></li>
										<li><i class="bi bi-check"></i><span>Create CDS views and use AMDP for high-performance data processing.span></li>
										<li><i class="bi bi-check"></i><span>Enhance existing ABAP programs for HANA compatibility and efficiency.</span></li>
										<li><i class="bi bi-check"></i><span>Implement performance tuning and data modeling techniques for HANA-based applications.span></li>
									</ul>
								</div>
								<div class="courses-details-text-left wow fadeInLeft">
									<h3>Certification</h3>
									<p>

										We are pleased to award you with the Certificate of Completion for successfully finishing the SAP ABAP (Advanced Business Application Programming) course.</p>

									<img src="assets/images/resource/abap_certification.webp" alt="">
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
																	<i class="bi bi-card-checklist"></i> ABAP (Advanced Business Application Programming)
																	<span class="clm-prv" data-video-url="https://www.youtube.com/embed/kQLIL8s8Qzg?rel=0">Preview</span>
																	<span class="curricolumn-duration">45m 34s</span>
																</p>
															</li>
															<li>
																<a class="active">2 Lectures</a>
																<p class="preview_btn">
																	<i class="bi bi-card-checklist"></i> Introduction to OOPS ABAP
																	<span class="clm-prv" data-video-url="https://www.youtube.com/embed/jOyr-2q7o_8?rel=0">Preview</span>
																	<span class="curricolumn-duration">38m 20s</span>
																</p>
															</li>
															<li>
																<a class="active">3 Lectures</a>
																<p class="preview_btn">
																	<i class="bi bi-card-checklist"></i> Features of OOPS ABAP
																	<span class="clm-prv" data-video-url="https://www.youtube.com/embed/lfYHIQ2GEOw?rel=0">Preview</span>
																	<span class="curricolumn-duration">42m 26s</span>
																</p>
															</li>
															<li>
																<a class="active">4 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Abstract Class,Interface,Events
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
																</p>
															</li>

															<li>
																<a>5 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Events in OOABAP
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>6 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> OOPS ALV Introduction
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>7 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Interactive OOPS ALV
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>8 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Introduction to OData Service
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>9 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> OData Features and Introduction to CRUD
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>10 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Host Files, CRUD Operations in OData Service using Custom Tables
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>11 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> OData CRUD using BAPIs Part 1
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>12 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> OData CRUD using BAPIs Part 2

																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>13 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Managed BO Creation
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>14 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Introduction to HANA
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>15 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Row Store vs Column Store, Data to code vs Code to Data
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>16 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> OLAP vs OLTP, ADT Installation
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>17 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>New ABAP Syntax Part 1
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>18 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>New ABAP Syntax Part 2
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>19 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>HANA Box
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>20 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>ADBC
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>21 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>SQLScript
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>22 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>AMDP Introduction
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>23 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Filters in AMDP Methods
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>24 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>CRUD Operations using AMDP
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>25 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Introduction to CDS
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>26 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>CDS View Creation
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>27 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>More Operations using CDS
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>28 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Joins, Limitations of CDS Views
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>29 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Association in CDS
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>30 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>CDS View as a OData Service
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>31 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>CDS consumption
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>32 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>VDM
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>33 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Service Definition and Service Binding for OData
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>34 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Introduction to ALV IDA
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
										<img src="assets/images/resource/team_thumb2.png" alt="">
									</div>
									<div class="author-content">
										<h4><a href="#">Amrit Raj</a></h4>
										<span>Technical Lead Consultant + Trainer</span>
										<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...</p> -->
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
						<img src="assets/images/resource/coursedetailabap_img.webp" alt="img">
						<div class="courses-video-icon">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/kQLIL8s8Qzg"><i class="bi bi-play-fill"></i></a>
						</div>
					</div>
					<div class="courses-details-content">
						<div class="courses-details-text-right">
							<p>Duration</p>
							<span>40 + Hourse Total Length</span>
						</div>
						<div class="courses-details-text-right">
							<p> 40 + hours of high-quality video content</p>

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
							<span>Amrit Raj</span>
						</div>
					</div>
					<div class="price-button">
						<a href="#">Price: ₹4,999</a>
					</div>
					<div class="price-btn">
						<a href="https://lms.ezylern.com/course/ABAPAdvancedBusinessApplicationProgramming-87626/checkout">Buy Now</a>
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
						<h3> <a href="{{route('ficosapraptraining')}}">SAP FICO – Financial Accounting and Controlling</a></h3>
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
						<h3> <a href="{{route('mmsapraptraining')}}">SAP MM – Materials Management</a></h3>
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
						<h3><a href="{{route('abap')}}">Complete ABAP – Advanced Business Application Programming</a></h3>
						<div class="text-icon">
							<p> Discount of 62% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹6,999</span>
							<span class="original-price">₹16,000</span>
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
					<h1>Get SAP ABAP on HANA Common Answers From Here</h1>
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
										<a class=""><span>What is SAP ABAP on HANA? </span></a>
										<p style="display: none;">SAP ABAP on HANA refers to the integration of ABAP (Advanced Business Application Programming) with the SAP HANA database. This combination leverages HANA's in-memory computing capabilities to enhance the performance of ABAP applications by enabling faster data processing and real-time analytics.</p>
									</li>
									<li>
										<a class=""><span>What is Code Pushdown in SAP HANA?</span></a>
										<p style="display: none;">Code Pushdown is a performance optimization technique where data-intensive operations are moved from the application layer to the database layer. By executing complex calculations and data retrieval directly in the HANA database, applications can achieve significant performance improvements.</p>
									</li>
									<li>
										<a><span>What is HANA Full Text Search?</span></a>
										<p>HANA Full Text Search enables efficient searching of unstructured text data using advanced features like fuzzy search, stemming, and linguistic processing. This functionality provides quick and relevant search results, enhancing the user experience in applications that handle large volumes of textual data.</p>
									</li>
									<li>
										<a><span>What is a Calculation View in SAP HANA?</span></a>
										<p>Calculation Views are used to model complex calculations and aggregations on data in HANA. They provide advanced modeling capabilities and are processed in-memory for high performance, making them suitable for complex business scenarios and real-time analytics.</p>
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
										<a class=""><span>What is an External View in SAP HANA?</span></a>
										<p style="display: none;">An External View is created in the ABAP Dictionary based on an existing HANA calculation view. This integration allows ABAP programs to access data from HANA calculation views using native SQL, improving performance for analytical applications.</p>
									</li>
									<li>
										<a class=""><span>What is Native SQL in ABAP on HANA?</span></a>
										<p style="display: none;">Native SQL allows executing database-specific SQL statements directly from an ABAP program. It is faster and more flexible than Open SQL but requires explicit handling of database differences, making it less portable across databases.</p>
									</li>
									<li>
										<a><span>How does ABAP support Parallel Processing in HANA? </span></a>
										<p>ABAP supports parallel processing through Parallel Cursor, Background Jobs, and Asynchronous RFC (aRFC). These techniques leverage HANA's multi-core architecture to perform data-intensive operations concurrently.</p>
									</li>
									<li>
										<a><span>How to handle Data Aging in ABAP on HANA?</span></a>
										<p>Data Aging moves rarely accessed data from hot storage (memory) to cold storage (disk) while maintaining availability. This feature helps manage large data volumes without compromising performance.</p>
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

	<!--==================================================-->
	<!-- End FAQ Section  -->
	<!--==================================================-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://lms.ezylern.com/js-sdks/signup-sdk/signup-sdk.js?v=2.8"></script>
	<script>
		$(window).on('load', function() {
			loadInstBundleDetails();
		});
	</script>

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
			// अगर क्लिक किया गया एलिमेंट 'clm-prv' क्लास का है
			if (e.target.classList.contains("clm-prv")) {
				const videoUrl = e.target.getAttribute("data-video-url");
				const iframe = document.getElementById("videoIframe");
				const modal = document.getElementById("videoModal");

				// वीडियो URL सेट करें और पॉपअप दिखाएँ
				iframe.src = videoUrl;
				modal.style.display = "flex";
			}

			// पॉपअप बंद करने के लिए
			if (e.target.id === "closePreview" || e.target.id === "videoModal") {
				const iframe = document.getElementById("videoIframe");
				const modal = document.getElementById("videoModal");

				// वीडियो URL हटाएँ और पॉपअप छिपाएँ
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