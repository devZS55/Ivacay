<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MembershipModel;
use App\Models\MembershipPlanModel;
use App\Models\PackageRequestsModel;

class AdminMembershipPlansController extends Controller
{
    public function membership_plan(){
        $memberships_plans = MembershipPlanModel::all();
        // dd($guiders[0]->getMemberships[0]->title);
        return view('admin.memberships-plan.memberships-plans-list',compact('memberships_plans'));
    }

    function membership_plan_edit($id)
    {
        $memberships_plan = MembershipPlanModel::where('id',$id)->first();
        return view('admin.memberships-plan.memberships-plans-edit',compact('memberships_plan'));
    }
    public function membership_plan_add_edit_data(Request $request,MembershipPlanModel $membership_plan)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'no_of_packages' => 'required',
            'duration' => 'required',
        ]);

        $create = 1;
        (isset($membership_plan->id) and $membership_plan->id>0)?$create=0:$create=1;
        
        $membership_plan->title = $request->title;
        $membership_plan->price = $request->price;
        $membership_plan->no_of_packages = $request->no_of_packages;
        $membership_plan->duration = $request->duration;
        $membership_plan->save();
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
