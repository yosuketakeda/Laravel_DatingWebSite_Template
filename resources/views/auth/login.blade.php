@include('include/header')

@section('title')
    Login
@endsection

<div class="login_img">
    <div class="container">
        <div class="col-sm-6 col-md-6 col-lg-6 login_field">
            <p class="title">Hier anmelden</p>
            <p class="txt">EMAIL-ADRESSE:</p>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}} has-feedback">
                    <input id="login_email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <p class="txt">PASSWORT:</p>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}} has-feedback">
                    <input id="login_password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="login_btn">EINLOGGEN</button><br>
            </form>
            @if (Route::has('password.request'))
                <a class="adding btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Passwort vergessen?') }}
                </a>
            @endif
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 register_field">
            <p class="title">Du bist noch nicht angemeldet? <br> Regestriere dich gleich jetzt!</p>
            <p class="txt">EMAIL-ADRESSE:</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input id="name" type="hidden"  name="name" value="Nutzername" required autocomplete="name" >
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <p class="txt">PASSWORT:</p>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <p class="txt">PASSWORT WIEDERHOLEN:</p>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                <input type="checkbox" name="check_policy" id="check_policy" class="css-checkbox">
                <label for="check_policy" class="css-label">Lorem ipsum is simply <a class="dummy_text">dummy text of the</a> printing and typesetting.</label> <br>
                <button type="submit" class="register_btn">JETZT REGESTRIEREN</button><br>
            </form>
        </div>
    </div>
</div>

<div class="login profile_main">
    <div class="mobile_part">
        <div class="container">
            <div class="col-sm-4 col-md-4 col-lg-4 phone">
                <img src="public/assets/images/phone_0.png">
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
                            <img class="apple_brand" src="public/assets/images/apple.png">
                        </div>
                        <div class="google">
                            <img class="google_brand" src="public/assets/images/google play.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('include/footer')

