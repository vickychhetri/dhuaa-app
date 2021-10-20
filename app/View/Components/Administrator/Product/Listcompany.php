<?php

namespace App\View\Components\Administrator\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Listcompany extends Component
{
    public $listCompany;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->listCompany = DB::table('companies')
        ->select('companies.*')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.administrator.product.listcompany');
    }
}
