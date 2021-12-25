<?php

namespace App\View\Components\Administrator\Product\Catalog;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Listbrand extends Component
{
    public $listbrands;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->listbrands = DB::table('productbrands')
        ->join('productyears', 'productbrands.yearId', '=', 'productyears.id')
        ->select('productbrands.*','productyears.*')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.administrator.product.catalog.listbrand');
    }
}
