@extends('home')
@section('catagory')

    @include('promoSection.state.category')

@endsection

@section('promoSection')
    @guest

{{--        {{$search->links()}}--}}
        <div class="card-body">
            @foreach ($searchs as $search)
                <div class="card border-info mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-7">
                                <b style="font-size: 20px">{{$search->user}}</b>
                            </div>
                            <div class="col-sm-5" style="margin:0px 0px;text-align: right">
                                Category: {{$search->category}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">
                                <p>{{$search->data}}</p>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-sm-12 img-responsive" style="height: auto; width: auto" >
                                <img src="{{asset('images/'.$search->image)}}"  class="img-thumbnail"   alt="image"/>
                            </div>
                        </div>
                        <hr>
                        <div class="row" >
                            <div class="col-sm-8" >
                                <small>
                                    like {{$search->like}}
                                </small>
                            </div>
                            <div class="col-sm-4">
                                <small>
                                    share {{$search->like}}
                                </small>
                            </div>
                        </div>
                        <br>
                        <div class="row" style="margin:0px 0px;text-align: center">
                            <div class="col-sm-4">
                                <label for="like">
                                    <img src="{{asset('images/like.png')}}" width="30px" height="30px" style="cursor:pointer"> Like
                                </label>
                                <button id="like" class="btn btn-primary" style="display: none">Like</button>
                            </div>
                            <div class="col-sm-4">
                                <label for="location" >
                                    <img src="{{asset('images/location.png')}}" width="30px" height="30px" style="cursor:pointer"> Location
                                </label>
                                <button id="location" class="btn btn-primary" style="display: none">Location</button>
                            </div>
                            <div class="col-sm-4">
                                <label for="share">
                                    <img src="{{asset('images/share.png')}}" width="30px" height="30px" style="cursor:pointer"> Share
                                </label>
                                <button id="share" class="btn btn-primary" style="display: none">Share</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
{{--            {{$search->links()}}--}}
        </div>

    @else

        @include('promoSection.state.post-status')
        <hr>

        <div class="card-body">
            @foreach ($searchs as $search)
                <div class="card border-info mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-7">
                                <b style="font-size: 20px">{{$search->user}}</b>
                            </div>
                            <div class="col-sm-5" style="margin:0px 0px;text-align: right">
                                Category: {{$search->category}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">
                                <p>{{$search->data}}</p>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-sm-12 img-responsive" style="height: auto; width: auto" >
                                <img src="{{asset('images/'.$search->image)}}"  class="img-thumbnail"   alt="image"/>
                            </div>
                        </div>
                        <hr>
                        <div class="row" >
                            <div class="col-sm-8" >
                                <small>
                                    like {{$search->like}}
                                </small>
                            </div>
                            <div class="col-sm-4">
                                <small>
                                    share {{$search->like}}
                                </small>
                            </div>
                        </div>
                        <br>
                        <div class="row" style="margin:0px 0px;text-align: center">
                            <div class="col-sm-4">
                                <label for="like">
                                    <img src="{{asset('images/like.png')}}" width="30px" height="30px" style="cursor:pointer"> Like
                                </label>
                                <button id="like" class="btn btn-primary" style="display: none">Like</button>
                            </div>
                            <div class="col-sm-4">
                                <label for="location" >
                                    <img src="{{asset('images/location.png')}}" width="30px" height="30px" style="cursor:pointer"> Location
                                </label>
                                <button id="location" class="btn btn-primary" style="display: none">Location</button>
                            </div>
                            <div class="col-sm-4">
                                <label for="share">
                                    <img src="{{asset('images/share.png')}}" width="30px" height="30px" style="cursor:pointer"> Share
                                </label>
                                <button id="share" class="btn btn-primary" style="display: none">Share</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
{{--            {{$search->links()}}--}}
        </div>


    @endguest

@endsection

@section('sponsor')
    @include('promoSection.state.sponsor')
@endsection
