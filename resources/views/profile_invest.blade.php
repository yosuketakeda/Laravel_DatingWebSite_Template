@include('include/header')

@section('title')
    Companion Profil anlegen
@endsection

<div class="profile_invest_top">
    <div class="container">
        <p class="txt">Profil anlegen</p>
    </div>
</div>
<div class="profile_invest_status">
    <div class="container">
        <div class="items">
            <div class="item">
                <a href="step-1" class="step-link">
                    <div class="num">
                        <span class="val">01</span>
                    </div>
                </a>
                <img src="{{ (str_replace('step-', '', Request::segment(2)) >= 1) || (Request::segment(2) == 'final-step') ? '../public/assets/images/verified.png' : '../public/assets/images/nonverified.png' }}">
                <div class="txt">
                    <p class="first">Angebot</p>
                    <p class="second">info</p>
                </div>
            </div>
            <div class="item">
                <a href="{{empty($offer_meta) ? 'step-1' : 'step-2'}}" class="step-link">
                    <div class="num">
                        <span class="val">02</span>
                    </div>
                </a>
                <img src="{{ (str_replace('step-', '', Request::segment(2)) >= 2) || (Request::segment(2) == 'final-step') ? '../public/assets/images/verified.png' : '../public/assets/images/nonverified.png' }}">
                <div class="txt">
                    <p class="first">Weitere Angaben</p>
                    <p class="second">info</p>
                </div>
            </div>
            <div class="item">
                <a href="{{empty($offer_meta) ? 'step-1' : 'step-3'}}" class="step-link">
                    <div class="num">
                        <span class="val">03</span>
                    </div>
                </a>
                <img src="{{ (str_replace('step-', '', Request::segment(2)) >= 3) || (Request::segment(2) == 'final-step') ? '../public/assets/images/verified.png' : '../public/assets/images/nonverified.png' }}">
                <div class="txt">
                    <p class="first">Besonderheiten</p>
                    <p class="second">info</p>
                </div>
            </div>
            <div class="item">
                <a href="{{empty($offer_meta) ? 'step-1' : 'step-4'}}" class="step-link">
                    <div class="num">
                        <span class="val">04</span>
                    </div>
                </a>
                <img src="{{ (str_replace('step-', '', Request::segment(2)) >= 4) || (Request::segment(2) == 'final-step') ? '../public/assets/images/verified.png' : '../public/assets/images/nonverified.png' }}">
                <div class="txt">
                    <p class="first">Foto</p>
                    <p class="second">info</p>
                </div>
            </div>
            <div class="item">
                <a href="{{empty($offer_meta) ? 'step-1' : 'step-5?1'}}" class="step-link">
                    <div class="num">
                        <span class="val">05</span>
                    </div>
                </a>
                <img src="{{ (str_replace('step-', '', Request::segment(2)) >= 5) || (Request::segment(2) == 'final-step') ? '../public/assets/images/verified.png' : '../public/assets/images/nonverified.png' }}">
                <div class="txt">
                    <p class="first">Fragebogen</p>
                    <p class="second">info</p>
                </div>
            </div>
        </div>
    </div>
