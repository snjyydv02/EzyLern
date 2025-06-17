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
<style>
	.breadcumb-carousel-section {
		background: url(../images/breadcumb/breadcumb-bg.png);
		height: 145px;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
		position: relative;
	}

	.carousel-container {
		padding-left: 30px;
		padding-right: 30px;
	}

	@media (min-width: 768px) {
		.carousel-container {
			padding-left: 60px;
			padding-right: 60px;
		}
	}

	@media (min-width: 992px) {
		.offset-lg-0 {

			padding: 1px;
			!important;
		}
	}
</style>
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
<!-- Start  Carousel Section  -->
<!--==================================================-->

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-12 offset-lg-0 col-md-45">
			<div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="assets/images/resource/carousel_abap_img.png" class="d-block w-100 img-fluid" alt="Banner 1">
					</div>
					<div class="carousel-item">
						<img src="assets/images/resource/carousel_abap_img.png" class="d-block w-100 img-fluid" alt="Banner 2">
					</div>
					<!-- Add more carousel-item as needed -->
				</div>

				<!-- Controls -->
				<button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				</button>
			</div>
		</div>
	</div>
</div>




<!--==================================================-->
<!-- End  Carousel Section  -->
<!--==================================================-->



<!--==================================================-->
<!-- Start  Course-List Section  -->
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
					<a href="#">View All Courses <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
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
						<h3> <a href="rap-details.html">SAP RAP – RESTful Application Programming</a></h3>
						<div class="text-icon">
							<p class="discount_color"> Discount of 66% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹4,999</span>
							<span class="original-price">₹17,000</span>
							<div class="note">(For full batch)</div>
						</div>
						<div class="buttom_line"></div>
						<div class="button-group">
							<div class="explore">
								<p><a href="rap-details.html">Explore</a></p>
							</div>
							<div class="project-button">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
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
						<h3> <a href="mm-details.html"> MM – Materials Management</a></h3>
						<div class="text-icon">
							<p> Discount of 62% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹4,999</span>
							<span class="original-price">₹16,000</span>
							<div class="note">(For full batch)</div>
						</div>
						<div class="buttom_line"></div>
						<div class="button-group">
							<div class="explore">
								<p><a href="mm-details.html">Explore</a></p>
							</div>
							<div class="project-button">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
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
						<h3><a href="fico-details.html">FICO – Financial Accounting and Controlling</a></h3>
						<div class="text-icon">
							<p> Discount of 62% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹4,999</span>
							<span class="original-price">₹16,000</span>
							<div class="note">(For full batch)</div>
						</div>
						<div class="buttom_line"></div>
						<div class="button-group">
							<div class="explore">
								<p><a href="fico-details.html">Explore</a></p>
							</div>
							<div class="project-button">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
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
						<h3> <a href="abap-details.html">ABAP On HANA – Advanced Business Application Programming</a></h3>
						<div class="text-icon">
							<p>Discount of 69% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹4,999</span>
							<span class="original-price">₹17,999</span>
							<div class="note">(For full batch)</div>
						</div>
						<div class="buttom_line"></div>
						<div class="button-group">
							<div class="explore">
								<p><a href="abap-details.html">Explore</a></p>
							</div>
							<div class="project-button">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
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
						<h3> <a href="complete-abap-details.html">Complete ABAP – Advanced Business Application Programming</a></h3>
						<div class="text-icon">
							<p> Discount of 62% applied</p>
						</div>
						<div class="price-box">
							<span class="discounted-price">₹6,999</span>
							<span class="original-price">₹16,000</span>
							<div class="note">(For full batch)</div>
						</div>
						<div class="buttom_line"></div>
						<div class="button-group">
							<div class="explore">
								<p><a href="complete-abap-details.html">Explore</a></p>
							</div>
							<div class="project-button">
								<a href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>





@endsection