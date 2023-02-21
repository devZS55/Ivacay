@extends('admin.layouts.main')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_users')}}">Blog-List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog-Edit</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Blog Edit</h1>
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
                                <form action="{{route('admin_users_add_edit').'/'.$user->id}}" method="POST" enctype="multipart/form-data">@csrf
                                    <div class="mb-4">
                                        <label for="title">Username</label>
                                        <input type="text" class="form-control" required value="{{$user->username}}" name="username">
                                    </div>
                                    <div class="my-4">
                                        <label for="textarea">Email</label>
                                        <input type="email" class="form-control" required value="{{$user->email}}" name="email">
                                    </div>
                                    <div class="mb-4">
                                        <label class="my-1 mr-2" for="country">User Role</label>
                                        <select class="form-select" id="user_role" name="user_role">
                                            <option selected hidden disabled>Select Role</option>
                                            <option value="1" {{$user->user_role == 1 ? 'selected' : ''}}>Admin</option>
                                            <option value="2" {{$user->user_role == 2 ? 'selected' : ''}}>User</option>
                                            <option value="3" {{$user->user_role == 3 ? 'selected' : ''}}>Vendor</option>
                                            <option value="4" {{$user->user_role == 4 ? 'selected' : ''}}>Customer</option>
                                        </select>
                                    </div>
                                    <fieldset class="my-4">
                                        <legend class="h6">Status</legend>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" {{ $user->status === 1 ? 'checked' : ''}}>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0" {{ $user->status === 0 ? 'checked' : ''}}>
                                            <label class="form-check-label" for="exampleRadios2">
                                                Inactive
                                            </label>
                                        </div>
                                    </fieldset>
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
