<?php

namespace App\View\Components;

use Illuminate\View\Component;

class comment extends Component
{
    public $estrellas;
    public $valoracion;
    public $idUsuario;
    public $fecha;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($estrellas, $valoracion, $idUsuario,$fecha)
    {
        $this->estrellas = $estrellas;
        $this->valoracion = $valoracion;
        $this->idUsuario = $idUsuario;
        $this->fecha = $fecha;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.comment');
    }
}
