<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\PhotosController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\TeamMemberController;
use App\Http\Controllers\Frontend\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Group Middleware
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    // Admin Login
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    //Admin Profile
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');


    // Portfolio Category All Route
    Route::controller(PortfolioController::class)->group(function(){
        Route::get('/portfolio/category', 'PortfolioCategory')->name('portfolio.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    });

    // Portfolio Sub-Category All Route
    Route::controller(PortfolioController::class)->group(function(){
        Route::get('/portfolio/subcategory', 'PortfolioSubcategory')->name('all.subcategory');
        Route::post('/store/subcategory', 'StoreSubcategory')->name('store.subcategory');
        Route::get('/edit/subcategory/{id}', 'EditSubcategory')->name('edit.subcategory');
        Route::post('/update/subcategory', 'UpdateSubcategory')->name('update.subcategory');
        Route::get('/delete/subcategory/{id}', 'DeleteSubcategory')->name('delete.subcategory');
    });



    // Portfolio Manage All Route
    Route::controller(PortfolioController::class)->group(function(){
        Route::get('/portfolio/portfolio', 'PortfolioPortfolio')->name('all.portfolio');
        Route::get('/add/portfolio', 'AddPortfolio')->name('add.portfolio');

        Route::get('/get/subcategory/{category_id}', 'GetSbCategory');

        Route::post('/store/portfolio', 'StorePortfolio')->name('store.portfolio');
        Route::get('/edit/portfolio/{id}', 'EditPortfolio')->name('edit.portfolio');
        Route::post('/update/portfolio/{id}', 'UpdatePortfolio')->name('update.portfolio');
        Route::get('/delete/portfolio/{id}', 'DeletePortfolio')->name('delete.portfolio');
        Route::get('/portfolio/inactive/{id}', 'InactivePortfolio')->name('inactive.portfolio');
        Route::get('/portfolio/active/{id}', 'ActivePortfolio')->name('active.portfolio');
    });



    // Team Carousel Manage All Route
    Route::controller(TeamController::class)->group(function(){
        Route::get('/all/carousel/manage', 'AllCarouselManage')->name('all.carousel.manage');
        Route::get('/add/carousel', 'AddCarousel')->name('add.carousel');
        Route::post('/store/carousel', 'StoreCarousel')->name('store.carousel');
        Route::get('/edit/carousel/{id}', 'EditCarousel')->name('edit.carousel');
        Route::post('/update/carousel/{id}', 'UpdateCarousel')->name('update.carousel');
        Route::get('/delete/carousel/{id}', 'DeleteCarousel')->name('delete.carousel');
        Route::get('/carousel//inactive/{id}', 'InactiveCarousel')->name('inactive.carousel');
        Route::get('/carousel//active/{id}', 'ActiveCarousel')->name('active.carousel');
    });


    // All Team Member Manage All Route
    Route::controller(TeamMemberController::class)->group(function(){
        Route::get('/all/member/manage', 'AllMemberManage')->name('all.member.manage');
        Route::get('/add/member', 'AddMember')->name('add.member');
        Route::post('/store/member', 'StoreMember')->name('store.member');
        Route::get('/edit/member/{id}', 'EditMember')->name('edit.member');
        Route::post('/update/member/{id}', 'UpdateMember')->name('update.member');
        Route::get('/delete/member/{id}', 'DeleteMember')->name('delete.member');
        Route::get('/member/inactive/{id}', 'InactiveMember')->name('inactive.member');
        Route::get('/member/active/{id}', 'ActiveMember')->name('active.member');
    });


    // All Team Member Manage All Route
    Route::controller(ServiceController::class)->group(function(){
        Route::get('/all/Offers/manage', 'AllOffers')->name('all.offers');
        Route::get('/add/Offers', 'AddOffers')->name('add.offers');
        Route::post('/store/Offers', 'StoreOffers')->name('store.offers');
        Route::get('/edit/Offers/{id}', 'EditOffers')->name('edit.offers');
        Route::post('/update/Offers', 'UpdateOffers')->name('update.offers');
        Route::get('/delete/Offers/{id}', 'DeleteOffers')->name('delete.offers');
        Route::get('/Offers/inactive/{id}', 'InactiveOffers')->name('inactive.offers');
        Route::get('/Offers/active/{id}', 'ActiveOffers')->name('active.offers');
    });

    // All Subscription Manage All Route
    Route::controller(ServiceController::class)->group(function(){
        Route::get('/all/subscription/manage', 'AllSubscription')->name('all.subscription');
        Route::get('/add/subscription', 'AddSubscription')->name('add.subscription');
        Route::post('/store/subscription', 'StoreSubscription')->name('store.subscription');
        Route::get('/edit/subscription/{id}', 'EditSubscription')->name('edit.subscription');
        Route::post('/update/subscription', 'UpdateSubscription')->name('update.subscription');
        Route::get('/delete/subscription/{id}', 'DeleteSubscription')->name('delete.subscription');
        Route::get('/subscription/inactive/{id}', 'InactiveSubscription')->name('inactive.subscription');
        Route::get('/subscription/active/{id}', 'ActiveSubscription')->name('active.subscription');
    });


    // Photos Manage All Route
    Route::controller(PhotosController::class)->group(function(){
        Route::get('/all/photos/manage', 'AllPhotos')->name('all.photos');
        Route::post('/store/photos', 'StorePhotos')->name('store.photos');
        Route::get('/delete/photos/{id}', 'DeletePhotos')->name('delete.photos');
    });


    // Blog-Category Manage All Route
    Route::controller(BlogController::class)->group(function(){
        Route::get('/all/blog/category/manage', 'AllBlogCategory')->name('all.blog.category');
        Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
        Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
        Route::post('/update/blog/category', 'UpdateBlogCategory')->name('update.blog.category');
        Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');
    });


    // Blog Manage All Route
    Route::controller(BlogController::class)->group(function(){
        Route::get('/all/blog/manage', 'AllBlog')->name('all.blog');
        Route::get('/add/blog', 'AddBlog')->name('add.blog');
        Route::post('/store/blog', 'StoreBlog')->name('store.blog');
        Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog');
        Route::post('/update/blog/{id}', 'UpdateBlog')->name('update.blog');
        Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog');
        Route::get('/blog/inactive/{id}', 'InactiveBlog')->name('inactive.blog');
        Route::get('/blog/active/{id}', 'ActiveBlog')->name('active.blog');
    });


    // Contact Manage All Route
    Route::controller(ContactController::class)->group(function(){
        Route::get('/contact/manage', 'ContactMessage')->name('contact.manage');
        Route::get('/contact/view/{id}', 'ContactView')->name('contact.view');
    });


    // Settings All Route
    Route::controller(SettingController::class)->group(function(){
        Route::get('/settings', 'Settings')->name('settings');
        Route::post('/store/logo', 'StoreLogo')->name('store.logo');
        Route::post('/store/social', 'StoreSocial')->name('store.social');
    });


}); // End Group Admin Middleware


// Agent Group Middleware
Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
}); // End Group Agent Middleware

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');



// Frontend All Controller
Route::controller(IndexController::class)->group(function(){

    Route::get('/portfolio', 'Portfolio')->name('portfolio');
    Route::get('/portfolio/post/{id}', 'PortfolioPost')->name('portfolio.post');

    Route::get('/services', 'Services')->name('services');
    Route::get('/team', 'Team')->name('team');
    Route::get('/blog', 'Blog')->name('blog');
    Route::get('/blog/main/{id}', 'BlogMain')->name('blog.main');
    // Contact
    Route::get('/contact', 'Contact')->name('contact');
    Route::post('/message', 'Message')->name('message');

});
