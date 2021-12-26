<?php

namespace App\View\Components\Administrator\Product\Catalog;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Listmodeloption extends Component
{
    public $listmodeloptions;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->listmodeloptions = DB::table('productmodeloptions')
        ->join('productbrandmodels', 'productmodeloptions.modelId', '=', 'productbrandmodels.id')
        ->join('productbrands', 'productbrandmodels.brandId', '=', 'productbrands.id')
        ->join('productyears', 'productbrands.yearId', '=', 'productyears.id')
        ->select('productmodeloptions.*','productbrandmodels.model','productbrands.brand','productyears.year')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.administrator.product.catalog.listmodeloption');
    }
}
