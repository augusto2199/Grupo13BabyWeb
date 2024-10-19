<?php 

class UsuarioJugadorEntity
{

private $id;
private $posicion;
private $numero_camiseta;
private $equipo_id;

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
    return $this->equipo_id;
}

public function setEquipo($value)
{
    $this->equipo_id = $value;
}


}

?>