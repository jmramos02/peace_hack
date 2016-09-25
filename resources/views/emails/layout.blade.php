<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Volteer</title>
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
        <style>
            .avatar-container img {
                width: 40px;
                height: 40px;
                border-radius: 100px;
                margin-right .5rem;
            }

            .dropdown {
                margin-top: .5rem;
            }
            body {
                /* background: #f8f8fa;*/
                background: #FFF176;
                font-family: "Titillium Web", "Titillium", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            }
            a:hover {
                text-decoration: none;
            }

            .btn {
                transition: 0.3s all ease;
            }

            .float-right {
                float: right;
            }

            .float-left {
                float: left;
            }

            .light {
                font-weight: 300;
            }

            .bold {
                font-weight: 700;
            }

            .eer {
                color: #d32f2f;
            }

            .volt {
                color: #ffeb3b;
            }

            .btn-eer {
                background: #d32f2f;
                color: #fff;
            }

            .btn-eer:hover {
                background: #b71c1c;
                color: #fff;
            }

            .btn-volt {
                background: #ffeb3b;
                color: #d32f2f; 
            }

            .btn-volt:hover {
                background: #F9A825;
                color: #d32f2f; 
            }

            .btn :active:focus {
                color: #fff !important;
            }

            .navbar-brand {
                margin-top: 3px;
            }
            .navbar-brand img {
                max-height: 50px;
            }   

            .nav-link {
                font-weight: 700;
                font-size: 1.4rem;
                padding: 0.5rem;
                margin-top: 3px;
            }

            .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .active>.nav-link:focus, .navbar-light .navbar-nav .active>.nav-link:hover, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.active:focus, .navbar-light .navbar-nav .nav-link.active:hover, .navbar-light .navbar-nav .nav-link.open, .navbar-light .navbar-nav .nav-link.open:focus, .navbar-light .navbar-nav .nav-link.open:hover, .navbar-light .navbar-nav .open>.nav-link, .navbar-light .navbar-nav .open>.nav-link:focus, .navbar-light .navbar-nav .open>.nav-link:hover {
                color: #D32F2F;
            }

            .navbar-light .navbar-nav .nav-link {
                color: #D32F2F;
            }
            .navbar-light .navbar-nav .nav-link:hover {
                color: #b71c1c;
            }

            .login {
                margin-top: 3px;
                font-weight: 700;
                color: #b71c1c;
            }

            .bg-faded {
                background-color: #fff;
            }

            .headline {
                text-align: center;
            }

            .landing-content {
                position: relative;
                z-index: 1100;
            }

            .landing-content img {
                margin-top: 10%;
            }

            .landing .logo-landing {
                max-width: 256px;
            }

            .about {
                text-align: center;
                padding: 5rem;
                background: #f8f8f8;
            }

            .home .date-time {
                color: #9E9E9E;
            }

            .volt-container {
                position: relative;
            }
            .volt-points {
                padding: 0.5rem;
                background: #ffeb3b;
                color: #D32F2F;
                font-weight: 700;
                position: absolute;
                right:0;
                bottom:0;
            }

            .card {
                box-shadow: 0px 3px 6px rgba(0,0,0,0.2);
                transition: 0.3s all ease;
            }

            .card:hover {
                transform: translateY(-10px);
            }

            .home .card-img-top {
                max-width: 348px;
            }

            .home .card-title {
                max-height: 26px;
            }
            .home .card-text {
                max-height: 72px;
                text-overflow: ellipsis;
            }

            .btn-fb {
                background: #3b5998;
                border: none;
            }

            .login .card {
                margin-top: 40%;
            }

            .login .logo {
                float: left;
                padding-right: 1.35rem;
            }

            .logo-v {
                max-width: 200px;
                float: left;
                padding-right: 1.35rem;
            }

            .login .card-title {
                margin-top: 9%;
            }

            .btn-fb {
                font-family: "Tahoma", sans-serif;
            }

            .btn-fb:hover {
                background: #293E6B;
            }

            .fa-facebook {
                padding-right: 0.7rem;
            }

            .details .date {
                margin-bottom: 0.3rem;
            }

            .hero {
                background-size: cover;
                background-position: center center;
                background-attachment: fixed;
                padding: 8rem;
                text-align: center;
                color: #fff;
                position: relative;
            }

            .redeem-bg {
                background: url('../img/bg.jpg');
                background-size: cover;
                background-position: center center;
                background-attachment: fixed;
            }

            .overlay {
                background: rgba(0,0,0,0.45);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 999;
            }

            .hero .event-title {
                position: relative;
                z-index: 1100;
            }

            .confirmation .card-block {
                text-align: center;
            }

            .confirmation .back {
                padding: .5rem 1rem;

            }

            .confirmation .back:hover {
                text-decoration: none;
            }
            .profile-link a:hover {
                text-decoration: none;
            }

            #dropdownMenuButton  {
                padding: 0;
                background: none;
                border: none;
                width: 100%;
            }

            #dropdownMenuButton:focus {
                outline: none;
            }

            .dropdown-menu {
                width: 100%;
            }

            .cancel-confirmation .card{
                text-align: center;
            }
        </style>
        <!-- CSRF Token -->
    </head>
    <body>
        <nav class="navbar navbar-light bg-faded">
            <a class="navbar-brand" href="#">
                <img src="https://volteer.herokuapp.com/images/logo.png" alt="Volteer">
            </a>
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="https://volteer.herokuapp.com/">Go to site</a>
                </li>
            </ul>
            </form>
        </nav>

        @yield('content')

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/30b1b5bdff.js"></script>
    </body>
</html>
