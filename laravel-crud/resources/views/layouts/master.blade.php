<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title')</title>
       <link rel="stylesheet" href="{{ asset('build/assets/app-Jb57it_6.css') }}">
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

    @yield('content')

    @yield('modal')
    
    <!-- ✅ JS Files -->
    <script src="{{ asset('build/assets/app-QWxJxQWj.js') }}" defer></script>
    <script src="{{ asset('build/assets/custom-CZYSJOFj.js') }}" defer></script>
</body>
</html>