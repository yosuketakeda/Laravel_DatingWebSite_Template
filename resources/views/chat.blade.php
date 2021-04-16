@include('include/header')

@section('title')
    Companion Chat
@endsection
<div class="blank_chat"></div>
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
    <div class="main-content">
        <p class="chat_panel">Nachrichten</p>
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="chat_left">
                    <div class="person">
                        <img id="human" src="{{url('public/assets/images/person/Sabrin_chat.jpg')}}">
                        <div class="info">
                            <p class="name">Sabrina S, 35</p>
                            <p class="job">Lehrerin</p>
                        </div>
                    </div>
                    <a class="remove" href=""><img id="recycle" src="{{url('public/assets/images/chat/recycle.png')}}"></a>
                    <div class="person">
                        <img id="human" src="{{url('public/assets/images/person/Anna_chat.jpg')}}">
                        <div class="info">
                            <p class="name">Anna Miller, 28</p>
                            <p class="job">Ärztin</p>
                        </div>
                    </div>
                    <a class="remove" href=""><img id="recycle" src="{{url('public/assets/images/chat/recycle.png')}}"></a>
                    <div class="person">
                        <img id="human" src="{{url('public/assets/images/person/Toni_chat.jpg')}}">
                        <div class="info">
                            <p class="name">Toni, 33</p>
                            <p class="job">Sachbearbeiterin</p>
                        </div>
                    </div>
                    <a class="remove" href=""><img id="recycle" src="{{url('public/assets/images/chat/recycle.png')}}"></a>
                </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="chat_right">
                    <div class="person">
                        <img id="human" src="{{url('public/assets/images/person/Johana_chat_1.jpg')}}">
                        <div class="info">
                            <p class="name">Sabrina S, 35</p>
                            <p class="job">Lehrerin</p>
                        </div>
                        <div class="local">
                            <p class="address">Blockieren Melden</p>
                            <p class="time">12.08.2019-14.45 Uhr</p>
                        </div>
                    </div>
                    <div class="chatting">
                        <div class="companion">
                            <div class="photo">
                                <img src="{{url('public/assets/images/person/woman_chat.png')}}">
                            </div>
                            <div class="txt">
                                <div class="chat">Wie geht dir?</div>
                                <p class="companion_time">13, April 2019, 10:30</p>
                            </div>
                        </div>
                        <div class="me">
                            <div class="txt">
                                <div class="chat">Hallo, ich bin Fred</div>
                                <div class="chat">Dein Profil gefällt mir sehr gut. asdfas asdfsdf asdfdffff asdf asdfa asdfsadfsadf asdfasdfasdfsadfd asdfasdf asdf</div>
                                <p class="me_time">13, April 2019, 10:30</p>
                            </div>
                            <div class="photo">
                                <img src="{{url('public/assets/images/person/man_chat.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="text_field">
                        <div class="file_upload">
                            <a class="upload"><img src="{{url('public/assets/images/chat/file_upload.png')}}"></a>
                        </div>
                        <div class="txt">
                            <input type="text" value="" name="message" placeholder="Schreibe etwas..."/>
                        </div>
                        <div class="message">
                            <a class="send_message"><img src="{{url('public/assets/images/chat/message.png')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('include/footer')
