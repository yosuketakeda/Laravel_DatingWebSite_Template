@include('include/header')
@section('title')
    Companion Home
@endsection
<div class="home_img">
    <div class="container">
        <div class="home_top">
            <p class="first">FÜR JEDEN ANLASS</p>
            <p class="second">Die richtige</p>
            <p class="third">Begleitperson fiden</p>
            <form method="POST" action="{{route('begleit_find')}}">
                @csrf
                <div class="choose_field">
                    <div class="gender">
                        <div class="item"><input type="radio" value="woman" name="gender" required> Frau</div>
                        <div class="item"><input type="radio" value="man" name="gender" > Mann</div>
                    </div>
                    <div class="stylist">
                        <div class="item"><input type="radio" value="business" name="type" required> Geschäftlich</div>
                        <div class="item"><input type="radio" value="private" name="type" > Freizeit</div>
                    </div>
                    <div class="options pc">
                        <div class="line">
                            <div class="item"><input type="radio" value="1" name="option" required> Essen & Trinken</div>
                            <div class="item"><input type="radio" value="2" name="option" > Reisen</div>
                            <div class=""><input type="radio" value="3" name="option"> Urlaubsbegleitung</div>
                        </div>
                        <div class="line">
                            <div class="item"><input type="radio" value="4" name="option" > Kunst & Kultur</div>
                            <div class="item"><input type="radio" value="5" name="option" > Sport</div>
                            <div class=""><input type="radio" value="6" name="option" > Ersatzbegleitung</div>
                        </div>
                        <div class="line">
                            <div class="item"><input type="radio" value="7" name="option" > Bildung</div>
                            <div class="item"><input type="radio" value="8" name="option" > Wellness</div>
                            <div class=""><input type="radio" value="9" name="option" > Manager Begleitung</div>
                        </div>
                        <div class="line">
                            <div class="item"><input type="radio" value="10" name="option"> Gesundheit</div>
                            <div class="item"><input type="radio" value="11" name="option"> Wirtschaft</div>
                            <div class=""><input type="radio" value="12" name="option"> Fachliche Begleitung</div>
                        </div>
                    </div>
                    <div class="options sp">
                        <div class="line">
                            <div class="item"><input type="radio" value="1" name="option" required> Essen & Trinken</div>
                            <div class="item"><input type="radio" value="2" name="option"> Reisen</div>
                        </div>
                        <div class="line">
                            <div class="item"><input type="radio" value="3" name="option"> Urlaubsbegleitung</div>
                            <div class="item"><input type="radio" value="4" name="option"> Kunst & Kultur</div>
                        </div>
                        <div class="line">
                            <div class="item"><input type="radio" value="5" name="option"> Sport</div>
                            <div class="item"><input type="radio" value="6" name="option"> Ersatzbegleitung</div>
                        </div>
                        <div class="line">
                            <div class="item"><input type="radio" value="7" name="option"> Bildung</div>
                            <div class="item"><input type="radio" value="8" name="option"> Wellness</div>
                        </div>
                        <div class="line">
                            <div class="item"><input type="radio" value="9" name="option"> Manager Begleitung</div>
                            <div class="item"><input type="radio" value="10" name="option"> Gesundheit</div>
                        </div>
                        <div class="line">
                            <div class="item"><input type="radio" value="11" name="option"> Wirtschaft</div>
                            <div class="item"><input type="radio" value="12" name="option"> Fachliche Begleitung</div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="find">BEGLEITPERSON FINDEN</button>
            </form>
        </div>
    </div>
