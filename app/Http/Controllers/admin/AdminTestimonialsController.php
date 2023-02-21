<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\TestimonialModel;
use Illuminate\Http\Request;

class AdminTestimonialsController extends Controller
{
    function testimonial_list()
    {
        $testimonial = TestimonialModel ::get();
        return view('admin.testimonials.testimonials-list',compact('testimonial'));
    }
    function testimonial_add()
    {
        return view('admin.testimonials.testimonials-add');
    }
    function testimonial_edit($id)
    {
        $testimonial = TestimonialModel ::where('id',$id)->first();
        return view('admin.testimonials.testimonials-edit',compact('testimonial'));
    }
    function testimonial_delete(TestimonialModel $testimonial)
    {
        $testimonial->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function testimonial_add_edit_data(Request $request,TestimonialModel $testimonial)
    {
        $create = 1;
        (isset($testimonial->id) and $testimonial->id>0)?$create=0:$create=1;
        if($request->hasFile('images'))
        {
            $imageName = time().'.'.$request->images->getClientOriginalExtension();
            $request->images->move(public_path('/uploads/testimonials'), $imageName);
            $testimonial->images = $imageName;
        }
        $testimonial->description = $request->description;
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->status = $request->status;
        $testimonial->save();
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
