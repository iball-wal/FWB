<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="d-flex flex-column vh-100">

@include('partials.navbar')

<main class="flex-grow-1">
    @yield('content')
</main>

@include('partials.footer')

</body>
</html>