</div><!-- status -->
<div class="profile_invest_main">
    <div class="container">
        <div class="step-1">
            <form action="{{route('offer.step_1')}}" method="POST">
                @csrf
                <p class="title">Schreiben Sie hier, genau was Sie anbieten</p>
                <div class="gender">
                    <div class="style">
                        <label class="style_txt">Geschäftlich
                            <input type="radio" name="type" {{ empty($offer_meta) ? 'checked=checked' : $offer_meta[0]->type == 1 ? 'checked=checked' : '' }}  value="1" required>
                            <span class="gen_checkmark"></span>
                        </label>
                    </div>
                    <div class="style">
                        <label class="style_txt">Freizeit
                            <input type="radio" name="type" {{ empty($offer_meta) ? '' : $offer_meta[0]->type == 2 ? 'checked=checked' : '' }}  value="2" required>
                            <span class="gen_checkmark"></span>
                        </label>
                    </div>
                    <div class="style">
                        <label class="style_txt">Beide
                            <input type="radio" name="type" {{ empty($offer_meta) ? '' : $offer_meta[0]->type == 3 ? 'checked=checked' : '' }} value="3" required>
                            <span class="gen_checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="text_field">
                    <textarea name="offer_comment" class="text_area" rows="5" placeholder="" required>{{ empty($offer_meta) ? '' : $offer_meta[0]->comment }}</textarea>
                </div>
                <button class="continue">WEITER</button>
            </form>
        </div><!-- step-1 -->
        <div class="step-2">
            <form action="{{route('offer.step_2')}}" method="POST" id="step2_form">
                @csrf
                <p class="title">Weitere Info</p>
                <div class="home_categories">
                    <div style="display: none">
                        {{empty($offer_meta) ? $old_type = "" : $old_type = $offer_meta[0]->type}}
                        {{$type == '' ? $offer_type = $old_type : $offer_type = $type}}
                    </div>
                    @if($offer_type == '2')
                        <div class="type">
                            <div class="style">
                                <label class="style_txt">Freizeit
                                    <input type="radio" name="step2-type-2" checked="checked" value="private">
                                    <span class="gen_checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="imgs">
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/private/1.jpg')}}">
                                    <p class="option">Sport & Abenteur</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Sport & Abenteur') !== false ? 'checked=checked' : ''}} value="Sport & Abenteur" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/private/2.jpg')}}">
                                    <p class="option">Gesundheit & Wellness</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Gesundheit & Wellness') !== false ? 'checked=checked' : ''}} value="Gesundheit & Wellness" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/private/3.jpg')}}">
                                    <p class="option">Kunst & Kultur</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Kunst & Kultur') !== false ? 'checked=checked' : ''}} value="Kunst & Kultur" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/private/4.jpg')}}">
                                    <p class="option">Essen & Trinken</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Essen & Trinken') !== false ? 'checked=checked' : ''}} value="Essen & Trinken" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/private/5.jpg')}}">
                                    <p class="option">Reisen</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Reisen') !== false ? 'checked=checked' : ''}} value="Reisen" >
                                </label>
                            </div>
                        </div>
                    @endif
                    @if($offer_type == '1')
                        <div class="type">
                            <div class="style">
                                <label class="style_txt">Geschäftlich
                                    <input type="radio" name="step2-type-1" checked="checked" value="business">
                                    <span class="gen_checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="imgs">
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/business/1.jpg')}}">
                                    <p class="option">Geschäftsessen</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Geschäftsessen') !== false ? 'checked=checked' : ''}} value="Geschäftsessen" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/business/2.jpg')}}">
                                    <p class="option">Geschäftstreffen</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Geschäftstreffen') !== false ? 'checked=checked' : ''}} value="Geschäftstreffen" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/business/3.jpg')}}">
                                    <p class="option">Geschäftsreisen</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Geschäftsreisen') !== false ? 'checked=checked' : ''}} value="Geschäftsreisen" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/business/4.jpg')}}">
                                    <p class="option">Fachliche Begleitung</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Fachliche Begleitung') !== false ? 'checked=checked' : ''}} value="Fachliche Begleitung" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/business/5.jpg')}}">
                                    <p class="option">Manager Begleitung</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Manager Begleitung') !== false ? 'checked=checked' : ''}} value="Manager Begleitung" >
                                </label>
                            </div>
                        </div>
                    @endif
                    @if($offer_type == '3')
                        <label style="font-size: 19px; padding-left: 6px; color: #6d6e70;">Freizeit</label>
                        <div class="imgs">
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/private/1.jpg')}}">
                                    <p class="option">Sport & Abenteur</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Sport & Abenteur') !== false ? 'checked=checked' : ''}} value="Sport & Abenteur" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/private/2.jpg')}}">
                                    <p class="option">Gesundheit & Wellness</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Gesundheit & Wellness') !== false ? 'checked=checked' : ''}} value="Gesundheit & Wellness" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/private/3.jpg')}}">
                                    <p class="option">Kunst & Kultur</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Kunst & Kultur') !== false ? 'checked=checked' : ''}} value="Kunst & Kultur" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/private/4.jpg')}}">
                                    <p class="option">Essen & Trinken</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Essen & Trinken') !== false ? 'checked=checked' : ''}} value="Essen & Trinken" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/private/5.jpg')}}">
                                    <p class="option">Reisen</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Reisen') !== false ? 'checked=checked' : ''}} value="Reisen" >
                                </label>
                            </div>
                        </div>
                        <label style="font-size: 19px; padding-left: 6px; color: #6d6e70;">Geschäftlich</label>
                        <div class="imgs">
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/business/1.jpg')}}">
                                    <p class="option">Geschäftsessen</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Geschäftsessen') !== false ? 'checked=checked' : ''}} value="Geschäftsessen" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/business/2.jpg')}}">
                                    <p class="option">Geschäftstreffen</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Geschäftstreffen') !== false ? 'checked=checked' : ''}} value="Geschäftstreffen" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/business/3.jpg')}}">
                                    <p class="option">Geschäftsreisen</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Geschäftsreisen') !== false ? 'checked=checked' : ''}} value="Geschäftsreisen" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/business/4.jpg')}}">
                                    <p class="option">Fachliche Begleitung</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Fachliche Begleitung') !== false ? 'checked=checked' : ''}} value="Fachliche Begleitung" >
                                </label>
                            </div>
                            <div class="item">
                                <label>
                                    <img src="{{url('public/assets/images/home/business/5.jpg')}}">
                                    <p class="option">Manager Begleitung</p>
                                    <input type="checkbox" name="step2-option[]" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->category, 'Manager Begleitung') !== false ? 'checked=checked' : ''}} value="Manager Begleitung" >
                                </label>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="options">
                    <div class="price">
                        <span class="sub-title">Preis</span>
                        <input type="text" value="{{empty($offer_meta) ? '' : $offer_meta[0]->price}}" name="offer_price" required>
                        <span class="sub-title"> €</span>
                    </div>
                    <div class="cats">
                        <div class="sub-title">Höchste/aktuelle Ausbildung</div>
                        <div class="bundle">
                            <div class="up">
                                <div class="style">
                                    <label class="style_txt">Universität
                                        <input type="radio" name="university" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->education, 'university') !== false ? 'checked=checked' : ''}} value="university" required>
                                        <span class="gen_checkmark"></span>
                                    </label>
                                </div>
                                <div class="style">
                                    <label class="style_txt">Fachhochschule
                                        <input type="radio" name="university" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->education, 'school of application sciences') !== false ? 'checked=checked' : ''}} value="school of application sciences" required>
                                        <span class="gen_checkmark"></span>
                                    </label>
                                </div>
                                <div class="style last">
                                    <label class="style_txt">Maturaschule
                                        <input type="radio" name="university" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->education, 'secondary school') !== false ? 'checked=checked' : ''}} value="secondary school" required>
                                        <span class="gen_checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="down">
                                <div class="style">
                                    <label class="style_txt">BerufSchule
                                        <input type="radio" name="university" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->education, 'job school') !== false ? 'checked=checked' : ''}} value="job school" required>
                                        <span class="gen_checkmark"></span>
                                    </label>
                                </div>
                                <div class="style">
                                    <label class="style_txt">PflichtSchule
                                        <input type="radio" name="university" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->education, 'duty school') !== false ? 'checked=checked' : ''}} value="duty school" required>
                                        <span class="gen_checkmark"></span>
                                    </label>
                                </div>
                                <div class="style last">
                                    <label class="style_txt">Sonstiges
                                        <input id="others" type="radio" name="university" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->education, 'others') !== false ? 'checked=checked' : ''}} value="others" required>
                                        <span class="gen_checkmark"></span>
                                    </label>
                                    <input id="others_detail" type="text" name="others" value="{{empty($offer_meta) ? '' : strpos($offer_meta[0]->education, 'others') !== false ? explode('|', $offer_meta[0]->education)[0] : ''}}" style="opacity: 1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="current-job">
                        <span class="sub-title">Derzeitiger Beruf</span>
                        <div>
                            <input type="text" value="{{empty($offer_meta) ? '' : $offer_meta[0]->job}}" name="current_job" required>
                        </div>
                    </div>
                    <div class="religion">
                        <span class="sub-title">Religion</span>
                        <div>
                            <select id="business" class="cat_list" required>
                                <option value="Buddhismus" {{empty($offer_meta) ? 'selected' : strpos($offer_meta[0]->religion, 'Buddhismus') !== false ? 'selected' : ''}}>Buddhismus</option>
                                <option value="Christentum" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->religion, 'Christentum') !== false ? 'selected' : ''}}>Christentum</option>
                                <option value="Hinduismus" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->religion, 'Hinduismus') !== false ? 'selected' : ''}}>Hinduismus</option>
                                <option value="Judentum" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->religion, 'Judentum') !== false ? 'selected' : ''}}>Judentum</option>
                                <option value="Islam" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->religion, 'Islam') !== false ? 'selected' : ''}}>Islam</option>
                                <option value="Sonstiges" {{empty($offer_meta) ? '' : strpos($offer_meta[0]->religion, 'Sonstiges') !== false ? 'selected' : ''}}>Sonstiges</option>
                            </select>
                            <input type='text' name="religion" value="Buddhismus" hidden>
                        </div>
                    </div>
                    <div class="cats">
                        <div class="style" style="margin-right: 40px;">
                            <label class="style_txt">Raucher
                                <input type="radio" name="smoking" {{empty($offer_meta) ? '' : $offer_meta[0]->smoking == 0 ? 'checked=checked' : ''}} value="0" required>
                                <span class="gen_checkmark"></span>
                            </label>
                        </div>
                        <div class="style">
                            <label class="style_txt">Nichtraucher
                                <input type="radio" name="smoking" {{empty($offer_meta) ? '' : $offer_meta[0]->smoking == 1 ? 'checked=checked' : ''}} value="1" required>
                                <span class="gen_checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="continue">BESONDERHEITEN</button>
            </form>
        </div><!-- step-2 -->
        <div class="step-3">
            <form action="{{route('offer.step_3')}}" method="POST">
                @csrf
                <p class="title">Besonderheiten</p>
                <p class="intro">Hier können Sie genau beschreiben, warum man Ihr Angebot wählen sollte.</p>
                <p class="intro">Sind Sie Spezialist auf einem Gebiet? Verfügen Sie über bestimmte Fähigkeiten?</p>
                <div class="text_field">
                    <textarea class="text_area" name="skill_comment" rows="5" placeholder="">{{empty($offer_meta) ? '' : $offer_meta[0]->skill_comment}}</textarea>
                </div>
                <button class="continue">FOTO HOCHLADEN</button>
            </form>
        </div><!-- step-3 -->
        <div class="step-4">
            <p class="title">Foto hochladen</p>
            <p class="intro">Mehr Bilder hochladen</p>
            <div class="photo_rect row">
                @foreach ($imgs as $img)
                    @if(strpos($img, ".png") !== false)
                    <div class="item col-sm-2 col-md-2">
                        <img id="tempImg" src="{{url('public/upload/offer/'.Auth::user()->id.'/'.$img)}}">
                        <div class="del_icon">
                            <img class="img_delete" src="{{url('public/assets/images/profile/delete.png')}}">
                        </div>
                    </div>
                    @endif
                @endforeach
                <div class="upload_btn col-md-2 col-sm-2">
                    <img id="img_btn" src="{{url('public/assets/images/profile_invest/upload_photo.png')}}">
                </div>
            </div>
            <div class="back">
                <div class="upload_part">
                    <div class="text-center">
                        <div id="upload-demo"></div>
                    </div>
                    <div class="" style="">
                        <input type="file" id="image">
                        <div class="btn btn-primary btn-block crop-image" style="margin-top:2%">Crop Image</div>
                    </div>
                </div>
            </div>
            <button class="continue" id="uploadImg_btn">FOTO HOCHLADEN</button>
        </div><!-- step-4 -->
    </div>
