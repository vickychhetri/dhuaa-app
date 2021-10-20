<?php

namespace App\Http\Controllers;

use App\Models\Useradmins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UseradminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function showLoginScreen()
    {
        return view('Admin.login');
    }

    public function checkLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5'
        ]);
        $user = $request->username;
        $pwd = $request->password;

        $res = DB::table('useradmins')
            ->select('useradmins.*')
            ->where('useradmins.username', '=', $user)
            ->get();

        if ($res->count() < 1) {
            return redirect()->back()->with('message', 'Invalid Username !');
        }

        $hashedPassword = $res[0]->password;
        if (strcmp($pwd, $hashedPassword) == 0) {
            if ($res[0]->approved == "YES") {
                Session()->put('loginId', $res[0]->id);
                Session()->put('username', $res[0]->username);
                Session()->put('firstname', $res[0]->firstname);
                Session()->put('lastname', $res[0]->lastname);
                Session()->put('email', $res[0]->email);
                Session()->put('mobile', $res[0]->mobile);
                Session()->put('gencat', $res[0]->gencat);
                Session()->put('created_at', $res[0]->created_at);
                //everything is ok and now we are moving towards the dashboard 
                return redirect("/dashboard");
            } else {
                Session()->forget('username');
                Session()->forget('password');

                return redirect()->back()->with('message', 'Account Disabled or Inactive !');
            }
            // Check user type and open dashboard as per the type 
        } else {
            Session()->forget('username');
            Session()->forget('password');

            return redirect()->back()->with('message', 'Wrong password');
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Useradmins  $useradmins
     * @return \Illuminate\Http\Response
     */
    public function show(Useradmins $useradmins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Useradmins  $useradmins
     * @return \Illuminate\Http\Response
     */
    public function edit(Useradmins $useradmins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Useradmins  $useradmins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Useradmins $useradmins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Useradmins  $useradmins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Useradmins $useradmins)
    {
        //
    }
}
