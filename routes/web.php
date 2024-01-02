<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/product',[HomeController::class,'product'])->name('product');
Route::get('/product/{id}/details',[HomeController::class,'product_details'])->name('product_details');
Route::get('/product/k3',[HomeController::class,'product_category_k3'])->name('product_category_k3');
Route::get('/product/regent',[HomeController::class,'product_category_regent'])->name('product_category_regent');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::middleware(['auth', 'verified'])->group(function () {
 Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
// Start  Brand
 Route::get('/brand',[BrandController::class,'index'])->name('brand.index');
 Route::get('/brand/create',[BrandController::class,'create'])->name('brand.create');
 Route::get('/brand/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');
 Route::get('/brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
 Route::post('/brand/update',[BrandController::class,'update'])->name('brand.update');
 Route::post('/brand/store',[BrandController::class,'store'])->name('brand.store');
//  End Brand

// Start Category
 Route::get('/category',[CategoryController::class,'index'])->name('category.index');
 Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
 Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
 Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
 Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
 Route::post('/category/update',[CategoryController::class,'update'])->name('category.update');

 Route::get('/get-categories/{brandId}', [CategoryController::class,'getCategories']);
// End Category


// Start Product
Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::get('/product/{id}/delete',[ProductController::class,'delete'])->name('product.delete');
Route::get('/product/{id}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::get('/product/{id}/gallery',[ProductController::class,'gallery'])->name('product.gallery');

Route::get('/product/{id}/gallery/delete',[ProductController::class,'galleryDelete'])->name('product.gallery.delete');
Route::post('/product/item/add',[ProductController::class,'itemAdd'])->name('add.product.item');
Route::post('/product/update',[ProductController::class,'update'])->name('product.update');
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
// End Product

// Start Testimonial
Route::get('testimonial',[TestimonialController::class,'index'])->name('testimonial.index');
Route::get('testimonial/create',[TestimonialController::class,'create'])->name('testimonial.create');
Route::post('testimonial/store',[TestimonialController::class,'store'])->name('testimonial.store');
Route::post('testimonial/update',[TestimonialController::class,'update'])->name('testimonial.update');
Route::get('testimonial/{id}/edit',[TestimonialController::class,'edit'])->name('testimonial.edit');

Route::get('testimonial/{id}/delete',[TestimonialController::class,'delete'])->name('testimonial.delete');

// End Testimonial

// Start Banner
Route::get('banners',[BannerController::class,'index'])->name('banner.index');
Route::get('banners/create',[BannerController::class,'create'])->name('banner.create');
Route::post('banners/store',[BannerController::class,'store'])->name('banner.store');
Route::get('banners/{id}/delete',[BannerController::class,'delete'])->name('banner.delete');



// End Banner


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