</div><!-- step-1 ~ step-4 -->
<div class="step-5">
    @if(strpos(Request::fullUrl(), '?1') !== false)
    <form id="query_answer" action="{{route('offer.step_5_1')}}" method="POST">
    @elseif(strpos(Request::fullUrl(), '?2') !== false)
    <form id="query_answer" action="{{route('offer.step_5_2')}}" method="POST">
    @elseif(strpos(Request::fullUrl(), '?3') !== false)
    <form id="query_answer" action="{{route('offer.step_5_3')}}" method="POST">
    @elseif(strpos(Request::fullUrl(), '?4') !== false)
    <form id="query_answer" action="{{route('offer.step_5_4')}}" method="POST">
    @endif
        @csrf
        <div class="upper">
            <div class="container">
                <p class="title">Fragebogen</p>
                <div class="">
                    <div class="item row">
                        <div class="query col-sm-6 com-md-6">1. Was ist Ihre größte Stärke?</div>
                        <div class= "answer col-sm-6 com-md-6">
                            <textarea name="strength" class="answer_text" rows="1" required>{{ empty($offer_meta) ? '' : $offer_meta[0]->strength}}</textarea>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="query col-sm-6 com-md-6">2. Was ist Ihre Schwäche?</div>
                        <div class="answer col-sm-6 com-md-6">
                            <textarea name="weakness" class="answer_text" rows="1" required>{{ empty($offer_meta) ? '' : $offer_meta[0]->weakness}}</textarea>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="query col-sm-6 com-md-6">3. Wie würden Ihre Freunde Sie beschreiben?</div>
                        <div class="answer col-sm-6 com-md-6">
                            <textarea name="friends_describe" class="answer_text" rows="1" required>{{ empty($offer_meta) ? '' : $offer_meta[0]->friends_describe}}</textarea>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="query col-sm-6 com-md-6">4. Wie sieht Ihr perfekter Tag aus?</div>
                        <div class="answer col-sm-6 com-md-6">
                            <textarea name="perfect_day" class="answer_text" rows="1" required>{{ empty($offer_meta) ? '' : $offer_meta[0]->perfect_day}}</textarea>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="query col-sm-6 com-md-6">5. Warum sollte man sich bei dem Angebot für Sie entscheiden?</div>
                        <div class="answer col-sm-6 com-md-6">
                            <textarea name="choose" class="answer_text" rows="1" required>{{ empty($offer_meta) ? '' : $offer_meta[0]->choose}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- upper of step-5 -->
        <div class="bottom">
            <div class="container">
                <p class="title">Persönliche stärken</p>
                <div class="blocks row">
                    <div class="col-md-3 col-sm-3" id="intelligent">
                        <div class="imgs">
                            <img src="{{url('public/assets/images/profile_invest/step5-1.png')}}">
                            <img class="num_img" src="{{ strpos(Request::fullUrl(), '?1') !== false ? '../public/assets/images/profile_invest/num1_on.png' : '../public/assets/images/profile_invest/num1_off.png' }}">
                            <p>Intellektuell</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3" id="sport">
                        <div class="imgs">
                            <img src="{{url('public/assets/images/profile_invest/step5-2.png')}}">
                            <img class="num_img" src="{{ strpos(Request::fullUrl(), '?2') !== false ? '../public/assets/images/profile_invest/num2_on.png' : '../public/assets/images/profile_invest/num2_off.png' }}">
                            <p>Sportlich</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3" id="eloquent">
                        <div class="imgs">
                            <img src="{{url('public/assets/images/profile_invest/step5-3.png')}}">
                            <img class="num_img" src="{{ strpos(Request::fullUrl(), '?3') !== false ? '../public/assets/images/profile_invest/num3_on.png' : '../public/assets/images/profile_invest/num3_off.png' }}">
                            <p>Eloquent</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3" id="humorous">
                        <div class="imgs">
                            <img src="{{url('public/assets/images/profile_invest/step5-4.png')}}">
                            <img class="num_img" src="{{ strpos(Request::fullUrl(), '?4') !== false ? '../public/assets/images/profile_invest/num4_on.png' : '../public/assets/images/profile_invest/num4_off.png' }}">
                            <p>Humorvoll</p>
                        </div>
                    </div>
                </div><!-- middle of step-5 -->
                <div class="queries row">
                    @if(strpos(Request::fullUrl(), '?1') !== false)
                        <div class="one">
                            <div class="item col-md-3 col-sm-3">
                                1) Intellektuell
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Lesen/Schauen Sie täglich Nachrichten?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="first" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="first" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Interessieren Sie sich für Naturwissenschaften?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="second" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="second" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Reflektieren Sie oft ihr Verhalten/ihre Meinung?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="third" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="third" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Schauen Sie sich gerne Dokus an?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="forth" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="forth" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Lesen Sie gerne Sachbücher?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="fifth" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="fifth" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- one -->
                    @endif
                    @if(strpos(Request::fullUrl(), '?2') !== false)
                        <div class="two">
                            <div class="item col-md-3 col-sm-3">
                                2) Sportlich
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Machen Sie mehr als zwei Mal in der Woche Sport?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="first" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="first" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Haben Sie schon einmal an einem sportlichen Wettbewerb teilgenommen?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="second" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="second" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Benutzen Sie öfter normale Treppen als Rolltreppen und Aufzüge?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="third" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="third" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Machen Sie Krafttraining?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="forth" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="forth" value="0" rquired>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Zählt körperliche Bewegung/Aktivität zu ihren Prioritäten?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="fifth" value="1" rquired>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="fifth" value="0" rquired>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- two -->
                    @endif
                    @if(strpos(Request::fullUrl(), '?3') !== false)
                        <div class="three">
                            <div class="item col-md-3 col-sm-3">
                                3) Eloquent
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Können Sie Menschen gut von Ihrer Meinung überzeugen?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="first" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="first" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Können Sie verständlich Standpunkte erklären?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="second" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="second" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Sind Sie ein guter Gesprächspartner?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="third" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="third" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Sprechen Sie gerne vor anderen Menschen?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="forth" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="forth" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Können Sie in Diskussionen einfach sachlich bleiben und argumentieren?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="fifth" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="fifth" value="0" rquired>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- three -->
                    @endif
                    @if(strpos(Request::fullUrl(), '?4') !== false)
                        <div class="four">
                            <div class="item col-md-3 col-sm-3">
                                4) Humorvoll
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Fällt Ihnen spontan ein Witz ein?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="first" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="first" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Sind Sie gerne die unterhaltende Person in einer Gruppe?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="second" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="second" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Können Sie über sich selbst lachen?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="third" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="third" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Ist Ihnen Humor wichtig?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="forth" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="forth" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item row">
                                    <div class="col-md-9 col-sm-9">
                                        Würden ihre Freunde Sie als lustig bezeichnen?
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="cats">
                                            <div class="style">
                                                <label class="style_txt">Ja
                                                    <input type="radio" name="fifth" value="1" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="style">
                                                <label class="style_txt">Nein
                                                    <input type="radio" name="fifth" value="0" required>
                                                    <span class="gen_checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- four -->
                    @endif
                    <button class="continue" id="query_select">WEITER</button>
                </div><!-- queries -->
            </div>

        </div><!-- bottom -->

    </form>
