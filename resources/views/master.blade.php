<!DOCTYPE html>
<html lang="en">
<head>
    @extends ('styling')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin-bottom: 30px;">

    @yield('konten') <br>

<footer>
    <div class="navbar d-flex flex-row justify-content-around w-100 px-3 fixed-bottom">
            <div class="navigation d-flex flex-row justify-content-around w-100">
                <div class="nav-link text-center w-100">
                    <a href="{{url('/landing')}}" class="nv">

                        <span class="material-icons" type="button">home</span>
                        <p class="nav-text-title">Home</p>
                    </a>
                </div>
                <div class="nav-link text-center w-100">
                    <a href="" class="nv">

                        <span class="material-icons">receipt</span>
                        <p class="nav-text-title">Order</p>
                    </a>
                </div>
                <div class="nav-link text-center w-100">
                    <a href="{{url('/about')}}" class="nv">

                        <span class="material-icons">import_contacts</span>
                        <p class="nav-text-title">About</p>
                    </a>
                </div>
                <div class="nav-link text-center w-100">
                    <a href="{{url('/dashboard')}}" class="nv active">

                        <span class="material-icons">account_circle</span>
                        <p class="nav-text-title">Dashboard</p>
                    </a>
                </div>

                {{-- <li class="nav-item">
                    <a href="{{url('/pengaturan')}}" class="nav-link">

                       <span class="material-icons">receipt</span>
                       <p class="nav-text-title">Order</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/pengaturan')}}" class="nav-link">

                        <span class="material-icons">import_contacts</span>
                        <p class="nav-text-title">About</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/pengaturan')}}" class="nav-link">

                        <span class="material-icons">account_circle</span>
                        <p class="nav-text-title">Dashboard</p>
                    </a>
                </li> --}}
            </div>
        </div>
</footer>

<style>
    a {
        color: #b0b0b0;
    }
    a.active {
        color: #2A49CE;
    }
</style>

</body>
</html>
