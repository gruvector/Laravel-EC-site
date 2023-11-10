<?php

use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\category\BrandController;
use App\Http\Controllers\category\CategoryController;
use App\Http\Controllers\category\CouponController;
use App\Http\Controllers\category\SubCategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MainAdminController;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderColtroller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\post\PostCategoryController;
use App\Http\Controllers\post\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\SocialController;
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

Route::get('/', function () {
    return view('pages.index');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('user.dashboard');
})->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profile', [MainAdminController::class, 'AdminProfile'])->name('admin.profile');
Route::get('/admin/profile/edit', [MainAdminController::class, 'AdminProfileEdit'])->name('admin.profile.edit');
Route::post('/admin/profile/store', [MainAdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
Route::get('/admin/password/edit', [MainAdminController::class, 'AdminPasswordEdit'])->name('admin.password.edit');
Route::post('/admin/password/update', [MainAdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');

//User All Route
Route::get('/user/logout', [MainUserController::class, 'Logout'])->name('user.logout');
Route::get('/dashboard', [MainUserController::class, 'UserProfile'])->name('user.profile');
Route::get('/user/dashboard/edit', [MainUserController::class, 'UserProfileEdit'])->name('profile.edit');
Route::post('/user/profile/store', [MainUserController::class, 'UserProfileStore'])->name('profile.store');
Route::get('/user/dashboard/password/edit', [MainUserController::class, 'UserPasswordEdit'])->name('user.password.edit');
Route::post('/user/password/update', [MainUserController::class, 'UserPasswordUpdate'])->name('password.update');

// All Category Route
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories');
Route::post('/admin/store/category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/delete/category/{id}', [CategoryController::class, 'destroy']);
Route::get('/edit/category/{category}', [CategoryController::class, 'edit']);
Route::post('/update/category/{category}', [CategoryController::class, 'update'])->name('category.update');

// All Brand Route
Route::get('/admin/brand', [BrandController::class, 'index'])->name('brand');
Route::post('/admin/store/brand', [BrandController::class, 'store'])->name('brand.store');
Route::get('/edit/brand/{id}', [BrandController::class, 'edit']);
Route::get('/delete/brand/{id}', [BrandController::class, 'destroy']);
Route::post('/update/brand/{id}', [BrandController::class, 'update'])->name('brand.update');

// All SubCategory Route
Route::get('/admin/subcategory', [SubCategoryController::class, 'index'])->name('subcategory');
Route::post('/admin/store/subcategory', [SubCategoryController::class, 'store'])->name('subcategory.store');
Route::get('/edit/subcategory/{id}', [SubCategoryController::class, 'edit']);
Route::get('/delete/subcategory/{id}', [SubCategoryController::class, 'destroy']);
Route::post('/update/subcategory/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');

// All Coupon Route
Route::get('/admin/coupon', [CouponController::class, 'index'])->name('coupon');
Route::post('/admin/store/coupon', [CouponController::class, 'store'])->name('coupon.store');
Route::get('/edit/coupon/{id}', [CouponController::class, 'edit']);
Route::get('/delete/coupon/{id}', [CouponController::class, 'destroy']);
Route::post('/update/coupon/{id}', [CouponController::class, 'update'])->name('coupon.update');

// All Newsletter Route
Route::get('/admin/newsletter', [NewsletterController::class, 'index'])->name('newsletter');
Route::post('/admin/store/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::get('/delete/newsletter/{id}', [NewsletterController::class, 'destroy']);

// All Product Route
Route::get('/admin/all/product', [ProductController::class, 'index'])->name('all.product');
Route::get('/admin/add/product', [ProductController::class, 'create'])->name('add.product');
Route::post('/admin/store/product', [ProductController::class, 'store'])->name('store.product');
Route::get('/admin/edit/product/{id}', [ProductController::class, 'edit'])->name('edit.product');
Route::get('/admin/view/product/{id}', [ProductController::class, 'show'])->name('view.product');
Route::get('/admin/delete/product/{id}', [ProductController::class, 'destroy'])->name('delete.product');
Route::post('/update/product/withoutphoto/{id}', [ProductController::class, 'UpdateProductWithoutPhoto']);
Route::post('/update/product/photo/{id}', [ProductController::class, 'UpdateProductPhoto']);
Route::get('/active/product/{id}', [ProductController::class, 'active']);
Route::get('/inactive/product/{id}', [ProductController::class, 'inactive']);
Route::get('/products/{id}', [ProductController::class, 'productsview']);
Route::get('/allcategory/{id}', [ProductController::class, 'allcategory']);

// All Post Category Route
Route::get('/all/post/category', [PostCategoryController::class, 'index'])->name('all.post.category');
Route::post('/post/category/store', [PostCategoryController::class, 'store'])->name('post.category.store');
Route::get('/edit/post/category/{id}', [PostCategoryController::class, 'edit']);
Route::get('/delete/post/category/{id}', [PostCategoryController::class, 'destroy']);
Route::post('/update/post/category/{id}', [PostCategoryController::class, 'update'])->name('post.category.update');

//All Post Route
Route::get('/admin/all/post', [PostController::class, 'index'])->name('all.post');
Route::post('/admin/store/post', [PostController::class, 'store'])->name('store.post');
Route::get('/admin/add/post', [PostController::class, 'create'])->name('add.post');
Route::get('/admin/edit/post/{id}', [PostController::class, 'edit']);
Route::get('/admin/view/post/{id}', [PostController::class, 'show'])->name('view.post');
Route::get('/admin/delete/post/{id}', [PostController::class, 'destroy']);
Route::post('/update/post/withoutphoto/{id}', [PostController::class, 'UpdatepostWithoutPhoto']);
Route::post('/update/post/photo/{id}', [PostController::class, 'UpdatepostPhoto']);

//Add Wishlist
Route::get('add/wishlist/{id}', [WishlistController::class, 'addwishlist']);
Route::get('user/wishlist', [WishlistController::class, 'wishlist'])->name('user.wishlist');

//Add To Cart
Route::get('add/to/cart/{id}', [AddToCartController::class, 'addcart']);
Route::get('check', [AddToCartController::class, 'check']);
Route::get('product/cart', [AddToCartController::class, 'ShowCart'])->name('show.cart');
Route::get('remove/cart/{rowId}', [AddToCartController::class, 'removecart']);
Route::post('update/cart/', [AddToCartController::class, 'updatecart'])->name('cart.update');

//Checkout controller
Route::get('user/checkout', [CheckoutController::class, 'checkout'])->name('user.checkout');
Route::post('user/apply/coupon', [CheckoutController::class, 'applycoupon'])->name('apply.coupon');
Route::get('user/coupon/remove', [CheckoutController::class, 'couponremove'])->name('coupon.remove');
Route::get('user/payment/page', [CheckoutController::class, 'paymentpage'])->name('payment.stap');

//Payment Controller
Route::post('user/payment/process', [PaymentController::class, 'payment'])->name('payment.process');
Route::post('user/stripe/chrage', [PaymentController::class, 'stripechrage'])->name('stripe.chrage');

//Product details
Route::get('product/details/{id}/{product_name}', [ProductDetailsController::class, 'ProductdView']);
Route::post('cart/product/add/{id}', [ProductDetailsController::class, 'addtocart']);

//order Controller
Route::get('admin/painding/order', [OrderColtroller::class, 'neworder'])->name('new.order');
Route::get('admin/view/order/{id}', [OrderColtroller::class, 'vieworder']);
Route::get('admin/payment/accept/{id}', [OrderColtroller::class, 'paymentaccept']);
Route::get('admin/payment/cancel/{id}', [OrderColtroller::class, 'paymentcancel']);
Route::get('admin/accept/order', [OrderColtroller::class, 'acceptorder'])->name('admin.accept.order');
Route::get('admin/cancel/order', [OrderColtroller::class, 'cancelorder'])->name('admin.cancel.order');
Route::get('admin/process/order', [OrderColtroller::class, 'processorder'])->name('admin.process.order');
Route::get('admin/delivery/order', [OrderColtroller::class, 'deliveryorder'])->name('admin.delivery.order');
Route::get('admin/process/delivery/{id}', [OrderColtroller::class, 'processdelivery']);
Route::get('admin/delivery/done/{id}', [OrderColtroller::class, 'deliverydone']);
Route::post('order/tracking', [OrderColtroller::class, 'ordertracking'])->name('order.tracking');

//return order
Route::get('user/return/order', [OrderColtroller::class, 'ReturnOrder'])->name('success.order');
Route::get('request/return/{id}', [OrderColtroller::class, 'RequestReturn']);

Route::get('admin/today/order', [ReportController::class, 'todayorder'])->name('today.order');
Route::get('admin/today/deliver', [ReportController::class, 'todaydeliver'])->name('today.deliver');
Route::get('admin/this/month', [ReportController::class, 'thismonth'])->name('this.month');
Route::get('admin/search/report', [ReportController::class, 'search'])->name('search.report');
Route::post('admin/search/by/date', [ReportController::class, 'searchByDate'])->name('search.by.date');
Route::post('admin/search/by/month', [ReportController::class, 'searchByMonth'])->name('search.by.month');
Route::post('admin/search/by/year', [ReportController::class, 'searchByYear'])->name('search.by.year');
Route::get('admin/download/report', [ReportController::class, 'downloadreport']);

//User Role
Route::get('admin/all/user', [UserRoleController::class, 'UserRole'])->name('admin.all.user');
Route::get('admin/create/admin', [UserRoleController::class, 'UserCreate'])->name('create.admin');
Route::post('admin/store/admin', [UserRoleController::class, 'UserStore'])->name('store.admin');
Route::get('delete/admin/{id}', [UserRoleController::class, 'Userdelete']);
Route::get('edit/admin/{id}', [UserRoleController::class, 'Useredit']);
Route::post('update/admin/{id}', [UserRoleController::class, 'UserUpdate'])->name('update.admin');



//site setting
Route::group([
    'prefix' => 'admin/sitesetting',
], function () {
    Route::get('/', [SettingController::class, 'SiteSetting'])->name('admin.sitesetting');
    Route::post('/update', [SettingController::class, 'UpdateSiteSetting'])->name('update.sitesetting');
});

//admin return
Route::group([
    'prefix' => 'admin',
], function () {
    Route::get('/return/request', [ReturnController::class, 'ReturnRequest'])->name('admin.return.request');
    Route::get('/approve/return/{id}', [ReturnController::class, 'ApprovedReturn']);
    Route::get('/all/request', [ReturnController::class, 'AllRequest'])->name('admin.all.request');
});

//Product Stock
Route::group([
    'prefix' => 'admin/product',
], function () {
    Route::get('/stock', [ProductStockController::class, 'ProductStock'])->name('admin.product.stock');
});

//Contact Page
Route::group([
    'prefix' => 'contact',
], function () {
    Route::get('/page', [ContactController::class, 'Contact'])->name('contact.page');
    Route::post('/form', [ContactController::class, 'ContactForm'])->name('contact.form');
    Route::get('/all/message', [ContactController::class, 'AllMessage'])->name('all.message');
});

// Serach Form
Route::group([
    'prefix' => 'search',
], function () {
    Route::post('/product', [SearchController::class, 'search'])->name('search.form');
});

//Social Controller
Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('/callback/{provider}', [SocialController::class, 'callback']);

//Notification
Route::get('/notification', [NotificationController::class, 'index']);

Route::get('/payment-notification', [PaymentController::class, 'notification']);






Route::view('/condition', 'pages.condition')->name('condition');
Route::view('/intro', 'pages.introduction')->name('intro');
Route::view('/home', 'pages.index')->name('home');
Route::view('/EC-intro', 'pages.EC_Introduction')->name('EC-intro');


