<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\PortfolioController;
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


    // Team Carousel Manage All Route
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
    Route::get('/blog/main', 'BlogMain')->name('blog.main');
    Route::get('/contact', 'Contact')->name('contact');

});
