<?php

namespace dwesgram\modelo;

use dwesgram\modelo\BaseDatos;


class EstadisticaBd
{
    use BaseDatos;

    public static function mejorEntradas(): array|null
    {
        try {
            $conexion = BaseDatos::getConexion();
            $queryResultado = $conexion->query("select entrada,
                                                count(*) numeroMegusta
                                                from megusta
                                                group by entrada 
                                                order by numeroMegusta desc 
                                                limit 3");
            if ($queryResultado !== false) {
                $resultado = [];
                if ($fila = $queryResultado->fetch_assoc() !== null) {
                    $tempo = ['entrada' => $fila['entrada'], 
                              'cantidad' => $fila['count(*) numeroMegusta']];

                    array_push($tempo, $resultado);
                }
                return $resultado;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return null;
        }
    }
}
