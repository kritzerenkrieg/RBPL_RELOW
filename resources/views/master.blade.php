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
<nav class="navbar border-top navbar-expand fixed-bottom">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="{{url('/landing')}}" class="nav-link">
                        {{-- <img src="\img\Home.png" alt=""> --}}
                        <span class="material-icons" type="button">home</span>
                        <p class="nav-text-title">Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/pengaturan')}}" class="nav-link">
                       {{-- <img src="\img\Receipt.png" alt=""> --}}
                       <span class="material-icons">receipt</span>
                       <p class="nav-text-title">Order</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/pengaturan')}}" class="nav-link">
                        {{-- <img src="\img\Import contacts.png" alt=""> --}}
                        <span class="material-icons">import_contacts</span>
                        <p class="nav-text-title">About</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/pengaturan')}}" class="nav-link">
                        {{-- <img src="\img\Account circle.png" alt=""> --}}
                        <span class="material-icons">account_circle</span>
                        <p class="nav-text-title">Dashboard</p>
                    </a>
                </li>
            </ul>
        </nav>
</footer>

<script>
    $(document).ready(function () {
    $(".navbar-nav").on("click", "a", function () {
        $(".navbar-nav a.active").removeClass("active");
        $(this).addClass("active");
    });
});
</script>
</body>
</html>
