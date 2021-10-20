<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Useradmins;

class Agentsessionhandler extends Controller
{
    public function getSessionId()
    {
        if (session()->has('loginId')) {
            $loginid = session()->get('loginId');
            $res = Useradmins::find($loginid);
            if ($res->approved == "YES") {
                return $loginid;
            }
        }
        return -1;
    }
   
}
