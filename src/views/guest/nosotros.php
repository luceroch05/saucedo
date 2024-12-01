<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYR Motors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="assets/css/nosotros.css">
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
        require_once 'header.php';
        cabecera();
    ?>    


    <main>
        <section class="hero">
            <h1>Nosotros</h1>
            <p>Conoce más sobre nuestra empresa y nuestro equipo.</p>
        </section>

        <section class="about">
            <h2>¿Quiénes somos?</h2>
            <p>CYR Motors es una empresa dedicada a proporcionar servicios de automoción de alta calidad. Nuestro equipo de expertos está comprometido con la satisfacción del cliente y la excelencia en cada servicio que ofrecemos.</p>
            
            <div class="team">
                <h2>Conoce a nuestro equipo</h2>
                <div class="team-member">
                    <img src="assets/images/juan.jpeg" alt="Miembro del equipo 1">
                    <h3>Juan Rondona</h3>
                    <p>Director General</p>
                </div>
                <div class="team-member">
                    <img src="assets/images/lay.jpeg" alt="Miembro del equipo 2">
                    <h3>Lay Rondona</h3>
                    <p>Administrador</p>
                </div>
                <div class="team-member">
                    <img src="assets/images/alejo.jpeg" alt="Miembro del equipo 2">
                    <h3>Alejandro Changra</h3>
                    <p>Técnico Encargado</p>
                </div>
                <!-- Agrega más miembros del equipo según sea necesario -->
            </div>
        </section>
    </main>
    
    </body>  
    <?php
        require_once 'footer.php';
        pie();
     ?>
    <script src="https://kit.fontawesome.com/68b419e4bb.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>