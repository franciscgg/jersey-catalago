@extends('padrao')
@section('content')
<div class="container">
<form class="row g-3" method="post" action="{{route('alterarBanco-jersey', $jerseys->id)}}">
        @csrf
        <div class="col-md-4">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nomeJersey" id="inputNome">
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
            <label for="inputI@extends('padrao')
@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form class="row g-3" method="post" action="{{route('alterarBanco-jersey', $jerseys->id)}}">
        @csrf
        <div class="col-md-4">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nomeJersey" id="inputNome">
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
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
@endsection
magem" class="form-label">Imagem</label>
            <input type="text" class="form-control" name="imagemJersey" id="inputImagem">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>
@endsection
