<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function promotions()
    {
        return view('page.promotion');
    }

    public function reservationForm()
    {
        return view('page.reservation-form');
    }

    public function home()
    {
        // Lógica para la página de inicio
        return view('index.index'); // Asegúrate de que la vista 'inicio' exista
    }
}
