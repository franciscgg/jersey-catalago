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
<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <body class="backgrounduniversal">
    <form class="row g-3" method="post" action="{{route('cadastrar-jersey')}}">
        @csrf
        <div class="col-md-4">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" style="color:aliceblue" name="nomeJersey" id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputTime" class="form-label">Time</label>
            <input type="text" class="form-control" name="timeJersey" id="inputTime">
        </div>

        <div class="col-md-4">
            <label for="inputTemporada" class="form-label">Temporada</label>
            <input type="text" class="form-control" name="temporadaJersey" id="inputTemporada">
        </div>

        <div class="col-md-4">
            <label for="inputTamanho" class="form-label">Tamanho</label>
            <input type="text" class="form-control" name="tamanhoJersey" id="inputTamanho">
        </div>

        <div class="col-md-4">
            <label for="inputPreco" class="form-label">Preço</label>
            <input type="decimal" class="form-control" name="precoJersey" id="inputPreco">
        </div>

        <div class="col-md-4">
            <label for="inputImagem" class="form-label">Imagem</label>
            <input type="text" class="form-control" name="imagemJersey" id="inputImagem">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-dark">Salvar</button>
        </div>
    </form>
    </body>
</div>
@endsection
</html>
