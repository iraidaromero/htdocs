{{-- <div>
    @foreach ($centro as $c)
        <p>{{ $c->nombre }}</p>
    @endforeach

    @foreach ($centrosTipos as $ct)
        <p>{{ $ct->nombre }}</p>
    @endforeach
</div> --}}
<form action="{{ route("datos") }}" method="GET">
    <input type="text">
    <input type="password" name="" id="">
    <input type="submit" value="Enviar">
</form>


{{-- @vite(['resources/js/prueba.js']) --}}
