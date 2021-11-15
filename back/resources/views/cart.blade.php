<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
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
                        <li class="dropdown-link-item"><a href="#!" class="dropdown-link">Log Out <i class="material-icons right">exit_to_app</i></a></li>
                    </ul>
                </div>
            </div>
            @endauth
        </div>
    </div>
                @if ($items)
                @php
                 $total = 0;
                @endphp
                <h5 class="white-text big-spacing-text" style="margin: 5%">
                    My shopping cart
                </h5>
                <div class="row">
                    <div class="col s12 m8">
                        <div class="row">
                            <div class="col s5 center-align white-text" style="font-size: calc(0.8vw + 0.8em)">
                                Product
                            </div>
                            <div class="col s4 center-align white-text" style="font-size: calc(0.8vw + 0.8em)">
                                Price
                            </div>
                            <div class="col s3 center-align white-text" style="font-size: calc(0.8vw + 0.8em)">
                                Color
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="margin: 0" />
                <div class="row" style="margin-bottom: 0">
                    <div class="col s12 m8">
                        <div class="custom-cartlist-container">
                @foreach ($items as $item)
                <div class="row cart-element valign-wrapper">
                    <div class="col s12 m3">
                        <a href="good">
                            <img src="storage/goodsImages/{{$item['image_field']}}" alt="" class="preview" />
                        </a>
                    </div>
                    <div class="col s12 m3 white-text">
                        <p class="big-spacing-text">
                            <a href="good" class="white-text">
                                <b>{{$item['good_name']}}</b>
                            </a>
                        </p>
                    </div>
                    <div class="col s12 m3 white-text">
                        <p class="big-spacing-text"><b>{{$item['price']}}$</b></p>
                    </div>
                    <div class="col s12 m3 white-text">
                        <p class="big-spacing-text"><b>Black</b></p>
                    </div>
                </div>
                <hr />
                @php
                    $total += $item['price'];
                @endphp
                @endforeach
            </div>
        </div>
        <div class="col s12 m4 white-text">
            <div class="total-information">
                <div class="checkout-information-element-wrapper">
                    <h6 class="big-spacing-text">SUMMARY</h6>
                </div>
                <div class="checkout-information-element-wrapper">
                    <hr />
                </div>
                <div class="checkout-information-element-wrapper">
                    <span class="big-spacing-text"> Do you have a promo-code? </span>
                </div>
                <div class="checkout-information-element-wrapper">
                    <div class="promo-code-data">
                        <input type="text" name="" id="" class="promo-input browser-default" /><input type="submit" class="big-spacing-text submit-promo-btn" value="APPLY" />
                    </div>
                </div>
                <div class="checkout-information-element-wrapper">
                    <hr />
                </div>
                <div class="checkout-information-element-wrapper">
                    <h6 class="big-spacing-text white-text">
                        <span class="left">SUBTOTAL</span
              ><span class="right grey-text">{{$total}}$</span>
                    </h6>
                </div>
                <br />
                <div class="checkout-information-element-wrapper">
                    <p class="big-spacing-text white-text">
                        <span class="left">SHIPPING</span
              ><span class="right grey-text">TBD</span>
                    </p>
                </div>
                <br />
                <div class="checkout-information-element-wrapper">
                    <p class="big-spacing-text white-text">
                        <span class="left">SALES TAX</span
              ><span class="right grey-text">TBD</span>
                    </p>
                </div>
                <br />
                <div class="checkout-information-element-wrapper">
                    <hr />
                </div>
                <br />
                <div class="checkout-information-element-wrapper">
                    <h6 class="big-spacing-text white-text">
                        <span class="left">ESTIMATED TOTAL</span
              ><span class="right grey-text">{{$total}}$</span>
                    </h6>
                </div>
                <br />
                <div class="checkout-information-element-wrapper">
                    <hr />
                </div>
                <br />
                <div class="checkout-information-element-wrapper">
                    @if ($billingInfo === null)
                    <a href="billing" class="btn hoverable browser-default checkout-btn big-spacing-text center-align ">CHECKOUT</a>
                    @else
                    <a href="api/placeOrder" class="btn hoverable browser-default checkout-btn big-spacing-text center-align ">CHECKOUT</a>
                    @endif
                </div>
                <br />
            </div>
        </div>
    </div>
                @else
                    <h1 class="white-text">
                        {{$msg}}
                    </h1>
                @endif


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
    <script src="{{ asset('js/clickableBtns.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
  </body>
</html>
