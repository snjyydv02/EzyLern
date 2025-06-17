   @extends('layouts.app')


   {{-- ✅ SEO Meta Tags --}}
   @section('meta_title', 'Ezylern Job Portal | SAP Careers with Ezy Learn Support ')
   @section('meta_description', 'Explore SAP job opportunities with Ezylerns job portal. Connect with top employers and advance your SAP career today.')
   @section('meta_robots', 'index, follow')
   @section('canonical', url()->current())

   {{-- ✅ Open Graph (Facebook, LinkedIn, WhatsApp) --}}
   @section('og_type', 'website')
   @section('og_title', 'SAP Careers with Ezylern Job Portal')
   @section('og_description', 'Find SAP job openings and boost your career with Ezylern. Get matched with employers who value SAP skills.')
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
               <h1>Job Portal</h1>
             </div>
             <ul>
               <li><a href="{{route('home')}}">Home</a></li>
               <li><i class="bi bi-chevron-right"></i></li>
               <li>Job Portal</li>
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
   <!-- Start  Job-Portal- Search Section  -->
   <!--==================================================-->

   <!-- <div class="search_section">
     <div class="container">
       <form class="search-container" action="/search">
         <input type="text" name="query" placeholder="Search...">
         <button type="submit"><i class="fas fa-search"></i></button>
       </form>
     </div>
   </div> -->

   <!--==================================================-->
   <!-- Start  Job-Portal- Search Section  -->
   <!--==================================================-->





   <!--==================================================-->
   <!-- Start  Job-Portal Section  -->
   <!--==================================================-->

   <div class="jobportal-section">
     <div class="container">
       <!-- Dynamic Job Listings Container -->
       <div id="job-container" class="row"></div>

       <!-- Loading Spinner -->
       <div id="loading-spinner" style="display:none;" class="text-center my-3">
         <div class="spinner-border text-primary" role="status">
           <span class="visually-hidden">Loading...</span>
         </div>
       </div>

       <!-- Load More Button -->
       <div class="d-flex justify-content-center mt-4">
         <button id="load-more" class=" ">Load More</button>
       </div>
     </div>
   </div>


   <script>
     let currentPage = 1;

     function truncate(text, maxLength = 100) {
       return text.length > maxLength ?
         text.slice(0, text.lastIndexOf(" ", maxLength)) + "..." :
         text;
     }

     function loadJobs(page = 1) {
       document.getElementById('loading-spinner').style.display = 'block';

       fetch(`/proxy-jobs?page=${page}`)
         .then(res => res.json())
         .then(data => {
           const container = document.getElementById('job-container');

           data.data.forEach(job => {
             const logoLetter = job.company_name.charAt(0).toUpperCase();
             const jobCard = `
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="job-card h-100 d-flex flex-column justify-content-between p-3 border rounded shadow-sm">
              <div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <div class="company-initial text-white fw-bold rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">${logoLetter}</div>
                  <small class="text-muted">${job.time_ago || ''}</small>
                </div>

                <h5 class="fw-bold mb-1">${job.title}</h5>
                <div class="mb-2">
                  <span class="badge bg-light text-dark">${job.job_type || 'Full time'}</span>
                  <span class="badge bg-light text-dark">${job.mode || 'Remote'}</span>
                </div>

                <p class="fw-semibold text-muted mb-1">${job.company_name}</p>
                <p class="text-muted small mb-2">${job.location}</p>

                <p class="small text-secondary">${truncate(job.description)}</p>
              </div>

              <div class="mt-3">
                <a href="https://mail.google.com/mail/?view=cm&to=${job.application_link}"  target="_blank"  class="btn jobportal_btn btn-primary w-100">Apply Now</a>
              </div>
            </div>
          </div>
        `;
             container.insertAdjacentHTML('beforeend', jobCard);
           });

           currentPage++;
           if (!data.next_page_url) {
             document.getElementById('load-more').style.display = 'none';
           }
         })
         .catch(error => {
           console.error('Failed to load jobs:', error);
           alert('Could not fetch jobs. Please try again later.');
         })
         .finally(() => {
           document.getElementById('loading-spinner').style.display = 'none';
         });
     }

     // Initial load
     loadJobs();

     // On "Load More" click
     document.getElementById('load-more').addEventListener('click', () => {
       loadJobs(currentPage);
     });
   </script>



   @endsection