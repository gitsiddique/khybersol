<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\Frontend\ContactController;

// Main Pages
Route::view('/', 'frontend.index')->name('home');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/services', 'frontend.services')->name('services');
Route::view('/projects', 'frontend.projects')->name('projects');
Route::get('/blog', [FrontendBlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [FrontendBlogController::class, 'show'])->name('blog.show');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Service Detail Pages
Route::prefix('services')->name('services.')->group(function () {
    Route::view('/web-development', 'frontend.services.web-development')->name('web-development');
    Route::view('/app-development', 'frontend.services.app-development')->name('app-development');
    Route::view('/ui-ux-design', 'frontend.services.ui-ux-design')->name('ui-ux-design');
    Route::view('/digital-marketing', 'frontend.services.digital-marketing')->name('digital-marketing');
    Route::view('/seo-optimization', 'frontend.services.seo-optimization')->name('seo-optimization');
    Route::view('/graphic-branding', 'frontend.services.graphic-branding')->name('graphic-branding');
    Route::view('/ai-automation', 'frontend.services.ai-automation')->name('ai-automation');
});

// Admin Auth Routes
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\UploadController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'backend.dashboard')->name('dashboard');
    Route::post('/admin/upload', [UploadController::class, 'upload'])->name('admin.upload');
    Route::resource('admin/blogs', BlogController::class)->names([
        'index' => 'admin.blogs.index',
        'create' => 'admin.blogs.create',
        'store' => 'admin.blogs.store',
        'edit' => 'admin.blogs.edit',
        'update' => 'admin.blogs.update',
        'destroy' => 'admin.blogs.destroy',
    ]);
});
