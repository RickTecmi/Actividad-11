<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Importa la clase View

class PageController extends Controller
{
    /**
     * Muestra la vista de inicio.
     */
    public function inicio(): View
    {
        // Retorna la vista 'inicio.blade.php' que crearemos
        return view('inicio');
    }

    /**
     * Muestra la vista de fotos.
     */
    public function fotos(): View
    {
        // Retorna la vista 'fotos.blade.php' que crearemos
        return view('fotos');
    }

    /**
     * Muestra la vista de contacto.
     */
    public function contacto(): View
    {
        // Retorna la vista 'contacto.blade.php' que crearemos
        return view('contacto');
    }

    // Si añadiste más rutas/métodos, defínelos aquí también
    // public function blog(): View
    // {
    //     return view('blog');
    // }
}
