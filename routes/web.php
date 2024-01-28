<?php

use Illuminate\Support\Facades\Route;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::view('/', 'home.index');
Route::view('/kenapa-kami', 'home.why');
Route::view('/produk-layanan', 'home.product');
Route::view('/perusahaan', 'home.company');
Route::view('/berita', 'home.news');
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
