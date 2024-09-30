<?php 

class EquipoEntity
{

private $id;
private $nombre;
private $categoria;

public function getId()
{
    return $this->id;
}

public function getNombre()
{
    return $this->nombre;
}

public function getCategoria()
{
    return $this->categoria;
}

public function setId($value)
{
    $this->id = $value;
}

public function setNombre($value)
{
    $this->name = $value;
}

public function setCategoria($value)
{
    $this->categoria = $value;
}
}

?>