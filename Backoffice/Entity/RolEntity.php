<?php 

class RolEntity
{

private $id;
private $nombre;



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


}

?>