@extends('pattern/top')
@section('content')
@section('title', 'Home')


<form>
  <h4>Welcome!</h4>
  

  

  <button><a href="{{ route('tag.index') }}">Marcadores</a></button>



</form>

@endsection