
$(document).ready(function(){
    /********************************************* Home page ******************************************************/
    $('.owl-carousel').owlCarousel({
        autoPlay : true,
        loop:false,
        margin:10,
        dots : true,
        autoplayTimeout : 500,
        autoplaySpeed: 500,
   		responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        },
    })

    /********************************************* Begleitperson finden page ******************************************************/
    /****** login alam *******/
    $(".login_alam").click(function(){
        $(".login_alam").css("display", "none");
    });
    $( ".login_alam .body" ).click(function( event ) {
        event.stopImmediatePropagation();
    });
    /** Alter Range Slider **/
    $( "#alter-slider-range" ).slider({
        range: true,
        min: 0,
        max: 100,
        values: [ 28, 45 ],
        slide: function( event, ui ) {
            $(".alter_range .min").text(ui.values[0]);
            $(".alter_range .max").text(ui.values[1]);
        }
    });
    $( ".alter_range .min" ).text( $( "#alter-slider-range" ).slider( "values", 0 ));
    $( ".alter_range .max" ).text( $( "#alter-slider-range" ).slider( "values", 1 ));
    /******** end ********/
    /*********** Distance Range Slider**********/
    $( "#distance-slider-range" ).slider({
        value: 50,
        min: 0,
        max: 100,
        range: "min",
        slide: function( event, ui ) {
            $(".distance_range .val").text(ui.value + " Km");
        }
    });
    $( ".distance_range .val" ).text( $( "#distance-slider-range" ).slider( "value" ) + " Km");

    /********* end *********/
    /***** Price Range Slider ****/
    $( "#price-slider-range" ).slider({
        range: true,
        min: 0,
        max: 100,
        values: [ 0, 50 ],
        slide: function( event, ui ) {
            $(".price_range .min").text(ui.values[0]+" €");
            $(".price_range .max").text(ui.values[1]+" €");
        }
    });
    $( ".price_range .min" ).text( $( "#price-slider-range" ).slider( "values", 0 ) + " €");
    $( ".price_range .max" ).text( $( "#price-slider-range" ).slider( "values", 1 ) + " €");
    /******* end ******/
    /******** private / professional / both radio ***********/
    $(".business").click(function(){
        $("#business").css("display","block");
        $("#private").css("display","none");
        $("#both").css("display","none");
    });
    $(".private").click(function(){
        $("#business").css("display","none");
        $("#private").css("display","block");
        $("#both").css("display","none");
    });
    $(".both").click(function(){
        $("#business").css("display","none");
        $("#private").css("display","none");
        $("#both").css("display","block");
    });

    /************************************************** Profile Edit *******************************************/

    var pathname = window.location.pathname;

    /******** menu event ***********/

    if(pathname.indexOf('_profile/settings') > 1){
        $("#profile_settings a").css("color", "#8a2be2");
        $("#profile_edit a").css("color", "#949494");
        $("#profile_contacts a").css("color", "#949494");
        $("#profile_ratings a").css("color", "#949494");
        $(".profile_settings").css("display", "block");
        $(".profile_edit").css("display", "none");
        $(".profile_contacts").css("display", "none");
        $(".profile_ratings").css("display", "none");
    }else if(pathname.indexOf('_profile/edit') > 1){
        $("#profile_settings a").css("color", "#949494");
        $("#profile_edit a").css("color", "#8a2be2");
        $("#profile_contacts a").css("color", "#949494");
        $("#profile_ratings a").css("color", "#949494");
        $(".profile_edit").css("display", "block");
        $(".profile_settings").css("display", "none");
        $(".profile_contacts").css("display", "none");
        $(".profile_ratings").css("display", "none");
    }else if(pathname.indexOf('_profile/contact') > 1){
        $("#profile_settings a").css("color", "#949494");
        $("#profile_edit a").css("color", "#949494");
        $("#profile_contacts a").css("color", "#8a2be2");
        $("#profile_ratings a").css("color", "#949494");
        $(".profile_contacts").css("display", "block");
        $(".profile_edit").css("display", "none");
        $(".profile_settings").css("display", "none");
        $(".profile_ratings").css("display", "none");
    }else if(pathname.indexOf('_profile/ratings') > 1){
        $("#profile_settings a").css("color", "#949494");
        $("#profile_edit a").css("color", "#949494");
        $("#profile_contacts a").css("color", "#949494");
        $("#profile_ratings a").css("color", "#8a2be2");
        $(".profile_ratings").css("display", "block");
        $(".profile_edit").css("display", "none");
        $(".profile_contacts").css("display", "none");
        $(".profile_settings").css("display", "none");
    }

    // when edit icon is cliecked to remove wrong span
    $(".fa.fa-edit").click(function(){
        $('.container').find('.invalid-feedback').remove();
    });

    /************ Profile Settings Page ************/
    $("#edit_email").click(function(){
        $("input#email").prop('disabled', false);
        $("input#check_password").prop('disabled', false);
        $("#email_update").css("display", "initial");
    });
    $("#edit_password").click(function(){
        $("input#old_password").prop('disabled', false);
        $("input#new_password").prop('disabled', false);
        $("input#conf_password").prop('disabled', false);
        $("#password_update").css("display", "initial");
    });
    $("#edit_show").click(function(){
        $(".person_show .save_show").css("display", "block");
    });
    $("#edit_report").click(function(){
        $(".profile_settings .report .submit_report").css("display", "block");
        $("input#person_name").prop('disabled', false);
        $("input#person_id").prop('disabled', false);
        $(".report .report_text").prop("disabled", false);
    });

    /************ Profile Edit Page *******/

    $(".photo .imgs").click(function(){
        $(".popup_img").css("display", "block");
        var src = $(this).children('img').attr('src');
        $('.image_body #selected_photo').attr("src",src);
    });
    $(".img_close").click(function(){
        $(".popup_img").css("display", "none");
    });

/********************************************* Profile anlegen page *******************************************/
    if(pathname === "/dating/profile_invest/step"){
        window.location.href = "step-1";
    }
    var url = window.location.href;
    var target = url.substring( url.indexOf('profile_invest'), url.length);

    if(target === 'profile_invest/step-5'){
        window.location.href = "step-5?1";
    }

    if(pathname.indexOf('profile_invest/step-1') > 1){
        $(".profile_invest_main .step-1").css("display", "block");
        $(".profile_invest_main .step-2").css("display", "none");
        $(".profile_invest_main .step-3").css("display", "none");
        $(".profile_invest_main .step-4").css("display", "none");
        $(".step-5").css("display", "none");
        $(".final-step").css("display", "none");
    }else if(pathname.indexOf('profile_invest/step-2') > 1){
        $(".profile_invest_main .step-1").css("display", "none");
        $(".profile_invest_main .step-2").css("display", "block");
        $(".profile_invest_main .step-3").css("display", "none");
        $(".profile_invest_main .step-4").css("display", "none");
        $(".step-5").css("display", "none");
        $(".final-step").css("display", "none");

        $("form").submit(function(e){

            var checked_counts = $('input[name="step2-option[]"]:checked').length ;
            if(checked_counts == 0){
                e.preventDefault();
                alert("You must select over 1 category.")
            }
        });


    }else if(pathname.indexOf('profile_invest/step-3') > 1){
        $(".profile_invest_main .step-1").css("display", "none");
        $(".profile_invest_main .step-2").css("display", "none");
        $(".profile_invest_main .step-3").css("display", "block");
        $(".profile_invest_main .step-4").css("display", "none");
        $(".step-5").css("display", "none");
        $(".final-step").css("display", "none");
    }else if(pathname.indexOf('profile_invest/step-4') > 1){
        $(".profile_invest_main .step-1").css("display", "none");
        $(".profile_invest_main .step-2").css("display", "none");
        $(".profile_invest_main .step-3").css("display", "none");
        $(".profile_invest_main .step-4").css("display", "block");
        $(".step-5").css("display", "none");
        $(".final-step").css("display", "none");
    }else if(pathname.indexOf('profile_invest/step-5') > 1){
        $(".profile_invest_main .step-1").css("display", "none");
        $(".profile_invest_main .step-2").css("display", "none");
        $(".profile_invest_main .step-3").css("display", "none");
        $(".profile_invest_main .step-4").css("display", "none");
        $(".step-5").css("display", "block");
        $(".final-step").css("display", "none");
        $(".profile_invest_main").css("display", "none");

        var subpath = window.location.search.substring();

        if(subpath.indexOf('?1') >= 0){
            $(".step-5 .bottom .one").css("display", "block");
            $(".step-5 .bottom .two").css("display", "none");
            $(".step-5 .bottom .three").css("display", "none");
            $(".step-5 .bottom .four").css("display", "none");
        }else if(subpath.indexOf('?2')>=0){
            $(".step-5 .bottom .one").css("display", "none");
            $(".step-5 .bottom .two").css("display", "block");
            $(".step-5 .bottom .three").css("display", "none");
            $(".step-5 .bottom .four").css("display", "none");
        }
        else if(subpath.indexOf('?3')>=0){
            $(".step-5 .bottom .one").css("display", "none");
            $(".step-5 .bottom .two").css("display", "none");
            $(".step-5 .bottom .three").css("display", "block");
            $(".step-5 .bottom .four").css("display", "none");
        }
        else if(subpath.indexOf('?4')>=0){
            $(".step-5 .bottom .one").css("display", "none");
            $(".step-5 .bottom .two").css("display", "none");
            $(".step-5 .bottom .three").css("display", "none");
            $(".step-5 .bottom .four").css("display", "block");
        }
    }else if(pathname.indexOf('profile_invest/final') > 1){
        $(".profile_invest_main").css("display", "none");
        $(".step-5").css("display", "none");
        $(".final-step").css("display", "block");
    }
    /************ step 2 **********/

    $(".profile_invest_main .step-2 .home_categories .item").click(function(event){
        var status = $(event.target).closest(".item").find("input").prop("checked");
        if(status == true){
            $(event.target).closest(".item").css("border","2px solid #c72127");
            $(event.target).closest(".item").css("box-shadow","0 0 20px #888");
        }else{
            $(event.target).closest(".item").css("border","0");
            $(event.target).closest(".item").css("box-shadow","none");
        }
    });
    $(".profile_invest_main .step-2 .religion #business").change(function(){
        var selected = $(this).val();
        $(".profile_invest_main .step-2 .religion input").val(selected);
    });
    $(".profile_invest_main .step-2 .options .bundle .style").click(function(){
        var checked = $('input[name=university]:checked','#step2_form').val();
        if(checked == "others"){
            $(".profile_invest_main .step-2 .options #others_detail").prop("required", true);
            $(".profile_invest_main .step-2 .options #others_detail").prop("disabled", false);
        }else{
            $(".profile_invest_main .step-2 .options #others_detail").prop("required", false);
            $(".profile_invest_main .step-2 .options #others_detail").prop("disabled", true);
            $(".profile_invest_main .step-2 .options #others_detail").val("");
        }
    });

    /************ step 4 **********/
    $(".back").click(function(){
        $(".back").css("display", "none");
    });
    $( ".back .upload_part" ).click(function( event ) {
        event.stopImmediatePropagation();
    });
    /*********** Step-5 ***********/

    // answer_text event
    $('.step-5 .answer_text').bind('input propertychange', function() {
        enteredText = this.value;
        numberOfLineBreaks = (enteredText.match(/\n/g)||[]).length;
        numberOfLineBreaks += 1;
        $(this).attr("rows", numberOfLineBreaks);
    });


    /******************************/

});
