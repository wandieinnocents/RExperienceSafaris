<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Transport;

class TransportComposer
{
    /**
     * The tour repository implementation.
     *
     * @var Transport
     */
    protected $transport;

    /**
     * Create a new tour composer.
     *
     * @param  Transport  $transport
     * @return void
     */
    public function __construct(Transport $transport)
    {
        // Dependencies automatically resolved by service container...
        $this->transport = $transport;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('transports', $this->transport::latest()->paginate(12));
    }
}
