<!DOCTYPE html>
<html>

<head>
    <title>Contoh Blade Template</title>
</head>

<body>

@include('soal_no_1.partials.header')

<div>
    @yield('content')
</div>

@include('soal_no_1.partials.footer')

</body>

</html>