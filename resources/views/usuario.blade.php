<html lang="pt-br">
<head><link rel="stylesheet" type "text/css" href="_css/estilo.css"/></head>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                     Welcome To Academy Family !
                      <div id="imagem">
                          <img src="{{ URL::to('/') }}/imagens/getway.png"/>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</html>
