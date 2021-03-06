@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-3">
          @yield('catagory')
      </div>
      <div class="col-lg-6 ">
          <div class="card">
              <div class="card-header row" style="background:orange;margin:0px 0px;text-align: center">
                    <div class="col-4">
                      <a href="{{route('PostController.index')}}">Promoboard</a>
                    </div>
                    <div class="col-4">
                      <a href="#">Promoplace</a>
                    </div>
                    <div class="col-4">
                      <a href="">Promovideo</a>
                    </div>
              </div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  @yield('promoSection')
              </div>
          </div>
      </div>
      <div class="col-lg-3" >
          @yield('sponsor')
            <br>
          <div class="card">
              <div class="card-header" style="background:orange;margin:0px 0px;text-align: center;">
                   <a href=""><b>Messenger</b></a>
              </div>
              <div class="card-body">
              </div>
          </div>
      </div>
    </div>
</div>
@endsection

@section('footer')
    @include('promoSection.state.footer')
@endsection