</div><!-- step-5 -->
<div class="final-step">
    <img src="{{url('public/assets/images/profile_invest/final.png')}}">
</div>
@include('include/footer')

<script>
$(document).ready(function(){
/************* Step 2 -- categories ***********/
//var checked_cats = $('input[name="step2-option[]"]').length ;
$('input[name="step2-option[]"]:checked').each(function(){
   console.log($(this).val());
    $(this).closest(".item").css("border","2px solid #c72127");
    $(this).closest(".item").css("box-shadow","0 0 20px #888");
});

/************ step 4 - Image Upload **********/
$("#img_btn").click(function(){
    $(".back").css("display","block");
});
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var resize = $('#upload-demo').croppie({
    enableExif: true,
    enableOrientation: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'rectangle'
    },
    boundary: {
        width: 250,
        height: 250
    }
});

$('#image').on('change', function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        resize.croppie('bind',{
            url: e.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });
    }
    reader.readAsDataURL(this.files[0]);
    $(".cr-viewport.cr-vp-rectangle").css("background", "none");
});

$('.crop-image').on('click', function (event) {
    var img = $(".step-4").find('input[type=file]').val();
    if( img == '') {
        alert("Please select the image to upload");
    }else{
        if(img.indexOf('.jpg') > 0 || img.indexOf('.png') > 0 || img.indexOf('.jpeg') > 0 || img.indexOf('.JPG') > 0 || img.indexOf('.PNG') > 0 || img.indexOf('.JPEG') > 0){
            resize.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function (img) {
                $.ajax({
                    url: "{{route('upload.TempImage')}}",
                    type: "POST",
                    data: {"image":img},
                    success: function (data) {
                        console.log(data.imgs);
                        if(data.success){
                            console.log("Successed!");
                            console.log("File Counts : " + data.file_count);
                            window.location.href = "{{URL::to('profile_invest/step-4')}}";
                        }else{
                            console.log("Upload Failed!");
                            alert("There are already 6 photos. You can upload the maximum 6 photos.");
                        }
                    },
                    error: function(data) {
                        console.log("Errors!!");
                    }
                });
            });
        }else{
            alert("Please choose the correct image file. (*.jpg, *.jpeg, *.png)");
        }
    }
});

