@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Painel do SUPER Administrador</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <img src="https://images.amcnetworks.com/ifc.com/wp-content/uploads/2016/05/Nic-Cage-Superman-Lives-1920.jpg" alt="o melhor superman" width="70%">
                        <br>A sua mãe se chama Martha?<br>Porque esse é o painel do SUPER Administrador!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
