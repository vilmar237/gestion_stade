<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Enums\UserRoles;
use App\Models\User;

class PublicController extends Controller
{
    public function __construct()
    {
 
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome()
    {
        $logged     = Auth::check();
        $admins     = ($logged && in_array(Auth::user()->role, [UserRoles::ADMIN, UserRoles::SUPER_ADMIN]));
        
        return view('frontend.index', compact('admins'));
    }
}
