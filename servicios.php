<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYR Motors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/servicio.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
    
    <?php
        require_once 'header.php';
        cabecera();
    
    ?>
  
    <main class="servicios">
        <article id="bujia">
            <h2>Cambio de Bujía</h2>
            <div class="servicio">
                <img src="https://media.wd40.es/app/uploads/2021/03/19105519/Como-cambiar-bujias.jpeg" alt="Cambio de Bujía">
                
                <p>El cambio de bujías es esencial para el buen funcionamiento del motor.</p>
                <p class="precio">$40.00</p>
            </div>
        </article>
        <article id="bobina">
            <h2>Prueba de Bobina</h2>
            <div class="servicio">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZSr9Yy6bglCnnHpKc1w65vo2AnzER9nUaEA&s" alt="Prueba de Bobina">
                
                <p>La prueba de bobina asegura que el sistema de encendido funcione correctamente.</p>
                <p class="precio">$30.00</p>
            </div>
        </article>
        <article id="riel">
            <h2>Cambio de Riel de Inyectores</h2>
            <div class="servicio">
                <img src="https://i.ytimg.com/vi/A50ks969V2k/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AHUBoAC4AOKAgwIABABGGUgVyhRMA8=&rs=AOn4CLCIVYY4XcoUl24WaNPEFMd6C0Tddw" alt="Cambio de Riel de Inyectores">
                
                <p>Cambio del riel de inyectores para un flujo óptimo de combustible.</p>
                <p class="precio">$150.00</p>
            </div>
        </article>
        <article id="reductor">
            <h2>Cambio de Reductor de 5ta Gen. GNV</h2>
            <div class="servicio">
                <img src="https://cdn.ready-market.com.tw/cca46ae0/Templates/pic/3B-gear-reducer-increacer.jpg?v=091f1968" alt="Cambio de Reductor de 5ta Gen. GNV">
                
                <p>El cambio de reductor de GNV asegura la correcta presión del gas.</p>
                <p class="precio">$120.00</p>
            </div>
        </article>
        <article id="filtros">
            <h2>Cambio de Filtros de Gas</h2>
            <div class="servicio">
                <img src="https://www.ro-des.com/wp-content/uploads/2018/10/filtro-gasolina-viejo-nuevo.png" alt="Cambio de Filtros de Gas">
                
                <p>Cambio de filtros para mantener la calidad del gas en el sistema.</p>
                <p class="precio">$50.00</p>
            </div>
        </article>
    </main>

    <?php
        require_once 'footer.php';
        pie();
    ?>

    <script src="https://kit.fontawesome.com/68b419e4bb.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>