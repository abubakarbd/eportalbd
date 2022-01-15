<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'website\FrontingComtroller@index')->name('index');
Route::get('/notice', 'website\FrontingComtroller@notice')->name('notice');
Route::get('/products','website\FrontingComtroller@products')->name('products');
Route::get('/single-product/{id}','website\FrontingComtroller@singleProduct')->name('single-product');
Route::get('/e-service/{id}','website\FrontingComtroller@service')->name('service');
Route::get('/services/{id}','website\FrontingComtroller@Client')->name('service-client');
Route::post('/services/save-services','ClientController@saveClient')->name('save-client');


Auth::routes();

Route::middleware(['auth'])->group(function(){

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/password', 'HomeController@Password')->name('password');
Route::post('/password', 'HomeController@savePassword')->name('password-save');
Route::get('/setting', 'HomeController@setting')->name('setting');
Route::post('/setting', 'HomeController@settingUpdate')->name('settingUpdate');

//Work
Route::get('/work/list','WorkController@listWork')->name('list-work');
Route::get('/work/add','WorkController@addWork')->name('add-work');
Route::post('/work/add','WorkController@saveWork')->name('save-work');
Route::get('/work/view/{id}','WorkController@viewWork')->name('view-work');
Route::get('/work/view/file/{id}/{id1}','WorkController@workFileView')->name('work-file-view');
Route::get('/work/edit/{id}','WorkController@editWork')->name('edit-work');
Route::post('/work/update','WorkController@updateWork')->name('update-work');

Route::get('/work/success/{id}','WorkController@successWork')->name('success-work');
Route::get('/work/payment/{id}','WorkController@sumPaymentWork')->name('sumPayment-work');
Route::get('/work/fullpayment/{id}','WorkController@fullPaymentWork')->name('fullPayment-work');
Route::get('/work/sms-sent/{id}','WorkController@smsSent')->name('smsSent-work');

//Client
Route::get('/client/add','ClientController@clientAdd')->name('add-client');
Route::get('/client/manage-client','ClientController@manageClient')->name('manage-client');
Route::get('/client/delete/{id}','ClientController@delete')->name('delete-client');
Route::get('/client/active/{id}','ClientController@clientActive')->name('active-client');
Route::get('/client/inactive/{id}','ClientController@clientInactive')->name('inactive-client');

//Slider Route
Route::get('/slider/add-slider','SliderController@addSlider')->name('add-slider');
Route::post('/slider/save-slider','SliderController@saveSlider')->name('save-slider');
Route::get('/slider/manage-slider','SliderController@manageSlider')->name('manage-slider');
Route::get('/slider/delete/{id}','SliderController@delete')->name('delete-slider');
Route::get('/slider/edit/{id}','SliderController@edit')->name('edit-slider');
Route::post('/slider/update-slider/{id}','SliderController@updateSlider')->name('update-slider');
Route::get('/slider/active/{id}','SliderController@sliderActive')->name('active-slider');
Route::get('/slider/inactive/{id}','SliderController@sliderInactive')->name('inactive-slider');
Route::get('/slider/sliderStatus/{id}/{s}','SliderController@sliderStatus')->name('sliderStatus');

//Service Route
Route::get('/service/add-service','ServiceController@addService')->name('add-service');
Route::post('/service/save-service','ServiceController@saveService')->name('save-service');
Route::get('/service/manage-service','ServiceController@manageService')->name('manage-service');
Route::get('/service/delete/{id}','ServiceController@delete')->name('delete-service');
Route::get('/service/edit/{id}','ServiceController@edit')->name('edit-service');
Route::post('/service/update-service/{id}','ServiceController@updateService')->name('update-service');
Route::get('/service/active/{id}','ServiceController@serviceActive')->name('active-service');
Route::get('/service/inactive/{id}','ServiceController@serviceInactive')->name('inactive-service');
Route::get('/service/serviceStatus/{id}/{s}','ServiceController@serviceStatus')->name('serviceStatus');

//Sub Service Route
Route::get('/service/add-sub-service','SubServiceController@addSubService')->name('add-sub-service');
Route::post('/service/save-sub-service','SubServiceController@saveSubService')->name('save-sub-service');
Route::get('/service/manage-sub-service','SubServiceController@manageSubService')->name('sub-service');
Route::get('/service/delete-sub/{id}','SubServiceController@delete')->name('delete-sub-service');
Route::get('/service/edit-sub/{id}','SubServiceController@edit')->name('edit-sub-service');
Route::post('/service/update-sub-service/{id}','SubServiceController@updateService')->name('update-sub-service');
Route::get('/sub-service/active/{id}','SubServiceController@subServiceActive')->name('active-sub-service');
Route::get('/sub-service/inactive/{id}','SubServiceController@subServiceInactive')->name('inactive-sub-service');

//Notice Route
Route::get('/notice/add-notice','NoticeController@addNotice')->name('add-notice');
Route::post('/notice/save-notice','NoticeController@saveNotice')->name('save-notice');
Route::get('/notice/manage-notice','NoticeController@manageNotice')->name('manage-notice');
Route::get('/notice/delete/{id}','NoticeController@delete')->name('delete-notice');
Route::get('/notice/edit/{id}','NoticeController@edit')->name('edit-notice');
Route::post('/notice/update-notice','NoticeController@updateNotice')->name('update-notice');
Route::get('/notice/active/{id}','NoticeController@noticeActive')->name('active-notice');
Route::get('/notice/inactive/{id}','NoticeController@noticeInactive')->name('inactive-notice');

//Product Route
Route::get('/admin/add-product','ProductController@addProduct')->name('add-product');
Route::post('/admin/save-product','ProductController@saveProduct')->name('save-product');
Route::get('/admin/manage-product','ProductController@manageProduct')->name('manage-product');
Route::get('/admin/product/delete/{id}','ProductController@delete')->name('delete-product');
Route::get('/admin/product/edit/{id}','ProductController@edit')->name('edit-product');
Route::post('/admin/update-product/{id}','ProductController@updateProduct')->name('update-product');
Route::get('/admin/productStatus/{id}/{s}','ProductController@sliderStatus')->name('productStatus');
Route::get('/admin/product/active/{id}','ProductController@productActive')->name('active-product');
Route::get('/admin/product/inactive/{id}','ProductController@productInactive')->name('inactive-product');

//Brand Route
Route::get('/brand/add-brand','BrandController@addBrand')->name('add-brand');
Route::post('/brand/save-brand','BrandController@saveBrand')->name('save-brand');
Route::get('/brand/manage-brand','BrandController@manageBrand')->name('manage-brand');
Route::get('/brand/delete/{id}','BrandController@delete')->name('delete-brand');
Route::get('/brand/edit/{id}','BrandController@edit')->name('edit-brand');
Route::post('/brand/update-brand','BrandController@updateBrand')->name('update-brand');
Route::get('/brand/brandStatus/{id}/{s}','BrandController@brandStatus')->name('brandStatus');
Route::get('/brand/active/{id}','ClientController@clientActive')->name('active-brand');
Route::get('/brand/inactive/{id}','ClientController@clientInactive')->name('inactive-brand');


});
