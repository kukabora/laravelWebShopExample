<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/materialize.css">
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="stylesheet" href="src/css/forms.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <div class="authentication-form-container">
        <a href="index.html" class="text-grey back-button big-spacing-text"> <i class="material-icons">chevron_left</i>Back</a>
        <div class="row">
            <div class="col s12 m7" style="position: relative;">
                <div class="logo-container" style="margin-top: 0%;">
                    <img src="src/img/logo.png" alt="" class="logo-form">
                </div>
            </div>
            <div class="col s12 m5 center-align form-custom-control">
                <h3 class="white-text big-spacing-text">Fill the form below</h3>
                <form style="padding: 5%; display: block;">
                    <div class="input-field">
                        <input type="text" placeholder="Login" class="thin-writing white-text custom-input" />
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Password" class="thin-writing white-text custom-input" />
                    </div>
                    <p>
                        <label>
                          <input type="checkbox" />
                          <span>Remember me</span>
                        </label>
                    </p>
                    <button type="submit" class="button-50 " style="font-size: calc(0.7vw + 0.7em); padding: 3%;">Sign In</button>
                </form>
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
    <script src="src/js/clickableBtns.js">
    </script>
</body>

</html>