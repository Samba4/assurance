<div class="wm-modallogin-form wm-register-popup">
    <span class="wm-color">Créer un profil</span>
    <form action="{{route('cprofil')}}" method="POST">
        {{ csrf_field() }}
        <ul class="wm-login-social-media">
            <li> <input type="text" name="url" placeholder="Site internet"></li>
            <li> <input type="text" name="description" placeholder="Description de votre profil">
            <li><input type="submit" value="Créer un compte"></li>
        </ul>
    </form>
</div>