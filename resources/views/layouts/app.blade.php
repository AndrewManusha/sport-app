<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Основные настройки -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <header id="header">
        <nav class="header-inner">

        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>
    
    <footer>
        <div class="footer-inner">

        </div>
    </footer>
    
    <script src="{{ mix('js/app.js') }}" defer></script>

    @yield('scripts')
</body>
</html>