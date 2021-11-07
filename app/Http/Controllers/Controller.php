<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static $images = array("https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN1.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN2.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN3.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN4.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN5.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN6.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN7.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN8.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN9.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN10.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN11.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN12.png",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN13.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN14.jpg",
    "https://storage.googleapis.com/imagenes_taller_topicos/IMAGEN15.jpg",
    );

    public function index()
    {
        $totalImages = 15;
        $randomNumber = (rand(0,($totalImages-1)));
        $randomImage = Controller::$images[$randomNumber];
        return response("<img src=\"".$randomImage."\"alt=\"\">server_ip=>".gethostbyname(gethostname()));
    }
    
}
