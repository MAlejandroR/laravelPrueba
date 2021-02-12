<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    <title>Document</title>
</head>
<body>
<header>
    <img src="" alt="" class="logo">
    <h1 class="titulo">Empresa personal</h1>
</header>
<nav class="menuppal">
    <a href="about">About</a>
    <a href="noticias">Noticias</a>
    <a href="administracion">Administración</a>
    <a href="contacta">Contacta</a>

</nav>
<main>
 @yield("contenido")

</main>
<footer>
@ Mi nombre, no copiar
</footer>

</body>
</html>
