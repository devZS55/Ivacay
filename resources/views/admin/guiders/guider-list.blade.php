@extends('admin.layouts.main')
@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}"><span class="fas fa-home"></span></a></li>
            <li class="breadcrumb-item active" aria-current="page">Guiders</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Guiders-List</h1>
        </div>
    </div>
</div>

<div class="card border-light shadow-sm mb-4">
    <div class="card-body">
        @if(Session::has('delete'))
            <div class="alert alert-danger mb-4" id="success-alert">
                <center><span class="text-white">{{Session::get('delete')}}</span></center>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded" id="table_id">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0">#</th>
                        <th class="border-0">Guider Name</th>
                        <th class="border-0">Email</th>
                        <th class="border-0">Current Membership</th>
                        <th class="border-0">Status</th>
                        <th class="border-0 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                        <!-- Start of Item -->
                        @foreach($guiders as $key=>$value)
                            <tr>
                                <td class="border-0"><a href="#" class="text-primary font-weight-bold">{{$key+1}}</a> </td>
                                <td class="border-0 font-weight-bold">{{$value->username}}</td>
                                <td class="border-0 font-weight-bold">{{$value->email}}</td>
                                <td class="border-0 font-weight-bold {{ count($value->getMemberships) > 0 ? '' : 'text-danger' }}">{{ count($value->getMemberships) > 0 ? $value->getMemberships[0]->title : 'Non-subscriber' }}</td>
                                <td class="border-0 font-weight-bold">
                                    <span class="{{$value->status == 1 ? 'text-success' : 'text-danger'}}">{{$value->status == 1 ? 'Active' : 'Inactive'}}</span>
                                </td>
                                <td class="border-0">
                                    <!-- <span class="text-primary"> |  </span> -->
                                    <a href="{{route('admin_guides_profile_state_edit').'/'.$value->id}}" class="{{ $value->profile_status == 0 ? 'text-danger' : 'text-success'}} mr-3"><i class="fas fa-edit"></i>{{ $value->profile_status == 0 ? 'Lock this guide' : 'Unlocked this guide'}}</a>
                                <!--     <span class="text-primary"> |  </span>
                                    <a href="{{route('admin_jobs_delete').'/'.$value->id}}" class="text-danger ml-3"><i class="far fa-trash-alt"></i>Delete</a>
                                </td> -->
                            </tr>
                        @endforeach
                        <!-- End of Item -->
                    <!-- Item -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
@endpush
