<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{!!csrf_token()!!}">
        <title>Laravel Shop</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2">
            <div id="app">
              <search></search>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
