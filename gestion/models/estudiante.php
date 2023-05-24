<?php

namespace estudiante;

class Estudiante
{
    private $codigo;
    private $nombres;
    private $apellidos;

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($value)
    {
        $this->codigo = $value;
    }

    public function getNombres()
    {
        return $this->nombres;
    }
    public function setNombres($value)
    {
        $this->nombres = $value;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function setApellidos($value)
    {
        $this->apellidos = $value;
    }

}
