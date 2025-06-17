@extends('layouts.app')

@section('meta_title', 'Courses Coming Soon - EzyLern')
@section('meta_description', 'Get ready to elevate your career. New professional courses launching soon on EzyLern!')
@section('meta_robots', 'index, follow')
@section('canonical', url()->current())
@section('og_type', 'website')
@section('og_title', 'Courses Coming Soon - EzyLern')
@section('og_description', 'Get ready to elevate your career. New professional courses launching soon on EzyLern!')
@section('og_image', asset('assets/images/og-home.jpg'))
@section('og_url', url()->current())

@section('content')

<style>
    /* *************** */
       /* Start Lunching Soon Section  */
/* **************** */

.lunching_hero_section{
    margin-top: 5rem;
}

.container-fluid {
  padding: 0 ;
  margin: 0 ;
}

/* .comingsoon-section {
    background: url(../images/breadcumb/breadcumb-bg.png);
    height: 66px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    position: relative;
} */

 .lunching_soon {
      position: relative;
      width: 100%;
      height: auto;
      overflow: hidden;
      color: white;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 2rem;
    }

    .lunching_soon video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .lunching_soon header {
        margin-top: 7rem;
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    .lunching_soon p {
        margin-top: 1rem;
      font-size: 1.2rem;
      max-width: 700px;
      margin: 1rem auto 2rem;
    }

    .time-content, .email-content {
      display: flex;
      justify-content: center;
      gap: 1.5rem;
      flex-wrap: wrap;
      margin-bottom: 2rem;
    }

    .time {
      background: rgba(0,0,0,0.5);
      padding: 1rem;
      border-radius: 8px;
      min-width: 80px;
    }

    .time .number {
      font-size: 2rem;
      font-weight: bold;
    }

    .time .text {
      font-size: 0.8rem;
      text-transform: uppercase;
    }

    .email-content {
      flex-direction: column;
    }

    .email-content p {
      font-size: 1rem;
      margin-bottom: 0.5rem;
    }

    .input-box {
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
      justify-content: center;
    }

    .input-box input {
      padding: 0.5rem;
      border: none;
      border-radius: 4px;
      width: 250px;
    }

    .input-box button {
      padding: 0.5rem 1rem;
      border: none;
      background: #ff6600;
      color: white;
      border-radius: 4px;
      cursor: pointer;
    }

    /* === Responsive Design === */
    @media (max-width: 768px) {
      .lunching_soon {
        padding: 1.5rem;
      }

      .lunching_soon header {
        font-size: 2.2rem;
      }

      .lunching_soon p {
        font-size: 1rem;
      }

      .time .number {
        font-size: 1.5rem;
      }

      .time .text {
        font-size: 0.7rem;
      }

      .input-box input {
        width: 100%;
      }

      .input-box button {
        width: 100%;
      }
    }

    @media (max-width: 480px) {
      .lunching_soon {
        padding: 1rem;
      }

      .lunching_soon header {
        font-size: 1.8rem;
      }

      .lunching_soon p {
        font-size: 0.95rem;
      }

      .time-content {
        flex-direction: column;
        gap: 1rem;
      }

      .time {
        width: 100%;
      }

      .input-box {
        flex-direction: column;
        gap: 0.75rem;
      }

      .input-box input,
      .input-box button {
        width: 100%;
      }
    }

     @media only screen and (min-width: 100px) and (max-width: 992px) {
   .lunching_hero_section{
    margin-top: 1rem;
}
    
}

/* *************** */
       /* End Lunching Soon Section  */
/* **************** */
</style>

	<!--==================================================-->
	<!-- Start  breadcumb Section  -->
	<!--==================================================-->

	<div class="lunching_hero_section">
		  <div class="container-fluid">
      <section class="lunching_soon">
        <video
          src="assets/videos/lunching_video.mp4"
          autoplay
          muted
          loop
          playsinline>
          Your browser does not support the video tag.
        </video>

        <header>Courses Coming Soon</header>
        <p>
          We are excited to announce that we will be launching soon and can't
          wait to share our new platform with you.
        </p>

        <div class="time-content">
          <div class="time days">
            <span class="number">00</span>
            <span class="text">days</span>
          </div>
          <div class="time hours">
            <span class="number">00</span>
            <span class="text">hours</span>
          </div>
          <div class="time minutes">
            <span class="number">00</span>
            <span class="text">minutes</span>
          </div>
          <div class="time seconds">
            <span class="number">00</span>
            <span class="text">seconds</span>
          </div>
        </div>

        <div class="email-content">
          <p>Subscribe now to get the latest updates!</p>
          <div class="input-box">
            <input type="email" placeholder="Enter your email..." />
            <button>Notify Me</button>
          </div>
        </div>
      </section>
    </div>

	</div>

	<!--==================================================-->
	<!-- End  breadcumb Section  -->
	<!--==================================================-->




<!-- *********************** -->


<script>
  const seconds = document.querySelector(".seconds .number"),
        minutes = document.querySelector(".minutes .number"),
        hours   = document.querySelector(".hours .number"),
        days    = document.querySelector(".days .number");

  // Set target time (only on first visit)
  const countdownDuration =  15 * 24 * 60 * 60 + 2 * 60 * 60 + 2 * 60 + 11; // days + hours + mins + secs in seconds

  let targetTime;

  if (localStorage.getItem("countdownTarget")) {
    targetTime = parseInt(localStorage.getItem("countdownTarget"));
  } else {
    targetTime = Math.floor(Date.now() / 1000) + countdownDuration;
    localStorage.setItem("countdownTarget", targetTime);
  }

  const timer = setInterval(() => {
    const now = Math.floor(Date.now() / 1000);
    let remaining = targetTime - now;

    if (remaining <= 0) {
      clearInterval(timer);
      localStorage.removeItem("countdownTarget");
      remaining = 0;
    }

    const daysLeft = Math.floor(remaining / (24 * 60 * 60));
    const hoursLeft = Math.floor((remaining % (24 * 60 * 60)) / 3600);
    const minsLeft = Math.floor((remaining % 3600) / 60);
    const secsLeft = remaining % 60;

    days.textContent = daysLeft < 10 ? `0${daysLeft}` : daysLeft;
    hours.textContent = hoursLeft < 10 ? `0${hoursLeft}` : hoursLeft;
    minutes.textContent = minsLeft < 10 ? `0${minsLeft}` : minsLeft;
    seconds.textContent = secsLeft < 10 ? `0${secsLeft}` : secsLeft;

  }, 1000);
</script>




@endsection