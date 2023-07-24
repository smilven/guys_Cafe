<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\FoodMenu;
use App\Models\Voucher;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\myCartController;

use App\Http\Controllers\ControlController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\UserLoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\DisableBackBtn;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\paymentDetailController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CashController;
use App\Http\Controllers\RecordController;


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
Route::get('/forget-password',[ForgetPasswordManager::class,'forgetPassword'])
->name("forget.password");
Route::post('/forget-password',[ForgetPasswordManager::class,'forgetPasswordPost'])
->name("forget.password.post");
Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])
    ->name('reset.password');
Route::post('/reset-password',[ForgetPasswordManager::class,'resetPasswordPost'])
->name("reset.password.post");
Route::get('/layout', function () {
    return view('layout');
});
Route::post('Login',[UserLoginController::class,'addData']);

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/layout2', function () {
    return view('layout2');
});

Route::get('/payment', function () {
    return view('paymentMethod');
});

Route::get('/Login', function () {
    return view('welcome');
});
 

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'showCategoryAndProduct'])->name('home')->middleware('verifiedphone');
    Route::post('build-twiml/{code}','PhoneVerificationController@buildTwiMl')->name('phoneverification.build');
    Auth::routes();
    Route::post('/phone/verify', [App\Http\Controllers\PhoneNumberVerifyController::class, 'verify'])->name('phoneverification.verify');
    
    Route::get('/phone/verify', [App\Http\Controllers\PhoneNumberVerifyController::class, 'show'])->name('phoneverification.show');
    Route::post('/add.to.cart',[App\Http\Controllers\myCartController::class,'addCart'])->name('add.to.cart');
    Route::get('/fetchAllorder', [myCartController::class, 'fetchAllorder'])->name('fetchAllorder');

    Route::post('/home/place', [App\Http\Controllers\OrderController::class,'placeOrder'])->name('place');
   // Route::get('DeleteMyCart/{id}', [myCartController::class, 'DeleteMyCart']);
    Route::delete('mycart/delete/{id}', [myCartController::class, 'delete'])->name('mycart.delete');
    Route::post('mycart/update/{id}', [myCartController::class, 'update'])->name('mycart.update');
    Route::get('/fetchAllPayment', [myCartController::class, 'fetchAllPayment'])->name('fetchAllPayment');
    //Route::get('/fetchAllPaymentDetail', [myCartController::class, 'fetchAllPaymentDetail'])->name('fetchAllPaymentDetail');
    Route::get('/fetchAllMyPoint', [myCartController::class, 'fetchAllMyPoint'])->name('fetchAllMyPoint');
    Route::match(['get', 'post'], '/fetchAllPaymentDetail', [myCartController::class, 'fetchAllPaymentDetail'])->name('fetchAllPaymentDetail');
    Route::delete('paymentDetail/delete/{id}', [myCartController::class, 'delete'])->name('paymentDetail.delete');
    Route::post('/home/store', [paymentDetailController::class, 'store'])->name('store.card.info');
    Route::post('/delete-card', [paymentDetailController::class,'deleteCard'])->name('delete.card');
    Route::get('/getRedemptionCode', [VoucherController::class, 'getRedemptionCode'])->name('getRedemptionCode');
    Route::get('/fetchRedemptionCode', [VoucherController::class, 'fetchRedemptionCode'])->name('fetchRedemptionCode');
    Route::post('/VoucherRedemption', [VoucherController::class,'storeVoucherRedemption'])->name('VoucherRedemption');
    Route::get('/get-payment-records', [HomeController::class, 'getPaymentRecords'])->name('get.payment.records')->middleware('verifiedphone');
    Route::post('/coupon', [VoucherController::class,'storeCoupon'])->name('coupon.store');
    Route::post('/coupon/remove', [VoucherController::class,'storeCoupon'])->name('coupon.remove');

});






//这个是for 看worker的page的
Route::get('/worker', function () {
    return view('humanresource');
});

//这个是for create worker的page的
Route::post('worker', [AdminController::class, 'addWorker']);

//这个是for show create料worker的page
Route::get('worker', [AdminController::class, 'showWorker']);

//这个是for delete create料worker的page
Route::get('delete3/{id}', [AdminController::class, 'deleteWorker']);


//Look Admin Dashboard to editWorker
Route::get('edit-worker/{id}', [AdminController::class, 'editWorker']);

//Look Admin Dashboard to UpdateWorker
Route::put('update-worker', [AdminController::class, 'UpdateWorker']);








//这个是display kitchen的
Route::get('/kitchen', function () {
    return view('kitchen');
});