$("#uploadImg_btn").click(function(){
    var temp = $(this).closest(".step-4").find("#tempImg").attr('src');
    console.log(temp);
    if(!temp){
        alert("There is nothing images to upload!");
    }else{
        var id = "{{Auth::user()->id}}";
        $.ajax({
            url:"{{route('move.image')}}",
            type:"POST",
            data: {
                "id":id
            },
            success:function(data){
                console.log(data.file);
                if(data.success){
                    console.log("Successed!");
                    window.location.href = "{{URL::to('profile_invest/step-5?1')}}";
                }else{
                    console.log("Failed!");
                }
            },
            error: function(data){
                console.log("Errors!!");
            }
        });
    }
});

$(".img_delete").click(function(event){
    var src = $(this).closest(".item").find("#tempImg").attr('src');
    var start_pos = src.indexOf("public/");
    src = src.substring(start_pos);
    $.ajax({
        url: "{{route('delete_image.submit')}}",
        type: "POST",
        data: {
            "src":src
        },
        success: function (data) {
            console.log(data.file);
            if(data.success){
                console.log("Successed!");
                window.location.href = "{{URL::to('profile_invest/step-4')}}";
            }else{
                console.log("Failed!");
            }
        },
        error: function(data) {
            console.log("Errors!!");
        }
    });
});
/// get real file path --- non-used !!!
$("#fileUpload").change(function(event){
    var input = event.target;
    var dataURL='';
    var reader = new FileReader();
    reader.onload = function(){
        dataURL = reader.result;
        $(".photo_rect").prepend("<div class='col-md-2 col-sm-2'><img src='"+dataURL+"'></div>");
    };
    reader.readAsDataURL(input.files[0]);
});//////////////////

/*********************************************/
});
</script>
