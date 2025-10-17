<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Table Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    {{-- Header --}}
    @include('layout.header')

    {{-- Menu --}}
    @include('layout.menu')

    <div class="container mt-4">
        {{-- Tempat isi konten --}}
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('layout.footer')

</body>
</html>
