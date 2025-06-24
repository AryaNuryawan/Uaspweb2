<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Responses\LogoutResponse; // PASTIKAN BARIS INI ADA
use Filament\Http\Responses\Auth\Contracts\LogoutResponse as LogoutResponseContract; // PASTIKAN BARIS INI ADA

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // PASTIKAN BARIS INI ADA DI DALAMNYA
        $this->app->bind(LogoutResponseContract::class, LogoutResponse::class);
    }

    public function boot(): void
    {
        //
    }
}
