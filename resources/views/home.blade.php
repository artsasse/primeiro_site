@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row white">
        <div class="col s8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Painel do Usuário</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Agora você está logado! Em breve você poderá aproveitar as funções exclusivas que disponibilizaremos para nossos usuários!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
