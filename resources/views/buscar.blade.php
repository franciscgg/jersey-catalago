<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SenacHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

@extends('padrao')
@section('content')
<body class="backgrounduniversal">
<!-- inicio formulario -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">

<div class="container m-4">
    <form method="get" action="{{route('todos-jersey')}}">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputcodigo" class="col-form-label">Digite o Nome do Time</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputcodigo" name="nomeJersey" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-dark">Buscar</button>
            </div>
        </div>
    </form>
    <!--fim formulario -->

    <!--inicio tabela-->
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col-auto">Código</th>
                <th scope="col-auto">Nome</th>
                <th scope="col-auto">Time</th>
                <th scope="col-auto">Temporada</th>
                <th scope="col-auto">Tamanho</th>
                <th scope="col-auto">Preço</th>
                <th scope="col-auto">Imagem</th>
                <th scope="col-auto">Alterar</th>
                <th scope="col-auto">Deletar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jerseys as $jerseysArray)
            <tr>
                <th scope="row">{{$jerseysArray->id}}</th>
                <td>{{$jerseysArray->nomeJersey}}</td>
                <td>{{$jerseysArray->timeJersey}}</td>
                <td>{{$jerseysArray->temporadaJersey}}</td>
                <td>{{$jerseysArray->tamanhoJersey}}</td>
                <td>{{$jerseysArray->precoJersey}}</td>
                <td><img src="{{$jerseysArray->imagemJersey}}" style="max-width: 75px; max-height: 75px;"></td>
                <td>
                    <a href="{{route('alterar-jersey', $jerseysArray->id)}}">
                        <button type="button" class="btn btn-primary"><i class="bi bi-brush"></i></button>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{route('delete-jersey', $jerseysArray->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!--fim tabela-->
</div>
</body>
@endsection
