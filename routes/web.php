<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Categorise\CategoriController;
use App\Http\Controllers\Categorise\CompanyController;
use App\Http\Controllers\NdController;
use App\Http\Controllers\TechniqueControlle;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EditfooterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PromotionsController;
use App\Http\Controllers\IntroducesController;
use App\Http\Controllers\EndowsController;
use App\Http\Controllers\BanksController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\Authenticate;

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

Route::get('/', function () {
    return redirect()->route(route: 'home');
});
Route::get('register', [UserController::class, 'register'])->name(name: 'dky');
Route::post('register', [UserController::class, 'fromSumbit'])->name(name: 'register');
Route::get('Login', [UserController::class, 'Login'])->name(name: 'dkn');
Route::post('Login', [UserController::class, 'fromLogin'])->name(name: 'Login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('Reset', [UserController::class, 'Reset']);
Route::post('Reset', [UserController::class, 'fromReset'])->name(name: 'password.link');
Route::get('Error', [UserController::class, 'Error'])->name('error');


Route::group(['prefix' => 'Admin', 'middleware' => ['auth', 'is_admin']], function () {
    //category
    Route::get('Cartegory', [CategoriController::class, 'ListCategory'])->name('listCategory');
    Route::get('Cartegory-add', [CategoriController::class, 'AddCategory'])->name('addCategory');
    Route::post('Cartegory-add-save', [CategoriController::class, 'AddCategorySave'])->name('addCategorySave');
    Route::get('Cartegory-edit/{id}', [CategoriController::class, 'EditCategory'])->name('editCategory');
    Route::post('Cartegory-edit-save/{id}', [CategoriController::class, 'EditCategorySave'])->name('editCategorySave');
    Route::get('Cartegory-delete/{id}', [CategoriController::class, 'DeleteCategory'])->name('deleteCategory');

    //company
    Route::get('Company', [CompanyController::class, 'CompanyList'])->name('listCompany');
    Route::get('Company-add', [CompanyController::class, 'CompanyAdd'])->name('addCompany');
    Route::post('Company-add-save', [CompanyController::class, 'CompanyAddSave'])->name('addCompanySave');
    Route::get('Company-edit/{id}', [CompanyController::class, 'CompanyEdit'])->name('editCompany');
    Route::post('Company-edit-save/{id}', [CompanyController::class, 'CompanyEditSave'])->name('editCompanySave');
    Route::get('Company-delete/{id}', [CompanyController::class, 'CompanyDelete'])->name('deleteCompany');

    //Technique
    Route::get('Technique', [TechniqueControlle::class, 'techniqueList'])->name('listTechnique');
    Route::get('Technique-add', [TechniqueControlle::class, 'techniqueAdd'])->name('addTechnique');
    Route::post('Technique-add-save', [TechniqueControlle::class, 'techniqueAddSave'])->name('addTechniqueSave');
    Route::get('Technique-edit/{id}', [TechniqueControlle::class, 'techniqueEdit'])->name('editTechnique');
    Route::post('Technique-edit-save/{id}', [TechniqueControlle::class, 'techniqueEditSave'])->name('editTechniqueSave');
    Route::get('Technique-delete/{id}', [TechniqueControlle::class, 'techniqueDelete'])->name('deleteTechnique');

    //Search
    Route::get('Search', [NdController::class, 'search']);

    // Khuyến mãi

    Route::get('Promotion', [PromotionsController::class, 'promotionList'])->name('listPromotion');
    Route::get('Promotion-add', [PromotionsController::class, 'promotionAdd'])->name('addPromotion');
    Route::post('Promotion-add-save', [PromotionsController::class, 'promotionAddSave'])->name('addPromotionSave');
    Route::get('Promotion-edit/{id}', [PromotionsController::class, 'promotionEdit'])->name('editPromotion');
    Route::post('Promotion-edit-save/{id}', [PromotionsController::class, 'promotionEditSave'])->name('editPromotionSave');
    Route::get('Promotion-delete/{id}', [PromotionsController::class, 'promotionDelete'])->name('deletePromotion');

    //bank
    Route::get('Bank', [BanksController::class, 'bankList'])->name('listBank');
    Route::get('Bank-add', [BanksController::class, 'bankAdd'])->name('addBank');
    Route::post('Bank-add-save', [BanksController::class, 'bankAddSave'])->name('addBankSave');
    Route::get('Bank-edit/{id}', [BanksController::class, 'bankEdit'])->name('editBank');
    Route::post('Bank-edit-save/{id}', [BanksController::class, 'bankEditSave'])->name('editBankSave');
    Route::get('Bank-delete/{id}', [BanksController::class, 'bankDelete'])->name('deleteBank');

    // Giới thiệu
    Route::get('Introduces', [IntroducesController::class, 'introducesList'])->name('listIntroduces');
    Route::get('Introduces-add', [IntroducesController::class, 'introducesAdd'])->name('addIntroduces');
    Route::post('Introduces-add-save', [IntroducesController::class, 'introducesAddSave'])->name('addIntroducesSave');
    Route::get('Introduces-edit/{id}', [IntroducesController::class, 'introducesEdit'])->name('editIntroduces');
    Route::post('Introduces-edit-save/{id}', [IntroducesController::class, 'introducesEditSave'])->name('editIntroducesSave');

    // Đơn hàng
    Route::get('Order', [OrderController::class, 'orderList'])->name('listOrder');
    Route::get('Order/product-list/{id}', [OrderController::class, 'orderProductList'])->name('orderProductList');
    Route::post('/ajax/statusCart', [OrderController::class, 'statusCart'])->name('statusCart');


     // Ưu đãi
     Route::get('Endows', [EndowsController::class, 'endowsList'])->name('listEndow');
     Route::get('Endows-add', [EndowsController::class, 'endowsAdd'])->name('addEndow');
     Route::post('Endows-add-save', [EndowsController::class, 'endowsAddSave'])->name('addEndowSave');
     Route::get('Endows-edit/{id}', [EndowsController::class, 'endowsEdit'])->name('editEndow');
     Route::post('Endows-edit-save/{id}', [EndowsController::class, 'endowsEditSave'])->name('editEndowSave');
     Route::get('Endows-delete/{id}', [EndowsController::class, 'endowsDelete'])->name('deleteEndow');

    // Route::get('index', [UserController::class, 'index'])->name(name:'index');
    Route::get('Update/{id}', [UserController::class, 'Update'])->name('up');
    Route::post('Update/{id}', [UserController::class, 'fromUpdate'])->name('Update');
    Route::get('/', [UserController::class, 'Admin'])->name(name: 'Admin');
    Route::get('deleteuser/{id}', [UserController::class, 'delete'])->name(name: 'delete');
    Route::post('store', [UserController::class, 'store'])->name(name: 'store');

    Route::get('/user', [UserController::class, 'User'])->name(name: 'User');

    Route::get('from', [NdController::class, 'form_basic'])->name(name: 'from');
    // Route::get('Content', [NdController::class, 'nd'])->name('Content');
    Route::post('Product/ndstore', [NdController::class, 'ndstore'])->name(name: 'ndstore');
    Route::get('Product', [NdController::class, 'ndindex'])->name(name: 'ndindex');
    Route::get('Product/delete/{id}', [NdController::class, 'nddelete'])->name(name: 'nddelete');
    Route::get('Product/Update/{id}', [NdController::class, 'ndUpdate'])->name('ndup');
    Route::post('Product/Update/{id}', [NdController::class, 'ndfromUpdate'])->name('ndUpdate');
    Route::get('Product/{id}', [NdController::class, 'ndSee']);
    Route::get('Product/{id}', [NdController::class, 'ndfromSee'])->name('ndSee');
    Route::post('Product/comment', [NdController::class, 'blfromSee'])->name('blSee');

    Route::get('BannerFooter/edit/{id}', [EditfooterController::class, 'form_edit'])->name(name: 'from_footer');
    Route::post('BannerFooter/edit/save/{id}', [EditfooterController::class, 'form_edit_save'])->name(name: 'from_footer_save');
    Route::get('BannerFooter', [EditfooterController::class, 'ndbanner'])->name(name: 'ndbanner');
});


Route::prefix('Trang-chủ')->group(function () {
    Route::get('/', [ProductsController::class, 'Home' ])->name('home');
});
Route::get('/Sản-phẩm', [ProductsController::class, 'Sp'])->name('product');
Route::get('/Thông-tin-sản-phẩm/{id}', [ProductsController::class, 'Ttsp'])->name('ttsp');
Route::get('/Khuyến-mại', [ProductsController::class, 'Khuyenmai'])->name('list-khuyenmai');
Route::get('/Chi-tiết-khuyến-mại/{id}', [ProductsController::class, 'Khuyenmai2'])->name('khuyen-mai');
Route::get('/Giới-thiệu', [ProductsController::class, 'Gioithieu'])->name('gioithieu');


//cart
Route::post('/cart-add', [CartController::class, 'cartAdd'])->name('cartAdd');
Route::post('/cart-delete', [CartController::class, 'cartDelete'])->name('cartDelete');
Route::post('/cart-delete-all', [CartController::class, 'cartDeleteAll'])->name('cartDeleteAll');
Route::get('/Order', [ProductsController::class, 'orderAll'])->name('orderAll');
Route::get('/OrderProduct/{id}', [ProductsController::class, 'orderProduct'])->name('orderProduct');
Route::post('/ajax/cancel', [CartController::class, 'cartCancel'])->name('cartCancel');


Route::group(['middleware' => ['auth', 'is_user']], function () {
    //category
    Route::get('/cart', [ProductsController::class, 'cart'])->name('cart');
    Route::post('/cart-pay', [ProductsController::class, 'pay'])->name('pay');
    Route::get('/Thông-tin-tài-khoản', [ProductsController::class, 'Tttk'])->name('tttk');
    Route::get('/Đổi-mật-khẩu', [ProductsController::class, 'Dmk'])->name('dmk');
    Route::post('/Đổi-mật-khẩu-save', [ProductsController::class, 'saveDmk'])->name('dmkSave');
    Route::post('/ajax/huyen', [ProductsController::class, 'ajaxHuyen'])->name('ajax-huyen');
    Route::post('/ajax/xa', [ProductsController::class, 'ajaxXa'])->name('ajax-xa');
    Route::post('/editUserSave', [ProductsController::class, 'editUserSave'])->name('editUserSave');
    Route::post('/ajax/sp', [ProductsController::class, 'ajaxSp'])->name('ajax-sp');
    Route::get('/cart/cart-checkout', [ProductsController::class, 'cartCheckout'])->name('cart-checkout');
});
