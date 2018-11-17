<!doctype html>
<html lang="en">

@include('Includes.head')

<body>
@include('Includes.menu')

<main role="main">
    @yield('content')
</main>

@include('Includes.jsfooter')
@include('Includes.footer')

</body>
</html>