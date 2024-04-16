@extends('pattern/top')
@section('content')
@section('title', 'Marcador Selecionado')

<?php $cor = $marcador['tagColor'] ?>

<form>
  <h4>Marcador: {{$marcador['name']}}</h4>
  <label>ID       : </label> <label>{{$marcador['id']}}</label><br/>
  <label>Nome     : </label> <label style="color:{{ $cor }};">{{$marcador['name']}}</label><br/>
  <label>Cor      : </label> <label>{{$marcador['tagColor']}}</label><br/>

  <button formaction="{{route('tag.edit', [$marcador['id']])}}">Editar</button>
  
  <button formaction="{{ route('pageConfirmarDeletar', [$marcador['id']]) }}">Excluir</button>

  <button><a href="{{ route('tag.index') }}">Voltar</a></button>



</form>

@endsection