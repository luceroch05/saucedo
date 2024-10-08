<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYR Motors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/productos.css">
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
   
    <main>
        <aside class="sidebar">
            <h2>Categorías</h2>
            <ul>
                <li><a href="#gasolina">Accesorios de Gasolina</a></li>
                <li><a href="#glp">Accesorios GLP</a></li>
                <li><a href="#gnv">Accesorios GNV</a></li>
                <li><a href="#riel">Riel de Inyectores</a></li>
                <li><a href="#sensores">Sensores de Nivel</a></li>
            </ul>
        </aside>
        <section class="productos">
            <article id="gasolina">
                <h2>Accesorios de Gasolina</h2>
                <div class="productos-grid">
                    <div class="producto">
                        <img src="assets/images/productos/filtros.jpg" alt="Producto 1 de Gasolina">
                        <h3>Filtro de Combustible</h3>
                        <p>Filtro de alta calidad para mejorar el rendimiento del motor.</p>
                        <p class="precio">$30.00</p>
                    </div>
                    <div class="producto">
                        <img src=https://static.wixstatic.com/media/9988e4_26b613fc86fd4ebe88edb43eff2ce6e7~mv2.jpg/v1/fill/w_640,h_402,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/9988e4_26b613fc86fd4ebe88edb43eff2ce6e7~mv2.jpg" alt="Producto 2 de Gasolina">
                        <h3>Bomba de Gasolina</h3>
                        <p>Bomba eléctrica para asegurar un flujo constante de combustible.</p>
                        <p class="precio">$120.00</p>
                    </div>
                    <div class="producto">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX4p4bQ302HBhxr072dxDMBqR5eArdvLCn5g&s" alt="Producto 3 de Gasolina">
                        <h3>Inyector de Combustible</h3>
                        <p>Inyector eficiente para mejorar la mezcla de aire y combustible.</p>
                        <p class="precio">$75.00</p>
                    </div>
                </div>
            </article>
            <article id="glp">
                <h2>Accesorios GLP</h2>
                <div class="productos-grid">
                    <div class="producto">
                        <img src="https://i.ytimg.com/vi/BqwXLqNI-Fs/hq720.jpg?sqp=-oaymwE7CK4FEIIDSFryq4qpAy0IARUAAAAAGAElAADIQj0AgKJD8AEB-AH-CYACwAWKAgwIABABGGUgVihDMA8=&rs=AOn4CLC5aZrH-bapIw7mix3fEDh0SkhAPg" alt="Producto 1 de GLP">
                        <h3>Regulador de GLP</h3>
                        <p>Regulador de presión para sistemas de GLP.</p>
                        <p class="precio">$60.00</p>
                    </div>
                    <div class="producto">
                        <img src="https://neoauto.com/noticias/wp-content/uploads/2012/08/tanque-gas-glp1.jpg" alt="Producto 2 de GLP">
                        <h3>Tanque de GLP</h3>
                        <p>Tanque de GLP para instalación en vehículos.</p>
                        <p class="precio">$200.00</p>
                    </div>
                    <div class="producto">
                        <img src="https://elopezagas.com/wp-content/uploads/2019/05/Mantenimiento-a-pistola-o-cabezales-de-llenado-de-glp.jpg" alt="Producto 3 de GLP">
                        <h3>Electroválvula de GLP</h3>
                        <p>Electroválvula de precisión para control de GLP.</p>
                        <p class="precio">$50.00</p>
                    </div>
                </div>
            </article>
            <article id="gnv">
                <h2>Accesorios GNV</h2>
                <div class="productos-grid">
                    <div class="producto">
                        <img src="https://www.sitec.pe/wp-content/uploads/elementor/thumbs/reductor-de-3era-generacion-qqh7t6ey6ukk1beug75ig11jy0f90q7d865tcyq7dc.jpg" alt="Producto 1 de GNV">
                        <h3>Reductor de GNV</h3>
                        <p>Reductor para adaptar la presión de GNV.</p>
                        <p class="precio">$90.00</p>
                    </div>
                    <div class="producto">
                        <img src="https://www.sitec.pe/wp-content/uploads/elementor/thumbs/WhatsApp-Image-2021-10-05-at-8.56.12-AM-qqh7tc1zbus9yz6nj9l9uzmbibngawtr8y2q8mhuc0.jpeg" alt="Producto 2 de GNV">
                        <h3>Sensor de Nivel de GNV</h3>
                        <p>Sensor para medir el nivel de GNV en el tanque.</p>
                        <p class="precio">$40.00</p>
                    </div>
                    <div class="producto">
                        <img src="https://elcomercio.pe/resizer/AYW-aG3ymg6pLI7LyANv8EzmJpM=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/NL4M3WCQYBAQBJD6TEP34GOWPI.jpg" alt="Producto 3 de GNV">
                        <h3>Kit de Instalación de GNV</h3>
                        <p>Kit completo para la instalación de GNV en vehículos.</p>
                        <p class="precio">$150.00</p>
                    </div>
                </div>
            </article>
            <article id="riel">
                <h2>Riel de Inyectores</h2>
                <div class="productos-grid">
                    <div class="producto">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS37LhGYpqCxGGFvg5U0_ccNoe9Ajjrz2p0w&s" alt="Producto 1 de Rieles">
                        <h3>Riel de Inyectores - Modelo A</h3>
                        <p>Riel de inyectores de alta eficiencia.</p>
                        <p class="precio">$80.00</p>
                    </div>
                    <div class="producto">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS37LhGYpqCxGGFvg5U0_ccNoe9Ajjrz2p0w&s" alt="Producto 2 de Rieles">
                        <h3>Riel de Inyectores - Modelo B</h3>
                        <p>Riel de inyectores con mejor flujo de combustible.</p>
                        <p class="precio">$90.00</p>
                    </div>
                    <div class="producto">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS37LhGYpqCxGGFvg5U0_ccNoe9Ajjrz2p0w&s" alt="Producto 3 de Rieles">
                        <h3>Riel de Inyectores - Modelo C</h3>
                        <p>Riel de inyectores de alto rendimiento.</p>
                        <p class="precio">$100.00</p>
                    </div>
                </div>
            </article>
            <article id="sensores">
                <h2>Sensores de Nivel</h2>
                <div class="productos-grid">
                    <div class="producto">
                        <img src="https://www.protek.com.py/sitio/wp-content/uploads/2021/09/combustible-1024x617.png" alt="Producto 1 de Sensores">
                        <h3>Sensor de Nivel de Combustible</h3>
                        <p>Sensor para medir el nivel de combustible en el tanque.</p>
                        <p class="precio">$35.00</p>
                    </div>
                    <div class="producto">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiFPZp8l-6zwBIoey0Dga1oU8H6gvUWrehTe08ZEXXxWLH9DhXVxr5CpsDjl0BfY1pEYQ&usqp=CAU" alt="Producto 2 de Sensores">
                        <h3>Sensor de Nivel de Aceite</h3>
                        <p>Sensor para medir el nivel de aceite en el motor.</p>
                        <p class="precio">$25.00</p>
                    </div>
                    <div class="producto">
                        <img src="https://www.flowline.com/wp-content/uploads/Transmisor-de-nivel-de-li%CC%81quido-ultraso%CC%81nico-EchoPod-UG03.png" alt="Producto 3 de Sensores">
                        <h3>Sensor de Nivel de Agua</h3>
                        <p>Sensor para medir el nivel de agua en el radiador.</p>
                        <p class="precio">$30.00</p>
                    </div>
                </div>
            </article>
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