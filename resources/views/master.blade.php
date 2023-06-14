<!DOCTYPE html>
<html lang="en">
<head>
    @extends ('styling')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    @yield('konten') <br>

<footer>
<nav class="navbar navbar-light bg-light border-top navbar-expand fixed-bottom">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="{{url('/landing')}}" class="nav-link">
                        <img src="\img\Home.png" alt="memek">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                       <img src="\img\Receipt.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img src="\img\Import contacts.png" alt="">
                    </a>
                </li>
               
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <img src="\img\Account circle.png" alt="">
                    </a>
                </li>
            </ul>
        </nav>
</footer>

</body>
</html>