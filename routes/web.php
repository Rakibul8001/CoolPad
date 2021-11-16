<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false]);


Route::get('user/login', 'FrontendController@login')->name('login.form');
Route::post('user/login', 'FrontendController@loginSubmit')->name('login.submit');
Route::get('user/logout', 'FrontendController@logout')->name('user.logout');

Route::get('user/register', 'FrontendController@register')->name('register.form');
Route::post('user/register', 'FrontendController@registerSubmit')->name('register.submit');
// Reset password
Route::post('password-reset', 'FrontendController@showResetForm')->name('password.reset');
// Socialite 
Route::get('login/{provider}/', 'Auth\LoginController@redirect')->name('login.redirect');
Route::get('login/{provider}/callback/', 'Auth\LoginController@Callback')->name('login.callback');

Route::get('/', 'FrontendController@home')->name('home');

// Frontend Routes

Route::get('/home', 'FrontendController@index');
Route::get('/about', 'FrontendController@aboutUs')->name('about-us');
Route::get('/faq', 'FrontendController@faq')->name('faq');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::post('/contact/message', 'MessageController@store')->name('contact.store');
Route::get('/product/{slug}', 'FrontendController@productDetail')->name('product-detail');
Route::post('/product/search', 'FrontendController@productSearch')->name('product.search');
Route::get('/product-cat/{slug}', 'FrontendController@productCat')->name('product-cat');
Route::get('/product-sub-cat/{slug}/{sub_slug}', 'FrontendController@productSubCat')->name('product-sub-cat');
Route::get('/product-brand/{slug}', 'FrontendController@productBrand')->name('product-brand');
// Cart section
Route::get('/add-to-cart/{slug}', 'CartController@addToCart')->name('add-to-cart')->middleware('user');
Route::post('/add-to-cart', 'CartController@singleAddToCart')->name('single-add-to-cart')->middleware('user');
Route::get('cart-delete/{id}', 'CartController@cartDelete')->name('cart-delete');
Route::post('cart-update', 'CartController@cartUpdate')->name('cart.update');

Route::get('/cart', function () {
    return view('frontend.pages.cart');
})->name('cart');
Route::get('/checkout', 'CartController@checkout')->name('checkout')->middleware('user');
// Wishlist
Route::get('/wishlist', function () {
    return view('frontend.pages.wishlist');
})->name('wishlist');
Route::get('/wishlist/{slug}', 'WishlistController@wishlist')->name('add-to-wishlist')->middleware('user');
Route::get('wishlist-delete/{id}', 'WishlistController@wishlistDelete')->name('wishlist-delete');
Route::post('cart/order', 'OrderController@store')->name('cart.order');
Route::get('order/pdf/{id}', 'OrderController@pdf')->name('order.pdf');
Route::get('/income', 'OrderController@incomeChart')->name('product.order.income');
// Route::get('/user/chart','AdminController@userPieChart')->name('user.piechart');
Route::get('/shop', 'FrontendController@productGrids')->name('product-grids');
Route::get('/product-lists', 'FrontendController@productLists')->name('product-lists');
Route::match(['get', 'post'], '/filter', 'FrontendController@productFilter')->name('shop.filter');
// Order Track
Route::get('/product/track', 'OrderController@orderTrack')->name('order.track');
Route::post('product/track/order', 'OrderController@productTrackOrder')->name('product.track.order');
// Blog
Route::get('/news', 'FrontendController@blog')->name('blog');
Route::get('/news-details/{slug}', 'FrontendController@blogDetail')->name('blog.detail');
Route::get('/news/search', 'FrontendController@blogSearch')->name('blog.search');
Route::post('/news/filter', 'FrontendController@blogFilter')->name('blog.filter');
Route::get('news-cat/{slug}', 'FrontendController@blogByCategory')->name('blog.category');
Route::get('news-tag/{slug}', 'FrontendController@blogByTag')->name('blog.tag');

// NewsLetter
Route::post('/subscribe', 'FrontendController@subscribe')->name('subscribe');

// Service Point
Route::get('/service-partner', 'FrontendController@servicePoint')->name('service-point');

Route::get('/district/{id}', 'FrontendController@getDistricts');
Route::get('/location/{id}', 'FrontendController@getLocations');

//Privacy & Policy
Route::get('/privacy', 'FrontendController@privacy')->name('privacy');
//User Agreement
Route::get('/agreement', 'FrontendController@agreement')->name('agreement');

// Product Review
Route::resource('/review', 'ProductReviewController');
Route::post('product/{slug}/review', 'ProductReviewController@store')->name('review.store');

