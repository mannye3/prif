<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SquarePaymentController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\Admin\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/rent', [WelcomeController::class, 'rent'])->name('rent');
Route::get('/sale', [WelcomeController::class, 'sale'])->name('sale');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/projects', [WelcomeController::class, 'projects'])->name('projects');
Route::get('/project/{slug}', [WelcomeController::class, 'project'])->name('project');
Route::post('/propertybooking', [PropertyController::class, 'propertybooking'])->name('propertybooking');
Route::post('/contactpost', [WelcomeController::class, 'contactpost'])->name('contactpost');









Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', UserController::class);
    Route::post('deleteUser/{id}', [UserController::class, 'destroy'])->name('deleteUser');
    Route::resource('roles', RoleController::class);
    Route::post('deleteRole/{id}', [RoleController::class, 'destroy'])->name('deleteRole');
    Route::resource('permissions', PermissionController::class);
    Route::post('deletePermissions/{id}', [PermissionController::class, 'destroy'])->name('deletePermissions');
    Route::resource('posts', PostController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::resource('categories', CategoryController::class);
    Route::post('deleteCategory/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');



    Route::resource('subcategories', SubcategoryController::class);
    Route::post('deletesubcategory/{id}', [SubcategoryController::class, 'destroy'])->name('deletesubcategory');





    Route::get('groups', [GroupController::class, 'index']);
    Route::post('groups/store', [GroupController::class, 'store'])->name('groupStore');
    Route::post('updateGroup/{id}', [GroupController::class, 'edit'])->name('updateGroup');
    Route::post('deleteGroup/{id}', [GroupController::class, 'delete'])->name('deleteGroup');


    Route::resource('entities', EntityController::class);
    Route::post('deleteEntity/{id}', [EntityController::class, 'destroy'])->name('deleteEntity');


    Route::resource('regulations', RegulationController::class);
    //Route::get('dropdown', [DropdownController::class, 'view'])->name('dropdownView');
    Route::get('get-categories', [RegulationController::class, 'getCategory'])->name('getCategory');
    //Route::get('/regulations/search/{title}', [RegulationController::class, 'search']);
    Route::post('regulations/{id}', [RegulationController::class, 'destroy'])->name('deleteRegulations');

    Route::get('regulations/create/{selectedValue}', [RegulationController::class, 'redirectToUrl'])->name('redirect');
    Route::get('regulations/add/', [RegulationController::class, 'add'])->name('add');

    Route::post('/regstatus/{id}', [RegulationController::class, 'regstatus'])->name('RegStatus');





    Route::get('property_pictures/{id}', [PropertyController::class, 'property_pictures'])->name('property_pictures');
    Route::get('properties/', [PropertyController::class, 'index'])->name('properties');
    Route::get('add_property', [PropertyController::class, 'create'])->name('add_property');
    Route::get('property/edit_property/{id}', [PropertyController::class, 'edit_property'])->name('edit_property');
    Route::post('property/store', [PropertyController::class, 'store'])->name('store_property');
    Route::post('property/ride_update/{id}', [PropertyController::class, 'property_update'])->name('property_update');
    Route::post('property/{id}', [PropertyController::class, 'destroy'])->name('deleteproperty');
    Route::post('deletepics/{id}', [PropertyController::class, 'deletepics'])->name('deletepics');

    Route::post('property/propertpicties/{id}', [PropertyController::class, 'propertpicties'])->name('propertpicties');
});


// Public Routes
Route::get('/mapdetails', [BookingController::class, 'mapdetails'])->name('mapdetails');
Route::get('/location/{id}', [BookingController::class, 'getLocation'])->name('location.get');
Route::get('/booking_request', [BookingController::class, 'booking_request'])->name('booking_request');
Route::get('/booking_request_location', [BookingController::class, 'booking_request_location'])->name('booking_request_location');
Route::get('/booking_details', [BookingController::class, 'booking_details'])->name('booking_details');
Route::post('/booking_submit', [BookingController::class, 'booking_submit'])->name('booking_submit');
Route::get('/booking_confirmation/{b_code}', [BookingController::class, 'booking_confirmation'])->name('booking_confirmation');
Route::get('/email_test/{b_code}', [BookingController::class, 'email_test'])->name('email_test');






