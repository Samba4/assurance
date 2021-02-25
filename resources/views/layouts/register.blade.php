<div class="wm-modallogin-form wm-register-popup">
    <span class="wm-color">Créer un compte</span>
    <form action="{{route('registers')}}" method="POST">
        {{ csrf_field() }}
        <ul>
            <li> <input type="text" name="nom" placeholder="Nom"></li>
            <li> <input type="text" name="prenom" placeholder="Prénom"></li>
            <li> <input type="text" name="username" placeholder="Pseudonyme"></li>
            <li> <input type="email" name="email" placeholder="Adresse e-mail"></li>
            <li> <input type="password" name="password" placeholder="Mot de passe"> </li>
            <li> <input type="password" name="password2" placeholder="Confirmez votre mot de passe"> </li>
            <li><input type="submit" value="S'inscrire"></li>
        </ul>
    </form>
    <span class="wm-color">ou s'inscrire avec</span>
    <ul class="wm-login-social-media">
        <li><a href="#"><i class="wmicon-social5"></i>Facebook</a></li>
        <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i>Twitter</a></li>
        <li class="wm-googleplus-color"><a href="{{url('auth/google')}}"><i class="fa fa-google-plus-square"></i>
                Google</a></li>
    </ul>
    <p>Déjà membre? <a href="#">Se connecter</a></p>
</div>