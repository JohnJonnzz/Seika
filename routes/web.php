<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnitController;
use App\Models\Carousel;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/units/{id}', [HomeController::class,'units'])->name('units');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/properties', [HomeController::class,'properties'])->name('properties');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::post('/checklogin', [LoginController::class,'check'])->name('checklogin');
Route::get("/admin", [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/admin_profile', [AdminController::class, 'adminProfile'])->name('adminProfile')->middleware('auth');
Route::get('/admin_carousel', [AdminController::class, 'adminCarousel'])->name('adminCarousel')->middleware('auth');
Route::get('/admin_gallery', [AdminController::class, 'adminGallery'])->name('adminGallery')->middleware('auth');
Route::get('/add_gallery', [GalleryController::class, 'addGallery'])->name('addGallery')->middleware('auth');
Route::post('/add_gallery', [GalleryController::class, 'insertGallery'])->name('insertGallery')->middleware('auth');
Route::get('/edit_gallery/{id}', [GalleryController::class, 'editGallery'])->name('editGallery')->middleware('auth');
Route::post('/update_gallery', [GalleryController::class, 'updateGallery'])->name('updateGallery')->middleware('auth');
Route::get('/delete_gallery/{id}', [GalleryController::class, 'deleteGallery'])->name('deleteGallery')->middleware('auth');
Route::get('/add_carousel', [CarouselController::class, 'addCarousel'])->name('addCarousel')->middleware('auth');
Route::post('/add_carousel', [CarouselController::class, 'insertCarousel'])->name('insertCarousel')->middleware('auth');
Route::get('/edit_carousel/{id}', [CarouselController::class, 'editCarousel'])->name('editCarousel')->middleware('auth');
Route::post('/update_carousel', [CarouselController::class, 'updateCarousel'])->name('updateCarousel')->middleware('auth');
Route::get('/delete_carousel/{id}', [CarouselController::class, 'deleteCarousel'])->name('deleteCarousel')->middleware('auth');
Route::get('/add_unit', [UnitController::class, 'addUnit'])->name('addUnit')->middleware('auth');
Route::post('/add_unit', [UnitController::class, 'insertUnit'])->name('insertUnit')->middleware('auth');
Route::get('/edit_unit/{id}', [UnitController::class, 'editUnit'])->name('editUnit')->middleware('auth');
Route::post('/edit_unit', [UnitController::class, 'updateUnit'])->name('updateUnit')->middleware('auth');
Route::get('/delete_unit/{id}', [UnitController::class, 'deleteUnit'])->name('deleteUnit')->middleware('auth');
Route::get('/edit_profile', [ProfileController::class, 'editProfile'])->name('editProfile')->middleware('auth');
Route::post('/edit_profile', [ProfileController::class, 'updateProfile'])->name('updateProfile')->middleware('auth');
Route::get("/change", [LoginController::class, 'forgot'])->name('forgot');
Route::post("/change", [LoginController::class, 'change'])->name('change');