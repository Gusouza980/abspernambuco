@include("site.includes.head")

<body class="_experiencia">

    <section class="container-fluid _infobox">
        <div class="_box">
            <span id="_info"></span>
        </div>
        <div class="_loadingBox">
        </div>
    </section>

     

    <!-- MENU LATERAL -->
    @include("site.includes.menu_lateral")
    <!-- MENU LATERAL -->

    {{-- BARRA DE LOGIN E CADASTRE-SE --}}
    @include("site.includes.barra_login")


    {{-- NAVBAR SUPEROR --}}
    @include("site.includes.navbar")
    <!-- BARRA SUPERIOR DE LOGIN E HEADER-->


    <!-- SECTION HERO -->
    <section class="container-fluid s_hero">
        <div class="container-fav">
            <div class="text">
                <div class="img">
                    <img src="{{asset('site/img/logoCasasBahia.jpg')}}" alt="">
                </div>

                <div class="title">
                    <h1>20% de desconto</h1>
                </div>
                <div class="info">
                    <p>Em compras acima de R$150,00</p>
                </div>
                <button class="btn-primary">Ver oferta</button>
            </div>
        </div>
    </section>
    <!-- SECTION HERO -->


    <section class="container-fluid s_produtos">
        <div class="container-fav">
            <div class="_title">
                <h2>Produtos em destaque</h2>
                <label>
                    <div class="svg">
                        <img src="{{asset('site/img/search.svg')}}" alt="">
                    </div>
                    <input type="text" placeholder="Qual oferta você procura hoje?">
                </label>
            </div>
            <div class="_productlist">
                <div class="_product">
                    <div class="img">
                        <img src="{{asset('site/img/produtoCamisa.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <div class="img">
                            <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                        </div>
                        <h2>Polo Wear </h2>
                        <p class='oldPrice'>R$59,90</p>
                        <div class="price">
                            <h2>R$49,90</h2>
                        </div>

                        <div class="_hover">
                            <span>Para aproveitar essa oferta faça o seu login no club de vantagens</span>
                            <button>
                                <span>Fazer login</span>
                                <div class="svg">
                                    <img src="{{asset('site/img/arrowlong_right_wine.svg')}}" alt="">
                                </div>
                            </button>
                            <span>Não possui cadastro? <strong>Clique aqui.</strong></span>
                        </div>
                    </div>
                </div>
                <div class="_product">
                    <div class="img">
                        <img src="{{asset('site/img/produtoCamisa.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <div class="img">
                            <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                        </div>
                        <h2>Polo Wear </h2>
                        <p class='oldPrice'>R$59,90</p>
                        <div class="price">
                            <h2>R$49,90</h2>
                        </div>

                        <div class="_hover">
                            <span>Para aproveitar essa oferta faça o seu login no club de vantagens</span>
                            <button>
                                <span>Fazer login</span>
                                <div class="svg">
                                    <img src="{{asset('site/img/arrowlong_right_wine.svg')}}" alt="">
                                </div>
                            </button>
                            <span>Não possui cadastro? <strong>Clique aqui.</strong></span>
                        </div>
                    </div>
                </div>
                <div class="_product">
                    <div class="img">
                        <img src="{{asset('site/img/produtoCamisa.jpg')}}" alt="">
                    </div>
                    <div class="content">
                        <div class="img">
                            <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                        </div>
                        <h2>Polo Wear </h2>
                        <p class='oldPrice'>R$59,90</p>
                        <div class="price">
                            <h2>R$49,90</h2>
                        </div>

                        <div class="_hover">
                            <span>Para aproveitar essa oferta faça o seu login no club de vantagens</span>
                            <button>
                                <span>Fazer login</span>
                                <div class="svg">
                                    <img src="{{asset('site/img/arrowlong_right_wine.svg')}}" alt="">
                                </div>
                            </button>
                            <span>Não possui cadastro? <strong>Clique aqui.</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid s_parceiros">
        <div class="container-fav">
            <div class="_partnes">
                <div class="partner">
                    <img src="{{asset('site/img/logoprata.png')}}" alt="">
                </div>
                <div class="partner">
                    <img src="{{asset('site/img/logopremium.png')}}" alt="">
                </div>
                <div class="partner">
                    <img src="{{asset('site/img/logointerfood.png')}}" alt="">
                </div>
                <div class="partner">
                    <img src="{{asset('site/img/logoprata.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid s_descontos">
        <div class="container-fav">
            <div class="title">
                <h2>Top Descontos</h2>
            </div>

            <div class="_descontoList">
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
            </div>
            <div class="_descontoList">
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
            </div>

            <div class="title _title2">
                <h2>Novidades</h2>
            </div>

            <div class="_descontoList">
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
            </div>
            <div class="_descontoList">
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
                <div class="_descontoItem">
                    <div class="img">
                        <img src="{{asset('site/img/descontoItem.jpg')}}" alt="">
                    </div>
                    <main>
                        <div class="topcontent">
                            <div class="_exclusive">
                                <div class="svg">
                                    <img src="{{asset('site/img/ticketExclusivo.svg')}}" alt="">
                                </div>
                                <span>Exclusivo</span>
                            </div>
                            <div class="_marca">
                                <img src="{{asset('site/img/logoPolo.png')}}" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <span>20% de desconto + frete grátis na primeira compra acima de R$ 99,00</span>
                            <button class="btn-primary">
                                Ver oferta
                            </button>
                        </div>
                    </main>
                </div>
            </div>

        </div>
    </section>

    {{-- NUMEROS --}}
    @include("site.includes.numeros")

    <script>

    </script>

    @include("site.includes.footer")
