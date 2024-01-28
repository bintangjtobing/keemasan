<?php

use Illuminate\Support\Facades\Route;

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
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/', function () {
    return view('home.index');
});
Route::get('/kenapa-kami', function () {
    return view('home.why');
});
Route::get('/produk-layanan', function () {
    return view('home.product');
});
Route::get('/perusahaan', function () {
    return view('home.company');
});
Route::get('/berita', function () {
    return view('home.news');
});
Route::get('/hubungi-kami', function () {
    return view('home.contact');
});
Route::get('/sitemap', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/kenapa-kami'))
        ->add(Url::create('/produk-layanan'))
        ->add(Url::create('/perusahaan'))
        ->add(Url::create('/berita'))
        ->add(Url::create('/hubungi-kami'));
    $sitemap->writeToFile(public_path('sitemap.xml'));
});
