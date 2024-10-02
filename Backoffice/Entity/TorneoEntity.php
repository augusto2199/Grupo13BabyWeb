<?php 

class TorneoEntity
{

private $id;
private $nombre;

public function getId()
{
    return $this->id;
}

public function getNombre()
{
    return $this->nombre;
}

public function setId($value)
{
    $this->id = $value;
}

public function setNombre($value)
{
    $this->nombre = $value;
}

}

?>