<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userpage;

class Handleblog extends Controller
{
    public function showbloglist(){
        $blogs=Userpage::where('typePage','1')->paginate(10);
        return view('blogList')
        ->with('Blogs',$blogs);
    }
    
    public function showservicelist(){
        $services=Userpage::where('typePage','2')->paginate(10);
        return view('serviceList')
        ->with('Services',$services);
    }

}
