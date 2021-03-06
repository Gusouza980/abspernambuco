<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    @if(isset($pagina))
        <title>{{$pagina->titulo}}</title>
        <meta name='keywords' content='{{$pagina->palavras}}'>
        <meta name='description' content='{{$pagina->descricao}}'>
        <meta property='og:title' content='{{$pagina->titulo}}'>
        <meta property='og:site_name' content='{{$pagina->titulo}}'>
        <meta name='twitter:title' content='{{$pagina->titulo}}'>
        <meta property='og:description' content='{{$pagina->descricao}}'>
        <meta name='twitter:description' content='{{$pagina->descricao}}'>
        
    @else
        <title>Associação Brasileira de Sommeliers - Brasil</title>
        <meta name='keywords' content=''>
        <meta name='description' content=''>
        <meta property='og:title' content='Associação Brasileira de Sommeliers - Brasil'>
        <meta property='og:site_name' content='Associação Brasileira de Sommeliers - Brasil'>
        <meta name='twitter:title' content='Associação Brasileira de Sommeliers - Brasil'>
        <meta property='og:description' content=''>
        <meta name='twitter:description' content=''>
    @endif
    <link rel='canonical' href='https://homolog.abs-brasil.com'>
    
    <meta property='og:url' content='https://homolog.abs-brasil.com'>
    <meta http-equiv=Pragma content=no-cache>
    <meta http-equiv=Expires content=-1>
    <meta http-equiv=CACHE-CONTROL content=NO-CACHE>    
    <meta name='theme-color' content='#8A143A'>
    <meta name='msapplication-navbutton-color' content='#8A143A'>
    <meta name='apple-mobile-web-app-status-bar-style' content='#8A143A'>
    <meta property='og:type' content='website'>
    <meta name='twitter:image' content='https://homolog.abs-brasil.com/img/og_home.jpg'>
    <meta property='og:image' content='https://homolog.abs-brasil.com/img/og_home.jpg'>
    <meta property='og:image:secure_url' content='https://homolog.abs-brasil.com/img/og_home.jpg'>
    <meta name='twitter:image:alt' content='Associação Brasileira de Sommeliers - Brasil'>
    <meta property='og:image:alt' content='Associação Brasileira de Sommeliers - Brasil'>
    <meta property='og:image:width' content='1200'>
    <meta property='og:image:height' content='630'>
    <meta property='og:image:type' content='image/jpeg'>
    <meta name='robots' content='index,follow' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='mobile-web-app-capable' content='yes'>
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='twitter:card' content='summary'>
    <link rel='icon' type='image/vnd.microsoft.icon'
        sizes='16x16 32x32 48x48 64x64 96x96 128x128 144x144 180x180 192x192 256x256'
        href='{{ asset('favicon.ico') }}' />
    <link rel='apple-touch-icon' sizes='180x180' href='{{ asset('site/img/logo180.png') }}'>
    {{-- <link rel='manifest' href='/_ifl1/manifest.php' type='application/x-web-app-manifest+json'> --}}
    <link rel='preload' type='text/css' as='style'
        href='https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Lato&family=Roboto:wght@500&family=Spartan:wght@400;700&display=swap'
        crossorigin='anonymous' />
    <link rel='preload' type='text/css' as='style' href='{{ asset('site/css/reset.css') }}' />
    <link rel='preload' type='text/css' as='style' href='{{ asset('site/css/sistema.css') }}' />

    <link rel='preload' type='application/javascript' as='script' href='https://code.jquery.com/jquery-3.5.1.min.js'
        integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous' />
    <link rel='preload' type='application/javascript' as='script' href='{{ asset('site/js/script.js') }}'>
    
    <link rel='preload' type='text/css' as='style' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous'/><link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous'>
   
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Lato&family=Roboto:wght@500&family=Spartan:wght@400;700&display=swap'
        crossorigin='anonymous'>
    <link rel='stylesheet' href='{{ asset("site/css/reset.css") }}'>
    <link rel='stylesheet' href='{{ asset("site/css/sistema.css") }}'>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'
        integrity='sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=' crossorigin='anonymous'></script>
