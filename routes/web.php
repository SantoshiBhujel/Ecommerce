<?php

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\EsewaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponAddController;
use App\Http\Controllers\PublicViewController;

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

Route::get('/',[PublicViewController::class,'welcome'])->name('welcome');


// Route::get('/abc',function () {
//     return view('abc');
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/single/product/{id}',[PublicViewController::class,'getSingleProduct'])->name('singleProduct');

//ROUTE FOR ABOUT US
Route::get('/aboutUs',[PublicViewController::class,'aboutUs'])->name('aboutUs');

//ROUTE FOR ABOUT US
Route::get('/terms/conditions',[PublicViewController::class,'terms'])->name('terms');

//ROUTE FOR ABOUT US
Route::get('/privacy/policy',[PublicViewController::class,'privacy'])->name('privacy');

//ROUTE FOR CART
Route::resource('cart', CartController::class);

//ROUTE FOR CATEGORY
Route::get('/menu/{name}/{id}',[PublicViewController::class,'categoryByMenu'])->where('name', '[A-Za-z&\s]+')->where('id', '[0-9]+')->name('categoryByMenu');

Route::get('/submenu/{submenu}/{id}',[PublicViewController::class,'categoryBySubmenu'])->where('submenu', "[A-Za-z&\s']+")->name('categoryBySubmenu');

Route::get('/category/{id}/{category}',[PublicViewController::class,'categoryByCategory'])->where('id', "[0-9]+")->where('category', "[A-Za-z&\s']+")->name('categoryByCategory');

Route::get('/products/{brand_id}/{menu_id}/{menu}',[PublicViewController::class,'productByMenuBrand'])->name('productByMenuBrand');

Route::get('/blog/list',[PublicViewController::class,'blogList'])->name('blogList');

Route::get('/single/blog/{id}',[PublicViewController::class,'singleBlog'])->name('singleBlog');

Route::get('/contactUs',[PublicViewController::class,'contactUs'])->name('contactUs');


Route::post('/contact/mail',[PublicViewController::class,'contactMail'])->name('contactMail');



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    //ROUTE FOR CHECKOUT
    Route::get('/checkout',[PublicViewController::class,'checkout'])->name('checkout');

    //ROUTE FOR CART
    Route::resource('order', OrderController::class);

    //ROUTE FOR COUPONS
    Route::post('coupon', [CouponController::class,'store'])->name('coupon.store');
    Route::post('coupon/delete',[CouponController::class,'delete'])->name('coupon.delete');

    //  ------------------------
    //  ROUTE FOR ESEWA PAYMENT
    //  ------------------------

    Route::get('/checkout/payment/{order}/esewa',[EsewaController::class,'checkout'] )->name('checkout.payment.esewa');

    Route::get('/checkout/payment/{order}/esewa/completed', [EsewaController::class,'completed'] )->name('checkout.payment.esewa.completed');

    Route::get('/checkout/payment/{order}/failed',[EsewaController::class,'failed'])->name('checkout.payment.esewa.failed');

    //ROUTE FOR COUPONS
    Route::get('thankyou/{id}/order/details', [PublicViewController::class,'orderDetail'])->name('orderDetail');

});




Route::middleware(['auth:sanctum', 'verified', AdminMiddleware::class])->group(function () {

    Route::get('/admin', function () {
        $users = DB::table('users')->where('id','!=',1)->count();
        $order=  DB::table('orders')->count();
        return view('admin.adminDashboard',compact('users','order'));
    })->name('adminDashboard');

    //ROUTE FOR MENU
    Route::resource('menu', MenuController::class);

    //ROUTE FOR SUBMENU
    Route::resource('submenu', SubmenuController::class);

    //ROUTE FOR CATEGORIES
    Route::resource('category', CategoryController::class);

    //ROUTE FOR ADDING NEW COUPONS
    Route::resource('addCoupon', CouponAddController::class);

    //ROUTE FOR ADDING NEW COUPONS
    Route::resource('banner', BannerController::class);

     //ROUTE FOR MENU
     Route::resource('blog', BlogController::class);

    //ROUTE FOR PAGES
    Route::resource('pages', PageController::class);

    //ROUTE FOR USERLIST
    Route::get('/userlist', [AdminController::class,'userlist'])->name('userlist');

    //ROUTE FOR SELLER LIST
    Route::get('/seller/list', [AdminController::class,'sellerlist'])->name('sellerlist');

    //ROUTE FOR PRODUCTS QUANTITY UPDATE HISTORY
    Route::get('/quantity/update/history/{id}', [ProductController::class,'quantityUpdateHistory'])->name('updateHistory');
});


Route::middleware(['auth:sanctum', 'verified', AdminMiddleware::class])->group(function () {

    //ROUTE FOR PRODUCTS
    Route::resource('product', ProductController::class);

    //ROUTE FOR RETRIEVING SUBMENU BASED ON MENU
    Route::get('/get/{value}/submenus', [AdminController::class,'getSubmenu']);

    //ROUTE FOR RETRIEVING SUBMENU BASED ON MENU
    Route::get('/get/{value}/category', [AdminController::class,'getCategory']);

    //ROUTE FOR PRODUCTS QUANTITY UPDATE
    Route::post('/product/quantity/update', [ProductController::class,'quantityUpdate'])->name('quantityUpdate');

    //ROUTE FOR PRODUCTS
    Route::resource('brand', BrandController::class);

});
