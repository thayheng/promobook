<div class="card-body" style="width: 100%">
    <hr>
    <div class="card-body row" style="color: white;text-align: center">
        <div class="col-4">
            <div class="card-header" style="background: orange">
                About Us
            </div>
            <div class="card-body">
                <p style="color: black">
                    Why pay more when you can pay less. We are promobook.app and We believe that we would make a different that positively improve life quality by providing three main values preposition. <br> <p style="color: black">
                    <b>Convinience &nbsp&nbsp </b> <b>Accuracy &nbsp&nbsp </b>  <b>Save</b>
                </p><hr>
                </p>
            </div>
        </div>
        <div class="col-4">
            <div class="card-header" style="background: orange">
                Contact Us
            </div>
            <div class="card-body" style="color: black;">
                <p>Name: &nbsp;<b>Oeng Meng Thong</b></p>
                <p>Position:&nbsp <b>Development Manager</b> </p>
                <p>Contact:&nbsp <b>069 606 631</b> </p>
                <p>Email: &nbsp <b>thongthong@gmail.com</b></p><hr>
            </div>
        </div>
        <div class="col-4">
            <div class="card-header" style="background: orange">
                Follow Us
            </div>
            <div class="card-body" style="color: black">
                @foreach($followUs as $follow)
                <img src="{{$follow->icon}}" alt="Social Media Icon">
                <a href="{{$follow->link}}">{{$follow->name}}</a><br><br>

                @endforeach
                <a>Instagram</a><br><br>
                <a>Twitter</a><br><br>

                <hr>
            </div>
        </div>
    </div>
    <div class="card-body" style="width:100%;text-align: center;background: wheat;margin: 0px 0px">
        <hr>
        COPYRIGHT2019@PROMOBOOK.APP
    </div>
</div>
