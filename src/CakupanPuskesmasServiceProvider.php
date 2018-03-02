<?php namespace Bantenprov\CakupanPuskesmas;

use Illuminate\Support\ServiceProvider;
use Bantenprov\CakupanPuskesmas\Console\Commands\CakupanPuskesmasCommand;

/**
 * The CakupanPuskesmasServiceProvider class
 *
 * @package Bantenprov\CakupanPuskesmas
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CakupanPuskesmasServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('cakupan-puskesmas', function ($app) {
            return new CakupanPuskesmas;
        });

        $this->app->singleton('command.cakupan-puskesmas', function ($app) {
            return new CakupanPuskesmasCommand;
        });

        $this->commands('command.cakupan-puskesmas');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'cakupan-puskesmas',
            'command.cakupan-puskesmas',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('cakupan-puskesmas.php');

        $this->mergeConfigFrom($packageConfigPath, 'cakupan-puskesmas');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'cakupan-puskesmas');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/cakupan-puskesmas'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'cakupan-puskesmas');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/cakupan-puskesmas'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => resource_path('assets'),
        ], 'ahh-assets');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
}
