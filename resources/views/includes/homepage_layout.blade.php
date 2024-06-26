<!doctype html>

<html>

<head>

    @include('includes.head')

</head>

<header class="#">

    @include('includes.header')
    @include('includes.category')

</header>

<body>

    <div class="container">


        <div id="main" class="row">

            @yield('content')

        </div>

        <footer class="row">

            @include('includes.footer')

        </footer>

    </div>

</body>

</html>
