<?php

namespace App\Controllers;

class GuestController
{
    public function home()
    {
        include './src/views/guest/home.php'; // Página de inicio
    }

    public function nosotros()
    {
        include './src/views/guest/nosotros.php'; // Página "Nosotros"
    }

    public function servicios()
    {
        include './src/views/guest/servicios.php'; // Página "Servicios"
    }

    public function contacto()
    {
        include './src/views/guest/contacto.php'; // Página "Contacto"
    }
}
