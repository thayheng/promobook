

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" style="background:orange;text-align: center">
                <a href=""><b>THANK TO OUR SPONSOR</b></a>
            </div>
            @foreach ($sponsors as $sponsor)
                <div class="card-body col" style="text-align: center">
                    <div class="col">
                        <h3>{{$sponsor->name}}</h3>
                        <br/>
                        <div class="img-responsive" style="height: auto; width: auto">
                            <img alt="image" class="img-thumbnail" src="{{asset('images/'.$sponsor->image)}}"/>
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
</div>

