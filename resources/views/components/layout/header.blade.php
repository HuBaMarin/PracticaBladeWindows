<!-- Mobile designe-->
<header class="sm:hidden bg-header text-white
flex flex-col justify-around items-center h-15v">
{{--    <img class="p-4 w-1/12 h-1/2" src="{{asset("images/logo.png")}}" alt="logo"/>--}}
    <button class="btn glass text-white">Acceder</button>
    <button class="btn glass">>Registrarme</button>
</header>

<header class="miheader">
{{--    <img class="p-4 h-full" src="{{asset("images/logo.png")}}" alt="logo"/>--}}
    <h1 class="text-4xl">Proyecto de laravel</h1>
    <div>
        @guest
            <a href="{{route("login")}}" class="btn glass text-white">Acceder</a>
            <a href="{{route("register")}}" class="btn glass text-white">Registrarme</a>
        @endguest
        @auth
            <h3 class="text-xl "> {{auth()->user()->name}}</h3>
            <form action="{{route("logout")}}" method="post">
                @csrf
                <button class="btn glass text-white" type="submit">Logout</button>
            </form>
        @endauth

    </div>
</header>
