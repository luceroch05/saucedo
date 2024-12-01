<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYR Motors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="assets/css/estilos.css">

</head>
<body>
    <?php
    require_once 'src/views/includes/header.php';
    cabecera();
    
    ?>
    
    
    <div class="container">
      <div class="bienvenida">
        <div class="container-welcome">
        <h1>CYR Motors</h1>
        <p>Ofrecemos una amplia gama de productos y servicios para mantener tu vehículo en óptimas condiciones. Desde repuestos de alta calidad hasta reparaciones y mantenimiento especializado, estamos aquí para atender todas tus necesidades.</p>
      </div>
        <div class="buttons">
            <a href="#">Ver Productos</a>
            <a href="#">Ver Servicios</a>
        </div>
      </div>
    </div>
    
    <div class="productos">
        <h2>Nuestros Productos</h2>
        <p>Contamos con una amplia selección de repuestos y accesorios de alta calidad para tu vehículo.</p>
      
        <div class="carousel-wrapper">
          <button class="slick-prev"></button>
          <div class="carousel">
            
            
            
            <div class="card">
              <img src="assets/images/gasolina.jpg" alt="Accesorios de Gasolina" width="205px" height="136px">
              <h3>Accesorios de Gasolina</h3>
              <p>Todo lo que necesitas para tu sistema de gasolina.</p>
              <a href="#">Ver más</a>
            </div>
            <div class="card">
              <img src="assets/images/glp.jpg" alt="Accesorios de Gasolina" width="205px" height="136px">
              <h3>Accesorios GLP</h3>
              <p>Accesorios para sistemas GLP.</p>
              <a href="#">Ver más</a>
            </div>
            <div class="card">
              <img src="assets/images/gnv.jpg" alt="Accesorios de Gasolina" width="205px" height="136px">
              <h3>Accesorios GNV</h3>
              <p>Todo para sistemas GNV.</p>
              <a href="#">Ver más</a>
            </div>
            <div class="card">
              <img src="assets/images/riel.jpg" alt="Accesorios de Gasolina" width="205px" height="136px">
              <h3>Riel de Inyectores</h3>
              <p>Rieles de inyectores para mejorar el rendimiento.</p>
              <a href="#">Ver más</a>
            </div>
            <div class="card">
              <img src="assets/images/sensores.jpg" alt="Accesorios de Gasolina" width="205px" height="136px">
              <h3>Sensores</h3>
              <p>Sensores de alta precisión para tu vehículo.</p>
              <a href="#">Ver más</a>
            </div>
          </div>
          <button class="slick-next"></button>
        </div>
      </div>


      <!-- servicios -->

      <div class="servicios">
        <h2>Nuestros Servicios</h2>
        <p>Ofrecemos una amplia gama de servicios de mantenimiento y reparación para mantener tu vehículo en óptimas condiciones.</p>
      
        <div class="carousel-wrapper">
          <button class="slick-prev"></button>
          <div class="carousel">
            <div class="card">
              <img src="assets/images/images.jfif" alt="Accesorios de Gasolina" width="205px" height="136px">
              <h3>Cambio de Bujía</h3>
              <p>Reemplazo de bujías para asegurar un rendimiento óptimo del motor.</p>
              <a href="#">Ver más</a>
            </div>
            <div class="card">
              <img src="assets/images/bobina.jpeg" alt="Accesorios de Gasolina" width="205px" height="136px">
              <h3>Prueba de Bobina</h3>
              <p>Chequeo y prueba de bobinas para asegurar un encendido eficiente.</p>
              <a href="#">Ver más</a>
            </div>
            <div class="card">
              <img src="assets/images/riel.jpg" alt="Accesorios de Gasolina" width="205px" height="136px">
              <h3>Cambio de Riel de Inyectores</h3>
              <p>Reemplazo de rieles de inyectores para mejorar el rendimiento del motor.</p>
              <a href="#">Ver más</a>
            </div>
            <div class="card">
              <img src="assets/images/reductorglp.jfif" alt="Accesorios de Gasolina" width="205px" height="136px">
              <h3>Cambio de Reductor 5ta Gen. GNV</h3>
              <p>Reemplazo del reductor de 5ta generación para sistemas GNV.</p>
              <a href="#">Ver más</a>
            </div>
            <div class="card">
              <img src="assets/images/manguera.jpg" alt="Accesorios de Gasolina" width="205px" height="136px">
              <h3>Cambio de Manguera de Agua GLP</h3>
              <p>Reemplazo de mangueras de agua para sistemas GLP.</p>
              <a href="#">Ver más</a>
            </div>
            <div class="card">
              <img src="assets/images/filtrodegas.png" alt="Accesorios de Gasolina" width="205px" height="136px">
              <h3>Cambio de Filtros de Gas</h3>
              <p>Reemplazo de filtros de gas para asegurar un funcionamiento eficiente.</p>
              <a href="#">Ver más</a>
            </div>
          </div>
          <button class="slick-next"></button>
        </div>
    </div>

    <!-- formulario -->
    <div class="contact-form-wrapper">
      <h2>Contáctanos</h2>
      <p>Estamos aquí para ayudarte. Completa el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</p>
      <form>
          <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" id="name" name="name" placeholder="Tu nombre" required>
          </div>
          <div class="form-group">
              <label for="email">Correo Electrónico</label>
              <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>
          </div>
          <div class="form-group">
              <label for="subject">Asunto</label>
              <input type="text" id="subject" name="subject" placeholder="Asunto" required>
          </div>
          <div class="form-group">
              <label for="message">Mensaje</label>
              <textarea id="message" name="message" placeholder="Tu mensaje" required></textarea>
          </div>
          <div class="form-group">
              <button type="submit">Enviar Mensaje</button>
          </div>
      </form>
  </div>


  <?php
  require_once 'views/includes/footer.php';
  pie();
  ?>
 
    <script src="https://kit.fontawesome.com/68b419e4bb.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
