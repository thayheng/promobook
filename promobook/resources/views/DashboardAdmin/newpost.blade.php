@extends('DashboardAdmin.layouts.app')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-8">
            <form novalidate="novalidate" id="entryForm" action="#" method="post" enctype="multipart/form-data">
            <section class="content-header">
                <h1>POST</h1>
            </section><!-- ./Section header -->
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <div class="box-tools pull-right">
                                    <a class="btn btn-info btn-sm" href="#"><i class="fa fa-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <legend>Post Contents:</legend>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>
                                                            <textarea id="messageArea" name="messageArea" rows="20" class="form-control ckeditor" placeholder="Write your message.."></textarea>
                                                        </label>
                                                    </div>
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
        </div>
        <div class="col-md-4">
            <section class="content-header">
                <h1>Side Bar</h1>
            </section><!-- ./Section header -->

            <section class="content">

                <div class="col">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header">
                                <label>Categories</label>
                                <hr>
                                <label></label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</section>

@endsection

@section('script')

{{--    for post image--}}

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

{{--     end script for post image--}}


{{--     start script for textarea--}}

{{--<script src="//cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>--}}
<script src="{{asset('laravel-ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('laravel-ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('.form-control ckeditor');
</script>

@endsection
