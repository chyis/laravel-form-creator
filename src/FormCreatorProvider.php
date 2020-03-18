<?php
/**
 * FormBuilder表单生成器
 * Author: JerryLi<dream_imperator@163.com>
 * Github: https://github.com/chyis/form-creator
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
