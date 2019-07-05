@extends('DashboardAdmin.layouts.app')

@section('content')


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                    @csrf
                    <section class="content-header">
                        <h1>All Posts</h1>
                    </section><!-- ./Section header -->
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-info">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-lg-12">

                                                    <div class="uper">
                                                        @if(session()->get('success'))
                                                            <div class="alert alert-success">
                                                                {{ session()->get('success') }}
                                                            </div><br/>
                                                        @endif
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
                                                                    <td><img src="{{asset('images/'.$post->image)}}" class="img-thumbnail img-responsive" width="50" height="50" alt="image"/></td>
                                                                    <td>{{$post->category}}</td>
                                                                    <td>
{{--                                                                        <form action="{{ route('AllPostControllerAdmin.destroy', $post->id)}}" method="POST">--}}
{{--                                                                            @csrf--}}
{{--                                                                            @method('DELETE')--}}
{{--                                                                            <button type="submit" class="btn btn-danger" >Remove</button>--}}
{{--                                                                        </form>--}}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            <tbody>
                                                        </table>
                                                            {{$posts->links()}}
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
