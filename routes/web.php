<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sap-rap-course', [HomeController::class, 'raptraining'])->name('sapraptraining');
Route::get('/sap-abap-restful-application-programming', [HomeController::class, 'abap'])->name('restfulapplication');
Route::get('/compelte-abap', [HomeController::class, 'compelteabap'])->name('abap');
Route::get('/sap-mm-materials-management-course', [HomeController::class, 'mmtraining'])->name('mmsapraptraining');
Route::get('/sap-fico-training-course', [HomeController::class, 'ficotrainingficotraining'])->name('ficosapraptraining');
Route::post('/downloadResume', [HomeController::class, 'downloadResume'])->name('resume.download');
Route::get('/sap-abap-course', [HomeController::class, 'abaphana'])->name('abap.hana');
Route::get('/job-portal', [HomeController::class, 'jobportal'])->name('jobportal');
Route::get('/about-us', [HomeController::class, 'About'])->name('About.us');
Route::get('/contact-us', [HomeController::class, 'Contact'])->name('Contact.us');
Route::get('/proxy-jobs', [HomeController::class, 'fetch']);
Route::get('/sap', [HomeController::class, 'sap'])->name('sap.us');
Route::get('/sap-course', [HomeController::class, 'sapcourseself'])->name('sapcourseself');
Route::get('/sap-pp-course-online', [HomeController::class, 'ppmodule'])->name('ppmodule');
Route::get('/sap-sd-training-course', [HomeController::class, 'sapsdcourse'])->name('sapsdcourse');
Route::get('/coming-soon', [HomeController::class, 'comingsoon'])->name('comingsoon');
Route::get('/sap-fico-s4hana-certification-course', [HomeController::class, 'sapficodinesh'])->name('sapficodinesh');
Route::get('/privacy-policy', [HomeController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/terms-and-conditions', [HomeController::class, 'termsandconditions'])->name('termsandconditions');
Route::get('/cancellation-refund-policy', [HomeController::class, 'cancellationrefundpolicy'])->name('cancellationrefundpolicy');
Route::get('/pricing-details', [HomeController::class, 'pricingdetails'])->name('pricingdetails');
Route::get('/sap-pm-course', [HomeController::class, 'sappmcourse'])->name('sappmcourse');
