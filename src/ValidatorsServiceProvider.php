<?php namespace Carve\Validators;

use Illuminate\Support\ServiceProvider;

class ValidatorsServiceProvider extends ServiceProvider {

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
		$this->package('carve/validators');
		$this->app['validator']->extend('postcode', 'Carve\Validators\Address@postcode');
		$this->app['validator']->extend('sortcode', 'Carve\Validators\Bank@sortCode');
		$this->app['validator']->extend('bankaccountnumber', 'Carve\Validators\Bank@accountNumber');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
