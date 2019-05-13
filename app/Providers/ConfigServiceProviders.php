<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        config([
            'laravellocalization.supportedLocales' => [
                'kk'  => array( 'name' => 'Қазақша', 'script' => 'Cyrl', 'native' => 'kk' ),
                'ru'  => array( 'name' => 'Русский', 'script' => 'Cyrl', 'native' => 'ru' ),
            ],
        
            'laravellocalization.useAcceptLanguageHeader' => true,
        
            'laravellocalization.hideDefaultLocaleInURL' => false
        ]);
    }
}