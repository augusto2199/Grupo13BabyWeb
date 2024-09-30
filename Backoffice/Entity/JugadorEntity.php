<?php 

class JugadorEntity
{

private $id;
private $nombre;
private $apellido;
private $edad;
private $posicion;
private $numeroCamiseta;
private $equipo;

public function getId()
{
    return $this->id;
}

public function getNombre()
{
    return $this->nombre;
}

public function getApellido()
{
    return $this->apellido;
}

public function getEdad()
{
    return $this->edad;
}

public function getPosicion()
{
    return $this->posicion;
}

public function getNumeroCamiseta()
{
    return $this->numeroCamiseta;
}

public function getEquipo()
{
    return $this->numeroCamiseta;
}


public function setId($value)
{
    $this->id = $value;
}

public function setNombre($value)
{
    $this->nombre = $value;
}

public function setApellido($value)
{
    $this->apellido = $value;
}

public function setEdad($value)
{
    $this->edad = $value;
}

public function setPosicion($value)
{
    $this->posicion = $value;
}

public function setNumeroCamiseta($value)
{
    $this->numeroCamiseta = $value;
}

public function setEquipo($value)
{
    $this->numeroCamiseta = $value;
}


}

?>