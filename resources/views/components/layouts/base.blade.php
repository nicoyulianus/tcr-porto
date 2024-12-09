<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>
    @yield('styles')
  </head>
  <body>
    <x-navbar/>
    <main>
      {{ $slot }}
    </main>
    <x-footer/>
    @stack('scripts')
  </body>
</html>
