<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('customers', [CustomerController::class, 'index'])->name('customer.index');
Route::post('store', [CustomerController::class, 'store'])->name('customer.store');
Auth::routes();
//Auth::routes(['register' => false]);

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::resource('invoices', 'InvoicesController');

Route::resource('sections', 'SectionsController');

Route::resource('products', 'ProductsController');

Route::resource('InvoiceAttachments', 'InvoiceAttachmentsController');

//Route::resource('InvoicesDetails', 'InvoicesDetailsController');

Route::get('/section/{id}', 'InvoicesController@getproducts');

Route::get('/InvoicesDetails/{id}', 'InvoicesDetailsController@edit');

Route::get('download/{invoice_number}/{file_name}', 'InvoicesDetailsController@get_file');

Route::get('View_file/{invoice_number}/{file_name}', 'InvoicesDetailsController@open_file');

Route::post('delete_file', 'InvoicesDetailsController@destroy')->name('delete_file');

Route::get('/edit_invoice/{id}', 'InvoicesController@edit');

Route::get('/Status_show/{id}', 'InvoicesController@show')->name('Status_show');

Route::post('/Status_Update/{id}', 'InvoicesController@Status_Update')->name('Status_Update');

Route::resource('Archive', 'InvoiceAchiveController');

Route::get('Invoice_Paid', 'InvoicesController@Invoice_Paid');

Route::get('Invoice_UnPaid', 'InvoicesController@Invoice_UnPaid');

Route::get('Invoice_Partial', 'InvoicesController@Invoice_Partial');

Route::get('Print_invoice/{id}', 'InvoicesController@Print_invoice');

Route::get('export_invoices', [UserController::class, 'export']);
Route::get('import', [UserController::class, 'import'])->name('import');
Route::get('import_invoices', [UserController::class, 'importImport']);
Route::post('importSave', [UserController::class, 'importSave'])->name('importSave');
Route::get('categorys/{code}', [UserController::class, 'categorys'])->name('categorys');

// Route::get('import', [UserController::class, 'import'])->name('import');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('roles', RoleController::class);

    Route::resource('users', UserController::class);
});

Route::get('invoices_report', 'Invoices_Report@index');

Route::post('Search_invoices', 'Invoices_Report@Search_invoices');

Route::get('customers_report', 'Customers_Report@index')->name('customers_report');

Route::post('Search_customers', 'Customers_Report@Search_customers');

Route::get('MarkAsRead_all', 'InvoicesController@MarkAsRead_all')->name('MarkAsRead_all');

Route::get('unreadNotifications_count', 'InvoicesController@unreadNotifications_count')->name('unreadNotifications_count');

Route::get('unreadNotifications', 'InvoicesController@unreadNotifications')->name('unreadNotifications');

// Route::get('/{page}', AdminController::class,'index');
