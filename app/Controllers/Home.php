<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('global/header').view('global/homeCarrusel').view('global/homeCategorias') .view('global/homeProducto'). view('global/footer');
    }

    public function nosotros(): string
    {
        return view('global/header').view('global/nosotros').view('global/servicios') .view('global/marcas'). view('global/footer');
    }

    public function tienda(): string
    {
        return view('global/header').view('global/tienda') .view('global/marcas'). view('global/footer');
    }

    public function contacto(): string
    {
        return view('global/header').view('global/contacto') .view('global/footer');
    }

    public function comunidades(): string
    {
        return view('global/header').view('global/comunidades') .view('global/footer');
    }
}
