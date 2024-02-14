@extends("layouts.layout")

@section("contenido")

    <div class="flex items-center justify-center h-full p-5 rounded-2xl">
        <div class="w-full max-w-md h-full">

            <form action="{{route("Ejemplo.update", $ejemplo->id)}}" method="POST"
                  class="bg-white shadow-md rounded-2xl px-8 pt-6 pb-8 mb-4">
                @method("PATCH")
                @csrf
                <x-input-label for="dni">DNI</x-input-label>
                <x-text-input type="text" name="dni" value="{{$ejemplo->dni}}" id=""/>
                <div class="text-sm text-red-800">
                    @foreach($errors->get("email") as $error)
                        {{$error}}<br />
                    @endforeach


                </div>
                <x-input-label for="nombre">Nombre</x-input-label>
                <x-text-input type="text" name="nombre" value="{{$ejemplo->nombre}}" id=""/>

{{--                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />--}}
                <x-input-label for="apellidos">Apellidos</x-input-label>
                <x-text-input type="text" name="apellidos" value="{{$ejemplo->dir}}" id=""/>
                {{--                <x-input-error  class="mt-2">{{$errors->get('dir')}}</x-input-error>--}}
                <x-input-label for="email">Email</x-input-label>
                <x-text-input type="text" name="email" value="{{$ejemplo->email}}" id=""/>
                {{--                <x-input-error  class="mt-2">{{$errors->get('email')}}</x-input-error>--}}
                <br>
                <x-primary-button>Actualizar</x-primary-button>

            </form>
        </div>
    </div>

@endsection

@section("titulo")
    profesores
@endsection
@section("descripcion")
    Proyecto de aprendizaje de laravel. usamos los diferentes elementos
@endsection
