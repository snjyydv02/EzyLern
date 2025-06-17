@extends('layouts.app')



@section('meta_title', 'Our Pricing - Ezy Lern')
@section('meta_description', 'Discover Ezylerns competitive pricing for SAP courses. Affordable plans to kickstart your SAP learning journey. Enroll today!.')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())


@section('og_type', 'website')
@section('og_title', 'Our Pricing - Ezy Lern')
@section('og_description', 'See pricing for our easy learn SAP courses. Get industry-ready training at the best prices.')

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
                        <h1>Pricing Details</h1>
                    </div>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i></li>
                        <li>Pricing Details</li>
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
<!-- Start  Pricing Details Section  -->
<!--==================================================-->


<style>
    /* Base Section Styling */
    .privacy-section {
        background: #f9fbff;
        padding: 60px 20px;
        font-family: 'Segoe UI', sans-serif;
        color: #111;
        position: relative;
    }

    /* Container Width */
    .privacy-section .container {
        max-width: 850px;
        margin: auto;
    }

    /* Headings */
    .privacy-section h1 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 25px;
    }

    .privacy-section h2 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-top: 40px;
        margin-bottom: 10px;
    }

    /* Paragraphs */
    .privacy-section p {
        font-size: 1rem;
        line-height: 1.7;
        margin-bottom: 16px;
    }

    /* Lists */
    .privacy-section ul {
        padding-left: 20px;
    }

    .privacy-section ul li {
        margin-bottom: 10px;
        line-height: 1.6;
    }

    /* Links */
    .privacy-section a {
        color: #4a00e0;
        text-decoration: underline;
    }

    /* Social Sidebar */
    .social-icons {
        position: fixed;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 10px;
        z-index: 1000;
    }

    .social-icons img {
        width: 36px;
        transition: transform 0.3s ease;
    }

    .social-icons img:hover {
        transform: scale(1.1);
    }

    /* Floating Call Button */
    .call-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #4a00e0;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
        z-index: 1000;
        transition: background 0.3s ease;
    }

    .call-float:hover {
        background: #3700b3;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
        .privacy-section h1 {
            font-size: 1.6rem;
            text-align: center;
        }

        .privacy-section h2 {
            font-size: 1.25rem;
        }

        .privacy-section p,
        .privacy-section ul li {
            font-size: 0.95rem;
            text-align: justify;
        }

        .social-icons {
            left: 5px;
        }

        .call-float {
            width: 52px;
            height: 52px;
        }

        .call-float img {
            width: 24px;
        }
    }

    @media (max-width: 480px) {
        .privacy-section {
            padding: 40px 15px;
        }

        .privacy-section h1 {
            font-size: 1.4rem;
        }

        .privacy-section h2 {
            font-size: 1.15rem;
        }
    }
</style>

<section class="privacy-section">
    <div class="container">
        <h1>Pricing Details – EzyLern</h1>

        <p>
            At <strong>EzyLern</strong>, we strive to make high-quality education accessible and affordable for all learners. Our platform offers transparent, one-time pricing for recorded video courses across multiple categories and skill levels.
        </p>

        <h2>1. Course Fee Structure</h2>
        <p>
            Our courses are priced based on content length, complexity, and certification options. You’ll find both:
        </p>
        <ul>
            <li><strong>Standard Courses:</strong> Starting at ₹499 – Lifetime access to recorded videos</li>
            <li><strong>Premium Courses:</strong> ₹999 to ₹9999 – Includes certification, downloadable notes, and bonus content</li>
        </ul>

        <h2>2. What's Included?</h2>
        <p>
            All course purchases include:
        </p>
        <ul>
            <li>HD quality recorded video lectures</li>
            <li>2-year access via EzyLern LMS</li>
            <li>Module-wise breakdown and progress tracking</li>
            <li>Instructor support via community/chat</li>
            <li>Job portal access</li>
            <li>Resume template access</li>
            <li>One-on-one interactive sessions with a forward trainer</li>
            <li>Optional certificate of completion (where applicable)</li>
        </ul>

        <h2>3. Free Resources</h2>
        <p>
            We also provide a selection of <strong>free demo lessons</strong> and basic learning modules for users to explore before committing to a course.
        </p>

        <h2>4. Discount Offers & Coupons</h2>
        <p>
            Limited-time discounts, referral offers, and seasonal coupons may apply. Please refer to the course checkout page or follow us on social media for the latest promotions.
        </p>

        <h2>5. Payment Methods</h2>
        <p>
            We accept secure online payments through:
        </p>
        <ul>
            <li>UPI (PhonePe, GPay, Paytm, etc.)</li>
            <li>Debit/Credit Cards (Visa, Mastercard, RuPay)</li>
            <li>Net Banking</li>
            <li>No-Cost EMI options (select courses)</li>
        </ul>

        <h2>6. Refund Policy</h2>
        <p>
            EzyLern does not offer refunds on course purchases unless stated explicitly during promotional campaigns. All purchases are final and non-transferable. For questions, please contact <strong>info@ezylern.com</strong>.
        </p>
    </div>



    <!-- Social Icons -->
    <!-- <div class="social-icons">
        <a href="https://www.youtube.com/@ezyLern" target="_blank"><img src="https://img.icons8.com/color/48/youtube-play.png" alt="YouTube"></a>
        <a href="https://www.linkedin.com/company/105924216/admin/dashboard/" target="_blank"><img src="https://img.icons8.com/fluency/48/instagram-new.png" alt="Instagram"></a>
        <a href="https://t.me/+rUKXTBB1XtlhYTg1" target="_blank"><img src="https://img.icons8.com/color/48/telegram-app--v1.png" alt="Telegram"></a>
        <a href="#" target="_blank"><img src="https://img.icons8.com/color/48/facebook-new.png" alt="Facebook"></a>
        <a href="#" target="_blank"><img src="https://img.icons8.com/color/48/twitter--v1.png" alt="Twitter"></a>
    </div> -->

    <!-- Floating Call Button -->
    <a href="tel:07019243492" class="call-float">
        <img src="https://img.icons8.com/ios-filled/30/ffffff/phone.png" alt="Call Icon">
    </a>
</section>




<!--==================================================-->
<!-- End  Pricing Details Section  -->
<!--==================================================-->




@endsection