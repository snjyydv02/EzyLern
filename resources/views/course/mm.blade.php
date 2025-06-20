@extends('layouts.app')


@section('meta_title', 'SAP MM Course | Master SAP Materials Management - Ezylern')
@section('meta_description', 'Learn SAP MM online with Ezylern. Gain expertise in Materials Management and procurement processes with practical training and job-oriented modules.')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())

@section('og_type', 'website')
@section('og_title', 'SAP MM Course | Master SAP Materials Management - Ezylearn')
@section('og_description', 'Learn SAP MM online with Ezylern. Gain expertise in Materials Management and procurement processes with practical training and job-oriented modules.')
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
						<h1>The Complete Content Materials-Management Course</h1>
					</div>
					<ul>
						<li><a href="{{route('home')}}">Home</a></li>
						<li><i class="bi bi-chevron-right"></i></li>
						<li>Courses</li>
						<li><i class="bi bi-chevron-right"></i></li>
						<li>Master content marketing strategies to grow your business and brand.
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
						<img src="assets/images/resource/coursedetailmm_thumb.webp" alt="thumb">
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
									<p>SAP MM (Materials Management) is a core module in SAP ERP that handles procurement and inventory functions. In an SAP MM course, you will learn to manage the procurement process, inventory management, invoice verification, and material planning. The course covers concepts like purchase orders, goods receipt, and material master data. It equips you to efficiently streamline supply chain operations in a business environment.</p>
								</div>

								<div class="courses-details-title wow fadeInRight">
									<h3>What You’ll Learn From This Course</h3>
									<p>In an SAP MM (Materials Management) course, you will learn to efficiently manage procurement, inventory, and material planning. You’ll gain hands-on experience with purchase orders, goods receipt, and invoice verification processes. Additionally, you will understand how to optimize supply chain management within an SAP ERP environment.</p>
								</div>
								<div class="courses-details-list wow fadeInLeft">
									<ul>
										<li><i class="bi bi-check"></i><span>Manage procurement processes, including purchase orders and requisitions.</span></li>
										<li><i class="bi bi-check"></i><span>Handle inventory management, stock movements, and material master data.</span></li>
										<li><i class="bi bi-check"></i><span>Perform invoice verification and integrate with financial accounting (FI).</span></li>
										<li><i class="bi bi-check"></i><span>Streamline supply chain management using SAP ERP functionalities.</span></li>
									</ul>
								</div>
								<div class="courses-details-text-left wow fadeInLeft">
									<h3>Certification</h3>
									<p>
										We are pleased to award you with the Certificate of Completion for successfully finishing the SAP MM course.</p>

									<img src="assets/images/resource/mm_certification.webp" alt="">
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
																	<i class="bi bi-card-checklist"></i> Difference Between End User and Consultant
																	<span class="clm-prv" data-video-url="https://www.youtube.com/embed/Mrz7ie61HbE?rel=0">Preview</span>
																	<span class="curricolumn-duration">11m 16s</span>
																</p>
															</li>
															<li>
																<a class="active">2 Lectures</a>
																<p class="preview_btn">
																	<i class="bi bi-card-checklist"></i> Overview Of SAP (Basics of ERP)
																	<span class="clm-prv" data-video-url="https://www.youtube.com/embed/cxhVcVfo754?rel=0">Preview</span>
																	<span class="curricolumn-duration">11m 51s</span>
																</p>
															</li>
															<li>
																<a class="active">3 Lectures</a>
																<p class="preview_btn">
																	<i class="bi bi-card-checklist"></i> Types of Project in SAP
																	<span class="clm-prv" data-video-url="https://www.youtube.com/embed/r__OT8MIg0g?rel=0">Preview</span>
																	<span class="curricolumn-duration">17m 50s</span>
																</p>
															</li>
															<li>
																<a class="active">4 Lectures</a>
																<p class="preview_btn">
																	<i class="bi bi-card-checklist"></i> how to work on multiple screen on SAP
																	<span class="clm-prv" data-video-url="https://www.youtube.com/embed/UklV6u01erY?rel=0">Preview</span>
																	<span class="curricolumn-duration">9m 55s</span>
																</p>
															</li>

															<li>
																<a>5 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Enterprise structure ( types of purchase organization)
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>6 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Enterprise Structure ( Definition Part)
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>7 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Enterprise structure Definition and Assignment
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>8 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Material master record
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>9 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Business Partner (BP) Vendor creation In S/4 HANA
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>10 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> End to End Configuration for BP In S/4 HANA
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>11 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Purchase info record
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>12 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Source List (Fixed option)/span>

																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>13 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Source List Blocked & Different supplier option - Part1
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>14 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Source List Blocked & Different supplier option - Part 2
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>15 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>RFQ - Request for Quotation
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>16 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> RFQ - Important Interview questions
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>17 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Condition Records
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>18 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Material Requirement Planning
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>19 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i> Consumption Based Planned
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>20 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Valuation
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>21 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Material Valuation ( S / V price control )]
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>22 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Valuation Class
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>23 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Physical Inventory
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>24 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Types of Physical Inventory
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>25 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Creating Physical Inventory Document
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>26 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Inventory Management
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>27 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Movement Types
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>28 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Goods Receipt Scenarios
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>29 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Goods Issue Scenarios
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>30 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Stock Transfer
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>31 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Transfer Posting
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>32 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Invoice Verification
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>33 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Invoice Posting
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>34 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Subsequent Debit / Credit
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>35 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Pricing Procedure
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>36 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Condition Records
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>37 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Soft Skills and Consultant Knowledge
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>38 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Communication and requirement-gathering techniques
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>39 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>Understanding business processes and mapping them to SAP
																	<span class="curricolumn-duration"><i class="bi bi-lock-fill"></i></span>
																</p>
															</li>
															<li>
																<a>40 Lectures</a>
																<p> <i class="bi bi-card-checklist"></i>SAP MM Configurational Notes
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
										<img src="assets/images/resource/team_thumb1.png" alt="">
									</div>
									<div class="author-content">
										<h4><a href="#">Manoj Pandey</a></h4>
										<span>SAP Lead Consultant + Trainer</span>
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
						<img src="assets/images/resource/coursedetailmm_img.webp" alt="img">
						<div class="courses-video-icon">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/cxhVcVfo754"><i class="bi bi-play-fill"></i></a>
						</div>
					</div>
					<div class="courses-details-content">
						<div class="courses-details-text-right">
							<p>Duration</p>
							<span>50 + Hours Total Length</span>
						</div>
						<div class="courses-details-text-right">
							<p> 50 + hours of high-quality video content</p>

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
							<span>Manoj Pandey</span>
						</div>
					</div>
					<div class="price-button">
						<a href="#">Price: ₹4,999</a>
					</div>
					<div class="price-btn">
						<a href="https://lms.ezylern.com/course/SAPMM-MaterialsManagement-82845/checkout">Buy Now</a>
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

