<?php

namespace App\View\Components\Administrator\Product\Catalog;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Listoptionsize extends Component
{
    public $listmodeloptionsize;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->listmodeloptionsize = DB::table('productoptionsizes')
        ->join('productmodeloptions', 'productoptionsizes.optionMId', '=', 'productmodeloptions.id')
        ->join('productbrandmodels', 'productmodeloptions.modelId', '=', 'productbrandmodels.id')
        ->join('productbrands', 'productbrandmodels.brandId', '=', 'productbrands.id')
        ->join('productyears', 'productbrands.yearId', '=', 'productyears.id')
        ->select('productoptionsizes.*','productmodeloptions.optionM','productbrandmodels.model','productbrands.brand','productyears.year')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.administrator.product.catalog.listoptionsize');
    }
}
