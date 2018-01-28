@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Painel do Administrador</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="https://i1.wp.com/cromossomonerd.com.br/wp-content/uploads/2017/04/TIO-BEN.png?fit=1068%2C600&ssl=1" alt="tio ben" width="70%">
                    <br>
                    Esse é a área do Administrador! Lembre-se: "Com grandes poderes, vem grandes responsabilidades".
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
