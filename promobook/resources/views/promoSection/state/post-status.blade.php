<div class="container">

        <form action="{{route('PostController.index')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="status-post">
            <div class="row">
                <div class="col-sm-4" style="margin:0px 0px;text-align: left">
                    <label for="image">Post Status</label>
                </div>
                <div class="col-sm-4" style="margin:0px 0px;text-align: right">
                    <label>Select Category :</label>
                </div>
                <div class="col-sm-4">
                    <form>
                        <select name = "category" style="text-align: right;display: block; font-size: 16px;font-family: sans-serif;font-weight: 700;color: #f6993f;line-height: 1.3;padding: .6em 1.4em .5em .8em;width: 100%;max-width: 100%;box-sizing: border-box;margin: 0;border: 1px solid #aaa;box-shadow: 0 1px 0 1px rgba(0,0,0,.04);">
                            @foreach ($categories as $category)
                                <option type="text" value = "{{$category->name}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <textarea type="text" class="form-control" maxlength="255" name="data" placeholder="What's on your vage?" rows="2" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <br>
                    <label for="image">Select Image</label>
                </div>
            </div>
            <div class="row" style="margin:0px 0px;text-align: center">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="file">
                            <img src="{{asset('images/upload.png')}}" height="40px" width="150px" style="cursor:pointer" >
                        </label>
                         <input id="file" name="image" type="file" style="display: none" onchange="readURL(this);" required/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <img id="blah" class="img-thumbnail" src="{{asset('images/photo.png')}}" height="30px" width="30px" alt="your image" />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group status-post-submit" style="text-align: center">
                            <button class="btn btn-primary"      style="width: 100%">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>

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
