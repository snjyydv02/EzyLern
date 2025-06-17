@extends('layouts.app')



@section('meta_title', 'About Us - Know More about Ezylern')
@section('meta_description', 'Learn about Ezylern s mission to provide easy lern SAP training Empowering learners with skills for a successful SAP career')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())


@section('og_type', 'website')
@section('og_title', 'About Us - Know More about Ezy learn')
@section('og_description', 'Learn about Ezylern s mission to provide easy learn SAP training Empowering learners with skills for a successful SAP career')

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
						<h1>About Us</h1>
					</div>
					<ul>
						<li><a href="{{route('home')}}">Home</a></li>
						<li><i class="bi bi-chevron-right"></i></li>
						<li>About Us</li>
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
					<h5>About Us</h5>
					<h1>To Lead Innovation in Online Education and Digital Empowerment.</h1>
					<p class="section-dsc">EzyLearn, powered by Digivibrant Techsolutions, is a modern e-learning platform designed to make quality education accessible anytime, anywhere. We offer recorded online courses across various subjects, crafted by industry experts to empower students, professionals, and lifelong learners with flexible, affordable, and high-quality learning experiences.</p>
					<p class="section-dsc">That’s why we offer structured, well-designed courses across multiple technologies — and we’ll always keep most of our content free for the community.</p>
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
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  about Section  -->
<!--==================================================-->





<!--==================================================-->
<!-- Start  counter Section  -->
<!--==================================================-->

<div class="counter-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="single-counter-box wow fadeInLeft">
					<div class="counter-text">
						<h1 class="counter">1000</h1>
						<span>+</span>
						<p>Students Enrolled</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-counter-box wow fadeInUp">
					<div class="counter-text up">
						<h1 class="counter">50</h1>
						<span>+</span>
						<p>Winning Award</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-counter-box wow fadeInDown">
					<div class="counter-text upper">
						<h1 class="counter">40</h1>
						<span>+</span>
						<p>Academic Programs</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-counter-box wow fadeInRight">
					<div class="counter-text">
						<h1 class="counter">20</h1>
						<span>+</span>
						<p>Online Instructor</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  counter Section  -->
<!--==================================================-->





<!--==================================================-->
<!-- Start  skill Section  -->
<!--==================================================-->

<div class="skill-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="section-title center-title wow fadeInLeft">
					<h5>WHAT WE OFFER</h5>
					<h1>Learn New Skills When And</h1>
					<h1>Where You Like</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 wow fadeInRight">
				<div class="single-skill-box">
					<div class="skil1-icon">
						<img src="assets/images/resource/skill-icon.png" alt="skill">
					</div>
					<div class="skill-title">
						<h3>Remote Learning</h3>
						<p>Empowering education through seamless, flexible, and accessible online learning solutions.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 wow fadeInUp">
				<div class="single-skill-box">
					<div class="skil1-icon">
						<img src="assets/images/resource/skill-icon2.png" alt="skill">
					</div>
					<div class="skill-title">
						<h3>Awesome Tutors</h3>
						<p>Expert tutors unlocking your potential with personalized solutions for academic success.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6  wow fadeInDown">
				<div class="single-skill-box">
					<div class="skil1-icon">
						<img src="assets/images/resource/skill-icon1.png" alt="skill">
					</div>
					<div class="skill-title">
						<h3>Global Certificate</h3>
						<p>Achieve global recognition with accredited certifications, empowering careers worldwide.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6  wow fadeInRight">
				<div class="single-skill-box">
					<div class="skil1-icon">
						<img src="assets/images/resource/skill-icon3.png" alt="skill">
					</div>
					<div class="skill-title">
						<h3>Carrier Guideline</h3>
						<p>Your path to success with expert advice, empowering informed career decisions.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  skill Section  -->
<!--==================================================-->





<!--==================================================-->
<!-- Start  work Section  -->
<!--==================================================-->

<div class="work-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="work-thumb wow fadeInLeft">
					<img src="assets/images/resource/maxresdefault.webp" alt="thumb">
					<div class="play-button">
						<a class="video-vemo-icon venobox vbox-item"
							data-vbtype="youtube"
							data-autoplay="true"
							href="https://youtu.be/PQ4c1uPSvFU?si=XcTw1EoagkmMA3c5">
							play
						</a>

					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title up wow fadeInRight">
					<h5>FREE WORKSHOP</h5>
					<h1>Join Our Free Workshops</h1>
					<p>
						Learn from industry experts and take your skills to the next level.
						Gain practical knowledge through engaging, interactive sessions.
						Advance your professional journey with hands-on training.
						Unlock your potential with real-world insights and expert guidance.
					</p>

					<div class="work-button">
						<a href="https://youtu.be/PQ4c1uPSvFU?si=XcTw1EoagkmMA3c5">More Upcoming Workshop <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End work Section  -->
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
<!-- Start  testimonisl Section  -->
<!--==================================================-->

