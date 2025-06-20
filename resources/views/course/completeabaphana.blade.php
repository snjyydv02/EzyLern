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
					<iframe class='iframe' id='iframe' style='width: 100vw;height: 100vh;border:none;position:fixed; top:0; left:0; bottom:0; right:0; z-index:10000;display:none;'
						src="https://lms.ezylern.com/js-sdks/signup-sdk/iframe.php?subdomain=srijaninstitutetrainingcenter">
					</iframe>
					<div class="breadcumb-title">
						<h1> ABAP course online with certificate & live training</h1>
					</div>
					<ul>
						<li><a href="{{route('home')}}">Home</a></li>
						<li><i class="bi bi-chevron-right"></i></li>
						<li>Courses</li>
						<li><i class="bi bi-chevron-right"></i></li>
						<li>ABAP course online with certificate & live training
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
						<img src="assets/images/resource/coursecompleteabap_thumb.webp" alt="thumb">
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
							<!-- start course details  -->

							<div id="Overview"
								class="w3-container city wow fadeInLeft">
								<div class="courses-details-text">
									<h2>Course Description</h2>
									<p>Want to learn how big companies make their software? This ABAP online course will teach you. <br>
										A complete ABAP online course teaches how to write programs in SAP. SAP is a software that many big companies use. We look forward to making reports, apps, and tools that help companies work better. <br>
										By the end of the course, you will be able to use smart and useful tools for companies using SAP.
									</p>
								</div>

								<div class="courses-feature-text wow fadeInRight">
									<h2>Advantages of our ABAP online training</h2>
									<p>Let us see how this course will benefit your future and how it is unique and useful for you.</p>
								</div>
								<div class="courses-details-list wow fadeInLeft">
									<ul class="courses-details-advantage-check">
										<li><i class="bi bi-check"></i>
											<p class="course-details-advantage-check-head">Live classes with experts</p>
										</li>
										<p class="course-details-advantage-check-text">You will learn from industry experts and real teachers, not just videos. You can ask questions right away during class to clear your doubts.</p>
									</ul>
									<ul class="courses-details-advantage-check">
										<li><i class="bi bi-check"></i>
											<p class="course-details-advantage-check-head">Certificate after the course</p>
										</li>
										<p class="course-details-advantage-check-text">When you complete the course, you will get a certificate. This shows others that you have learned SAP and FICO skills.</p>
									</ul>
									<ul class="courses-details-advantage-check">
										<li><i class="bi bi-check"></i>
											<p class="course-details-advantage-check-head">Real-life examples</p>
										</li>
										<p class="course-details-advantage-check-text">We use real business stories to help you understand how SAP is used in the real world.</p>
									</ul>
									<ul class="courses-details-advantage-check">
										<li><i class="bi bi-check"></i>
											<p class="course-details-advantage-check-head">Practice on a real SAP system</p>
										</li>
										<p class="course-details-advantage-check-text">You will get access to the SAP software, so you can practice what you learn.</p>
									</ul>
									<ul class="courses-details-advantage-check">
										<li><i class="bi bi-check"></i>
											<p class="course-details-advantage-check-head">Fun assignments and quizzes</p>
										</li>
										<p class="course-details-advantage-check-text">There are small tasks and quizzes to help you remember and test how much you learned.</p>
									</ul>
									<ul class="courses-details-advantage-check">
										<li><i class="bi bi-check"></i>
											<p class="course-details-advantage-check-head">Help anytime you need</p>
										</li>
										<p class="course-details-advantage-check-text">If you have any queries or doubts, we are here 24/7 to support you and answer your questions.</p>
									</ul>
								</div>
								<div class="course-lern-details-text">
									<div class="courses-details-text wow fadeInLeft">
										<h2>What ABAP course will make you learn? </h2>
										<p>In a <strong>complete ABAP online course,</strong> master yourself to create smart tools and apps for SAP. In this, you will learn how to create computer programs that help big companies run better software.
											You will also learn to find and fix mistakes in your program. It is like learning to build software that businesses need to do their work faster and smarter.
										</p>
									</div>
									<div class="courses-feature-text  wow fadeInRight">
										<h2>Here is what you will gain through the ABAP online course</h2>
										<p>Through this course, gain the skills to write computer programs using ABAP, which is used in SAP software. Our online training will help in making reports and tools that are important for businesses.</p>
									</div>
									<div class="courses-details-list wow fadeInRight">
										<ul class="courses-details-title-check">
											<li><i
													class="bi bi-check"></i>
												<p>How to write easy and hard ABAP programs.
											</li>
											<li><i
													class="bi bi-check"></i>
												<p>How to make reports and connect different parts of SAP.</p>
											</li>
											<li><i
													class="bi bi-check"></i>
												<p>How to save and organize data.</p>
											</li>
											<li><i
													class="bi bi-check"></i>
												<p>People who already using SAP can learn more by adding SAP SD.</p>
											</li>
											<li><i
													class="bi bi-check"></i>
												<p>Anyone who wants good and high-paying jobs will get major help.</p>
											</li>
										</ul>
									</div>
									<div class="courses-feature-text  wow fadeInRight">
										<h2>Who this course is for</h2>
										<p>The course is for anyone who wants to learn how to build software, even if you are new to it. It is perfect for freshers, students, or anyone who wants to work with big companies.</p>
									</div>
									<div class="courses-details-list wow fadeInRight">
										<ul class="courses-details-title-check">
											<li><i
													class="bi bi-check"></i>
												<p>Students who want to learn new skills for future jobs.
											</li>
											<li><i
													class="bi bi-check"></i>
												<p>People are looking for jobs and want to work in big companies.</p>
											</li>
											<li><i
													class="bi bi-check"></i>
												<p>Working professionals who want to build their skills strong. </p>
											</li>
											<li><i
													class="bi bi-check"></i>
												<p>Beginners who do not know anything about ABAP but want to learn.</p>
											</li>
										</ul>
									</div>
								</div>

							</div>

							<!-- end course details  -->



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
																	 Introduction to Complete ABAP 
																</span>
																<span class="course-preview-right">
																	<span class="course-clm-prv"
																		data-video-url="https://www.youtube.com/embed/t1d5kaugnGk?si=NQDcLW1GLE0H5JTI">Preview</span>
																	<span class="course-curricolumn-duration">25m
																	</span>
															</p>
														</li>
														<li>
															<a>2 Lectures</a>
															<p>
																<span class="course-preview-left">
																	<i class="bi bi-card-checklist"></i>
																 Tables and Maintennance of Table 
																</span>
																<span class="course-preview-right">
																	<span class="course-clm-prv"
																		data-video-url="https://www.youtube.com/embed/dVHnMl9ad6M?si=dGEelIF0wtN2wCmc">Preview</span>
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
																 Item Table Creation, Foreign Keys, Views1
																</span>
																<span class="course-preview-right">
																	<span class="course-curricolumn-duration"><i
																			class="bi bi-lock-fill"></i></span>
																</span>
															</p>
														</li>
														<li>
															<a>4 Lectures</a>
															<p>
																<span class="course-preview-left">
																	<i class="bi bi-card-checklist"></i>
																 Seach Help, Table Buffering,Lock Objects
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
															Introduction to ABAP Programming, Data Types, Data Objects
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
														 Internal Table Operations
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
 Internal Table Operations, Selection Screen, Open SQL Queries
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
																 For All Entries, Joins, Messages, TCODE Creation
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
														 Classical Report Events, Interactive Classical Report Events
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
															 Interactive, Reports, Modularization Techniques
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
																ALV Reports
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
															 Interactive ALV, Introduction to Module Pool Program
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
																	 Introduction to OOPS ABAP
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
																	 OOPS Features Part 1
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
																OOPS ALV
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
																 Introduction to Data Migration
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
																 Data Migration Techniques
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
																 Introduction to Smartforms
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
															 Smartforms Part 2
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
																	 Smartforms Part 3
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
																	 Introduction to OData Services in ABAP
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
														 Features of OData
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
																 CRUD Operations in OData
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
																	 Deep Entity in OData
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
						<img src="assets/images/resource/completeabap-yt-img.svg" alt="img">
						<div class="courses-video-icon">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/t1d5kaugnGk?si=jc6qU1htGQrrwEFb"><i class="bi bi-play-fill"></i></a>
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
							<span>Amrit Raj</span>
						</div>
					</div>
					<div class="price-button">
						<a href="#">Price: ₹6,999</a>
					</div>
					<div class="price-btn">
						<a href="https://lms.ezylern.com/course/ABAPCompleteAdvancedBusinessApplicationProgramming-87995/checkout">Buy Now</a>
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
						<h3><a href="{{route('sapraptraining')}}"> RAP – RESTful Application Programming</a></h3>
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
						<h3> <a href="mm-details.html">SAP MM – Materials Management</a></h3>
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
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End Related-course Section  -->
<!--==================================================-->



