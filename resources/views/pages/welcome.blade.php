<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>TCR-PORTO</title>
    <style>
.background {
    background-image: url("./img/Feature Graphic.jpg");
    background-size: cover;
    background-position: center;
    width: 100%;
}
.gradient-box {
    background: linear-gradient(
        to right,
        rgba(17, 17, 17, 1),
        rgba(51, 51, 51, 1)
    );
}

@media (max-width: 767px) {
    .no-background {
        background-image: none;
    }
}

@media (min-width: 768px) {
    .no-background {
        background-image: url("/img/Feature Graphic.jpg");
        background-size: cover;
        background-position: center;
    }
}
</style>
  </head>
  <body>
    @include('component.navbar')
    @include('component.main')
    @include('component.footer')
    <script>
      const menuToggle = document.getElementById("menu-toggle");
      const menuClose = document.getElementById("menu-close");
      const mobileMenu = document.getElementById("mobile-menu");

      menuToggle.addEventListener("click", () => {
        mobileMenu.classList.remove("-translate-x-full");
      });

      menuClose.addEventListener("click", () => {
        mobileMenu.classList.add("-translate-x-full");
      });
    </script>
  </body>
</html>
