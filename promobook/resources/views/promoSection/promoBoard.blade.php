@extends('home')
@section('catagory')

@include('promoSection.state.category')

@endsection

@section('promoSection')

@include('promoSection.state.post-status')
<hr>
@include('promoSection.state.public-status')

@endsection
