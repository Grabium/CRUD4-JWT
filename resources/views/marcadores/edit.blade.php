@extends('pattern/top')
@section('content')
@section('title', 'Editar Marcador')


<form action="{{route('tag.update', [ $marcador['id']])}}" method='post'>
@csrf
@method('put')
  
  <h3>Edição de marcador</h3>

  <label>ID: {{$marcador['id']}} - Nome: {{$marcador['name']}}</label>

  <br/>

  <input type="hidden" name="id" value="{{$marcador['id']}}">
  
  
  <label for="name">Nome:</label><br />
  <input id="name" type="text" name="name" value="{{$marcador['name']}}" autofocus><br />

  <label for="tagColor">Cor:</label><br />
  <input id="tagColor" type="color" name="tagColor" value="{{$marcador['tagColor']}}"><br />

  <button>Salvar</button>
  <button><a href="{{ route('tag.index') }}">Voltar</a></button>
  
</form>

@endsection