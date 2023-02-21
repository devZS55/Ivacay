<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminGuiderController extends Controller
{
    public function guider(){
        $guiders = User::where('user_role',1)->with('getMemberships')->get();
        // dd($guiders[0]->getMemberships[0]->title);
        return view('admin.guiders.guider-list',compact('guiders'));
    }
    public function guides_profile_state_edit(User $guides)
    {
        if($guides->profile_status == 0)
        {
            $guides->profile_status = 1;
        } else {
            $guides->profile_status = 0;
        }
        $guides->save();
        
        return redirect()->route('admin_guiders');
    }
}