// Post Comment 
Route::post('post/{slug}/comment', 'PostCommentController@store')->name('post-comment.store');
Route::resource('/comment', 'PostCommentController');
// Coupon
Route::post('/coupon-store', 'CouponController@couponStore')->name('coupon-store');
// Payment
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');

//Mega menu Product list
Route::get('/product-list-page', 'ProductListController@ListProduct')->name('product-list-page');


//Mega menu smart phone details page
Route::get('/smartphone-details', 'ProductListController@megamenuOne')->name('smartphone-details');
//Mega menu accessories details page
Route::get('/accessories-details', 'ProductListController@megamenuTwo')->name('accessories-details');

Route::get('/coolbuds-t1', function () {
    return view('frontend.accessories.coolbuds_t1');
})->name('coolbuds-t1');

Route::get('/coolbuds-t1-details', function () {
    return view('frontend.accessories.coolbuds_t1_details');
})->name('coolbuds-t1-details');

Route::get('/coolbuds-t2', function () {
    return view('frontend.accessories.coolbuds_t2');
})->name('coolbuds-t2');

Route::get('/coolbuds-t2-details', function () {
    return view('frontend.accessories.coolbuds_t2_details');
})->name('coolbuds-t2-details');

Route::get('/coolbuds-x', function () {
    return view('frontend.accessories.coolbuds_x');
})->name('coolbuds-x');

Route::get('/coolbuds-x-details', function () {
    return view('frontend.accessories.coolbuds_x_details');
})->name('coolbuds-x-details');

Route::get('/cool-router', function () {
    return view('frontend.accessories.cool_router');
})->name('cool-router');

Route::get('/cool-router-details', function () {
    return view('frontend.accessories.cool_router_details');
})->name('cool-router-details');

Route::get('/cool-ups', function () {
    return view('frontend.accessories.cool_ups');
})->name('cool-ups');

Route::get('/cool-ups-details', function () {
    return view('frontend.accessories.cool_ups_details');
})->name('cool-ups-details');

Route::get('/cool-watch-1s', function () {
    return view('frontend.accessories.cool_watch_1s');
})->name('cool-watch-1s');

Route::get('/cool-watch-1s-details', function () {
    return view('frontend.accessories.cool_watch_1s_details');
})->name('cool-watch-1s-details');

Route::get('/cool-watch', function () {
    return view('frontend.accessories.cool_watch');
})->name('cool-watch');

Route::get('/cool-watch-details', function () {
    return view('frontend.accessories.cool_watch_details');
})->name('cool-watch-details');

Route::get('/coolpad-mifi-cmf-01', function () {
    return view('frontend.accessories.coolpad_mifi');
})->name('coolpad-mifi');

Route::get('/coolpad-mifi-cmf-01-details', function () {
    return view('frontend.accessories.coolpad_mifi_details');
})->name('coolpad-mifi-details');

Route::get('/coolpad-mifi-cmf-02', function () {
    return view('frontend.accessories.coolpad_mifi_02');
})->name('coolpad-mifi-02');

Route::get('/coolpad-mifi-cmf-02-details', function () {
    return view('frontend.accessories.coolpad_mifi_02_details');
})->name('coolpad-mifi-02-details');

Route::get('/hub-100', function () {
    return view('frontend.accessories.hub_100');
})->name('hub-100');

Route::get('/hub-100-details', function () {
    return view('frontend.accessories.hub_100_details');
})->name('hub-100-details');

Route::get('/hub-300', function () {
    return view('frontend.accessories.hub_300');
})->name('hub-300');

Route::get('/hub-300-details', function () {
    return view('frontend.accessories.hub_300_details');
})->name('hub-300-details');

Route::get('/hub-800', function () {
    return view('frontend.accessories.hub_800');
})->name('hub-800');

Route::get('/hub-800-details', function () {
    return view('frontend.accessories.hub_800_details');
})->name('hub-800-details');

Route::get('/powerbank', function () {
    return view('frontend.accessories.powerbank');
})->name('powerbank');

Route::get('/powerbank-details', function () {
    return view('frontend.accessories.powerbank_details');
})->name('powerbank-details');

//Mega menu Smartphone Cool S page
Route::get('/cools-index', 'ProductListController@coolS')->name('cools-index');
Route::get('/cools-details', 'ProductListController@coolsDetails')->name('cools-details');
Route::get('/n7plus-index', 'ProductListController@n7Plus')->name('n7plus-index');
Route::get('/n7plus-details', 'ProductListController@n7PlusDetails')->name('n7plus-details');
Route::get('/n7air-index', 'ProductListController@n7Air')->name('n7air-index');
Route::get('/n7air-details', 'ProductListController@n7AirDetails')->name('n7air-details');





