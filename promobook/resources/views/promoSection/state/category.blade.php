<div class="card">
    <div class="card-header" style="background:orange;margin:0px 0px;text-align: center">
        <a href=""><b>Categories</b></a>
    </div>
    <div class="card-body">
        <div class="btn-group-vertical" style="width: 100%">
            @foreach ($categories as $category)
                <a   class="btn btn-light"><img src="{{asset('images/Electronics.png')}}" height="30px" width="30px">{{$category->name}}</a>
            @endforeach
        </div>
    </div>
</div>
