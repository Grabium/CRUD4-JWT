@extends('pattern/top')
@section('content')
@section('title', 'Criar Marcador')

    
<form action="{{route('tag.store')}}" method="POST">
@csrf
  
  <h3>Crie uma nova tag:</h3>

  <label for="name">Nome:</label><br />
  <input id="name" type="text" name="name" autofocus><br />
  
  <label for="tagColor">Descrição:</label><br />
  <input id="tagColor" type="color" name="tagColor" value="#000000"><br />
  
  <button>Salvar</button>
</form>

<button><a href="{{ route('tag.index') }}">Voltar</a></button>

@endsection  