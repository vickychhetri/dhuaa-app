<?php

namespace App\View\Components\Administrator\Product;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Listtypeproduct extends Component
{
    public $listValidProdcutType;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->listValidProdcutType = DB::table('typeproducts')
        ->select('typeproducts.*')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.administrator.product.listtypeproduct');
    }
}
