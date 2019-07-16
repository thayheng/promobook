<div class="card">
    <div class="card-header" style="background:orange;margin:0px 0px;text-align: center">
        <b>Categories</b>
    </div>
    <div class="card-body " style="margin:0px 0px;text-align: center">
{{--        <div class="btn-group-vertical">--}}
            @foreach ($categories as $category)
            <form action="{{route('Filter')}}" method="get">
                <div class="row" style="margin: 0px 0px">
                    <div class="col-lg-12  " style="margin:0px 0px;text-align: center">
                        <label for="{{$category->id}}">
                            <a class="btn-default" ><img class="img-thumbnail" src="{{asset('images/'.$category->icon)}}" height="30px" width="30px"> {{$category->name}}</a>
                        </label>
                        <input type="text" name="category"  value="{{$category->name}}" style="display: none">
                        <button type="submit" id="{{$category->id}}" style="display: none"></button>
                    </div>
                </div>
            </form>
            @endforeach
{{--        </div>--}}
    </div>
</div>
