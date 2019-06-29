@extends('home')
@section('catagory')

@include('promoSection.state.category')

@endsection

@section('promoSection')
@guest
    {{$posts->links()}}
    @include('promoSection.state.public-status')
@else
@include('promoSection.state.post-status')
<hr>
@include('promoSection.state.public-status')
@endguest

@endsection
