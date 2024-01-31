<?php

use App\Models\Member;
use App\Models\PohonEmas;
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
    $member = Member::where('mb_status', '1')->inRandomOrder()->first();

    $nama_pendek = implode(" ", array_slice(explode(" ", strip_tags($member->mb_nama)), 0, 2));

    $inv = PohonEmas::where('MID', $member->MID)->sum('gram');

    $output = '';

    if ($inv > 0) {
        $output .= view('partials.notifications', ['nama_pendek' => $nama_pendek, 'inv' => $inv, 'action' => 'belanja'])->render();
    } else {
        $output .= view('partials.notifications', ['nama_pendek' => $nama_pendek, 'action' => 'bergabung'])->render();
    }

    return response($output);
});