<div class="our_related-course">
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
				<div class="single-popular-box wow fadeInRight">
					<div class="popular-thumb">
						<img src="assets/images/resource/sapabap_thumb.svg" alt="thumb">
					</div>
					<div class="popular-content">
						<div class="people-name">
							<div class="people-img">
								<img src="assets/images/resource/amrit_sir.png" alt="img">
							</div>
							<p>Mr. Amrit Raj</p>
							<div class="star-icon">
								<p><i class="bi bi-star-fill"></i> (5.0)</p>
							</div>
						</div>
						<h3> <a href="{{route('abap.hana')}}">ABAP On HANA – Advanced Business Application Programming</a></h3>
						<div class="text-icon">
							<p>Discount of 69% applied</p>
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
<!-- Start Related-course Section  -->
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
					<h1>Get SAP MM Common Answers From Here</h1>
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
										<a class=""><span> What is SAP MM?</span></a>
										<p style="display: none;">SAP MM (Materials Management) is a module in SAP ERP that manages procurement and inventory processes. It ensures that materials are available in proper quantities and locations to support production and other business processes.</p>
									</li>
									<li>
										<a class=""><span>What is a Purchase Requisition in SAP MM?</span></a>
										<p style="display: none;">A Purchase Requisition (PR) in SAP MM is an internal document that signals a need for materials or services. It is created by various departments and sent to the purchasing department for procurement. The PR specifies details like material type, quantity, and required date, and can be converted into a purchase order (PO) after approval. </p>
									</li>
									<li>
										<a><span>What is a Material Master Record in SAP MM?</span></a>
										<p>The Material Master is a central repository of information on materials, including data related to procurement, production, inventory management, and sales. It ensures consistent and accurate data across various departments.</p>
									</li>
									<li>
										<a><span>What is a Purchase Info Record in SAP MM?</span></a>
										<p>A Purchase Info Record in SAP MM links a specific material with a specific vendor, storing crucial procurement information like the last purchase price, delivery lead time, and terms of delivery. It helps streamline the procurement process by providing quick access to vendor-specific data for repeat purchases.</p>
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
										<a class=""><span>What is a Movement Type in SAP MM? </span></a>
										<p style="display: none;">Movement Types in SAP MM categorize the different types of material movements within the system. Each movement type in SAP MM corresponds to specific operations such as goods receipt (101), goods issue (201), or stock transfer (301). </p>
									</li>
									<li>
										<a class=""><span>What is a Stock Transport Order (STO) in SAP MM?</span></a>
										<p style="display: none;">A Stock Transport Order (STO) in SAP MM is used to transport material from one plant or storage location to another within the same company. It helps to manage internal stock movements and to have traceability and control. The STO process includes creation of the order, goods issue at the sending plant, and goods receipt at the receiving plant.</p>
									</li>
									<li>
										<a><span>What is a Reservation in SAP MM?</span></a>
										<p> A Reservation in SAP MM is a request to set aside stock for a specific purpose, such as production or maintenance. It ensures that the required materials are available when needed, and the system automatically reduces the stock quantity when the reservation is created.</p>
									</li>
									<li>
										<a><span> What is a Valuation Class in SAP MM?</span></a>
										<p>A Valuation Class in SAP MM groups materials that have the same accounting requirements. It determines which GL (General Ledger) accounts are updated during transactions such as goods movement. Different materials can have the same valuation class if they belong to the same accounting category.</p>
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