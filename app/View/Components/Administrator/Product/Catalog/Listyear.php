<?php

namespace App\View\Components\Administrator\Product\Catalog;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Listyear extends Component
{
    public $listCatlogYears;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->listCatlogYears = DB::table('productyears')
        ->select('productyears.*')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.administrator.product.catalog.listyear');
    }
}
