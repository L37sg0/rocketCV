<?php

use App\Helper\Config;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $config = new Config();
    $websiteName    = $config->getWebsiteName();
    $websiteTitle   =  $config->getWebsiteTitle();
    return view($config->getActiveTheme() . '.welcome', compact('websiteName', 'websiteTitle'));
});
Route::resource('cvs', FrontController::class);
