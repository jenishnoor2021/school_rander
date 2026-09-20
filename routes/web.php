<?php

use App\Http\Controllers\AdminAchivementController;
use App\Http\Controllers\AdminActivitysController;
use App\Http\Controllers\AdminBrocherController;
use App\Http\Controllers\AdminCareersController;
use App\Http\Controllers\AdminEventsController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEnquireyController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminMediaGalleryController;
use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\AdminSlidersController;
use App\Http\Controllers\AdminTestominalController;
use App\Http\Controllers\AdminVideosController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPopupsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/admin/login', function () {
    return view('auth.login');
})->name('admin.login');

Route::get('/', [AdminController::class, 'homePage']);

//  for admin registration below comment uncomment karvi and above auth.login ne comment karvi
// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();

Route::get('site/about', [AdminController::class, 'aboutUs'])->name('aboutUs');
Route::get('site/managing_director', [AdminController::class, 'management'])->name('managing_director');
Route::get('site/principal-message', [AdminController::class, 'principleMessage'])->name('principal-message');
Route::get('site/branch-head', [AdminController::class, 'branchHead'])->name('branch-head');
Route::get('site/incharge-message', [AdminController::class, 'inchargeMessage'])->name('incharge-message');
Route::get('site/circular', [AdminController::class, 'circular'])->name('circular');
Route::get('site/facilities', [AdminController::class, 'schoolFacilities'])->name('facilities');
Route::get('site/branches', [AdminController::class, 'branches'])->name('branches');

Route::get('site/admissions', [AdminController::class, 'admissionCriteria'])->name('criteria');
Route::get('site/enquiry', [AdminController::class, 'admissionInquiry'])->name('enquiry');
Route::get('site/fees-pay', [AdminController::class, 'feesPay'])->name('fees-pay');
Route::get('site/policy', [AdminController::class, 'policy'])->name('policy');
Route::get('site/career', [AdminController::class, 'career'])->name('career');

Route::get('site/academic_activities', [AdminController::class, 'academicActivities'])->name('academic_activities');
Route::get('site/extra_activities', [AdminController::class, 'extraActivities'])->name('extra_activities');
Route::get('site/academic_activities/{name}', [AdminController::class, 'academicActivitiesSub'])->name('academic_activities_sub');

Route::get('site/event', [AdminController::class, 'event'])->name('event');
Route::get('site/achievements', [AdminController::class, 'achievements'])->name('achievements');
Route::get('site/event/{name}', [AdminController::class, 'eventSub'])->name('event_sub');
Route::get('site/achievements/{name}', [AdminController::class, 'achievementsSub'])->name('achievements_sub');

Route::get('site/gallery', [AdminController::class, 'gallery'])->name('gallery');
Route::get('site/video-gallery', [AdminController::class, 'videoGallery'])->name('video-gallery');
Route::get('site/media-gallery', [AdminController::class, 'mediaGallery'])->name('media-gallery');

Route::get('site/contact', [AdminController::class, 'contact'])->name('contact');

Route::post('/contactstore', [AdminController::class, 'storeContact'])->name('storeContact');
Route::post('/inquireystore', [AdminController::class, 'storeInquiry'])->name('storeInquiry');
Route::post('/careerstore', [AdminController::class, 'storeCareer'])->name('storecareer');

// Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/login', [AdminController::class, 'login'])->name('login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'usersession']], function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin');
    Route::get('/profile/{id}', [AdminController::class, 'profiledit'])->name('profile.edit');
    Route::post('/profile/update', [AdminController::class, 'profileUpdate'])->name('profile.update');

    Route::get("admin/slider", [AdminSlidersController::class, 'index'])->name('admin.slider.index');
    Route::get('admin/slider/create', [AdminSlidersController::class, 'create'])->name('admin.slider.create');
    Route::post('admin/slider/store', [AdminSlidersController::class, 'store'])->name('admin.slider.store');
    Route::get('admin/slider/edit/{id}', [AdminSlidersController::class, 'edit'])->name('admin.slider.edit');
    Route::patch('admin/slider/update/{id}', [AdminSlidersController::class, 'update'])->name('admin.slider.update');
    Route::get('admin/slider/destroy/{id}', [AdminSlidersController::class, 'destroy'])->name('admin.slider.destroy');
    Route::delete('/mysliderDeleteAll', [AdminSlidersController::class, 'deleteSliderAll'])->name('deletesliderAll');
    Route::get("admin/slider/active/{id}", [AdminSlidersController::class, 'sliderActive'])->name('admin.slider.active');

    Route::get("admin/testomonial", [AdminTestominalController::class, 'index'])->name('admin.testomonial.index');
    Route::get('admin/testomonial/create', [AdminTestominalController::class, 'create'])->name('admin.testomonial.create');
    Route::post('admin/testomonial/store', [AdminTestominalController::class, 'store'])->name('admin.testomonial.store');
    Route::get('admin/testomonial/edit/{id}', [AdminTestominalController::class, 'edit'])->name('admin.testomonial.edit');
    Route::patch('admin/testomonial/update/{id}', [AdminTestominalController::class, 'update'])->name('admin.testomonial.update');
    Route::get('admin/testomonial/destroy/{id}', [AdminTestominalController::class, 'destroy'])->name('admin.testomonial.destroy');
    Route::delete('/mytestomonialDeleteAll', [AdminTestominalController::class, 'deleteTestomonialAll'])->name('deletetestomonialAll');
    Route::get("admin/testomonial/searchtestompnial", [AdminTestominalController::class, 'searchTestomonial'])->name('admin.testomonial.search');
    Route::get('admin/testomonial/statusupdate/{id}', [AdminTestominalController::class, 'statusUpdate'])->name('admin.testomonial.status');

    Route::get("admin/galleryimage", [AdminGalleryController::class, 'index'])->name('admin.galleryimage.index');
    Route::get('admin/galleryimage/create', [AdminGalleryController::class, 'create'])->name('admin.galleryimage.create');
    Route::post('admin/galleryimage/store', [AdminGalleryController::class, 'store'])->name('admin.galleryimage.store');
    Route::get('admin/galleryimage/edit/{id}', [AdminGalleryController::class, 'edit'])->name('admin.galleryimage.edit');
    Route::patch('admin/galleryimage/update/{id}', [AdminGalleryController::class, 'update'])->name('admin.galleryimage.update');
    Route::get('admin/galleryimage/destroy/{id}', [AdminGalleryController::class, 'destroy'])->name('admin.galleryimage.destroy');
    Route::delete('/mygalleryimageDeleteAll', [AdminGalleryController::class, 'deleteGalleryAll'])->name('deletegalleryAll');
    Route::get("admin/gallery/active/{id}", [AdminGalleryController::class, 'galleryActive'])->name('admin.gallery.active');

    Route::get("admin/videos", [AdminVideosController::class, 'index'])->name('admin.videos.index');
    Route::get('admin/videos/create', [AdminVideosController::class, 'create'])->name('admin.videos.create');
    Route::post('admin/videos/store', [AdminVideosController::class, 'store'])->name('admin.videos.store');
    Route::get('admin/videos/edit/{id}', [AdminVideosController::class, 'edit'])->name('admin.videos.edit');
    Route::patch('admin/videos/update/{id}', [AdminVideosController::class, 'update'])->name('admin.videos.update');
    Route::get('admin/videos/destroy/{id}', [AdminVideosController::class, 'destroy'])->name('admin.videos.destroy');
    Route::delete('/myvideosDeleteAll', [AdminVideosController::class, 'deleteVideosAll'])->name('deletevideosAll');
    Route::get("admin/video/active/{id}", [AdminVideosController::class, 'videoActive'])->name('admin.gallery.active');

    Route::get("admin/mediagalleryimage", [AdminMediaGalleryController::class, 'index'])->name('admin.mediagalleryimage.index');
    Route::get('admin/mediagalleryimage/create', [AdminMediaGalleryController::class, 'create'])->name('admin.mediagalleryimage.create');
    Route::post('admin/mediagalleryimage/store', [AdminMediaGalleryController::class, 'store'])->name('admin.mediagalleryimage.store');
    Route::get('admin/mediagalleryimage/edit/{id}', [AdminMediaGalleryController::class, 'edit'])->name('admin.mediagalleryimage.edit');
    Route::patch('admin/mediagalleryimage/update/{id}', [AdminMediaGalleryController::class, 'update'])->name('admin.mediagalleryimage.update');
    Route::get('admin/mediagalleryimage/destroy/{id}', [AdminMediaGalleryController::class, 'destroy'])->name('admin.mediagalleryimage.destroy');
    Route::delete('/mymediagalleryimageDeleteAll', [AdminMediaGalleryController::class, 'deleteMediaGalleryAll'])->name('deletemediagalleryAll');
    Route::get("admin/mediagallery/active/{id}", [AdminMediaGalleryController::class, 'mediagalleryActive'])->name('admin.mediagallery.active');

    Route::get("admin/activity", [AdminProductsController::class, 'index'])->name('admin.activity.index');
    Route::get('admin/activity/create', [AdminProductsController::class, 'create'])->name('admin.activity.create');
    Route::post('admin/activity/store', [AdminProductsController::class, 'store'])->name('admin.activity.store');
    Route::get('admin/activity/edit/{id}', [AdminProductsController::class, 'edit'])->name('admin.activity.edit');
    Route::patch('admin/activity/update/{id}', [AdminProductsController::class, 'update'])->name('admin.activity.update');
    Route::get('admin/activity/destroy/{id}', [AdminProductsController::class, 'destroy'])->name('admin.activity.destroy');
    Route::delete('/myactivityDeleteAll', [AdminProductsController::class, 'deleteActivityAll'])->name('deleteactivityAll');

    Route::get("admin/activity/searchactivity", [AdminProductsController::class, 'searchActivity'])->name('admin.searchactivity.search');

    Route::get("admin/activity/active/{id}", [AdminProductsController::class, 'activityActive'])->name('admin.activity.active');
    Route::get("admin/activity/search/{id}", [AdminProductsController::class, 'categoryActivity'])->name('admin.activity.search');

    Route::get("admin/brocher", [AdminBrocherController::class, 'index'])->name('admin.brocher.index');
    Route::get('admin/brocher/create', [AdminBrocherController::class, 'create'])->name('admin.brocher.create');
    Route::post('admin/brocher/store', [AdminBrocherController::class, 'store'])->name('admin.brocher.store');
    Route::get('admin/brocher/edit/{id}', [AdminBrocherController::class, 'edit'])->name('admin.brocher.edit');
    Route::patch('admin/brocher/update/{id}', [AdminBrocherController::class, 'update'])->name('admin.brocher.update');
    Route::get('admin/brocher/destroy/{id}', [AdminBrocherController::class, 'destroy'])->name('admin.brocher.destroy');

    Route::get('admin/contact', [AdminContactController::class, 'index'])->name('admin.contact');
    Route::get('admin/contact/create', [AdminContactController::class, 'create'])->name('admin.contact.create');
    Route::post('admin/contact/store', [AdminContactController::class, 'store'])->name('admin.contact.store');
    Route::get('admin/contact/edit/{id}', [AdminContactController::class, 'edit'])->name('admin.contact.edit');
    Route::patch('admin/contact/update/{id}', [AdminContactController::class, 'update'])->name('admin.contact.update');
    Route::get('admin/contact/destroy/{id}', [AdminContactController::class, 'destroy'])->name('admin.contact.destroy');
    Route::delete('/mycontactDeleteAll', [AdminContactController::class, 'mycontactDeleteAll'])->name('mycontactDeleteAll');

    Route::get('admin/enquirey', [AdminEnquireyController::class, 'index'])->name('admin.enquirey');
    Route::get('admin/enquirey/create', [AdminEnquireyController::class, 'create'])->name('admin.enquirey.create');
    Route::post('admin/enquirey/store', [AdminEnquireyController::class, 'store'])->name('admin.enquirey.store');
    Route::get('admin/enquirey/edit/{id}', [AdminEnquireyController::class, 'edit'])->name('admin.enquirey.edit');
    Route::patch('admin/enquirey/update/{id}', [AdminEnquireyController::class, 'update'])->name('admin.enquirey.update');
    Route::get('admin/enquirey/destroy/{id}', [AdminEnquireyController::class, 'destroy'])->name('admin.enquirey.destroy');

    Route::get('admin/career', [AdminCareersController::class, 'index'])->name('admin.career');
    Route::get('admin/career/create', [AdminCareersController::class, 'create'])->name('admin.career.create');
    Route::post('admin/career/store', [AdminCareersController::class, 'store'])->name('admin.career.store');
    Route::get('admin/career/edit/{id}', [AdminCareersController::class, 'edit'])->name('admin.career.edit');
    Route::patch('admin/career/update/{id}', [AdminCareersController::class, 'update'])->name('admin.career.update');
    Route::get('admin/career/destroy/{id}', [AdminCareersController::class, 'destroy'])->name('admin.career.destroy');
    
    Route::get("admin/achivement", [AdminAchivementController::class, 'index'])->name('admin.achivement.index');
    Route::get('admin/achivement/create', [AdminAchivementController::class, 'create'])->name('admin.achivement.create');
    Route::post('admin/achivement/store', [AdminAchivementController::class, 'store'])->name('admin.achivement.store');
    Route::get('admin/achivement/edit/{id}', [AdminAchivementController::class, 'edit'])->name('admin.achivement.edit');
    Route::patch('admin/achivement/update/{id}', [AdminAchivementController::class, 'update'])->name('admin.achivement.update');
    Route::get('admin/achivement/destroy/{id}', [AdminAchivementController::class, 'destroy'])->name('admin.achivement.destroy');
    Route::delete('/myachivementDeleteAll', [AdminAchivementController::class, 'deleteAchivementAll'])->name('deleteachivementAll');

    Route::get("admin/activitycategory", [AdminActivitysController::class, 'index'])->name('admin.activitycategory.index');
    Route::get('admin/activitycategory/create', [AdminActivitysController::class, 'create'])->name('admin.activitycategory.create');
    Route::post('admin/activitycategory/store', [AdminActivitysController::class, 'store'])->name('admin.activity.store');
    Route::get('admin/activitycategory/edit/{id}', [AdminActivitysController::class, 'edit'])->name('admin.activitycategory.edit');
    Route::patch('admin/activitycategory/update/{id}', [AdminActivitysController::class, 'update'])->name('admin.activitycategory.update');
    Route::get('admin/activitycategory/destroy/{id}', [AdminActivitysController::class, 'destroy'])->name('admin.activitycategory.destroy');
    Route::delete('/myactivitycategoryDeleteAll', [AdminActivitysController::class, 'deleteActivityCategoryAll'])->name('deleteactivitycategoryAll');

    Route::get("admin/event", [AdminEventsController::class, 'index'])->name('admin.event.index');
    Route::get('admin/event/create', [AdminEventsController::class, 'create'])->name('admin.event.create');
    Route::post('admin/event/store', [AdminEventsController::class, 'store'])->name('admin.event.store');
    Route::get('admin/event/edit/{id}', [AdminEventsController::class, 'edit'])->name('admin.event.edit');
    Route::patch('admin/event/update/{id}', [AdminEventsController::class, 'update'])->name('admin.event.update');
    Route::get('admin/event/destroy/{id}', [AdminEventsController::class, 'destroy'])->name('admin.event.destroy');
    Route::delete('/myeventDeleteAll', [AdminEventsController::class, 'deleteEventAll'])->name('deleteeventAll');
    
    Route::get("admin/popup", [AdminPopupsController::class, 'index'])->name('admin.popup.index');
    Route::post('admin/popup/store', [AdminPopupsController::class, 'store'])->name('admin.popup.store');
    Route::get('admin/popup/edit/{id}', [AdminPopupsController::class, 'edit'])->name('admin.popup.edit');
    Route::patch('admin/popup/update/{id}', [AdminPopupsController::class, 'update'])->name('admin.popup.update');
    Route::get('admin/popup/destroy/{id}', [AdminPopupsController::class, 'destroy'])->name('admin.popup.destroy');
    Route::get("admin/popup/active/{id}", [AdminPopupsController::class, 'popupActive'])->name('admin.popup.active');

});

//Clear Cache facade value:
Route::get('/admin/clear-cache', function () {
    Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
//Reoptimized class loader:
Route::get('/admin/optimize', function () {
    Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});
//Route cache:
Route::get('/admin/route-cache', function () {
    Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});
//Clear Route cache:
Route::get('/admin/route-clear', function () {
    Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});
//Clear View cache:
Route::get('/admin/view-clear', function () {
    Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
//Clear Config cache:
Route::get('/admin/config-cache', function () {
    Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
