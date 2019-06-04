@extends('home')
@section('catagory')
    <div class="card">
            <div class="card-header" style="background:orange;margin:0px 0px;text-align: center">
                <a href="">Categories</a>
            </div>
            <div class="card-body">
                <div class="btn-group-vertical" style="width: 100%">
                    {{-- <a href="{{route('promoboard')}}"  class="btn btn-light">Date</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Solo</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Party</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">View</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Light</a>
                    <a href="{{route('promoboard')}}"  class="btn btn-light">Overnight</a> --}}
                </div>
            </div>
        </div>
@endsection
@section('promoSection')
    <h1>In PromoPlace</h1>
@endsection