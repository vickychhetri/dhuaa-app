<?php

namespace App\View\Components\Administrator\Product;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Listproduct extends Component
{
    public $listproductbase;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->listproductbase = DB::table('products')
        ->select('products.*')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.administrator.product.listproduct');
    }
}