Route::get('/new', function () {
    return view('newUI');
});

 



Route::post('/toggle-status/{foodId}', [AdminController::class, 'toggleStatus']);
Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:kitchen'])->group(function () {
    Route::get('kitchen', [KitchenController::class, 'showFood'])->name('showfood');
    Route::post('/update-order-status', [KitchenController::class, 'updateOrderStatus'])->name('update.order.status');
    Route::delete('/kitchen/{userID}', [KitchenController::class, 'deleteOrder'])->name('kitchen.delete');
    Route::get('/get-food-status/{userID}', [KitchenController::class, 'getFoodStatus'])->name('get.food.status');



});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
// Routes for authenticated users
 

Route::middleware(['auth', 'user-access:admin','revalidate'] )->group(function () {
    Route::get('/',[LoginController::class, 'index']);

    Route::get('/adminhome', function() {return view('control');})->name('admin.home');
         Route::post('supplier', [ControlController::class, 'store']);
    Route::get('fetch-supplier', [ControlController::class, 'fetchsupplier']);
    Route::get('edit-supplier/{id}', [ControlController::class, 'edit']);
    Route::put('update-supplier/{id}', [ControlController::class, 'update']);
    Route::delete('delete-supplier/{id}', [ControlController::class, 'destroy']);

    Route::get('/worker', function () {
        return view('humanresource');
    });

    Route::get('/user', function () {
        return view('client');
    });
    
    Route::get('adminhome', [AdminController::class, 'show'])->name('record.show');
    Route::get('supplier', [AdminController::class, 'Category']);
    Route::post('worker', [AdminController::class, 'addWorker']);
    Route::get('worker', [AdminController::class, 'showWorker']);
    Route::get('delete3/{id}', [AdminController::class, 'deleteWorker']);
    Route::get('edit-worker/{id}', [AdminController::class, 'editWorker']);
    Route::put('update-worker', [AdminController::class, 'UpdateWorker']);

    Route::get('/product', [AdminController::class, 'Category']);
    Route::post('/Category', [AdminController::class, 'addCategory']);
    Route::get('edit-category/{id}', [AdminController::class, 'editCategory']);
    Route::put('update-category/{id}', [AdminController::class, 'updateCategory']);
    Route::get('/categories', [AdminController::class, 'fetchcategory']);
    Route::delete('deleteCategory/{id}', [AdminController::class, 'deleteCategory']);

    Route::get('/product', [FoodMenuController::class, 'index']);
    Route::post('/store', [FoodMenuController::class, 'store'])->name('store');
    Route::get('/fetchall', [FoodMenuController::class, 'fetchAll'])->name('fetchAll');
    Route::delete('/delete', [FoodMenuController::class, 'delete'])->name('delete');
    Route::get('/edit', [FoodMenuController::class, 'edit'])->name('edit');
    Route::post('/update', [FoodMenuController::class, 'update'])->name('update');
    Route::post('/toggle-status/{foodId}', [FoodMenuController::class, 'toggleStatus']);
    Route::get('/fetch-categories', [FoodMenuController::class, 'fetchCategories']);

    Route::get('/vouchers', [VoucherController::class, 'index'])->name('admin.vouchers');
    Route::post('vouchers', [VoucherController::class, 'store']);
    Route::get('fetch-vouchers', [VoucherController::class, 'fetchvoucher']);
    Route::get('edit-voucher/{id}', [VoucherController::class, 'edit']);
    Route::put('update-voucher/{id}', [VoucherController::class, 'update']);
    Route::delete('delete-voucher/{id}', [VoucherController::class, 'destroy']);

    Route::get('/table', [TableController::class, 'indexTable'])->name('admin.table');
    Route::post('SaveTable', [TableController::class, 'CreateTable']);
    Route::get('fetch-table', [TableController::class, 'fetchTables']);
    Route::get('deleteTable/{id}', [TableController::class, 'DeleteTable']);



    Route::get('/general',[MessageController::class, 'message'])->name('humanresource');
    Route::post('/general',[MessageController::class, 'smessage'])->name('smessage');
    Route::get('edit-message/{id}',[MessageController::class, 'edit']);
    Route::put('update-message',[MessageController::class, 'update']);
    Route::delete('delete-message',[MessageController::class, 'destroy']);
    Route::get('remind', [ControlController::class, 'remind']);


    Route::get('/cash', [CashController::class, 'index'])->name('cash.index');
    Route::post('/cash/perform-payment', [CashController::class, 'performCashPayment'])->name('cash.perform.payment');


    Route::get('/get-payment-data', [RecordController::class, 'show'])->name('get-payment-data');
});
