<!DOCTYPE html>
<html lang="t-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tag</title>
    </head>

    <body>

        
        <form action="{{route('tag.store')}}" method="POST">
        @csrf
            <br />
            <br />
            <br />
            <legend>Crie uma nova tag:</legend>

            <br />
            <br />
            <br />
            
            <label for="name">Nome</label><br />
            <input id="name" type="text" name="name" autofocus>

            <br />
            <br />
            <br />

            <legend>Crie uma nova tag:</legend>
            <label for="description">Nome</label><br />
            <input id="description" type="text" name="description"><br />
            
            <button>Salvar</button>
        </form>
    </body>
</html>