</div>
<div class="home_categories">
    <div class="container">
        <p class="top_txt">BEGLEIT - KATEGORIEN</p>
        <div class="intro">
            <span class="stylist">Freizeit</span>
            <a class="add" href="{{route('begleit.select_category', ["select_category"=>'private'])}}">ALLE KATEGORIEN</a>
        </div>
        <div class="imgs">
            <div class="item">
                <img src="{{url('public/assets/images/home/private/1.jpg')}}">
                <p class="option">Sport & Abenteur</p>
            </div>
            <div class="item">
                <img src="{{url('public/assets/images/home/private/2.jpg')}}">
                <p class="option">Gesundheit & Wellness</p>
            </div>
            <div class="item">
                <img src="{{url('public/assets/images/home/private/3.jpg')}}">
                <p class="option">Kunst & Kultur</p>
            </div>
            <div class="item">
                <img src="{{url('public/assets/images/home/private/4.jpg')}}">
                <p class="option">Essen & Trinken</p>
            </div>
            <div class="item">
                <img src="{{url('public/assets/images/home/private/5.jpg')}}">
                <p class="option">Reisen</p>
            </div>
        </div>
    </div>
    <div class="container">
        <p class="top_txt">BEGLEIT - KATEGORIEN</p>
        <div class="intro">
            <span class="stylist">Geschäftlich</span>
            <a class="add" href="{{route('begleit.select_category', ["select_category"=>'business'])}}">ALLE KATEGORIEN</a>
        </div>
        <div class="imgs">
            <div class="item">
                <img src="{{url('public/assets/images/home/business/1.jpg')}}">
                <p class="option">Sport & Abenteur</p>
            </div>
            <div class="item">
                <img src="{{url('public/assets/images/home/business/2.jpg')}}">
                <p class="option">Gesundheit & Wellness</p>
            </div>
            <div class="item">
                <img src="{{url('public/assets/images/home/business/3.jpg')}}">
                <p class="option">Kunst & Kultur</p>
            </div>
            <div class="item">
                <img src="{{url('public/assets/images/home/business/4.jpg')}}">
                <p class="option">Essen & Trinken</p>
            </div>
            <div class="item">
                <img src="{{url('public/assets/images/home/business/5.jpg')}}">
                <p class="option">Reisen</p>
            </div>
        </div>
    </div>
</div>
<div class="home profile_main">
    <div class="mobile_part">
        <div class="container">
            <div class="col-sm-4 col-md-4 col-lg-4 phone">
                <img src="{{url('public/assets/images/phone_0.png')}}">
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="comment_part">
                    <p class="top">COMPANION AGENTUR</p>
                    <div class="mid">
                        <span class="first">Nutzen Sie</span>
                        <span class="second">unsere App</span>
                    </div>
                    <div class="txt">
                        Unser Angebot können Sie auch mit der App verwenden: Diese ist einfach und simpel gemacht, damit Sie schnell den Mensch suchen, den Sie privat oder beruflich suchen. Einfach downloaden und mit der Suche starten.
                        Unser Netzwerk ist riesig – Seien Sie dabei und verbinden Sie sich!
                    </div>
                    <div class="phone_img">
                        <div class="apple">
                            <img class="apple_brand" src="{{url('public/assets/images/apple.png')}}">
                        </div>
                        <div class="google">
                            <img class="google_brand" src="{{url('public/assets/images/google play.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home profile_main">
    <div class="slider_part">
        <div class="container">
            <p class="first">BEGLEITPERSON FINDEN</p>
            <p class="second">Neue Mitglieder</p>

            <div class="owl-carousel owl-theme" id="carousel">
                @foreach($persons as $person)
                <div class="person">
                    <div class="photo">
                        <img src="{{$person['avarta']}}">
                    </div>
                    <div class="label_txt">
                        <span class="comment">{{$person['type']}}</span>
                    </div>
                    <div class="title">
                        <p class="name">{{$person['name']}}, {{$person['age']}}</p>
                        <p class="job">{{$person['job']}}</p>
                    </div>
                    <div class="middle-1">
                        <p class="txt">{{$person['category']}}</p>
                    </div>
                    <div class="middle-2">
                        <p class="txt">{{$person['hobbies']}}</p>
                    </div>
                    <div class="options">
                        <div class="opt">
                            <img src="{{url('public/assets/images/begleit/person_info_time.png')}}">
                            <p style="{{$person['login_status'] == 'online' ? 'color: green' : ''}}">{{$person['login_status']}}</p>
                        </div>
                        <div class="opt center">
                            <a href="{{url('/chat')}}">
                            <img src="{{url('public/assets/images/begleit/person_info_chat.png')}}">
                            <p>Chat</p>
                            </a>
                        </div>
                        <div class="opt">
                            <img src="{{url('public/assets/images/begleit/person_info_local.png')}}">
                            <p class="local">Salzburg</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div><!-- end of carousel -->
        </div>
    </div>
</div>

@include('include/footer')
