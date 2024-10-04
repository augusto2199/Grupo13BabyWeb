<?php 

class UsuarioJugadorEntity
{

private $id;
private $posicion;
private $numero_camiseta;
private $equipo;

public function getId()
{
    return $this->id;
}

public function setId($value)
{
    $this->id = $value;
}

public function getPosicion()
{
    return $this->posicion;
}

public function setPosicion($value)
{
    $this->posicion = $value;
}

public function getNumeroCamiseta()
{
    return $this->numero_camiseta;
}

public function setNumeroCamiseta($value)
{
    $this->numero_camiseta = $value;
}

public function getEquipo()
{
    return $this->equipo;
}

public function setEquipo($value)
{
    $this->equipo = $value;
}


}

?>