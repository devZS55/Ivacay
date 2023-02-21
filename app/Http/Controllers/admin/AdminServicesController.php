<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServicesModel;

class AdminServicesController extends Controller
{
    function service_list()
    {
        $service = ServicesModel::get();
        return view('admin.services.services-list',compact('service'));
    }
    function service_add()
    {
        return view('admin.services.services-add');
    }
    function service_edit($id)
    {
        $service = ServicesModel::where('id',$id)->first();
        return view('admin.services.services-edit',compact('service'));
    }
    function service_delete(ServicesModel $service)
    {
        $service->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function service_add_edit_data(Request $request,ServicesModel $service)
    {
        $create = 1;
        (isset($service->id) and $service->id>0)?$create=0:$create=1;
        if($request->hasFile('images'))
        {
            $imageName = time().'.'.$request->images->getClientOriginalExtension();
            $request->images->move(public_path('/uploads/services'), $imageName);
            $service->images = $imageName;
        }
        $service->title = $request->title;
        $service->description = $request->description;
        $service->status = $request->status;
        $service->save();
        if($create == 0)
        {
            return back()->with('update','Updated Successfully');
        }
        else
        {
            return back()->with('success','Added Successfully');
        }
    }
}
