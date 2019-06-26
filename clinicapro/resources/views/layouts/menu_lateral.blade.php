<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    </head>
    <!-- <link rel="stylesheet" href="menu_lateral.css"> -->
    <link rel="stylesheet" href="{{asset('css/menu_lateral.css')}}">
  <body>
      
    <div id="sidebar">
      <div class="toggle-btn">
        <span>&#9776</span>
      </div>
      <ul>
        <li>
          <img src="img/logo.jpg" alt="Logo Fazt" class="logo">
        </li>
        <li>Home</li>
        <li>About</li>
        <li>Contact</li>
      </ul>
    </div>

    <!-- <script src="menu_lateral.js"></script> -->
    <script type="text/javascript" src={{asset('js/menu_lateral.js')}}></script>
  </body>
</html>