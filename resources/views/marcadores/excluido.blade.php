@extends('pattern/top')
@section('content')
@section('title', 'Confirmar Exclusão')


  <h4>Excluído com sucesso!!</h4>
  <label>Nome     : </label> <label>{{$marcadorDeletado}}</label><br/>

<button><a href="{{ route('tag.index') }}">Listar</a></button>



</form>

@endsection