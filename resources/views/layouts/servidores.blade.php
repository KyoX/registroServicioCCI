@extends ('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/servidores.css') }}" type="text/css" />
@endsection

@section('content')
    <div class="container">
        <button type="button" class="btn btn-dark nueva_data">
            <i class="material-icons">add_circle</i> Agregar Servidor
        </button>

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                </tr>
            </thead>
            <tbody>
                @isset($servidores)
                    @foreach ($servidores as $servidor)
                        <tr id="{{ $servidor->servidor_id }}" class="data">
                            <td id="{{ $servidor->nombre }}">{{ $servidor->nombre }} </td>
                            <td id="{{ $servidor->correo }}">{{ $servidor->correo }} </td>
                            <td id="{{ $servidor->telefono }}">{{ $servidor->telefono }} </td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>

    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/servidores.js') }}"></script>
@endsection