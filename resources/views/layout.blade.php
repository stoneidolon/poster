<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>

<body>
@include('partials._nav')
<!-- Default Bootstrap Navbar -->

<div class="container">
    @include('partials._message')

    {{ Auth::check() ? "Logged In" : "Logged Out" }}

    @yield('content')
</div>
@include('partials._footer')

@include('partials._javascription')

@yield('scripts')
</body>
</html>