@extends('DashboardAdmin.layouts.app')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('SponsorController.index')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <section class="content-header">
                        <h1>Sponsor</h1>
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
                                                <legend>Add New Sponsor:</legend>
                                                <div class="row">
                                                    <div class="col-lg-6">

                                                        <div class="form-group">
                                                            <label for="name">Name of Category :</label>
                                                            <input type="text" class="form-control" name="name" placeholder="Type New Name Of Category Here"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="form-group status-post-submit" style="text-align: center">
                                                            <label for="name">Click Button Add for Add New Sponser :</label>
                                                            <button class="btn btn-primary"      style="width: 100%">Add</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="link">Link Sponsor :</label>
                                                            <input type="text" class="form-control" name="link" placeholder="https://www.doamin.com"/>
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
                                                            <input id="file" name="image" type="file" style="display: none" onchange="readURL(this);"/>
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
                                                <hr>

                                                <div class="uper">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <td>Name</td>
                                                            <td>Link</td>
                                                            <td>Image</td>
                                                            <td style="width: 260px">Action</td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($sponsors as $sponsor)
                                                            <tr>
                                                                <td>{{$sponsor->name}}</td>
                                                                <td>{{$sponsor->link}}</td>
                                                                <td><img src="{{asset('images/'.$sponsor->image)}}" class="img-thumbnail" width="75" alt="image"/></td>
                                                                <td>
{{--                                                                                                                                            <form action="{{ route('CategoryController.destroy', $sponsor->id)}}" method="post">--}}
{{--                                                                                                                                                @csrf--}}
{{--                                                                                                                                                @method('DELETE')--}}
{{--                                                                                                                                                <button type="submit" class="btn btn-danger" >Delete</button>--}}
{{--                                                                                                                                            </form>--}}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        <tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
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
