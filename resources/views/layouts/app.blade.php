<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Albums</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css">  
      <script>
          body {width:800px;}
          </script>
      </head>
    </head>
    <body>

        @include('inc.topbar')
        <div class="row">  
        @include('inc.messages') 
        @yield('content')
        <div>
      
    </body>
</html>
