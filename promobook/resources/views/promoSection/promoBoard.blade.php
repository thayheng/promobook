@extends('home')
@section('catagory')
    <div class="card">
            <div class="card-header" style="background:orange;margin:0px 0px;text-align: center">
                <a href="">Categories</a>
            </div>
            <div class="card-body">
                    <div class="btn-group-vertical" style="width: 100%">
                    <a href="{{route('promoboard')}}"  class="btn btn-light" class="fa fa-home">Electronics</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Restaurant</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Coffeshop</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Outfit</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Sport</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Bookstore</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Salon</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Entertainment</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Travel</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Babystore</a>
                    </div>
            </div>
        </div>
@endsection
@section('promoSection')

    <h1>In PromoBoard</h1>
@endsection