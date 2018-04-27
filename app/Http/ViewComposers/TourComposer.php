<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Article;

class TourComposer
{
    /**
     * The tour repository implementation.
     *
     * @var Article
     */
    protected $tours;

    /**
     * Create a new tour composer.
     *
     * @param  Article  $tours
     * @return void
     */
    public function __construct(Article $tours)
    {
        // Dependencies automatically resolved by service container...
        $this->tours = $tours;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('tourz', $this->tours::latest()->take(4)->get());
    }
}
