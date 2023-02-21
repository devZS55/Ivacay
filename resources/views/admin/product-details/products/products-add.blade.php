@extends('admin.layouts.main')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}"><span class="fas fa-home"></span></a></li>
                <li class="breadcrumb-item"><a href="{{route('admin_products')}}">Product-List</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product-Add</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Product Add</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card border-light shadow-sm components-section">
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-lg-12 col-sm-12">
                                <!-- Form -->
                                @if(Session::has('success'))
                                    <div class="alert alert-success mb-4" id="success-alert">
                                        <center><span class="text-white">{{Session::get('success')}}</span></center>
                                    </div>
                                @endif
                                <form action="{{route('admin_products_add_edit')}}" method="POST" enctype="multipart/form-data">@csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="my-1 mr-2" for="country">Sub Category</label>
                                                <select class="form-select" id="parent_category" name="sub_categories">
                                                    <option selected hidden disabled>Select Sub Category</option>
                                                    @foreach($sub_categories as $values)
                                                        <option value="{{$values->id}}">{{$values->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-4">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" required name="title" placeholder="Enter your title...">
                                            </div>
                                            <div class="my-4">
                                                    <label for="textarea">Description</label>
                                                <textarea class="form-control" placeholder="Enter your message..." id="textarea" rows="5" name="description"></textarea>
                                            </div>
                                            <fieldset class="my-4">
                                                <legend class="h6">Status</legend>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked="">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Inactive
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label for="title">Price</label>
                                                <input type="text" class="form-control" required name="price" placeholder="Enter your price...">
                                            </div>
                                            <div class="mb-4">
                                                <label for="title">Stock</label>
                                                <input type="number" class="form-control" required name="stock" placeholder="Enter your stock...">
                                            </div>
                                            <div>
                                                <label for="textarea">Image</label>
                                                <div class="form-file mb-3">
                                                    <input type="file" class="form-file-input" required id="customFile" multiple name="images[]" onchange="loadFile(this)">
                                                    <label class="form-file-label" for="customFile">
                                                        <span class="form-file-text">Choose file...</span>
                                                        <span class="form-file-button">Browse</span>
                                                    </label>
                                                    <div id="imagediv"></div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" name="is_discounted" type="checkbox" id="dis" value="1">
                                                            <label class="form-check-label" for="flexSwitchCheckChecked">Discounted</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" name="is_featured" type="checkbox" id="flexSwitchCheckChecked" checked="" value="1">
                                                            <label class="form-check-label" for="flexSwitchCheckChecked">Featured</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4" id="dis_div">
                                                <div class="mb-4">
                                                    <label for="title">Discounted Percentage</label>
                                                    <input type="number" class="form-control" name="discounted_percentage" placeholder="Enter your dicounted percentage...">
                                                </div>
                                            </div>

                                        </div>
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
