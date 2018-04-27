<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer(
          ['includes.navs','includes.sidebar', 'includes.tour-sidebar'], 'App\Http\ViewComposers\TourCategoryComposer'
      );

      view()->composer(
          ['includes.navs', 'includes.sidebar', 'includes.tour-sidebar'], 'App\Http\ViewComposers\TourComposer'
      );

      view()->composer(
          ['pages.accomodation','welcome'], 'App\Http\ViewComposers\AccomodationComposer'
      );

      view()->composer(
          ['pages.transport'], 'App\Http\ViewComposers\TransportComposer'
      );

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
