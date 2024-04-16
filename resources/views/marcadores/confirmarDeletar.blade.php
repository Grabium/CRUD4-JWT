@extends('pattern/top')
@section('content')
@section('title', 'Confirmar Exclusão')


<form action="{{route('tag.destroy', [$marcador['id']]) }}" method="post">
  @csrf
  @method('delete')
  <input type="hidden" name="id" value="{{$marcador['id']}}"/>
  <h4>Rrealmente deseja excluir este marcador caso esteja sem arquivo referenciado?</h4>
  <label>ID       : </label> <label>{{$marcador['id']}}</label><br/>
  <label>Nome     : </label> <label>{{$marcador['name']}}</label><br/>

  <button>Excluir</button>
  <button><a href="{{ route('tag.index') }}">Voltar</a></button>


</form>

@endsection