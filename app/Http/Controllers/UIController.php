<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\ImageModel;
use App\Models\PackageModel;
use App\Models\ProfileModel;
use App\Models\CountryModel;
use App\Models\MembershipPlanModel;
use App\Models\MembershipModel;
use Carbon\Carbon;

class UIController extends EmailController
{
    public function index()
    {
        $countries = CountryModel::all();
        return view('index',compact('countries'));
    }
    public function for_guide()
    {
        return view('for_guide');
    }
    public function articles()
    {
        return view('articles');
    }
    public function faq()
    {
        return view('faq');
    }
    public function about_us()
    {
        return view('about-us');
    }
    public function share_experience()
    {
        return view('share-experience');
    }


    public function service_provider()
    {
        return view('service_provider');
    }
    public function search_country(Request $request)
    {
        if($request->ajax())
        {    
            if($request->search != null)
            {
                $part = CountryModel::where('name','LIKE','%'.$request->search.'%')
                // ->orWhere('title','LIKE','%'.$request->search.'%')
                ->get();

                $output = '<table class="table table-striped">
                                    <tbody>';
                if (count($part) > 0)
                {
                    foreach($part as $value)
                    {
                        $route = route('UI_country_specific_packages',[$value->id]);
                        $output .= 
                            '<tr><a href="'.$route.'">
                                ' . $value->name . '
                            </a></tr>';
                    }       
                } else {
                    $output .= '<tr><a href="javascript:void(0)">No Result Found. Please search a correct name.</a></tr>';   
                }
                $output .= '</tbody>
                        </table>';
                return $output; 
            } else {
                return $output = '';   
            }
        }
    }


    public function vacationer()
    {
        $countries = CountryModel::all();
        return view('vacationer', compact('countries'));
    }
    public function plan_journey()
    {
        return view('contact_us');
    }
    public function build_package()
    {
        $countries = CountryModel::all();
        return view('build_your_package', compact('countries'));
    }
    public function contact_us(Request $req)
    {
        $this->contactUs($req->subject, $req->username, $req->email, $req->comment);
        return back()->with('success','Response submitted Successfully');
    }
    


    public function sign_up()
    {
        $countries = CountryModel::all();
        return view('sign_up', compact('countries'));
    }
    public function create_account(Request $req)
    {
        $this->validate($req, [
            'username' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required'],
            'user_role' => ['required'],
            'country_id' => ['required'],
        ]);
        $user = new User();
        $user->username = $req->username;
        $user->email = $req->email;
        if($req->password){
            $user->password = Hash::make($req->password);
        }
        $user->user_role = $req->user_role;
        $user->save();

        $profile = new ProfileModel();
        $profile->user_id = $user->id;
        $profile->full_name = $user->username;
        $profile->country_id = $req->country_id;
        $profile->phone = $req->phone;
        // $profile->country = $req->country;
        $profile->save();

        //to shoot an email
        $this->verifyEmail($user->id);

        return back()->with('success','Account created successfully!');
    }

    public function login()
    {
        if(!Auth::check())
        {
            return view('login');
        } else {
            $countries = CountryModel::all();
            return view('index',compact('countries'));
        }
    }
    public function loggedin(Request $req)
    {
        $this->validate($req, [
            'email' => ['required'],
            'password' => ['required'],
        ]);
        
        if(!empty($req->email) && !empty($req->password)){
            $userfind = User::where('email', $req->email)->where('status', 1)->first();
            if($userfind){
                /*means found user*/
                if(Hash::check($req->password, $userfind->password)){
                    /*matched password*/
                    Auth::login($userfind);
                    if(Auth::check()){
                        // dd($userfind->user_role == 1); //means if user is a guider
                        if($userfind->user_role == 1) //means if user is a guider
                        {
                            if($userfind->profile_status == 0)
                            {
                                return redirect()->route('Guider_membership_plan');
                            } else {
                                Auth::logout();
                                return back()->with('error', 'Your profile is locked. Contact owner to unlock it');
                            }
                        } else if($userfind->user_role == 0)
                        {
                            return back()->with('success', 'Logged in successfully');
                            // return redirect()->route('UI_index');
                        }
                        // return redirect(route('UI_index'));
                        return redirect()->back();
                    }else{
                        return redirect(route('UI_login'));
                    }
                    /*matched password end*/
                }else{
                    return redirect(route('UI_login'))->with('error','Password is incorrect')->with('email', $req->email);
                }
                /*means found user end*/
            }else{
                return back()->with('error','Email not found or You didn\'t confirm your email yet');
            }
        }else{
            return redirect(route('UI_login'))->with('warning','Please fill required fields');
        }
    }

    //execute from user email
    public function user_verified($id)
    {
        $user = User::find($id);
        $user->status = 1;
        $user->save();

        return redirect(route('UI_login'))->with('success', 'Email authorized! You can login now.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('UI_index'));
    }




    public function personal_concierge_service()
    {
        return view('personal_concierge_service');
    }
    public function personal_concierge_service2()
    {
        return view('personal_concierge_service2');
    }
}
