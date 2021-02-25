<div class="wm-modallogin-form wm-login-popup">
    <span class="wm-color">Se connecter</span>
    <form action="{{url('login')}}" method="POST">
        {{ csrf_field() }}
        <ul>
            <li> <input type="text" name="username" placeholder="Adresse e-mail ou pseudonyme" required>
            </li>
            <li> <input type="password" name="password" placeholder="Mot de passe" required>
            </li>
            <li>
                <div class="wm-select-checkbox">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember"><span></span> Se souvenir de moi</label>
                </div>

                <input type="hidden" name="page"
                    value="{{isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/'}}">

            </li>

            <li> <a href="#" class="wm-forgot-btn">Mot de passe oublié?</a> </li>
            <li> <input type="submit" value="Se connecter"> </li>
        </ul>
    </form>
    <span class="wm-color">ou se connecter avec</span>
    <ul class="wm-login-social-media">
        <li class="wm-twitter-color"><a href="#"><i class="wmicon-social2"></i>Twitter</a></li>
        <li class="wm-linkedin-color"><a href="#"><i class="wmicon-social3"></i>LinkedIn</a></li>
        <li class="wm-googleplus-color"><a href="{{url('auth/google')}}"><i class="fa fa-google-plus-square"></i>
                Google</a></li>

    </ul>
    <p>Pas de compte? <a href="#">S'inscrire</a></p>
</div>