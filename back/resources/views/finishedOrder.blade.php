<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta class="csrf_token" name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <title>Document</title>
</head>

<body>
    <div class="nav-panel-wrapper">
        <div class="row navigation-panel">
            <div class=" col s2 hide-on-small-and-down navigation-element valign-wrapper ">
                <div class="navbar-element-wrapper vertical-align">
                    <a href="contribute" class="button-50">Contribute</a>
                </div>
            </div>
            <div class=" col s3 hide-on-small-and-down navigation-element valign-wrapper ">
                <div class="navbar-element-wrapper vertical-align">
                    <a href="contacts" class="button-50">Contact us</a>
                </div>
            </div>
            <div class="col s12 m4 center-align">
                <img src="{{ asset('img/logo.png') }}" alt="" class="logo" />
            </div>
            @guest
            <div class=" col s2 hide-on-small-and-down navigation-element valign-wrapper ">
                <div class="navbar-element-wrapper vertical-align">
                    <a href="auth/login" class="button-50">Sign in</a>
                </div>
            </div>
            <div class=" col s3 hide-on-small-and-down navigation-element valign-wrapper ">
                <div class="navbar-element-wrapper vertical-align">
                    <a href="auth/register" class="button-50">Sign up</a>
                </div>
            </div>
            @endguest
            @auth
            <div class="col s2"></div>
            <div class=" col s3 hide-on-small-and-down navigation-element valign-wrapper ">
                <div class="navbar-element-wrapper vertical-align">
                    <a href="#" class="button-50 dropdown-trigger" data-target="dropdown1">My cabinet<i class="material-icons dropdown-icon">arrow_drop_down</i></a>
                    <ul id='dropdown1' class='dropdown-content black white-text content'>
                        <li class="dropdown-link-item"><a href="cart" class="dropdown-link">My cart <i class="material-icons right">shopping_cart</i></a></li>
                        <li class="dropdown-link-item"><a href="#!" class="dropdown-link">My orders <i class="material-icons right">favorite_border</i></a></li>
                        <li class="dropdown-link-item">
                            <a href="#!" class="dropdown-link">Billing info <i class="material-icons right">info_outline</i></a>
                        </li>
                        <li class="dropdown-link-item">
                            <a href="#!" class="dropdown-link">Messages <i class="material-icons right">message</i></a>
                        </li>
                        <li class="dropdown-link-item"><a href="api/auth/logout" class="dropdown-link">Log Out <i class="material-icons right">exit_to_app</i></a></li>
                    </ul>
                </div>
            </div>
            @endauth
            <br />
        </div>
    </div>
    <div class="container center-align">
        <h1 class="white-text">Your order is successfully placed!</h1>
        <h3 class="white-text">You can check your orders in your <a href="#" class="white-text"><u>menu</u></a></h3>
    </div>
    <footer class="page-footer black white-text" style="border-top: 1px solid grey">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text big-spacing-text">Tiny backpacks</h5>
                    <p class="grey-text text-lighten-4">
                        Made specially for OneLab practise (Almaty, KZ).
                    </p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contacts</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">Instagram</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">Facebook</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">LinkedIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2021 Alexander Lee
                <a class="grey-text text-lighten-4 right" href="https://github.com/kukabora">Github</a
          >
        </div>
      </div>
    </footer>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/clickableBtns.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
  </body>
</html>
