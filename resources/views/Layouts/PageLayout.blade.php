<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    @yield('CssPage')
</head>

<body>

    <Header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h2> <i class="fa-solid fa-pen-to-square" style="color: #FFFF;"></i> บ้านเป็ด.com </h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ร้องเรียน</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">เกี่ยวกับ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">ติดต่อ</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{ url('Login') }}">
                                <button type="button" class="btn btn-light rounded-pill"> <i class="fa-solid fa-circle-user"
                                        style="color: #74C0FC;"></i> เข้าสู่ระบบ</button>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </Header>

    <main>
        @yield('content')
    </main>

    <footer>
        <footer class="bg-dark text-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2020 Copyright: บ้านเป็ด.com
            </div>
            <!-- Copyright -->
        </footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    


</body>

</html>