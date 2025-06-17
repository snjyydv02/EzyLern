@extends('layouts.app')



@section('meta_title', 'Privacy Policy - Ezylern SAP Training')
@section('meta_description', 'Read Ezylerns Privacy Policy to understand how we protect your personal data and ensure your privacy during SAP training.')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())


@section('og_type', 'website')
@section('og_title', 'Ezylern Privacy Policy | Protecting Your Data')
@section('og_description', 'Ezylern values your privacy. Learn how we protect your personal data and handle your information safely during SAP learning.')

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
                        <h1>Privacy Policy</h1>
                    </div>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>Privacy Policy</li>
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
<!-- Start Privacy-Hero-Section  -->
<!--==================================================-->

<div class="privacy_policy_section ">
    <div class="container privacy_hero_section">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="privacy_policy_thumb wow fadeInLeft">
                    <img src="assets/images/resource/privacy_policy.png" alt="thumb">
                    <div class="we-are-all-shape">
                        <div class="we-are-shape">
                            <img src="assets/images/resource/we-are-shape.png" alt="shape">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title wow fadeInRight">
                    <h1>EzyLern Privacy Policy</h1>
                </div>
                <div class="single-we-are-box wow fadeInRight">
                    <div class="we-are-content">
                        <h1>01</h1>
                        <p>Please read the following Privacy Policy for the services made available on www.ezylern.com. The EzyLern Website on which our services are provided may hereafter be referred to as the “Platform”.
                        </p>
                    </div>
                </div>
                <div class="single-we-are-box wow fadeInRight">
                    <div class="we-are-content">
                        <h1>02</h1>
                        <p>Please ensure you read this Privacy Policy before using any services from us. It may be updated from time to time, so we encourage you to stay informed about how we handle your personal information and safeguard your privacy.
                        </p>
                    </div>
                </div>
                <div class="single-we-are-box wow fadeInRight">
                    <div class="we-are-content">
                        <h1>03</h1>
                        <p>EzyLern is an online education platform that provides recorded video courses for all subjects and skill levels. By submitting your information to us, you consent to our collection and use of it as described here. If changes are made to this policy, they will be posted on this page to keep you informed.

                        </p>
                    </div>
                </div>
                <div class="single-we-are-box wow fadeInRight">
                    <div class="we-are-content">
                        <h1>04</h1>
                        <p>By accessing the EzyLern Platform, you agree to be bound by the terms of this Privacy Policy.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--==================================================-->
<!-- End  Privacy-Hero-Section  -->
<!--==================================================-->



<!--==================================================-->
<!-- Start  work Section  -->
<!--==================================================-->

<div class="work-section2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="privacy-thumb wow fadeInLeft">
                    <img src="assets/images/resource/privacy_personal_information.png" alt="thumb">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-title up wow fadeInRight">
                    <h1>Collection of Personally Identifiable Information</h1>
                    <p>We collect limited personal information to enhance your learning experience and provide better services.
                        This may include your name, email address, and course activity.
                        The data helps us personalize content, offer support, and improve our platform.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-icon-list wow fadeInLeft">
                            <p><i class="bi bi-check-lg"></i> Full Name</p>
                            <p><i class="bi bi-check-lg"></i> Email Address</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-icon-list wow fadeInLeft">
                            <p><i class="bi bi-check-lg"></i> Phone Number</p>
                            <p><i class="bi bi-check-lg"></i> Location (for analytics)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End work Section  -->
    <!--==================================================-->



    @endsection