<?php

namespace App\Http\Controllers\guider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ImageModel;
use App\Models\PackageModel;
use App\Models\ProfileModel;
use App\Models\CountryModel;
use App\Models\MembershipPlanModel;
use App\Models\MembershipModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class GuiderMembershipController extends Controller
{
    // -------------------------------------------------------------------------------------- Membership Plans ----------------------------
    public function membership_plan()
    {
        if (Auth::check()) {
            $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
            if ($member) {
                $pkg_expiry = $member->created_at->addDay($member->duration);
                $now = Carbon::now();
                if ($pkg_expiry > $now) {
                    // ========  ==================================================================================================================================================================================================================================                }

                    return redirect()->route('Guider_index');
                    // ========  ==================================================================================================================================================================================================================================                }

                }
            }
            $plans = MembershipPlanModel::where('plan_type', null)->get();
            $current_plan = 0;
            return view('guider.membership_plans', compact('plans', 'current_plan'));
        }
        return redirect(route('UI_login'));
    }



    public function alternate_membership_plan()
    {
        if (Auth::check()) {
            $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
            //             if($member)
            //             {
            //                 $pkg_expiry = $member->created_at->addDay($member->duration);
            //                 $now = Carbon::now();
            //                 if($pkg_expiry > $now)
            //                 {
            // // ========  ==================================================================================================================================================================================================================================                }
            //                     return redirect()->route('Guider_index');


            // // ========  ==================================================================================================================================================================================================================================                }

            //                 }
            //             }
            $current_plan = 0;
            $plans = MembershipPlanModel::where('plan_type', '!=', null)->get();
            if ($member) {
                $current_plan = $member->id;
            }
            return view('guider.alternate_membership_plans', compact('plans', 'current_plan'));
        }
        return redirect(route('UI_login'));
    }


    public function membership_subscription(MembershipPlanModel $membership)
    {
        // if(Auth::check())
        // {
        //     $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        //     if($member)
        //     {
        //         $pkg_expiry = $member->created_at->addDay($member->duration);
        //         $now = Carbon::now();
        //         if($pkg_expiry > $now)
        //         {
        // ========  ==================================================================================================================================================================================================================================                }

        $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        $free_plan = MembershipPlanModel::where('title', 'Free')->first();
        if ($membership->id != $free_plan->id) {
            if ($member) {
                $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->get();
                if ($membership->no_of_packages >= count($user_packages)) {
                    $membership_obj = new MembershipModel();
                    $membership_obj->user_id = auth()->user()->id;
                    $membership_obj->membership_id = $membership->id;
                    $membership_obj->payment_id = 1;
                    $membership_obj->no_of_packages = $membership->no_of_packages;
                    $membership_obj->duration = $membership->duration;
                    $membership_obj->save();
                    return redirect()->route('Guider_index');
                } else {
                    return back()->with('warning', 'We\'ll Inactive your exceeding packages after payment');
                }
            } else {

                $membership_obj = new MembershipModel();
                $membership_obj->user_id = auth()->user()->id;
                $membership_obj->membership_id = $membership->id;
                $membership_obj->payment_id = 1;
                $membership_obj->no_of_packages = $membership->no_of_packages;
                $membership_obj->duration = $membership->duration;
                $membership_obj->save();
                return redirect()->route('Guider_index');
            }
        } else {
            $member_free = MembershipModel::where('user_id', auth()->user()->id)->where('membership_id', $free_plan->id)->first();
            if ($member_free) {
                return back()->with('error', 'Your free package expires. Please buy our plan to proceed');
            }

            $membership_obj = new MembershipModel();
            $membership_obj->user_id = auth()->user()->id;
            $membership_obj->membership_id = $membership->id;
            $membership_obj->payment_id = 1;
            $membership_obj->no_of_packages = $membership->no_of_packages;
            $membership_obj->duration = $membership->duration;
            $membership_obj->save();
            return redirect()->route('Guider_index');
        }
        // ========  ==================================================================================================================================================================================================================================                }

        //         }
        //     }
        //     $plans = MembershipPlanModel::where('plan_type', null)->get();
        //     return view('guider.membership_plans', compact('plans'));
        // }
        // return redirect(route('UI_login'));
    }





    public function upgrade_membership_plan()
    {
        if (Auth::check()) {
            $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();

            $current_plan = 0;
            if ($member) {
                $current_plan = $member->id;
            }
            $plans = MembershipPlanModel::where('plan_type', null)->get();
            return view('guider.membership_plans', compact('plans', 'current_plan'));
        }
        return redirect(route('UI_login'));
    }
}