@extends('DashboardAdmin.layouts.app')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('CategoryController.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <section class="content-header">
                        <h1>Category</h1>
                    </section><!-- ./Section header -->
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-info">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <legend>Add New Category:</legend>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label for="name">Name of Category :</label>
                                                            <input type="text" class="form-control" name="name" placeholder="Name Category" required/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group status-post-submit" style="text-align: center">
{{--                                                            <label for="name">Click Button Add for Add New Category :</label>--}}
                                                            <button class="btn btn-primary"      style="width: 100%">Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label>Add Icon Catrgory :</label>
                                                            <label for="file">
                                                                <img src="{{asset('images/upload.png')}}" height="40px" width="150px" style="cursor:pointer"  alt="addicon">
                                                            </label>
                                                            <input id="file" name="icon" type="file" style="display: none" onchange="readURL(this);" required/>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="card-group">
                                                            <img id="blah" src="{{asset('images/photo.png')}}" height="30px" width="30px" alt="your image" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                    </section>
                </form>

                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div><br/>
                @endif

                <div class="uper">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td>Icon</td>
                            <td>Name</td>
                            <td style="width: 260px">Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td><img src="{{asset('images/'.$category->icon)}}" class="img-thumbnail" width="50" height="50" alt="image"/></td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <form action="{{ route('CategoryController.destroy', $category->id)}}" method="get">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" >Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        <tbody>
                    </table>
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </section>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(50)
                        .height(50);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


@endsection
