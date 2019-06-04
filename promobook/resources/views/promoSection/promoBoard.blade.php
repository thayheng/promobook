@extends('home')
@section('catagory')
    <div class="card">
            <div class="card-header" style="background:orange;margin:0px 0px;text-align: center">
                <a href="">Categories</a>
            </div>
            <div class="card-body">
                    <div class="btn-group-vertical" style="width: 100%">
                    <a   class="btn btn-light" class="fa fa-home">Electronics</a>
                    <a  class="btn btn-light">Restaurant</a>
                    <a   class="btn btn-light">Coffeshop</a>
                    <a  class="btn btn-light">Outfit</a>
                    <a   class="btn btn-light">Sport</a>
                    <a   class="btn btn-light">Bookstore</a>
                    <a   class="btn btn-light">Salon</a>
                    <a  class="btn btn-light">Entertainment</a>
                    <a   class="btn btn-light">Travel</a>
                    <a   class="btn btn-light">Babystore</a>
                    </div>
            </div>
        </div>
@endsection
@section('promoSection')

        <form action="{{route('PostController.index')}}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <input name="postdata" type="text" placeholder="What do you want to share today?" style="width:100%">
                </div> 
                <div class="card-header" style="background: orange; text-align: center">
                    <button class="btn btn-primary"      style="width: 100%">Post</button>
                </div>
            </div>
        </form>
    
@endsection