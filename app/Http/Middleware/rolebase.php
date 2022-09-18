<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\role_menu;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
class rolebase
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

       // dd($request->route());
       $Uri=  str_replace("/","",$request->getRequestUri());
      
        //dd(Auth::user());
       
        $userRoleId=(int) Session::get('roleId');
      
       $loggedInUserMenus=role_menu::Where('role_id',$userRoleId)->pluck('menu_id')->toArray();  
        $AllowedMenu= menu::whereIn('id',$loggedInUserMenus)->pluck('route')->toArray();  


        if(in_array($Uri,$AllowedMenu)){

            return $next($request);
        }else{
            abort(404);
        }
    }
}
