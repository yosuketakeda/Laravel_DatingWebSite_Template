@include('include/header')

@section('title')
    Companion Profil
@endsection
<div class="blank_overview"></div>
<div class="notification">
    <div class="container">
        <div class="pc row">
            <div class="col-sm-3 col-md-3 items">
                <img src="{{url('public/assets/images/begleit/notification_1_alam.png')}}">
                <img class="alam on" src="{{url('public/assets/images/begleit/alam_red.png')}}">
                <span class="num on">5</span>
                <div class="txt">
                    <p class="noti_title">Nachrichten</p>
                    <p class="noti_content">Du hast 5 Malls</p>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 items">
                <img src="{{url('public/assets/images/begleit/notification_2_alam.png')}}">
                <img class="alam on" src="{{url('public/assets/images/begleit/alam_red.png')}}">
                <span class="num on">9</span>
                <div class="txt">
                    <p class="noti_title">Besucher</p>
                    <p class="noti_content">Du bist bellebt!</p>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 items">
                <img src="{{url('public/assets/images/begleit/notification_3.png')}}">
                <img class="alam off" src="{{url('public/assets/images/begleit/alam_grey.png')}}">
                <span class="num off">0</span>
                <div class="txt">
                    <p class="noti_title">Zusagen</p>
                    <p class="noti_content">Du bist bellebt!</p>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 items">
                <img src="{{url('public/assets/images/begleit/notification_4.png')}}">
                <img class="alam off" src="{{url('public/assets/images/begleit/alam_grey.png')}}">
                <span class="num off">0</span>
                <div class="txt">
                    <p class="noti_title">Kalender</p>
                    <p class="noti_content">Nichts verpassen!</p>
                </div>
            </div>
        </div>
        <div class="sp">
            <div class="noti">
                <div class="items">
                    <img src="{{url('public/assets/images/begleit/notification_1_alam.png')}}">
                    <img class="alam on" src="{{url('public/assets/images/begleit/alam_red.png')}}">
                    <span class="num on">5</span>
                    <div class="txt">
                        <p class="noti_title">Nachrichten</p>
                        <p class="noti_content">Du hast 5 Malls</p>
                    </div>
                </div>
                <div class="items">
                    <img src="{{url('public/assets/images/begleit/notification_2_alam.png')}}">
                    <img class="alam on" src="{{url('public/assets/images/begleit/alam_red.png')}}">
                    <span class="num on">9</span>
                    <div class="txt">
                        <p class="noti_title">Besucher</p>
                        <p class="noti_content">Du bist bellebt!</p>
                    </div>
                </div>
            </div>
            <div class="noti">
                <div class="items">
                    <img src="{{url('public/assets/images/begleit/notification_3.png')}}">
                    <img class="alam off" src="{{url('public/assets/images/begleit/alam_grey.png')}}">
                    <span class="num off">0</span>
                    <div class="txt">
                        <p class="noti_title">Zusagen</p>
                        <p class="noti_content">Du bist bellebt!</p>
                    </div>
                </div>
                <div class="items">
                    <img src="{{url('public/assets/images/begleit/notification_4.png')}}">
                    <img class="alam off" src="{{url('public/assets/images/begleit/alam_grey.png')}}">
                    <span class="num off">0</span>
                    <div class="txt">
                        <p class="noti_title">Kalender</p>
                        <p class="noti_content">Nichts verpassen!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="navigation">
        <div class="before"><a class="link_before">VORHER</a></div>
        <div class="overview"><a class="link_overview">ZUR ÜBERSICHT</a></div>
        <div class="next"><a class="link_next">NÄCHSTER</a></div>
    </div>
