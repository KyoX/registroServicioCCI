@extends ('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/ministerios.css') }}" type="text/css" />
@endsection

@section('content')
    <div class="contenedor">
        <div class="contenedor_ministerio"  id="0">
            <div class="ministerio_data"> <i class="material-icons">add_circle</i> Agregar ministerio</div>
        </div>
        @isset($ministerios)
            @foreach ($ministerios as $ministerio)
                <div class="contenedor_ministerio"  id="{{ $ministerio->ministerio_id }}">
                    <div class="ministerio_data">
                        {{ $ministerio->nombre_ministerio }}
                    </div>
                </div>
            @endforeach
        @endisset
    </div>
@endsection

@section('javascript')
    <script src="{{ asset('js/ministerios.js') }}"></script>
@endsection