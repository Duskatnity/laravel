
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <!-- Esta línea para la codificación de carácteres -->
  <meta charset="utf-8">
  <!-- Esta línea es para garantizar un diseño responsive que se adapte a todas las pantallas -->
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="shortcut icon" href="https://www.youtube.com/s/desktop/12d6b690/img/favicon.ico">

  <title>Título</title>
  <meta name="description" content="descripción de la web, se recomienda 90 caracteres">
  <meta name="keywords" 	 content="palabras clave, separadas, por comas">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <header>
    <div class="top-bar-title">
      <h1>Usuarios</h1>
    </div>
    <div class="top-bar-hamburguer">
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <title>menu</title>
          <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
        </svg>
      </button>
    </div>
  </header>
  <main>
      @yield('content')
  </main>
</body>

</html>
