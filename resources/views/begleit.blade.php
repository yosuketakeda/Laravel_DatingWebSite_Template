

@include('include/header')

@section('title')
    Companion Begleitperson
@endsection
@if(!Auth::check())
<div class="login_alam">
    <div class="body">
        <p>Wenn Sie eingeloggt sind, können Sie eine Umkreis-Suche machen</p>
    </div>
</div>
@endif
<div class="blank_begleit"></div>
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
</div><!-- notification -->
<div class="intro_title">
    <div class="container">Begleitperson finden</div>
</div>
<div class="main row">
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="left">
                <div class="style_sector">
                    <div class="style">
                        <label class="style_txt">Geschäftlich
                            <input class="business" type="radio" name="cat"
                            {{ empty($home_vals) ?
                                   empty($sel_category) ? 'checked=checked'
                                      : $sel_category == 'business' ?  'checked=checked' : ''
                               : $home_vals['type'] == "business" ? 'checked=checked' : ''}} value="business">
                            <span class="cat_checkmark"></span>
                        </label>
                    </div>
                    <div class="style">
                        <label class="style_txt">Freizeit
                            <input class="private" type="radio" name="cat"
                            {{ empty($home_vals) ?
                                   empty($sel_category) ? ''
                                      : $sel_category == 'private' ?  'checked=checked' : ''
                               : $home_vals['type'] == "private" ? 'checked=checked' : ''}} value="private">
                            <span class="cat_checkmark"></span>
                        </label>
                    </div>
                    <div class="style">
                        <label class="style_txt">Beide
                            <input class="both" type="radio" name="cat" value="both">
                            <span class="cat_checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="category">
                    <select id="business" class="cat_list">
                        <option value="all" selected>KATEGORIE WÄHLEN</option>
                        <option value="cat_val">Geschäftsessen</option>
                        <option value="cat_val">Geschäftstreffen</option>
                        <option value="cat_val">Geschäftsreise</option>
                        <option value="cat_val">fachliche Begleitung</option>
                        <option value="cat_val">Manager Begleitung</option>
                        <option value="cat_val">Ersatzbegleitung / Alibibegleitung</option>
                    </select>
                    <select id="private" class="cat_list">
                        <option value="all" selected>KATEGORIE WÄHLEN</option>
                        <option value="cat_val">Sport & Abenteuer</option>
                        <option value="cat_val">Gesundheit & Wellness</option>
                        <option value="cat_val">Kunst & Kultur</option>
                        <option value="cat_val">Bildung</option>
                        <option value="cat_val">Essen & Trinken</option>
                        <option value="cat_val">Reisen</option>
                    </select>
                    <select id="both" class="cat_list">
                        <option value="all" selected>KATEGORIE WÄHLEN</option>
                        <option value="cat_val">Geschäftsessen</option>
                        <option value="cat_val">Geschäftstreffen</option>
                        <option value="cat_val">Geschäftsreise</option>
                        <option value="cat_val">fachliche Begleitung</option>
                        <option value="cat_val">Manager Begleitung</option>
                        <option value="cat_val">Ersatzbegleitung / Alibibegleitung</option>
                        <option value="cat_val">Sport & Abenteuer</option>
                        <option value="cat_val">Gesundheit & Wellness</option>
                        <option value="cat_val">Kunst & Kultur</option>
                        <option value="cat_val">Bildung</option>
                        <option value="cat_val">Essen & Trinken</option>
                        <option value="cat_val">Reisen</option>
                    </select>
                </div>
                <div class="gender">
                    <div class="style">
                        <label class="style_txt">Frau
                            <input type="radio" name="gen" {{ empty($home_vals) ? 'checked=checked' : $home_vals['gender'] == "woman" ? 'checked=checked' : ''}} value="woman">
                            <span class="gen_checkmark"></span>
                        </label>
                    </div>
                    <div class="style">
                        <label class="style_txt">Mann
                            <input type="radio" name="gen" {{ empty($home_vals) ? '' : $home_vals['gender'] == "man" ? 'checked=checked' : ''}} value="man">
                            <span class="gen_checkmark"></span>
                        </label>
                    </div>
                    <div class="style">
                        <label class="style_txt">Beide
                            <input type="radio" name="gen" value="both">
                            <span class="gen_checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="alter_range">
                    <div class="txt_bundle">
                        <p class="txt">Alter</p>
                        <span class="min"></span>
                        <span class="max"></span>
                    </div>
                    <div id="alter-slider-range"></div>
                </div>
                <div class="verify">
                    <div class="style">
                        <label class="style_txt">Verifiziert
                            <input type="radio" name="verify" checked="checked" value="verify">
                            <span class="verify_checkmark"></span>
                        </label>
                    </div>
                    <div class="style">
                        <label class="style_txt">Expertenstatus
                            <input type="radio" name="verify" value="expert">
                            <span class="verify_checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="category">
                    <select name="name" id="lang_list">
                        <option value="all" selected>SPRACHEN</option>
                        <option value="cat_val">Englisch</option>
                        <option value="cat_val">Spanisch</option>
                        <option value="cat_val">Italienisch</option>
                        <option value="cat_val">Französisch</option>
                        <option value="cat_val">Russisch</option>
                        <option value="cat_val">Türkisch</option>
                        <option value="cat_val">Portugiesisch</option>
                        <option value="cat_val">Niederländisch</option>
                        <option value="cat_val">Polnisch</option>
                        <option value="cat_val">Schwedisch</option>
                        <option value="cat_val">Dänisch</option>
                        <option value="cat_val">Norwegisch</option>
                        <option value="cat_val">Indonesisch</option>
                        <option value="cat_val">Kroatisch</option>
                    </select>
                </div>
                @if(Auth::Check())
                    <div class="distance_range">
                        <div class="txt_bundle">
                            <p class="txt">Umkreis</p>
                            <span class="str">Wien</span>
                            <span class="val"></span>
                        </div>
                        <div id="distance-slider-range"></div>
                    </div>
                @endif
                <div class="price_range">
                    <div class="txt_bundle">
                        <p class="txt">Preis</p>
                        <span class="min"></span>
                        <span class="max"></span>
                    </div>
                    <div id="price-slider-range"></div>
                </div>
            </div>
        </div>
        <div class="contents col-sm-8 col-md-8 col-lg-8">
            <div class="right">
                <div class="person row">
                    <div class="photo col-sm-4 col-md-4 col-lg-4">
                        <img src="{{url('public/assets/images/person/Anna.jpg')}}" />
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
                    <div class="info col-sm-8 col-md-8 col-lg-8">
                        <div class="top">
                            <div class="user">
                                <p class="name">Anna Miller, 28</p>
                                <p class="job">Ärztin</p>
                            </div>
                            <div class="imgs">
                                <div class="verified">
                                    <img src="{{url('public/assets/images/begleit/person_info_verify.png')}}">
                                    <p class="txt">VERIFIZIERT</p>
                                </div>
                                <div class="experted">
                                    <img src="{{url('public/assets/images/begleit/person_info_status.png')}}">
                                    <p class="txt">EXPERTENSTATUS</p>
                                </div>
                            </div>
                        </div>
                        <div class="middle-1">
                            <p class="txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung</p>
                        </div>
                        <div class="middle-2">
                            <p class="txt">Kochen, Spazieren, Freunde treffen, Wellness, Familie</p>
                        </div>
                        <div class="bottom">
                            <img src="{{url('public/assets/images/begleit/person_info_back.png')}}">
                            <p class="txt">Geschäftsessen zur Verfügung. Meine Spezialisierung ist Medizin, ich weiß alles darüber und bin interessiert. Nach Prüfung habe ich auch den Expertenstatus erlangt. WIr können gerne davor skypen, damit Sie sehen, ob es für Sie passt. </p>
                            <button class="profile">ZUM PROFIL</button>
                        </div>
                    </div>
                </div>
                <div class="person row">
                    <div class="photo col-sm-4 col-md-4 col-lg-4">
                        <img src="{{url('public/assets/images/person/Johana.jpg')}}" />
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
                    <div class="info col-sm-8 col-md-8 col-lg-8">
                        <div class="top">
                            <div class="user">
                                <p class="name">Anna Miller, 28</p>
                                <p class="job">Ärztin</p>
                            </div>
                            <div class="imgs">
                                <div class="verified">
                                    <img src="{{url('public/assets/images/begleit/person_info_verify.png')}}">
                                    <p class="txt">VERIFIZIERT</p>
                                </div>
                                <div class="experted">
                                    <img src="{{url('public/assets/images/begleit/person_info_status.png')}}">
                                    <p class="txt">EXPERTENSTATUS</p>
                                </div>
                            </div>
                        </div>
                        <div class="middle-1">
                            <p class="txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung</p>
                        </div>
                        <div class="middle-2">
                            <p class="txt">Kochen, Spazieren, Freunde treffen, Wellness, Familie</p>
                        </div>
                        <div class="bottom">
                            <img src="{{url('public/assets/images/begleit/person_info_back.png')}}">
                            <p class="txt">Geschäftsessen zur Verfügung. Meine Spezialisierung ist Medizin, ich weiß alles darüber und bin interessiert. Nach Prüfung habe ich auch den Expertenstatus erlangt. WIr können gerne davor skypen, damit Sie sehen, ob es für Sie passt. </p>
                            <button class="profile">ZUM PROFIL</button>
                        </div>
                    </div>
                </div>
                <div class="person row">
                    <div class="photo col-sm-4 col-md-4 col-lg-4">
                        <img src="{{url('public/assets/images/person/Sabrin.jpg')}}" />
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
                    <div class="info col-sm-8 col-md-8 col-lg-8">
                        <div class="top">
                            <div class="user">
                                <p class="name">Anna Miller, 28</p>
                                <p class="job">Ärztin</p>
                            </div>
                            <div class="imgs">
                                <div class="verified">
                                    <img src="{{url('public/assets/images/begleit/person_info_verify.png')}}">
                                    <p class="txt">VERIFIZIERT</p>
                                </div>
                                <div class="experted">
                                    <img src="{{url('public/assets/images/begleit/person_info_status.png')}}">
                                    <p class="txt">EXPERTENSTATUS</p>
                                </div>
                            </div>
                        </div>
                        <div class="middle-1">
                            <p class="txt">Ersatzbegleitung, Fachliche Begleitung, Manager Begleitung</p>
                        </div>
                        <div class="middle-2">
                            <p class="txt">Kochen, Spazieren, Freunde treffen, Wellness, Familie</p>
                        </div>
                        <div class="bottom">
                            <img src="{{url('public/assets/images/begleit/person_info_back.png')}}">
                            <p class="txt">Geschäftsessen zur Verfügung. Meine Spezialisierung ist Medizin, ich weiß alles darüber und bin interessiert. Nach Prüfung habe ich auch den Expertenstatus erlangt. WIr können gerne davor skypen, damit Sie sehen, ob es für Sie passt. </p>
                            <button class="profile">ZUM PROFIL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="profile_main">
        <div class="container">
            <p class="question">Mail an alle Anbietenden:</p>
            <div class="gender">
                <div class="style">
                    <label class="style_txt">Geschäftlich
                        <input type="radio" name="all_email" value="business">
                        <span class="gen_checkmark"></span>
                    </label>
                </div>
                <div class="style">
                    <label class="style_txt">Freizeit
                        <input type="radio" name="all_email" value="private">
                        <span class="gen_checkmark"></span>
                    </label>
                </div>
                <div class="style">
                    <label class="style_txt">Beide
                        <input type="radio" name="all_email" value="both">
                        <span class="gen_checkmark"></span>
                    </label>
                </div>
                <a class="pc term">Termin wählen</a>
            </div>
            <a class="sp term">Termin wählen</a>
            <div class="allMail_title">Betreff: Allgemein Anfrage</div>
            <div class="answer_part">
                <textarea class="answer" rows="5" placeholder="Nachricht..."></textarea>
            </div>
            <button class="send_answer">ANFRAGE STARTEN</button>
        </div>
    </div>
</div>
@include('include/footer')
<script>
$(document).ready(function(){
    <?php
        if(!empty($home_vals)){
            if($home_vals['type'] == "business"){
        ?>
            $("#business").css("display","block");
            $("#private").css("display","none");
            $("#both").css("display","none");
        <?php
            }else{
        ?>
            $("#business").css("display","none");
            $("#private").css("display","block");
            $("#both").css("display","none");
        <?php
            }

        }
        if(!empty($sel_category)){
            if($sel_category == 'business'){
        ?>
            $("#business").css("display","block");
            $("#private").css("display","none");
            $("#both").css("display","none");
        <?php
            }else{
        ?>
            $("#business").css("display","none");
            $("#private").css("display","block");
            $("#both").css("display","none");
        <?php
            }
        }
    ?>
});
</script>
