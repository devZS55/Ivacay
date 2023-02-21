<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembershipModel;
use App\Models\PackageRequestsModel;

class AdminMembershipController extends Controller
{
    public function membership()
    {
        $memberships = MembershipModel::orderBy('id', 'DESC')->get();
        // dd($guiders[0]->getMemberships[0]->title);
        return view('admin.memberships.memberships-list',compact('memberships'));
    }

    function membership_edit($id)
    {
        $memberships = MembershipModel::where('id',$id)->first();
        return view('admin.memberships.memberships-edit',compact('memberships'));
    }
    function membership_add_edit_data(Request $request,MembershipModel $membership)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'no_of_packages' => 'required',
            'duration' => 'required',
        ]);

        $create = 1;
        (isset($membership->id) and $membership->id>0)?$create=0:$create=1;
        
        $membership->title = $request->title;
        $membership->price = $request->price;
        $membership->no_of_packages = $request->no_of_packages;
        $membership->duration = $request->duration;
        $membership->save();
        if($create == 0)
        {
            return back()->with('update','Updated Successfully');
        }
        else
        {
            return back()->with('success','Added Successfully');
        }
    }







    public function package_requests(){
        $package_requests = PackageRequestsModel::all();
        // dd($guiders[0]->getMemberships[0]->title);
        return view('admin.package-requests.package-requests-list',compact('package_requests'));
    }
}
