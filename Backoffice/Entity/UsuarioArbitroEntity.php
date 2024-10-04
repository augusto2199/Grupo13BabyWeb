<?php 

class UsuarioArbitroEntity
{

private $id;
private $experiencia;


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


}

?>