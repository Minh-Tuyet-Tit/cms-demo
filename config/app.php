<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [



    'name' => env('APP_NAME', 'CMS-MANAGER'),



    'env' => env('APP_ENV', 'production'),



    'debug' => (bool) env('APP_DEBUG', false),



    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),



    'timezone' => 'UTC',


    'locale' => 'vi',





    'fallback_locale' => 'en',



    'faker_locale' => 'en_US',



    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    'maintenance' => [
        'driver' => 'file',
    ],


    'providers' => ServiceProvider::defaultProviders()->merge([

        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        Laravel\Socialite\SocialiteServiceProvider::class,
        //    App\Providers\TranslationServiceProvider::class,
    ])->toArray(),


    'aliases' => Facade::defaultAliases()->merge([
        'Translator' => Illuminate\Support\Facades\Translator::class,
        'Socialite' => Laravel\Socialite\Facades\Socialite::class,
    ])->toArray(),



];
