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
<table class="table-black">
    <thead>
        <tr>
            <th scope="col-auto" class="p-4">Código</th>
            <th scope="col-auto" class="p-4">Nome</th>
            <th scope="col-auto" class="p-4">Time</th>
            <th scope="col-auto" class="p-4">Temporada</th>
            <th scope="col-auto" class="p-4">Tamanho</th>
            <th scope="col-auto" class="p-4">Preço</th>
            <th scope="col-auto" class="p-4">Imagem</th>
            <th scope="col-auto" class="p-4">Alterar</th>
            <th scope="col-auto" class="p-4">Deletar</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($jerseys as $jerseysArray)
        <tr>
            <th scope="row" class="p-5">{{$jerseysArray->id}}</th>
            <td class="p-4">{{$jerseysArray->nomeJersey}}</td>
            <td class="p-4">{{$jerseysArray->timeJersey}}</td>
            <td class="p-4">{{$jerseysArray->temporadaJersey}}</td>
            <td class="p-4">{{$jerseysArray->tamanhoJersey}}</td>
            <td class="p-4">{{$jerseysArray->precoJersey}}</td>
            <td class="p-4"><img src="{{$jerseysArray->imagemJersey}}" style="max-width: 75px; max-height: 75px;"></td>
            <td class="p-4">
                <a href="{{route('alterar-jersey', $jerseysArray->id)}}">
                    <button type="button" class="btn btn-dark"><i class="bi bi-brush"></i></button>
                </a>
            </td>
            <td class="p-4">
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
