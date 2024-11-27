<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYR Motors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="assets/css/contacto.css">
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
        <section class="contacto">
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
            <div class="map-wrapper">
                <h2>Ubicación</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d580.2872501823266!2d-77.04294897771261!3d-11.92652731289081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d15f46a80501%3A0x4220bbf2adfad06e!2sBEDINI%20MULTISERVICIO%20AUTOMOTRIZ!5e0!3m2!1ses!2spe!4v1722042888194!5m2!1ses!2spe" width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
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