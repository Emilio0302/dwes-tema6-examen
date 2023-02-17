<?php

namespace dwesgram\controlador;

use dwesgram\modelo\EstadisticaBd;

class EstadisticaControlador extends Controlador{

    public function mejorEntradas()
    {
        $this->vista = "estadistica/mejorEntrada";
        return EstadisticaBd::mejorEntradas();
    }
}