<!-- BARRA SUPERIOR DE LOGIN E HEADER-->
<section class="container-fluid s_welcome">
    <div class="main container-fav">
        <div class="text">
            <span>Seja Bem-vindo! Faça <a href="{{ route('site.minha-conta') }}">Login</a> ou
                <a href="{{ route('site.minha-conta') }}">Cadastre-se</a></span>
        </div>
        <div class="content">
            <div class="welcome_item">
                <div class="phone welcome_item">
                    <img src="{{ asset('site/img/tPhone.svg') }}" alt="" />
                </div>
                <span>(35) 9 8809 0654 </span>
            </div>
            <div class="social welcome_item">
                <a href="https://www.facebook.com/abspernambuco/" class="wSVG">
                    <img src="{{ asset('site/img/FacebookLogo.svg') }}" alt="" />
                </a>
                <a href="https://www.instagram.com/abs_pe/" class="wSVG">
                    <img src="{{ asset('site/img/InstagramLogo.svg') }}" alt="" />
                </a>
                <a href="/" class="wSVG">
                    <img src="{{ asset('site/img/YoutubeLogo.svg') }}" alt="" />
                </a>
            </div>
        </div>
    </div>
</section>
