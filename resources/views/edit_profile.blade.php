@include('include/header')

@section('title')
    Edit Profil
@endsection

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
</div>
<div class="profile_background">
<div class="container">
    <div class="col-sm-3 col-md-3 col-lg-3 profile_menu">
        <div class="menu_item" id="profile_settings"><a href="{{route('profile.option', ['option'=>'settings'])}}">Einstellungen</a></div>
        <div class="menu_item" id="profile_edit"><a href="{{route('profile.option', ['option'=>'edit'])}}">Profil bearbeiten</a></div>
        <div class="menu_item" id="profile_contacts"><a href="{{route('profile.option', ['option'=>'contact'])}}">Meine Kontakte</a></div>
        <div class="menu_item" id="profile_ratings"><a href="{{route('profile.option', ['option'=>'ratings'])}}">Meine Bewertungen</a></div>
    </div>
    <div class="col-sm-9 col-md-9 col-lg-9 profile_contents">
        <div class="profile_settings">
            <div class="title">
                Einstellungen
            </div>
            <div class="block">
                <form method="POST" action="{{ route('change_email.submit',  ['change_email' => Auth::user()->id]) }}">
                    @csrf
                    <div class="sub_title">
                        <span class="cat">Change Email</span>
                        <i class="fa fa-edit" id="edit_email"></i>
                    </div>
                    <div class="item row">
                        <div class="col-sm-3">
                            Email Address
                        </div>
                        <div class="col-sm-9">
                            <input id="email" type="email" value="{{ Auth::user()->email }}" placeholder="" name="email" required disabled>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="col-sm-3">
                            Enter Current Passwort
                        </div>
                        <div class="col-sm-9">
                            <input id="check_password" type="password" value="" placeholder="" name="change_password" required disabled>
                            <?php
                            if($errors->all()){
                                $arr = (array)$errors->all();
                                if($arr[0] == 'change_password'){
                            ?>
                                <div style="padding-left: 20px; color:#c72127; ">
                                    <span class="invalid-feedback">
                                        <strong>Wrong password! Please input the correct password.</strong>
                                    </span>
                                </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div style="text-align: right">
                        <button type="submit" id="email_update" class="profileItem_save">Update</button>
                    </div>
                </form>
            </div>
            <div class="block">
                <form method="POST" action="{{ route('change_password.submit',  ['change_password' => Auth::user()->id]) }}">
                    @csrf
                    <div class="sub_title">
                        <span class="cat">Change Passwort</span>
                        <i class="fa fa-edit" id="edit_password"></i>
                    </div>
                    <div class="item row">
                        <div class="col-sm-3">
                            Old Passwort
                        </div>
                        <div class="col-sm-9">
                            <input id="old_password" type="password" value="" placeholder="" name="old_password" required disabled>
                            <?php
                            if($errors->all()){
                                $arr = (array)$errors->all();
                                if($arr[0] == 'old_password'){
                            ?>
                                <div style="padding-left: 20px; color:#c72127; ">
                                    <span class="invalid-feedback">
                                        <strong>Wrong old password! Please input the correct password.</strong>
                                    </span>
                                </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="col-sm-3">
                            New Passwort
                        </div>
                        <div class="col-sm-9">
                            <input id="new_password" type="password" value="" placeholder="" name="new_password" required disabled>
                            <?php
                            if($errors->all()){
                                $arr = (array)$errors->all();
                                if($arr[0] == 'min_password'){
                            ?>
                                <div style="padding-left: 20px; color:#c72127; ">
                                    <span class="invalid-feedback">
                                        <strong>Password must be over minimal 8 characters!</strong>
                                    </span>
                                </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="col-sm-3">
                            Confirm Passwort
                        </div>
                        <div class="col-sm-9">
                            <input id="conf_password" type="password" value="" placeholder="" name="conf_password" required disabled>
                            <?php
                            if($errors->all()){
                                $arr = (array)$errors->all();
                                if($arr[0] == 'conf_password'){
                            ?>
                                <div style="padding-left: 20px; color:#c72127; ">
                                    <span class="invalid-feedback">
                                        <strong>Not matched with new password and confirm password!</strong>
                                    </span>
                                </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div style="text-align: right">
                        <button type="submit" id="password_update" class="profileItem_save">Update</button>
                    </div>
                </form>
            </div>
            <div class="block">
                <div class="sub_title">
                    <span class="cat">possibility to block person</span>
                </div>
                <div class="person_list">
                    <table>
                        <tr class="list_title">
                            <td class="id">ID</td>
                            <td class="photo">Photo</td>
                            <td class="name">Name</td>
                            <td class="age">Age</td>
                            <td class="email">Email</td>
                            <td class="job">Job</td>
                            <td class="action_status">Action</td>
                        </tr>
                        <tr>
                            <td class="id">1321345</td>
                            <td class="photo">
                                <img src="{{url('public/assets/images/person/Johana.jpg')}}">
                            </td>
                            <td class="name">Johana</td>
                            <td class="age">Age</td>
                            <td class="email">Johana@gmail.com</td>
                            <td class="job">Artist</td>
                            <td class="action_status">
                                <div class="online" >
                                    <img src="{{url('public/assets/images/block_eye_online.png')}}">
                                </div>
                                <div class="offline">
                                    <img src="{{url('public/assets/images/block_eye_offline.png')}}">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="block report">
                <form method="POST" action="{{route('report.submit', ['report'=>Auth::user()->id])}}">
                    @csrf
                    <div class="sub_title">
                        <span class="cat">possibility to report person</span>
                        <i class="fa fa-edit" id="edit_report"></i>
                    </div>
                    <div class="item row">
                        <div class="col-sm-6">
                            <div class="col-sm-5 username">Person Name</div>
                            <div class="col-sm-7">
                                <input id="person_name" type="text" value="" placeholder="" name="person_name" required disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-5 userID">Person ID</div>
                            <div class="col-sm-7">
                                <input id="person_id" type="number" value="" placeholder="" name="person_id" required disabled>
                            </div>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="text_field">
                            <textarea class="report_text" name="report_text" rows="5" placeholder="Bitte hier eingeben" required disabled></textarea>
                        </div>
                    </div>

                    <div class="submit_report">
                        <button type="submit" class="profileItem_save">Submit</button>
                    </div>
                    <?php
                        if($errors->all()){
                            $arr = (array)$errors->all();
                            if($arr[0] == 'no_contacted'){?>
                            <div style="text-align:center; color:#c72127; ">
                                <span class="invalid-feedback">
                                    <strong>You have not any contacted person.</strong>
                                </span>
                            </div>
                        <?php
                            }elseif($arr[0] == 'no_matched'){?>
                            <div style="text-align:center; color:#c72127; ">
                                <span class="invalid-feedback">
                                    <strong>The contacted user info is incorrect.</strong>
                                </span>
                            </div>
                        <?php
                           }elseif($arr[0] == 'success'){ ?>
                            <div style="text-align:center; color:#0daa14; ">
                                <span class="invalid-feedback">
                                    <strong>Reporting success!</strong>
                                </span>
                            </div>
                        <?php
                            }
                        }
                    ?>
                </form>
            </div>
            <div class="block">
                <div class="sub_title delete">
                    <span class="cat delete">Konto löschen</span>
                </div>
                <div style="text-align: center; margin: 20px 0;">
                    <!--<button type="submit" class="delete_account">Konto löschen</button>-->
                    <a class="delete_account" href="{{route('delete.account')}}">Konto löschen</a>
                </div>
            </div>
        </div> <!-- profile setting -->
        <div class="profile_edit">
            <div class="title">
                Profil bearbeiten
            </div>
            <div class="block">
                <form method="POST" action="{{ route('edit_profile.submit',  ['edit_profile' => Auth::user()->id]) }}" name="report_text">
                    @csrf
                    <div class="item row">
                        <div class="col-sm-6">
                            <div class="first">First Name</div>
                            <div class="second">
                                <input type="text" name="first_name" value="{{ empty($usermeta) ? '' : $usermeta->first_name }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="first">Last Name</div>
                            <div class="second">
                                <input type="text" name="last_name" value="{{ empty($usermeta) ? '' : $usermeta->last_name }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="col-sm-6">
                            <div class="first">Gender</div>
                            <div class="second gender">
                                <div><input type="radio" value="woman" name="gender" required
                                    {{ empty($usermeta) ? '' : $usermeta->gender == 'woman' ? 'checked = "checked"' : ''}} >Frau</div>
                                <div><input type="radio" value="man" name="gender" required
                                    {{ empty($usermeta) ? '' : $usermeta->gender == 'man' ? 'checked = "checked"' : ''}}>Mann</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="first">Age</div>
                            <div class="second">
                                <input type="number" value="{{ empty($usermeta) ? '' : $usermeta->age }}" name="age" required>
                            </div>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="col-sm-6 col-md-6">
                            <div class="others">
                                <div class="txt"><span class="cat">Wohnort</span></div>
                                <div class="txt">
                                    <input type="text" value="{{ empty($usermeta) ? '' : $usermeta->address }}" name="address" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="others">
                                <div class="txt"><span class="cat">Job</span></div>
                                <div class="txt">
                                    <input type="text" value="{{ empty($usermeta) ? '' : $usermeta->job }}" name="job" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="col-sm-6 col-md-6">
                            <div class="others">
                                <div class="txt"><span class="cat">Hobby</span></div>
                                <div class="txt">
                                    <input type="text" value="{{ empty($usermeta) ? '' : $usermeta->hobbies }}" name="hobbies" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="others">
                                <div class="txt"><span class="cat">Sport</span></div>
                                <div class="txt">
                                    <input type="text" value="{{ empty($usermeta) ? '' : $usermeta->sport }}" name="sport" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="col-sm-6 col-md-6">
                            <div class="others">
                                <div class="txt"><span class="cat">Fähigkeiten</span></div>
                                <div class="txt">
                                    <input type="text" value="{{ empty($usermeta) ? '' : $usermeta->technique }}" name="technique" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="others">
                                <div class="txt"><span class="cat">Sprachen</span></div>
                                <div class="txt">
                                    <input type="text" value="{{ empty($usermeta) ? '' : $usermeta->language }}" name="language" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="intro">Description about yourself</div>
                        <div class="text_field">
                            <textarea class="report_text" name="description" rows="5" placeholder="" required="">{{ empty($usermeta) ? '' : $usermeta->description }}</textarea>
                        </div>
                    </div>
                    <div class="item row">
                        <div class="intro">Why are you on this platform?</div>
                        <div class="text_field">
                            <textarea class="report_text" name="reason_platform" rows="5" placeholder="" required>{{ empty($usermeta) ? '' : $usermeta->reason }}</textarea>
                        </div>
                    </div>
                    <div style="text-align: right">
                        <button type="submit" id="profile_save" class="profileItem_save">Save</button>
                    </div>
                </form>
                <div class="photo row">
                    <div class="item row">
                        <div class="intro">Upload Photo</div>
                        <div class="col-sm-6 col-md-6 avarta">
                            <div class="row">
                                <div class="text-center">
                                    <div id="upload-demo"></div>
                                </div>
                                <div class="" style="padding:5%;">
                                    <input type="file" id="image">
                                    <button class="btn btn-primary btn-block upload-image" style="margin-top:2%">Upload Image</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            @foreach ($imgs as $img)
                                @if(strpos($img, ".png") !== false)
                                <div class="col-sm-4 col-md-4">
                                    <div class="imgs">
                                        <img src="{{url('public/upload/users/'.Auth::user()->id.'/'.$img)}}">
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup_img">
                <div class="image_body">
                    <div><img id="selected_photo" src=""></div>
                    <div class="image_action row">
                        <img class="img_close" src="{{url('public/assets/images/profile/close.png')}}">
                        <img class="img_delete" src="{{url('public/assets/images/profile/delete.png')}}">
                    </div>
                </div>
            </div>
        </div> <!-- profile edit -->
        <div class="profile_contacts">
            <div class="title">
                Meine Kontakte
            </div>
            <div class="block">
                <div class="item row">
                    <div class="col-sm-2">
                        <a href=""><img src="{{url('public/assets/images/baymax.jpeg')}}"></a>
                    </div>
                    <div class="col-sm-8">
                        <div class="option name"><a class="person_link" href="">xxxx</a></div>
                        <div class="option job">
                            <div class="symbol"><i class="fa fa-briefcase"></i></div>
                            <div class="txt"><span>ccc</span></div>
                        </div>
                        <div class="option offer">
                            <div class="symbol"><i class="fa fa-crosshairs"></i></div>
                            <div class="txt"><span>bbbb</span></div>
                        </div>
                    </div>
                    <div class="conv">
                        <button class="conv_button">Conversation</button>
                    </div>
                </div>
                <div class="line"></div>
            </div>
        </div> <!-- profile contacts -->
        <div class="profile_ratings">
            <div class="title">
                Meine Bewertungen
            </div>
            <div class="item">
                <div class="first">
                    <div class="photo">
                        <a href=""><img src="{{url('public/assets/images/baymax.jpeg')}}"></a>
                    </div>
                    <span class="name"><a href="">xxxxx</a></span>
                </div>
                <div class="rate">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <span class="txt">Fantastic</span>
                </div>
                <div class="date">21 August 2019</div>
                <div class="feedback">This is my best business parter</div>
            </div>
            <div class="line"></div>
        </div> <!-- profile ratings -->
    </div>
</div>
</div>

@include('include/footer')
<script>
/////// Profile Image Upload ///////////////////
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

    $('.upload-image').on('click', function (ev) {
        var img = $(".avarta").find('input[type=file]').val();
        if( img == '') {
            alert("Please select the image to upload");
        }else{
            if(img.indexOf('.jpg') > 0 || img.indexOf('.png') > 0 || img.indexOf('.jpeg') > 0 || img.indexOf('.JPG') > 0 || img.indexOf('.PNG') > 0 || img.indexOf('.JPEG') > 0){
                resize.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function (img) {
                    $.ajax({
                        url: "{{route('upload.image')}}",
                        type: "POST",
                        data: {"image":img},
                        success: function (data) {
                            console.log(data.imgs);
                            if(data.success){
                                console.log("Successed!");
                                console.log("File Counts : " + data.file_count);
                                window.location.href = "{{URL::to('edit_profile/edit')}}";
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

    $(".img_delete").click(function(){
        $(".popup_img").css("display", "none");
        var src = $(".image_body").find($("#selected_photo")).attr('src');
        var start_pos = src.indexOf("public/");
        src = src.substring(start_pos);
        console.log(src);
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
                    window.location.href = "{{URL::to('edit_profile/edit')}}";
                }else{
                    console.log("Failed!");
                }
            },
            error: function(data) {
                console.log("Errors!!");
            }
        });
    });

</script>