<div class="testimonial-section2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title wow fadeInLeft">
					<h5>TESTIMONIALS</h5>
					<h1>Our Lovely Students Feedback</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="testi-list owl-carousel">
				<div class="col-lg-12">
					<div class="single-testimonial-box">
						<div class="testimonial-content">
							<div class="testi-star-icon">
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
							</div>
							<div class="testi-desc">
								<p>"I did SAP SD course at Ezy Lern & Training Center. The training was excellent and trainer had super knowledge on SAP SD which makes us to understand the concepts easily and each session makes us interest especially the practical session.The support I got from the Ezy Lern team helped me during the training period." </p>
							</div>
							<div class="testi-people">
								<img src="assets/images/resource/testi_img1.png" alt="igm">
							</div>
							<div class="testi-people-name">
								<h4>Kuldeep Kulkarni</h4>
								<p>SAP SD Consultant</p>
							</div>
							<div class="testi-shape">
								<img src="assets/images/resource/testi-shape.png" alt="shape">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-testimonial-box">
						<div class="testimonial-content">
							<div class="testi-star-icon">
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
							</div>
							<div class="testi-desc">
								<p>"Ezy Lern SAP Tranning center is well managed and equipped with knowledgeable staff and trainer, counsellors and good to suggest you right module as per experience and academics, after completion of course the institute is very good in their placement and serices. Thank you Ezy Lern for making my dream come true, got placed in MNC." </p>
							</div>
							<div class="testi-people">
								<img src="assets/images/resource/testi_img2.png" alt="igm">
							</div>
							<div class="testi-people-name">
								<h4>Shweta Mehta</h4>
								<p>Module SAP SD</p>
							</div>
							<div class="testi-shape">
								<img src="assets/images/resource/testi-shape.png" alt="shape">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-testimonial-box">
						<div class="testimonial-content">
							<div class="testi-star-icon">
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
							</div>
							<div class="testi-desc">
								<p>"I did SAP SD course at Ezy Lern & Training Center. The training was excellent and trainer had super knowledge on SAP SD which makes us to understand the concepts easily and each session makes us interest especially the practical session.The support I got from the Ezy Lern team helped me during the training period." </p>
							</div>
							<div class="testi-people">
								<img src="assets/images/resource/testi_img1.png" alt="igm">
							</div>
							<div class="testi-people-name">
								<h4>Kuldeep Kulkarni</h4>
								<p>SAP SD Consultant</p>
							</div>
							<div class="testi-shape">
								<img src="assets/images/resource/testi-shape.png" alt="shape">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-testimonial-box">
						<div class="testimonial-content">
							<div class="testi-star-icon">
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
							</div>
							<div class="testi-desc">
								<p>"Ezy Lern SAP Tranning center is well managed and equipped with knowledgeable staff and trainer, counsellors and good to suggest you right module as per experience and academics, after completion of course the institute is very good in their placement and serices. Thank you Ezy Lern for making my dream come true, got placed in MNC." </p>
							</div>
							<div class="testi-people">
								<img src="assets/images/resource/testi_img2.png" alt="igm">
							</div>
							<div class="testi-people-name">
								<h4>Shweta Mehta</h4>
								<p>Module SAP SD</p>
							</div>
							<div class="testi-shape">
								<img src="assets/images/resource/testi-shape.png" alt="shape">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-testimonial-box">
						<div class="testimonial-content">
							<div class="testi-star-icon">
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
							</div>
							<div class="testi-desc">
								<p>"I did SAP SD course at Ezy Lern & Training Center. The training was excellent and trainer had super knowledge on SAP SD which makes us to understand the concepts easily and each session makes us interest especially the practical session.The support I got from the Ezy Lern team helped me during the training period." </p>
							</div>
							<div class="testi-people">
								<img src="assets/images/resource/testi_img1.png" alt="igm">
							</div>
							<div class="testi-people-name">
								<h4>Kuldeep Kulkarni</h4>
								<p>SAP SD Consultant</p>
							</div>
							<div class="testi-shape">
								<img src="assets/images/resource/testi-shape.png" alt="shape">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-testimonial-box">
						<div class="testimonial-content">
							<div class="testi-star-icon">
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
								<p><i class="bi bi-star-fill"></i></p>
							</div>
							<div class="testi-desc">
								<p>"Ezy Lern SAP Tranning center is well managed and equipped with knowledgeable staff and trainer, counsellors and good to suggest you right module as per experience and academics, after completion of course the institute is very good in their placement and serices. Thank you Ezy Lern for making my dream come true, got placed in MNC." </p>
							</div>
							<div class="testi-people">
								<img src="assets/images/resource/testi_img2.png" alt="igm">
							</div>
							<div class="testi-people-name">
								<h4>Shweta Mehta</h4>
								<p>Module SAP SD</p>
							</div>
							<div class="testi-shape">
								<img src="assets/images/resource/testi-shape.png" alt="shape">
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End testimonial Section  -->
<!--==================================================-->




@endsection