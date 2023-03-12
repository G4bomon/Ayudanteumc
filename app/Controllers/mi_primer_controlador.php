<?php

namespace App\Controllers;

class mi_primer_controlador extends BaseController
{
    public function index()
    {
        $data = [ 'titulo'=> 'inicio'];
        echo view('prueba/menu');
        echo view('prueba/index');
        echo view('prueba/header', $data);
        echo view('prueba/footer');
    }
    public function catalogo()
    {
        $data = [ 'titulo'=> 'catalogo'];
        
        echo view('prueba/header', $data);
        echo view('prueba/menu');
        echo view('prueba/catalogo');
        echo view('prueba/footer');
    }

}
