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
        ->join('companies', 'products.companyId', '=', 'companies.id')
        ->join('productcategories', 'products.categoryId', '=', 'productcategories.id')
        ->join('typeproducts', 'products.productTypeId', '=', 'typeproducts.id')

        ->select('products.*','companies.companyName','typeproducts.typeName','productcategories.category')
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
