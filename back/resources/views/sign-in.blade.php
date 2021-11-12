<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <div class="authentication-form-container">
        <a href="index" class="text-grey back-button big-spacing-text"> <i class="material-icons">chevron_left</i>Back</a>
        <div class="row">

            <div class="col s12 m5 center-align form-custom-control">
                <h3 class="white-text big-spacing-text">Fill the form below</h3>
                <form style="padding: 5%; display: block;" action="/api/auth/newUserRegister" method="POST">
                    {{ csrf_field() }}
                    <div class="input-field">
                        <input name="login" type="text" placeholder="Login" class="thin-writing white-text custom-input" />
                    </div>
                    <div class="input-field">
                        <input name="email" type="text" placeholder="Email" class="thin-writing white-text custom-input" />
                    </div>
                    <div class="input-field">
                        <input name="pass" type="password" placeholder="Password" class="thin-writing white-text custom-input" />
                    </div>
                    <div class="input-field">
                        <input name="fname" type="text" placeholder="First Name" class="thin-writing white-text custom-input" />
                    </div>
                    <div class="input-field">
                        <input name="lname" type="text" placeholder="Second Name" class="thin-writing white-text custom-input" />
                    </div>
                    <div class="input-field">
                        <input name="bday" placeholder="Birth Date" class="textbox-n thin-writing white-text custom-input" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
                    </div>
                    <div class="input-field">
                        <input name="country" type="text" id="autocomplete-input" placeholder="Country" class="autocomplete thin-writing white-text custom-input" />
                    </div>
                    <button type="submit" class="button-50" style="font-size: calc(0.7vw + 0.7em); padding: 5%;">Sign Up</button>
                </form>
            </div>
            <div class="col s12 m7" style="position: relative;">
                <div class="logo-container">
                    <img src="{{ asset('img/logo.png') }}" alt="" class="logo-form">
                </div>
            </div>
        </div>
    </div>



    <footer class="page-footer black white-text" style="border-top: 1px solid grey;">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text big-spacing-text">Tiny backpacks</h5>
                    <p class="grey-text text-lighten-4">Made specially for OneLab practise (Almaty, KZ).</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contacts</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">LinkedIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2021 Alexander Lee
                <a class="grey-text text-lighten-4 right" href="https://github.com/kukabora">Github</a>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/clickableBtns.js') }}">
    </script>
</body>

</html>