// Backend section start

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('/file-manager', function () {
        return view('backend.layouts.file-manager');
    })->name('file-manager');
    // user route
    Route::resource('users', 'UsersController');
    // Banner
    Route::resource('banner', 'BannerController');
    // Popup image
    Route::resource('popup', 'PopupController');
    // Smallbanner
    Route::resource('smallbanner', 'SmallbannerController');

    // Productbanner
    Route::resource('productbanner', 'ProductbannerController');

    // Service Partner
    //Location
    Route::resource('location', 'LocationController');

    //where to buy url
    Route::resource('where-to-buy', 'WheretobuyController');
    Route::get('/where-to-buy/{id}/edit', 'WheretobuyController@edit')->name('where-to-buy.edit');

    // Video Controller
    Route::resource('video', 'VideoController');

    // Testimonial
    Route::resource('testimonial', 'TestimonialController');
    // Brand
    Route::resource('brand', 'BrandController');
    // Profile
    Route::get('/profile', 'AdminController@profile')->name('admin-profile');
    Route::post('/profile/{id}', 'AdminController@profileUpdate')->name('profile-update');
    // Category
    Route::resource('/category', 'CategoryController');
    // Product
    Route::resource('/product', 'ProductController');
    // Ajax for sub category
    Route::post('/category/{id}/child', 'CategoryController@getChildByParent');
    // POST category
    Route::resource('/post-category', 'PostCategoryController');
    // Post tag
    Route::resource('/post-tag', 'PostTagController');
    // Post
    Route::resource('/post', 'PostController');
    // Message
    Route::resource('/message', 'MessageController');
    Route::get('/message/five', 'MessageController@messageFive')->name('messages.five');

    // Order
    Route::resource('/order', 'OrderController');
    // Shipping
    Route::resource('/shipping', 'ShippingController');
    // Coupon
    Route::resource('/coupon', 'CouponController');
    // Settings
    Route::get('settings', 'AdminController@settings')->name('settings');
    Route::post('setting/update', 'AdminController@settingsUpdate')->name('settings.update');

    // Notification
    Route::get('/notification/{id}', 'NotificationController@show')->name('admin.notification');
    Route::get('/notifications', 'NotificationController@index')->name('all.notification');
    Route::delete('/notification/{id}', 'NotificationController@delete')->name('notification.delete');
    // Password Change
    Route::get('change-password', 'AdminController@changePassword')->name('change.password.form');
    Route::post('change-password', 'AdminController@changPasswordStore')->name('change.password');
});



// User section start
Route::group(['prefix' => '/user', 'middleware' => ['user']], function () {
    //user dashboard
    Route::get('/', 'HomeController@index')->name('user');
    // Profile
    Route::get('/profile', 'HomeController@profile')->name('user-profile');
    Route::post('/profile/{id}', 'HomeController@profileUpdate')->name('user-profile-update');
    //  Address
    Route::get('/address', "HomeController@address")->name('user.address.index');
    Route::get('/billing', "HomeController@billing")->name('user.address.billing');
    Route::get('/shipping', "HomeController@shipping")->name('user.address.shipping');
    //  Wishlist
    Route::get('/wishlist', "HomeController@wishlist")->name('user.wishlist.index');

    //  Order
    Route::get('/order', "HomeController@orderIndex")->name('user.order.index');

    //  Order view
    Route::get('/order/show/{id}', "HomeController@orderShow")->name('user.order.show');
    Route::delete('/order/delete/{id}', 'HomeController@userOrderDelete')->name('user.order.delete');

    //  Order success
    Route::get('/order/success/{id}', "HomeController@orderSuccess")->name('user.order.success');

    // Product Review
    Route::get('/user-review', 'HomeController@productReviewIndex')->name('user.productreview.index');
    Route::delete('/user-review/delete/{id}', 'HomeController@productReviewDelete')->name('user.productreview.delete');
    Route::get('/user-review/edit/{id}', 'HomeController@productReviewEdit')->name('user.productreview.edit');
    Route::patch('/user-review/update/{id}', 'HomeController@productReviewUpdate')->name('user.productreview.update');

    // Post comment
    Route::get('user-post/comment', 'HomeController@userComment')->name('user.post-comment.index');
    Route::delete('user-post/comment/delete/{id}', 'HomeController@userCommentDelete')->name('user.post-comment.delete');
    Route::get('user-post/comment/edit/{id}', 'HomeController@userCommentEdit')->name('user.post-comment.edit');
    Route::patch('user-post/comment/udpate/{id}', 'HomeController@userCommentUpdate')->name('user.post-comment.update');

    // Password Change
    Route::get('change-password', 'HomeController@changePassword')->name('user.change.password.form');
    Route::post('change-password', 'HomeController@changPasswordStore')->name('change.password');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
