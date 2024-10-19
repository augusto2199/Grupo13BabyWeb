<?php 

class UsuarioEntrenadorEntity
{

private $id;
private $experiencia;
private $equipo;

public function getId()
{
    return $this->id;
}

public function setId($value)
{
    $this->id = $value;
}

public function getExperiencia()
{
    return $this->experiencia;
}

public function setExperiencia($value)
{
    $this->experiencia = $value;
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