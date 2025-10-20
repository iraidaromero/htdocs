{{-- <div>
    <form action="/public/bandas">
        <select name="hermandades" id="hermandades">
            @foreach ($hermandades as $hermandad)
                <option value="{{ $hermandad->id }}">{{ $hermandad->nombre }}</option>
            @endforeach
        </select>
        <button>Enviar</button>
    </form>
</div> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full max-w-xs">
        <form action="{{ route('hermandad_crear') }}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Crear una Hermandad
                </label>
                <input name="nombre"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="username" type="text" placeholder="Nombre de la Hermandad">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Crear
                </button>
            </div>
        </form>
        <table class="table-fixed">
            <thead>
                <tr>
                    <th>Nombre de Hermandades</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hermandades as $hermandad)
                    <tr>
                        <td id="{{ $hermandad->id }}">{{ $hermandad->nombre }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="w-full max-w-xs">
        <form action="{{ route('hermandad_borrar') }}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              @method('DELETE')
            @csrf

            <div class="mb-4">  
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Borrar una Hermandad
                </label>
                <select name="hermandades" id="hermandades">
                    @foreach ($hermandades as $hermandad)
                        <option value="{{ $hermandad->id }}">{{ $hermandad->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Borrar
                </button>
            </div>
        </form>
    </div>





     <div class="w-full max-w-xs">
        <form action="{{ route('hermandad_editar') }}" method="POST"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
              @method('PUT')
            @csrf

            <div class="mb-4">  
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Actualizar Hermandad
                </label>
                <select name="hermandades" id="hermandades">
                    @foreach ($hermandades as $hermandad)
                        <option value="{{ $hermandad->id }}">{{ $hermandad->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</body>

</html>