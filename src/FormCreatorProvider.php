<?php
/**
 * FormBuilder表单生成器
 * Author: xaboy
 * Github: https://github.com/xaboy/form-builder
 */

namespace Chyis\LaravelFormCreator;

use Illuminate\Support\ServiceProvider;

class FormCreatorProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . '/views', 'form-creator');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/form-creator')
        ], 'resources');
        $this->publishes([
            __DIR__ . '/assets/form-create' => public_path('vendor/form-create')
        ], 'assets');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'LaravelFormCreator\Form'
        );
    }
}
