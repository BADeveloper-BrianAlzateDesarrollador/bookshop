<?php 

  namespace BrianAlzateBADeveloper\BookShop;

  use Illuminate\Support\ServiceProvider;

  class BookShopProvider extends ServiceProvider
  {
  	protected $defer = false;

  	public function register()
    {
        $this->app->bind(
            'BrianAlzateBADeveloper\BookShop\BookShop',
            'BrianAlzateBADeveloper\BookShop\Services\BookShopServices'
        );

        // $this->app->singleton('flash', function () {
        //     return $this->app->make('Laracasts\Flash\FlashNotifier');
        // });
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadViewsFrom(__DIR__ . '/../../views', 'flash');

        // $this->publishes([
        //     __DIR__ . '/../../views' => base_path('resources/views/vendor/flash')
        // ]);
    }

  }



?>