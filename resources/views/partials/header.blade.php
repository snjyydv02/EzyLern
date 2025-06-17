<!-- loder -->
<div class="loader-wrapper">
	<div class="loader"></div>
	<div class="loder-section left-section"></div>
	<div class="loder-section right-section"></div>
</div>



<!--==================================================-->
<!-- Start Curser Section Here -->
<!--==================================================-->
<!-- <div class="curser"></div>
	<div class="curser2"></div> -->
<!--==================================================-->
<!-- Ends Curser Section Here -->
<!--==================================================-->




<!--==================================================-->
<!-- Start  header-top-menu  -->
<!--==================================================-->

<div class="header-top-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8">
				<div class="header-top-menu-address">
					<ul>
						<li>
							<a href="https://wa.me/919220601945" target="_blank">
								<i class="bi bi-question-circle"></i> Have any Question?
							</a>
						</li>
						<li>
							<a href="mailto:info@ezylern.com" target="_blank" rel="noopener noreferrer">
								<i class="bi bi-envelope"></i> info@ezylern.com
							</a>
						</li>
						<li><a href="#"><i class="bi bi-telephone"></i>+91 9220601945</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="header-src-btn">
					<!--<div class="search-box-btn search-box-outer"><i class="bi bi-search"></i> <span>Search Here....</span></div>-->
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- End  header-top-menu  -->
<!--==================================================-->





<!--==================================================-->
<!-- Start  Main Menu  -->
<!--==================================================-->

<div id="sticky-header" class="_nav_manu">
	<div class="container-fluid">
		<div class="row up align-items-center">
			<div class="col-lg-2">
				<div class="logo">
					<a class="logo_img" href="{{route('home')}}" title="">
						<img src="{{ asset('assets/images/ezylernlogo.png') }}" alt="EzyLern Logo">
					</a>
					<a class="main_sticky" href="#" title="">
						<img src="{{ asset('assets/images/ezylernlogo.png') }}" alt="EzyLern Logo">
					</a>
				</div>
			</div>
			<div class="col-lg-10">
				<nav class="_menu">
					<ul class="nav_scroll">
						<li><a href="{{route('home')}}" class="up">Home </a>
						<li>
							<a href="#">Courses <span><i class="fas fa-chevron-down"></i></span></a>
							<ul class="sub-menu">
								<li>
									<a href="{{route('sapcourseself')}}">SAP</a>
								</li>
								<li>
									<a href="https://ezylern.com/coming-soon">Business Analysis</a>
								</li>
								<li>
									<a href="https://ezylern.com/coming-soon">Sales Marketing</a>
								</li>
								<li>
									<a href="https://ezylern.com/coming-soon">Data Science</a>
								</li>
							</ul>
						</li>


						<li><a href="{{route('jobportal')}}" class="up">Job Portal</a>
						</li>
						<li><a href="{{route('About.us')}}" class="up">About</a>
						</li>
						<li><a href="{{route('Contact.us')}}">Contact </a>

						</li>
					</ul>
					<div class="header-button">
						<a href="" class="loginButton login">Login / Register</a>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>



<!--  Mobile Menu  -->

<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
	<div class="mobile-menu">
		<nav class="_menu">
			<ul class="nav_scroll">
				<li><a href="{{route('home')}}" class="up">Home </a>
				</li>
				<li><a href="#" class="up">Courses </a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('sapcourseself')}}">SAP</a>
						</li>
						<li>
							<a href="https://ezylern.com/coming-soon">Business Analysis</a>
						</li>
						<li>
							<a href="https://ezylern.com/coming-soon">Sales Marketing</a>
						</li>
						<li>
							<a href="https://ezylern.com/coming-soon">Data Science</a>
						</li>
					</ul>
				</li>
				<li><a href="{{route('About.us')}}" class="up">About</a>
				</li>

				<li><a href="{{route('jobportal')}}">Job Portal </a>
				</li>
				<li><a href="{{route('Contact.us')}}" class="up">Contact </a>
				</li>
				<li>
					<a href="" class="mobile_view_btn loginButton login">Login / Register </a>
				</li>
			</ul>
		</nav>
	</div>
</div>
<iframe class='iframe' id='iframe' style='width: 100vw;height: 100vh;border:none;position:fixed; top:0; left:0; bottom:0; right:0; z-index:10000;display:none;'
	src="https://lms.ezylern.com/js-sdks/signup-sdk/iframe.php?subdomain=srijaninstitutetrainingcenter">
</iframe>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://lms.ezylern.com/js-sdks/signup-sdk/signup-sdk.js?v=2.8"></script>
<!--==================================================-->
<!-- End  Main Menu  -->
<!--==================================================-->