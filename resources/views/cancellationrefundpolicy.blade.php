@extends('layouts.app')



@section('meta_title', 'Cancellation & Refund Policy | Ezylern')
@section('meta_description', 'Review Ezylerns cancellation and refund policy for SAP courses. Understand how to request cancellations or refunds easily.')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())


@section('og_type', 'website')
@section('og_title', 'Cancellation & Refund Policy | Ezylern')
@section('og_description', 'Review Ezylerns cancellation and refund policy for SAP courses. Understand how to request cancellations or refunds easily.')

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
                        <h1>Cancellation & Refund Policy</h1>
                    </div>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>Cancellation & Refund Policy</li>
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
<!-- Start  Refund Section  -->
<!--==================================================-->

<div class="refund_policy_section">

    <div class="container refund_hero_section">
        <div class="row align-items-center">
            <div class="col-lg-6 refund_img">
                <div class="we-are-thumb wow fadeInLeft">
                    <img src="assets/images/resource/refund_policy.png" alt="thumb">
                    <div class="we-are-all-shape">
                        <div class="we-are-shape">
                            <img src="assets/images/resource/we-are-shape.png" alt="shape">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title wow fadeInRight">
                    <h1>Cancellation & Refund Policy – EzyLern</h1>
                </div>
                <div class="single-we-are-box wow fadeInRight">
                    <div class="we-are-content">
                        <h1>01</h1>
                        <h3>Course Cancellation</h3>
                        <p>Since all our courses are in digital video format and made available for 1 year access immediately upon payment, we do not support course cancellation after purchase is completed.</p>
                    </div>
                </div>
                <div class="single-we-are-box wow fadeInLeft">
                    <div class="we-are-content">
                        <h1>02</h1>
                        <h3>Refund Request Procedure</h3>
                        <p>To request a refund, please contact our support team at support@EzyLern.in within 24 hours of payment. Refunds (if approved) will be processed within 5–7 business days via the original payment method.</p>
                    </div>
                </div>
                <div class="single-we-are-box wow fadeInLeft">
                    <div class="we-are-content">
                        <h1>03</h1>
                        <h3>Refund Conditions</h3>
                        <p>Refunds are only considered in the following exceptional cases: <br>

                            1. Duplicate payment due to a technical error <br>
                            2. Payment made but course access not granted within 24 hours (and support team unable to resolve) <br>
                            3. Wrong course enrollment reported within 24 hours of purchase
                        </p>
                    </div>
                </div>
                <div class="single-we-are-box wow fadeInLeft">
                    <div class="we-are-content">
                        <h1>04</h1>
                        <h3>No Refunds For</h3>
                        <p>1. Completion of a significant portion of the course content <br>
                            2. Requests made after 24 hours of purchase <br>
                            3. Course dissatisfaction due to personal preferences (e.g., teaching style, expectations) within 24 hours
                        </p>
                    </div>
                </div>
                <div class="single-we-are-box wow fadeInLeft">
                    <div class="we-are-content">
                        <h1>05</h1>
                        <h3>Our Commitment</h3>
                        <p>While our courses are non-refundable under general conditions, we are committed to solving any genuine access or technical issues on a priority basis. Please reach out — we are here to help! <br>
                        </p>
                        <div class="refund_email_info">
                            <a href="mailto:info@ezylern.com" target="_blank">info@ezylern.com</a>
                        </div>
                    </div>

                </div>
                <div class="contact_icon">

                    <div class="refund-social-icon wow fadeInLeft">
                        <ul>
                            <li><a href="https://wa.me/+919220601945"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="https://www.youtube.com/@ezyLern"><i class="bi bi-youtube"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/ezylern"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="https://t.me/+rUKXTBB1XtlhYTg1"><i class="fab fa-telegram"></i></a></li>
                            <li><a href="https://www.instagram.com/ezylern/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/people/EzyLern-EzyLern/pfbid02hekZiDmLYdFqCHduAyLwKC5URJwR137VF9BVuUqArbyVZGCZChrJR3Skvwm4JxE8l/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/ezylern"><i class="fab fa-x-twitter"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End  Refund Section  -->
<!--==================================================-->







@endsection