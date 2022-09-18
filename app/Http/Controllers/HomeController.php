<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\role_menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userRoleId= (int) Auth::user()["role"];
        Session::put('roleId',$userRoleId);
        Session::put('loggedInUserId',Auth::user()["id"]);
         $loggedInUserMenus=role_menu::Where('role_id',$userRoleId)->pluck('menu_id')->toArray();           
       // dd($loggedInUserMenus);
       


        return view('master',['menus'=>menu::whereIn('id',$loggedInUserMenus)->get()]);
    }

public function dashboard(){
    return "";
}

}
