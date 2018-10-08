@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Usuario Logueado!

                                <br>
                                    <li>
                                        <br>
                                        <a class="btn btn-primary" href="{{ route('tickets.index') }}">
                                           Comenzar
                                        </a>


                                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
