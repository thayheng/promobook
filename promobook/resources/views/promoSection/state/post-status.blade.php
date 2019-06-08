<form action="{{route('PostController.index')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="status-post">
    <div class="row">
        <div class="col-sm">
            <label for="image">Post Status</label>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <textarea name="data" placeholder="What's on your vage?" class="form-control" rows="2" maxlength = "150"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <br>
            <label for="image">Select Image</label>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">

            <div class="form-group" style="font: 1rem 'Fira Sans', sans-serif">
                <label for="file">
                    <img src="{{asset('images/icons8-upload-to-the-cloud-400.png')}}" height="50px" width="50px">
                </label>
                 <input id="file" name="image" type="file" style="display: none" >
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
