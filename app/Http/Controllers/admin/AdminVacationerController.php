<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminVacationerController extends Controller
{
    public function vacationer(){
        $vacationers = User::where('user_role',0)->get();
        return view('admin.vacationers.vacationer-list',compact('vacationers'));
    }
}
