<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;


class Header extends Component
{
    public $services;
    public $blogs;
    public $resources;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->blogs = DB::table('userpages')
        ->select('userpages.*')
        ->where('typePage','1')
        ->limit(6)
        ->get();
        
        $this->services = DB::table('userpages')
        ->select('userpages.*')
        ->where('typePage','2')
        ->limit(6)
        ->get();

        $this->resources = DB::table('userpages')
        ->select('userpages.*')
        ->where('typePage','3')
        ->limit(6)
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
