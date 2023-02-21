<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\BlogsModel;
use Illuminate\Http\Request;

class AdminBlogsController extends Controller
{
    function blog_list()
    {
        $blog = BlogsModel::get();
        return view('admin.blogs.blogs-list',compact('blog'));
    }
    function blog_add()
    {
        return view('admin.blogs.blogs-add');
    }
    function blog_edit($id)
    {
        $blog = BlogsModel::where('id',$id)->first();
        return view('admin.blogs.blogs-edit',compact('blog'));
    }
    function blog_delete(BlogsModel $blog)
    {
        $blog->delete();
        return back()->with('delete','Deleted Successfully');
    }
    function blog_add_edit_data(Request $request,BlogsModel $blog)
    {
        $create = 1;
        (isset($blog->id) and $blog->id>0)?$create=0:$create=1;
        if($request->hasFile('images'))
        {
            $imageName = time().'.'.$request->images->getClientOriginalExtension();
            $request->images->move(public_path('/uploads/blogs'), $imageName);
            $blog->images = $imageName;
        }
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = Auth()->user()->id;
        $blog->status = $request->status;
        $blog->save();
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
