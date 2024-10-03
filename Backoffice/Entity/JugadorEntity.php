<?php 

class JugadorEntity
{

private $id;
private $nombre;
private $apellido;
private $edad;
private $posicion;
private $numero_camiseta;  
private $equipo_nombre; 


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
    return $this->numero_camiseta;
}

public function getEquipoNombre() {
    return $this->equipo_nombre;
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
    $this->numero_camiseta = $value;
}

}

?>