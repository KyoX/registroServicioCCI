@extends ('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/servidores.css') }}" type="text/css" />
@endsection

@section('content')
    <div class="container ingreso_datos">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form method="POST" action="/servidores">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" id="servidor_id" aria-describedby="servidor id" placeholder="servidor_id"
                                name="servidor_id" value="{{$servidores->servidor_id}}">

                        <label for="nombre">Nombre Servidor</label>

                        <input type="text" class="form-control" id="nombre" aria-describedby="Nombre Servidor" placeholder="Nombre Servidor"
                                name="nombre" value="{{$servidores->nombre}}" required>

                        @if ($errors->has('nombre_ministerio'))
                            <div class="alert alert-danger" role="alert">
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            </div>
                        @endif

                        <label for="correo">Correo</label>

                        <input type="email" class="form-control" id="correo" aria-describedby="Correo" placeholder="Correo"
                                name="correo" value="{{$servidores->correo}}">

                        @if ($errors->has('Correo'))
                            <div class="alert alert-danger" role="alert">
                                <span class="help-block">
                                    <strong>{{ $errors->first('correo') }}</strong>
                                </span>
                            </div>
                        @endif

                        <label for="telefono">Teléfono</label>

                        <input type="text" class="form-control" id="telefono" aria-describedby="Teléfono" placeholder="Teléfono"
                                name="telefono" value="{{$servidores->telefono}}">

                        @if ($errors->has('telefono'))
                            <div class="alert alert-danger" role="alert">
                                <span class="help-block">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                            </div>
                        @endif

                    </div>
                    @unless ($servidores->servidor_id == null)
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
    <script src="{{ asset('js/servidores.js') }}"></script>
@endsection