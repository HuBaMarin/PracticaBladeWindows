<nav class="h-10v bg-nav flex flex-row justify-center items-center
space-x-3 p-1">

    <a href="#" class="btn btn-sm  btn-neutral">Home</a>
    <a href="#" class="btn  btn-sm  btn-primary">About</a>
    <a href="#" class="btn  btn-sm  btn-info">Contacta</a>
    @auth

        <a href="#" class="btn  btn-sm  btn-primary">Alumnos</a>
        <a href="{{route("Ejemplo.index")}}" class="btn  btn-sm  btn-info">Ejemplo</a>
    @endauth


</nav>
