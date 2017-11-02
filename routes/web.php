<?php

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

Route::get('/', 'WelcomeController@index');
Route::get('/product-category/{id}', 'WelcomeController@category');
Route::get('/product-details/{id}', 'WelcomeController@productDetails');

Route::post('/add-to-cart', 'CartController@addToCart');
Route::get('/show-cart', 'CartController@showCart');
Route::post('/update-cart-product', 'CartController@updateCartInfo');
Route::get('/direct-add-to-cart/{id}', 'CartController@directAddToCart');
Route::get('/delete-cart-product/{rowId}', 'CartController@deleteCartProduct');

Route::get('/checkout','CheckoutController@index');
Route::post('/new-customer','CheckoutController@saveCustomerInfo');
Route::get('/shipping-info','CheckoutController@showShippingInfo');





//Back End category Controller
Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/new-category', 'CategoryController@saveCategory');
Route::get('/manage-category', 'CategoryController@manageCategory');
Route::get('/unpublished-category/{id}', 'CategoryController@unpublishedCategory');
Route::get('/published-category/{id}', 'CategoryController@publishedCategory');
Route::get('/edit-category/{id}', 'CategoryController@editCategory');
Route::post('/update-category', 'CategoryController@updateCategory');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategory');

//Brand Controller
Route::get('/add-brand', 'BrandController@addBrand');
Route::post('/new-brand', 'BrandController@saveBrand');
Route::get('/manage-brand', 'BrandController@manageBrand');
Route::get('/unpublished-brand/{id}', 'BrandController@unpublishedBrand');
Route::get('/published-brand/{id}', 'BrandController@publishedBrand');
Route::get('/edit-brand/{id}', 'BrandController@editBrand');
Route::post('/update-brand', 'BrandController@updateBrand');
Route::get('/delete-brand/{id}', 'BrandController@deleteBrand');

//Product Controller
Route::get('/add-product', 'ProductController@addProduct');
Route::post('/save-product', 'ProductController@saveProductInfo');
Route::get('/manage-product', 'ProductController@manageProductInfo');
Route::get('/view-product/{id}', 'ProductController@viewProductInfo');
Route::get('/unpublished-product/{id}', 'ProductController@unpublishedProduct');
Route::get('/published-product/{id}', 'ProductController@publishedProduct');
Route::get('/edit-product/{id}', 'ProductController@editProductInfo');
Route::post('/update-product', 'ProductController@updateProductInfo');
Route::get('/delete-product/{id}', 'ProductController@deleteProductInfo');
Route::get('/show-product', 'ProductController@showProductInfo');


//Slider Manages Code
Route::get('add-slider', 'SliderController@addSliderInfo');
Route::post('new-slider', 'SliderController@saveSliderInfo');
Route::get('manage-slider', 'SliderController@manageSliderInfo');
Route::get('/unpublished-slider/{id}', 'SliderController@unpublishedSliderInfo');
Route::get('/published-slider/{id}', 'SliderController@publishedSliderInfo');
Route::get('/edit-slider/{id}', 'SliderController@editSliderInfo');
Route::post('/update-slider', 'SliderController@updateSliderInfo');
Route::get('/delete-slider/{id}', 'SliderController@deleteSliderInfo');

//Home Offer code
Route::get('/add-offer', 'HomeofferController@addHomeOffer');
Route::post('/new-offer', 'HomeofferController@saveHomeOffer');





//For Auth Class
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




