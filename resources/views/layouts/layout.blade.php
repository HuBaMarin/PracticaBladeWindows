<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield("descripcion")">
    <title>@yield("titulo")</title>
    @vite("resources/css/app.css")
</head>
<body>

<x-layout.header/>
<x-layout.navbar/>
<main>
    @yield("contenido")
</main>
<footer>
    @yield("footer")
</footer>
</body>
</html>
