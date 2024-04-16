@extends('pattern/top')
@section('content')
@section('title', 'Lista de Marcadores')


<form>
<h4>Lista de Marcadores:</h4>
@foreach($marcadores as $item)
{{$item['id']}}
  <label>{{$item['name']}}</label><button formaction="{{route('tag.show', [$item['id']])}}">Mostrar</button><br/>
@endforeach
</form>

<button><a href="{{ route('tag.create') }}">Adicionar</a></button>
<br>
<button><a href="/">Home</a></button>


@endsection  