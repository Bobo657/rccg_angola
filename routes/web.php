<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/visit', 'visit')->name('visit');
Route::view('/about', 'about')->name('about');
Route::view('/our_beliefs', 'our_beliefs')->name('our_beliefs');
Route::view('/our_history', 'our_history')->name('our_history');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/contact', 'contact')->name('contact');

// Crawler endpoints, built from the current host so they work on any domain.
Route::get('/robots.txt', function () {
    $body = "User-agent: *\nAllow: /\n\nSitemap: ".url('/sitemap.xml')."\n";

    return response($body, 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
});

Route::get('/sitemap.xml', function () {
    $pages = collect(config('church.pages'))->map(fn ($p) => [
        'loc' => route($p['route']),
        'priority' => $p['route'] === 'home' ? '1.0' : ($p['route'] === 'visit' ? '0.9' : '0.7'),
    ]);

    return response()
        ->view('sitemap', ['pages' => $pages])
        ->header('Content-Type', 'application/xml; charset=UTF-8');
});
