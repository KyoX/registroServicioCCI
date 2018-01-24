@extends ('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/servicios.css') }}" type="text/css" />
@endsection

@section('content')
    <div class="container ingreso_datos">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form method="POST" action="/servicios">
                    {{ csrf_field() }}
                    <div class="form-group">

                        <label for="nombre_servicio">Fecha Servicio</label>

                        <input type="text" class="form-control" id="fecha_hora_servicio" aria-describedby="Fecha Servicio" placeholder="Fecha Servicio"
                                name="fecha_hora_servicio" value="{{$servicio->fecha_hora_servicio}}" required>

                        @if ($errors->has('fecha_hora_servicio'))
                            <div class="alert alert-danger" role="alert">
                                <span class="help-block">
                                    <strong>{{ $errors->first('fecha_hora_servicio') }}</strong>
                                </span>
                            </div>
                        @endif

                        <label for="nombre_servicio">Nombre Servicio</label>

                        <input type="text" class="form-control" id="nombre_servicio" aria-describedby="Nombre Servicio" placeholder="Nombre Servicio"
                                name="nombre_servicio" value="{{$servicio->nombre_servicio}}" required>

                        @if ($errors->has('nombre_servicio'))
                            <div class="alert alert-danger" role="alert">
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre_servicio') }}</strong>
                                </span>
                            </div>
                        @endif

                    </div>
                    @unless ($servicio->fecha_hora_servicio == null)
                    <button type="button" id="botonEliminar" class="btn btn-danger">Eliminar</button>
                    @endunless
                    <button type="submit" class="btn btn-dark">Guardar</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>

    @include('layouts.modal')

@endsection

@section('javascript')
    <script src="{{ asset('js/servicios.js') }}"></script>
@endsection