<!--==================================================-->
<!-- Start  Certificate Section  -->
<!--==================================================-->

<div class="certifcate-section">
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
					<img src="assets/images/resource/abap_certification.webp" alt="certificate">
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  Certificate Section  -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Bonus-Card Section  -->
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
							<h3>Bonus 1</h3>
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
							<h3>Bonus 2</h3>
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
							<h3>Bonus 3</h3>
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
							<h3>Bonus 4</h3>
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
							<h3>Bonus 5</h3>
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
							<h3>Bonus 6</h3>
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
							<h3>Bonus 7</h3>
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
<!-- End Bonus-Card  Section  -->
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
								<p>"I had no idea of coding, but this course made it super easy. The instructor explained everything very well." </p>
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
								<p>"The best part was practicing on a real SAP system. I felt like I was working in a real company." </p>
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
								<p>"I loved the live sessions and the support team who were there to guide me on everything. " </p>
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
								<p>"This course gave me a lot of confidence, and the certificate helped me apply for jobs." </p>
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
								<p>"I enjoyed quizzes and real-world examples. I learned a lot and had fun too. " </p>
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
										<h3>What does your Complete SAP ABAP course cover from beginner to advanced?</h3>
										<p>The course teaches everything from basic to advanced ABAP, including coding, reports, forms, and modern topics. </p>
									</li>
									<li>
										<h3>Is this SAP ABAP course hands-on with coding exercises and real projects?</h3>
										<p>Yes, you will do coding exercises and real SAP projects to learn.</p>
									</li>
									<li>
										<h3>Can I learn SAP ABAP online without prior programming knowledge? </h3>
										<p>Yes, you can learn this course even if you have never done programming before. </p>
									</li>
									<li>
										<h3>Does the SAP ABAP course include topics like CDS Views, OData, and RAP?</h3>
										<p>Yes, it covers CDS views, OData, and RAP for building smart apps.</p>
									</li>
									<li>
										<h3>How is this course different from other SAP ABAP online training options?</h3>
										<p>This course is easy to understand, beginner-friendly, and gives more practice than many other training.</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div id="tab2" class="course-faq-tab_content">
								<ul class="course-faq-accordion wow fadeInRight">
									<li>
										<h3>What is the duration of the course?</h3>
										<p> The course can be completed in 6-8 weeks with regular study and practice.</p>
									</li>
									<li>
										<h3>Will I get a certificate after completion?</h3>
										<p> Yes, you will get certification at the end of the course, which will add value to your resume.</p>
									</li>
									<li>
										<h3> Is there any support if I get stuck?</h3>
										<p>Yes, you will get access to 24/7 assistance, which will help you with your problem. </p>
									</li>
									<li>
										<h3>Is this course suitable for freshers?</h3>
										<p>Yes, freshers and beginners can easily learn and grow.</p>
									</li>
									<li>
										<h3>Will I learn real-time project skills?</h3>
										<p>Yes, the course covers real-time examples of big companies to make you understand better. </p>
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



