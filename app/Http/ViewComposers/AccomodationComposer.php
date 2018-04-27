<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Accomodation;

class AccomodationComposer
{
    /**
     * The tour repository implementation.
     *
     * @var Accomodation
     */
    protected $accomodation;

    /**
     * Create a new tour composer.
     *
     * @param  Accomodation  $accomodation
     * @return void
     */
    public function __construct(Accomodation $accomodation)
    {
        // Dependencies automatically resolved by service container...
        $this->accomodation = $accomodation;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('accomodations', $this->accomodation::latest()->paginate(12));
    }
}