</div>
<div class="profile_main">
    <div class="container">
        <div class="col-sm-7 col-md-7 col-lg-7">
            <div class="marked">
                <div class="verify">
                    <img src="{{url('public/assets/images/begleit/person_info_verify.png')}}">
                    <p class="txt">VERIFIZIERT</p>
                </div>
                <div class="status">
                    <img src="{{url('public/assets/images/begleit/person_info_status.png')}}">
                    <p class="txt">EXPERTENSTATUS</p>
                </div>
            </div>
            <div class="coverImg">
                <img src="{{url('public/assets/images/person/Anna_profile.jpg')}}">
            </div>
            <div class="otherImg">
                <div class="imgs">
                    <img src="{{url('public/assets/images/person/Anna_profile.jpg')}}">
                </div>
                <div class="imgs">
                    <img src="{{url('public/assets/images/person/Anna_profile.jpg')}}">
                </div>
                <div class="imgs">
                    <img src="{{url('public/assets/images/person/Anna_profile.jpg')}}">
                </div>
                <div class="imgs">
                    <img src="{{url('public/assets/images/person/Anna_profile.jpg')}}">
                </div>
                <div class="imgs">
                    <img src="{{url('public/assets/images/person/Anna_profile.jpg')}}">
                </div>
                <div class="imgs">
                    <img src="{{url('public/assets/images/person/Anna_profile.jpg')}}">
                </div>
                <div class="imgs">
                    <img src="{{url('public/assets/images/person/Anna_profile.jpg')}}">
                </div>
            </div>
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5">
            <div class="intro">
                <div class="title">
                    Anna Miller, 28
                    <img src="{{url('public/assets/images/profile/online.png')}}">
                </div>
                <p class="job">Ärztin</p>
            </div>
            <div class="label_txt">
                <span class="comment">GESCHÄFTLICH & FREIZEIT</span>
            </div>
            <p class="space_txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung, Sport & Abenteuer, Wellness</p>
            <div class="progress_status">
                <div class="item">
                    <div class="option">Fundiert</div>
                    <div class="sound">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width:87%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="option">Sportlich</div>
                    <div class="sound">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width:77%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="option">Eloquent</div>
                    <div class="sound">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width:55%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="option">Amüsant</div>
                    <div class="sound">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info" >
                <div class="property">
                    <div class="opt_name">Hobby:</div>
                    <div class="opt_val">Radfahren, Lesen, Kunst</div>
                </div>
                <div class="property">
                    <div class="opt_name">Sport:</div>
                    <div class="opt_val">Schwimmen, Yoga</div>
                </div>
                <div class="property">
                    <div class="opt_name">Fähigkeiten:</div>
                    <div class="opt_val">gut zuhören, humorvoll, selbstbewusst</div>
                </div>
                <div class="property">
                    <div class="opt_name">Sprachen:</div>
                    <div class="opt_val">English, Italienisch</div>
                </div>
                <div class="property">
                    <div class="opt_name">Wohnort:</div>
                    <div class="opt_val">Klagenfurt</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="para">
            <img src="{{url('public/assets/images/begleit/person_info_back.png')}}">
            <p>
            Geschäftsessen zur Verfügung. Meine Spezialisierung ist Medizin, ich weiß alles darüber und bin interessiert. Nach Prüfung habe ich auch den Expertenstatus erlangt. WIr können gerne davor skypen, damit Sie sehen, ob es für Sie passt. Ich freue mich auf spannende Gespräche und interessante Geschäftsbegegnungen.
            </p>
        </div>
        <p class="question">Möchtest du mit mir Kontakt aufnehmen?</p>
        <div class="gender">
            <div class="style">
                <label class="style_txt">Geschäftlich
                    <input type="radio" name="gen" checked="checked" value="woman">
                    <span class="gen_checkmark"></span>
                </label>
            </div>
            <div class="style">
                <label class="style_txt">Freizeit
                    <input type="radio" name="gen" value="man">
                    <span class="gen_checkmark"></span>
                </label>
            </div>
            <div class="style">
                <label class="style_txt">Beide
                    <input type="radio" name="gen" value="both">
                    <span class="gen_checkmark"></span>
                </label>
            </div>
            <a class="pc term">Termin wählen</a>
        </div>
        <a class="sp term">Termin wählen</a>
        <div class="answer_part">
            <textarea class="answer" rows="5" placeholder="Nachricht..."></textarea>
        </div>
        <button class="send_answer">ANFRAGE STARTEN</button>
    </div>
    <div class="slider_part">
        <div class="container">
            <p class="first">BEGLEITPERSON FINDEN</p>
            <p class="second">Mitglieder mit gleichem Profil</p>
            <div class="non_pad row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="person">
                        <div class="photo">
                            <img src="{{url('public/assets/images/person/Anna.jpg')}}">
                        </div>
                        <div class="label_txt">
                            <span class="comment">GESCHÄFTLICH & FREIZEIT</span>
                        </div>
                        <div class="title">
                            <p class="name">Anna Miller, 28</p>
                            <p class="job">Ärztin</p>
                        </div>
                        <div class="middle-1">
                            <p class="txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung</p>
                        </div>
                        <div class="middle-2">
                            <p class="txt">Kochen, Spazieren, Freunde treffen, Wellness, Familie</p>
                        </div>
                        <div class="options">
                            <div class="opt">
                                <img src="{{url('public/assets/images/begleit/person_info_time.png')}}">
                                <p>5 min</p>
                            </div>
                            <div class="opt center">
                                <img src="{{url('public/assets/images/begleit/person_info_chat.png')}}">
                                <p>Chat</p>
                            </div>
                            <div class="opt">
                                <img src="{{url('public/assets/images/begleit/person_info_local.png')}}">
                                <p class="local">Salzburg</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="person">
                        <div class="photo">
                            <img src="{{url('public/assets/images/person/Johana.jpg')}}">
                        </div>
                        <div class="label_txt">
                            <span class="comment">GESCHÄFTLICH & FREIZEIT</span>
                        </div>
                        <div class="title">
                            <p class="name">Anna Miller, 28</p>
                            <p class="job">Ärztin</p>
                        </div>
                        <div class="middle-1">
                            <p class="txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung</p>
                        </div>
                        <div class="middle-2">
                            <p class="txt">Kochen, Spazieren, Freunde treffen, Wellness, Familie</p>
                        </div>
                        <div class="options">
                            <div class="opt">
                                <img src="{{url('public/assets/images/begleit/person_info_time.png')}}">
                                <p>5 min</p>
                            </div>
                            <div class="opt center">
                                <img src="{{url('public/assets/images/begleit/person_info_chat.png')}}">
                                <p>Chat</p>
                            </div>
                            <div class="opt">
                                <img src="{{url('public/assets/images/begleit/person_info_local.png')}}">
                                <p class="local">Salzburg</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="person">
                        <div class="photo">
                            <img src="{{url('public/assets/images/person/Sabrin.jpg')}}">
                        </div>
                        <div class="label_txt">
                            <span class="comment">GESCHÄFTLICH & FREIZEIT</span>
                        </div>
                        <div class="title">
                            <p class="name">Anna Miller, 28</p>
                            <p class="job">Ärztin</p>
                        </div>
                        <div class="middle-1">
                            <p class="txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung</p>
                        </div>
                        <div class="middle-2">
                            <p class="txt">Kochen, Spazieren, Freunde treffen, Wellness, Familie</p>
                        </div>
                        <div class="options">
                            <div class="opt">
                                <img src="{{url('public/assets/images/begleit/person_info_time.png')}}">
                                <p>5 min</p>
                            </div>
                            <div class="opt center">
                                <img src="{{url('public/assets/images/begleit/person_info_chat.png')}}">
                                <p>Chat</p>
                            </div>
                            <div class="opt">
                                <img src="{{url('public/assets/images/begleit/person_info_local.png')}}">
                                <p class="local">Salzburg</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="person">
                        <div class="photo">
                            <img src="{{url('public/assets/images/person/Anna.jpg')}}">
                        </div>
                        <div class="label_txt">
                            <span class="comment">GESCHÄFTLICH & FREIZEIT</span>
                        </div>
                        <div class="title">
                            <p class="name">Anna Miller, 28</p>
                            <p class="job">Ärztin</p>
                        </div>
                        <div class="middle-1">
                            <p class="txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung</p>
                        </div>
                        <div class="middle-2">
                            <p class="txt">Kochen, Spazieren, Freunde treffen, Wellness, Familie</p>
                        </div>
                        <div class="options">
                            <div class="opt">
                                <img src="{{url('public/assets/images/begleit/person_info_time.png')}}">
                                <p>5 min</p>
                            </div>
                            <div class="opt center">
                                <img src="{{url('public/assets/images/begleit/person_info_chat.png')}}">
                                <p>Chat</p>
                            </div>
                            <div class="opt">
                                <img src="{{url('public/assets/images/begleit/person_info_local.png')}}">
                                <p class="local">Salzburg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pad">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="person">
                            <div class="photo">
                                <img src="{{url('public/assets/images/person/Anna.jpg')}}">
                            </div>
                            <div class="label_txt">
                                <span class="comment">GESCHÄFTLICH & FREIZEIT</span>
                            </div>
                            <div class="title">
                                <p class="name">Anna Miller, 28</p>
                                <p class="job">Ärztin</p>
                            </div>
                            <div class="middle-1">
                                <p class="txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung</p>
                            </div>
                            <div class="middle-2">
                                <p class="txt">Kochen, Spazieren, Freunde treffen, Wellness, Familie</p>
                            </div>
                            <div class="options">
                                <div class="opt">
                                    <img src="{{url('public/assets/images/begleit/person_info_time.png')}}">
                                    <p>5 min</p>
                                </div>
                                <div class="opt center">
                                    <img src="{{url('public/assets/images/begleit/person_info_chat.png')}}">
                                    <p>Chat</p>
                                </div>
                                <div class="opt">
                                    <img src="{{url('public/assets/images/begleit/person_info_local.png')}}">
                                    <p class="local">Salzburg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="person">
                            <div class="photo">
                                <img src="{{url('public/assets/images/person/Johana.jpg')}}">
                            </div>
                            <div class="label_txt">
                                <span class="comment">GESCHÄFTLICH & FREIZEIT</span>
                            </div>
                            <div class="title">
                                <p class="name">Anna Miller, 28</p>
                                <p class="job">Ärztin</p>
                            </div>
                            <div class="middle-1">
                                <p class="txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung</p>
                            </div>
                            <div class="middle-2">
                                <p class="txt">Kochen, Spazieren, Freunde treffen, Wellness, Familie</p>
                            </div>
                            <div class="options">
                                <div class="opt">
                                    <img src="{{url('public/assets/images/begleit/person_info_time.png')}}">
                                    <p>5 min</p>
                                </div>
                                <div class="opt center">
                                    <img src="{{url('public/assets/images/begleit/person_info_chat.png')}}">
                                    <p>Chat</p>
                                </div>
                                <div class="opt">
                                    <img src="{{url('public/assets/images/begleit/person_info_local.png')}}">
                                    <p class="local">Salzburg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="person">
                            <div class="photo">
                                <img src="{{url('public/assets/images/person/Sabrin.jpg')}}">
                            </div>
                            <div class="label_txt">
                                <span class="comment">GESCHÄFTLICH & FREIZEIT</span>
                            </div>
                            <div class="title">
                                <p class="name">Anna Miller, 28</p>
                                <p class="job">Ärztin</p>
                            </div>
                            <div class="middle-1">
                                <p class="txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung</p>
                            </div>
                            <div class="middle-2">
                                <p class="txt">Kochen, Spazieren, Freunde treffen, Wellness, Familie</p>
                            </div>
                            <div class="options">
                                <div class="opt">
                                    <img src="{{url('public/assets/images/begleit/person_info_time.png')}}">
                                    <p>5 min</p>
                                </div>
                                <div class="opt center">
                                    <img src="{{url('public/assets/images/begleit/person_info_chat.png')}}">
                                    <p>Chat</p>
                                </div>
                                <div class="opt">
                                    <img src="{{url('public/assets/images/begleit/person_info_local.png')}}">
                                    <p class="local">Salzburg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="person">
                            <div class="photo">
                                <img src="{{url('public/assets/images/person/Anna.jpg')}}">
                            </div>
                            <div class="label_txt">
                                <span class="comment">GESCHÄFTLICH & FREIZEIT</span>
                            </div>
                            <div class="title">
                                <p class="name">Anna Miller, 28</p>
                                <p class="job">Ärztin</p>
                            </div>
                            <div class="middle-1">
                                <p class="txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung</p>
                            </div>
                            <div class="middle-2">
                                <p class="txt">Kochen, Spazieren, Freunde treffen, Wellness, Familie</p>
                            </div>
                            <div class="options">
                                <div class="opt">
                                    <img src="{{url('public/assets/images/begleit/person_info_time.png')}}">
                                    <p>5 min</p>
                                </div>
                                <div class="opt center">
                                    <img src="{{url('public/assets/images/begleit/person_info_chat.png')}}">
                                    <p>Chat</p>
                                </div>
                                <div class="opt">
                                    <img src="{{url('public/assets/images/begleit/person_info_local.png')}}">
                                    <p class="local">Salzburg</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navi">
                <img class="navi_dot" src="{{url('public/assets/images/profile/navi_dot.png')}}">
                <img class="navi_dot" src="{{url('public/assets/images/profile/navi_dot.png')}}">
                <img class="navi_dot selected" src="{{url('public/assets/images/profile/navi_dot_selected.png')}}">
                <img class="navi_dot" src="{{url('public/assets/images/profile/navi_dot.png')}}">
                <img class="navi_dot" src="{{url('public/assets/images/profile/navi_dot.png')}}">
            </div>
        </div>
    </div>
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
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
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

@include('include/footer')
