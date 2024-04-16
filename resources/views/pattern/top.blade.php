
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inicial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="i-edge">
    <link href="css/app.css" rel="stylesheet" type="text/css"  >
    
    <title>@yield('title')</title>
  </head>
  <body>
    <div id='externa'><div id='interna'>
      @yield('content')
    </div></div>
  </body>
</html>