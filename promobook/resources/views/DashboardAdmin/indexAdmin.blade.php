@extends('DashboardAdmin.layouts.app')

@section('content')


    <section class="content">
        <div class="row">
            <div class="col-md-8">
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
                                                    <div class="uper">
                                                        <table class="table table-striped">
                                                            <thead>
                                                            <tr>
                                                                <td>User</td>
                                                                <td>Content</td>
                                                                <td>Image</td>
                                                                <td>Category</td>
                                                                <td style="width: 260px">Action</td>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($posts as $post)
                                                                <tr>
                                                                    <td>{{$post->user}}</td>
                                                                    <td>{{$post->data}}</td>
                                                                    <td><img src="{{asset('images/'.$post->image)}}" class="img-thumbnail" width="75" alt="image"/></td>
                                                                    <td>{{$post->category}}</td>
                                                                    <td>
                                                                        {{--                                                                    <form action="{{ route('CategoryController.destroy', $category->id)}}" method="post">--}}
                                                                        {{--                                                                        @csrf--}}
                                                                        {{--                                                                        @method('DELETE')--}}
                                                                        {{--                                                                        <button type="submit" class="btn btn-danger" >Delete</button>--}}
                                                                        {{--                                                                    </form>--}}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            <tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
    </section>



@endsection
