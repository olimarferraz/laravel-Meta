<?php

namespace OlimarFerraz\LaravelMeta;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MetaServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = TRUE;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('meta.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('meta', function () {
            return new Meta(config('meta'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['meta'];
    }

    /**
     * Register Blade directives
     */
    protected function directives()
    {
        Blade::directive('metas', function ($args) {
            return "<?php echo Meta::tags($args)?>";
        });

        Blade::directive('meta', function ($args) {
            return "<?php echo Meta::tag($args)?>";
        });
    }
}
