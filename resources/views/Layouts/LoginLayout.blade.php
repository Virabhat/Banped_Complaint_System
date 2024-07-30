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
            </div>
        </nav>
    </Header>

    <main>
        @yield('content')
    </main>

    <footer>
        <footer class="bg-dark text-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2024 ระบบร้องเรียนปัญหาในชุมชน &nbsp; : &nbsp; <i class="fa-solid fa-pen-to-square"
                    style="color: #FFFF;"></i> บ้านเป็ด.com
            </div>
        </footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>