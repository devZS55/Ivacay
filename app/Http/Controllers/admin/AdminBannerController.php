<?php

namespace App\Http\Controllers\admin;

use App\Models\BannerModel;
use App\Models\Visitor;
use App\Models\MembershipModel;
use App\Models\MembershipPlanModel;
use App\Models\JourneysModel;
use App\Models\User;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminBannerController extends Controller
{
    function dashboard()
    {
        $data['vacationers'] = count(User::where('user_role', 0)->get());
        $data['guiders'] = count(User::where('user_role', 1)->get());
        // ------------------------------------------------------------ Membership plan scope --------- Start -------------
        $membershipPlanScope = MembershipModel::select(
            DB::raw("title as title"),
            DB::raw("membership_id as mem_id"),
            DB::raw("COUNT(title) as pkg_count"),
            DB::raw("SUM(no_of_packages) as no_of_packages")) 
                ->orderBy("membership_id")
                ->groupBy(DB::raw("title"), DB::raw("membership_id"))
                ->get();
        $plans_sales;
        foreach ($membershipPlanScope as $key => $value) {
            $plans_sales[$key] = [$value->mem_id, $value->title, $value->pkg_count];
        }
        // dd($plans_sales);
        $totalPlanSales;
        $data['plans'] = ["Free", "Deluxe", "Premium", "Monthly", "Quarterly", "Half-Yearly", "Yearly"];
        for($a = 1; $a <= 7; $a++)
        {
            $haveVal = false;
            foreach($plans_sales as $val)
            {
                if($a == $val[0])
                {
                    $haveVal = true;
                    $totalPlanSales[$a] = $val[2];
                    break;
                }
            }
            if(!$haveVal)
            {
                $totalPlanSales[$a] = 0;
            }
        }
        $data['totalPlanSales'] = $totalPlanSales;
        // ------------------------------------------------------------ Membership plan scope --------- End -------------


            // ------------------------------------------------------------------------------------------
        // ------------------------------------------------------------ Yearly Membership plan Sales --------- Start -------------
        $yearlyMemberships = MembershipModel::select(
            DB::raw("year(created_at) as year"),
            DB::raw("month(created_at) as month"),
            DB::raw("SUM(price) as price"),
            DB::raw("SUM(no_of_packages) as no_of_packages")) 
        ->orderBy(DB::raw("YEAR(created_at)"))
        ->groupBy(DB::raw("YEAR(created_at)"), DB::raw("MONTH(created_at)"))
        ->get();

        $monthly_sales;
        $now = Carbon::now();
        foreach ($yearlyMemberships as $key => $value) {
            if($value->year == $now->year)
            {
                $monthly_sales[$key] = [$value->year, $value->month, (int)$value->price];
            }
        }
        for($a = 1; $a <= 12; $a++)
        {
            $haveVal = false;
            foreach($monthly_sales as $val)
            {
                if($a == $val[1])
                {
                    $haveVal = true;
                    $monthly_sale[$a] = $val[2];
                    break;
                }
            }
            if(!$haveVal)
            {
                $monthly_sale[$a] = 0;
            }
        }
        $data['monthly_sale'] = $monthly_sale;
        // ------------------------------------------------------------ Yearly Membership plan Sales --------- End -------------


        // ------------------------------------------------------------ Yearly Journeys Sales --------- Start -------------
        $yearlyJourneys = JourneysModel::select(
            DB::raw("year(created_at) as year"),
            DB::raw("month(created_at) as month"),
            DB::raw("SUM(total_price) as price"),
            DB::raw("COUNT(id) as total_pkg")) 
        ->orderBy(DB::raw("YEAR(created_at)"))
        ->groupBy(DB::raw("YEAR(created_at)"), DB::raw("MONTH(created_at)"))
        ->get();

        $monthly_journeys;
        $now = Carbon::now();
        foreach ($yearlyJourneys as $key => $value) {
            if($value->year == $now->year)
            {
                $monthly_journeys[$key] = [$value->year, $value->month, (int)$value->price];
            }
        }
        for($a = 1; $a <= 12; $a++)
        {
            $haveVal = false;
            foreach($monthly_journeys as $val)
            {
                if($a == $val[1])
                {
                    $haveVal = true;
                    $journeys_sale[$a] = $val[2];
                    break;
                }
            }
            if(!$haveVal)
            {
                $journeys[$a] = 0;
            }
        }
        $data['journeys_sale'] = $journeys_sale;
        // ------------------------------------------------------------ Yearly Journeys Sales --------- End -------------

        $visitor = Visitor::select(
            DB::raw("year(created_at) as year"),
            DB::raw("SUM(click) as total_click"),
            DB::raw("SUM(viewer) as total_viewer")) 
        ->orderBy(DB::raw("YEAR(created_at)"))
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->get();

        $result[] = ['Year','Click','Viewer'];
        foreach ($visitor as $key => $value) {
        $result[++$key] = [$value->year, (int)$value->total_click, (int)$value->total_viewer];
        }

        return view('admin.dashboard', $data)
            ->with('visitor',json_encode($result));
            // ->with('monthly_sale',json_encode($monthly_sale));
        // return view('admin.dashboard');
    }

/**Banner functions starts*/
    function banner()
    {
        $banner = BannerModel::get();
        return view('admin.banners.banner-list',compact('banner'));
    }
    function banner_add()
    {
        return view('admin.banners.banner-add');
    }
    function banner_edit($id)
    {
        $banner = BannerModel::where('id',$id)->first();
        return view('admin.banners.banner-edit',compact('banner'));
    }
    function banner_delete(BannerModel $banner)
    {
        $banner->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function banner_add_edit_data(Request $request,BannerModel $banner)
    {
        $create = 1;
        (isset($banner->id) and $banner->id>0)?$create=0:$create=1;
        if($request->hasFile('images'))
        {
            $imageName = time().'.'.$request->images->getClientOriginalExtension();
            $request->images->move(public_path('/uploads/banners'), $imageName);
            $banner->images = $imageName;
        }
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->status = $request->status;
        $banner->save();
        if($create == 0)
        {
            return back()->with('update','Updated Successfully');
        }
        else
        {
            return back()->with('success','Added Successfully');
        }
    }
/**Banner functions ends*/


}
