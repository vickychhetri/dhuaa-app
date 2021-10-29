<?php

namespace App\View\Components\Administrator\Page;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
class Listpages extends Component
{
    public $listPages;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->listPages = DB::table('userpages')
        ->join('typepages', 'userpages.typePage', '=', 'typepages.id')
        ->select('userpages.*','typepages.page_category','typepages.page_category_description')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.administrator.page.listpages');
    }
}
