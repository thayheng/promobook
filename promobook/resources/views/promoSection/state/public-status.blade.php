<div class="card-body">
@foreach ($posts as $post)
<div class="card border-info mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-6">
                <b style="font-size: 20px">{{$post->user}}</b>
            </div>
            <div class="col-sm-6">
                <small> <i style="color: chocolate">{{$post->created_at}}</i></small>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm">
                <p>{{$post->data}}</p>
            </div>
        </div>
        <div class="row" style="width: 18rem;">
            <div class="col-sm" >
                <img src="{{asset('images/'.$post->image)}}"  class="card-img-top"  alt="image"/>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-8">
                <small>
                    like {{$post->like}}
                </small>
                <small>
                    view {{$post->like}}
                </small>
            </div>
            <div class="col-sm-4">
                <small>
                    share {{$post->like}}
                </small>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <button class="btn btn-primary">Like</button>
            </div>
            <div class="col-sm">
                <button class="btn btn-primary">Location</button>
            </div>
            <div class="col-sm">
                <button class="btn btn-primary">Share</button>
            </div>
        </div>
    </div>
</div>
<hr>
@endforeach
{{$posts->links()}}
</div>
