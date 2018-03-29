<?php 

  namespace BrianAlzateBADeveloper\BookShop;

  use Illuminate\Support\ServiceProvider;

  class BookShopProvider extends ServiceProvider
  {
  	 /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
  	protected $defer = false;

 	 /**
     * Register the service provider.
     *
     * @return void
     */
  	public function register()
    {
        $this->app->bind(
            'BrianAlzateBADeveloper\BookShop\BookShop',
            'BrianAlzateBADeveloper\BookShop\Services\BookShopServices'
        );
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        
    }

  }



?>