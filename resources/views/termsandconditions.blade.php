@extends('layouts.app')

@section('meta_title', 'Terms & Conditions - Ezylern')
@section('meta_description', 'Review the terms and conditions for using Ezylerns SAP courses. Understand the rules and guidelines for your SAP learning experience.')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())
@section('og_type', 'website')
@section('og_title', 'Terms & Conditions - Ezylern')
@section('og_description', 'Review the terms and conditions for using Ezylerns SAP courses. Understand the rules and guidelines for your SAP learning experience.')
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
                        <h1>Terms and Conditions</h1>
                    </div>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>Terms & Conditions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End  breadcumb Section  -->
<!--==================================================-->



<!--==================================================-->
<!-- Start  Terms and Conditions Section  -->
<!--==================================================-->

<section class="terms_conditions_section py-5">
    <div class="container terms_hero_section">
        <div class="row align-items-center">

            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="terms-thumb">
                    <img src="assets/images/resource/terms_conditions.png" alt="Terms Illustration" class="img-fluid rounded " />
                </div>
            </div>


            <div class="col-lg-6" data-aos="fade-left">
                <div class="terms-title">
                    <h1 class="mb-3">Terms and Conditions – EzyLern</h1>
                    <p class="section-dsc">
                        Welcome to
                        <a class="terms_info" href="mailto:info@ezylern.com">info@ezylern.com</a>. These terms and conditions outline the rules and regulations for the use of EzyLern’s platform and services.
                    </p>
                    <br>
                    <p class="section-dsc">
                        By accessing this website or enrolling in any of our courses, you agree to accept and comply with the terms outlined on this page. If you disagree with any part of these terms, please do not continue to use our platform.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==================================================-->
<!-- End  Terms and Conditions Section  -->
<!--==================================================-->


<!--==================================================-->
<!-- Start  work Section  -->
<!--==================================================-->
<section class="terms_conditions py-5">
    <div class="container">
        <!-- Loop structure starts here -->
        <div class="row align-items-center mb-5 term_condition">
            <div class="col-lg-6">
                <div class="work-thumb" data-aos="fade-right">
                    <img src="assets/images/resource/course_access.png" alt="Course Access" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="terms-title" data-aos="fade-left">
                    <h2>1. Course Access & Usage</h2>
                    <p>All recorded video courses and learning materials provided on EzyLern are for your personal use only. You may not duplicate, redistribute, or resell any course content without prior written consent from EzyLern.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5 flex-lg-row-reverse term_condition">
            <div class="col-lg-6">
                <div class="work-thumb" data-aos="fade-left">
                    <img src="assets/images/resource/account_responsibility.png" alt="Account Responsibility" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="terms-title" data-aos="fade-right">
                    <h2>2. Account Responsibility</h2>
                    <p>You are responsible for maintaining the confidentiality of your account login credentials and for all activities that occur under your account. EzyLern will not be held liable for any unauthorized access or misuse.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5 term_condition">
            <div class="col-lg-6">
                <div class="work-thumb" data-aos="fade-right">
                    <img src="assets/images/resource/payments_refunds.png" alt="Payments" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="terms-title" data-aos="fade-left">
                    <h2>3. Payments & Refunds</h2>
                    <p>All payments for recorded video courses are final and non-refundable unless stated otherwise under a specific offer. Refund requests (if applicable) must be submitted within 5 days of purchase and are subject to review.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5 flex-lg-row-reverse term_condition">
            <div class="col-lg-6">
                <div class="work-thumb" data-aos="fade-left">
                    <img src="assets/images/resource/intellectual_property.png" alt="Intellectual Property" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="terms-title" data-aos="fade-right">
                    <h2>4. Intellectual Property</h2>
                    <p>All content on EzyLern — including videos, graphics, tutorials, logos, and branding — is the intellectual property of EzyLern and protected by applicable copyright laws.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5 term_condition">
            <div class="col-lg-6">
                <div class="work-thumb" data-aos="fade-right">
                    <img src="assets/images/resource/code_conduct.png" alt="Code of Conduct" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="terms-title" data-aos="fade-left">
                    <h2>5. Code of Conduct</h2>
                    <p>Users are expected to use the platform respectfully. Any abuse, inappropriate language, or attempts to harm the platform’s integrity will lead to account suspension or termination.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5 flex-lg-row-reverse term_condition">
            <div class="col-lg-6">
                <div class="work-thumb" data-aos="fade-left">
                    <img src="assets/images/resource/service_availability.png" alt="Service Availability" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="terms-title" data-aos="fade-right">
                    <h2>6. Service Availability</h2>
                    <p>While we strive to ensure uninterrupted access to the platform, EzyLern cannot guarantee that the services will always be available. Scheduled maintenance and unforeseen downtime may occur occasionally.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5 term_condition">
            <div class="col-lg-6">
                <div class="work-thumb" data-aos="fade-right">
                    <img src="assets/images/resource/amendments.png" alt="Amendments" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="terms-title" data-aos="fade-left">
                    <h2>7. Amendments</h2>
                    <p>EzyLern reserves the right to revise these Terms & Conditions at any time without notice. Continued use of the platform implies acceptance of the updated terms.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--==================================================-->
<!-- End work Section  -->
<!--==================================================-->


@endsection