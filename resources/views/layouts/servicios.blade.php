@extends ('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/servicios.css') }}" type="text/css" />
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
                    <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
                @isset($servicios)
                    @foreach ($servicios as $servicio)
                        <tr id="{{ $servicio->fecha_hora_servicio }}" class="data">
                            <td id="{{ $servicio->nombre_servicio }}">{{ $servicio->nombre_servicio }} </td>
                            <td id="{{ $servicio->fecha_hora_servicio }}">{{  Carbon\Carbon::parse($servicio->fecha_hora_servicio)->format('d/m/Y H:i') }} </td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/servicios.js') }}"></script>
@endsection