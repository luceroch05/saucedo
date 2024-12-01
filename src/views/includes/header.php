<?php
 function cabecera(){
?>
    <link rel="stylesheet" href="css/estilos.css">

<nav>
      <div class="nav-wrapper">
          <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="CYR Motors Logo">
          </a>
          <ul class="menu">
              <li class="menu-item"><a href="home.php"><i class="fa-solid fa-house"></i>Inicio</a></li>
              <li class="menu-item"><a href="nosotros.php"><i class="fa-solid fa-users"></i>Nosotros</a></li>
              <li class="menu-item dropdown">
                  <a href="productos.php"><i class="fa-solid fa-gear"></i>Productos</a>
                  <ul class="submenu">
                      <li class="submenu-item"><a href="#">Accesorios de gasolina</a></li>
                      <li class="submenu-item"><a href="#">Accesorios GLP</a></li>
                      <li class="submenu-item"><a href="#">Accesorios GNV</a></li>
                      <li class="submenu-item"><a href="#">Riel de inyectores</a></li>
                      <li class="submenu-item"><a href="#">Sensores de nivel</a></li>
                  </ul>
              </li>
              <li class="menu-item"><a href="servicios.php"><i class="fa-solid fa-taxi"></i>Servicio</a></li>
              <li class="menu-item"><a href="contacto.php"><i class="fa-solid fa-envelope"></i>Contacto</a></li>
          </ul>
          <div class="nav-icons">
              <a href="login.html" class="nav-icon"><i class="fa-solid fa-user"></i></a>
              <a href="cart.html" class="nav-icon"><i class="fa-solid fa-cart-shopping"></i></a>
          </div>
      </div>
  </nav>
  <script src="https://kit.fontawesome.com/68b419e4bb.js" crossorigin="anonymous"></script>


<?php }


?>