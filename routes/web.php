<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TableController;
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
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'Dashboard'])->name('Dashboard');

//=================== CATEGORY CONTROLLER ARE HERE ====================

Route::get('/add-category', [App\Http\Controllers\CategoryController::class, 'AddCategory'])->name('AddCategory');
Route::post('/post-category', [App\Http\Controllers\CategoryController::class, 'PostCategory'])->name('PostCategory');
Route::get('/all-category', [App\Http\Controllers\CategoryController::class, 'AllCategory'])->name('AllCategory');
Route::get('/edit-category/{e_id}', [App\Http\Controllers\CategoryController::class, 'EditCategory'])->name('EditCategory');
Route::post('/update-category', [App\Http\Controllers\CategoryController::class, 'UpdateCategory'])->name('UpdateCategory');
Route::get('/delete-category/{d_id}', [App\Http\Controllers\CategoryController::class, 'DeleteCategory'])->name('DeleteCategory');
Route::get('/trash-category', [App\Http\Controllers\CategoryController::class, 'TrashCategory'])->name('TrashCategory');
Route::get('/restore-category/{r_id}', [App\Http\Controllers\CategoryController::class, 'RestoreCategory'])->name('RestoreCategory');
Route::get('/parment-delete-category/{r_id}', [App\Http\Controllers\CategoryController::class, 'ParmentDeleteCategory'])->name('ParmentDeleteCategory');

//================================== FOOD MENU ROUTE ARE HRE ============================
Route::get('/add-menu', [App\Http\Controllers\MenuController::class, 'AddMenu'])->name('AddMenu');
Route::post('/post-menu', [App\Http\Controllers\MenuController::class, 'PostMenu'])->name('PostMenu');
Route::get('/all-menu', [App\Http\Controllers\MenuController::class, 'AllMenu'])->name('AllMenu');
Route::get('/edit-menu/{e_id}', [App\Http\Controllers\MenuController::class, 'EditMenu'])->name('EditMenu');
Route::get('/view-menu/{v_id}', [App\Http\Controllers\MenuController::class, 'ViewMenu'])->name('ViewMenu');
Route::post('/update-menu', [App\Http\Controllers\MenuController::class, 'UpdateMenu'])->name('UpdateMenu');
Route::get('/delete-menu/{d_id}', [App\Http\Controllers\MenuController::class, 'DeleteMenu'])->name('DeleteMenu');
Route::get('/trash-menu', [App\Http\Controllers\MenuController::class, 'TrashMenu'])->name('TrashMenu');
Route::get('/re_store-menu/{r_id}', [App\Http\Controllers\MenuController::class, 'ReStorehMenu'])->name('ReStorehMenu');
Route::get('/parment-delete-menu/{r_id}', [App\Http\Controllers\MenuController::class, 'PermantDeleteMenu'])->name('PermantDeleteMenu');

//============================= TABLE CONTORLLER ROUTE ARE HERE =======================
Route::get('/add-table', [App\Http\Controllers\TableController::class, 'AddTable'])->name('AddTable');
Route::post('/post-table', [App\Http\Controllers\TableController::class, 'PostTable'])->name('PostTable');
Route::get('/all-table', [App\Http\Controllers\TableController::class, 'AllTable'])->name('AllTable');
Route::get('/delete-table/{d_id}', [App\Http\Controllers\TableController::class, 'DeleteTable'])->name('DeleteTable');

//==========================BILLING ROUTE ARE HERE =================================
Route::get('/billing', [App\Http\Controllers\BillingController::class, 'Billing'])->name('Billing');
//--------------------- SINGEL CART ARE HERE ----------------
Route::get('/singel/cart/delete/{id}', [App\Http\Controllers\BillingController::class, 'SingelCartDelete'])->name('SingelCartDelete');
Route::get('/item/add/busket/{id}', [App\Http\Controllers\BillingController::class, 'SingelCart'])->name('SingelCart');
Route::post('/item/menu/update', [App\Http\Controllers\BillingController::class, 'CartUpdate'])->name('CartUpdate');
Route::post('/create-invoice', [App\Http\Controllers\BillingController::class, 'CreateInvoice'])->name('CreateInvoice');


/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
