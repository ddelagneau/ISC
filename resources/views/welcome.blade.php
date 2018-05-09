<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <link rel="stylesheet" href="{!! asset('css/app.css') !!}" type="text/css">
    </head>
    <body>
      <h1>Ejemplo de componente</h1>
      <br>
      <div id="app">componente app</div>
      <div id="example">componente exmaple</div>
      <div id="user">componene user</div>
      <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    </body>
</html>
