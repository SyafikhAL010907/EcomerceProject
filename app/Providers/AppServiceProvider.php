<?php

namespace App\Providers;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerNavigationItems([
            NavigationItem::make('Halaman Utama') // Nama menu
            ->url(route('homeproduk')) // Route yang dituju
            ->icon('heroicon-o-link') // Ikon untuk menu(gunakan heroicon)
            ->sort(100), // Urutan menu di sidebar
            ]);
            });
    }
}