<?php

namespace App\View\Components\Administrator\Product;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Listcategory extends Component
{
    public $listCategory;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->listCategory = DB::table('productcategories')
        ->select('productcategories.*')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.administrator.product.listcategory');
    }
}
