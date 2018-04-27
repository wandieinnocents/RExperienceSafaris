<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;

class TourCategoryComposer
{
    /**
     * The category model implementation.
     *
     * @var Category
     */
    protected $categories;

    /**
     * Create a new tour category composer.
     *
     * @param  Category  $categories
     * @return void
     */
    public function __construct(Category $categories)
    {
        // Dependencies automatically resolved by service container...
        $this->categories = $categories;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categories::all());
    }
}
