<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <title>TiendaPHP</title>

</head>
<body>
<nav class="blue accent-1">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">La Tienda PHP</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Productos</a></li>
        <li><a href="badges.html">Pedidos</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
      @yield('contenido')
  </div>
<script src="{{ asset('materialize/js/materialize.js') }}"></script>
<script>

   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems,[]);
  });

</script>
    
</body>
</html>