Route::get('/booking_payment/{b_code}', [BookingController::class, 'booking_payment'])->name('booking_payment');


//Route::post('/search', 'SearchController@search');

Route::match(['get', 'post'], '/search', [SearchController::class, 'search'])->name('search');
Route::match('get', '/categorysearch/{category_slug}/{title}', [SearchController::class, 'categorysearch'])->name('categorysearch');





Route::get('/category/{slug}', [BrowseController::class, 'index'])->name('categorypages');
Route::get('/category/{slug}/{name}', [BrowseController::class, 'alphaname'])->name('alphaname');
Route::get('/categoryname/{slug}/{yname}', [BrowseController::class, 'yearname'])->name('yearname');
Route::get('/regulation/{slug}', [BrowseController::class, 'regulation'])->name('regulation');
Route::get('/document/payment/{slug}', [BrowseController::class, 'payment'])->name('payment');
Route::match(['get', 'post'], '/categorysearchcate/{category_id}', [BrowseController::class, 'categorysearchcate'])->name('categorysearchcate');





//Route::match(['get','post'],'/search', 'SearchController@search');
// ADMIN AUTH ROUTES
Route::post('/adminlogin', [AuthController::class, 'adminlogin'])->name('Adminlogin');
Route::post('/fogertpassword', [AuthController::class, 'adminforgetpassword'])->name('Adminforgetpassword');
Route::get('/reset-password/{token}', [AuthController::class, 'adminresetpassword']);
Route::post('reset-password', [AuthController::class, 'adminresetpasswordsubmit'])->name('Adminresetpasswordsubmit');


Route::controller(StripePaymentController::class)->group(function () {
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});




Route::get('paywithpaypal', [PaypalController::class, 'payWithPaypal'])->name('paywithpaypal');
Route::post('paypal', [PaypalController::class, 'postPaymentWithpaypal'])->name('paypal');
Route::get('paypal', [PaypalController::class, 'getPaymentStatus'])->name('status');

Route::post('/checkout', 'CheckoutController@checkout');

// Route::get('/squarepay', [SquarePaymentController::class, 'showPaymentForm']);
// Route::post('/process-payment', [SquarePaymentController::class, 'processPayment'])->name('process-payment');
Route::get('/create-checkout', [SquarePaymentController::class, 'createCheckout']);

Route::get('/checkout', [SquarePaymentController::class, 'createCheckout'])->name('square.checkout');
Route::get('/checkout/success', [SquarePaymentController::class, 'checkoutSuccess'])->name('square.checkout.success');

// Route::get('paywithpaypal', array('as' => 'paywithpaypal', 'uses' => 'PaypalController@payWithPaypal'));
// Route::post('paypal', array('as' => 'paypal', 'uses' => 'PaypalController@postPaymentWithpaypal'));
// Route::get('paypal', array('as' => 'status', 'uses' => 'PaypalController@getPaymentStatus'));

// Route::get('paywithpaypal', array('as' => 'paywithpaypal', 'uses' => 'PaypalController@payWithPaypal',));
// Route::post('paypal', array('as' => 'paypal', 'uses' => 'PaypalController@postPaymentWithpaypal',));
// Route::get('paypal', array('as' => 'status', 'uses' => 'PaypalController@getPaymentStatus',));


//Route::post('/payment/process', 'PaymentController@processPayment')->name('payment.process');




//Route::post('payment', [PaymentController::class, 'store'])->name('payment.store');

// Laravel 8 & 9
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);
// Laravel 8 & 9
//Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');

Route::post('/payment', [PaymentController::class, 'documentpay'])->name('docpayment');
Route::post('/charge', [PaymentController::class, 'charge'])->name('charge');

Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');






Route::controller(DropzoneController::class)->group(function () {
    Route::get('dropzone', 'index');
    Route::post('dropzone/store', 'store')->name('dropzone.store');
});





//Route::post('payment', ['as' => 'payment.store','uses' => 'PaymentController@store']);
