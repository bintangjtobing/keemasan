<?php

use Illuminate\Support\Facades\Route;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Http;

Route::view('/', 'home.index');
Route::view('/kenapa-kami', 'home.why')->name('kenapaKami');
Route::view('/produk-layanan', 'home.product')->name('produk');
Route::view('/perusahaan', 'home.company')->name('perusahaan');
Route::view('/berita', 'home.news')->name('berita');
Route::view('/hubungi-kami', 'home.contact');
Route::view('/faqs', 'home.faqs');

// Route dengan parameter
Route::get('/reff', function () {
    return view('home.ref');
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
Route::get('/proxy-fetch', function () {
    $response = Http::get('https://www.keemasan.co.id/fetch.php');

    // Forward the headers you need, ensure to not forward sensitive headers
    return response($response->body())
        ->header('Content-Type', $response->header('Content-Type'));
});