<!-- start reviews javascript -->
<script>
	
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

<!--*********************Curriculum Javascript****************** -->
<script>
	document.addEventListener("DOMContentLoaded", () => {
		const allItems = document.querySelectorAll("#lectureList li");
		const loadMoreBtn = document.getElementById("loadMore");
		const showLessBtn = document.getElementById("showLess");
		let visibleCount = 10;

		updateVisibleItems();

		function updateVisibleItems() {
			allItems.forEach((li, index) => {
				if (index < visibleCount) {
					li.classList.add("show");
				} else {
					li.classList.remove("show");
					li.classList.remove("open");
				}
			});

			loadMoreBtn.style.display = visibleCount < allItems.length ? "inline-block" : "none";
			showLessBtn.style.display = visibleCount > 10 ? "inline-block" : "none";
		}

		loadMoreBtn.addEventListener("click", () => {
			visibleCount = allItems.length;
			updateVisibleItems();
		});
		showLessBtn.addEventListener("click", () => {
			document.getElementById("lectureList").scrollIntoView({
				behavior: "smooth",
				block: "start"
			});
			setTimeout(() => {
				visibleCount = 10;
				updateVisibleItems();
			}, 400);
		});
		document.querySelectorAll(".course-accordion li").forEach(item => {
			const header = item.querySelector("a");

			if (header) {
				header.addEventListener("click", (e) => {
					e.preventDefault();
					const isOpen = item.classList.contains("open");

					document.querySelectorAll(".course-accordion li").forEach(li => {
						li.classList.remove("open");
					});
					if (!isOpen) {
						item.classList.add("open");
					}
				});
			}
		});
	});
</script>

<!--*********************Curriculum Javascript****************** -->

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

@endsection