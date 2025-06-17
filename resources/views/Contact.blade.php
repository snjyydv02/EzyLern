@extends('layouts.app')

@section('meta_title', 'Contact Ezylern | Get in Touch for SAP Training Support')
@section('meta_description', 'Have questions? Contact Ezylern for inquiries about SAP courses, support, or guidance on your learning journey. We are here to help.')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())

@section('og_type', 'website')
@section('og_title', 'Contact Ezylern | Reach Out for SAP Training Queries')
@section('og_description', 'Need assistance with SAP courses? Contact Ezylern today for any questions or support regarding your SAP learning experience. We are happy to help!')
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
						<h1>Contact Us</h1>
					</div>
					<ul>
						<li><a href="{{route('home')}}">Home</a></li>
						<li><i class="bi bi-chevron-right"></i></li>
						<li>Contact Us</li>
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
<!-- Start  Contact-us Section  -->
<!--==================================================-->

<div class="about-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about-thumb wow fadeInLeft">
					<img src="assets/images/resource/contact_us_img.webp" alt="thumb" loading="lazy">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title wow fadeInRight">
					<h5>Contact Us</h5>
					<h1>We’re Here to Help—Reach Out to Us Anytime!</h1>
					<p class="section-dsc">EzyLern, India's next-gen edtech platform, is committed to helping students and professionals resolve their issues quickly and efficiently. We aim to respond to all queries within 7 business days. For assistance, call us at +91 9220601945, 24×7. If the line is busy, please try again after 15 minutes. You can also use the “Contact Us” form on our website for course-related help.</p>
					<p class="section-dsc">We value your input. Your suggestions help us improve and serve you better through our LMS platform and recorded video content.</p>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="about-icon-list wow fadeInRight">
							<p><i class="bi bi-check-lg"></i> Reach Out to Us</p>
							<p><i class="bi bi-check-lg"></i> Connect with Us</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-icon-list wow fadeInRight">
							<p><i class="bi bi-check-lg"></i> Contact Our Team</p>
							<p><i class="bi bi-check-lg"></i> Get Support</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  Contact-us Section  -->
<!--==================================================-->





<!--==================================================-->
<!-- Start  contact us Section  -->
<!--==================================================-->

<div class="contact-us-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title wow fadeInLeft">
					<h5>CONTACT INFO</h5>
					<h1>Get In Touch With us</h1>
				</div>
				<div class="contact-box wow fadeInRight">
					<div class="contact-icon">
						<i class="bi bi-telephone"></i>
					</div>
					<div class="contact-content">
						<p>call us</p>
						<h4>+91 9220601945</h4>
					</div>
				</div>
				<div class="contact-box wow fadeInLeft">
					<div class="contact-icon">
						<i class="bi bi-at"></i>
					</div>
					<div class="contact-content">
						<p>Email</p>
						<h4><a href="mailto:info@ezylern.com" target="_blank">info@ezylern.com</a></h4>
					</div>
				</div>
				<div class="contact-box wow fadeInDown">
					<div class="contact-icon">
						<i class="bi bi-geo-alt-fill"></i>
					</div>
					<div class="contact-content">
						<p>Location</p>
						<h4>Green Boulevard 5th floor, Tower C, Block B, Sec 62 Noida, Uttar Pradesh 201309</h4>
					</div>

				</div>
				<div class="contact-box wow fadeInDown">
					<div class="contact_icon">
						<div class="contact-social-icon wow fadeInLeft">
							<ul>
								<li><a href="https://wa.me/+919220601945"><i class="fab fa-whatsapp"></i></a></li>
								<li><a href="https://www.youtube.com/@ezyLern"><i class="bi bi-youtube"></i></a></li>
								<li><a href="https://www.linkedin.com/company/ezylern"><i class="fab fa-linkedin"></i></a></li>
								<li><a href="https://t.me/+rUKXTBB1XtlhYTg1"><i class="fab fa-telegram"></i></a></li>
								<li><a href="https://www.instagram.com/ezylern/"><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://www.facebook.com/people/EzyLern-EzyLern/pfbid02hekZiDmLYdFqCHduAyLwKC5URJwR137VF9BVuUqArbyVZGCZChrJR3Skvwm4JxE8l/"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://twitter.com/ezyLern_info"><i class="fab fa-x-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="single-form-box">
					<div class="form-title">
						<h3>Send Me A Message</h3>
					</div>




					<form action="#" method="POST" id="dreamit-form"
						onsubmit="return validateForm()">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-box wow fadeInLeft">
									<input type="text" id="name" name="Name" placeholder="Your Name"
										required>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-box wow fadeInRight">
									<input type="email" id="email" name="Email" placeholder="Your Email"
										required>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-box wow fadeInLeft">
									<input type="text" id="phone" name="phone" placeholder="Phone"
										required>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-box wow fadeInRight">
									<textarea name="message" id="message" cols="30" rows="10"
										placeholder="Your Message Here"></textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="submit-button wow fadeInLeft">
									<button type="submit">Submit Now</button>
								</div>
							</div>
						</div>
					</form>


				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- Start  contact us Section  -->
<!--==================================================-->






<!--==================================================-->
<!-- Start  google map Section  -->
<!--==================================================-->

<div class="goolg-map-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="goolg-map">
					<iframe src="https://maps.google.com/maps?width=100%25&height=300&hl=en&q=Regus,%20Green%20Boulevard%20Level%205,%20Tower%20C,%203C%20Green%20Boulevard,%20Sector-62,%20Noida%20%E2%80%93%20201309&t=&z=14&ie=UTF8&iwloc=B&output=embed">
					</iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- Start  google map Section  -->
<!--==================================================-->


<!-- Contact Form Js -->


<script>
	// Restrict number in Name field
	document.getElementById("name").addEventListener("keypress", function(e) {
		const char = String.fromCharCode(e.which);
		if (!/^[a-zA-Z\s]+$/.test(char)) {
			e.preventDefault();
		}
	});

	// Restrict text in Phone field
	document.getElementById("phone").addEventListener("keypress", function(e) {
		const char = String.fromCharCode(e.which);
		if (!/^[0-9]$/.test(char)) {
			e.preventDefault();
		}
	});

	// Validation + success message
	function validateForm() {
		const name = document.getElementById("name").value.trim();
		const email = document.getElementById("email").value.trim();
		const phone = document.getElementById("phone").value.trim();

		const nameRegex = /^[A-Za-z\s]+$/;
		const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		const phoneRegex = /^[0-9]+$/;

		if (!nameRegex.test(name)) {
			alert("Please enter a valid name (only letters).");
			return false;
		}

		if (!emailRegex.test(email)) {
			alert("Please enter a valid email address.");
			return false;
		}

		if (!phoneRegex.test(phone)) {
			alert("Please enter a valid phone number (only digits).");
			return false;
		}

		// ✅ Show success message
		alert("Form submitted successfully!");

		// (Optional) reset form
		document.getElementById("dreamit-form").reset();

		return false; // ⛔ Prevent actual submission since action="#" is dummy
	}
</script>


<!-- Contact Form Js -->
@endsection