</head>

  <body class="_minhaArea">
    <section class="container-fluid _menu">
        <div class="container-fav">
            <nav>
                <ul>
                <li class="_active">
                    <a href="/minha-area">
                        <div class="svg">
                            <img src="{{asset('site/img/sistema/user.svg')}}" alt="">
                        </div>
                        Minha Área
                    </a>
                </li>
                    <li>
                        <a href="/minha-area/compras">
                            <div class="svg">
                                <img src="{{asset('site/img/sistema/bag.svg')}}" alt="">
                            </div>
                            Meus Pedidos
                        </a>
                    </li>
                    <li>
                        <a href="/minha-area/matriculas">
                            <div class="svg">
                                <img src="{{asset('site/img/sistema/page.svg')}}" alt="">
                            </div>
                            Minhas Matrículas
                        </a>
                    </li>
                    <li>
                        <a href="/minha-area/dados">
                            <div class="svg">
                                <img src="{{asset('site/img/sistema/clipboard.svg')}}" alt="">
                            </div>
                            Meus Dados
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="_user">
                <div class="_img">
                    <img src="{{asset('site/img/sistema/user.svg')}}" alt="">
                </div>
                <div class="_text">
                    Olá <span class="_username">{{explode(" ", session()->get("aluno")["nome"])[0]}}</span>
                    <a href="/" class="_sair">
                        Sair
                    </a></div>
            </div>
        </div>

    </section>
    
    <div class="_menuMax">
        <img src="{{asset('site/img/arrowright.svg')}}" alt="">
    </div>
    <section class="container-fluid _menu _mobileMenu">
        <div class="_closeButton">
            <img src="{{asset('site/img/arrowleft.svg')}}" alt="">
        </div>
        <div class="container-fav">
            <nav>
                <ul>
                <li class="_active">
                    <a href="/minha-area/">
                        <div class="svg">
                            <img src="{{asset('site/img/sistema/user.svg')}}" alt="">
                        </div>
                        Minha Área
                    </a>
                </li>
                    <li>
                        <a href="/minha-area/compras">
                            <div class="svg">
                                <img src="{{asset('site/img/sistema/bag.svg')}}" alt="">
                            </div>
                            Meus Pedidos
                        </a>
                    </li>
                    <li>
                        <a href="/minha-area/matriculas">
                            <div class="svg">
                                <img src="{{asset('site/img/sistema/page.svg')}}" alt="">
                            </div>
                            Minhas Matrículas
                        </a>
                    </li>
                    <li>
                        <a href="/minha-area/dados">
                            <div class="svg">
                                <img src="{{asset('site/img/sistema/clipboard.svg')}}" alt="">
                            </div>
                            Meus Dados
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="_user">
                <div class="_img">
                    <img src="{{asset('site/img/sistema/user.svg')}}" alt="">
                </div>
                <div class="_text">
                    Olá <span class="_username">{{session()->get("aluno")["nome"]}}</span>
                    <a href="/" class="_sair">
                        Sair
                    </a></div>
            </div>
        </div>

    </section>


    <section class="container-fluid _minhasMatriculas">
        <div class="container-fav">
            <div class="_top">
                <h2>Minha Área</h2>
                <div class="_topbutton">
                    <p>Ver mais +</p>
                    <div class="_btn">
                        <img src="{{asset('site/img/sistema/threeDots.svg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="_scrollMatriculas">
                
            <div class="_matriculasList">
                <div class="_matricula">
                    <div class="_image">
                        <img src="{{asset('site/img/sistema/Icone (2).png')}}" alt="">
                    </div>
                    <div class="_content">
                        <h3>Cursos</h3>
                        <p>Nenhuma Matrícula</p>
                        <button class="btn-primary" onclick="window.location.href = '/minha-area/matriculas'">
                          + VER CURSOS
                            <div class="_svg">
                                <img src="{{asset('site/img/sistema/buttonArrowRight.svg')}}" alt="">
                            </div>
                        </button>
                    </div>

                </div>
                <div class="_matricula">
                    <div class="_image">
                        <img src="{{asset('site/img/sistema/Icone (3).png')}}" alt="">
                    </div>
                    <div class="_content">
                        <h3>Eventos</h3>
                        <p>Nenhuma Inscrição</p>
                        <button class="btn-primary" style="background-color: orange;" onclick="window.location.href = '/minha-area/compras'">
                         + VER EVENTOS
                            <div class="_svg">
                                <img src="{{asset('site/img/sistema/buttonArrowRight.svg')}}" alt="">
                            </div>
                        </button>
                    </div>

                </div>
                <div class="_matricula">
                    <div class="_image">
                        <img src="{{asset('site/img/sistema/Icone (1).png')}}" alt="">
                    </div>
                    <div class="_content">
                        <h3>Contribuições</h3>
                        <p>Não Associado</p>
                        <button class="btn-primary" style="background-color: green;"  onclick="window.location.href = '/minha-area/compras'">
                         QUERO ME ASSOCIAR
                            <div class="_svg">
                                <img src="{{asset('site/img/sistema/buttonArrowRight.svg')}}" alt="">
                            </div>
                        </button>
                    </div>

                </div>
            </div>
            </div>
        </div>
    </section>

  


    <footer class="container-fluid">
      <section class="container-fav s_faleConosco">
        <div class="_text">
          <h3>FALE CONOSCO</h3>
          <h2>Entre em contato com a nossa equipe</h2>
          <p>Estamos prontos para te ajudar</p>
        </div>
        <div class="_buttons">
          <div>
            <img src="{{asset('site/img/sistema/chat.svg')}}" alt="" />
          </div>
          <div>
            <img src="{{asset('site/img/sistema/call.svg')}}" alt="" />
          </div>
          <div>
            <img src="{{asset('site/img/sistema/whatsappButton.svg')}}" alt="" />
          </div>
          <div>
            <img src="{{asset('site/img/sistema/envelopButton.svg')}}" alt="" />
          </div>
        </div>
      </section>
      <section class="container-fav s_info">
        <div class="_left">
          <p>Rua Gaspar Lopes, 34 Centro, 37130-153 Alfenas/MG</p>

          <div class="_siga">
            <p>Siga-nos</p>
            <div class="_social">
              <a href="/"
                ><img src="{{asset('site/img/sistema/instagramLogo.svg')}}" alt=""
              /></a>
              <a href="/"><img src="{{asset('site/img/sistema/facebookLogo.svg')}}" alt="" /></a>
            </div>
          </div>

          <div class="_compraSegura">
            <div class="_svg">
              <img src="{{asset('site/img/sistema/lock.svg')}}" alt="" />
            </div>
            <p>Compra 100% segura</p>
          </div>
        </div>
        <div class="_right">
          <p>Formas de Pagamento</p>
          <div class="_formasPagamento">
            <img src="{{asset('site/img/sistema/pagamentoLogos1.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos2.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos3.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos4.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos5.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos6.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos7.jpg')}}" alt="" />
            <img src="{{asset('site/img/sistema/pagamentoLogos8.jpg')}}" alt="" />
          </div>
        </div>
      </section>
    </footer>

   
    <section class="container-fluid _copyRight">
        <div class="container-fav">
          <p>Copyright © ABS Brasil - Todos os direitos reservados. Todo o conteúdo do site, incluindo fotos, imagens, logotipos, marcas, dizeres, som, software, conjunto imagem, layout e trade dress, são de propriedade exclusiva da ABS. É vedada a reprodução total ou parcial de qualquer elemento de identidade sem a expressa autorização. A violação de qualquer direito mencionado implicará na responsabilização cível e criminal nos termos da Lei. CNPJ: 17.190.409/0001-10
          </p>
  
          <p> 
              <strong>
                  Desenvolvido por 
              <a href="https://7seventrends.com"" class="_img">
                  <img src="{{asset('site/img/_logo7seven.png')}}" style="filter: brightness(0);""  alt="">
              </a> </div></p> 
              </strong>
          </p>          
        </div>
      </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    <script>
                
        $("._menuMax").click(() => {
        $("._mobileMenu").css("display", "flex");
        $("._mobileMenu").animate(
            {
            left: "0",
            top:"0",
            },
            500
        );
        });

        $("section._mobileMenu ._closeButton").click(() => {
        $("._mobileMenu").animate(
            {
            left: "-200vw",
            top:"0",
            },
            500
        );
        });

    </script>
  </body>
</html>
