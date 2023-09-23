<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\front;

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
    return view('front.index');
});
Route::get('/sell-phone', function () {
    return view('front.sell_phone');
});

Route::get('/sell-phone/smart-phone', function () {
    return view('front.smart_phone');
});

Route::get('/panel', function () {
    return view('panel.index');
});
Route::get('/user-login', [front::class, 'user_login']);
Route::post('/phone/price', [front::class, 'phone_price']);

Route::get('/panel/about', [admin::class, 'about']);
Route::get('/panel/products', [admin::class, 'products']);

Route::get('/panel/services', [admin::class, 'services']);



Route::get('/panel/ayurveda-courses', function () {
    return view('panel.ayurveda_courses');
});

Route::get('/panel/contact-us', function () {
    return view('panel.contacts');
});

Route::get('/panel/add-about', [admin::class, 'add_about']);
Route::get('/panel/about_list', [admin::class, 'about_list']);
Route::post('/panel/about_add', [admin::class, 'insert_about']);
Route::get('/panel/about/edit/{id}', [admin::class, 'edit_about']);
Route::post('/panel/about/update/{id}', [admin::class, 'update_about']);
Route::get('/panel/about/delete/{id}', [admin::class, 'delete_about']);

Route::get('/panel/add_product', [admin::class, 'add_product']);
Route::get('/panel/product_list', [admin::class, 'product_list']);
Route::post('/panel/product_add', [admin::class, 'insert_product']);
Route::get('/panel/product/edit/{id}', [admin::class, 'edit_product']);
Route::post('/panel/product/update/{id}', [admin::class, 'update_product']);
Route::get('/panel/product/delete/{id}', [admin::class, 'delete_product']);

Route::get('/panel/add_course', [admin::class, 'add_course']);
Route::get('/panel/course_list', [admin::class, 'course_list']);
Route::post('/panel/course_add', [admin::class, 'insert_course']);
Route::get('/panel/course/edit/{id}', [admin::class, 'edit_course']);
Route::post('/panel/course/update/{id}', [admin::class, 'update_course']);
Route::get('/panel/course/delete/{id}', [admin::class, 'delete_course']);

Route::get('/panel/add_news', [admin::class, 'add_news']);
Route::get('/panel/news_list', [admin::class, 'news_list']);
Route::post('/panel/news_add', [admin::class, 'insert_news']);
Route::get('/panel/news/edit/{id}', [admin::class, 'edit_news']);
Route::post('/panel/news/update/{id}', [admin::class, 'update_news']);
Route::get('/panel/news/delete/{id}', [admin::class, 'delete_news']);

Route::get('/panel/add_event', [admin::class, 'add_event']);
Route::get('/panel/event_list', [admin::class, 'event_list']);
Route::post('/panel/event_add', [admin::class, 'insert_event']);
Route::get('/panel/event/edit/{id}', [admin::class, 'edit_event']);
Route::post('/panel/event/update/{id}', [admin::class, 'update_event']);
Route::get('/panel/event/delete/{id}', [admin::class, 'delete_event']);


Route::get('/panel/contact_list', [admin::class, 'contact_list']);
Route::get('/panel/products/add-product-gallery', [admin::class, 'add_product_gallery']);
Route::get('/panel/products/add-glossary-herb', [admin::class, 'add_glossary_herb']);


//------------------ News Events --------------------//

Route::get('/panel/news-and-events', [admin::class, 'news_events']);
Route::get('/panel/news-and-events/add-herighliths', [admin::class, 'add_herighliths']);
Route::get('/panel/news-and-events/add-event', [admin::class, 'add_event']);
