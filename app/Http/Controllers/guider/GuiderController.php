<?php

namespace App\Http\Controllers\guider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\JobModel;
use App\Models\JobAppliedModel;
use App\Models\User;
use App\Models\ImageModel;
use App\Models\PackageModel;
use App\Models\ProfileModel;
use App\Models\CountryModel;
use App\Models\MembershipPlanModel;
use App\Models\MembershipModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\JourneysModel;


class GuiderController extends Controller
{
    // index page in now job portal 
    public function index()
    {
        $job = JobModel::get();
        return view('guider.index',compact('job'));
    }
    public function orders_list()
    {
        $orders = JourneysModel::where('guide_id', auth()->user()->id)->get();
        return view('guider.orders_list',compact('orders'));
    }
    public function job_applied($job)
    {
        $pre_applied_job = JobAppliedModel::where('user_id', auth()->user()->id)->where('status', 0)->first();
        if($pre_applied_job)
        {
            return back()->with('error', 'You can\'t apply! Your previous applied job is not done yet');
        } else {
            $job_for_apply = JobModel::find($job);
            $guider = User::find(auth()->user()->id);
    
            $applied_job = new JobAppliedModel();
            $applied_job->user_id = $guider->id;
            $applied_job->job_id = $job_for_apply->id;
            // status = 0  -->  pending
            $applied_job->status = 0;
            $applied_job->save();
        }

        return redirect(route('Guider_index'))->with('success', 'Successfully applied');
    }
    // public function job_portal()
    // {
    //     return view('guider.job_portal');
    // }


    public function guider_profile()
    {
        if(Auth::check())
        {
            $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
            if($member)
            {
                $pkg_expiry = $member->created_at->addDay($member->duration);
                $now = Carbon::now();
                if($pkg_expiry > $now)
                {
//==============================================================================================================================
                    $countries = CountryModel::all();
                    $profile = ProfileModel::where('user_id', auth()->user()->id)->first();
                    // $profile = ProfileModel::where('user_id', 2)->first();
                    return view('guider.guider_profile', compact('countries', 'profile'));
//==============================================================================================================================
                }
                $plans = MembershipPlanModel::where('plan_type', null)->get();
                return view('guider.membership_plans', compact('plans'))->with('error', 'Your membership expires! Please buy according to your need');
            }
            return redirect(route('UI_login'));
        }

    }


    public function update_guider_profile(Request $req)
    {
        // dd($req, $profile);
        $profile = ProfileModel::where('user_id', auth()->user()->id)->first();
        if(!$profile)
        {
            $profile = new ProfileModel();
        }
        $profile->user_id = auth()->user()->id;
        $profile->full_name = $req->full_name;
        $profile->phone = $req->phone;
        $profile->address = $req->address;
        $profile->zip_code = $req->zip_code;
        $profile->country_id = $req->country_id;
        $profile->country = $req->country;
        $profile->account_title = $req->account_title;
        $profile->account_number = $req->account_number;
        $profile->save();

        return back()->with('success', 'Profile updated');
    }


    public function stripe_form(MembershipPlanModel $membership)
    {
        $plan_id = $membership->id;
        $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        $free_plan = MembershipPlanModel::where('title', 'Free')->first();
        if($membership->id != $free_plan->id)
        {
            if($member)
            {
                $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->get();
                if($membership->no_of_packages >= count($user_packages))
                {
                    return view('guider.stripe_payment', compact('plan_id'));
                } else {
                    return view('guider.stripe_payment', compact('plan_id'))->with('warning', 'We\'ll Inactive your exceeding packages after payment');
                }
            } else {
                return view('guider.stripe_payment', compact('plan_id'));
            }
        }else {
            $member_free = MembershipModel::where('user_id', auth()->user()->id)->where('membership_id', $free_plan->id)->first();
            if($member_free)
            {
                return back()->with('error', 'Your free package expires. Please buy our plan to proceed');
            }
            $membership_obj = new MembershipModel();
            $membership_obj->user_id = auth()->user()->id;
            $membership_obj->membership_id = $membership->id;
            // $membership_obj->payment_id = 1;
            $membership_obj->no_of_packages = $membership->no_of_packages;
            $membership_obj->duration = $membership->duration;
            $membership_obj->save();
            return redirect()->route('Guider_index');
        }
        return back()->with('warning', 'Something went wrong');
    }

    
    public function event_stripe(Request $req)
    {
        $plan = MembershipPlanModel::find($req->plan_id);

        // CHECKING CURRENT MEMBERSHIP REQUEST WITH THE PREVIOUS SUBSCRIPTION
        $member = MembershipModel::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        if($member)
        {
            $user_packages = PackageModel::where('user_id', auth()->user()->id)->where('status', 0)->orderBy('id', 'DESC')->get();
            if($plan->no_of_packages < count($user_packages))
            {
                $a = 0;
                foreach($user_packages as $user_package)
                {
                    if($a < $plan->no_of_packages)
                    {
                        $user_package->status = 0;
                    } else {
                        $user_package->status = 1;
                    }
                    $user_package->save();
                    $a++;
                }
                // for($a = $plan->no_of_packages; $a <= count($user_packages); $a++)
                // {
                    // $user_packages[a]->status = 1;
                    // $user_packages[a]->save();
                // }
                return view('guider.stripe_payment', compact('plan_id'));
            }
        }
        // CHECKING CURRENT MEMBERSHIP REQUEST WITH THE PREVIOUS SUBSCRIPTION

        $invoice = rand(1999999999999999, 9999999999999999);
        $user = Auth::user();
        $desc = $plan->title;
        $price = $plan->price;
        $response = $this->stripe_payment($user->email, $req->stripeToken, $price, $desc);

        if ($response['status'] == 'succeeded') 
        {
            //condition store database Order 
            $membership_obj = new MembershipModel();
            $membership_obj->user_id = auth()->user()->id;
            $membership_obj->membership_id = $plan->id;
            $membership_obj->payment_id = $response['id'];
            $membership_obj->receipt_url = $response['receipt_url'];
            $membership_obj->no_of_packages = $plan->no_of_packages;
            $membership_obj->duration = $plan->duration;
            $membership_obj->title = $plan->title;
            $membership_obj->price = $plan->price;
            $membership_obj->save();
        } else {
            return back()->with('error', 'Check your inputs and try again');
        }
        return redirect(route('Guider_packages'))->with('success', 'Thank you for purchasing...');
    }
}


