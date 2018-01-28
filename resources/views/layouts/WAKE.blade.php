<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/my_website.css')}}"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>@yield('titulo')</title>
  </head>

  <body>
    <nav class="orange z-depth-0">
      <div class="nav-wrapper container">
        <a href="" class="brand-logo center" id="logomarca">WAKE</a>
        <ul class="left hide-on-med-and-down">
          <li><a href="/">home</a></li>
          <li><a href="/pacotes">pacotes</a></li>
          <li><a href="/contact">contato</a></li>
        </ul>

        <ul class="right hide-on-med-and-down">
          <li><a href="/login">entrar</a></li>
          <li><a href="/register">criar conta</a></li>
        </ul>
      </div>
    </nav>

    @yield('content')

    <footer class="page-footer orange z-depth-0 sem">
      <div class="row">
        <div class="col s4">
          <p>Venha experimentar o que é estar acordado de verdade.</p>
        </div>
        <div class="col s4">
        </div>
        <div class="col s4">
          <p>Encontre-nos também nas redes sociais:</p>
          <a href="#"><img src="img/icones/redes-sociais/facebook.svg" alt="facebook" height="40" width="40"></a>
          <a href="#"><img src="img/icones/redes-sociais/instagram.svg" alt="instagram" height="40" width="40"></a>
          <a href="#"><img src="img/icones/redes-sociais/pinterest.svg" alt="pinterest" height="40" width="40"></a>
          <a href="#"><img src="img/icones/redes-sociais/twitter.svg" alt="twitter" height="40" width="40"></a>
        </div>
      </div>
    </footer>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

  </body>
</html>
