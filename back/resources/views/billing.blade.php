<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/billing-info.css') }}" />
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
            <br />
        </div>
    </div>

    <div class="container" style="margin-bottom: 5%">
        <h1 class="white-text center-align">A few more steps until we place your order</h1>
        <ul class="collapsible">
            <li>
                <div class="collapsible-header black-text info-header big-spacing-text">1. Billing address</div>
                <div class="collapsible-body white">
                    <div class="row">
                        <div class="col s12 m6">
                            <label for="fname" class="input-label black-text">First name <span class="red-text">*</span></label>
                            <input type="text" required name="fname" id="fname" class="billing-adress-input" placeholder="Type here">
                        </div>
                        <div class="col s12 m6">
                            <label for="lname" class="input-label black-text">Second name <span class="red-text">*</span></label>
                            <input type="text" required name="lname" id="lname" class="billing-adress-input" placeholder="Type here">
                        </div>
                        <div class="col s12 m12">
                            <label for="country" class="input-label black-text">Country <span class="red-text">*</span></label>
                            <input type="text" required name="country" id="country" class="billing-adress-input" placeholder="Type here">
                        </div>
                        <div class="col s12 m4">
                            <label for="city" class="input-label black-text">City <span class="red-text">*</span></label>
                            <input type="text" required name="city" id="city" class="billing-adress-input" placeholder="Type here">
                        </div>
                        <div class="col s12 m4">
                            <label for="street" class="input-label black-text">Street <span class="red-text">*</span></label>
                            <input type="text" required name="street" id="street" class="billing-adress-input" placeholder="Type here">
                        </div>
                        <div class="col s12 m4">
                            <label for="code" class="input-label black-text">Postal code <span class="red-text">*</span></label>
                            <input type="text" required name="code" id="code" class="billing-adress-input" placeholder="Type here">
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header black-text info-header big-spacing-text">2. Delivery</div>
                <div class="collapsible-body white">
                    <h3>Please, select the delivery company and method</h3>

                    <div class="row">
                        <div class="col s12 m6">
                            <label class="input-label">Shipping select</label>
                            <select class="browser-default">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">Air</option>
                                <option value="2">Sea-shipping</option>
                                <option value="3">Self-take</option>
                              </select>

                        </div>
                        <div class="col s12 m6">
                            <label class="input-label">Company select</label>
                            <select class="browser-default">
                                <option value="" disabled selected>Company</option>
                                <option value="1">FedEX</option>
                                <option value="2">DMS</option>
                                <option value="3">Russia mailing</option>
                              </select>

                        </div>
                    </div>

                </div>

            </li>
            <li>
                <div class="collapsible-header black-text info-header big-spacing-text">3. Payment method</div>
                <div class="collapsible-body white"><span>
                    <h3 class="black-text">Please, check your credit-card type</h3>
                    <div class="row">

                        <div class="col s12 m6">
                            <label class="input-label">Credit card type</label>
                            <select class="browser-default">
                                <option value="" disabled selected>Type</option>
                                <option value="1">MasterCard</option>
                                <option value="2">VISA</option>
                                <option value="3">American Express</option>
                            </select>
                        </div>
                        <div class="col s12 m6">
                            <label class="input-label">Info</label>
                            <div class="card-body">
                                <div class="magnetize-line"></div>
                                <div class="card-info">
                                    <h5>Credit card info</h5>
                                </div>
                                <input type="text" name="" id="" class="browser-default card-number-input card-input " placeholder="Card code">
                                <input type="text" name="" id="" class="browser-default valid-thru-field card-input " placeholder="Valid Thru">
                                <input type="text" name="" id="" class="browser-default name-field card-input " placeholder="Holder name">
                            </div>
                        </div>
                    </div>
                </span></div>
            </li>
        </ul>
        <button class="btn red darken-4 white-text center-align">Save information</button>
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
    <script src="{{ asset('js/collapsible.js') }}"></script>
  </body>
</html>
