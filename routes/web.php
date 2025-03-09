<?php

use App\Http\Controllers\Admin\DashboardController;
// use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

//Public Routes
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/rent', [WelcomeController::class, 'rent'])->name('rent');
Route::get('/sale', [WelcomeController::class, 'sale'])->name('sale');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/projects', [WelcomeController::class, 'projects'])->name('projects');
Route::get('/project/{slug}', [WelcomeController::class, 'project'])->name('project');
Route::post('/propertybooking', [PropertyController::class, 'propertybooking'])->name('propertybooking');
Route::post('/contactpost', [WelcomeController::class, 'contactpost'])->name('contactpost');

//Auth Routes
Route::get('/user-register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register-post', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/user-login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login-post', [AuthController::class, 'loginPost'])->name('loginPost');
Route::post('/forget-password', [AuthController::class, 'userForgetpassword'])->name('userForgetpassword');
Route::get('/reset-password/{token}', [AuthController::class, 'resetpassword']);
Route::post('/reset-password-submit', [AuthController::class, 'resetpasswordsubmit'])->name('resetpasswordsubmit');
Route::get('/user/verify/{token}', [AuthController::class, 'verifyEmail'])->name('user.verify');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

////
Route::post('/adminlogin', [AuthController::class, 'adminlogin'])->name('Adminlogin');

Route::post('reset-password', [AuthController::class, 'adminresetpasswordsubmit'])->name('Adminresetpasswordsubmit');

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

Route::controller(DropzoneController::class)->group(function () {
    Route::get('dropzone', 'index');
    Route::post('dropzone/store', 'store')->name('dropzone.store');
});
