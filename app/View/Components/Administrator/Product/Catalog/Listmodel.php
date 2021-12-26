<?php

namespace App\View\Components\Administrator\Product\Catalog;
use Illuminate\Support\Facades\DB;

use Illuminate\View\Component;

class Listmodel extends Component
{
    public $listmodels;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->listmodels = DB::table('productbrandmodels')
        ->join('productbrands', 'productbrandmodels.brandId', '=', 'productbrands.id')
        ->select('productbrandmodels.*','productbrands.*')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.administrator.product.catalog.listmodel');
    }
}
