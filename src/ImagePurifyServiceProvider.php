<?php


namespace Despark\Laravel\ImagePurify;


use Despark\ImagePurify\ImagePurifierFactory;
use Despark\ImagePurify\Interfaces\ImagePurifierInterface;
use Illuminate\Support\ServiceProvider;

class ImagePurifyServiceProvider extends ServiceProvider
{

    protected $defer = true;

    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/image-purify.php', 'image-purify');

        $this->publishes([
            __DIR__.'/../config/image-purify.php' => config_path('image-purify.php'),
        ], 'config');
    }

    public function register()
    {
        $this->app->singleton(ImagePurifierInterface::class, function ($app) {
            $options = $app['config']['image-purify'];
            $logger = $app['log'];

            $factory = new ImagePurifierFactory($options, $logger);

            return $factory->create();
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [ImagePurifierInterface::class];
    }

}