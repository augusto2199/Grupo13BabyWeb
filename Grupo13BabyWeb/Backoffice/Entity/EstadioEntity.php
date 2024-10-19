<?php

class EstadioEntity
{

private $id;
private $nombre;
private $ubicacion;
private $capacidad;

public function getId()
{
    return $this->id;
}

public function setId($value)
{
    $this->id = $value;
}

public function getNombre()
{
    return $this->nombre;
}

public function setNombre($value)
{
    $this->nombre = $value;
}

public function getUbicacion()
{
    return $this->ubicacion;
}

public function setUbicacion($value)
{
    $this->ubicacion = $value;
}

public function getCapacidad()
{
    return $this->capacidad;
}

public function setCapacidad($value)
{
    $this->capacidad = $value;
}

}

?>