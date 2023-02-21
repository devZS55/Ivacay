@extends('admin.layouts.main')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_memberships_plans')}}">Memberships-Plans-List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Memberships-Plans-Edit</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Membership Plans Edit</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-5 mb-4 ml-4">
                <div class="card border-light shadow-sm components-section">
                    <div class="card-body">
                        <div class="row mb-4">

                            <div class="col-lg-12 col-sm-12">
                                <!-- Form -->
                                @if(Session::has('update'))
                                    <div class="alert alert-warning mb-4" id="success-alert">
                                        <center><span class="text-white">{{Session::get('update')}}</span></center>
                                    </div>
                                @endif
                                <form action="{{route('admin_memberships_plans_add_edit').'/'.$memberships_plan->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" required value="{{$memberships_plan->title}}" name="title">
                                    </div>
                                    <div class="mb-4">
                                        <label for="title">Price</label>
                                        <input type="number" class="form-control" required value="{{$memberships_plan->price}}" name="price">
                                    </div>
                                    <div class="mb-4">
                                        <label for="title">No. of packages</label>
                                        <input type="number" class="form-control" required value="{{$memberships_plan->no_of_packages}}" name="no_of_packages">
                                    </div>
                                    <div class="mb-4">
                                        <label for="title">Duration</label>
                                        <input type="number" class="form-control" required value="{{$memberships_plan->duration}}" name="duration">
                                    </div>
                                    
                                    <div class="my-4">
                                        <button class="btn btn-pill btn-outline-success" type="submit">Submit</button>
                                    </div>
                                </form>
                                <!-- End of Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
